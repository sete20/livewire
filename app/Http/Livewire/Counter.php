<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    // اي بابلك فاريبول بامكاني منادته من الفيو عادي
    public $Num = 10;
    public $name = "abdelrhman";
    public function render()
    {
        return view('livewire.counter');
    }
    public function minus()
    {
        $this->Num--;
    }
    public function add()
    {
        $this->Num++;
    }
}
