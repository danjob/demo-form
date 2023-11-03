<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // setup validationƒ
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'tos' => 'required',
            // 'salutation' => 'required',
            // 'inquiry' => 'required|digits_between:1,3',
            // 'description' => 'required_if:inquiry,2',
        ]);

        // create user
        $user = User::create($request->all());

        // send mail
        Mail::raw('User registered successfully.', function ($message) use ($user) {
            $message
                ->to($user->email)
                ->subject('New user');
        });

        // on success
        return view('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
