<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{

    public function showServiceProviderTest()
    {
        $encrypt = app()->make('encrypter');
        $password = $encrypt->encrypt('password');
        
        $sample = app()->make('sampleService');
        dd($sample, $password, $encrypt->decrypt($password));
    }

    public function lifeCycleTest()
    {
        app()->bind('lifeCycleTest', function(){
            return 'test';
        });

        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->run();

        $test = app()->make('lifeCycleTest');
        dd($test, app());
    }
}

class Sample
{
    public $message;
    public function __construct(Message $message) {
        $this->message = $message;
    }
    public function run()
    {
        $this->message->send();
    }

}

class Message
{
    public function send()
    {
        echo('message');
    }
}
