@extends('layout')
@section('title', 'Products')
@section('content')

<a href="/create" class="btn btn-outline-success">СОЗДАТЬ</a>
<div class="container products">
 <div class="row">
   @foreach($products as $product)
   <div class="col-xs-18 col-sm-6 col-md-3">
     <div class="thumbnail">
       <img src="{{ $product->photo }}" width="247">
       <div class="caption">
         <h4>{{ $product->name }}</h4>
         <p>{{ strtolower($product->description) }}</p>
         <p><strong>Price: </strong> {{ $product->price }}$</p>
         <p class="btn-holder">
         <a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a>
         <a href="{{ url('/'.$product->id.'/destroy') }}" class="btn btn-outline-danger btn-block text-center" role="button">Delete</a>
        </p>
       </div>
     </div>
   </div>
   @endforeach
 </div>
</div>

@endsection
