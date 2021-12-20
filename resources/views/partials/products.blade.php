@foreach($products as $index => $product)

<div class="card col-2">

<a href="{{route('comic', ['id' => $index])}}" class="card_link">
<img src="{{$product['thumb']}}" alt="series">
      <h3>{{$product['series']}}</h3>
</a>
      
  </div>

@endforeach