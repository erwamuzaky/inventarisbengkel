<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>
        Inventoris Bengkel Komputer
    </title>

    {{-- BOOTSTRAP --}}
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    {{-- FONT AWESOME --}}
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- CSS --}}
    <link
    rel="stylesheet"
    href="{{ asset('css/style.css') }}">

</head>

<body>

<div class="sidebar">

    <div class="logo">

        <i class="fa-solid fa-laptop-code"></i>

        <div>

            <h2>
                Inventoris
            </h2>

            <p>
                Bengkel Komputer
            </p>

        </div>

    </div>

    <ul>

        <li>

            <a
            href="/dashboard"
            class="{{ request()->is('dashboard') ? 'active' : '' }}">

                <i class="fa-solid fa-house"></i>

                Dashboard

            </a>

        </li>

        <li>

            <a
            href="/inventaris"
            class="{{ request()->is('inventaris*') ? 'active' : '' }}">

                <i class="fa-solid fa-box"></i>

                Inventaris

            </a>

        </li>

        <li>

            <a
            href="/service"
            class="{{ request()->is('service*') ? 'active' : '' }}">

                <i class="fa-solid fa-screwdriver-wrench"></i>

                Service

            </a>

        </li>

        <li>

            <a
            href="/laporan"
            class="{{ request()->is('laporan*') ? 'active' : '' }}">

                <i class="fa-solid fa-chart-column"></i>

                Laporan

            </a>

        </li>

        <li>

            <a
            href="/pelanggan"
            class="{{ request()->is('pelanggan*') ? 'active' : '' }}">

                <i class="fa-solid fa-users"></i>

                Pelanggan

            </a>

        </li>

    </ul>

    <form
    action="/logout"
    method="POST">

        @csrf

        <button
        type="submit"
        class="logout-btn">

            <i class="fa-solid fa-right-from-bracket"></i>

            Logout

        </button>

    </form>

</div>

<div class="main-content">

    @yield('content')

</div>

</body>
</html>