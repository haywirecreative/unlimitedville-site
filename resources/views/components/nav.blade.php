<nav x-data="{ open: false, scrolled: false }"
     x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 60 }, { passive: true })"
     :class="{ 'border-b border-white/[0.06]': scrolled || open }"
     class="fixed top-0 left-0 right-0 z-[100] frosted-nav transition-all duration-400"
     :style="open
        ? 'background: linear-gradient(180deg, rgba(25,65,45,0.92) 0%, rgba(17,17,19,0.96) 30%)'
        : (scrolled
            ? 'background: linear-gradient(180deg, rgba(20,48,34,0.85) 0%, rgba(17,35,26,0.82) 100%)'
            : 'background: linear-gradient(180deg, rgba(25,60,42,0.2) 0%, rgba(20,45,32,0.1) 100%)')">

    {{-- Top bar --}}
    <div class="flex items-center justify-between px-5 py-3.5">
        <a href="/" class="cursor-pointer">
            <x-logo-full :height="30" />
        </a>
        <div class="flex items-center gap-3.5">
            {{-- Cart icon --}}
            @if(session('cart'))
            <a href="{{ route('cart') }}" class="relative p-1.5">
                <x-icons.cart class="w-[18px] h-[18px] text-white" />
                <span class="absolute top-0.5 right-0.5 w-2.5 h-2.5 rounded-full bg-green shadow-[0_0_8px_rgba(85,182,133,0.4)]"></span>
            </a>
            @endif
            {{-- Call button --}}
            <a href="tel:+18884222907"
               class="text-white text-[13px] font-semibold px-3.5 py-2 rounded-full border border-white/15 bg-white/10 flex items-center gap-1.5 backdrop-blur-sm">
                <x-icons.phone class="w-3.5 h-3.5 text-white" /> Call
            </a>
            {{-- Menu toggle --}}
            <button @click="open = !open" class="p-1.5">
                <template x-if="!open"><x-icons.menu class="w-[26px] h-[26px] text-white" /></template>
                <template x-if="open"><x-icons.x class="w-[26px] h-[26px] text-white" /></template>
            </button>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div x-show="open" x-transition class="px-0 pt-1 pb-4 border-t border-dark-border">
        @foreach([
            ['label' => 'Plans & Pricing', 'route' => 'plans'],
            ['label' => 'Solutions', 'route' => 'solutions'],
            ['label' => 'Reviews', 'route' => 'reviews'],
            ['label' => 'Support', 'route' => 'support'],
        ] as $item)
        <a href="{{ route($item['route']) }}"
           class="flex items-center justify-between w-full px-5 py-[15px] text-white text-[15px] font-medium">
            {{ $item['label'] }}
            <x-icons.chev-right class="w-3.5 h-3.5 text-zinc-600" />
        </a>
        @endforeach

        {{-- Account login --}}
        <div class="mx-5 mt-2.5 pt-2.5 border-t border-dark-border">
            <a href="{{ route('login') }}"
               class="flex items-center gap-2.5 w-full py-3 text-zinc-300 text-sm font-medium">
                <x-icons.user class="w-4 h-4 text-zinc-400" /> Account Login
            </a>
        </div>

        {{-- Phone number --}}
        <div class="mx-5 mt-1.5 p-3 rounded-xl bg-green/[0.02] border border-green/[0.06]">
            <a href="tel:+18884222907" class="text-zinc-300 text-[13px] flex items-center gap-2">
                <x-icons.phone class="w-3.5 h-3.5 text-green-text" />
                <span class="text-white font-semibold">888.422.2907</span>
            </a>
        </div>
    </div>
</nav>
