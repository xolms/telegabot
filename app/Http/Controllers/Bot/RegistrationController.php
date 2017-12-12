<?php

namespace App\Http\Controllers\Bot;

use App\Console\Commands\BotComand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Telegram\Bot\Laravel\Facades\Telegram;

class RegistrationController extends Controller
{
    public function reg() {
        $upd = Telegram::getUpdates();
        dd($upd);
    }
}
