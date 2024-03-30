<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    //

    public function create(){
            // dd(request('email'));

    request()->validate(['email' => 'required|email']);

    // dd('dd');

    $mail = new \MailchimpMarketing\ApiClient();
    $mail->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us22'
    ]);

 
    // $response = $mail->ping->get();
    try{
        $response= $mail->lists->getList('83a66c8e8f');
        $response= $mail->lists->addListMember('83a66c8e8f',[
        'email_address'=>request('email'),
        'status'=>'subscribed'
    ]);
    }catch(\Exception $e){
        throw \Illuminate\Validation\ValidationException::withMessages([
            'email'=>'This could be not added as email'
        ]);
        
    }
    return redirect('/')->with('success','You are now singed up for updates!');
    }
}
