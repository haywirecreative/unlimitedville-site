<div>
    {{-- ===== HERO ===== --}}
    <section class="min-h-[92svh] flex flex-col relative overflow-hidden bg-dark">
        <img src="{{ asset('assets/images/hero.jpg') }}" alt="Rural landscape" class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(10,10,10,0.3) 0%, rgba(10,10,10,0.05) 30%, rgba(10,10,10,0.5) 55%, rgba(10,10,10,0.95) 100%)"></div>

        <div class="flex-1 flex flex-col justify-end items-center relative z-[1] px-6 pb-12 text-center">
            <div class="fade-up fade-up-d2 flex items-center gap-1.5 mb-5">
                <x-stars />
                <span class="text-[13px] font-bold text-white">4.5</span>
                <span class="text-xs text-zinc-400">from 213+ reviews</span>
            </div>

            <h1 class="fade-up fade-up-d3 text-[44px] font-black leading-[1.05] text-white tracking-tight mb-[18px]">
                Home internet<br/>that goes<br/><span class="text-green">where you do.</span>
            </h1>
            <p class="fade-up fade-up-d4 text-[15px] leading-relaxed text-zinc-300 mb-7 max-w-[320px]">
                We ship it. You plug it in. Use it wirelessly anywhere in the country.
            </p>

            <div class="fade-up fade-up-d5 w-full max-w-[320px]">
                <a href="{{ route('plans') }}"
                   class="btn-primary w-full py-[18px] bg-green text-white rounded-[14px] text-[17px] font-bold flex items-center justify-center gap-2"
                   style="box-shadow: 0 0 40px var(--color-green-glow), 0 4px 24px rgba(0,0,0,0.4)">
                    View Plans <x-icons.arrow class="w-4 h-4" />
                </a>
            </div>

            <div class="fade-up fade-up-d7 flex gap-4 mt-5 justify-center">
                @foreach(['21-day guarantee', 'No contracts', 'Ships in 24hrs'] as $badge)
                <span class="text-[11px] text-zinc-400 font-medium flex items-center gap-1">
                    <x-icons.check class="w-[11px] h-[11px] text-green" /> {{ $badge }}
                </span>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== AS SEEN ON ===== --}}
    <section class="py-7 px-6 bg-brand-black border-t border-b border-dark-border">
        <p class="text-xs font-semibold tracking-[2.5px] text-zinc-600 uppercase text-center mb-5">As seen on</p>
        <div class="flex flex-wrap justify-center gap-x-3 gap-y-2.5">
            @foreach(['Forbes','Business Insider','High Speed Internet','Satellite Internet','Mobile Internet Resource','Smart Survivalist','Internet Access Guide'] as $i => $name)
                <span class="text-[13px] font-medium text-zinc-500 tracking-wide whitespace-nowrap">{{ $name }}</span>
                @if($i < 6)<span class="text-[13px] text-zinc-700">|</span>@endif
            @endforeach
        </div>
    </section>

    {{-- ===== COVERAGE CHECK ===== --}}
    <section class="py-8 px-5 bg-brand-black border-t border-b border-dark-border">
        <div class="flex items-center gap-3 mb-3.5">
            <div class="w-9 h-9 rounded-[10px] bg-green/[0.06] flex items-center justify-center shrink-0">
                <x-icons.pin class="w-[18px] h-[18px] text-green-text" />
            </div>
            <div>
                <h3 class="text-[16px] font-bold text-white leading-tight">Check Your Coverage</h3>
                <p class="text-[13px] text-zinc-500">Enter your address to see available networks</p>
            </div>
        </div>
        @if(!$addressChecked)
        <div class="flex gap-2">
            <input type="text" wire:model="address" wire:keydown.enter="checkAddress"
                   placeholder="Enter your address..."
                   class="flex-1 py-3.5 px-4 rounded-xl border border-dark-border bg-dark-card text-white text-[15px] outline-none focus:border-green focus:shadow-[0_0_0_3px_rgba(85,182,133,0.1)]" />
            <button wire:click="checkAddress"
                    class="btn-primary py-3.5 px-[22px] bg-green text-white rounded-xl text-sm font-bold transition-opacity"
                    :class="{ 'opacity-35': '{{ strlen($address) }}' < 5 }">Check</button>
        </div>
        @elseif($addressResult === 'verify')
        <div class="p-3.5 px-4 rounded-xl bg-yellow-500/[0.06] border border-yellow-500/15">
            <div class="flex items-center gap-2.5 mb-1">
                <x-icons.phone class="w-3.5 h-3.5 text-yellow-500" />
                <span class="text-sm font-bold text-yellow-700">Coverage varies at this location</span>
            </div>
            <p class="text-xs text-zinc-500 leading-relaxed ml-8">Call us to verify service availability: <a href="tel:+18884222907" class="text-green-text font-semibold">888.422.2907</a></p>
        </div>
        @else
        <div class="p-3.5 px-4 rounded-xl bg-green/[0.03] border border-green/[0.09]">
            <div class="flex items-center gap-2.5 mb-1">
                <div class="w-[22px] h-[22px] rounded-full bg-green flex items-center justify-center shrink-0">
                    <x-icons.check class="w-3 h-3 text-white" />
                </div>
                <span class="text-sm font-bold text-green-text">Coverage available</span>
            </div>
            <p class="text-xs text-zinc-400 leading-relaxed ml-8">Multiple carriers serve your area. 21-day guarantee included.</p>
        </div>
        @endif
        <p class="text-xs text-zinc-600 mt-2.5 flex items-center gap-1">
            <x-icons.phone class="w-3 h-3 text-zinc-600" /> Need help? <a href="tel:+18884222907" class="text-green-text font-semibold">888.422.2907</a>
        </p>
    </section>

    {{-- ===== HOW IT WORKS ===== --}}
    <section class="py-14 px-6 bg-white">
        <p class="text-xs font-bold tracking-[3px] text-green-text uppercase mb-2.5 text-center">How it works</p>
        <h2 class="text-4xl font-black text-zinc-900 tracking-tight mb-3 text-center leading-[1.05]">Online in minutes,<br/>not days.</h2>
        <p class="text-[15px] text-zinc-500 text-center mb-9 max-w-[280px] mx-auto leading-relaxed">Three steps. No technicians. No wait.</p>

        @foreach([
            ['n' => '01', 't' => 'Choose your plan', 'd' => 'Pick the speed tier that fits your household. No credit checks, no contracts.', 'icon' => 'signal'],
            ['n' => '02', 't' => 'Unbox & plug in', 'd' => 'We ship a pre-configured cellular router. One plug, one cable. That\'s the entire setup.', 'icon' => 'router'],
            ['n' => '03', 't' => 'You\'re connected', 'd' => 'Stream, game, video call, and work from anywhere -- on every device you own.', 'icon' => 'wifi'],
        ] as $i => $step)
        <div @class(['mb-7' => $i < 2])>
            <div class="flex gap-3.5 items-start">
                <div class="min-w-[52px] h-[52px] rounded-[14px] bg-green/[0.02] border border-green/[0.07] flex items-center justify-center shrink-0">
                    <x-dynamic-component :component="'icons.' . $step['icon']" class="w-[22px] h-[22px] text-green-text" />
                </div>
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <span class="text-xs font-extrabold text-green-text font-mono">{{ $step['n'] }}</span>
                        <h3 class="text-lg font-extrabold text-zinc-900 tracking-tight">{{ $step['t'] }}</h3>
                    </div>
                    <p class="text-[15px] text-zinc-500 leading-relaxed">{{ $step['d'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    {{-- ===== PLANS PREVIEW ===== --}}
    <section class="py-12 px-5 bg-zinc-50">
        <p class="text-xs font-bold tracking-[3px] text-green-text uppercase mb-2.5 text-center">Plans</p>
        <h2 class="text-4xl font-black text-zinc-900 tracking-tight mb-1.5 text-center leading-[1.05]">Simple plans.<br/>Honest pricing.</h2>
        <p class="text-[15px] text-zinc-500 mb-2 text-center">Unlimited data on every plan. No contracts, ever.</p>
        <div class="flex justify-center mb-7">
            <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-green/[0.03]">
                <x-icons.shield class="w-[11px] h-[11px] text-green-text" />
                <span class="text-xs font-semibold text-green-text">Price Lock Guarantee -- your rate never increases</span>
            </div>
        </div>

        <div class="flex flex-col gap-3.5">
            @foreach($plans as $plan)
            @php
                $isDark = $plan['popular'];
                $bg = $isDark ? 'bg-dark' : 'bg-white';
                $txt = $isDark ? 'text-white' : 'text-zinc-900';
                $sub = $isDark ? 'text-zinc-400' : 'text-zinc-500';
                $bdr = $isDark ? 'border-green/20' : 'border-zinc-200';
            @endphp
            <div class="card-hover rounded-[20px] overflow-hidden {{ $bg }} border {{ $bdr }} relative"
                 style="border-left: 4px solid {{ $plan['color'] }}; {{ $isDark ? 'box-shadow: 0 0 60px rgba(85,182,133,0.04), 0 16px 60px rgba(0,0,0,0.25)' : 'box-shadow: 0 1px 4px rgba(0,0,0,0.04)' }}">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-1.5">
                        <div>
                            <p class="text-xs font-bold tracking-[2px] uppercase mb-0.5" style="color: {{ $plan['color'] }}">{{ $plan['tier'] }}</p>
                            <div class="flex items-center gap-2">
                                <h3 class="text-[22px] font-extrabold {{ $txt }} tracking-tight">{{ $plan['name'] }}</h3>
                                @if($plan['popular'])
                                <span class="px-2 py-0.5 rounded-full bg-green text-white text-[10px] font-bold tracking-wide">POPULAR</span>
                                @endif
                            </div>
                        </div>
                        <div class="text-right shrink-0 ml-4">
                            <span class="text-4xl font-black {{ $txt }} tracking-tighter leading-none">${{ $plan['monthly'] }}</span>
                            <span class="text-sm font-medium {{ $sub }}">/mo</span>
                        </div>
                    </div>
                    <p class="text-sm {{ $sub }} mb-[18px] leading-relaxed">Up to {{ $plan['max_speed'] }}. {{ $plan['best_for'] }}.</p>
                    <a href="{{ route('plans') }}"
                       class="btn-primary w-full py-4 {{ $isDark ? 'bg-green' : 'bg-zinc-900' }} text-white rounded-[14px] text-[15px] font-bold flex items-center justify-center gap-2"
                       style="{{ $isDark ? 'box-shadow: 0 0 40px var(--color-green-glow)' : '' }}">
                        View Details <x-icons.arrow class="w-3.5 h-3.5" />
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('plans') }}"
           class="btn-secondary w-full mt-5 py-3.5 bg-transparent border border-zinc-300 rounded-[14px] text-sm font-semibold text-zinc-700 flex items-center justify-center gap-1.5">
            Compare all plans side-by-side <x-icons.arrow class="w-3.5 h-3.5 text-zinc-700" />
        </a>
    </section>

    {{-- ===== QUIZ ===== --}}
    <section id="quiz" class="py-12 px-6 bg-dark">
        <p class="text-xs font-bold tracking-[3px] text-green-text uppercase mb-2.5 text-center">Plan finder</p>
        <h2 class="text-[32px] font-black text-white tracking-tight mb-1.5 text-center leading-[1.08]">Not sure which<br/>plan fits?</h2>
        <p class="text-[15px] text-zinc-500 mb-9 text-center">Three questions. Thirty seconds.</p>

        @if(!$quizResult)
            <div class="flex gap-1 mb-7">
                @foreach($quizQuestions as $i => $q)
                <div class="flex-1 h-[3px] rounded-sm transition-all duration-300"
                     style="background: {{ $i <= $quizStep ? '#55b685' : '#27272a' }}; {{ $i <= $quizStep ? 'box-shadow: 0 0 10px var(--color-green-glow)' : '' }}"></div>
                @endforeach
            </div>
            <p class="text-[13px] text-zinc-500 mb-1.5">Question {{ $quizStep + 1 }} of {{ count($quizQuestions) }}</p>
            <p class="text-xl font-bold text-white mb-5">{{ $quizQuestions[$quizStep]['q'] }}</p>
            @foreach($quizQuestions[$quizStep]['opts'] as $i => $opt)
            <button wire:click="quizPick({{ $quizStep }}, {{ $opt['v'] }})"
                    class="card-hover block w-full p-[18px] px-5 mb-2.5 bg-dark-card border border-dark-border rounded-[14px] text-left cursor-pointer">
                <span class="text-[16px] font-semibold text-zinc-200 block">{{ $opt['l'] }}</span>
                <span class="text-[13px] text-zinc-500 mt-0.5 block">{{ $opt['d'] }}</span>
            </button>
            @endforeach
        @else
            {{-- Result card --}}
            <div class="rounded-[20px] overflow-hidden bg-dark-card border-[1.5px] border-green/20" style="box-shadow: 0 0 60px rgba(85,182,133,0.04)">
                <div class="p-6 pb-5 border-b border-dark-border">
                    <div class="flex items-center gap-2.5 mb-3.5">
                        <div class="w-10 h-10 rounded-full bg-green/[0.07] border-2 border-green/20 flex items-center justify-center shrink-0">
                            <x-icons.check class="w-5 h-5 text-green" />
                        </div>
                        <div>
                            <p class="text-xs text-zinc-500">We recommend</p>
                            <p class="text-[22px] font-black text-white tracking-tight">{{ $quizResult['name'] }}</p>
                        </div>
                        <div class="ml-auto text-right">
                            <span class="text-[28px] font-black text-white tracking-tight">${{ $quizResult['monthly'] }}</span>
                            <span class="text-[13px] text-zinc-500">/mo</span>
                        </div>
                    </div>
                    <p class="text-sm text-zinc-400 leading-relaxed">{{ $quizResult['best_for'] }}. {{ $quizResult['audience'] }}.</p>
                </div>
                <div class="flex py-4 px-[22px]">
                    @foreach([['l' => 'Max Speed', 'v' => $quizResult['max_speed']], ['l' => 'Latency', 'v' => $quizResult['latency']], ['l' => 'Data', 'v' => 'Unlimited']] as $i => $spec)
                    <div class="flex-1 text-center {{ $i < 2 ? 'border-r border-dark-border' : '' }}">
                        <p class="text-[15px] font-extrabold text-white">{{ $spec['v'] }}</p>
                        <p class="text-[11px] text-zinc-500 mt-0.5">{{ $spec['l'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <a href="{{ route('cart', ['plan' => $quizResult['id']]) }}"
               class="btn-primary w-full py-[17px] mt-4 bg-green text-white rounded-[14px] text-[16px] font-bold flex items-center justify-center gap-2"
               style="box-shadow: 0 0 40px var(--color-green-glow)">
                Get {{ $quizResult['name'] }} <x-icons.arrow class="w-[15px] h-[15px]" />
            </a>

            <div class="flex justify-center gap-4 mt-3.5">
                <button wire:click="resetQuiz" class="text-zinc-500 text-[13px] bg-transparent border-none">Retake quiz</button>
                <a href="{{ route('plans') }}" class="text-zinc-500 text-[13px]">Compare all plans</a>
            </div>
        @endif
    </section>

    {{-- ===== LIFESTYLE BREAK ===== --}}
    <section class="relative overflow-hidden">
        <div class="relative w-full" style="aspect-ratio: 9/16; max-height: 480px;">
            <img src="{{ asset('assets/images/hero.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover" />
            <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(10,10,10,0.35) 0%, rgba(10,10,10,0.88) 100%)"></div>
            <div class="absolute bottom-10 left-6 right-6 text-left">
                <h2 class="text-[32px] font-black text-white tracking-tight leading-[1.08] mb-2.5">Your home<br/>internet,<br/>everywhere.</h2>
                <p class="text-[15px] text-zinc-300 leading-relaxed mb-5">Take it from your cabin to the campground, the RV park, or the job site. Same plan, same speed, fully portable.</p>
                <a href="{{ route('plans') }}"
                   class="btn-primary inline-flex items-center gap-2 py-3.5 px-7 bg-green text-white rounded-[14px] text-sm font-bold"
                   style="box-shadow: 0 0 40px var(--color-green-glow)">
                    View Plans <x-icons.arrow class="w-[13px] h-[13px]" />
                </a>
            </div>
        </div>
    </section>

    {{-- ===== USE CASES ===== --}}
    <section class="py-12 bg-white">
        <div class="px-6 mb-8">
            <p class="text-xs font-bold tracking-[3px] text-green-text uppercase mb-2.5 text-center">Solutions</p>
            <h2 class="text-4xl font-black text-zinc-900 tracking-tight text-center leading-[1.05]">Built for how<br/>you live.</h2>
        </div>
        <div>
            @foreach($useCases as $uc)
            <a href="{{ route('solutions') }}" class="block w-full relative overflow-hidden">
                <div class="relative w-full" style="padding-top: 56%;">
                    <img src="{{ asset('assets/images/hero.jpg') }}" alt="{{ $uc['label'] }}" class="absolute top-0 left-0 w-full h-full object-cover" />
                    <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(10,10,10,0.2) 0%, rgba(10,10,10,0.4) 40%, rgba(10,10,10,0.7) 80%, rgba(10,10,10,0.85) 100%)"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 flex items-end justify-between">
                        <div>
                            <h3 class="text-2xl font-black text-white tracking-tight leading-tight mb-1.5">{{ $uc['label'] }}</h3>
                            <p class="text-[15px] text-zinc-200 leading-relaxed max-w-[260px]">{{ $uc['desc'] }}</p>
                        </div>
                        <div class="ml-4 mb-0.5 shrink-0"><x-icons.arrow class="w-[18px] h-[18px] text-white" /></div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="px-6 pt-5">
            <a href="{{ route('solutions') }}"
               class="btn-secondary w-full py-3.5 bg-transparent border border-zinc-300 rounded-[14px] text-sm font-semibold text-zinc-700 flex items-center justify-center gap-1.5">
                View all solutions <x-icons.arrow class="w-3.5 h-3.5 text-zinc-700" />
            </a>
        </div>
    </section>

    {{-- ===== REVIEWS ===== --}}
    <section class="py-12 px-5 bg-zinc-50 border-t border-zinc-200">
        <div class="text-center mb-8">
            <p class="text-xs font-bold tracking-[3px] text-green-text uppercase mb-2.5">Reviews</p>
            <div class="flex items-center justify-center gap-2 mb-1">
                <span class="text-[40px] font-black text-zinc-900 tracking-tight">4.5</span>
                <div class="text-left">
                    <x-stars size="lg" />
                    <span class="text-[13px] text-zinc-500">213+ verified reviews</span>
                </div>
            </div>
        </div>
        @foreach($reviews as $review)
        <div class="p-5 rounded-[20px] bg-white border border-zinc-200 mb-3" style="border-left: 3px solid #3d8c63;">
            <div class="flex justify-between items-center mb-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-green/[0.04] border border-green/[0.12] flex items-center justify-center text-[15px] font-bold text-green-text">{{ substr($review['name'], 0, 1) }}</div>
                    <div>
                        <span class="text-[15px] font-semibold text-zinc-900">{{ $review['name'] }}</span>
                        @if($review['verified'])
                        <span class="ml-1.5 text-xs font-bold text-green-text px-[7px] py-0.5 rounded-full bg-green/[0.04]">VERIFIED</span>
                        @endif
                        <p class="text-xs text-zinc-400 m-0">{{ $review['plan'] }} member</p>
                    </div>
                </div>
                <x-stars size="lg" />
            </div>
            <p class="text-[15px] text-zinc-700 leading-relaxed italic">"{{ $review['text'] }}"</p>
        </div>
        @endforeach
        <a href="{{ route('reviews') }}"
           class="btn-secondary w-full py-[15px] bg-transparent border border-zinc-300 rounded-[14px] text-[15px] font-semibold text-zinc-700 flex items-center justify-center gap-1.5">
            Read all reviews <x-icons.arrow class="w-3.5 h-3.5 text-zinc-700" />
        </a>
    </section>

    {{-- ===== FAQ ===== --}}
    <section class="py-12 px-5 bg-zinc-50 border-t border-zinc-200">
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
    </section>

    {{-- ===== FINAL CTA ===== --}}
    <section class="relative overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/images/hero.jpg') }}" alt="" class="w-full h-full object-cover" />
            <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(10,10,10,0.5) 0%, rgba(10,10,10,0.92) 100%)"></div>
        </div>
        <div class="relative z-[1] py-12 px-6 text-center">
            <h2 class="text-[38px] font-black text-white tracking-tight leading-[1.05] mb-3.5">Join thousands of<br/>happy members.</h2>
            <p class="text-[16px] text-zinc-300 mb-8 leading-relaxed">Setup takes 5 minutes. Ships in 24 hours.<br/>21-day money-back guarantee.</p>
            <a href="{{ route('plans') }}"
               class="btn-primary w-full max-w-[320px] mx-auto py-[18px] bg-green text-white rounded-[14px] text-[17px] font-bold flex items-center justify-center gap-2"
               style="box-shadow: 0 0 40px var(--color-green-glow), 0 4px 20px rgba(0,0,0,0.3)">
                View Plans <x-icons.arrow class="w-4 h-4" />
            </a>
            <p class="text-[13px] text-zinc-500 mt-4">Or call <a href="tel:+18884222907" class="text-green-text font-semibold">888.422.2907</a></p>
        </div>
    </section>
</div>
