<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class ScrapperController extends Controller
{
    private $results = array();

    public function scrapper(){

        $client = new Client();
        $url = "https://edition.cnn.com/europe";
        $page = $client->request('GET',$url);


        $page->filter('.container__headline')->each(function ($node){

            dump($node->text());
        });

    }
    
}
