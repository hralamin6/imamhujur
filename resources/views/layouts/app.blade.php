<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

{{--    <meta name="turbolinks-cache-control" content="no-cache">--}}
{{--    <meta name="turbolinks-cache-control" content="no-preview">--}}

    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>--}}
    <meta name="google-site-verification" content="d6Rv6yW5mtgpZrXVe6t3x_hgVfRr4FlFPW96BLduKh0" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    @php
        $setup = \App\Models\Setup::first();
    @endphp



    <title>@yield('title', 'Home Page') - {{config('app.name')}}</title>
    <meta name="description" content="@yield('description', 'This is site Description') - {{config('app.name')}}">

    <meta property="og:title" content="@yield('title', 'Home Page') - {{config('app.name')}}" />
    <meta property="og:description" content="@yield('description', 'This is site Description') - {{config('app.name')}}" />
    <meta property="og:url" content="@yield('url', config('app.url'))" />
    <meta property="og:image" content="@yield('image', $setup->getFirstMediaUrl('logo'))" />
    <meta property="og:image:secure_url" content="@yield('image', $setup->getFirstMediaUrl('logo'))" />
    <meta property="og:site_name" content="{{config('app.name')}}" />
    <meta property="og:image:width" content="1536" />
    <meta property="og:image:height" content="1024" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="@yield('description', 'This is site Description') - {{config('app.name')}}" />
    <meta name="twitter:title" content="@yield('title', 'Home Page') - {{config('app.name')}}" />
    <meta name="twitter:image" content="@yield('image', $setup->getFirstMediaUrl('logo'))" />

    <link rel="shortcut icon" href="{{$setup->getFirstMediaUrl('logo')}}" type="image/x-icon">
    <link rel="icon" href="{{$setup->getFirstMediaUrl('logo')}}" type="image/x-icon">

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">


    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css" data-turbolinks-track="reload">
    <style>
        .contain{width:100%}@media (min-width:640px){.container{max-width:640px}}@media (min-width:768px){.container{max-width:768px}}@media (min-width:1024px){.container{max-width:1024px}}@media (min-width:1280px){.container{max-width:1280px}}
    </style>

    @stack('css')
    @livewireStyles
    <script src="{{ asset('js/app.js') }}" data-turbolinks-track="reload" defer></script>
    <script src="{{asset('assets/js/init-alpine.js')}}"></script>
    @PWA
    {{ pwa_meta() }}


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
            {{@$slot}}
            @yield('content')
        </main>
    </div>


    <div>
        <!-- fixed bottom right screen -->
        <div class="fixed bottom-0 left-0 m-2">
            <a href="{{\App\Models\Setup::first()->facebook}}">
                <img class="lg:w-12 lg:h-12 w-8 h-8" src="https://icons-for-free.com/iconfiles/png/512/fb+icon+icon-1320194641178775596.png" alt="fb">
            </a>
        </div>
        <!-- end fixed bottom right screen -->
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.8/push.min.js"></script>
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
