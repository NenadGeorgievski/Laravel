<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;



class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter) {

        request()->validate(['email' => 'email|required']);    
    

        try {
        
            $newsletter->subscribe(request('email'));
        
        } catch(\Exception $e) {
        
            throw \Illuminate\Validation\ValidationException::withMessages([
        
                'email' => 'This email could not be added to our newsletter.'
            ]);
        }
         
        
        return redirect('/')->with('success', 'You have successfully signed up for our newsletter.');

    }
}
