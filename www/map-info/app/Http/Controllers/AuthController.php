<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Providers\RouteServiceProvider;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function __construct(
        protected UserService $userService,
    ) {
    }

    public function getPageRegistration(): View
    {
        return view('registration');
    }

    public function registration(CreateUserRequest $request): RedirectResponse
    {
        $user = $this->userService->createUser($request->dto($request->validated()));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function getPageLogin(): View
    {
        return view('login');
    }

    public function login(LoginUserRequest $request): RedirectResponse
    {
        $credentials = $request->dto($request->validated());

        $isAuth = Auth::attempt([
            'email' => $credentials->email,
            'password' => $credentials->password,
        ], $credentials->is_remember);

        if ($isAuth) {
            $request->session()->regenerate();

            return redirect(RouteServiceProvider::HOME);
        }

        return back()->withErrors([
            'failed' => __('auth.failed'),
        ]);
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect(RouteServiceProvider::HOME);
    }
}
