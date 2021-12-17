@foreach($products as $product)

<div class="card col-2">


      <img src="{{$product['thumb']}}" alt="series">
      <h3>{{$product['series']}}</h3>
  </div>

@endforeach