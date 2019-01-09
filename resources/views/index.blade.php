<html>
<head>
 {{Html::style('css/app.css')}}
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            @yield('content')
        </div>
    </div>
</div>
 {{Html::script('js/app.js')}}
 </body>
</html>