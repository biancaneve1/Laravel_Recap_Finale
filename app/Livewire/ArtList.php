<?php

namespace App\Livewire;

use App\Models\Art;
use Livewire\Component;

class ArtList extends Component
{

public function destroy(Art $art){
$art->delete();
sessionn()->flash('success','TicKet eliminato con successo');
}


    public function render()
    {
        return view('livewire.art-list');
    }
}
