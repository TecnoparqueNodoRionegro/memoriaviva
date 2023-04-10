@extends('layouts.templateAdmin')

@section('title', 'Crear Categoría')
    
@section('content')
    <div class="contenedor" id="contenedor">
        
        <div class="d-flex">

            {{--Menú Lateral--}}
            <div class="menuLateral" id="menuLateral">
              
                <header>@include('layouts.navAdmin')</header>


                    {{--Aqui va el contenido a mostrar en la pagina--}}
                   <div id="content">
                        <section class="py-5">
                            <div class="container d-flex justify-content-center">
                                <div class="card w-75 col-sm-12">
                                    <div class="card-header d-flex justify-content-center">
                                        <h1 class="fs-2">Crear Categoría</h1>
                                    </div>

                                    <div class="card-body">
                                        <form action="{{route('galleries.store')}}" method="POST">
                                            @csrf
                                            
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label for="description" class="form-label">Categoría</label>
                                                    <input class="form-control" type="text" name="description" placeholder="Nombre de la Categoría">
                                                    @error('description')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>

                                                <div class=" d-flex justify-content-center col-sm-12">
                                                    <input class="btn btn-primary" type="submit" value="Agregar">
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </section>
                        {{-- contenido --}}
                    </div>
            </div>

        </div>
    </div>
@endsection