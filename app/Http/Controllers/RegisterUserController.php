<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $userAttributes = request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        request()->validate([
            'employer' => ['required', 'string'],
            'logo' => ['required', 'image'],
        ]);

        $user = User::create($userAttributes);

        $logoPath = request()->logo->store('logos');

        $user->employer()->create([
            'name' => request('employer'),
            'logo' => $logoPath,
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
