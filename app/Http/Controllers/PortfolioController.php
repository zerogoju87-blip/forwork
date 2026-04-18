<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function projects()
    {
        $projects = [
            [
                'title' => 'E-commerce System',
                'description' => 'Cart, checkout, inventory system',
            ],
            [
                'title' => 'Order Management System',
                'description' => 'Admin panel with status tracking',
            ],
        ];

        return view('projects', compact('projects'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        return back()->with('success', 'Message sent successfully!');
    }
}