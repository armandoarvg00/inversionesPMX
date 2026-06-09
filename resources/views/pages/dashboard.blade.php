
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Financiamiento'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-xl-6 mb-xl-0 mb-4">
                        <div class="card bg-transparent shadow-xl">
                            <div class="overflow-hidden position-relative border-radius-xl"
                                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/card-visa.jpg');">
                                <span class="mask bg-gradient-dark"></span>
                                <div class="card-body position-relative z-index-1 p-3">
                                    <i class="fas fa-wifi text-white p-2"></i>
                                    <h5 class="text-white mt-4 mb-3 pb-2">
                                      {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h5>
                                    <h5 class="text-white mt-4 mb-4 pb-2">
                                        ***&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****</h5>
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div class="me-4">
                                                <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                                                <h6 class="text-white mb-0">**** ****</h6>
                                            </div>
                                            <div>
                                                <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                                                <h6 class="text-white mb-0">**/**</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                            <img class="w-60 mt-2" src="/img/logos/mastercard.png" alt="logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header mx-4 p-3 text-center">
                                        <div
                                            class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                            <i class="fas fa-landmark opacity-10">$</i>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 p-6 text-center">
                                        <h6 class="text-center mb-0">Saldo Disponible</h6>
                                        <span class="text-xs"></span>
                                        <hr class="horizontal dark my-3">
                                        <h5 class="mb-0">${{auth()->user()->postal}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-4">
                                <div class="card">
                                    <div class="card-header mx-4 p-3 text-center">
                                        <div
                                            class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                            <i class="fab fa-paypal opacity-10">$</i>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 p-6 text-center">
                                        <h6 class="text-center mb-0">Ganancias</h6>
                                        <span class="text-xs"></span>
                                        <hr class="horizontal dark my-3">
                                        <h5 class="mb-0">${{auth()->user()->about}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-md-12 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <h6 class="mb-0">Metodos de pago</h6>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                                class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-md-6 mb-md-0 mb-4">
                                        <div
                                            class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                            <img class="w-10 me-3 mb-0" src="/img/logos/mastercard.png" alt="logo">
                                            <h6 class="mb-0">
                                                ****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                                            <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div
                                            class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                            <img class="w-10 me-3 mb-0" src="/img/logos/visa.png" alt="logo">
                                            <h6 class="mb-0">
                                                ****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                                            <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Abonos realizados </h6>
                    </div>
                    @foreach ($user_metodopago as $userp)
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm"></h6>
                                    <span class="mb-2 text-xs">Fecha: <span
                                            class="text-dark font-weight-bold ms-sm-2">{{ $userp->created_at }}</span></span>
                                    <span class="mb-2 text-xs">Monto: <span
                                            class="text-dark ms-sm-2 font-weight-bold">{{ $userp->monto }}</span></span>
                                    <span class="text-xs">VAT Number: <span
                                            class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                                </div>
                                <!--<div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                            class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </div>-->
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    
        
  
{{ $user_metodopago->links() }}
        @include('layouts.footers.auth.footer')
    </div>
@endsection
