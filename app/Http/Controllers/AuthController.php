<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(Request $request)
    {
        if ($request->session()->get('admin_authenticated')) {
            return redirect()->route('admin.dashboard');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8'],
            'remember' => ['nullable', 'boolean'],
        ]);

        $expectedEmail = env('ADMIN_EMAIL', 'laudan@black.com');
        $expectedPassword = env('ADMIN_PASSWORD', 'admin12345');

        if (
            $credentials['email'] !== $expectedEmail ||
            ! hash_equals($expectedPassword, $credentials['password'])
        ) {
            return back()
                ->withErrors(['email' => 'Email atau password tidak valid.'])
                ->withInput($request->except('password'));
        }

        $request->session()->regenerate();
        $request->session()->put('admin_authenticated', true);
        $request->session()->put('admin_email', $credentials['email']);
        $request->session()->put('admin_remember', (bool) ($credentials['remember'] ?? false));

        return redirect()->route('admin.dashboard')->with('success', 'Login berhasil.');
    }

    public function dashboard(Request $request)
    {
        if (! $request->session()->get('admin_authenticated')) {
            return redirect()->route('admin.login')->withErrors([
                'email' => 'Silakan login terlebih dahulu.',
            ]);
        }

        return view('auth.dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['admin_authenticated', 'admin_email', 'admin_remember']);
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
