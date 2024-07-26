<div>
    <div class="flex flex-col items-center">
        <div class="grid grid-cols-3 gap-2">
            @foreach($grid as $x => $row)
                @foreach($row as $y => $color)
                    <div
                        class="w-20 h-20 cursor-pointer"
                        style="background-color: {{ $color }};"
                        wire:click="toggleSquare({{ $x }}, {{ $y }})">
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
