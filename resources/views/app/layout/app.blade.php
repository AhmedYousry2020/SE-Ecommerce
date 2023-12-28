<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js'></script>


    <!-- Styles -->
    <style>
        body {
            margin-top: 20px;
            background: #f6f9fc;
        }

        .hover-lift-light {
            transition: box-shadow .25s ease, transform .25s ease, color .25s ease, background-color .15s ease-in;
        }

        .text-decoration-none {
            text-decoration: none !important;
        }

        .py-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(30, 46, 80, .09);
            border-radius: 0.25rem;
        }

        .icon-circle-lg {
            width: 4rem;
            height: 4rem;
        }

        .icon-circle {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 3.2rem;
            height: 3.2rem;
            border-radius: 50%;
        }

        .bg-pastel-primary {
            background-color: #e9f3ff !important;
        }

        .mt-6 {
            margin-top: 4rem !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .badge {
            padding: 0.4rem 0.65rem 0.25rem;
        }

        .text-uppercase-bold-sm {
            text-transform: uppercase !important;
            font-weight: 500 !important;
            letter-spacing: 2px !important;
            font-size: .85rem !important;
        }

        .bg-pastel-primary {
            background-color: #e9f3ff !important;
        }

        .icon-circle-lg {
            width: 4rem;
            height: 4rem;
        }

        .icon-circle {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 3.2rem;
            height: 3.2rem;
            border-radius: 50%;
        }

        .bg-pastel-primary {
            background-color: #e9f3ff !important;
        }

        .icon-circle[class*=text-] [fill]:not([fill=none]),
        .icon-circle[class*=text-] svg:not([fill=none]),
        .svg-icon[class*=text-] [fill]:not([fill=none]),
        .svg-icon[class*=text-] svg:not([fill=none]) {
            fill: currentColor !important;
        }

        .icon-circle-lg>svg {
            width: 2rem;
            height: 2rem;
        }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(35, 38, 45, .09) !important;
        }

        .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
        .input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group-lg>.btn,
        .input-group-lg>.form-control,
        .input-group-lg>.form-select,
        .input-group-lg>.input-group-text {
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            border-radius: 0.3rem;
        }

        .border-0 {
            border: 0 !important;
        }

        .input-group-text {
            display: flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #1f2c73;
            text-align: center;
            white-space: nowrap;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

    <section class="pt-8 pt-md-9">
        <div class="container">
            <h2 class="text-dark fw-normal">
                E-commerce
            </h2>


            @yield('content')

        </div>
    </section>
</body>

</html>
