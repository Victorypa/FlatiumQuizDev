<?php

namespace App\Http\Controllers\Form;

use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Amo\Contact\ContactCreate;
use App\Services\Amo\Leads\LeadCreate;
use App\Services\Amo\Crud;
use App\Services\Amo\Auth\Auth;

class FormController extends Controller
{
    public function index()
    {
        return view('forms.index');
    }

    public function store(Request $request)
    {
        $person = Card::where('id', $request->card_id)->first()->people()->create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        $pipelineId = 1572109;

        // (new Crud($this->client, $person, $pipelineId))->create();
        (new Auth($this->client))->login();

        $contact = (new ContactCreate($this->client))->create([
            'name' => $person->name,
            'email' => $person->name,
            'phone' => $person->phone
        ]);

        // if (!empty($contact)) {
        //     (new LeadCreate($this->client))->create([
        //         'name' => $person->name,
        //         'tags' => $person->card->result,
        //         'pipeline_id' => 1572109,
        //         'contacts_id' => $contact->id,
        //         'responsible_user_id' => 2211916
        //     ]);
        // }
    }
}
