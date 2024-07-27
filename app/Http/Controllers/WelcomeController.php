<?php

namespace App\Http\Controllers;

use App\Events\NewContentNotification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function testNotif() {
        event(new NewContentNotification('Latihan Pusher'));
    }
}
