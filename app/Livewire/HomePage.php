<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public string $address = '';
    public bool $addressChecked = false;
    public string $addressResult = '';

    // Quiz state
    public int $quizStep = 0;
    public array $quizAnswers = [];
    public ?array $quizResult = null;

    // FAQ state
    public ?int $faqOpen = null;

    public function checkAddress(): void
    {
        if (strlen($this->address) < 5) return;

        $this->addressChecked = true;
        $this->addressResult = (
            str_contains(strtolower($this->address), 'po box') ||
            strlen($this->address) < 10
        ) ? 'verify' : 'available';
    }

    public function quizPick(int $questionIndex, int $value): void
    {
        $this->quizAnswers[$questionIndex] = $value;

        $questions = $this->getQuizQuestions();
        if ($questionIndex < count($questions) - 1) {
            $this->quizStep = $questionIndex + 1;
        } else {
            $total = array_sum($this->quizAnswers);
            $plans = config('plans');
            $this->quizResult = $total <= 4 ? $plans[0] : ($total <= 7 ? $plans[1] : $plans[2]);
        }
    }

    public function resetQuiz(): void
    {
        $this->quizStep = 0;
        $this->quizAnswers = [];
        $this->quizResult = null;
    }

    public function toggleFaq(int $index): void
    {
        $this->faqOpen = $this->faqOpen === $index ? null : $index;
    }

    public function getQuizQuestions(): array
    {
        return [
            [
                'q' => 'How many devices will connect?',
                'opts' => [
                    ['l' => '1-3 devices', 'v' => 1, 'd' => 'Phone, laptop, maybe a tablet'],
                    ['l' => '4-8 devices', 'v' => 2, 'd' => 'Multiple people streaming'],
                    ['l' => '9+ devices', 'v' => 3, 'd' => 'Smart home, cameras, everything'],
                ],
            ],
            [
                'q' => 'What will you use it for most?',
                'opts' => [
                    ['l' => 'Browsing & email', 'v' => 1, 'd' => 'News, social media, light use'],
                    ['l' => 'Streaming & video calls', 'v' => 2, 'd' => 'Netflix, Zoom, YouTube'],
                    ['l' => 'Gaming & 4K streaming', 'v' => 3, 'd' => 'Low latency, heavy bandwidth'],
                ],
            ],
            [
                'q' => 'Where will you use it?',
                'opts' => [
                    ['l' => 'One fixed location', 'v' => 1, 'd' => 'Home, cabin, or office'],
                    ['l' => 'Mostly one spot, sometimes travel', 'v' => 2, 'd' => 'Home base + occasional trips'],
                    ['l' => 'On the move regularly', 'v' => 3, 'd' => 'RV, travel, multiple locations'],
                ],
            ],
        ];
    }

    public function render()
    {
        return view('livewire.home-page', [
            'plans' => config('plans'),
            'quizQuestions' => $this->getQuizQuestions(),
            'reviews' => [
                ['name' => 'Mike', 'rating' => 5, 'verified' => true, 'text' => 'We moved further out into the country where wired internet was not available. Unlimitedville has been a game changer for our family.', 'plan' => '4G Plus'],
                ['name' => 'Timothy R.', 'rating' => 5, 'verified' => true, 'text' => 'This was my last option where I live and I\'m glad I got it. Best speeds I\'ve ever seen here.', 'plan' => '5G Ultra'],
                ['name' => 'Krystal P.', 'rating' => 5, 'verified' => true, 'text' => 'The internet is AMAZING! It\'s so fast, and in my home we have multiple devices connected with no lag.', 'plan' => '4G Plus'],
                ['name' => 'Jamiel R.', 'rating' => 5, 'verified' => true, 'text' => 'What a game changer! At first I was a little skeptical about the unlimited 4G but now I\'m a believer.', 'plan' => '4G Plus'],
            ],
            'faqs' => [
                ['q' => 'How does it work?', 'a' => 'We ship you a pre-configured cellular router. Plug it into any outlet, connect your devices to WiFi, and you\'re online. No technician visits. Setup takes under 5 minutes.'],
                ['q' => 'What\'s the activation fee?', 'a' => 'The one-time activation fee covers provisioning your cellular router and setting up your account. The router is provided for your use throughout your service -- it\'s not sold separately. The 4G Lite activation fee is fully waived.'],
                ['q' => 'Do I own the router?', 'a' => 'The router is provided as part of your service for as long as you\'re a member. If you cancel, you return the device. Think of it like a cable company\'s modem -- included with service, not purchased.'],
                ['q' => 'What if it doesn\'t work at my location?', 'a' => 'Every plan includes a 21-day money-back guarantee. Test the service risk-free. If it doesn\'t perform well, return the router within 21 days for a full refund.'],
                ['q' => 'Are there contracts?', 'a' => 'Never. All plans are month-to-month. Cancel anytime -- no penalties, no fees.'],
            ],
            'useCases' => [
                ['icon' => 'signal', 'label' => 'Rural Homes', 'slug' => 'rural', 'desc' => 'Fast internet where cable and fiber don\'t reach'],
                ['icon' => 'globe', 'label' => 'RV & Travel', 'slug' => 'rv', 'desc' => 'Stay connected on the road, anywhere you park'],
                ['icon' => 'zap', 'label' => 'Commercial Transportation', 'slug' => 'transportation', 'desc' => 'Reliable internet for fleets, long-haul, and mobile operations'],
                ['icon' => 'signal', 'label' => 'Rental & Vacation Homes', 'slug' => 'rental', 'desc' => 'Provide guests with fast, reliable WiFi at your property'],
            ],
        ])->layout('layouts.app');
    }
}
