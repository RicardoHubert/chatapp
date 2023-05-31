@include ('layouts.frontchat.template')

<body class="tyn-body">
    <div class="tyn-root">
        <!-- Header -->
        @include ('layouts.frontchat.header')
        <!-- End Header -->
        <!-- Body -->
        <div class="tyn-content tyn-content-full-height tyn-chat has-aside-base">
        @include('layouts.frontchat.sidebar')
        @include('layouts.frontchat.body')
        </div>
    </div>
    <!-- END BODY -->
    <!-- MODAL -->
    
    <!-- END MODAL -->
    <!-- SCRIPT -->
    @include('layouts.frontchat.script')
    <!-- END -->
</body>

</html>