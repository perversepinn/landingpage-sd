<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Announcement;
use App\Models\Gallery;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $tab = $request->get('tab', 'fasilitas');

        return view('auth.dashboard', [
            'tab' => $tab,
            'facilities' => Facility::all(),
            'announcements' => Announcement::all(),
            'galleries' => Gallery::all(),
            'contact' => Contact::first(),
        ]);
    }

    public function storeFacility(Request $request)
{
    Facility::create($request->only('nama', 'deskripsi'));
    return back()->with('success', 'Fasilitas berhasil ditambah')->with('tab', 'fasilitas');
}

public function storeAnnouncement(Request $request)
{
    $map = [
        'Libur' => 'bg-blue-500',
        'Ujian' => 'bg-green-500',
        'Kegiatan' => 'bg-purple-500',
        'Penting' => 'bg-red-500',
    ];

    Announcement::create([
        'judul' => $request->judul,
        'badge' => $request->badge,
        'isi' => $request->isi,
        'warna' => $map[$request->badge] ?? 'bg-gray-500',
        'tanggal' => $request->tanggal,
    ]);
    return back()->with('success', 'Pengumuman berhasil ditambah')->with('tab', 'pengumuman');
}

public function storeGallery(Request $request)
{
    $path = $request->file('image')->store('gallery', 'public');

    Gallery::create([
        'image' => $path
    ]);

    return back()->with('success', 'Gambar berhasil diupload')->with('tab', 'galeri');
}

public function updateContact(Request $request)
{
    Contact::updateOrCreate(
        ['id' => 1],
        $request->only('alamat', 'telepon', 'email', 'jam_operasional')
    );

    return back()->with('success', 'Kontak berhasil disimpan')->with('tab', 'kontak');
}

public function updateFacility(Request $request, $id)
{
    $f = Facility::findOrFail($id);
    $f->update($request->only('nama', 'deskripsi'));

    return back()->with('success', 'Fasilitas diupdate')->with('tab', 'fasilitas');
}

public function deleteFacility($id)
{
    Facility::findOrFail($id)->delete();

    return back()->with('success', 'Fasilitas dihapus')->with('tab', 'fasilitas');
}


public function updateAnnouncement(Request $request, $id)
{
    $map = [
        'Libur' => 'bg-blue-500',
        'Ujian' => 'bg-green-500',
        'Kegiatan' => 'bg-purple-500',
        'Penting' => 'bg-red-500',
    ];

    $a = Announcement::findOrFail($id);
    $a->update([
        'judul' => $request->judul,
        'badge' => $request->badge,
        'isi' => $request->isi,
        'warna' => $map[$request->badge] ?? 'bg-gray-500',
        'tanggal' => $request->tanggal,
    ]);

    return back()->with('success', 'Pengumuman diupdate')->with('tab', 'pengumuman');
}

public function deleteAnnouncement($id)
{
    Announcement::findOrFail($id)->delete();

    return back()->with('success', 'Pengumuman dihapus')->with('tab', 'pengumuman');
}

public function deleteGallery($id)
{
    $g = Gallery::findOrFail($id);

    // hapus file juga
    \Storage::disk('public')->delete($g->image);

    $g->delete();

    return back()->with('success', 'Gambar dihapus')->with('tab', 'galeri');
}

}

