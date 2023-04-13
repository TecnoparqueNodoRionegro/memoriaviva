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
                                            <a class="nav-link text-white" aria-current="page" href="{{ route('')}}">Inicio <i class="fa-solid fa-house mx-1 text-white"></i></a>
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

                                <div class="row mt-2">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card shadow border-0 mb-4">
                                            {{--titulo card--}}
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="d-flex justify-content-between d-inline-block">
                                                        <h6 class="font-weight-bold ">Menús</h6> <i class="fa-solid fa-bars me-2 lead d-flex align-self-center"></i>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            {{--Boton--}}
                                            <div class="card-body">
                                                <a class="btn btn-secondary w-100 btnAdmin text-black">
                                                    <div class="row">
                                                        <div class="d-flex justify-content-between d-inline-block">Menú <i class="fa-solid fa-plus d-flex align-self-center "></i></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="card shadow border-0  mb-4">
                                            {{--titulo card--}}
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="d-flex justify-content-between d-inline-block">
                                                        <h6 class="font-weight-bold ">Contenido</h6> <i class="fa-solid fa-newspaper me-2 lead d-flex align-self-center"></i>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            {{--Boton--}}
                                            <div class="card-body">
                                                <a class="btn btn-secondary w-100 btnAdmin text-black">
                                                    <div class="row">
                                                        <div class="d-flex justify-content-between d-inline-block">Contenido <i class="fa-solid fa-plus d-flex align-self-center "></i></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="card shadow border-0  mb-4">
                                            {{--titulo card--}}
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="d-flex justify-content-between d-inline-block">
                                                        <h6 class="font-weight-bold ">Tienda</h6> <i class="fa-solid fa-cart-shopping me-2 lead d-flex align-self-center"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--Botones--}}    
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <a class="btn btn-secondary w-100 btnAdmin text-black">
                                                            <div class="row">
                                                                <div class="d-flex justify-content-between d-inline-block">Producto <i class="fa-solid fa-plus d-flex align-self-center "></i></div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <a class="btn btn-secondary w-100 btnAdmin text-black">
                                                            <div class="row">
                                                                <div class="d-flex justify-content-between d-inline-block">Categoría <i class="fa-solid fa-plus d-flex align-self-center "></i></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-md-12">
                                        <div class="card shadow border-0  mb-4">
                                            {{--titulo card--}}
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="d-flex justify-content-between d-inline-block">
                                                        <h6 class="font-weight-bold ">Galería</h6> <i class="fa-solid fa-photo-film me-2 lead d-flex align-self-center"></i>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            {{--Botones--}}    
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <a class="btn btn-secondary w-100 btnAdmin text-black">
                                                            <div class="row">
                                                                <div class="d-flex justify-content-between d-inline-block">Multimedia <i class="fa-solid fa-plus d-flex align-self-center "></i></div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <a class="btn btn-secondary w-100 btnAdmin text-black">
                                                            <div class="row">
                                                                <div class="d-flex justify-content-between d-inline-block">Categoría <i class="fa-solid fa-plus d-flex align-self-center "></i></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="card shadow border-0  mb-4">
                                            {{--titulo card--}}
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="d-flex justify-content-between d-inline-block">
                                                        <h6 class="font-weight-bold ">Gestión de usuarios</h6> <i class="fa-solid fa-users me-2 lead d-flex align-self-center"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--Botones--}}    
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <a href="{{ route('user_types')}}" class="btn btn-secondary w-100 btnAdmin text-black">
                                                            <div class="row">
                                                                <div class="d-flex justify-content-between d-inline-block">Agregar tipo de Usuario <i class="fa-solid fa-plus d-flex align-self-center "></i></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <a href="{{ route('user_types')}}" class="btn btn-secondary w-100 btnAdmin text-black">
                                                            <div class="row">
                                                                <div class="d-flex justify-content-between d-inline-block">Actualizar tipos de usuarios<i class="fa-solid fa-plus d-flex align-self-center "></i></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                            </div>

                                </div>
                                
                            </div>
                        </section>
                   </div>
            </div>

        </div>
    </div>
@endsection