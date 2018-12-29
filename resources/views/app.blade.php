<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!!
            json_encode([
                'csrfToken' => csrf_token(),
            ])
         !!};
    </script>
    <style>
    body{
        margin: 0;
        padding: 0;
    }
    #app{
        height: 100%;
    }
    #app > div{
        height: 100%;
    }
    .ant-layout{
        height: 100%;
    }
    </style>
</head>
<body>
    <div id="app"></div>
    <!-- Scripts -->
    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
