<!-- SCRIPT -->
<script src="{{ asset('/frontasset/assets/js/bundle.js?v100') }}"></script>
<script src="{{ asset('/frontasset/assets/js/app.js?v100') }}"></script>
<script src="{{ asset('/frontasset/assets/js/sweetalert2.all.min.js') }}"></script>
@if ($status = Session::get('status'))
    <script>
        Swal.fire(
        '{{ $status }}',
        'You clicked the button!',
        'success'
        )
    </script>
@endif
<!-- END -->
