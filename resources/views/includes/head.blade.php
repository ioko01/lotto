@section('head')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="{{ asset('vendor/plugins/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css', env('REDIRECT_HTTPS')) }}">
        <!-- icheck bootstrap -->
        <link rel="stylesheet"
            href="{{ asset('vendor/plugins/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css', env('REDIRECT_HTTPS')) }}">
        <!-- Theme style -->
        <link rel="stylesheet"
            href="{{ asset('vendor/plugins/AdminLTE-3.2.0/dist/css/adminlte.min.css', env('REDIRECT_HTTPS')) }}">

    </head>
@endsection
