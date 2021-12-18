<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stanley Muliawan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            src: local(''),
                    url('font/Nunito/Nunito-Black.ttf') format('ttf'), /* Chrome 26+, Opera 23+, Firefox 39+ */
            }

            body { 
                    font-family: 'Nunito',sans-serif;  
            }
    </style>
</head>

<body style="overflow: hidden">

    <div id="app"></div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
