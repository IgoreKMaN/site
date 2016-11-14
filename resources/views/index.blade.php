<!DOCUMENT html>
<html>
    <head>
        <title>{{ $title }}</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
        <style>
            h1{
                margin: 0px 0px 0px 290px;
                font-family: Monotype Corsiva, sans-serif;
                font-size: 4em;
                font-weight: bold;
                font-style: italic;
            }
        </style>
    </head>
    <body>
        <h1>{{ $namepage }}</h1>
        
        @yield('content')
        
         <script type="text/javascript" src=https://ajax.googleapis.com/ajax/libs/jquey/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>