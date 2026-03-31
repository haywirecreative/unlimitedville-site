<div class="min-h-screen bg-zinc-50 pt-16">
    {{-- Hero Header --}}
    <div class="px-6 pt-10 pb-12 bg-dark text-center">
        <p class="text-xs font-bold tracking-[3px] text-green uppercase mb-3">Plans & Pricing</p>
        <h1 class="text-[38px] font-black text-white tracking-tighter leading-[1.05] mb-3.5">No wires means<br/>no boundaries.</h1>
        <p class="text-[16px] text-zinc-400 leading-relaxed max-w-[310px] mx-auto mb-7">Every plan includes unlimited data, a pre-configured router, and our 21-day money-back guarantee.</p>

        {{-- Trust badges --}}
        <div class="flex justify-center gap-2 flex-wrap mb-2">
            @foreach(['No credit checks', 'No contracts', '21-day guarantee'] as $badge)
            <div class="flex items-center gap-1.5 px-3 py-[7px] bg-green/[0.03] border border-green/[0.09] rounded-lg">
                <x-icons.check class="w-3 h-3 text-green" />
                <span class="text-xs font-semibold text-green">{{ $badge }}</span>
            </div>
            @endforeach
        </div>

        {{-- As Seen On --}}
        <div class="flex flex-wrap justify-center gap-x-3 gap-y-2 mt-5 pt-5 border-t border-dark-border">
            <span class="text-xs font-semibold tracking-[2px] text-zinc-600 uppercase w-full text-center mb-1">As seen on</span>
            @foreach(['Forbes','Business Insider','High Speed Internet','Satellite Internet','Mobile Internet Resource','Smart Survivalist','Internet Access Guide'] as $i => $name)
                <span class="text-xs font-medium text-zinc-500 whitespace-nowrap">{{ $name }}</span>
                @if($i < 6)<span class="text-xs text-zinc-700">|</span>@endif
            @endforeach
        </div>
    </div>

    {{-- Coverage Checker --}}
    <div class="px-6 pb-8 bg-dark">
        <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-xl bg-green/[0.06] flex items-center justify-center shrink-0">
                <x-icons.pin class="w-5 h-5 text-green" />
            </div>
            <div>
                <h3 class="text-lg font-bold text-white leading-tight">Check Your Coverage</h3>
                <p class="text-[13px] text-zinc-500">Enter your address to check availability</p>
            </div>
        </div>
        @if(!$addressChecked)
        <div class="flex gap-2">
            <input type="text" wire:model="address" wire:keydown.enter="checkAddress"
                   placeholder="Enter your address..."
                   class="flex-1 py-[15px] px-4 rounded-xl border border-dark-border bg-dark-card text-white text-[16px] outline-none focus:border-green focus:shadow-[0_0_0_3px_rgba(85,182,133,0.1)]" />
            <button wire:click="checkAddress"
                    class="btn-primary py-[15px] px-6 bg-green text-white rounded-xl text-[15px] font-bold">Check</button>
        </div>
        @elseif($addressResult === 'verify')
        <div class="p-4 rounded-xl bg-yellow-500/[0.06] border border-yellow-500/15">
            <div class="flex items-center gap-2.5 mb-1.5">
                <x-icons.phone class="w-3.5 h-3.5 text-yellow-500" />
                <span class="text-[15px] font-bold text-yellow-700">Coverage varies in your area</span>
            </div>
            <p class="text-[13px] text-zinc-500 leading-relaxed ml-[34px]">Call us to verify: <a href="tel:+18884222907" class="text-green font-semibold">888.422.2907</a></p>
        </div>
        @else
        <div class="p-4 rounded-xl bg-green/[0.03] border border-green/[0.09]">
            <div class="flex items-center gap-2.5 mb-1.5">
                <div class="w-6 h-6 rounded-full bg-green flex items-center justify-center shrink-0">
                    <x-icons.check class="w-3.5 h-3.5 text-white" />
                </div>
                <span class="text-[15px] font-bold text-green-text">Coverage available</span>
            </div>
            <p class="text-[13px] text-zinc-400 leading-relaxed ml-[34px]">Multiple carriers serve your area. All plans backed by our 21-day money-back guarantee.</p>
        </div>
        @endif
        <p class="text-xs text-zinc-600 mt-3 flex items-center gap-1.5">
            <x-icons.phone class="w-3 h-3 text-zinc-600" /> Need help choosing? <a href="tel:+18884222907" class="text-green-text font-semibold">888.422.2907</a>
        </p>
    </div>

    {{-- Plan Cards --}}
    <div class="px-5 pt-6">
        <div class="flex flex-col gap-4">
            @foreach($plans as $plan)
            @php
                $isDark = $plan['popular'];
                $total = $plan['monthly'] + $plan['activation'];
            @endphp
            <div class="card-hover rounded-[20px] overflow-hidden {{ $isDark ? 'bg-dark' : 'bg-white' }} border {{ $isDark ? 'border-green/20' : 'border-zinc-200' }} relative"
                 style="{{ !$isDark ? 'border-left: 4px solid ' . $plan['color'] : '' }}; {{ $isDark ? 'box-shadow: 0 0 60px rgba(85,182,133,0.04), 0 24px 80px rgba(0,0,0,0.3)' : 'box-shadow: 0 1px 4px rgba(0,0,0,0.04)' }}">
                <div class="p-[26px] px-[22px]">
                    <p class="text-xs font-bold tracking-[2.5px] uppercase mb-1" style="color: {{ $plan['color'] }}">{{ $plan['tier'] }}</p>
                    <div class="flex items-center gap-2.5 mb-1">
                        <h3 class="text-2xl font-extrabold {{ $isDark ? 'text-white' : 'text-zinc-900' }} tracking-tight">{{ $plan['name'] }}</h3>
                        @if($plan['popular'])
                        <span class="px-2.5 py-1 rounded-full bg-green text-white text-[11px] font-bold tracking-wide">POPULAR</span>
                        @endif
                    </div>
                    <p class="text-sm {{ $isDark ? 'text-zinc-400' : 'text-zinc-500' }} mb-[22px]">{{ $plan['best_for'] }}</p>

                    <div class="flex items-baseline gap-0.5 mb-4">
                        <span class="text-5xl font-black {{ $isDark ? 'text-white' : 'text-zinc-900' }} tracking-tighter leading-none">${{ $plan['monthly'] }}</span>
                        <span class="text-[15px] font-medium {{ $isDark ? 'text-zinc-400' : 'text-zinc-500' }}">/mo</span>
                    </div>

                    {{-- Pricing breakdown --}}
                    <div class="p-3.5 px-4 rounded-[14px] {{ $isDark ? 'bg-dark-card border-dark-border' : 'bg-zinc-50 border-zinc-200' }} border mb-[18px]">
                        <div class="flex justify-between items-center mb-2.5">
                            <span class="text-[13px] {{ $isDark ? 'text-zinc-400' : 'text-zinc-500' }}">One-time activation</span>
                            @if($plan['activation'] === 0)
                                <span class="text-[15px] font-extrabold text-green-text">$0</span>
                            @else
                                <div class="flex items-center gap-1.5">
                                    <span class="text-xs {{ $isDark ? 'text-zinc-400' : 'text-zinc-500' }} line-through">${{ $plan['activation_orig'] }}</span>
                                    <span class="text-[15px] font-extrabold {{ $isDark ? 'text-white' : 'text-zinc-900' }}">${{ $plan['activation'] }}</span>
                                    <span class="text-xs font-semibold text-green-text px-[7px] py-0.5 rounded-full bg-green/[0.07]">{{ $plan['discount'] }}</span>
                                </div>
                            @endif
                        </div>
                        <div class="flex justify-between items-center pt-2.5 border-t {{ $isDark ? 'border-dark-border' : 'border-zinc-200' }}">
                            <span class="text-sm font-bold {{ $isDark ? 'text-zinc-300' : 'text-zinc-700' }}">Due today</span>
                            <span class="text-xl font-black {{ $isDark ? 'text-white' : 'text-zinc-900' }} tracking-tight">${{ $total }}</span>
                        </div>
                    </div>

                    {{-- Features --}}
                    <div class="mb-5">
                        @foreach($plan['features'] as $feature)
                        <div class="flex items-start gap-2.5 py-2">
                            <x-icons.check class="w-[15px] h-[15px] text-green mt-0.5 shrink-0" />
                            <span class="text-sm {{ $isDark ? 'text-zinc-300' : 'text-zinc-700' }}">{{ $feature }}</span>
                        </div>
                        @endforeach
                    </div>

                    <a href="{{ route('cart', ['plan' => $plan['id']]) }}"
                       class="btn-primary w-full py-4 {{ $isDark ? 'bg-green' : 'bg-zinc-900' }} text-white rounded-[14px] text-[16px] font-bold flex items-center justify-center gap-2"
                       style="{{ $isDark ? 'box-shadow: 0 0 40px var(--color-green-glow)' : '' }}">
                        Get {{ $plan['name'] }} <x-icons.arrow class="w-3.5 h-3.5" />
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Comparison Table --}}
    <div class="px-5 pt-8 pb-4">
        <h3 class="text-xl font-black text-zinc-900 tracking-tight mb-4 text-center">Compare Plans</h3>
        <div class="rounded-[16px] overflow-hidden border border-zinc-200">
            {{-- Header row --}}
            <div class="grid grid-cols-4 text-center" style="background: linear-gradient(135deg, #3d9e6e 0%, #55b685 50%, #3d8c63 100%)">
                <div class="p-3 text-xs font-bold text-white/80"></div>
                @foreach($plans as $plan)
                <div class="p-3">
                    <p class="text-xs font-bold text-white">{{ $plan['name'] }}</p>
                    <p class="text-[10px] text-white/70">${{ $plan['monthly'] }}/mo</p>
                </div>
                @endforeach
            </div>
            {{-- Data rows --}}
            @foreach([
                ['label' => 'Max Speed', 'key' => 'max_speed'],
                ['label' => 'Latency', 'key' => 'latency'],
                ['label' => 'Data Limit', 'values' => ['Unlimited', 'Unlimited', 'Unlimited']],
                ['label' => 'Best For', 'key' => 'best_for'],
            ] as $ri => $row)
            <div class="grid grid-cols-4 text-center {{ $ri % 2 === 0 ? 'bg-green/[0.88]' : 'bg-green/[0.78]' }}">
                <div class="p-3 text-xs font-semibold text-white/90 flex items-center justify-center">{{ $row['label'] }}</div>
                @foreach($plans as $pi => $plan)
                <div class="p-3 text-xs text-white/90 flex items-center justify-center">
                    {{ isset($row['key']) ? $plan[$row['key']] : ($row['values'][$pi] ?? '') }}
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>

    {{-- Included with every plan --}}
    <div class="px-5 py-8">
        <h3 class="text-xl font-black text-zinc-900 tracking-tight mb-5 text-center">Included with every plan</h3>
        <div class="grid grid-cols-2 gap-3">
            @foreach([
                ['icon' => 'shield', 'title' => '21-Day Money-Back'],
                ['icon' => 'lock', 'title' => 'Price Lock Guarantee'],
                ['icon' => 'check', 'title' => 'No Contracts'],
                ['icon' => 'wifi', 'title' => 'Unlimited Data'],
                ['icon' => 'zap', 'title' => '5-Minute Setup'],
                ['icon' => 'phone', 'title' => '24/7 USA Support'],
                ['icon' => 'globe', 'title' => 'Fully Portable'],
                ['icon' => 'shield', 'title' => 'Built-In Security'],
            ] as $item)
            <div class="flex items-center gap-2.5 p-3.5 rounded-xl bg-white border border-zinc-200">
                <x-dynamic-component :component="'icons.' . $item['icon']" class="w-4 h-4 text-green-text shrink-0" />
                <span class="text-[13px] font-semibold text-zinc-700">{{ $item['title'] }}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- FAQ --}}
    <div class="px-5 py-8 bg-zinc-50 border-t border-zinc-200">
        <p class="text-xs font-bold tracking-[3px] text-green-text uppercase mb-2.5 text-center">FAQ</p>
        <h2 class="text-[28px] font-black text-zinc-900 tracking-tight mb-8 text-center">Common questions</h2>
        @foreach($faqs as $i => $faq)
        <div class="rounded-[14px] overflow-hidden bg-white border mb-2 transition-colors duration-200"
             style="border-color: {{ $faqOpen === $i ? 'rgba(85,182,133,0.2)' : '#e4e4e7' }}">
            <button wire:click="toggleFaq({{ $i }})"
                    class="w-full py-[18px] px-5 bg-transparent border-none text-[15px] font-semibold text-zinc-900 text-left flex justify-between items-center">
                <span class="pr-3">{{ $faq['q'] }}</span>
                @if($faqOpen === $i)
                    <x-icons.chev-up class="w-3.5 h-3.5 text-zinc-400" />
                @else
                    <x-icons.chev-down class="w-3.5 h-3.5 text-zinc-400" />
                @endif
            </button>
            <div class="faq-answer {{ $faqOpen === $i ? 'open' : '' }}">
                <div class="px-5 pb-[18px] text-[15px] text-zinc-500 leading-relaxed">{{ $faq['a'] }}</div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Final CTA --}}
    <div class="py-12 px-6 bg-dark text-center">
        <h2 class="text-[32px] font-black text-white tracking-tight leading-[1.08] mb-3">Ready to get started?</h2>
        <p class="text-[15px] text-zinc-400 mb-6">21-day money-back guarantee. No contracts.</p>
        <a href="tel:+18884222907"
           class="inline-flex items-center gap-2 py-3.5 px-8 border border-white/15 rounded-[14px] text-white text-[15px] font-semibold">
            <x-icons.phone class="w-4 h-4 text-green" /> Call 888.422.2907
        </a>
    </div>
</div>
