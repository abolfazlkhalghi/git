<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Project extends Component
{
    public $ProjectSum = 0;

    public function render()
    {
        return view('livewire.project');

    }
    public function SumProject()
    {
        echo $ProjectSum;
    }
}
