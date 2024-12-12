<?php

namespace App\View\Components;

use App\Debug\MemoryFootprintLogger;
use Closure;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class LivewirePage extends Component
{
    use MemoryFootprintLogger;

    public string $type = '';

    public function mount(string $type = '')
    {
        $this->type = $type;
    }

    public function render(): View|Closure|string
    {
        return view('components.livewire-page');
    }
}
