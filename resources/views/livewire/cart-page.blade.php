<div class="min-h-screen bg-zinc-50 pt-16 pb-10">
    <div class="px-5 pt-7">
        <a href="{{ route('plans') }}" class="flex items-center gap-1.5 text-zinc-500 text-sm font-medium mb-6">
            <x-icons.back class="w-4 h-4 text-zinc-500" /> Back to plans
        </a>
        <h1 class="text-[28px] font-black text-zinc-900 tracking-tight mb-7">Your Order</h1>

        {{-- Order summary --}}
        <div class="bg-white rounded-[20px] border border-zinc-200 p-6 mb-[18px]">
            <div class="flex justify-between items-start mb-[18px]">
                <div>
                    <p class="text-xs font-bold tracking-[2px] uppercase mb-0.5" style="color: {{ $plan['color'] }}">{{ $plan['tier'] }}</p>
                    <h2 class="text-2xl font-extrabold text-zinc-900">{{ $plan['name'] }}</h2>
                    <p class="text-sm text-zinc-500 mt-0.5">{{ $plan['best_for'] }}</p>
                </div>
                <a href="{{ route('plans') }}" class="text-green-text text-sm font-semibold">Change</a>
            </div>
            <div class="border-t border-zinc-200 pt-4">
                <div class="flex justify-between py-2.5">
                    <span class="text-[15px] text-zinc-700">Monthly service</span>
                    <span class="text-[15px] font-semibold text-zinc-900">${{ $plan['monthly'] }}/mo</span>
                </div>
                <div class="flex justify-between py-2.5">
                    <div>
                        <span class="text-[15px] text-zinc-700">One-time activation</span>
                        <p class="text-xs text-zinc-400 m-0">Router provided for duration of service</p>
                    </div>
                    <div class="text-right">
                        @if($plan['activation'] === 0)
                            <span class="text-[15px] font-bold text-green-text">$0</span>
                        @else
                            <span class="text-xs text-zinc-400 line-through">${{ $plan['activation_orig'] }} </span>
                            <span class="text-[15px] font-bold text-zinc-900">${{ $plan['activation'] }}</span>
                        @endif
                    </div>
                </div>
                <div class="flex justify-between py-3.5 mt-2.5 border-t border-zinc-200">
                    <span class="text-[16px] font-bold text-zinc-900">Due today</span>
                    <span class="text-[28px] font-black text-zinc-900 tracking-tight">${{ $total }}</span>
                </div>
                <p class="text-xs text-zinc-400 leading-relaxed">Then ${{ $plan['monthly'] }}/mo starting 30 days from activation. Cancel anytime.</p>
            </div>
        </div>

        {{-- Guarantees --}}
        <div class="bg-white rounded-[20px] border border-zinc-200 p-[18px] mb-7">
            @foreach([
                ['icon' => 'shield', 'title' => '21-Day Money-Back Guarantee', 'desc' => 'Not satisfied? Full refund, no questions.'],
                ['icon' => 'lock', 'title' => 'Price Lock Guarantee', 'desc' => 'Your rate never increases. Ever.'],
                ['icon' => 'check', 'title' => 'No Contracts', 'desc' => 'Month-to-month. Cancel anytime.'],
            ] as $i => $g)
            <div class="flex gap-3.5 py-3 {{ $i > 0 ? 'border-t border-zinc-100' : '' }}">
                <div class="min-w-[36px] h-9 rounded-[10px] bg-green/[0.03] flex items-center justify-center">
                    <x-dynamic-component :component="'icons.' . $g['icon']" class="w-[15px] h-[15px] text-green-text" />
                </div>
                <div>
                    <p class="text-sm font-semibold text-zinc-900 mb-0.5">{{ $g['title'] }}</p>
                    <p class="text-[13px] text-zinc-500">{{ $g['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <a href="{{ route('checkout', ['plan' => $plan['id']]) }}"
           class="btn-primary w-full py-[18px] bg-green text-white rounded-[14px] text-[17px] font-bold flex items-center justify-center gap-2 mb-3.5"
           style="box-shadow: 0 0 40px var(--color-green-glow)">
            Proceed to Checkout <x-icons.arrow class="w-4 h-4" />
        </a>
        <p class="text-center text-xs text-zinc-400">Secure checkout. Your information is encrypted.</p>
    </div>
</div>
