<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class CustomLoginRequest extends LoginRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'token' => ['required', 'string'],
        ];
    }

    public function authenticate(): void
    {
        $token = $this->only(['token']);
        $user = User::byCustomToken($token);

        $this->ensureIsNotRateLimited();

        if (!$user) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        Auth::login($user);
        RateLimiter::clear($this->throttleKey());
    }

}
