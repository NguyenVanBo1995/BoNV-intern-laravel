<?php

namespace App\Http\Controllers;

use App\Model\Customer;
use Validator;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function save(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $birthday  = $request->input('date');
        $party_number = $request->input('party-number');
        $rule = [
            'name'=> 'required|max:255',
            'email'=>'required|email',
            'party-number'=> 'required',
        ];
        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        if(!empty($name) && ! empty($email) && ! empty($party_number)){
            $customer  = new Customer();
            $customer->name = $name;
            $customer->email = $email;
            $customer->birthday = $birthday;
            $customer->number = $party_number;
            $customer->save();
        }
        return back()->with('bookStatus', 'success');
    }
}
