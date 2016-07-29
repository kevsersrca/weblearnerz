<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel @yield('title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/paper/bootstrap.min.css" rel="stylesheet" integrity="sha384-2mX2PSpkRSXLQzmNzH3gwK6srb06+OfbDlYjbog8LQuALYJjuQ3+Yzy2JIWNV9rW" crossorigin="anonymous">
    <style>
        @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
        .container > .well > h1,h3
        {
            font-family: Impact;
        }
        .list-group-item-text {
            color: #444444;
        }
        body {
             padding-top: 15px;
             padding-left: 65px;
         }
        .container
        {
            padding: 5%;
        }
        .navbar-twitch {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 50px;
            height: 100%;
            border-radius: 0px;
            border: 0px;
            z-index: 1030;
        }
        .navbar-twitch.open {
            width: 200px;
        }
        .navbar-twitch > .container {
            padding: 0px;
            width: 100%;
        }
        .navbar-twitch .navbar-header,
        .navbar-twitch .navbar-brand {
            float: none;
            display: block;
            width: 100%;
            margin: 0px;
        }
        .navbar-twitch .navbar-brand {
            height: 50px;
        }
        .navbar-twitch > .container .navbar-brand {
            padding: 0px;
            margin: 0px;
        }
        .navbar-twitch > .container .navbar-brand > .small-nav {
            display: block;
        }
        .navbar-twitch > .container .navbar-brand > .small-nav > span.logo,
        .navbar-twitch.open > .container .navbar-brand > .full-nav {
            display: block;
            font-weight: bold;
            padding: 15px 2px 15px 3px;
            font-size: 18pt;
        }
        .navbar-twitch.open > .container .navbar-brand {
            width: 100%;
            padding: 15px 15px 60px;
            text-align: center;
        }
        .navbar-twitch.navbar-inverse > .container .navbar-brand > .small-nav > span.logo {
            /*color: rgb(255, 255, 255);*/
        }
        .navbar-twitch .navbar-nav > li {
            float: none;
        }
        .navbar-twitch > .container .full-nav {
            display: none;
        }
        .navbar-twitch.open > .container .full-nav {
            display: block;
        }
        .navbar-twitch.open > .container .small-nav {
            display: none;
        }
        .navbar-twitch .navbar-collapse {
            padding: 0px;
        }
        .navbar-twitch .navbar-nav {
            float: none;
            margin: 0px;
        }
        .navbar-twitch .navbar-nav > li > a {
            padding: 0px;
        }
        .navbar-twitch .navbar-nav > li > a > span {
            display: block;
            font-size: 16pt;
            padding: 13px 15px 13px 12px;
        }
        .navbar-twitch .tooltip,
        .navbar-twitch .tooltip .tooltip-inner {
            max-width: auto;
            white-space:nowrap;
        }
        .navbar-twitch-toggle {
            position: inherit;
            top: 5px;

        }
        .navbar-twitch ~ .navbar-twitch-toggle > .nav-open {
            display: inline-block;
        }
        .navbar-twitch ~ .navbar-twitch-toggle > .nav-close {
            display: none;
        }
        .navbar-twitch.open ~ .navbar-twitch-toggle {
            left: 245px;
        }
        .navbar-twitch.open ~ .navbar-twitch-toggle > .nav-open {
            display: none;
        }
        .navbar-twitch.open ~ .navbar-twitch-toggle > .nav-close {
            display: inline-block;
        }


        .btn-purple,
        .btn-purple:hover,
        .btn-purple:focus,
        .btn-purple:Active {
            color: rgb(255, 255, 255);
            background-color: rgb(86, 61, 124);
            border-color: rgb(111, 84, 153);
        }
        .btn-purple:hover,
        .btn-purple:focus,
        .btn-purple:Active {
            background-color: rgb(111, 84, 153);
            border-color: rgb(86, 61, 124);
        }

        .navbar {
            background-image: none !important;
        }
        .navbar-purple {
            background-color: rgb(86, 61, 124);
            border-color: rgb(111, 84, 153);
        }
        .navbar-purple .navbar-brand,
        .navbar-purple .navbar-nav > li > a,
        .navbar-purple .navbar-brand:hover,
        .navbar-purple .navbar-nav > li > a:hover,
        .navbar-purple .navbar-brand:focus,
        .navbar-purple .navbar-nav > li > a:focus {
            color: rgb(205, 191, 227);;
        }
        .navbar-purple .navbar-brand:hover,
        .navbar-purple .navbar-nav > li > a:hover,
        .navbar-purple .navbar-brand:focus,
        .navbar-purple .navbar-nav > li > a:focus,
        .navbar-purple .navbar-nav > .active > a,
        .navbar-purple .navbar-nav > .active > a:hover,
        .navbar-purple .navbar-nav > .active > a:focus {
            background-color: rgb(111, 84, 153);
            color: rgb(255, 255, 255);
        }
    </style>
    @yield('style')
    @yield('link')
</head>