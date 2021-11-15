@extends('layouts.app')


@section('content')

    <h1 class="text-center">Welcome to my Application</h1>

    <div class="container d-flex align-items-center justify-content-center mt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Units</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="/units" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Category</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="/categories" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Merchandice</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="/merchandices" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
@endsection
