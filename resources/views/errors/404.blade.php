<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uh oh!</title>

    @include('cdn')
    <link rel="stylesheet" href="{{ asset('css/404.css') }}">

</head>

<body>
    <div class="error">
        <div class="container-floud">
            <div class="col-xs-12 ground-color text-center">
                <div class="container-error-404">
                    <div class="clip">
                        <div class="shadow"><span class="digit thirdDigit"></span></div>
                    </div>
                    <div class="clip">
                        <div class="shadow"><span class="digit secondDigit"></span></div>
                    </div>
                    <div class="clip">
                        <div class="shadow"><span class="digit firstDigit"></span></div>
                    </div>
                    <div class="msg">OH!<span class="triangle"></span></div>
                </div>
                <h2 class="h1">Sorry! The page you requested is not available!</h2>
                <a href="{{ route('index') }}"><button class="btn btn-secondary">Back to homepage</button></a>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="{{ asset('js/404.js') }}"> </script>
</body>

</html>
