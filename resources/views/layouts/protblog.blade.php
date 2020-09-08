<html>
    <head>
        <title>@yield('title')</title>
        <style>
            body {font-size:16pt; color:#999; margin:5px;}
            ul {font-size:12pt;}
            hr {margin:25px 100px; border-top:1pxdashed #ddd;}

            .header {text-align: right; font-size: 10pt; margin: 10px; border-bottom: solid 1px #ccc; color: #ccc;}
            .menutitle {font-size:14pt; font-weight:bold; margin: 0px;}
            .content {margin: 10px; }
            .footer {text-align: right; font-size: 10pt; margin: 10px; border-bottom: solid 1px #ccc; color: #ccc;}
            
            th {background-color: #999; color: fff; padding: 5px 10px; }
            td {border: solid 1px #aaa; color: #999; padding: 5px 10px; }
        </style>
    </head>

    <body>

        <div>
            @yield('header')
        </div>

        <h1>@yield('title')</h1>
        <h2>@yield('menu_title')</h2>

        <div class="menu_content">
            @yield('menu_content')
        </div>

        <hr size="1">

        <div class="content">
            @yield('content')
        </div>

        <div>
            @yield('footer')
        </div>
    </body>
</html>