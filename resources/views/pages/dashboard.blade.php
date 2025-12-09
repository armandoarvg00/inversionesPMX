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
                                        $53,000
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday
                                    </p>
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
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Free margin</p>
                                    <h5 class="font-weight-bolder">
                                        2,300
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                                        since last week
                                    </p>
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
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Used margin</p>
                                    <h5 class="font-weight-bolder">
                                        +3,462
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                        since last quarter
                                    </p>
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
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Open P/L</p>
                                    <h5 class="font-weight-bolder">
                                        $103,430
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                                    </p>
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
                                        $103,430
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                                    </p>
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
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">BalaMargin level</p>
                                    <h5 class="font-weight-bolder">
                                        $103,430
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                                    </p>
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
                                        $103,430
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                                    </p>
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

                {{-- Tabs Social / Signals --}}
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

                        {{-- =============== PANE SOCIAL ================= --}}
                        <div class="tab-pane fade show active" id="pane-social" role="tabpanel">

                            {{-- Buscador + Join --}}
                            <div class="d-flex mb-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent border-end-0">
                                        <i class="fas fa-search"></i>
                                    </span>
                                    <input type="text" id="socialSearch" class="form-control border-start-0"
                                           placeholder="Search traders">
                                </div>
                                <button class="btn btn-success ms-2 px-3">
                                    Join
                                </button>
                            </div>

                            {{-- Pills Top ranked / Spotlight --}}
                            <div class="d-flex mb-3">
                                <div class="btn-group btn-group-sm" role="group">
                                    <button type="button" class="btn btn-outline-primary active social-filter-btn"
                                            data-filter="top">
                                        Top ranked
                                    </button>
                                    <button type="button" class="btn btn-outline-primary social-filter-btn"
                                            data-filter="spotlight">
                                        Spotlight
                                    </button>
                                </div>
                            </div>

                            {{-- Tabla de traders --}}
                            @php
                                $traders = [
                                    [
                                        'name' => 'Fawcett500',
                                        'pl' => 72,
                                        'copiers' => 3,
                                        'avatarColor' => '#f97316',
                                        'tag' => 'top',
                                    ],
                                    [
                                        'name' => 'Alili23',
                                        'pl' => 60,
                                        'copiers' => 0,
                                        'avatarColor' => '#0ea5e9',
                                        'tag' => 'top',
                                    ],
                                    [
                                        'name' => 'Sweetcheeks',
                                        'pl' => 59,
                                        'copiers' => 0,
                                        'avatarColor' => '#ec4899',
                                        'tag' => 'spotlight',
                                    ],
                                    [
                                        'name' => 'lopojmnccdrry',
                                        'pl' => 49,
                                        'copiers' => 0,
                                        'avatarColor' => '#22c55e',
                                        'tag' => 'top',
                                    ],
                                    [
                                        'name' => 'ChesterfieldUK',
                                        'pl' => 123,
                                        'copiers' => 1,
                                        'avatarColor' => '#a855f7',
                                        'tag' => 'spotlight',
                                    ],
                                ];
                            @endphp

                            <div class="mb-3">
                                <div class="d-flex px-2 mb-1 text-muted small">
                                    <div class="flex-grow-1">Name</div>
                                    <div class="text-center" style="width: 80px;">P/L (%)</div>
                                    <div class="text-center" style="width: 70px;">Copiers</div>
                                </div>
                                <div id="tradersList" style="max-height: 260px; overflow-y: auto;">
                                    @foreach ($traders as $t)
                                        <div class="d-flex align-items-center py-2 px-2 rounded-3 mb-1 trader-row"
                                             data-name="{{ strtolower($t['name']) }}"
                                             data-tag="{{ $t['tag'] }}"
                                             style="cursor:pointer;">
                                            {{-- Avatar simple circular (puedes remplazar por imagen) --}}
                                            <div class="me-2">
                                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                                     style="width:32px;height:32px;background-color: {{ $t['avatarColor'] }};color:#fff;font-weight:600;">
                                                    {{ strtoupper(substr($t['name'],0,1)) }}
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">{{ $t['name'] }}</div>
                                            </div>
                                            <div class="text-center" style="width: 80px;">
                                                <span class="text-success fw-semibold">{{ $t['pl'] }}%</span>
                                            </div>
                                            <div class="text-center" style="width: 70px;">
                                                <span class="badge bg-light text-dark">{{ $t['copiers'] }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Social stream --}}
                            <div class="mt-3">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <h6 class="mb-0">Social stream</h6>
                                    <div class="dropdown">
                                        <button class="btn btn-outline-secondary btn-xs dropdown-toggle py-1 px-2"
                                                type="button" id="streamFilterBtn" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <small id="streamFilterLabel">All traders</small>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="streamFilterBtn">
                                            <li><a class="dropdown-item stream-filter-option active"
                                                   data-filter="all" href="#">All traders</a></li>
                                            <li><a class="dropdown-item stream-filter-option"
                                                   data-filter="profit" href="#">Profitable only</a></li>
                                        </ul>
                                    </div>
                                </div>

                                @php
                                    $stream = [
                                        [
                                            'trader' => 'Sms9286',
                                            'text' => 'opened a XAUUSD buy position at 4,209.49',
                                            'status' => 'Earning 1.81%',
                                            'statusType' => 'success',
                                            'minutes' => 5,
                                        ],
                                        [
                                            'trader' => 'manoool',
                                            'text' => 'opened a XAUUSD buy position at 4,210.28',
                                            'status' => 'Earning 0.95%',
                                            'statusType' => 'success',
                                            'minutes' => 7,
                                        ],
                                        [
                                            'trader' => 'Cyborgtrade',
                                            'text' => 'placed a Sell limit order on USDJPY at 155.27',
                                            'status' => 'Pending',
                                            'statusType' => 'secondary',
                                            'minutes' => 9,
                                        ],
                                        [
                                            'trader' => 't117778899',
                                            'text' => 'opened a AUDJPY sell position at 103.021',
                                            'status' => 'Earning 0.45%',
                                            'statusType' => 'success',
                                            'minutes' => 12,
                                        ],
                                        [
                                            'trader' => 'Ammamia',
                                            'text' => 'opened a XAUUSD sell position at 4,208.02',
                                            'status' => 'Loss -0.32%',
                                            'statusType' => 'danger',
                                            'minutes' => 16,
                                        ],
                                    ];
                                @endphp

                                <div id="socialStream" style="max-height: 260px; overflow-y:auto;">
                                    @foreach ($stream as $s)
                                        <div class="d-flex align-items-start py-2 px-2 mb-2 rounded-3 border stream-row"
                                             data-trader="{{ strtolower($s['trader']) }}"
                                             data-type="{{ $s['statusType'] === 'success' ? 'profit' : 'other' }}">
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
                                                    <span class="badge bg-{{ $s['statusType'] }} me-2">
                                                        {{ $s['status'] }}
                                                    </span>
                                                    <span class="text-muted small">
                                                        {{ $s['minutes'] }} minutes ago
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

                        {{-- =============== PANE SIGNALS (placeholder) ================= --}}
                        <div class="tab-pane fade" id="pane-signals" role="tabpanel">
                            <p class="text-muted small mb-0">
                                Aquí puedes más adelante listar señales automáticas, alertas, etc.
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

{{-- JS de filtro/búsqueda --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput  = document.getElementById('marketSearch');
    const rows         = document.querySelectorAll('#marketsTable .market-row');
    const filterLinks  = document.querySelectorAll('.market-filter-option');
    const filterLabel  = document.getElementById('marketFilterLabel');
    const marketCount  = document.getElementById('marketCount');

    let currentFilter = 'all';

    function applyFilters() {
        const query = searchInput.value.trim().toLowerCase();
        let visible = 0;

        rows.forEach(row => {
            const text     = row.getAttribute('data-search');
            const category = row.getAttribute('data-category');

            const matchesText   = text.includes(query);
            const matchesFilter = (currentFilter === 'all' || category === currentFilter);

            if (matchesText && matchesFilter) {
                row.style.display = '';
                visible++;
            } else {
                row.style.display = 'none';
            }
        });

        marketCount.textContent = `(${visible})`;
    }

    // Búsqueda en vivo
    searchInput.addEventListener('input', applyFilters);

    // Filtro por categoría
    filterLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            filterLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');

            currentFilter = this.getAttribute('data-filter');
            filterLabel.textContent = this.textContent.trim();

            applyFilters();
        });
    });

    // Inicial
    applyFilters();
});
</script>
@endpush
