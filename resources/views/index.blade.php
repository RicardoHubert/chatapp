@include ('layouts.frontchat.template')

<body class="tyn-body">
    <div class="tyn-root">
        @yield('profile')
        <!-- Header -->
        @include ('layouts.frontchat.header')
        <!-- End Header -->
        <!-- Body -->
        <div class="tyn-content tyn-content-full-height tyn-chat has-aside-base">
            @yield('kontent')
        </div>
    </div>
    <!-- END BODY -->
    <!-- MODAL -->
    @include('layouts.frontchat.modal')
    <!-- END MODAL -->
    <!-- SCRIPT -->
    @include('layouts.frontchat.script')
    <!-- END -->
</body>

</html>
