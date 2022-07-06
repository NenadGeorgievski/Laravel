<?php


namespace App\Servies;

use App\Services\Newsletter;

class ConvertKitNewsletter implements Newsletter   {

    public function subscribe(string $email, string $list = null){
        //subscribe to ConvertKit specific API logic
    }

}