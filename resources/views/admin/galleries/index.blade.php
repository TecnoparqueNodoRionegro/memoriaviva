@extends('layouts.templateAdmin')

@section('title', 'Categoría')
    
@section('content')
    <div class="contenedor" id="contenedor">
        
        <div class="d-flex">

            {{--Menú Lateral--}}
            <div class="menuLateral" id="menuLateral">
              
                <header>@include('layouts.navAdmin')</header>


                   {{--Aqui va el contenido a mostrar en la pagina--}}
                   <div id="content">
                    
                        <section class="py-5">
                           
                            <div class="container d-flex justify-content-end w-75 mb-4">
                                <a href="{{route('galleries.create')}}"class="btn btn-primary">Agregar Categoría</a>
                            </div>

                            <div class="container d-flex justify-content-center">
                                                                                               
                                <div class="card w-75 border">
                                   
                                    <div class="card-header d-flex justify-content-center">
                                        <h1 class="fs-2">Categorías</h1>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th >#</th>
                                                    <th>Nombre</th>
                                                    <th>Estado</th>
                                                </tr>
                                            </thead>
    
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Prueba</td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                            {{-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </section>
                    </div>
            </div>

        </div>
    </div>
@endsection