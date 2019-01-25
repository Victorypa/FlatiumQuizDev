<?php

namespace App\Http\Controllers\Form;

use Exception;
use GuzzleHttp\Client;
use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    protected $client;

    protected $token = '927a17dd6d264d99c1970535eda5ebf7';

    protected $email = 'ilya.gavrilov@flatium.ru';

    public function __construct()
    {
        $this->client = new Client([
            'cookies' => true
        ]);
    }

    public function index(Card $card)
    {
        return view('forms.index');
    }

    public function store(Card $card, Request $request)
    {
        $person = $card->people()->create($request->all());
        $this->auth($person);
    }

    protected function auth($person)
    {
        $link= 'https://flatium.amocrm.ru/private/api/auth.php?type=json';

        $user=array(
            'USER_LOGIN'=>$this->email, #Your login (email)
            'USER_HASH'=>$this->token #Hash for API access (see user profile)
        );


        $curl=curl_init();
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
        curl_setopt($curl,CURLOPT_URL,$link);
        curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
        curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($user));
        curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
        curl_setopt($curl,CURLOPT_HEADER,false);
        curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
        $out=curl_exec($curl); #Initiate a request to the API and store the response in a variable
        $code=curl_getinfo($curl,CURLINFO_HTTP_CODE); #Get HTTP response code of the server
        curl_close($curl); #End the cURL session

        $this->create($person);
    }

    protected function create($person)
    {
        $link= 'https://flatium.amocrm.ru/api/v2/leads';

        $leads['add'] = array(
            array(
                'name' => $person->email . '  ' . $person->name,
                'pipeline_id' => 1572109
            )
        );

        $curl=curl_init(); #Save the cURL session descriptor
        #Set the necessary parameters for the cURL session
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
        curl_setopt($curl,CURLOPT_URL,$link);
        curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
        curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($leads));
        curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
        curl_setopt($curl,CURLOPT_HEADER,false);
        curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
        $out=curl_exec($curl); #Initiate a request to the API and save the response to a variable
        $code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
        /* Now we can process the response received from the server. This is an example. You can process the data in your own way. */
        $code=(int)$code;

        $errors=array(
              301=>'Moved permanently',
              400=>'Bad request',
              401=>'Unauthorized',
              403=>'Forbidden',
              404=>'Not found',
              500=>'Internal server error',
              502=>'Bad gateway',
              503=>'Service unavailable'
         );

         try
{
  #If the response code is not 200 or 204, we return an error message
 if($code!=200 && $code!=204) {
    throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error',$code);
  }
}
catch(Exception $E)
{
  die('Error: '.$E->getMessage().PHP_EOL.'Error code: '.$E->getCode());
}
    }
}
