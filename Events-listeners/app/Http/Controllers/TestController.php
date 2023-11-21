<?php

namespace App\Http\Controllers;
use App\Events\TestEvent;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        event(new TestEvent('Richa'));
        return 'Hooray!!! You have fired your Event successfully';
    }
}
