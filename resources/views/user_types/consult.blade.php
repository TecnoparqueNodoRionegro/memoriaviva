@extends('layouts.templateAdmin')

@section('title', 'Panel Administrativo')
    
@section('content')
    <div class="contenedor" id="contenedor">
        
        <div class="d-flex">

            {{--Menú Lateral--}}
            <div class="menuLateral" id="menuLateral">
              
            

                <div class="opciones_menu">
                    <a href="#" class="text-decoration-none text-white">
                        <div class="opcion">
                            <i class="fa-solid fa-bars lead" title="Menús"></i>
                            <h4 >Menús</h4>
                        </div>
                    </a>

                    <a href="#" class="text-decoration-none text-white">
                        <div class="opcion">
                            <i class="fa-solid fa-newspaper lead" title="Artículos"></i>
                            <h4>Contenido</h4>
                        </div>
                    </a>

                    <a class="text-decoration-none text-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <div class="opcion">
                            <i class="fa-solid fa-cart-shopping lead" title="Tienda"></i>
                            <h4>Tienda</h4>
                        </div>
                    </a>
                      <div class="collapse" id="collapseExample">
                        <div class="card card-body bg-black">
                            <ul class="style-none">
                                <li class=""> <a href="" class="text-white text-decoration-none  fs-5 subMenu">Productos</a></li>
                                <hr class="linea"></li>
                                <li style="text-decoration: none;"><a href="" class="text-white text-decoration-none fs-5 subMenu">Categoría</a></li>
                                <li><hr class="linea"></li>
                            </ul>
                        </div>
                      </div>

                      <a class="text-decoration-none text-white" data-bs-toggle="collapse" href="#collapseGaleria" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <div class="opcion">
                            <i class="fa-solid fa-photo-film lead" title="Tienda"></i>
                            <h4>Galería</h4>
                        </div>
                    </a>
                      <div class="collapse" id="collapseGaleria">
                        <div class="card card-body bg-black">
                            <ul class="style-none">
                                <li class=""> <a href="" class="text-white text-decoration-none  fs-5 subMenu">Multimedia</a></li>
                                <hr class="linea"></li>
                                <li style="text-decoration: none;"><a href="" class="text-white text-decoration-none fs-5 subMenu">Categoría</a></li>
                                <li><hr class="linea"></li>
                            </ul>
                        </div>
                      </div>

                </div>
        </div>


            {{--navbar--}}
            <div class="w-100">
                <nav class="navbar navbar-expand-lg navPanelAdmin">
                        <div class="container-fluid">
                            <div class="icon_menu">
                                <i class="fa-solid fa-arrow-right text-white lead me-3" id="btn_open"></i>
                            </div>
                            <div class="logo me-5">
                                <img class="img-fluid" src="{{asset('img/logo.png')}}" alt="">
                            </div>
                                <i class="fa-solid fa-gears mx-3 lead text-white"></i><a class="navbar-brand text-white">Panel Administrativo</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class=""><i class="fa-solid fa-bars text-white"></i></span>
                            </button>
                            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                                <div class="d-flex me-5" >
                                    <ul class="navbar-nav me-auto mb-2" >
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-white" aria-current="page" href="#">Inicio <i class="fa-solid fa-house mx-1 text-white"></i></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                                                <img src="{{asset('img/user.png')}}" class="avatar mx-2" alt="">Jóse López</a>
                                            <ul class="dropdown-menu" style="background: black">
                                                <li class="nav-item">
                                                    <a class="nav-link  text-white" aria-current="page" href="{{ route('signOut')}}">Cerrar Sesión <i class="fa-solid fa-right-from-bracket mx-1 text-white"></i></a>
                                                </li>
                                            {{-- <li><hr class="dropdown-divider"></li> --}}
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   </nav>

                   {{--contenido--}}
                   <div id="content">
                        <section class="py-5">
                             <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                    <h2>Roles del sistema</h2>
                                        <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Juan</td>
                                                <td>
                                                    <a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg>
                                                    </a>
                                                    <a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                                        <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                                                        <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/></svg>
                                                    </a>
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