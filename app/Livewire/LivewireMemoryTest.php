<?php

namespace App\Livewire;

use Livewire\Component;
use App\Debug\MemoryFootprintLogger;

class LivewireMemoryTest extends Component
{
//    use MemoryFootprintLogger;

    public array $largeArray = [];

    public function mount(): void
    {
        $this->largeArray = array_fill(0, 1000000, 0);

//        Cleanup using defer function seems to fix memory leak.
//        defer(fn() => $this->largeArray = []);
    }

    public function render()
    {
        return view('livewire.livewire-memory-test');
    }
}
