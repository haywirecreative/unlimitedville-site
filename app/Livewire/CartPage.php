<?php

namespace App\Livewire;

use Livewire\Component;

class CartPage extends Component
{
    public ?array $plan = null;

    public function mount(?string $plan = null): void
    {
        $plans = collect(config('plans'));
        $this->plan = $plans->firstWhere('id', $plan ?? '5g-ultra') ?? $plans->last();
    }

    public function render()
    {
        return view('livewire.cart-page', [
            'total' => $this->plan['monthly'] + $this->plan['activation'],
        ])->layout('layouts.app');
    }
}
