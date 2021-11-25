<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Homes extends Component
{
    public function render()
    {
        return view('livewire.homes')->extends('layouts.frontend.home.main')->section('home1');
    }
}
