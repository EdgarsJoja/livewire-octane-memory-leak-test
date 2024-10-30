<?php

declare(strict_types=1);

namespace App\Debug;

trait MemoryFootprintLogger
{
    public function bootMemoryFootprintLogger(): void
    {
        dump($this->memoryReport('boot'));
    }

    public function mountMemoryFootprintLogger(): void
    {
        dump($this->memoryReport('mount'));
    }

    public function renderingMemoryFootprintLogger(): void
    {
        dump($this->memoryReport('rendering'));
    }

    public function renderedMemoryFootprintLogger(): void
    {
        dump($this->memoryReport('rendered'));
    }

    protected function memoryUsageInMegaBytes(): int
    {
        return (int) (memory_get_peak_usage() / (1024 * 1024));
    }

    protected function memoryReport(string $method): string
    {
        return sprintf('%s (%s) using %s MB', $this::class, $method, $this->memoryUsageInMegaBytes());
    }
}
