<footer class="px-6 pt-12 pb-[120px] bg-brand-black border-t border-dark-border">
    <a href="/" class="inline-block mb-2 cursor-pointer">
        <x-logo-full :height="26" />
    </a>

    {{-- Nav links --}}
    <div class="grid grid-cols-2 gap-y-4 gap-x-8 mt-6 mb-8">
        <div>
            <p class="text-[11px] font-bold tracking-[2px] text-zinc-600 uppercase mb-3">Product</p>
            @foreach([
                ['Plans & Pricing', 'plans'],
                ['Coverage Map', 'plans'],
                ['How It Works', 'home'],
            ] as [$label, $route])
            <a href="{{ route($route) }}" class="block text-[13px] text-zinc-500 font-medium py-1.5 hover:text-white transition-colors">{{ $label }}</a>
            @endforeach
        </div>
        <div>
            <p class="text-[11px] font-bold tracking-[2px] text-zinc-600 uppercase mb-3">Company</p>
            @foreach([
                ['About', 'home'],
                ['Blog', 'blog'],
                ['Support', 'support'],
            ] as [$label, $route])
            <a href="{{ route($route) }}" class="block text-[13px] text-zinc-500 font-medium py-1.5 hover:text-white transition-colors">{{ $label }}</a>
            @endforeach
        </div>
    </div>

    {{-- Account / Contact row --}}
    <div class="flex gap-3 mb-8">
        <a href="{{ route('login') }}"
           class="flex-1 flex items-center justify-center gap-2 py-3 rounded-xl border border-dark-border text-zinc-400 text-[13px] font-semibold hover:border-white/20 transition-colors">
            <x-icons.user class="w-3.5 h-3.5 text-zinc-500" /> My Account
        </a>
        <a href="tel:+18884222907"
           class="flex-1 flex items-center justify-center gap-2 py-3 rounded-xl border border-dark-border text-zinc-400 text-[13px] font-semibold hover:border-white/20 transition-colors">
            <x-icons.phone class="w-3.5 h-3.5 text-green-text" /> 888.422.2907
        </a>
    </div>

    {{-- Legal --}}
    <div class="pt-6 border-t border-dark-border">
        <div class="flex gap-4 mb-3">
            <a href="#" class="text-[11px] text-zinc-600 hover:text-zinc-400 transition-colors">Terms</a>
            <a href="#" class="text-[11px] text-zinc-600 hover:text-zinc-400 transition-colors">Privacy</a>
            <a href="#" class="text-[11px] text-zinc-600 hover:text-zinc-400 transition-colors">Refund Policy</a>
        </div>
        <p class="text-[11px] text-zinc-700 leading-relaxed">
            &copy; {{ date('Y') }} Unlimitedville. All rights reserved. Unlimitedville is a wireless internet service provider. Speeds may vary by location and network conditions.
        </p>
    </div>
</footer>
