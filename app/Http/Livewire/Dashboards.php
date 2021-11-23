<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboards extends Component
{
    public function render()
    {
        return view('livewire.dashboards')->extends('layout.backend.main')->section('konten');
    }
}
