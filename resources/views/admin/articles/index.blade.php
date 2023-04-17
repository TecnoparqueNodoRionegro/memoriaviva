@extends('layouts.templateAdmin')

@section('title', 'Artículos')

@section('content')
    <div class="contenedor" id="contenedor">

        <div class="d-flex">

            {{--Menú Lateral--}}
            <div class="menuLateral" id="menuLateral">

                <header>@include('layouts.navAdmin')</header>


                    {{--Aqui va el contenido a mostrar en la pagina--}}
                   <div id="content">
                        <section class="py-5 ">
                            <div class="container d-flex justify-content-center">
                                <div class="card w-75 col-sm-12">
                                    <div class="card-header d-flex justify-content-center">
                                        <h1 class="fs-2">Contenido de la Página</h1>
                                    </div>

                                    <div class="card-body">
                                        <table class="table table-hover bg-white rounded">
                                            <thead class="bg-light">
                                                <tr class="">
                                                    <th >#</th>
                                                    <th>Descripción</th>
                                                    <th>Estado</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                    <tr>
                                                        <td class="m-5 p-3"></td>
                                                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium maxime recusandae rerum, mollitia rem nostrum iure repellat error itaque ipsam porro fuga, quos voluptatibus dolorum dolorem ex iusto nemo distinctio.
                                                        Ducimus provident blanditiis libero quos ullam voluptates aspernatur ad, repellendus dolorem architecto tempore sapiente iste sint cum, maiores delectus atque repellat. Culpa quod eos corporis sint animi, dicta dolores quam.
                                                        Soluta cumque quaerat non rem consequatur? Exercitationem ex quod natus dicta dolore eligendi totam tenetur reiciendis nisi neque provident sit voluptas, placeat perspiciatis accusamus itaque, delectus iure tempore impedit illum?
                                                        Dolorum quam voluptatum hic odio fugit possimus velit saepe nam quis recusandae officiis veritatis facilis autem, quidem, quos accusamus nesciunt culpa voluptates. Obcaecati, ipsum accusantium. Omnis sapiente officiis officia suscipit?
                                                        </td>
                                                        <td>

                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                                {{-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> --}}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <form action="" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn" type="submit" onclick="return confirm('¿Desea eliminar la Categoría?');">Eliminar</button>
                                                            </form>
                                                        </td>
                                                        <td><a href="">Editar</a></td>
                                                    </tr>
                                                
                                            </tbody>
                                        </table>
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
