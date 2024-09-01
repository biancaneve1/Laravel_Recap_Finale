

<form wire:submit="store">
  {{-- @dd($categories) --}}
   @if(session('success'))
   <div class="alert alert-success">
    {{session('success')}}
  </div>
  @endif
    <div class="mb-3">
      <label for="title" class="form-label">TITLE</label>
      <input type="text" class="form-control" id="title" wire:model.live="title" >
@error('title')
<span class="text-danger">{{$message}}</span>
@enderror
  </div>


  <div class="mb-3">
    <label for="category_id" class="form-label">CATEGORY</label>
    <select id="category_id" class="form-select" wire:model="category_id">
    @foreach ($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
  </select>
   </div>
    
   
   <div class="mb-3">
        <label for="image" class="form-label">PICTURE</label>
        <input type="file" class="form-control" id="image" wire:model="image" >
        @error('image')
       <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      @if($image)
      <div class="mb-3">
        <img src="{{$image->temporaryUrl()}}" alt="" class="img-fluid">
      </div>
      @endif
    <div class="mb-3">
        <label for="caption" class="form-label">DETAILS</label>
       <textarea wire:model="caption" id="" cols="30" rows="10" class="form-control"></textarea>
       <button type="submit" class=" button-art text-white mt-5">Submit</button>
       @error('caption')
        <span class="text-danger">{{$message}}</span>
       @enderror
      </div>
   </form>