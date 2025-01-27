<div class="container">
    Timestamp: {{ time() }}
    <br />
    Used memory: {{ get_memory() }}
    <br />

    @if($type === 'laravel')
        <x-laravel-memory-test />
    @elseif($type === 'livewire')
        <livewire:livewire-memory-test />
    @else
        Type: {{ $type ?: 'UNKNOWN' }}.
        Path must be `/memory-test/laravel` or `/memory-test/livewire`
    @endif

    <style>
        html, body {
            height: 100%;
            background: #181C14;
            color: #ECDFCC;
        }

        .container {
            display: grid;
            place-content: center;
            height: 100%;
        }
    </style>
</div>
