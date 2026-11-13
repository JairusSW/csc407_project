<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - ChMS Lite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root { --bs-primary: #246454; --bs-primary-rgb: 36, 100, 84; --bs-border-color: #e2e6e0; }
        body { color: #283c35; background: #f5f6f2 !important; font-family: ui-sans-serif, system-ui, sans-serif; }
        .page { max-width: 1440px; }
        main.page { padding-top: 2.5rem !important; }
        h1 { font-weight: 700; letter-spacing: -.035em; font-size: 2rem !important; }
        h2 { font-weight: 650; }
        nav { box-shadow: 0 2px 12px #203c3505; }
        .brand-mark { display: inline-grid; place-items: center; width: 2rem; height: 2rem; margin-right: .5rem; border-radius: .65rem; background: #246454; color: white; vertical-align: middle; }
        .nav-pills { --bs-nav-pills-link-active-bg: #e7f0eb; --bs-nav-pills-link-active-color: #1d5546; }
        .nav-link { color: #596960; font-weight: 600; border-radius: .6rem !important; }
        .nav-link:hover { color: #1d5546; background: #f1f5f1; }
        .form-panel { max-width: 36rem; }
        .form-label { font-size: .875rem; font-weight: 600; color: #52665b; }
        .form-control, .form-select { padding: .7rem .9rem; border-radius: .65rem; border-color: #d7dfd7; }
        .form-control:focus, .form-select:focus { border-color: #478370; box-shadow: 0 0 0 .2rem #24645420; }
        .card, .table-responsive, dl.row { border-radius: .9rem !important; box-shadow: 0 4px 20px #233b3306; }
        .card-body { padding: 1.75rem; }
        dl.row { margin: 0; padding: 1.5rem; background: white; border: 1px solid var(--bs-border-color); }
        dt { font-size: .875rem; color: #637369; font-weight: 500; }
        dd { font-weight: 500; }
        th, .actions { white-space: nowrap; }
        .table { --bs-table-color: #35483e; --bs-table-hover-bg: #f3f7f3; --bs-table-border-color: #edf0ea; font-size: .9rem; }
        .table > :not(caption) > * > * { padding: 1rem 1.1rem; }
        .table thead { --bs-table-bg: #f8faf6; --bs-table-color: #647368; font-size: .72rem; text-transform: uppercase; letter-spacing: .065em; }
        .table tbody tr:last-child td { border-bottom: 0; }
        .table tbody td:first-child { font-weight: 600; }
        .btn { border-radius: .55rem; font-weight: 600; }
        .btn-sm { padding: .35rem .7rem; font-size: .78rem; }
        .btn-primary { --bs-btn-bg: #246454; --bs-btn-border-color: #246454; --bs-btn-hover-bg: #1a4d40; --bs-btn-hover-border-color: #1a4d40; --bs-btn-active-bg: #153e34; --bs-btn-active-border-color: #153e34; }
        .btn-outline-primary { --bs-btn-color: #246454; --bs-btn-border-color: #b7cec3; --bs-btn-hover-bg: #246454; --bs-btn-hover-border-color: #246454; --bs-btn-active-bg: #1a4d40; --bs-btn-active-border-color: #1a4d40; }
        .btn-outline-secondary { --bs-btn-color: #596960; --bs-btn-border-color: #d7dfd7; --bs-btn-hover-bg: #edf1eb; --bs-btn-hover-color: #283c35; --bs-btn-hover-border-color: #bdc9bf; }
        @media (max-width: 575px) {
            main.page { padding-top: 1.75rem !important; }
            .table > :not(caption) > * > * { padding: .8rem; }
            .nav-link { padding: .5rem .7rem; }
        }
    </style>
</head>
<body class="bg-body-tertiary">
    <nav class="bg-white border-bottom" aria-label="Main">
        <div class="page mx-auto px-3 px-md-4 py-3 d-flex flex-wrap align-items-center gap-3">
            <a class="fw-bold fs-5 text-dark text-decoration-none me-auto" href="{{ route('people') }}"><span class="brand-mark" aria-hidden="true">✦</span>ChMS Lite</a>
            <div class="nav nav-pills gap-1">
                @foreach (['people' => 'People', 'events' => 'Events', 'donations' => 'Donations'] as $route => $label)
                    <a class="nav-link {{ request()->routeIs($route . '*') ? 'active' : '' }}" href="{{ route($route) }}" @if(request()->routeIs($route . '*')) aria-current="page" @endif>{{ $label }}</a>
                @endforeach
            </div>
        </div>
    </nav>
    <main class="page mx-auto p-3 p-md-4">
        <h1 class="h3 mb-4">@yield('title')</h1>
        @if (session('status'))
            <div class="alert alert-success" role="status">{{ session('status') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </main>
</body>
</html>
