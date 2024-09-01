

      <div class="card m-5" style="width:18rem;">
        <img src="{{Storage::url($art->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$art->title}}</h5>
          <p class="card-text">create {{$art->created_at->diffForHumans()}}</p>
          <a href="{{route('art.show',$art)}}" class="btn btn-cards">In details</a>
        </div>
      </div>
 

