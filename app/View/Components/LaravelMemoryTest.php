<?php

namespace App\View\Components;

use App\Debug\MemoryFootprintLogger;
use Illuminate\View\Component;

class LaravelMemoryTest extends Component
{
     use MemoryFootprintLogger;

    public function __construct(public array $largeArray = [])
    {
        $this->largeArray = array_fill(0, 1000000, 0);

        dump($this->memoryReport('__construct'));
    }

    public function render()
    {
        dump($this->memoryReport('render'));

        return view('components.laravel-memory-test');
    }
}
