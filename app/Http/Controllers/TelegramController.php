<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\TelegramUser;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function saveUser(Request $request)
    {
        // Validate the incoming request data
        // $validatedData = $request->validate([
        //     'id' => 'required|integer',
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'nullable|string|max:255',
        //     'username' => 'nullable|string|max:255',
        // ]);

        // Save or update the Telegram user in the database
        TelegramUser::updateOrCreate(
            ['telegram_id' => $request->input('id')],  // Use $request->input() for accessing request data
            [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'username' => $request->input('username'),
            ]
        );
        

        return response()->json(['message' => 'User data saved successfully']);
    }
}
