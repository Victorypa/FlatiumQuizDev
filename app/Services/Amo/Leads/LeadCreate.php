<?php

namespace App\Services\Amo\Leads;

use App\Services\Amo\ServiceAbstract;

class LeadCreate extends ServiceAbstract
{
    public function create($data = [], $pipeline_id = 1587214, $contact_id)
    {
        dd($data, $pipeline_id, $contact_id);
        // $lead['add'] = array(
        //     array(
        //         'name' => $data['name'],
        //         'tags' => $data['tags'],
        //         'sale' => $data['sale'],
        //         'pipeline_id' => $pipeline_id,
        //         'responsible_user_id' => 2211916,
        //         'tags' => $data['tags'],
        //         'custom_fields' => array(
        //             array(
        //                 'id' => 549969,
        //                 'values' => array(
        //                     array(
        //                         'value' => $data['custom_fields']['square']
        //                     )
        //                 )
        //             ),
        //             array(
        //                 'id' => 565041,
        //                 'values' => array(
        //                     array(
        //                         'value' => $data['custom_fields']['remont_id']
        //                     )
        //                 )
        //             )
        //         )
        //     )
        // );
        //
        //
        // dd($lead);

    }
}
