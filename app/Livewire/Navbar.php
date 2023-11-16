<?php

namespace App\Livewire;

use App\Models\Destination;
use Livewire\Component;

class Navbar extends Component
{
    public $search = '';

    public function render()
    {
        $destinations = Destination::with('photo', 'package') // Menggunakan Eager Loading untuk menyertakan relasi 'photos'
            ->where('name', 'LIKE', '%' . $this->search . '%')
            ->take(5)->get();

        return view('livewire.navbar', [
            'destinations' => $destinations,
        ]);
    }
}
