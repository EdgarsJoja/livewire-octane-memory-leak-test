<div>
    @if($type === 'laravel')
        <x-laravel-memory-test />
    @elseif($type === 'livewire')
        <livewire:livewire-memory-test />
    @else
        Type: {{ $type }} {{ memory_get_usage(true) }}
        path must be `/memory-test/laravel` or `/memory-test/livewire`
    @endif
</div>
