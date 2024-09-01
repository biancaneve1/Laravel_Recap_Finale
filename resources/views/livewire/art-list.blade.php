<div>
  @if(session('success'))
  <div class="aletr alert-success">
        {{session('success')}}
  </div>
  @endif
<table class="table table-dark table-strike text-white">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
@foreach(Auth::user()->arts as $art)
    <tr>
        <th scope="row">{{$art->id}}</th>
        <td>{{$art->title}}</td>
        <td>{{$art->category->name ?? '-'}}</td>
        <td>{{$art->created_at->format(d/m/Y)}}</td>
        <td>
            <a class="text-white" href="{{route('art.edit',$art)}}">Modifica</a>
            <a class="text-white" wire:click="destroy({{$art}})">elimina</a>
        </td>
    </tr>
@endforeach
    </tbody>
  </table>
</div>