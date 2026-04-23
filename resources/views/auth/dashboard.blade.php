@extends('layouts.auth')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="min-h-screen bg-slate-100 p-6 dark:bg-slate-950">
        <div class="mx-auto max-w-5xl rounded-2xl bg-white p-8 shadow-xl dark:bg-slate-900">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-black text-slate-900 dark:text-white">Dashboard Admin</h1>
                    <p class="mt-2 text-slate-600 dark:text-slate-300">Selamat datang, {{ session('admin_email') }}.</p>
                </div>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="rounded-xl bg-red-500 px-5 py-2.5 font-semibold text-white transition hover:bg-red-600">Logout</button>
                </form>
            </div>
            <div class="mt-8 rounded-xl border border-dashed border-slate-300 p-8 text-slate-500 dark:border-slate-700">
                Ini adalah stub halaman dashboard admin.
            </div>
        </div>
    </div>
@endsection
