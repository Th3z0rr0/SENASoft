
<!DOCTYPE html>

<html lang="en">
<head>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Pro Bootstrap Admin Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-118965717-1');
    </script></head>
<body class="c-app">
@include('vendor.componets.sidebar')

@include('vendor.componets.aside')


<div class="c-wrapper">
    @include('vendor.componets.navbar')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">

                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    @include('vendor.componets.footer')
</div>

<script src="{{ url('js/app.js') }}"></script>

</body>
</html>
