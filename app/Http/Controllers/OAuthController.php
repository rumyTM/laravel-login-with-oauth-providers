<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class OAuthController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $providerUser = Socialite::driver($provider)->user();

        $user = User::where('provider', $provider)->where('provider_id', $providerUser->getId())->first();

        if ($user) {
            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        } else {
            session([
                'provider' => encrypt($provider),
                'provider_id' => encrypt($providerUser->getId()),
                'name' => encrypt($providerUser->getName()),
                'email' => encrypt($providerUser->getEmail())
            ]);

            return redirect('register/oauth');
        }
    }
}
