## Setup

Clone repository and run:
```bash
./run.sh
```

## Testing

Go to `/memory-test/laravel`.
Repeatedly reloading page (20+) does NOT increase memory usage (seen in dump output).

Go to `/memory-test/livewire`.
Repeatedly reloading page increases memory usage, eventually it will crash due to memory exhaustion error.

![Demonstration](test.gif)
