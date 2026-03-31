<?php

namespace App\Livewire;

use Livewire\Component;

class PlaceholderPage extends Component
{
    public string $pageTitle = '';
    public string $pageSubtitle = '';

    public function mount(string $title = '', string $subtitle = ''): void
    {
        $this->pageTitle = $title;
        $this->pageSubtitle = $subtitle;
    }

    public function render()
    {
        return view('livewire.placeholder-page')->layout('layouts.app');
    }
}
