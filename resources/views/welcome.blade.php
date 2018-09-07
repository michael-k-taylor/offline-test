<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="app" class="position-ref full-height">
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-6">
                <insert-form/>
            </div>
            <div class="col-sm-6">
                <entries/>
            </div>
        </div>
    </div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/dexie.js"></script>
<script src="js/app.js"></script>
</html>
