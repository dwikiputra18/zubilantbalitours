<nav id="mainNav"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-500 bg-transparent border-b border-transparent py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" id="navLogo"
                    class="brand-font text-2xl font-bold tracking-tight text-white flex items-center gap-2 group transition-colors duration-300">
                    <div class="bg-white/10 p-1.5 rounded-lg group-hover:rotate-12 transition-transform shadow-md">
                        <img src="<?php echo e(asset('/logo.png')); ?>" alt="Logo" class="h-8 w-8">
                    </div>
                    <span class="hidden sm:block">Zubilant <span id="navLogoBali">Bali</span> Tours</span>
                </a>
            </div>

            <!-- Search Bar Desktop -->
            <div id="searchWrapper" class="hidden md:flex flex-1 ml-8 lg:ml-16 justify-end transition-all duration-500">
                <form id="searchForm" action="<?php echo e(route('search')); ?>" method="GET"
                    class="relative w-full max-w-md flex items-center transition-all duration-500 ease-in-out">
                    <div id="searchBox"
                        class="relative w-full flex items-center bg-white/20 backdrop-blur-md rounded-full overflow-hidden border border-white/30 shadow-sm transition-all duration-500">
                        <div id="searchIcon" class="pl-5 pr-3 text-white transition-colors">
                            <i class="fas fa-search"></i>
                        </div>
                        <input id="searchInput" type="text" name="q" autocomplete="off"
                            class="w-full py-3 bg-transparent border-none focus:outline-none text-white placeholder-white/70 text-sm font-medium"
                            placeholder="Search destinations, activities...">
                        <button type="submit"
                            class="bg-yellow-600 hover:bg-yellow-700 text-white px-8 py-3 font-semibold text-sm transition-colors duration-300 h-full whitespace-nowrap">
                            Search
                        </button>
                    </div>

                    
                    <div id="autocompleteDropdown"
                        class="hidden absolute top-full left-0 right-0 mt-2 bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden z-50">
                    </div>
                </form>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex items-center md:hidden ml-4">
                <button type="button" id="mobileMenuBtn"
                    class="text-white hover:text-yellow-400 focus:outline-none p-2 transition-colors">
                    <i id="mobileMenuIcon" class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Panel -->
    <div id="mobileMenu" class="hidden md:hidden transition-all duration-300">
        <div id="mobileMenuInner"
            class="mx-4 mb-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 p-4 space-y-4">

            <!-- Mobile Search -->
            <form action="<?php echo e(route('search')); ?>" method="GET"
                class="flex items-center bg-white/20 rounded-full overflow-hidden border border-white/30">
                <div class="pl-4 pr-2 text-white">
                    <i class="fas fa-search text-sm"></i>
                </div>
                <input type="text" name="q"
                    class="w-full py-3 bg-transparent border-none focus:outline-none text-white placeholder-white/70 text-sm"
                    placeholder="Search destinations...">
                <button type="submit"
                    class="bg-yellow-600 hover:bg-yellow-700 text-white px-5 py-3 text-sm font-semibold transition-colors whitespace-nowrap">
                    Search
                </button>
            </form>
</nav>
</div>
</div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const nav = document.getElementById('mainNav');
        const navLogo = document.getElementById('navLogo');
        const navLogoBali = document.getElementById('navLogoBali');
        const navPackages = document.getElementById('navPackages');
        const searchInput = document.getElementById('searchInput');
        const searchBox = document.getElementById('searchBox');
        const searchForm = document.getElementById('searchForm');
        const searchIcon = document.getElementById('searchIcon');
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenuIcon = document.getElementById('mobileMenuIcon');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileMenuInner = document.getElementById('mobileMenuInner');
        const dropdown = document.getElementById('autocompleteDropdown');

        // ── Scroll Handler ─────────────────────────────────────────────
        function handleScroll() {
            const scrolled = window.scrollY > 50;

            nav.classList.toggle('bg-white', scrolled);
            nav.classList.toggle('shadow-lg', scrolled);
            nav.classList.toggle('border-gray-100', scrolled);
            nav.classList.toggle('py-2', scrolled);
            nav.classList.toggle('bg-transparent', !scrolled);
            nav.classList.toggle('border-transparent', !scrolled);
            nav.classList.toggle('py-4', !scrolled);

            navLogo.classList.toggle('text-white', !scrolled);
            navLogo.classList.toggle('text-blue-950', scrolled);
            navLogoBali.classList.toggle('text-yellow-700', scrolled);

            navPackages?.classList.toggle('text-white', !scrolled);
            navPackages?.classList.toggle('text-yellow-700', scrolled);

            mobileMenuBtn?.classList.toggle('text-white', !scrolled);
            mobileMenuBtn?.classList.toggle('text-gray-800', scrolled);

            if (scrolled) {
                mobileMenuInner.classList.remove('bg-white/10', 'border-white/20');
                mobileMenuInner.classList.add('bg-white', 'border-gray-100', 'shadow-lg');
                mobileMenu.querySelectorAll('a').forEach(a => {
                    a.classList.remove('text-white', 'hover:text-yellow-400');
                    a.classList.add('text-gray-700', 'hover:text-yellow-600');
                });
                searchBox.classList.remove('bg-white/20', 'backdrop-blur-md', 'border-white/30');
                searchBox.classList.add('bg-gray-100', 'border-gray-200');
                searchIcon.classList.replace('text-white', 'text-gray-400');
                searchInput.classList.replace('text-white', 'text-gray-700');
                searchInput.classList.replace('placeholder-white/70', 'placeholder-gray-400');
            } else {
                mobileMenuInner.classList.add('bg-white/10', 'border-white/20');
                mobileMenuInner.classList.remove('bg-white', 'border-gray-100', 'shadow-lg');
                mobileMenu.querySelectorAll('a').forEach(a => {
                    a.classList.add('text-white', 'hover:text-yellow-400');
                    a.classList.remove('text-gray-700', 'hover:text-yellow-600');
                });
                searchBox.classList.add('bg-white/20', 'backdrop-blur-md', 'border-white/30');
                searchBox.classList.remove('bg-gray-100', 'border-gray-200');
                searchIcon.classList.replace('text-gray-400', 'text-white');
                searchInput.classList.replace('text-gray-700', 'text-white');
                searchInput.classList.replace('placeholder-gray-400', 'placeholder-white/70');
            }
        }

        window.addEventListener('scroll', handleScroll);

        // ── Mobile Menu Toggle ─────────────────────────────────────────
        mobileMenuBtn.addEventListener('click', () => {
            const isOpen = !mobileMenu.classList.contains('hidden');
            mobileMenu.classList.toggle('hidden', isOpen);
            mobileMenuIcon.classList.toggle('fa-bars', isOpen);
            mobileMenuIcon.classList.toggle('fa-times', !isOpen);
        });

        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenuIcon.classList.add('fa-bars');
                mobileMenuIcon.classList.remove('fa-times');
            });
        });

        // ── Search Focus Animation ─────────────────────────────────────
        searchInput.addEventListener('focus', () => {
            searchForm.classList.replace('max-w-md', 'max-w-5xl');
            if (window.scrollY <= 50) {
                searchBox.classList.replace('bg-white/20', 'bg-white');
                searchInput.classList.replace('text-white', 'text-gray-800');
                searchIcon.classList.replace('text-white', 'text-gray-400');
            }
        });

        searchInput.addEventListener('blur', () => {
            setTimeout(() => {
                dropdown.classList.add('hidden');
                searchForm.classList.replace('max-w-5xl', 'max-w-md');
                if (window.scrollY <= 50) {
                    searchBox.classList.replace('bg-white', 'bg-white/20');
                    searchInput.classList.replace('text-gray-800', 'text-white');
                    searchIcon.classList.replace('text-gray-400', 'text-white');
                }
            }, 200);
        });

        // ── Autocomplete ───────────────────────────────────────────────
        let debounceTimer;

        searchInput.addEventListener('input', function () {
            clearTimeout(debounceTimer);
            const q = this.value.trim();

            if (q.length < 2) {
                dropdown.classList.add('hidden');
                return;
            }

            debounceTimer = setTimeout(() => {
                fetch(`/search/autocomplete?q=${encodeURIComponent(q)}`)
                    .then(r => r.json())
                    .then(data => renderDropdown(data, q))
                    .catch(() => dropdown.classList.add('hidden'));
            }, 300);
        });

        function renderDropdown(data, q) {
            if (!data.packages?.length && !data.categories?.length) {
                dropdown.classList.add('hidden');
                return;
            }

            let html = '';

            if (data.categories?.length) {
                html += `<div class="px-4 pt-3 pb-1 text-xs font-bold text-gray-400 uppercase tracking-wider">Categories</div>`;
                data.categories.forEach(cat => {
                    html += `
                    <a href="/tour-packages?category=${cat.slug}"
                       class="flex items-center gap-3 px-4 py-2.5 hover:bg-yellow-50 transition-colors">
                        <div class="w-7 h-7 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-tag text-yellow-600 text-xs"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">${cat.name}</span>
                        <span class="ml-auto text-xs text-gray-400">${cat.packages_count} packages</span>
                    </a>`;
                });
            }

            if (data.packages?.length) {
                html += `<div class="px-4 pt-3 pb-1 text-xs font-bold text-gray-400 uppercase tracking-wider border-t border-gray-50">Packages</div>`;
                data.packages.forEach(pkg => {
                    const price = pkg.price_2_4
                        ? `Rp ${Number(pkg.price_2_4).toLocaleString('id-ID')}`
                        : 'Contact Us';
                    html += `
                    <a href="/tour-packages/${pkg.slug}"
                       class="flex items-center gap-3 px-4 py-2.5 hover:bg-yellow-50 transition-colors">
                        <div class="w-10 h-10 rounded-xl overflow-hidden bg-gray-100 flex-shrink-0">
                            ${pkg.thumbnail
                            ? `<img src="/storage/${pkg.thumbnail}" class="w-full h-full object-cover" alt="${pkg.title}">`
                            : `<div class="w-full h-full bg-gradient-to-br from-yellow-300 to-orange-400 flex items-center justify-center"><i class="fas fa-image text-white text-xs"></i></div>`
                        }
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-800 truncate">${pkg.title}</p>
                            <p class="text-xs text-gray-400">${pkg.location ?? pkg.category_name ?? ''}</p>
                        </div>
                        <span class="text-xs font-bold text-yellow-700 flex-shrink-0">${price}</span>
                    </a>`;
                });
            }

            html += `
            <div class="border-t border-gray-100 px-4 py-3">
                <a href="/search?q=${encodeURIComponent(q)}"
                   class="flex items-center justify-center gap-2 text-sm text-yellow-600 font-semibold hover:text-yellow-700">
                    <i class="fas fa-search text-xs"></i> See all results for "${q}"
                </a>
            </div>`;

            dropdown.innerHTML = html;
            dropdown.classList.remove('hidden');
        }

        // Close dropdown on outside click
        document.addEventListener('click', (e) => {
            if (!e.target.closest('#searchForm')) {
                dropdown.classList.add('hidden');
            }
        });
    });
</script><?php /**PATH /home/dwiki/Documents/website/zubilantbalitours/resources/views/partials/front-navbar.blade.php ENDPATH**/ ?>