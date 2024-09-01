<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ArtEditForm extends Component
{
    use WithFileUploads;
    
public $art;
public $title;
public $image;
public $caption;
public $category_id;
public $old_image;


public function update(){

    $this->art->update([
        'title'=>$this->title,
        'caption'=>$this->caption,
        'category_id'=>$this->category_id,
        'image'=>$this->image ? $this->image->store('public/arts') : $this->art->image,
    ]);
    $this->reset('image');
    session()->flash('success','Ticket modificato correttamente.');
}
    
public function mount(){
    $this->title=$this->art->title;
    $this->caption=$this->art->caption;
    $this->category_id=$this->art->category_id;
    $this->old_image=$this->art->image;
}

public function render()
    {
        $categories=Category::ordereBy('name')->get();
        return view('livewire.art-edit-form',compact('categories'));
    }
}
