@extends('layouts.auth')

@section('title', 'Dashboard Admin')
@php
    $tab = $tab ?? 'fasilitas';
@endphp
@section('content')
<div class="min-h-screen bg-slate-100 p-6 dark:bg-slate-950">
    <div class="mx-auto max-w-6xl rounded-2xl bg-white p-8 shadow-xl dark:bg-slate-900">
@if(session('success'))
    <div class="bg-green-500 text-white p-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
        {{-- HEADER --}}
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl font-black text-slate-900 dark:text-white">Dashboard Admin</h1>
                <p class="mt-2 text-slate-600 dark:text-slate-300">
                    Selamat datang, {{ session('admin_email') }}
                </p>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button class="rounded-xl bg-red-500 px-5 py-2 text-white">Logout</button>
            </form>
        </div>

        {{-- NAV TAB --}}
        <div class="mt-8 flex gap-4 border-b pb-3">
            <a href="?tab=fasilitas" class="font-semibold {{ ($tab ?? '')=='fasilitas' ? 'text-blue-500' : '' }}">Fasilitas</a>
            <a href="?tab=pengumuman" class="font-semibold {{ ($tab ?? '')=='pengumuman' ? 'text-blue-500' : '' }}">Pengumuman</a>
            <a href="?tab=galeri" class="font-semibold {{ ($tab ?? '')=='galeri' ? 'text-blue-500' : '' }}">Galeri</a>
            <a href="?tab=kontak" class="font-semibold {{ ($tab ?? '')=='kontak' ? 'text-blue-500' : '' }}">Kontak</a>
        </div>

        {{-- CONTENT --}}
        <div class="mt-6">

{{-- ================= FASILITAS ================= --}}
@if($tab == 'fasilitas')

    {{-- FORM TAMBAH --}}
    <form method="POST" action="{{ route('facility.store') }}" enctype="multipart/form-data" class="mb-6 space-y-3">
        @csrf

        <input name="nama" required placeholder="Nama fasilitas"
            class="w-full border p-2 rounded">

        <textarea name="deskripsi" required placeholder="Deskripsi"
            class="w-full border p-2 rounded"></textarea>

        <label class="text-sm">Upload Gambar</label>
        <input type="file" name="image" accept="image/*"
            class="w-full border p-2 rounded">

        <button class="bg-blue-500 text-white px-4 py-2 rounded">
            Tambah
        </button>
    </form>

    {{-- LIST DATA --}}
    @forelse($facilities as $f)
        <div class="border p-3 rounded mb-4">

            {{-- PREVIEW GAMBAR --}}
            @if($f->image)
                <img src="{{ asset('storage/'.$f->image) }}"
                     class="w-40 h-28 object-cover rounded mb-2">
            @endif

            {{-- FORM UPDATE --}}
            <form method="POST" action="{{ route('facility.update', $f->id) }}" enctype="multipart/form-data" class="space-y-2">
                @csrf
                @method('PUT')

                <input name="nama" value="{{ $f->nama }}"
                    class="w-full border p-2 rounded">

                <textarea name="deskripsi"
                    class="w-full border p-2 rounded">{{ $f->deskripsi }}</textarea>

                <label class="text-sm">Ganti Gambar</label>
                <input type="file" name="image" accept="image/*"
                    class="w-full border p-2 rounded">

                <button class="bg-yellow-500 text-white px-3 py-1 rounded">
                    Update
                </button>
            </form>

            {{-- DELETE --}}
            <form method="POST" action="{{ route('facility.delete', $f->id) }}" class="mt-2">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 text-white px-3 py-1 rounded">
                    Hapus
                </button>
            </form>

        </div>
    @empty
        <p>Tidak ada fasilitas</p>
    @endforelse

@endif


            {{-- ================= PENGUMUMAN ================= --}}
            @if($tab == 'pengumuman')

                <form method="POST" action="{{ route('announcement.store') }}" class="mb-6 space-y-3">
    @csrf

    <input name="judul" required placeholder="Judul" class="w-full border p-2 rounded">

    <select name="badge" class="w-full border p-2 rounded" required>
        <option value="">Pilih Jenis Pengumuman</option>
        <option value="Libur">Libur</option>
        <option value="Ujian">Ujian</option>
        <option value="Kegiatan">Kegiatan</option>
        <option value="Penting">Penting</option>
    </select>

    <textarea name="isi" required placeholder="Isi pengumuman" class="w-full border p-2 rounded"></textarea>

    <input type="date" name="tanggal" required class="w-full border p-2 rounded">

    <button class="bg-green-500 text-white px-4 py-2 rounded">Tambah</button>
</form>

                @forelse($announcements as $a)
<div class="border p-3 rounded mb-2">
    <form method="POST" action="{{ route('announcement.update', $a->id) }}" class="space-y-2">
        @csrf
        @method('PUT')

        <input name="judul" value="{{ $a->judul }}" class="w-full border p-2 rounded">

        <select name="badge" class="w-full border p-2 rounded">
            <option value="Libur" {{ $a->badge=='Libur'?'selected':'' }}>Libur</option>
            <option value="Ujian" {{ $a->badge=='Ujian'?'selected':'' }}>Ujian</option>
            <option value="Kegiatan" {{ $a->badge=='Kegiatan'?'selected':'' }}>Kegiatan</option>
            <option value="Penting" {{ $a->badge=='Penting'?'selected':'' }}>Penting</option>
        </select>

        <textarea name="isi" class="w-full border p-2 rounded">{{ $a->isi }}</textarea>

        <input type="date" name="tanggal" value="{{ $a->tanggal }}" class="w-full border p-2 rounded">

        <div class="flex gap-2">
            <button class="bg-yellow-500 text-white px-3 py-1 rounded">Update</button>
    </form>

    <form method="POST" action="{{ route('announcement.delete', $a->id) }}">
        @csrf
        @method('DELETE')
        <button class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
    </form>
        </div>
</div>
                @empty
                    <p>Tidak ada pengumuman</p>
                @endforelse

            @endif


            {{-- ================= GALERI ================= --}}
            @if($tab == 'galeri')

                <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data" class="mb-6 space-y-3">
                    @csrf
                    <input type="file" name="image" required class="w-full">
                    <button class="bg-purple-500 text-white px-4 py-2 rounded">Upload</button>
                </form>

               <div class="grid grid-cols-3 gap-3">
@foreach($galleries as $g)
    <div>
        <img src="{{ asset('storage/'.$g->image) }}" class="rounded mb-2">

        <form method="POST" action="{{ route('gallery.delete', $g->id) }}">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 text-white px-2 py-1 rounded w-full">Hapus</button>
        </form>
    </div>
@endforeach
</div>

            @endif


            {{-- ================= KONTAK ================= --}}
            @if($tab == 'kontak')

                <form method="POST" action="{{ route('contact.update') }}" class="space-y-3">
                    @csrf
                    <input name="alamat" value="{{ optional($contact)->alamat }}" placeholder="Alamat" class="w-full border p-2 rounded">
                    <input name="telepon" value="{{ optional($contact)->telepon }}" placeholder="Telepon" class="w-full border p-2 rounded">
                    <input name="email" value="{{ optional($contact)->email }}" placeholder="Email" class="w-full border p-2 rounded">
                    <input name="jam_operasional" value="{{ optional($contact)->jam_operasional }}" placeholder="Jam Operasional" class="w-full border p-2 rounded">
                    <button class="bg-orange-500 text-white px-4 py-2 rounded">Simpan</button>
                </form>

            @endif

        </div>
    </div>
</div>
@endsection