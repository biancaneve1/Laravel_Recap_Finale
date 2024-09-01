<?php

namespace App\Livewire;

use App\Models\Art;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;

class ArtForm extends Component
{
    use WithFileUploads;

    #[Validate('required|min:5|max:50')]
    public $title;
    
    #[Validate('required|image|mimes:jpg,jpeg,webp,png|max:1024')]
    public $image;
    
    #[Validate('required|min:5|max:500')]
    public $caption;

    public $category_id;
   
    
    
    public function store()
    {
        $this->validate();
        
        Auth::user()->arts()->create([

            'title' => $this->title,
            'image' => $this->image->store('public/arts'),
            'caption' => $this->caption,
            'caegory_id' => $this->category_id,
            //'user_id'=>Auth::user()->id
        ]);
       
        $this->reset();
        session()->flash('success', 'Selezione andata a buon fine');
        
    }


    public function render()
    {
        $categories = Category::orderBy('name')->get();
        return view('livewire.art-form',compact('categories'));
    }
}
