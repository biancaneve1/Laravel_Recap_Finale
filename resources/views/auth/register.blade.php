<x-layout>
<div class="container">
        <div class="row">
       <div class="col-12 col-md-6 mt-5">
        <h4 class="mt-5">REGISTRATI QUI</h4>
        <form action="{{route('register')}}" method="POST">
            @csrf
        <div class="mb-3 mt-5">
            <label for="name" class="form-label">Name & Surname</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password Confitmation</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
          </div>
         <button type="submit" class="btn text-white">Submit</button>
      </form>
          </div>
        </div>
    </div>
    <form>









</x-layout>