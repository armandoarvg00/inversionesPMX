@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-4 col-lg-5">
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

        {{-- aquí podrías tener tus gráficas a la derecha --}}
        {{-- <div class="col-xl-8 col-lg-7"> ... </div> --}}
    </div>
</div>

{{-- ================== JAVASCRIPT ================== --}}
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
@endsection
