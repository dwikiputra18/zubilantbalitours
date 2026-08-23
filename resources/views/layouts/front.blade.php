<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Zubilant Bali Tours - Your Best Travel Partner')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Swiper CSS for Hero Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap');
        body {
            font-family: 'Montserrat', sans-serif;
        }
        h1, h2, h3, h4, h5, h6, .brand-font {
            font-family: 'Playfair Display', serif;
        }

        .gate-intro {
            position: fixed;
            inset: 0;
            z-index: 100;
            display: grid;
            place-items: center;
            overflow: hidden;
            background: #0A2240;
            transition: visibility 0s linear 1.9s;
        }

        .gate-intro.is-opened {
            visibility: hidden;
        }

        .gate-panel {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 50%;
            background: #0A2240;
            transition: transform 1.6s cubic-bezier(.77, 0, .18, 1);
        }

        .gate-panel::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 1px;
            background: rgba(198, 138, 54, .55);
        }

        .gate-panel-left {
            left: 0;
        }

        .gate-panel-left::after {
            right: 0;
        }

        .gate-panel-right {
            right: 0;
        }

        .gate-panel-right::after {
            left: 0;
        }

        .gate-intro.is-opened .gate-panel-left {
            transform: translateX(-100%);
        }

        .gate-intro.is-opened .gate-panel-right {
            transform: translateX(100%);
        }

        .gate-content {
            position: relative;
            z-index: 1;
            display: grid;
            justify-items: center;
            gap: 16px;
            color: #FFFFFF;
            text-align: center;
            transition: opacity .35s ease, transform .6s ease;
        }

        .gate-intro.is-opening .gate-content {
            opacity: 0;
            transform: translateY(-12px);
        }

        .gate-logo {
            width: min(180px, 42vw);
            height: auto;
            filter: brightness(0) invert(1);
        }

        .gate-kicker {
            color: #C68A36;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .24em;
            text-transform: uppercase;
        }

        .gate-skip {
            position: absolute;
            right: 24px;
            bottom: 24px;
            z-index: 2;
            border: 1px solid rgba(255, 255, 255, .45);
            border-radius: 8px;
            padding: 9px 14px;
            color: #FFFFFF;
            font: 600 11px 'Montserrat', sans-serif;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        @media (prefers-reduced-motion: reduce) {
            .gate-intro,
            .gate-panel,
            .gate-content {
                transition: none;
            }
        }
    </style>
    @stack('styles')
</head>
<body class="bg-[#F8F9FA] text-[#1A1A1A] antialiased overflow-x-hidden selection:bg-[#C68A36] selection:text-white">

    <div id="gateIntro" class="gate-intro" aria-label="Welcome to Zubilant Bali Tours">
        <div class="gate-panel gate-panel-left" aria-hidden="true"></div>
        <div class="gate-panel gate-panel-right" aria-hidden="true"></div>
        <div class="gate-content">
            <img src="{{ asset('logo.png') }}" alt="Zubilant Bali Tours" class="gate-logo">
            <span class="gate-kicker">Discover Bali Differently</span>
        </div>
        <button id="gateSkip" type="button" class="gate-skip">Skip intro</button>
    </div>
    
    @include('partials.front-navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.front-footer')
    {{-- Tombol WhatsApp --}}
    <x-whatsapp-button />
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        (function () {
            const intro = document.getElementById('gateIntro');
            const skip = document.getElementById('gateSkip');
            const introSeenKey = 'zubilant-gate-intro-seen';

            if (!intro) return;

            const closeIntro = () => {
                intro.classList.add('is-opening');
                window.setTimeout(() => intro.classList.add('is-opened'), 80);
                window.setTimeout(() => intro.remove(), 2100);
                localStorage.setItem(introSeenKey, '1');
            };

            if (localStorage.getItem(introSeenKey) === '1' || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                intro.remove();
                return;
            }

            skip.addEventListener('click', closeIntro);
            window.setTimeout(closeIntro, 2200);
        })();

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
