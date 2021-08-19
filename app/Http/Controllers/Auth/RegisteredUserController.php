<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        session()->forget(['provider', 'provider_id', 'name', 'email']);
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $provider = $provider_id = null;

        if (session()->has('provider') && session()->has('provider_id')) {
            $provider = decrypt(session('provider'));
            $provider_id = decrypt(session('provider_id'));
            session()->forget(['provider', 'provider_id', 'name', 'email']);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'provider' => $provider,
            'provider_id' => $provider_id,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the registration with provider view.
     *
     * @return \Illuminate\View\View
     */
    public function registerWithProvider()
    {
        if (session()->has('provider') && session()->has('provider_id')) {
            $name = decrypt(session('name'));
            $email = decrypt(session('email'));

            return view('auth.register', compact('name', 'email'));
        }

        return abort(404);
    }
}
