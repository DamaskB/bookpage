<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <STYLE type="text/css">
        <!--
        .white_a,.white_a:hover {
            color: white;
        }
        #delete{
            margin: 0;
            padding: 0;
            border: none;
        }
        -->
    </STYLE>
</head>
<body>
<div class="container">
    <h1 class="text-center">{{ $pagetitle }}</h1>
    <hr/>
    @yield('content')
</div>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>