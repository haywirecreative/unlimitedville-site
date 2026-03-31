<div class="min-h-screen bg-zinc-50 pt-16 pb-10">
    <div class="px-5 pt-7">
        <a href="{{ route('cart', ['plan' => $plan['id']]) }}" class="flex items-center gap-1.5 text-zinc-500 text-sm font-medium mb-6">
            <x-icons.back class="w-4 h-4 text-zinc-500" /> Back to cart
        </a>
        <h1 class="text-[28px] font-black text-zinc-900 tracking-tight mb-1.5">Checkout</h1>
        <p class="text-sm text-zinc-500 mb-7">{{ $plan['name'] }} -- ${{ $total }} due today</p>

        {{-- Order summary bar --}}
        <div class="p-4 px-[18px] rounded-[14px] bg-green/[0.02] border border-green/[0.08] mb-7 flex justify-between items-center">
            <div>
                <p class="text-sm font-semibold text-zinc-900">{{ $plan['name'] }}</p>
                <p class="text-xs text-zinc-500">${{ $plan['monthly'] }}/mo + ${{ $plan['activation'] }} activation</p>
            </div>
            <span class="text-2xl font-black text-zinc-900 tracking-tight">${{ $total }}</span>
        </div>

        {{-- Shipping --}}
        <h2 class="text-[17px] font-bold text-zinc-900 mb-[18px]">Shipping Address</h2>
        <div class="flex flex-col gap-3.5 mb-8">
            <div class="flex gap-3">
                <div class="flex-1">
                    <label class="text-xs font-semibold text-zinc-700 mb-1.5 block">First Name</label>
                    <input class="w-full py-4 px-[18px] rounded-[14px] border border-zinc-200 text-[16px] outline-none bg-white text-zinc-900 focus:border-green focus:shadow-[0_0_0_3px_rgba(85,182,133,0.1)]" placeholder="John" />
                </div>
                <div class="flex-1">
                    <label class="text-xs font-semibold text-zinc-700 mb-1.5 block">Last Name</label>
                    <input class="w-full py-4 px-[18px] rounded-[14px] border border-zinc-200 text-[16px] outline-none bg-white text-zinc-900 focus:border-green focus:shadow-[0_0_0_3px_rgba(85,182,133,0.1)]" placeholder="Smith" />
                </div>
            </div>
            <div>
                <label class="text-xs font-semibold text-zinc-700 mb-1.5 block">Address</label>
                <input class="w-full py-4 px-[18px] rounded-[14px] border border-zinc-200 text-[16px] outline-none bg-white text-zinc-900 focus:border-green focus:shadow-[0_0_0_3px_rgba(85,182,133,0.1)]" placeholder="123 Main St" />
            </div>
            <div class="flex gap-3">
                <div class="flex-[2]">
                    <label class="text-xs font-semibold text-zinc-700 mb-1.5 block">City</label>
                    <input class="w-full py-4 px-[18px] rounded-[14px] border border-zinc-200 text-[16px] outline-none bg-white text-zinc-900 focus:border-green focus:shadow-[0_0_0_3px_rgba(85,182,133,0.1)]" placeholder="City" />
                </div>
                <div class="flex-1">
                    <label class="text-xs font-semibold text-zinc-700 mb-1.5 block">State</label>
                    <input class="w-full py-4 px-[18px] rounded-[14px] border border-zinc-200 text-[16px] outline-none bg-white text-zinc-900 focus:border-green focus:shadow-[0_0_0_3px_rgba(85,182,133,0.1)]" placeholder="TN" />
                </div>
                <div class="flex-1">
                    <label class="text-xs font-semibold text-zinc-700 mb-1.5 block">ZIP</label>
                    <input class="w-full py-4 px-[18px] rounded-[14px] border border-zinc-200 text-[16px] outline-none bg-white text-zinc-900 focus:border-green focus:shadow-[0_0_0_3px_rgba(85,182,133,0.1)]" placeholder="37064" />
                </div>
            </div>
            <div>
                <label class="text-xs font-semibold text-zinc-700 mb-1.5 block">Email</label>
                <input type="email" class="w-full py-4 px-[18px] rounded-[14px] border border-zinc-200 text-[16px] outline-none bg-white text-zinc-900 focus:border-green focus:shadow-[0_0_0_3px_rgba(85,182,133,0.1)]" placeholder="you@email.com" />
            </div>
            <div>
                <label class="text-xs font-semibold text-zinc-700 mb-1.5 block">Phone</label>
                <input type="tel" class="w-full py-4 px-[18px] rounded-[14px] border border-zinc-200 text-[16px] outline-none bg-white text-zinc-900 focus:border-green focus:shadow-[0_0_0_3px_rgba(85,182,133,0.1)]" placeholder="(555) 555-5555" />
            </div>
        </div>

        {{-- Payment --}}
        <h2 class="text-[17px] font-bold text-zinc-900 mb-[18px]">Payment</h2>
        <div class="flex flex-col gap-3.5 mb-8">
            <div>
                <label class="text-xs font-semibold text-zinc-700 mb-1.5 block">Card Number</label>
                <input class="w-full py-4 px-[18px] rounded-[14px] border border-zinc-200 text-[16px] outline-none bg-white text-zinc-900 focus:border-green focus:shadow-[0_0_0_3px_rgba(85,182,133,0.1)]" placeholder="Card number" />
            </div>
            <div class="flex gap-3">
                <div class="flex-1">
                    <label class="text-xs font-semibold text-zinc-700 mb-1.5 block">Expiration</label>
                    <input class="w-full py-4 px-[18px] rounded-[14px] border border-zinc-200 text-[16px] outline-none bg-white text-zinc-900 focus:border-green focus:shadow-[0_0_0_3px_rgba(85,182,133,0.1)]" placeholder="MM / YY" />
                </div>
                <div class="flex-1">
                    <label class="text-xs font-semibold text-zinc-700 mb-1.5 block">CVC</label>
                    <input class="w-full py-4 px-[18px] rounded-[14px] border border-zinc-200 text-[16px] outline-none bg-white text-zinc-900 focus:border-green focus:shadow-[0_0_0_3px_rgba(85,182,133,0.1)]" placeholder="123" />
                </div>
            </div>
        </div>

        {{-- Terms --}}
        <div class="p-4 px-[18px] rounded-[14px] bg-white border border-zinc-200 mb-7">
            <p class="text-[13px] text-zinc-500 leading-relaxed">
                By placing this order, you agree to our Terms of Service. Your service includes a pre-configured router provided for the duration of your membership. Equipment must be returned upon cancellation. Your 21-day money-back guarantee begins upon receipt of your device.
            </p>
        </div>

        <button class="btn-primary w-full py-[18px] bg-green text-white rounded-[14px] text-[17px] font-bold flex items-center justify-center gap-2 mb-3.5"
                style="box-shadow: 0 0 40px var(--color-green-glow)">
            <x-icons.lock class="w-[18px] h-[18px] text-white" /> Complete Purchase -- ${{ $total }}
        </button>
        <div class="flex items-center justify-center gap-1.5 mb-12">
            <x-icons.shield class="w-3 h-3 text-green" />
            <span class="text-[13px] text-zinc-400">256-bit encryption. 21-day money-back guarantee.</span>
        </div>
    </div>
</div>
