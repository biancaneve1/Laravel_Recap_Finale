<x-layout>

<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h4>Welcome {{Auth::user()->name}}</h4>
            <h5>Here's your selection</h5>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <livewire: art-edit-form/>
        </div>
    </div>
</div>








</x-layout>