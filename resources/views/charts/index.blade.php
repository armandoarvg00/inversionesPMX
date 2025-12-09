@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-4 col-lg-5">
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
            'name'       => 'Gumamela',
            'pl'         => 30.46,   // P/L 1M
            'pl_3m'      => 82.10,
            'pl_6m'      => 145.32,
            'copiers'    => 591,
            'risk'       => 'Medium',
            'country'    => 'PH',    // código país (PH, US, MX...)
            'avatarColor'=> '#a855f7',
        ],
        [
            'name'       => 'Fawcett500',
            'pl'         => 72,
            'pl_3m'      => 110,
            'pl_6m'      => 180,
            'copiers'    => 3,
            'risk'       => 'Low',
            'country'    => 'US',
            'avatarColor'=> '#f97316',
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
     data-copiers="{{ $t['copiers'] }}"
     data-pl="{{ $t['pl'] }}"
     data-pl3m="{{ $t['pl_3m'] }}"
     data-pl6m="{{ $t['pl_6m'] }}"
     data-risk="{{ $t['risk'] }}"
     data-country="{{ $t['country'] }}"
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

        {{-- Aquí podrías tener tus charts a la derecha --}}
        {{-- <div class="col-xl-8 col-lg-7"> ... </div> --}}
    </div>
</div>

{{-- JS búsqueda / filtros --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput      = document.getElementById('socialSearch');
    const traderRows       = document.querySelectorAll('.trader-row');
    const streamRows       = document.querySelectorAll('.stream-row');
    const traderFilterBtns = document.querySelectorAll('.social-filter-btn');
    const streamFilterBtns = document.querySelectorAll('.stream-filter-option');
    const streamFilterLabel= document.getElementById('streamFilterLabel');

    let traderFilter = 'top';
    let streamFilter = 'all';

    function filterTraders() {
        const q = searchInput.value.trim().toLowerCase();
        traderRows.forEach(row => {
            const name = row.getAttribute('data-name');
            const tag  = row.getAttribute('data-tag');
            const matchText = name.includes(q);
            const matchTag  = (traderFilter === 'all' || traderFilter === tag);
            row.style.display = (matchText && matchTag) ? '' : 'none';
        });
    }

    function filterStream() {
        const q = searchInput.value.trim().toLowerCase();
        streamRows.forEach(row => {
            const trader = row.getAttribute('data-trader');
            const type   = row.getAttribute('data-type'); // profit / other
            const matchText = trader.includes(q);
            const matchType = (streamFilter === 'all' || streamFilter === type);
            row.style.display = (matchText && matchType) ? '' : 'none';
        });
    }

    // Buscador afecta traders + stream
    searchInput.addEventListener('input', function () {
        filterTraders();
        filterStream();
    });

    // Top ranked / Spotlight
    traderFilterBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            traderFilterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            traderFilter = this.getAttribute('data-filter'); // top / spotlight
            filterTraders();
        });
    });

    // Filtro Social stream
    streamFilterBtns.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            streamFilterBtns.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            streamFilter = this.getAttribute('data-filter'); // all / profit
            streamFilterLabel.textContent = this.textContent.trim();
            filterStream();
        });
    });

    // Inicial
    filterTraders();
    filterStream();
});
// Botones Top Ranked / Spotlight
const spotlightBtn      = document.querySelector('.social-filter-btn[data-filter="spotlight"]');
const topBtn            = document.querySelector('.social-filter-btn[data-filter="top"]');
const spotlightWrapper  = document.getElementById('spotlightTrader');
const traderListWrapper = document.getElementById('tradersListWrapper');
const traderRows        = document.querySelectorAll('.trader-row');

function countryLabel(code) {
    switch (code) {
        case 'US': return '🇺🇸 United States';
        case 'MX': return '🇲🇽 Mexico';
        case 'PH': return '🇵🇭 Philippines';
        case 'UK': return '🇬🇧 United Kingdom';
        default:   return code;
    }
}

// Rellena la tarjeta Spotlight a partir de un .trader-row
function fillSpotlightFromRow(row) {
    const name    = row.getAttribute('data-name');
    const copiers = row.getAttribute('data-copiers');
    const pl1m    = row.getAttribute('data-pl');
    const pl3m    = row.getAttribute('data-pl3m');
    const pl6m    = row.getAttribute('data-pl6m');
    const risk    = row.getAttribute('data-risk');
    const country = row.getAttribute('data-country');

    document.getElementById('spotTraderName').textContent   = name;
    document.getElementById('spotTraderCopiers').textContent= copiers;
    document.getElementById('spotTraderPl1m').textContent   = pl1m + '%';
    document.getElementById('spotTraderPl3m').textContent   = pl3m + '%';
    document.getElementById('spotTraderPl6m').textContent   = pl6m + '%';
    document.getElementById('spotTraderRisk').textContent   = 'Risk: ' + risk;
    document.getElementById('spotTraderCountry').textContent= countryLabel(country);

    // Avatar: inicial y color del trader
    const avatar = document.getElementById('spotAvatar');
    avatar.textContent = name.charAt(0).toUpperCase();
    const bg = row.querySelector('.rounded-circle').style.backgroundColor;
    if (bg) avatar.style.backgroundColor = bg;
}

// Click en botón Spotlight
if (spotlightBtn && topBtn) {
    spotlightBtn.addEventListener('click', function () {
        spotlightBtn.classList.add('active');
        topBtn.classList.remove('active');

        spotlightWrapper.classList.remove('d-none');
        traderListWrapper.classList.add('d-none');

        // Usa el primer trader visible como destacado
        const firstVisible = Array.from(traderRows).find(r => r.style.display !== 'none');
        if (firstVisible) {
            fillSpotlightFromRow(firstVisible);
        }
    });

    // Click en botón Top ranked
    topBtn.addEventListener('click', function () {
        topBtn.classList.add('active');
        spotlightBtn.classList.remove('active');

        spotlightWrapper.classList.add('d-none');
        traderListWrapper.classList.remove('d-none');
    });
}

// Opcional: al hacer click en un trader, abrirlo en Spotlight directamente
traderRows.forEach(row => {
    row.addEventListener('click', function () {
        // cambia a modo Spotlight
        spotlightBtn.click();
        // y carga sus datos
        fillSpotlightFromRow(this);
    });
});
</script>
@endsection
