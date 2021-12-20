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
                <div class="tag comic_tag">{{$product['type']}}</div>
            <img src="{{$product['thumb']}}" alt="">
            <div class="tag view_tag">view gallery</div>
            </div>
        </div>



      <div class="container_2 padding relative d-flex space_between_align_center">
         <div class="product_info_wrapper">
             <h2 class="product_title">{{$product['series']}}</h2>

             <div class="product_info">

                 <div class="price_and_available d-flex space_between_align_center">

                     <div class="price_wrapper d-flex space_between_align_center">
                         <div class="d-flex">
                         <p class="currency">U.S. Price:</p>
                         <p class="price_text">{{$product['price']}}</p>
                         </div>

                        <p>available</p>
                     </div>

                     <div class="availability_wrapper">
                        <p>check availability <i class="fas fa-sort-down"></i></p>
                     </div>



                 </div>
                 <div  class="product_description">
                 <p>{{$product['description']}}</p>
                 </div>

             </div>

         </div>

         <div class="adv">
             <h5>advertisement</h5>
             <div class="adv_wrapper">
                 <img src="{{asset('img/sup.png')}}" alt="">
             </div>

         </div>

      </div>
      <div class="credits_bg">
          
     

          <div class="container_2 d-flex space_between_align_center">
              <div class="talent">
                  <h3 class="credit_title">Talent</h3>
                  <div class="artists d-flex space_between_align_center">
                      <p class="authors">art by:</p>
                      <div class="artists_wrapper">
                      <a class="artist" href="#">
                          @foreach($product['artists'] as $artist)
                          {{$artist}}
                          @if(!$loop->last)
                          ,
                          @endif
                          @endforeach

                      </a>
                      </div>


                  </div>
                  <div class="artists d-flex space_between_align_center">
                      <p class="authors">Written by:</p>
                      <div class="artists_wrapper">
                      <a class="artist" href="#">
                          @foreach($product['writers'] as $writer)
                          {{$writer}}
                          @if(!$loop->last)
                          ,
                          @endif
                          @endforeach

                      </a>
                      </div>


                  </div>
              </div>
              <div class="specs">
              <h3 class="credit_title">Specs</h3>


              <div class="artists d-flex space_between_align_center">
                      <p class="authors">Series</p>
                      <div class="artists_wrapper">
                      <a class="artist" href="#">
                          {{$product['series']}}

                      </a>
                      </div>


                  </div>
                  <div class="artists d-flex space_between_align_center">
                      <p class="authors">US price:</p>
                      <div class="artists_wrapper">
                      <a class="info_spec artist" href="#">
                      {{$product['price']}}


                      </a>
                      </div>


                  </div>
                  <div class="artists d-flex space_between_align_center">
                      <p class="authors">On sale date</p>
                      <div class="artists_wrapper">
                      <a class="info_spec artist" href="#">
                      {{$product['sale_date']}}


                      </a>
                      </div>


                  </div>
              </div>
              </div>
          </div>

          

      </div>
      <div class="bg_grey">
          <div class="container_2">
          <div class="icons">
          <div class="icon_container">
          <p>Digital comics</p>
              <div class="icon">
                  <img src="{{asset('img/icon.png')}}" alt="">
              </div>
              

          </div>
           <div class="icon_container">
           <p>dc merchandise</p>
              <div class="icon">
                  <img src="{{asset('img/icon4.png')}}" alt="">
              </div>
              

          </div>
           <div class="icon_container">
           <p>subscription</p>
              <div class="icon">
                  <img src="{{asset('img/icon3.png')}}" alt="">
              </div>
             

          </div>
           <div class="icon_container last">
           <p>comic shop locator</p>
              <div class="icon">
                  <img src="{{asset('img/icon2.png')}}" alt="">
              </div>
             

          </div>
         
      </div>
          </div>
      </div>


</div>

@endsection
