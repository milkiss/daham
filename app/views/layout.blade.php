<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>daham</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    
    {{ URL:asset('css/bootstrap.css'); }}
    {{ HTML::style('css/bootstrap-theme.css'); }}
    
    <body>
        @section('content')
            this is content
        @show
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        {{ HTML::script('js/bootstrap.js'); }}
    </body>
</html>