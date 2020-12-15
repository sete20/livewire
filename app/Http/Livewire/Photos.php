<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\image;
use Livewire\WithFileUploads;

class Photos extends Component
{
    use WithFileUploads;

    public $photo, $name;

    public function render()
    {
        return view('livewire.photos', [
            'photos' => image::all(),
        ]);
    }
    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'photo.*' => 'required',
        ]);

        $photo = md5($this->photo . microtime()) . '.' . $this->photo->extension();
        $name = $this->name;
        $photo =    $this->photo->storeAs('photos', $photo);
        image::create(['name' => $name, 'image' => $photo]);
    }
}
