@extends('layouts.app')

@section('title', 'SDN LENTENG BARAT 1')

@section('content')
    <section id="beranda" class="relative flex min-h-screen items-center overflow-hidden pt-24">
        <img src="{{ asset('images/WhatsApp Image 2026-04-28 at 08.39.26.jpeg') }}" alt="SDN LENTENG BARAT I" class="absolute inset-0 w-full h-screen object-cover scale-100 object-[10%_90%] opacity-50" />
        <div class="absolute inset-0 bg-linear-to-r from-slate-950/95 via-slate-900/90 to-blue-900/85"></div>
        <div class="pointer-events-none absolute -top-24 left-10 h-72 w-72 rounded-full bg-blue-500/20 blur-3xl"></div>
        <div class="pointer-events-none absolute bottom-10 right-10 h-72 w-72 rounded-full bg-emerald-400/20 blur-3xl"></div>

        <div class="relative mx-auto grid max-w-7xl gap-10 px-4 py-20 sm:px-6 lg:grid-cols-12 lg:px-8">
            <div class="lg:col-span-8">
                <p class="mb-4 inline-flex rounded-full border border-blue-300/40 bg-white/10 px-4 py-2 text-sm font-medium text-blue-100 backdrop-blur-md" data-aos="fade-up">Sekolah Dasar Berbasis Karakter & Teknologi</p>
                <h1 class="text-5xl font-black leading-tight text-white sm:text-6xl xl:text-7xl" data-aos="fade-up" data-aos-delay="100">
                    SDN LENTENG BARAT I
                </h1>
                <p class="mt-6 max-w-2xl text-lg text-blue-100" data-aos="fade-up" data-aos-delay="200">
                    Mewujudkan Generasi Berkarakter, Cerdas, dan Berakhlak Mulia.
                </p>
                <div class="mt-10 flex flex-wrap gap-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#tentang" class="rounded-xl bg-brand-electric px-7 py-3 font-semibold text-white transition duration-300 hover:scale-105 hover:bg-blue-500">Pelajari Lebih Lanjut</a>
                    <a href="#galeri" class="rounded-xl border border-white px-7 py-3 font-semibold text-white transition duration-300 hover:scale-105 hover:bg-white hover:text-slate-900">Lihat Galeri</a>
                </div>
            </div>
        </div>

        <a href="#tentang" class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 9l-7 7-7-7" />
            </svg>
        </a>
    </section>

    <section id="tentang" class="relative bg-white px-4 py-24 dark:bg-slate-950 sm:px-6 lg:px-8">
        <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-5">
            <div class="lg:col-span-3" data-aos="fade-right">
                <h2 class="text-4xl font-black text-brand-navy dark:text-white sm:text-5xl">Tentang Sekolah Kami</h2>
                <p class="mt-6 text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                    SDN Lenteng Barat 1 merupakan sekolah dasar yang berkomitmen dalam membentuk peserta didik yang beriman, berkarakter, dan berprestasi. Dengan mengintegrasikan nilai-nilai agama, budaya luhur, serta pembelajaran yang aktif dan inovatif, sekolah ini berupaya menciptakan lingkungan pendidikan yang kondusif, inspiratif, dan relevan dengan perkembangan zaman.
Kami tidak hanya fokus pada pencapaian akademik, tetapi juga pada pengembangan sikap, keterampilan, serta kemampuan berpikir kritis peserta didik agar siap menghadapi tantangan global di masa depan.
                </p>
                <div class="mt-8 space-y-4">
                    <blockquote class="border-l-4 border-brand-electric bg-blue-50 p-4 text-slate-700 dark:bg-slate-900 dark:text-slate-200">
                        <span class="font-bold">Visi:</span> Menciptakan peserta didik yang beriman dan bertakwa kepada Tuhan Yang Maha Esa, berkarakter, bernalar kritis, berprestasi, serta berwawasan global yang dilandasi nilai-nilai budaya luhur sesuai ajaran agama.
                    </blockquote>
                    <blockquote class="border-l-4 border-brand-electric bg-blue-50 p-4 text-slate-700 dark:bg-slate-900 dark:text-slate-200">
                        <span class="font-bold">Misi:</span> Membentuk peserta didik yang beriman, berakhlak mulia, jujur, disiplin, dan bertanggung jawab, serta mengembangkan kemampuan berpikir, keterampilan, dan sikap untuk menghadapi berbagai tantangan. Sekolah juga menumbuhkan semangat berprestasi dan daya saing global, serta membangun lingkungan pendidikan yang kolaboratif antara sekolah, orang tua, dan masyarakat.
                    </blockquote>
                </div>
                <div class="mt-10 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-2xl bg-slate-100 p-5 text-center dark:bg-slate-900">
                        <p class="text-3xl font-black text-brand-electric counter" data-target="97">0</p>
                        <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-400">Tahun Berdiri</p>
                    </div>
                    <div class="rounded-2xl bg-slate-100 p-5 text-center dark:bg-slate-900">
                        <p class="text-3xl font-black text-brand-electric counter" data-target="51">0</p>
                        <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-400">Jumlah Siswa</p>
                    </div>
                    <div class="rounded-2xl bg-slate-100 p-5 text-center dark:bg-slate-900">
                        <p class="text-3xl font-black text-brand-electric counter" data-target="12">0</p>
                        <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-400">Tenaga Pengajar</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2" data-aos="fade-left">
                <div class="relative rounded-3xl border border-blue-100 bg-white p-4 shadow-xl dark:border-slate-700 dark:bg-slate-900">
                    <img src="{{ asset('images/WhatsApp Image 2026-04-28 at 08.39.26.jpeg') }}" alt="Aktivitas siswa di sekolah" class="rounded-2xl object-cover" loading="lazy" />
                    <div class="absolute -bottom-6 -left-6 rounded-2xl border border-blue-200 bg-white p-4 shadow-lg dark:border-slate-600 dark:bg-slate-800">
                        <p class="text-sm font-semibold text-brand-navy dark:text-white">⭐ Akreditasi B</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Kurikulum Merdeka</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="text-gray-900 dark:text-gray-950">
        <svg viewBox="0 0 1440 120" class="-mb-1 h-16 w-full fill-current">
            <path d="M0,32L60,42.7C120,53,240,75,360,80C480,85,600,75,720,64C840,53,960,43,1080,53.3C1200,64,1320,96,1380,112L1440,128L1440,160L1380,160C1320,160,1200,160,1080,160C960,160,840,160,720,160C600,160,480,160,360,160C240,160,120,160,60,160L0,160Z"></path>
        </svg>
    </div>

    <section id="fasilitas" class="bg-gray-900 px-4 py-24 text-white dark:bg-gray-950 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-center text-4xl font-black sm:text-5xl">Fasilitas Unggulan</h2>
            <div class="mx-auto mt-4 h-1.5 w-28 rounded-full bg-brand-electric"></div>
            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($facilities as $facility)
<article class="group overflow-hidden rounded-2xl border border-slate-700 bg-slate-800/70 shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-blue-500/50">

    {{-- GAMBAR --}}
    <div class="h-40 w-full overflow-hidden">
        <img src="{{ $facility->image ? asset('storage/'.$facility->image) : 'https://via.placeholder.com/400x300' }}"
             class="h-full w-full object-cover transition duration-300 group-hover:scale-110">
    </div>

    {{-- ISI --}}
    <div class="p-5">
        <h3 class="text-lg font-bold">{{ $facility->nama }}</h3>
        <p class="mt-2 text-sm text-slate-300">
            {{ $facility->deskripsi }}
        </p>
    </div>

</article>
@endforeach
            </div>
        </div>
    </section>

    <section id="galeri" class="bg-slate-100 px-4 py-24 dark:bg-slate-900 sm:px-6 lg:px-8" data-aos="fade-up">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-center text-4xl font-black text-brand-navy dark:text-white sm:text-5xl">Galeri Kegiatan Sekolah</h2>
            <p class="mx-auto mt-4 max-w-2xl text-center text-slate-600 dark:text-slate-300">Momen terbaik kegiatan belajar, seni, olahraga, dan karakter siswa SDN LENTENG BARAT I.</p>

            <div class="swiper school-swiper mt-12 overflow-hidden rounded-3xl">
                <div class="swiper-wrapper">
                    @foreach ($galleries as $g)
    <div class="swiper-slide">
        <img src="{{ asset('storage/'.$g->image) }}" 
             class="h-[420px] w-full object-cover" />
    </div>
@endforeach
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev text-white"></div>
                <div class="swiper-button-next text-white"></div>
            </div>

            <div class="mt-8 grid grid-cols-2 gap-4 md:grid-cols-4">
                @foreach ($galleries as $g)
    <button class="gallery-thumb"
        data-image="{{ asset('storage/'.$g->image) }}">
        <img src="{{ asset('storage/'.$g->image) }}"
             class="h-32 w-full object-cover">
    </button>
@endforeach
            </div>
        </div>
    </section>

    <section id="pengumuman" class="bg-white px-4 py-24 dark:bg-slate-950 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-center text-4xl font-black text-brand-navy dark:text-white sm:text-5xl">Pengumuman Terbaru</h2>
            <div class="mt-14 grid gap-6 md:grid-cols-3">

                @foreach ($announcements as $index => $news)
                @php
    $badgeColor = match(strtolower($news->badge)) {
    'libur' => 'bg-blue-500',
    'ujian' => 'bg-green-500',
    'kegiatan' => 'bg-purple-500',
    'penting' => 'bg-red-500',
    default => 'bg-gray-500',
};
@endphp
                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-2 dark:border-slate-700 dark:bg-slate-900" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
                        <span class="inline-flex rounded-full px-3 py-1 text-xs font-bold text-white {{ $badgeColor }}">
    {{ $news->badge }}
</span>
                        <h3 class="mt-4 text-xl font-bold text-slate-900 dark:text-white">{{ $news->judul }}</h3>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">{{ \Carbon\Carbon::parse($news->tanggal)->translatedFormat('d F Y') }}</p>
                        <p class="mt-3 text-slate-600 dark:text-slate-300">{{ Str::limit($news->isi, 100) }}</p>
                        <a href="#" class="mt-5 inline-flex items-center text-sm font-bold text-brand-electric hover:text-blue-700 dark:hover:text-blue-400">Selengkapnya</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="kontak" class="bg-slate-100 px-4 py-24 dark:bg-slate-900 sm:px-6 lg:px-8">
        <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-2">
            <div>
                <h2 class="text-4xl font-black text-brand-navy dark:text-white sm:text-5xl">Kontak Kami</h2>
                <ul class="mt-8 space-y-3 text-slate-700 dark:text-slate-300">
                    <li><b>Alamat:</b> {{ optional($contact)->alamat ?? '-' }}</li>
<li><b>No HP:</b> {{ optional($contact)->telepon ?? '-' }}</li>
<li><b>Email:</b> {{ optional($contact)->email ?? '-' }}</li>
<li><b>Jam Operasional:</b> {{ optional($contact)->jam_operasional ?? '-' }}</li>
                </ul>
                <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
                    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.7696197294154!2d113.73140667574086!3d-7.036340768941459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9ddc0d76a3b4b%3A0x451d7863a4a517f2!2sSD%20Negeri%2001%20Lenteng%20Barat!5e0!3m2!1sid!2sus!4v1777418910895!5m2!1sid!2sus"
        class="w-full h-64 border-0"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
                </div>
            </div>
            <div class="rounded-3xl bg-white p-8 shadow-lg dark:bg-slate-950">
                <h3 class="text-2xl font-bold text-brand-navy dark:text-white">Kirim Pesan</h3>
                @if(session('success'))
    <div class="mb-4 text-green-500">
        {{ session('success') }}
    </div>
@endif
                <form onsubmit="sendMail(event)" class="mt-6 space-y-4">
                    <input type="text" name="name" placeholder="Nama" required class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/30 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder:text-slate-500">
                    <input type="email" name="email" placeholder="Email" required class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/30 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder:text-slate-500">
                    <textarea name="message" placeholder="Pesan" required rows="5" class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/30 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder:text-slate-500"></textarea>
                    <button type="submit" class="w-full rounded-xl bg-brand-electric py-3 font-bold text-white transition duration-300 hover:scale-105 hover:bg-blue-500">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>

    <div id="gallery-modal" class="fixed inset-0 z-60 hidden items-center justify-center bg-black/80 p-4">
        <button id="close-modal" class="absolute right-6 top-6 rounded-full bg-white/20 p-2 text-white">✕</button>
        <img id="modal-image" src="" alt="Preview galeri sekolah" class="max-h-[85vh] w-auto rounded-2xl shadow-2xl">
    </div>


@endsection

@push('scripts')
    <script>
        new Swiper('.school-swiper', {
            loop: true,
            autoplay: { delay: 3000, disableOnInteraction: false },
            pagination: { el: '.swiper-pagination', clickable: true },
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        });

        const counters = document.querySelectorAll('.counter');
        const animateCounter = (el) => {
            const target = Number(el.dataset.target);
            const start = performance.now();
            const duration = 1200;
            const step = (time) => {
                const progress = Math.min((time - start) / duration, 1);
                el.textContent = Math.floor(progress * target).toLocaleString('id-ID');
                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    el.textContent = target.toLocaleString('id-ID');
                }
            };
            requestAnimationFrame(step);
        };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting && !entry.target.dataset.done) {
                    entry.target.dataset.done = '1';
                    animateCounter(entry.target);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach((counter) => observer.observe(counter));

        const modal = document.getElementById('gallery-modal');
        const modalImage = document.getElementById('modal-image');
        document.querySelectorAll('.gallery-thumb').forEach((thumb) => {
            thumb.addEventListener('click', () => {
                modalImage.src = thumb.dataset.image;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
        });
        document.getElementById('close-modal').addEventListener('click', () => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        });
    </script>
    <script>
function sendMail(e) {
    e.preventDefault();

    const name = document.querySelector('[name="name"]').value;
    const email = document.querySelector('[name="email"]').value;
    const message = document.querySelector('[name="message"]').value;

    const tujuan = "{{ optional($contact)->email }}";

    const subject = "Pesan dari Website";
    const body = `Nama: ${name}\nEmail: ${email}\n\nPesan:\n${message}`;

    const gmailURL = `https://mail.google.com/mail/?view=cm&to=${tujuan}&su=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

    window.open(gmailURL, '_blank');
}
</script>
@endpush


