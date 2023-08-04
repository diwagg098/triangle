<div class="container mt-5">
    <form wire:submit.prevent="generateTriangle">
        <div class="form-group">
            <label for="height">Input Angka:</label>
            <input type="number" wire:model="height" class="form-control" id="height" placeholder="">
            @error('height') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </form>

    @if($height)
        <div class="mt-4">
            <h5>Output:</h5>
            @for($i = 1; $i <= $height; $i++)
                <p>{{ str_repeat(' ', $height - $i) . str_repeat('*', $i) }}</p>
            @endfor
        </div>
    @endif
</div>
