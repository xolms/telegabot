<?php

namespace App\Http\Controllers\Bot;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Telegram\Bot\Laravel\Facades\Telegram;

class MainController extends Controller
{
    public function index() {
        $telegram = Telegram::getWebhookUpdates();

    }
}
