@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-3 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Equity</p>
                                    <h5 class="font-weight-bolder">
                                        $000
                                    </h5>
                                   <!-- <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday
                                    </p>-->
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-3 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Free margin

</p>
                                    <h5 class="font-weight-bolder">
                                        $000
                                    </h5>
                                   <!-- <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday
                                    </p>-->
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-3 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Used margin

</p>
                                    <h5 class="font-weight-bolder">
                                        $000
                                    </h5>
                                   <!-- <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday
                                    </p>-->
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Open P/L

</p>
                                    <h5 class="font-weight-bolder">
                                        $000
                                    </h5>
                                   <!-- <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday
                                    </p>-->
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Balance</p>
                                    <h5 class="font-weight-bolder">
                                        $000
                                    </h5>
                                   <!-- <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday
                                    </p>-->
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Margin level

</p>
                                    <h5 class="font-weight-bolder">
                                        $000
                                    </h5>
                                   <!-- <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday
                                    </p>-->
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Credit</p>
                                    <h5 class="font-weight-bolder">
                                        $000
                                    </h5>
                                   <!-- <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday
                                    </p>-->
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">AUDNZD, 5M</h6>
                        <p class="text-sm mb-0">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold">4% more</span> in 2021
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div id="chart-audnzd" style="height: 420px; min-width: 100%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">CADJPY, 1H</h6>
                        <p class="text-sm mb-0">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold">4% more</span> in 2021
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div id="chart-cadjpy" style="height: 420px; min-width: 100%;"></div>
                    </div>
                </div>
            </div>
            <!--
            <div class="col-lg-6">
                <div class="card card-carousel overflow-hidden h-100 p-0">
                    <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                        <div class="carousel-inner border-radius-lg h-100">
                            <div class="carousel-item h-100 active" style="background-image: url('./img/carousel-1.jpg');
            background-size: cover;">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                        <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                    </div>
                                    <h5 class="text-white mb-1">Get started with Argon</h5>
                                    <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                                </div>
                            </div>
                            <div class="carousel-item h-100" style="background-image: url('./img/carousel-2.jpg');
            background-size: cover;">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                        <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                                    </div>
                                    <h5 class="text-white mb-1">Faster way to create web pages</h5>
                                    <p>That’s my skill. I’m not really specifically talented at anything except for the
                                        ability to learn.</p>
                                </div>
                            </div>
                            <div class="carousel-item h-100" style="background-image: url('./img/carousel-3.jpg');
            background-size: cover;">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                        <i class="ni ni-trophy text-dark opacity-10"></i>
                                    </div>
                                    <h5 class="text-white mb-1">Share with us your design tips!</h5>
                                    <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev w-5 me-3" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next w-5 me-3" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>-->
        </div>
        <div class="row mt-4">

            <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header pb-2">
                    <div class="d-flex align-items-center mb-2">
                        {{-- Buscador --}}
                        <div class="input-group">
                            <span class="input-group-text bg-transparent border-end-0">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="text" id="marketSearch" class="form-control border-start-0"
                                   placeholder="Search">
                        </div>

                        {{-- Filtro de tipo --}}
                        <div class="dropdown ms-2">
                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button"
                                    id="marketFilterBtn" data-bs-toggle="dropdown" aria-expanded="false">
                                <span id="marketFilterLabel">All</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="marketFilterBtn">
                                <li><a class="dropdown-item market-filter-option active" data-filter="all" href="#">All</a></li>
                                <li><a class="dropdown-item market-filter-option" data-filter="forex" href="#">Forex</a></li>
                                <li><a class="dropdown-item market-filter-option" data-filter="crypto" href="#">Crypto</a></li>
                                <li><a class="dropdown-item market-filter-option" data-filter="indices" href="#">Indices</a></li>
                                <li><a class="dropdown-item market-filter-option" data-filter="commodities" href="#">Commodities</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table mb-0 align-middle" id="marketsTable">
                            <tbody>
                                <tr>
                                    <td>Market</td>
                                    <td>Sell</td>
                                    <td>Buy</td>
                                </tr>
                                @php
                                    $markets = [
                                        [
                                            'symbol' => 'ADAUSD',
                                            'name'   => 'Cardano / US Dollar',
                                            'flag'   => 'us',
                                            'category' => 'crypto',
                                            'sell'  => 0.42154,
                                            'buy'   => 0.42766,
                                            'change'=> 612,
                                            'direction' => 'up',
                                        ],
                                        [
                                            'symbol' => 'AUDCAD',
                                            'name'   => 'Australian Dollar / Canadian Dollar',
                                            'flag'   => 'au',
                                            'category' => 'forex',
                                            'sell'  => 0.91825,
                                            'buy'   => 0.91901,
                                            'change'=> 7.6,
                                            'direction' => 'up',
                                        ],
                                        [
                                            'symbol' => 'AUDNZD',
                                            'name'   => 'Australian Dollar / New Zealand Dollar',
                                            'flag'   => 'au',
                                            'category' => 'forex',
                                            'sell'  => 1.14786,
                                            'buy'   => 1.14863,
                                            'change'=> -7.7,
                                            'direction' => 'down',
                                        ],
                                        [
                                            'symbol' => 'BTCCAD',
                                            'name'   => 'Bitcoin / Canadian Dollar',
                                            'flag'   => 'btc',
                                            'category' => 'crypto',
                                            'sell'  => 125666,
                                            'buy'   => 127151,
                                            'change'=> -1492,
                                            'direction' => 'down',
                                        ],
                                        [
                                            'symbol' => 'ADAUSD',
                                            'name'   => 'Cardano / US Dollar',
                                            'flag'   => 'us',
                                            'category' => 'crypto',
                                            'sell'  => 0.42154,
                                            'buy'   => 0.42766,
                                            'change'=> 612,
                                            'direction' => 'up',
                                        ],
                                        [
                                            'symbol' => 'AUDCAD',
                                            'name'   => 'Australian Dollar / Canadian Dollar',
                                            'flag'   => 'au',
                                            'category' => 'forex',
                                            'sell'  => 0.91825,
                                            'buy'   => 0.91901,
                                            'change'=> 7.6,
                                            'direction' => 'up',
                                        ],
                                        [
                                            'symbol' => 'AUDNZD',
                                            'name'   => 'Australian Dollar / New Zealand Dollar',
                                            'flag'   => 'au',
                                            'category' => 'forex',
                                            'sell'  => 1.14786,
                                            'buy'   => 1.14863,
                                            'change'=> -7.7,
                                            'direction' => 'down',
                                        ],
                                        [
                                            'symbol' => 'BTCCAD',
                                            'name'   => 'Bitcoin / Canadian Dollar',
                                            'flag'   => 'btc',
                                            'category' => 'crypto',
                                            'sell'  => 125666,
                                            'buy'   => 127151,
                                            'change'=> -1492,
                                            'direction' => 'down',
                                        ],
                                        // agrega más aquí...
                                    ];
                                @endphp

                                @foreach ($markets as $market)
                                    <tr class="market-row"
                                        data-category="{{ $market['category'] }}"
                                        data-search="{{ strtolower($market['symbol'].' '.$market['name']) }}">
                                        {{-- Market (icono + nombre) --}}
                                        <td class="py-2">
                                            <div class="d-flex align-items-center">
                                                {{-- Icono / bandera (puedes cambiar por <img src="...">) --}}
                                                <div class="me-2">
                                                    <span class="badge rounded-circle bg-light text-dark">
                                                        {{ strtoupper(substr($market['symbol'], 0, 2)) }}
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fw-semibold">{{ $market['symbol'] }}</span>
                                                    <small class="text-muted">{{ $market['name'] }}</small>
                                                </div>
                                            </div>
                                        </td>

                                        {{-- Sell --}}
                                        <td class="text-end">
                                            <span class="badge bg-light text-danger">
                                                {{ number_format($market['sell'], 5, '.', '') }}
                                            </span>
                                        </td>

                                        {{-- Cambio --}}
                                        <td class="text-center">
                                            @if ($market['direction'] === 'up')
                                                <span class="text-success small">
                                                    ▲ {{ $market['change'] }}
                                                </span>
                                            @else
                                                <span class="text-danger small">
                                                    ▼ {{ abs($market['change']) }}
                                                </span>
                                            @endif
                                        </td>

                                        {{-- Buy --}}
                                        <td class="text-end pe-3">
                                            <span class="badge bg-light text-success">
                                                {{ number_format($market['buy'], 5, '.', '') }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>


    </div>
            </div>
            <div class="col-lg-6">
            <div class="col-xl-12 col-lg-5">
            <div class="card">

                {{-- ================== TABS SOCIAL / SIGNALS ================== --}}
                <div class="card-header pb-0 border-0">
                    <ul class="nav nav-pills nav-fill" id="socialTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab-social" data-bs-toggle="pill"
                                    data-bs-target="#pane-social" type="button" role="tab">
                                Social
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-signals" data-bs-toggle="pill"
                                    data-bs-target="#pane-signals" type="button" role="tab">
                                Signals
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="card-body pt-2">
                    <div class="tab-content" id="socialTabsContent">

                        {{-- =============== TAB SOCIAL ================= --}}
                        <div class="tab-pane fade show active" id="pane-social" role="tabpanel">

                            {{-- Buscador + Join --}}
                            <div class="d-flex mb-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent border-end-0">
                                        <i class="fas fa-search"></i>
                                    </span>
                                    <input type="text" id="socialSearch" class="form-control border-start-0"
                                           placeholder="Search">
                                </div>
                                <button class="btn btn-success ms-2 px-3">
                                    Join
                                </button>
                            </div>

                            {{-- Botones Top ranked / Spotlight --}}
                            <div class="d-flex mb-3">
                                <div class="btn-group btn-group-sm" role="group">
                                    <button type="button"
                                            class="btn btn-outline-primary active"
                                            id="btnTopRanked">
                                        Top ranked
                                    </button>
                                    <button type="button"
                                            class="btn btn-outline-primary"
                                            id="btnSpotlight">
                                        Spotlight
                                    </button>
                                </div>

                                {{-- iconito (opcional) --}}
                                <button class="btn btn-link ms-auto p-0">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                            </div>

                            @php
                                // ====== DATA DEMO TRADERS (lista Top ranked) ======
                                $traders = [
                                    [ 'name' => 'Fawcett500',    'pl' => 72,  'copiers' => 3 ],
                                    [ 'name' => 'Alili123',      'pl' => 60,  'copiers' => 0 ],
                                    [ 'name' => 'Sweetcheeks',   'pl' => 59,  'copiers' => 0 ],
                                    [ 'name' => 'lopojmnccdrry', 'pl' => 49,  'copiers' => 0 ],
                                    [ 'name' => 'ChesterfieldUK','pl' => 123, 'copiers' => 1 ],
                                ];

                                // ====== DATA DEMO SPOTLIGHT ======
                                $spot = [
                                    'name'       => 'Mohammed123456',
                                    'pl_1m'      => 647.8,
                                    'monthly_pl' => 'Top 5',
                                    'copiers'    => 44,
                                ];

                                // ====== DATA DEMO SOCIAL STREAM ======
                                $stream = [
                                    [
                                        'trader'  => 'Alisabbahp',
                                        'text'    => 'opened a XAUUSD buy position at 4,211.79',
                                        'status'  => 'Earning 1.84%',
                                        'type'    => 'success',
                                        'time'    => 'now',
                                    ],
                                    [
                                        'trader'  => 'Powerchina',
                                        'text'    => 'opened a BTCUSD sell position at 91,500',
                                        'status'  => 'Earning 0.95%',
                                        'type'    => 'success',
                                        'time'    => '23 seconds ago',
                                    ],
                                    [
                                        'trader'  => 'mimorami',
                                        'text'    => 'opened a XAUUSD buy position at 4,211',
                                        'status'  => 'Earning 1.63%',
                                        'type'    => 'success',
                                        'time'    => '49 seconds ago',
                                    ],
                                    [
                                        'trader'  => 'mimorami',
                                        'text'    => 'opened a XAUUSD buy position at 4,209.63',
                                        'status'  => 'Earning 0.80%',
                                        'type'    => 'success',
                                        'time'    => '3 minutes ago',
                                    ],
                                    [
                                        'trader'  => 'Alisabbahp',
                                        'text'    => 'opened a XAUUSD buy position at 4,210',
                                        'status'  => 'Loss -0.32%',
                                        'type'    => 'danger',
                                        'time'    => '4 minutes ago',
                                    ],
                                ];
                            @endphp

                            {{-- ================== CONTENEDOR TOP RANKED (LISTA) ================== --}}
                            <div id="topRankedContainer">
                                <div class="d-flex px-2 mb-1 text-muted small">
                                    <div class="flex-grow-1">Name</div>
                                    <div class="text-center" style="width: 80px;">P/L (%)</div>
                                    <div class="text-center" style="width: 70px;">Copiers</div>
                                </div>

                                <div id="tradersList" style="max-height: 220px; overflow-y:auto;">
                                    @foreach ($traders as $t)
                                        <div class="d-flex align-items-center py-2 px-2 rounded-3 mb-1 bg-white trader-row"
                                             data-name="{{ strtolower($t['name']) }}"
                                             data-pl="{{ $t['pl'] }}"
                                             data-copiers="{{ $t['copiers'] }}"
                                             style="cursor:pointer;">
                                            {{-- Avatar --}}
                                            <div class="me-2">
                                                <div class="rounded-circle bg-warning d-flex align-items-center justify-content-center"
                                                     style="width:32px;height:32px;">
                                                    <span class="fw-bold text-white">
                                                        {{ strtoupper(substr($t['name'],0,1)) }}
                                                    </span>
                                                </div>
                                            </div>

                                            {{-- Nombre --}}
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold text-truncate">{{ $t['name'] }}</div>
                                            </div>

                                            {{-- P/L --}}
                                            <div class="text-center" style="width:80px;">
                                                <span class="text-success fw-semibold">{{ $t['pl'] }}%</span>
                                            </div>

                                            {{-- Copiers --}}
                                            <div class="text-center" style="width:70px;">
                                                <span class="badge bg-light text-dark">{{ $t['copiers'] }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- ================== CONTENEDOR SPOTLIGHT (TARJETA) ================== --}}
                            <div id="spotlightContainer" class="d-none">
                                <div class="card border-0 mb-2" style="background-color:#fffbea;">
                                    <div class="card-body pb-2">
                                        <div class="d-flex align-items-center mb-2">
                                            {{-- Avatar grande --}}
                                            <div class="me-2">
                                                <div class="rounded-circle bg-warning d-flex align-items-center justify-content-center"
                                                     style="width:40px;height:40px;">
                                                    <span class="fw-bold text-white">
                                                        {{ strtoupper(substr($spot['name'],0,1)) }}
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h6 class="mb-0 fw-bold" id="spotName">{{ $spot['name'] }}</h6>
                                                <div class="text-muted small">
                                                    <i class="fas fa-users"></i>
                                                    <span id="spotCopiers">{{ $spot['copiers'] }}</span>
                                                </div>
                                            </div>

                                            <div class="text-muted small">
                                                <i class="fas fa-sync-alt"></i>
                                            </div>
                                        </div>

                                        {{-- “cuadro” vacío (como en tu captura) --}}
                                        <div class="border rounded-3 mb-2" style="height:90px;background-color:#fff;">
                                        </div>

                                        {{-- Stats inferiores --}}
                                        <div class="row text-center small mb-3">
                                            <div class="col-6 border-end">
                                                <div class="text-success">● P/L (1M)</div>
                                                <div class="fw-bold" id="spotPl1m">{{ $spot['pl_1m'] }}%</div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-primary">● Monthly P/L</div>
                                                <div class="fw-bold" id="spotMonthly">{{ $spot['monthly_pl'] }}</div>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary w-100">
                                            <i class="far fa-copy me-2"></i>Copy
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- ================== SOCIAL STREAM ================== --}}
                            <div class="mt-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h6 class="mb-0">Social stream</h6>
                                    <div class="dropdown">
                                        <button class="btn btn-outline-secondary btn-xs dropdown-toggle py-1 px-2"
                                                type="button" id="streamFilterBtn" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <small id="streamFilterLabel">All traders</small>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="streamFilterBtn">
                                            <li>
                                                <a class="dropdown-item stream-filter-option active"
                                                   href="#" data-filter="all">All traders</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item stream-filter-option"
                                                   href="#" data-filter="profit">Profitable only</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="socialStream" style="max-height:280px; overflow-y:auto;">
                                    @foreach ($stream as $s)
                                        <div class="d-flex align-items-start py-2 px-2 mb-2 rounded-3 border stream-row"
                                             data-trader="{{ strtolower($s['trader']) }}"
                                             data-type="{{ $s['type'] === 'success' ? 'profit' : 'other' }}">
                                            {{-- Avatar --}}
                                            <div class="me-2">
                                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center"
                                                     style="width:32px;height:32px;">
                                                    <i class="fas fa-user text-secondary"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="small">
                                                    <strong>{{ $s['trader'] }}</strong> {{ $s['text'] }}
                                                </div>
                                                <div class="d-flex align-items-center mt-1">
                                                    <span class="badge bg-{{ $s['type'] }} me-2">
                                                        {{ $s['status'] }}
                                                    </span>
                                                    <span class="text-muted small">
                                                        {{ $s['time'] }}
                                                    </span>
                                                </div>
                                            </div>
                                            <button class="btn btn-outline-primary btn-sm ms-2">
                                                <i class="far fa-copy"></i>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                        {{-- =============== TAB SIGNALS (placeholder) ================= --}}
                        <div class="tab-pane fade" id="pane-signals" role="tabpanel">
                            <p class="text-muted small mb-0">
                                Aquí luego puedes listar señales automáticas, alertas, etc.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection



@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>


 {{-- Highcharts Stock (Highstock) --}}
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/stock/modules/accessibility.js"></script>

<script>
    // =========
    // Funciones generadoras
    // =========

    // Genera datos OHLC simulados
    function generateOhlcData(options = {}) {
        const {
            days = 30,              // cuántos días de historial
            intervalMinutes = 30,   // intervalo entre velas
            basePrice = 100,        // precio inicial
            volatility = 1,         // qué tanto se mueve cada vela (en unidades de precio)
            startDate = Date.UTC(2024, 0, 1, 0, 0)
        } = options;

        const data = [];
        const totalPoints = Math.floor(days * 24 * 60 / intervalMinutes);
        let lastClose = basePrice;

        for (let i = 0; i < totalPoints; i++) {
            const time = startDate + i * intervalMinutes * 60 * 1000;

            const open = lastClose;

            // Movimiento aleatorio con ligera tendencia
            const dir = (Math.random() - 0.48);  // >0 sube, <0 baja
            const move = dir * volatility;
            const close = open + move;

            const high = Math.max(open, close) + Math.random() * volatility * 0.5;
            const low  = Math.min(open, close) - Math.random() * volatility * 0.5;

            data.push([
                time,
                +open.toFixed(3),
                +high.toFixed(3),
                +low.toFixed(3),
                +close.toFixed(3),
            ]);

            lastClose = close;
        }

        return data;
    }

    // Genera volumen en base a las velas
    function generateVolumeData(ohlc, baseVolume = 1500, volVol = 800) {
        return ohlc.map(([time]) => {
            const vol = baseVolume + (Math.random() - 0.5) * volVol;
            return [time, Math.max(100, Math.round(vol))];
        });
    }

    document.addEventListener("DOMContentLoaded", function () {

        // ==========
        // AUDNZD – 1 año, 30m
        // ==========
        const ohlcAud = generateOhlcData({
            days: 365,
            intervalMinutes: 30,
            basePrice: 1.080,   // precio inicial aproximado
            volatility: 0.010,  // cuánto se mueve cada vela
            startDate: Date.UTC(2024, 0, 1, 0, 0)
        });

        const volumeAud = generateVolumeData(ohlcAud, 1500, 800);

        // ==========
        // CADJPY – 1 año, 30m
        // ==========
        const ohlcCad = generateOhlcData({
            days: 365,
            intervalMinutes: 30,
            basePrice: 112.00,  // precio inicial aproximado
            volatility: 0.30,   // movimiento típico en JPY
            startDate: Date.UTC(2024, 0, 1, 0, 0)
        });

        const volumeCad = generateVolumeData(ohlcCad, 900, 500);

        // ==========
        // CHART 1: AUDNZD (precio + volumen o indicador abajo)
        // ==========
        Highcharts.stockChart('chart-audnzd', {
            chart: {
                backgroundColor: '#111827'
            },
            rangeSelector: {
                selected: 3,
                inputEnabled: false,
                allButtonsEnabled: true,
                buttons: [
                    { type: 'minute', count: 1,  text: '1 min' },
                    { type: 'minute', count: 5,  text: '5 min' },
                    { type: 'minute', count: 30, text: '30 min' },
                    { type: 'hour',   count: 1,  text: '1 hora' },
                    { type: 'day',    count: 1,  text: '1 día' },
                    { type: 'month',  count: 1,  text: '1 mes' },
                    { type: 'year',   count: 1,  text: '1 año' },
                    { type: 'all',              text: 'Todo' }
                ]
            },
            xAxis: {
                type: 'datetime',
                labels: { style: { color: '#e5e7eb' } }
            },
            yAxis: [{
                height: '70%',
                labels: {
                    align: 'right',
                    x: -3,
                    style: { color: '#e5e7eb' }
                },
                title: {
                    text: 'Precio',
                    style: { color: '#e5e7eb' }
                },
                gridLineColor: '#1f2937'
            }, {
                top: '75%',
                height: '25%',
                offset: 0,
                labels: {
                    align: 'right',
                    x: -3,
                    style: { color: '#e5e7eb' }
                },
                title: {
                    text: 'Volumen',
                    style: { color: '#e5e7eb' }
                },
                gridLineColor: '#1f2937'
            }],
            legend: { enabled: false },
            tooltip: { split: true },
            plotOptions: {
                candlestick: {
                    color: '#ef4444',     // bajista rojo
                    upColor: '#22c55e',   // alcista verde
                    lineColor: '#ef4444',
                    upLineColor: '#22c55e'
                }
            },
            series: [
                {
                    type: 'candlestick',
                    name: 'AUDNZD',
                    id: 'audnzd',
                    data: ohlcAud
                },
                {
                    type: 'column',
                    name: 'Volumen',
                    data: volumeAud,
                    yAxis: 1,
                    color: '#4b5563'
                }
            ],
            navigator: {
                maskFill: 'rgba(56,189,248,0.2)'
            },
            credits: { enabled: false }
        });

        // ==========
        // CHART 2: CADJPY (precio + volumen)
        // ==========
        Highcharts.stockChart('chart-cadjpy', {
            chart: {
                backgroundColor: '#111827'
            },
            rangeSelector: {
                selected: 3,
                inputEnabled: false,
                allButtonsEnabled: true,
                buttons: [
                    { type: 'minute', count: 1,  text: '1 min' },
                    { type: 'minute', count: 5,  text: '5 min' },
                    { type: 'minute', count: 30, text: '30 min' },
                    { type: 'hour',   count: 1,  text: '1 hora' },
                    { type: 'day',    count: 1,  text: '1 día' },
                    { type: 'month',  count: 1,  text: '1 mes' },
                    { type: 'year',   count: 1,  text: '1 año' },
                    { type: 'all',              text: 'Todo' }
                ]
            },
            xAxis: {
                type: 'datetime',
                labels: { style: { color: '#e5e7eb' } }
            },
            yAxis: [{
                height: '70%',
                labels: {
                    align: 'right',
                    x: -3,
                    style: { color: '#e5e7eb' }
                },
                title: {
                    text: 'Precio',
                    style: { color: '#e5e7eb' }
                },
                gridLineColor: '#1f2937'
            }, {
                top: '75%',
                height: '25%',
                offset: 0,
                labels: {
                    align: 'right',
                    x: -3,
                    style: { color: '#e5e7eb' }
                },
                title: {
                    text: 'Volumen',
                    style: { color: '#e5e7eb' }
                },
                gridLineColor: '#1f2937'
            }],
            legend: { enabled: false },
            tooltip: { split: true },
            plotOptions: {
                candlestick: {
                    color: '#ef4444',
                    upColor: '#22c55e',
                    lineColor: '#ef4444',
                    upLineColor: '#22c55e'
                }
            },
            series: [
                {
                    type: 'candlestick',
                    name: 'CADJPY',
                    id: 'cadjpy',
                    data: ohlcCad
                },
                {
                    type: 'column',
                    name: 'Volumen',
                    data: volumeCad,
                    yAxis: 1,
                    color: '#4b5563'
                }
            ],
            navigator: {
                maskFill: 'rgba(56,189,248,0.2)'
            },
            credits: { enabled: false }
        });
    });
</script>





{{-- ================== JAVASCRIPT buscador================== --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput  = document.getElementById('socialSearch');
    const traderRows   = document.querySelectorAll('.trader-row');
    const streamRows   = document.querySelectorAll('.stream-row');

    const btnTop       = document.getElementById('btnTopRanked');
    const btnSpot      = document.getElementById('btnSpotlight');
    const topBox       = document.getElementById('topRankedContainer');
    const spotBox      = document.getElementById('spotlightContainer');

    const streamFilterBtns  = document.querySelectorAll('.stream-filter-option');
    const streamFilterLabel = document.getElementById('streamFilterLabel');

    let streamFilter = 'all';

    // --------- Filtro de búsqueda (traders + stream) ----------
    function applySearch() {
        const q = searchInput.value.trim().toLowerCase();

        traderRows.forEach(row => {
            const name = row.getAttribute('data-name');
            row.style.display = name.includes(q) ? '' : 'none';
        });

        streamRows.forEach(row => {
            const trader = row.getAttribute('data-trader');
            const type   = row.getAttribute('data-type'); // profit / other
            const matchText = trader.includes(q);
            const matchType = (streamFilter === 'all' || streamFilter === type);
            row.style.display = (matchText && matchType) ? '' : 'none';
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', applySearch);
    }

    // --------- Filtro Social stream (All traders / Profitable only) ----------
    streamFilterBtns.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            streamFilterBtns.forEach(l => l.classList.remove('active'));
            this.classList.add('active');

            streamFilter = this.getAttribute('data-filter');
            streamFilterLabel.textContent = this.textContent.trim();

            applySearch();
        });
    });

    // --------- Toggle Top ranked / Spotlight ----------
    function showTop() {
        btnTop.classList.add('active');
        btnSpot.classList.remove('active');
        topBox.classList.remove('d-none');
        spotBox.classList.add('d-none');
    }

    function showSpotlight() {
        btnSpot.classList.add('active');
        btnTop.classList.remove('active');
        topBox.classList.add('d-none');
        spotBox.classList.remove('d-none');
    }

    if (btnTop && btnSpot && topBox && spotBox) {
        btnTop.addEventListener('click', showTop);
        btnSpot.addEventListener('click', showSpotlight);
        // estado inicial
        showTop();
    }
});
</script>
@endpush
