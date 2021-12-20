@extends('layouts.app')
@section('page-title')
home
@endsection
@section('content')

<div class="content_2">
      <div class="jumbotron blue_border">
          <img src="{{asset('img/jumbotron.jpg')}}" alt="">
      </div>
        <div class="container_2">
            <div class="product_img_wrapper">
                <div class="tag comic_tag">comicbook</div>
            <img src="{{asset('img/jumbotron.jpg')}}" alt="">
            <div class="tag view_tag">view gallery</div>
            </div>
        </div>
     
    

      <div class="container_2 padding relative d-flex space_between_align_center">
         <div class="product_info_wrapper">
             <h3>action comics</h3>

             <div class="product_info">

                 <div class="price_and_available d-flex space_between_align_center">
                   
                     <div class="price_wrapper d-flex space_between_align_center">
                         <div class="d-flex">
                         <p class="currency">U.S. Price</p>
                         <p class="price_text">$19.99</p>
                         </div>
                       
                        <p>availale</p>
                     </div>

                     <div class="availability_wrapper">
                        <p>check</p>
                     </div>



                 </div>
                 
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, consequatur velit quaerat quos ab cumque placeat dolore, facere, alias error quidem porro accusantium. Eius, eos nostrum minima illum rem quos?</p>
             </div>

         </div>

         <div class="adv">
             <h5>advertisemnt</h5>
             <div class="adv_wrapper">
                 <img src="{{asset('img/jumbotron.jpg')}}" alt="">
             </div>
             
         </div>
           
      </div>
     @include('partials.iconSec')
  </div>

@endsection