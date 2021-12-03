<?php

namespace App\Http\Controllers;

use App\UsersInfo;
use App\AddressesInfo;
use Illuminate\Http\Request;

class FormController extends Controller
{



    public function form_contr()
    { 
        return view('home');
    }

    public function get_info(Request $request)
    {   

        $connection_form = new UsersInfo();   

        $connection_form->full_name = $request->input('first_name');
        $connection_form->last_name = $request->input('last_name');
        $connection_form->phone_number = $request->input('phone_number');
        $connection_form->email = $request->input('email');

        $connection_form->save();


        $connection_form_addresses = new AddressesInfo();

        $connection_form_addresses->addresses = $request->input('street_address');
        $connection_form_addresses->addresses2 = $request->input('street_address_2');
        $connection_form_addresses->city = $request->input('city');
        $connection_form_addresses->state_province = $request->input('state_province');
        $connection_form_addresses->postal__zipcode = $request->input('postal_zipcode');


        $connection_form_addresses->save();

        return redirect('/welcome');
    }

    public function get_dbinfo(Request $request2){
    
        $my_data = new UsersInfo;

        return view('/welcome' , ['my_data' => $my_data->all()]);
            
    }
}
