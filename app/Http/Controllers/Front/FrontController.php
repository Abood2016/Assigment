<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Document;
use App\Models\Portfolio;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'desc')->get();
        return view('front.layouts.app')->with(['portfolios' => $portfolios]);
    }


    public function show($id)
    {
        $portfolio = Portfolio::find($id);
        return view('front.portfolio.show', compact('portfolio'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $contact =   Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        if ($contact) {
            return redirect()->route('contactPage')->with('success', 'Message Sent Success');
        }
    }

    public function portflioPage()
    {
        $portfolios = Portfolio::orderBy('id', 'desc')->get();
        return view('front.sections.protfolio-section')->with(['portfolios' => $portfolios]);
    }

    public function aboutPage()
    {
        return view('front.sections.about');
    }

    public function contactPage()
    {
        return view('front.sections.contact');
    }


    public function register(Request $request)
    {
        return view('front.sections.register');
        
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required|min:3',
        ]);
        $user =  User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => $request->password,
        ]);

        if ($user) {
            return redirect()->route('register-user')->with('success', 'Registerd Success');
        }
    }
}
