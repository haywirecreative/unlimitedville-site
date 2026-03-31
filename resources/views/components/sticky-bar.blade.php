<div x-data="{ show: false }"
     x-init="window.addEventListener('scroll', () => { show = window.scrollY > 400 }, { passive: true })"
     x-show="show"
     x-transition
     @class(['fixed bottom-0 left-0 right-0 z-[99] frosted-bar bg-[rgba(15,15,18,0.92)] border-t border-green/15 px-4 py-3 flex items-center gap-3 shadow-[0_-4px_30px_rgba(0,0,0,0.3)]'])
     style="display: none;">
    <div class="flex-1">
        <span class="text-xs text-zinc-500 block leading-tight">Plans from</span>
        <span class="text-[26px] font-black text-white tracking-tight">$69<span class="text-[13px] font-medium text-zinc-400">/mo</span></span>
    </div>
    <a href="{{ route('plans') }}"
       class="btn-primary px-7 py-3.5 bg-green text-white rounded-[14px] text-[15px] font-bold flex items-center gap-1.5 shadow-[0_2px_20px_var(--color-green-glow)]">
        View Plans
        <x-icons.arrow class="w-3.5 h-3.5" />
    </a>
</div>
