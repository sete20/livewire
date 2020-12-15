<div>
    <h1>Conter is here sir</h1>
    <h3>{{ $Num }}</h3>
    {{--  لمكالمة ميثود   --}}
    <button wire:click="add"> ++ </button>
    <button wire:click="minus"> --</button>
    {{--  لعمل ربط بايندينج  --}}
    {{--  <input type="text" wire:model="name">  --}}
    {{--  لعمل ربط بايندينج و تقليل عدد الريكوستات   --}}
    <input type="text" wire:model.lazy="name">

    <h3>{{ $name }}</h3>

</div>
