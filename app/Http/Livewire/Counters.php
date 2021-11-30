<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counters extends Component
{
    public $nilai;
    public $hasil=[];
    public $i=0;


    public function store()
    {
        $this->i++;
        $this->hasil[ $this->i]=$this->nilai;
    }
 
    public function render()
    {
        return view('livewire.counters')->layout('layouts.back.app');
    }
}
