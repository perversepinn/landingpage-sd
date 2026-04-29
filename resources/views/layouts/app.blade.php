<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'SDN LENTENG BARAT 1')</title>
<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
<link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}">
<meta name="description" content="Landing page resmi SDN LENTENG BARAT 1.">
    <meta name="description" content="Landing page resmi SDN LENTENG BARAT 1.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'ui-sans-serif', 'system-ui'],
                    },
                    colors: {
                        brand: {
                            navy: '#0f172a',
                            electric: '#3b82f6',
                            accent: '#10b981',
                        },
                    },
                },
            },
        };
    </script>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        .bg-grid-pattern {
            background-image: linear-gradient(rgba(255,255,255,.07) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.07) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .mobile-link {
            display: block;
            padding: 0.625rem 0.75rem;
            border-radius: 0.75rem;
            transition: background-color 0.2s, color 0.2s;
        }
        .mobile-link:hover {
            background-color: #f1f5f9;
            color: #3b82f6;
        }
        .dark .mobile-link:hover {
            background-color: #1e293b;
            color: #60a5fa;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 transition-colors duration-500 dark:bg-slate-950 dark:text-slate-100">
    <header class="fixed inset-x-0 top-0 z-50">
        <div class="mx-auto mt-4 max-w-7xl px-4 sm:px-6 lg:px-8">
            <nav class="rounded-2xl border border-white/20 bg-white/80 px-4 py-3 shadow-lg backdrop-blur-md transition dark:border-slate-700/60 dark:bg-gray-900/80">
                <div class="flex items-center justify-between">
                    <a href="#beranda" class="flex items-center gap-3">
                        <span class="flex items-center justify-center">
    <img src="{{ asset('images/logo.png') }}"
         alt="Logo SDN Lenteng Barat 1"
         class="h-10 w-10 rounded-full object-cover shadow-md">
</span>
                        <span class="text-sm font-extrabold tracking-wide text-brand-navy dark:text-white sm:text-base">SDN LENTENG BARAT 1</span>
                    </a>

                    <ul class="hidden items-center gap-6 text-sm font-semibold lg:flex">
<li><a href="#beranda" class="nav-link hover:text-brand-electric">Beranda</a></li>
<li><a href="#tentang" class="nav-link hover:text-brand-electric">Tentang</a></li>
<li><a href="#fasilitas" class="nav-link hover:text-brand-electric">Fasilitas</a></li>
<li><a href="#galeri" class="nav-link hover:text-brand-electric">Galeri</a></li>
<li><a href="#pengumuman" class="nav-link hover:text-brand-electric">Pengumuman</a></li>
<li><a href="#kontak" class="nav-link hover:text-brand-electric">Kontak</a></li>
                    </ul>

                    <div class="hidden items-center gap-3 lg:flex">
                        <button id="theme-toggle" type="button" class="rounded-xl border border-slate-200 p-2 text-slate-600 transition hover:scale-105 hover:bg-slate-100 dark:border-slate-700 dark:text-slate-300 dark:hover:bg-slate-800" aria-label="Toggle dark mode">
                            <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21 12.8A9 9 0 1111.2 3 7 7 0 0021 12.8z" />
                            </svg>
                            <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" class="hidden h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 3v2m0 14v2m7-9h2M3 12H1m15.4 6.4l1.4 1.4M5.2 5.2l1.4 1.4m9.8-1.4l-1.4 1.4M6.6 17.4l-1.4 1.4M12 8a4 4 0 100 8 4 4 0 000-8z" />
                            </svg>
                        </button>
                        <a href="{{ route('admin.login') }}" class="rounded-xl border border-brand-electric px-5 py-2 text-sm font-semibold text-brand-electric transition duration-300 hover:scale-105 hover:bg-brand-electric hover:text-white">Login Admin</a>
                    </div>

                    <button id="menu-toggle" class="rounded-lg p-2 text-slate-700 transition hover:bg-slate-100 lg:hidden dark:text-slate-300 dark:hover:bg-slate-800" type="button" aria-label="Toggle menu">
                        <svg id="menu-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="menu-close" xmlns="http://www.w3.org/2000/svg" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div id="mobile-menu" class="hidden pt-4 lg:hidden">
                    <div class="grid gap-3 border-t border-slate-200 pt-4 text-sm font-semibold dark:border-slate-700">
                        <a href="#beranda" class="mobile-link">Beranda</a>
                        <a href="#tentang" class="mobile-link">Tentang</a>
                        <a href="#fasilitas" class="mobile-link">Fasilitas</a>
                        <a href="#galeri" class="mobile-link">Galeri</a>
                        <a href="#pengumuman" class="mobile-link">Pengumuman</a>
                        <a href="#kontak" class="mobile-link">Kontak</a>
                        <div class="flex items-center gap-3 pt-2">
                            <button id="theme-toggle-mobile" type="button" class="rounded-xl border border-slate-200 p-2 dark:border-slate-700" aria-label="Toggle dark mode">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21 12.8A9 9 0 1111.2 3 7 7 0 0021 12.8z" />
                                </svg>
                            </button>
                            <a href="{{ route('admin.login') }}" class="rounded-xl border border-brand-electric px-4 py-2 text-brand-electric transition hover:bg-brand-electric hover:text-white">Login Admin</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-950 px-4 py-16 text-gray-300 sm:px-6 lg:px-8">
        <div class="mx-auto grid max-w-7xl gap-10 md:grid-cols-3">
            <div>
                <h3 class="mb-4 text-lg font-bold text-white">Tentang Sekolah</h3>
                <p class="text-sm leading-relaxed text-gray-400">SDN LENTENG BARAT 1 berkomitmen membentuk peserta didik yang cerdas, berakhlak, dan siap menghadapi masa depan.</p>
            </div>
            <div>
                <h3 class="mb-4 text-lg font-bold text-white">Tautan Cepat</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#tentang" class="text-gray-400 transition hover:text-brand-electric">Profil Sekolah</a></li>
                    <li><a href="#fasilitas" class="text-gray-400 transition hover:text-brand-electric">Fasilitas</a></li>
                    <li><a href="#pengumuman" class="text-gray-400 transition hover:text-brand-electric">Pengumuman</a></li>
                    <li><a href="#kontak" class="text-gray-400 transition hover:text-brand-electric">Hubungi Kami</a></li>
                </ul>
            </div>
            <div>
                <h3 class="mb-4 text-lg font-bold text-white">Kontak</h3>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li>Jl. Pendidikan No. 88, Jakarta</li>
                    <li>+62 812-3456-7890</li>
                    <li>info@sdcendekia.sch.id</li>
                </ul>
            </div>
        </div>
        <div class="mx-auto mt-12 max-w-7xl border-t border-slate-800 pt-6 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} SDN LENTENG BARAT 1. All rights reserved.
        </div>
    </footer>

    <button id="back-to-top" class="fixed bottom-6 right-6 hidden rounded-full bg-brand-electric p-3 text-white shadow-xl transition hover:scale-110 hover:bg-blue-500" aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const root = document.documentElement;
        const moon = document.getElementById('icon-moon');
        const sun = document.getElementById('icon-sun');

        const applyTheme = (theme) => {
            root.classList.toggle('dark', theme === 'dark');
            if (moon && sun) {
                moon.classList.toggle('hidden', theme === 'dark');
                sun.classList.toggle('hidden', theme !== 'dark');
            }
        };

        applyTheme(localStorage.getItem('theme') || 'light');

        const toggleTheme = () => {
            const nextTheme = root.classList.contains('dark') ? 'light' : 'dark';
            localStorage.setItem('theme', nextTheme);
            applyTheme(nextTheme);
        };

        document.getElementById('theme-toggle')?.addEventListener('click', toggleTheme);
        document.getElementById('theme-toggle-mobile')?.addEventListener('click', toggleTheme);

        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuOpen = document.getElementById('menu-open');
        const menuClose = document.getElementById('menu-close');
        menuToggle?.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            mobileMenu.classList.toggle('hidden');
            menuOpen.classList.toggle('hidden', isHidden);
            menuClose.classList.toggle('hidden', !isHidden);
        });

        document.querySelectorAll('.mobile-link').forEach((link) => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuOpen.classList.remove('hidden');
                menuClose.classList.add('hidden');
            });
        });

        const backTop = document.getElementById('back-to-top');
        backTop?.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
        window.addEventListener('scroll', () => {
            backTop?.classList.toggle('hidden', window.scrollY < 500);
        });

        AOS.init({ duration: 800, once: true, offset: 100 });

        const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".nav-link");

window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 120;
        const sectionHeight = section.clientHeight;

        if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
            current = section.getAttribute("id");
        }
    });

    navLinks.forEach(link => {
        link.classList.remove("text-brand-electric", "font-bold");

        if (link.getAttribute("href") === "#" + current) {
            link.classList.add("text-brand-electric", "font-bold");
        }
    });
});
    </script>
    @stack('scripts')
</body>
</html>
