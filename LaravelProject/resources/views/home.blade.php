@extends('layouts.main')

@section('container')
   
   <div class="p-3 bg-secondary">
      <div class="mt-0 mb-3 bg-light p-3">
         <h4>
            Drama
         </h4>
         <div class="row row-cols-1 row-cols-md-4 g-1">
            @foreach ($movies as $movie)
               @if($movie->genre_id == 1)
               <div class="col text-center d-grid">
                  <div class="card p-2 text-center">
                     <img src="{{ asset('assets/') }}/{{ $movie->photo }}" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h6 class="card-title ">{{ $movie->title }}</h6>
                     </div>
                  </div>
                  <a href="/details/{{ $movie->id }}" class="btn btn-dark ">LIHAT FILM</a>
               </div>
               @endif
            @endforeach 
         </div>
      </div>
      <div class="mt-0 mb-3 bg-light p-3">
         <h4>
            Kids
         </h4>
         <div class="row row-cols-1 row-cols-md-4 g-1">
            @foreach ($movies as $movie)
               @if($movie->genre_id == 2)
               <div class="col text-center d-grid">
                  <div class="card p-2 text-center">
                     <img src="{{ asset('assets/') }}/{{ $movie->photo }}" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h6 class="card-title ">{{ $movie->title }}</h6>
                     </div>
                  </div>
                  <a href="/details/{{ $movie->id }}" class="btn btn-dark ">LIHAT FILM</a>
               </div>
               
               @endif
            @endforeach 
         </div>
      </div>
      <div class="mt-0 mb-3 bg-light p-3">
         <h4>
            TV Show
         </h4>
         <div class="row row-cols-1 row-cols-md-4 g-1">
            @foreach ($movies as $movie)
               @if($movie->genre_id == 3)
               <div class="col text-center d-grid">
                  <div class="card p-2 text-center">
                     <img src="{{ asset('assets/') }}/{{ $movie->photo }}" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h6 class="card-title ">{{ $movie->title }}</h6>
                     </div>
                  </div>
                  <a href="/details/{{ $movie->id }}" class="btn btn-dark ">LIHAT FILM</a>
               </div>
               @endif
            @endforeach 
         </div>
      </div>
   </div>

@endsection
    