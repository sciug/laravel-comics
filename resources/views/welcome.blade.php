@extends('layouts.app')

@section('content')

<div class="content">
      <div class="jumbotron">
          <img src="{{asset('img/jumbotron.jpg')}}" alt="">
      </div>
      
      <div class="container padding relative">
           <h2 class="current_series_title">current series</h2>
           <div class="products row justify_center">


               @include('partials.products')
               @include('partials.button')





           
           </div>
           
      </div>
     @include('partials.iconSec')
  </div>

@endsection