<div class="header_top_bg">
    <div class="container d-flex header_top">
    <div>
    <p> dc power&#8482; visa&#174;</p>
</div>
<div>
    <p>additional dc sites <i class="fas fa-sort-down"></i></p>
</div>

    </div>

</div>
<div class="container d-flex space_between_align_center site_header">
      <div class="logo">
          <img src="{{asset('img/dc-logo.png')}}" alt="dc logo">
      </div>
      <nav class="menu">
          
              @foreach(config('db.menu') as $item)
              <a href="{{route($item['href'])}}" class="{{Route::currentRouteName() ===$item['href'] ? 'active' : ''}}">
                  {{$item['text']}}

                  

              </a>
              @endforeach

              <div class="search_wrapper">
              <input class="searchbar" type="text" placeholder="search">
          <i class="fas fa-search"></i>
              </div>
         
          

          

      </nav>

  </div>