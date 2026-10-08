<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = config('projects');
        return view('portfolio', compact('projects'));
    }

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|min:10|max:3000',
        ]);

        Mail::to('steviewamba14@gmail.com')->send(new ContactMessage($validated));

        return back()->with('success', 'Message sent successfully. I will get back to you shortly.');
    }
}
