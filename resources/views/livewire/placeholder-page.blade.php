<div class="min-h-screen bg-zinc-50 pt-16 pb-10">
    <div class="px-6 pt-10 pb-12 bg-dark text-center">
        <h1 class="text-[38px] font-black text-white tracking-tighter leading-[1.05] mb-3.5">{{ $pageTitle }}</h1>
        <p class="text-[16px] text-zinc-400 leading-relaxed max-w-[310px] mx-auto">{{ $pageSubtitle }}</p>
    </div>
    <div class="px-6 py-16 text-center">
        <div class="w-16 h-16 rounded-full bg-green/[0.06] border border-green/[0.12] flex items-center justify-center mx-auto mb-6">
            <x-icons.zap class="w-8 h-8 text-green" />
        </div>
        <h2 class="text-2xl font-black text-zinc-900 tracking-tight mb-3">Coming Soon</h2>
        <p class="text-[15px] text-zinc-500 leading-relaxed max-w-[280px] mx-auto mb-8">This page is under construction. Check back soon or contact us for more information.</p>
        <a href="{{ route('plans') }}"
           class="btn-primary inline-flex items-center gap-2 py-3.5 px-8 bg-green text-white rounded-[14px] text-[15px] font-bold"
           style="box-shadow: 0 0 40px var(--color-green-glow)">
            View Plans <x-icons.arrow class="w-3.5 h-3.5" />
        </a>
    </div>
</div>
