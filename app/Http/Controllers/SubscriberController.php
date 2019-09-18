<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use App\Mail\Subscribed;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    public function create(Request $request) {
    	$validatedData = $request->validate([
	        'email' => 'required'
	    ]);

    	$obj = Subscriber::where('email', $request->input('email'))->get();
    	if($obj->count() > 0) {
    		return redirect()->back()->with('success', 'Your subscription has been added already.');
    	}
	    $subscribe = new Subscriber();
	    $subscribe->name = $request->input('name');
		$subscribe->email = $request->input('email');
		$token_id = sha1(mt_rand(112323, 34345345345));
		$subscribe->token_id = $token_id;
		$subscribe->isVerified = 0;
		$subscribe->save();
		
		$obj = array(
			
			'sender' => 'newsletter@apoxy.in',
			
		);
		
	    Mail::to($request->input('email'))->send(new Subscribed($obj, $token_id));

		return redirect()->back()->with('success', 'Your subscription has been added successfully.');
    }

    public function verify(Request $request)
    {
    	if(!$request->input('token')) {
           return redirect('./');
        }
    	Subscriber::where('token_id', $request->input('token'))
            ->update(['isVerified' => '1']);
    	
    	return redirect('./');
    }

}