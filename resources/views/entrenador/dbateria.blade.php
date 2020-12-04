<div class="content-box-large">
 
    <div class="panel-heading">
 
        <div class="panel-title">
            <h2>{{ $Boton->Tes_nombre }}</h2></div>
 
    </div>
 
    <div class="panel-body">
 
        <section class="example mt-4">
 
            <strong>OBJEIVO:</strong>
            <br> {{ $Boton->Tes_objetivo }}
 
            <br>
            <br>
 
            <strong>DESARROLLO:</strong>
            <br> {{ $Boton->Tes_desarrollo }}
 
            <br>
            <br>
 
             
            <strong>MATERIAL:</strong>
            <br> {{ $Boton->Tes_material }}
 
            <br>
            <br>
             
            <strong>EVALUACION:</strong>
            <br> {{ $Boton->Tes_imagen }}
 
            <br>
            <br>


            <strong>Creado:</strong>
            <br> {{ $Boton->created_at }}
 
            <br>
            <br>
 

 
            <strong>IMAGEN:</strong>
            <br>
 
            <!-- Mostramos todas las imágenes pertenecientes a a este registro -->
            @foreach($imagenes as $img)
 
                <a data-fancybox="gallery" href="../../../uploads/{{ $img->nombre }}">
                    <img src="../../../uploads/{{ $img->nombre }}" width="200" class="img-fluid"> 
                </a> 
 
            @endforeach
 
            <br><br>
 
            <a href="{{ url('bateria') }}" class="btn btn-dark">Volver</a>
 
        </section>
 
    </div>
 
</div>