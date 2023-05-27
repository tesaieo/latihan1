@extends('layouts.main')

@section('container')

<div class="card mt-5 " style="max-width: 95%;">
   <div class="row g-0">
     <div class="col-md-4">
       <img src="{{ asset('assets/') }}/{{ $movie->photo }}" class="img-fluid rounded-start" width="100%">
     </div>
     <div class="col-md-4">
         <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
            

            @for ($i=0; $i < $movie->rating; $i++)
               <span class="fa fa-star checked"></span>
            @endfor
         
            @for ($i=0; $i < 5-$movie->rating; $i++)
               <span class="fa fa-star-o"></span>
            @endfor

         

            <p class="card-text">{{ $movie->description }}</p>
            <p class="card-text">Kategori : 

               @if ($movie->genre_id == 1)
                  <a href="/category/1" class="text-decoration-none">Drama</a>
               @elseif ($movie->genre_id == 2)
                  <a href="/category/2" class="text-decoration-none">Kids</a>
               @elseif ($movie->genre_id == 3)
                  <a href="/category/3" class="text-decoration-none">TV Shows</a>
               @endif
               
            </p>
         </div>
         
      </div> 
      
      <div class="col md-4">
         <div class="card-body">
            <h5 class="card-title">Episodes</h5>
            <table class="table table-sm">
               <thead>
                 <tr>
                   <th scope="col" width="30%">Episode</th>
                   <th scope="col">Title</th>
                 </tr>
               </thead>
               <tbody>

                  @foreach ($episodes as $episode)
                     {{-- @if ($episode->movie_id == $movie->id) --}}
                        <tr>
                           <td>Episode {{ $episode->episode }}</td>
                           <td>{{ $episode->title }}</td>
                        </tr>
                     {{-- @endif --}}
                  @endforeach

                  
                   
               </tbody>
             </table>
             {{ $episodes->links() }}

             
         </div>
      </div>
      
   </div>
</div>

@endsection