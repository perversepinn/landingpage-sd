@extends('layouts.auth')

@section('title', 'Login Admin | SD Cendekia Bangsa')

@section('content')
    <div class="fade-in-page min-h-screen lg:grid lg:grid-cols-5">
        <aside class="relative overflow-hidden bg-linear-to-br from-blue-900 via-indigo-900 to-slate-900 px-8 py-12 text-white lg:col-span-2 lg:p-12">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,rgba(255,255,255,.2)_1px,transparent_0)] bg-size-[26px_26px] opacity-20"></div>
            <div class="relative z-10">
                <div class="inline-flex h-16 w-16 items-center justify-center rounded-2xl bg-white/20 backdrop-blur-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 3l8 4v6c0 5-3.4 7.8-8 8-4.6-.2-8-3-8-8V7l8-4z" />
                    </svg>
                </div>
                <h1 class="mt-8 text-4xl font-black">SD Cendekia Bangsa</h1>
                <p class="mt-4 max-w-md text-blue-100">"Pendidikan terbaik hari ini adalah investasi terbesar untuk masa depan bangsa."</p>
            </div>
        </aside>

        <main class="flex items-center justify-center px-4 py-10 lg:col-span-3 lg:px-10">
            <div class="w-full max-w-md rounded-2xl bg-white p-10 shadow-xl dark:bg-slate-900">
                <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Selamat Datang Admin</h2>
                <p class="mt-2 text-slate-500">Masuk ke Panel Manajemen Sekolah</p>

                <form method="POST" action="{{ route('admin.login.submit') }}" class="mt-8 space-y-4" id="login-form">
                    @csrf
                    <div>
                        <label for="email" class="mb-2 block text-sm font-semibold">Email</label>
                        <div class="relative">
                            <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 12H8m0 0l-3-3m3 3l-3 3m13 4H7a2 2 0 01-2-2V7a2 2 0 012-2h10a2 2 0 012 2v10a2 2 0 01-2 2z" />
                                </svg>
                            </span>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required class="w-full rounded-xl border border-slate-300 py-3 pl-11 pr-4 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-500/30 dark:border-slate-700 dark:bg-slate-950">
                        </div>
                        @error('email')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="password" class="mb-2 block text-sm font-semibold">Password</label>
                        <div class="relative">
                            <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 15v2m-6 0h12a2 2 0 002-2v-5a2 2 0 00-2-2h-1V7a5 5 0 00-10 0v1H6a2 2 0 00-2 2v5a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <input id="password" type="password" name="password" required minlength="8" class="w-full rounded-xl border border-slate-300 py-3 pl-11 pr-12 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-500/30 dark:border-slate-700 dark:bg-slate-950">
                            <button id="toggle-password" type="button" class="absolute inset-y-0 right-3 text-slate-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7S3.732 16.057 2.458 12z" />
                                </svg>
                            </button>
                        </div>
                        @error('password')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                    </div>

                    <label class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300">
                        <input type="checkbox" name="remember" value="1" class="h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                        Ingat Saya
                    </label>

                    <button id="submit-btn" type="submit" class="flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 py-3 font-bold text-white transition duration-300 hover:bg-blue-700">
                        <svg id="loading-spinner" class="hidden h-5 w-5 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-20" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-90" fill="currentColor" d="M4 12a8 8 0 018-8v4l3-3-3-3v4a10 10 0 00-10 10h2z"></path>
                        </svg>
                        <span>Masuk</span>
                    </button>
                </form>

                <a href="{{ route('home') }}" class="mt-6 inline-flex text-sm font-semibold text-blue-600 hover:text-blue-700">Kembali ke Beranda</a>
            </div>
        </main>
    </div>

    <script>
        document.getElementById('toggle-password').addEventListener('click', () => {
            const input = document.getElementById('password');
            input.type = input.type === 'password' ? 'text' : 'password';
        });

        document.getElementById('login-form').addEventListener('submit', () => {
            document.getElementById('submit-btn').setAttribute('disabled', 'disabled');
            document.getElementById('loading-spinner').classList.remove('hidden');
        });
    </script>
@endsection
