@extends('layouts.main')

@section('content')
    
<div class="main">
    <div class="jumbotron">

    </div>

    <button class="current">
        CURRENT SERIES
    </button>

    <button class="load">
        LOAD MORE

    </button>

  <div class="containerImgs">
 
   
    @foreach ($fumetti as $fumetto)
        
            <div>
                <img src="{{ $fumetto['thumb'] }}" alt="{{ $fumetto['title'] }}">
            </div>
      
    @endforeach
  
  </div>
  
</div>

@endsection