<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <title>
        Inversiones PEMX
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>-->
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/js/app.js'])
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/argon-dashboard.css" rel="stylesheet" />

    <style>
.modal-bloqueo {
    position: fixed;
    inset: 0;
    background: rgba(9, 28, 58, 0.72);
    backdrop-filter: blur(3px);
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.modal-bloqueo-card {
    width: 100%;
    max-width: 470px;
    background: #ffffff;
    border-radius: 22px;
    padding: 34px 30px 28px;
    position: relative;
    box-shadow: 0 25px 60px rgba(10, 29, 62, 0.35);
    text-align: center;
    border-top: 6px solid #ff5c3f;
}

.modal-bloqueo-close {
    position: absolute;
    top: 16px;
    right: 18px;
    border: none;
    background: transparent;
    color: #1b3157;
    font-size: 28px;
    line-height: 1;
    cursor: pointer;
}

.modal-bloqueo-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 18px;
    border-radius: 20px;
    background: linear-gradient(135deg, #132f5f, #1d4f91);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    box-shadow: 0 12px 25px rgba(19, 47, 95, 0.25);
}

.modal-bloqueo-card h3 {
    color: #132f5f;
    font-weight: 800;
    margin-bottom: 12px;
}

.modal-bloqueo-card p {
    color: #60708f;
    font-size: 15px;
    margin-bottom: 18px;
}

.modal-bloqueo-contacto {
    background: #f5f7fb;
    border-radius: 16px;
    padding: 14px;
    margin-bottom: 22px;
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.modal-bloqueo-contacto a,
.modal-bloqueo-contacto span {
    color: #132f5f;
    font-weight: 700;
    font-size: 14px;
    word-break: break-word;
}

.btn-modal-bloqueo {
    width: 100%;
    border: none;
    border-radius: 14px;
    padding: 13px 20px;
    background: linear-gradient(135deg, #ff5c3f, #ff7a45);
    color: #ffffff;
    font-weight: 700;
    cursor: pointer;
    box-shadow: 0 10px 20px rgba(255, 92, 63, 0.28);
}
</style>
</head>

<body class="{{ $class ?? '' }}">

    @guest
        @yield('content')
    @endguest

    @auth
        @if (in_array(request()->route()->getName(), ['sign-in-static', 'sign-up-static', 'login', 'register', 'recover-password', 'rtl', 'virtual-reality']))
            @yield('content')
        @else
            @if (!in_array(request()->route()->getName(), ['profile', 'profile-static']))
                <div class="min-height-300 bg-default position-absolute w-100"></div>
            @elseif (in_array(request()->route()->getName(), ['profile-static', 'profile']))
                <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
                    <span class="mask bg-primary opacity-6"></span>
                </div>
            @endif
            @include('layouts.navbars.auth.sidenav')
                <main class="main-content border-radius-lg">
                    @yield('content')
                </main>
            @include('components.fixed-plugin')
        @endif
    @endauth

    <!--   Core JS Files   -->
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/argon-dashboard.js"></script>
    @stack('js');
        <!--inicia graficas-->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <!-- fin graficas-->
{{-- Modal cuenta bloqueada --}}
<div id="modalCuentaBloqueada" class="modal-bloqueo d-none">
    <div class="modal-bloqueo-card">
        <button type="button" class="modal-bloqueo-close" onclick="cerrarBloqueo()">×</button>

        <div class="modal-bloqueo-icon">
            <i class="ni ni-lock-circle-open"></i>
        </div>

        <h3>Su cuenta está bloqueada</h3>

        <p>
            Para continuar con esta operación, favor de contactarnos a:
        </p>

        <div class="modal-bloqueo-contacto">
            <a href="mailto:atencionclientes@capitalbank.com.mx">
                atencionclientes@capitalones.com.mx
            </a>
            <span>811 556 9400</span>
        </div>

        <button type="button" class="btn-modal-bloqueo" onclick="cerrarBloqueo()">
            Entendido
        </button>
    </div>
</div>
</body>

</html>
