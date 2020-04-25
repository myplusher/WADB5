@extends('layout')
@section('title', 'Products')
@section('content')


<div class="container products">
<a href="/" class="btn btn-success">НАЗАД</a>
 <div class="row">
    <div class="col-md-12">
        <form action="/save" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control" name="name"> <br>
                <textarea name="description" id="" cols="30" class="form-control" rows="10"></textarea> <br>
                <input type="text" class="form-control" name="photo"> <br>
                <input type="text" class="form-control" name="price"> <br>
                <button class="btn btn-success">ДОБАВИТЬ</button>
            </div>
        </form>
    </div>
 </div>
</div>

@endsection
