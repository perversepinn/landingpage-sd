@extends('layouts.app')

@section('title', 'SD Cendekia Bangsa | Sekolah Dasar Modern')

@section('content')
    <section id="beranda" class="relative flex min-h-screen items-center overflow-hidden pt-24">
        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=1920&q=80" alt="Gedung SD Cendekia Bangsa" class="absolute inset-0 h-full w-full object-cover" />
        <div class="absolute inset-0 bg-linear-to-r from-slate-950/95 via-slate-900/90 to-blue-900/85"></div>
        <div class="pointer-events-none absolute -top-24 left-10 h-72 w-72 rounded-full bg-blue-500/20 blur-3xl"></div>
        <div class="pointer-events-none absolute bottom-10 right-10 h-72 w-72 rounded-full bg-emerald-400/20 blur-3xl"></div>

        <div class="relative mx-auto grid max-w-7xl gap-10 px-4 py-20 sm:px-6 lg:grid-cols-12 lg:px-8">
            <div class="lg:col-span-8">
                <p class="mb-4 inline-flex rounded-full border border-blue-300/40 bg-white/10 px-4 py-2 text-sm font-medium text-blue-100 backdrop-blur-md" data-aos="fade-up">Sekolah Dasar Berbasis Karakter & Teknologi</p>
                <h1 class="text-5xl font-black leading-tight text-white sm:text-6xl xl:text-7xl" data-aos="fade-up" data-aos-delay="100">
                    SD Cendekia Bangsa
                </h1>
                <p class="mt-6 max-w-2xl text-lg text-blue-100" data-aos="fade-up" data-aos-delay="200">
                    Membangun Generasi Cerdas dan Berakhlak melalui pembelajaran aktif, lingkungan aman, dan ekosistem pendidikan masa depan.
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
                    SD Cendekia Bangsa berdiri sejak 2001 dengan fokus mencetak peserta didik yang unggul secara akademik, berkarakter, dan peduli lingkungan.
                    Kami menggabungkan metode belajar aktif, teknologi digital, dan penguatan nilai moral dalam setiap kegiatan.
                </p>
                <div class="mt-8 space-y-4">
                    <blockquote class="border-l-4 border-brand-electric bg-blue-50 p-4 text-slate-700 dark:bg-slate-900 dark:text-slate-200">
                        <span class="font-bold">Visi:</span> Menjadi sekolah dasar unggulan yang melahirkan generasi cerdas, kreatif, dan berakhlak mulia.
                    </blockquote>
                    <blockquote class="border-l-4 border-brand-electric bg-blue-50 p-4 text-slate-700 dark:bg-slate-900 dark:text-slate-200">
                        <span class="font-bold">Misi:</span> Mengembangkan potensi peserta didik secara holistik melalui pembelajaran inovatif dan budaya sekolah yang positif.
                    </blockquote>
                </div>
                <div class="mt-10 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-2xl bg-slate-100 p-5 text-center dark:bg-slate-900">
                        <p class="text-3xl font-black text-brand-electric counter" data-target="25">0</p>
                        <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-400">Tahun Berdiri</p>
                    </div>
                    <div class="rounded-2xl bg-slate-100 p-5 text-center dark:bg-slate-900">
                        <p class="text-3xl font-black text-brand-electric counter" data-target="780">0</p>
                        <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-400">Jumlah Siswa</p>
                    </div>
                    <div class="rounded-2xl bg-slate-100 p-5 text-center dark:bg-slate-900">
                        <p class="text-3xl font-black text-brand-electric counter" data-target="65">0</p>
                        <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-400">Tenaga Pengajar</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2" data-aos="fade-left">
                <div class="relative rounded-3xl border border-blue-100 bg-white p-4 shadow-xl dark:border-slate-700 dark:bg-slate-900">
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=700&q=80" alt="Aktivitas siswa di sekolah" class="rounded-2xl object-cover" loading="lazy" />
                    <div class="absolute -bottom-6 -left-6 rounded-2xl border border-blue-200 bg-white p-4 shadow-lg dark:border-slate-600 dark:bg-slate-800">
                        <p class="text-sm font-semibold text-brand-navy dark:text-white">⭐ Akreditasi A</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Kurikulum Merdeka + Digital Class</p>
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
                @foreach ([
                    'Ruang Kelas Ber-AC',
                    'Perpustakaan Digital',
                    'Lab Komputer',
                    'Lapangan Olahraga',
                    'Kantin Sehat',
                    'Musholla',
                ] as $facility)
                    <article class="group rounded-2xl border border-slate-700 bg-slate-800/70 p-6 shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-blue-500/50" data-aos="fade-up">
                        <div class="mb-4 inline-flex rounded-xl bg-blue-500/20 p-3 text-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 6v12m6-6H6" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">{{ $facility }}</h3>
                        <p class="mt-2 text-sm text-slate-300">Fasilitas modern yang mendukung pembelajaran aktif, aman, dan nyaman untuk seluruh siswa.</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="galeri" class="bg-slate-100 px-4 py-24 dark:bg-slate-900 sm:px-6 lg:px-8" data-aos="fade-up">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-center text-4xl font-black text-brand-navy dark:text-white sm:text-5xl">Galeri Kegiatan Sekolah</h2>
            <p class="mx-auto mt-4 max-w-2xl text-center text-slate-600 dark:text-slate-300">Momen terbaik kegiatan belajar, seni, olahraga, dan karakter siswa SD Cendekia Bangsa.</p>

            <div class="swiper school-swiper mt-12 overflow-hidden rounded-3xl">
                <div class="swiper-wrapper">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="swiper-slide">
                            <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=1200&q=80&sig={{ $i }}" alt="Dokumentasi kegiatan sekolah {{ $i }}" class="h-[420px] w-full object-cover" loading="lazy" />
                        </div>
                    @endfor
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev text-white"></div>
                <div class="swiper-button-next text-white"></div>
            </div>

            <div class="mt-8 grid grid-cols-2 gap-4 md:grid-cols-4">
                @for ($i = 1; $i <= 4; $i++)
                    <button class="gallery-thumb overflow-hidden rounded-2xl" data-image="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=1400&q=80&sig=preview{{ $i }}">
                        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=500&q=80&sig=thumb{{ $i }}" alt="Thumbnail galeri {{ $i }}" class="h-32 w-full object-cover transition duration-300 hover:scale-110" loading="lazy" />
                    </button>
                @endfor
            </div>
        </div>
    </section>

    <section id="pengumuman" class="bg-white px-4 py-24 dark:bg-slate-950 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-center text-4xl font-black text-brand-navy dark:text-white sm:text-5xl">Pengumuman Terbaru</h2>
            <div class="mt-14 grid gap-6 md:grid-cols-3">
                @foreach ([
                    ['badge' => 'Libur', 'color' => 'bg-blue-500', 'title' => 'Libur Semester Genap', 'date' => '12 Juni 2026'],
                    ['badge' => 'Ujian', 'color' => 'bg-emerald-500', 'title' => 'Jadwal Ujian Akhir', 'date' => '20 Juni 2026'],
                    ['badge' => 'Kegiatan', 'color' => 'bg-amber-500', 'title' => 'Festival Kreativitas Siswa', 'date' => '30 Juni 2026'],
                ] as $index => $news)
                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-2 dark:border-slate-700 dark:bg-slate-900" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
                        <span class="inline-flex rounded-full px-3 py-1 text-xs font-bold text-white {{ $news['color'] }}">{{ $news['badge'] }}</span>
                        <h3 class="mt-4 text-xl font-bold text-slate-900 dark:text-white">{{ $news['title'] }}</h3>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">{{ $news['date'] }}</p>
                        <p class="mt-3 text-slate-600 dark:text-slate-300">Informasi resmi sekolah terkait agenda akademik dan kegiatan penting untuk siswa dan orang tua.</p>
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
                    <li><span class="font-bold">Alamat:</span> Jl. Pendidikan No. 88, Jakarta</li>
                    <li><span class="font-bold">No HP:</span> +62 812-3456-7890</li>
                    <li><span class="font-bold">Email:</span> info@sdcendekia.sch.id</li>
                    <li><span class="font-bold">Jam Operasional:</span> Senin - Jumat, 07.00 - 16.00</li>
                </ul>
                <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-700">
                    <iframe title="Lokasi SD Cendekia Bangsa" src="https://maps.google.com/maps?q=jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" class="pointer-events-none h-64 w-full"></iframe>
                </div>
            </div>
            <div class="rounded-3xl bg-white p-8 shadow-lg dark:bg-slate-950">
                <h3 class="text-2xl font-bold text-brand-navy dark:text-white">Kirim Pesan</h3>
                <form class="mt-6 space-y-4">
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
@endpush
