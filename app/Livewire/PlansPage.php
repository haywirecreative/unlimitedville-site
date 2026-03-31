<?php

namespace App\Livewire;

use Livewire\Component;

class PlansPage extends Component
{
    public string $address = '';
    public bool $addressChecked = false;
    public string $addressResult = '';
    public ?string $expanded = null;
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

    public function toggleExpanded(string $planId): void
    {
        $this->expanded = $this->expanded === $planId ? null : $planId;
    }

    public function toggleFaq(int $index): void
    {
        $this->faqOpen = $this->faqOpen === $index ? null : $index;
    }

    public function render()
    {
        return view('livewire.plans-page', [
            'plans' => config('plans'),
            'faqs' => [
                ['q' => 'How does Unlimitedville work?', 'a' => 'We ship you a pre-configured cellular router. Plug it into any outlet, connect your devices to WiFi, and you\'re online in under 5 minutes. No technician visits, no installation appointments.'],
                ['q' => 'What\'s the activation fee?', 'a' => 'The one-time activation fee covers provisioning your router and setting up your account on our network. The router is provided for your use throughout your membership -- it\'s not sold separately. The 4G Lite activation fee is fully waived.'],
                ['q' => 'Do I own the router?', 'a' => 'The router is provided as part of your membership for as long as you\'re an active member. If you cancel, you return the device. Think of it like a cable company\'s modem -- included with service, not purchased.'],
                ['q' => 'What if it doesn\'t work at my location?', 'a' => 'Every plan includes a 21-day money-back guarantee. Test the service risk-free. If it doesn\'t perform well, return the router within 21 days for a full refund -- no questions asked.'],
                ['q' => 'Are there any contracts?', 'a' => 'Never. All plans are month-to-month. Cancel anytime with zero penalties and zero fees.'],
                ['q' => 'Can I take it with me when I travel?', 'a' => 'Yes. Your Unlimitedville router works anywhere there\'s a cellular signal. Take it from your home to your RV, vacation cabin, or job site. Same plan, same speed, fully portable.'],
            ],
        ])->layout('layouts.app');
    }
}
