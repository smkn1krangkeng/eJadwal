<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counters extends Component
{
    public $author = '';
 
    public $post = [
        'title' => '',
        'content' => '',
    ];
    
    public function render()
    {
        return view('livewire.counters')->layout('layouts.back.app');
    }
}
