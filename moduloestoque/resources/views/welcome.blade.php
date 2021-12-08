@extends('layouts.main')

@section('title','Módulo de estoque')

@section('content')


<div id="search-container" class="col-md-12">
    <h1>Busque um produto</h1>
    <form action="">
        <input type="text" id='search' name='search' class='form-control' placeholder='Procurar...'>
    </form>
</div>
<div id="products-container" class="col-md-12">
    <h2>Próximos produtos</h2>
    <p>Veja outros produtos</p>
    <div id="cards-container" class="row">

    @foreach($products as $product)
        <div class="card col-md-3">
            <img src="/img/icone.jpeg" alt="{{ $product->name }}">
            <div class="card-body">
                <h5 class="card-name">{{$product->name}}</h5>
                <p class="card-description">{{$product->description}}</p>
                <a href="#" class='btn btn-primary'>Saber mais</a>
            </div>
        </div>
        <p>{{ $product->name }}</p>  
        <p>{{ $product->description }}</p>   

    @endforeach
    

    </div>

</div>

@endsection