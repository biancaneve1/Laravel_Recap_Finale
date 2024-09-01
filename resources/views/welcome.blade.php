<x-layout>


<div class="container-fluid bg-light mb-5 pb-5">
    <div class="row d-flex pt-5">
        <div class="col-12 col-md-6 p-5">
            <h2 class="display-1 text-center  pt-5 mt-5">WELCOME TO </h2>
            <h1 class="display-1 text-center  pt-5 mt-5">KATE GALLERY</h1>
            <p class="pt-5 text-start">Tate Britain is home to the largest collection of works by Joseph Mallord William Turner (1775–1851).
                <br>
                <br>
                Described as the ‘father of modern art,’ Turner shocked with his unique brushwork and use of colour. His portrayals of the modern world were unlike any seen before. As one of the country’s greatest painters, he fittingly lends his name to the contemporary Turner Prize.
                <br>
                <br>
                See Turner’s art free in these galleries.</p>
        </div>
        <div class="col-12 col-md-4 pt-4">
       <img src="https://media.tate.org.uk/aztate-prd-ew-dg-wgtail-st1-ctr-data/images/.width-2560_mq8kb9l.jpg" class="img-homepage mb-5" alt="Quadro astratto">
        </div>
    </div>
</div>
<div class="container mt-5 ">
    <div class="row mt-5 justify-content-center">
        <h2 class="display-1 text-white text-center mt-5">ART BY THEME</h2>
              {{-- <x-header></x-header> --}}
              @foreach ($categories as $category)
              <div class="col-12 col-md-2 mt-5">
                  <a class="text-white" style="text-decoration:none;" href="{{route('art.index-category',$category)}}">{{$category->name}}</a>
              </div>
              @endforeach
          </div>
      </div>
  </div>
<div class="container mt-5">
  <div class="row mt-5">
     
            <x-header></x-header>
            @foreach ($arts as $art)
            <div class="col-12 col-md-4">
                <x-card :art="$art"/>
            </div>
            @endforeach
        </div>
    </div>
</div>























</x-layout>