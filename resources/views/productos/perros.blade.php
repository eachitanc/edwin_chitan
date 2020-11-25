@extends('principal')
@section('content')
<div class="container">
    <br>
    <h4 align="center"> Productos para Perro </h4>
    <br>
    @for($i = 0; $i < count($producto); ++$i)
        <div class="row">
            <div class="col">
                <!-- Card -->
                <div class="card" style="width: 300px; height: 400px;">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ $producto[$i]['img'] }}"
                            alt="Card image cap" style="width: 300px; height: 250px;">
                    </div>
                    <!-- Card content -->
                    <div class="card-body" style="background-color: #3FE3F9 ;">
                        <!-- Title -->
                        <h4 class="card-title">{{ $producto[$i]['nom_prod']}}</h4>
                        <!-- Text -->
                        <p class="card-text"> 
                            Código: {{ $producto[$i]['codigo']}}
                            <br>
                            Precio: {{ $producto[$i]['precio']}}</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <?php ++$i ?>
                <!-- Card -->
                <div class="card" style="width: 300px; height: 400px;">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ $producto[$i]['img']}}"
                            alt="Card image cap" style="width: 300px; height: 250px;">
                    </div>
                    <!-- Card content -->
                    <div class="card-body" style="background-color: #3FE3F9 ;">
                        <!-- Title -->
                        <h4 class="card-title">{{ $producto[$i]['nom_prod']}}</h4>
                        <!-- Text -->
                        <p class="card-text"> 
                            Código: {{ $producto[$i]['codigo']}}
                            <br>
                            Precio: {{ $producto[$i]['precio']}}</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- Card -->
                <?php ++$i ?>
                <div class="card" style="width: 300px; height: 400px;">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ $producto[$i]['img']}}"
                            alt="Card image cap" style="width: 300px; height: 250px;">
                    </div>
                    <!-- Card content -->
                    <div class="card-body" style="background-color: #3FE3F9 ;">
                        <!-- Title -->
                        <h4 class="card-title">{{ $producto[$i]['nom_prod']}}</h4>
                        <!-- Text -->
                        <p class="card-text"> 
                            Código: {{ $producto[$i]['codigo']}}
                            <br>
                            Precio: {{ $producto[$i]['precio']}}</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div> 
        <br>
    @endfor

</div>
    
@stop