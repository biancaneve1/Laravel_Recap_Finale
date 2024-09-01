<x-layout>

<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center mt-5">{{$art->title}}</h3>
        </div>
    </div>
</div>
<div class="container my-4">
    <div class="row">
        <div class="col-12 col-md-6">
           <img src="{{Storage::url($art->image)}}" alt="">
        </div>
        <div class="col-12 col-md-6">
            {{-- @if ($art->category)
              <h4 class="text-center">
                <a href="{{route('art.index-category', $art->category)}}">{{$art->category->name}}</a>
             </h4>
            @endif --}}
            <h4>{{$art->category->name ?? 'Categoria non specificata'}}</h4>
           <p class="mt-5">{{$art->caption}}</p>
           <p>Inserita da: {{$art->user->name}}</p>
        </div>
    </div>
</div>









</x-layout>