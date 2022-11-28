@section('script')
    <script src="{{ asset('vendor/plugins/AdminLTE-3.2.0/plugins/jquery/jquery.min.js', env('REDIRECT_HTTPS')) }}"></script>
    <script src="{{ asset('js/digits.js', env('REDIRECT_HTTPS')) }}"></script>
    <!-- Bootstrap 4 -->
    <script
        src="{{ asset('vendor/plugins/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js', env('REDIRECT_HTTPS')) }}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/plugins/AdminLTE-3.2.0/dist/js/adminlte.min.js', env('REDIRECT_HTTPS')) }}"></script>
@endsection
