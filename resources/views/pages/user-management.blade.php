@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'User Management'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Users</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Usuario
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Inversión</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ganacía</th>
                                        <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                            <td >
                                                <div class="d-flex px-3 py-1">
                                                    <div>
                                                        <img src="./img/userfail.png" class="avatar me-3" alt="image">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"> {{$usuario->username}}</h6>
                                                    </div>
                                            </div>
                                            </td>
                                            <td >
                                                {{$usuario->username}}
                                            </td>
                                            <td >
                                                <label for="example-text-input" class="form-control-label">Inversión</label>
                                                <input class="form-control" type="inversión" id="postal{{$usuario->id}}" name="postal{{$usuario->id}}" value="{{$usuario->postal}}">

                                            </td>
                                            <td >
                                                <label for="gananciat" class="form-control-label">Ganancia </label>
                                                <input class="form-control" type="text" id="about{{$usuario->id}}" name="about{{$usuario->id}}" value="{{$usuario->about}}">
                                                <input class="form-control" type="hidden" id="id{{$usuario->id}}" name="id{{$usuario->id}}" value="{{$usuario->id}}">
                                            </td>
                                            <td>
                                                <div class="card-header pb-0">
                                                    <div class="d-flex align-items-center">
                                                        <button  onclick="usuarioguardar('{{env('APP_URL')}}/profiles/update/','{{$usuario->id}}')"
                                                        class="btn btn-primary btn-sm ms-auto">Guardar
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
