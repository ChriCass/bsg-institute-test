<?php

namespace App\Livewire;

use App\Models\Personal;
use Livewire\Component;

class PersonalCounter extends Component
{
    public function render()
    {
        $actived = [];
        $Personal = Personal::all();
        foreach ($Personal as $p) {
            if ($p->estado == 'activo') {
                array_push($actived, $p);
            }
        };

        $PersonalWorking = count($actived);


        return view('livewire.personal-counter', compact('PersonalWorking'));
    }
}
