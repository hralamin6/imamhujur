<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="turbolinks-cache-control" content="no-cache">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Windmill Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .contain{width:100%}@media (min-width:640px){.container{max-width:640px}}@media (min-width:768px){.container{max-width:768px}}@media (min-width:1024px){.container{max-width:1024px}}@media (min-width:1280px){.container{max-width:1280px}}
    </style>
    @stack('css')
    @livewireStyles
    <script src="{{asset('js/app.js')}}" defer></script>
    {{--    <script--}}
    {{--        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"--}}
    {{--        defer--}}
    {{--    ></script>--}}
    <script src="{{asset('assets/js/init-alpine.js')}}"></script>
    @laravelPWA
</head>
<body class="font-serif">
<div
    class="flex h-screen bg-gray-50 dark:bg-gray-900"
    :class="{ 'overflow-hidden': isSideMenuOpen }"
>
    <!-- Desktop sidebar -->
    @livewire('web.sidebar-component')
    <div class="flex flex-col flex-1 w-full">
        @livewire('web.header-component')
        <main class="h-full overflow-y-auto">
            {{--            @include('tailwind.main')--}}
            {{--            <div class="tip">--}}
            {{--                <include-fragment src="/tips">--}}
            {{--                    <p>Loading tip…</p>--}}
            {{--                </include-fragment>--}}
            {{--            </div>--}}
            {{$slot}}
        </main>
    </div>
</div>

<script>
    window.addEventListener('show-form', event => {
        $('#form').modal(event.detail.action);
    })
    window.addEventListener('showDeleteConfirmation', event => {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit('deleteConfirmed')
            }
        })
    })
    window.addEventListener('showSingleDeleteConfirmation', event => {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit('singleDeleteConfirmed')
            }
        })
    })
    window.addEventListener('deleted', event => {
        Swal.fire(
            'Deleted!',
            event.detail.message,
            'success'
        )
    })

</script>
@stack('js')

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.8/push.min.js"></script>--}}
<script>
    window.addEventListener('push', event => {
        Push.create("Hello world!", {
            body: "How's it hangin'?",
            icon: '/icon.png',
            // timeout: 4000,
            onClick: function () {
                window.focus();
                this.close();
            }
        });
    })
    // document.addEventListener("turbolinks:load", function() {
    //     document.getElementById('text').style.visibility = 'visible';
    //     // document.getElementById('text').style.visibility  = 'visible';
    // })
    //
    // document.addEventListener("turbolinks:render", function() {
    //     alert('ad')
    //     document.getElementById('text').style.visibility = 'hidden';
    //     // document.getElementById('text').style.visibility  = 'visible';
    // })
    //
    // if (document.documentElement.hasAttribute("data-turbolinks-preview")) {
    //     alert('asdf');
    // }

</script>

{{--<script src="https://unpkg.com/@github/include-fragment-element "></script>--}}
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<x-livewire-alert::scripts />

<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
</body>
</html>
