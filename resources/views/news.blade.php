@extends('layouts.app')
@section('page-title')
news
@endsection
@section('content')

<div class="content">
      <div class="jumbotron">
          <img src="https://www.dccomics.com/sites/default/files/dc-hero_20211215_NightwingVol1_61ba5de6346f24.38799504.jpg" alt="">
      </div>
      
      <div class="container padding relative">
           <h2 class="current_series_title">and now the news</h2>
           <div class="products row justify_center">


               @include('partials.products')
               @include('partials.button')





           
           </div>
           
      </div>
     @include('partials.iconSec')
  </div>

@endsection