<x-layout>

<div class="container my-5">
    <div class="row">
        <div class="col-12 mt-5">
            <h3>Portrait list</h3>
        </div>
    </div>
</div>

<div class="container">
      <div class="row">
        
@forelse ($arts as $art)
    <div class="col-12 col-md-3">
    <x-card :art="$art"/>
    </div>
@empty
    <p>Non sono stati creati ancora pacchetti <a href="{{route('art.create')}}">Crea il tuo .</a></p>
@endforelse
  </div>
</div>

</x-layout>