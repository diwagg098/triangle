
<div class="container mt-5">
    <form wire:submit.prevent="generateTriangle">
        <div class="form-group">
            <label for="height">Input Angka:</label>
            <input type="number" wire:model="number" class="form-control" id="number" placeholder="">
        </div>
    </form>

    <h5>Output:</h5>
    <div class="mt-4">
        @for($i = 1; $i <= $number; $i++)
            @for($k = 1; $k <= $number - $i; $k++)
                {{ " " }}
            @endfor
            <br>
            @for ($j = 1; $j <= $i; $j++) 
                {{ $j }}
            @endfor
        @endfor
    </div>
</div>
