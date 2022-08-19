<?php

namespace App\Http\Controllers;

use App\Models\newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newsletter(Request  $request)
    {
        $input=$request->all();
        $validator=Validator::make($input,[
            'email' => ['required', 'string', 'email', 'max:30', 'unique:newsletters'],
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error',$validator->errors()->all());
        }

        newsletter::create([
            'email' => $request->input('email')
        ]);

        return redirect()->back()->with('success_subscribed','You have successfully subscribed to our newsletter');


    }

}
