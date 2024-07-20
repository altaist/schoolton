<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }

    /**
     * Handle custom registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeCustom(Request $request)
    {
        $request->validate([
            'name' => 'string|max:255',
            'email' => 'string|lowercase|email|max:255|unique:'.User::class,
            'social_id' => 'string',
            'social_type' => 'string',
            'auth_token' => 'required|string',
        ]);

        $user = User::create([
            'name' => $request->name ?? 'auto_user',
            'email' => $request->email ?? $request->auth_token . "@",
            'auth_token' => $request->auth_token,
            'social_id' => $request->social_id,
            'social_type' => $request->social_type,
            'password' => Hash::make(Str::random(9)),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return response()->json(['user' => $user]);
    }
}
