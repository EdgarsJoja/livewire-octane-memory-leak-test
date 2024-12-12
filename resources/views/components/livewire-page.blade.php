<div>
    Used memory: {{ get_memory() }}

    @if($type === 'laravel')
        <x-laravel-memory-test />
    @elseif($type === 'livewire')
        <livewire:livewire-memory-test />
    @else
        Type: {{ $type }}
        path must be `/memory-test/laravel` or `/memory-test/livewire`
    @endif
</div>
