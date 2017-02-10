<head>
    <meta charset="UTF-8">
    <title>Smartlinks Dasboard</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    {{ Html::style('css/login.css') }}
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    {{ Html::script('js/login.js') }}
</head>
<form class="logout" role="form" method="POST" action="{{ route('logout') }}">
    {{ csrf_field() }}
    <button type="submit">Logout</button>
</form>