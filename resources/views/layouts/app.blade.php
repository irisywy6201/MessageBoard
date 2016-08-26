<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MessageBoard</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<style>
  .main{
    background-color:gray;
    position: absolute;
    top:0px;
    left: 0px;
    width: 30%;
  }
  body{
    margin: 0px;
    padding: 0px;

  }
  .drop-down-menu{
    width: 100%;
  }
  ul { /* 取消ul預設的內縮及樣式 */
    list-style-type: none;
    margin: 0;
    padding: 0;
    opacity: 0.9;
    background-color: #fff;
    font-family: 微軟正黑體;

    }

    ul.drop-down-menu {
        border: #000 0px solid;
        display: inline-block;
        font-family: 'Open Sans', Arial, sans-serif;
        font-size: 17px;
    }

    ul.drop-down-menu li {
        position: relative;
        white-space: nowrap;
        border-right: #000 0px solid;
    }

    ul.drop-down-menu > li:last-child {
        border-right: none;
    }

    ul.drop-down-menu > li {
        float: left; /* 只有第一層是靠左對齊*/
    }

     ul.drop-down-menu a {
        background-color: #fff;
        color: #000;
        display: block;
        padding: 0 30px;
        text-decoration: none;
        line-height: 50px;

    }
    ul.drop-down-menu a:hover { /* 滑鼠滑入按鈕變色*/
        background-color: #00AAAA;
        color: #fff;
    }
    ul.drop-down-menu li:hover > a { /* 滑鼠移入次選單上層按鈕保持變色*/
        background-color:#00AAAA;
        color: #fff;
    }
    ul.drop-down-menu ul {
         border: #ccc 0.5px solid;
         position: absolute;
         z-index: 99;
         left: -1px;
         top: 100%;
         min-width: 20%;
     }

     ul.drop-down-menu ul li {
         border-bottom: #ccc 0px solid;
     }

     ul.drop-down-menu ul li:last-child {
         border-bottom: none;
     }

     ul.drop-down-menu ul ul { /*第三層以後的選單出現位置與第二層不同*/
         z-index: 999;
         top: 10px;
         left: 90%;
     }
     ul.drop-down-menu ul { /*隱藏次選單*/
             left: 99999px;
             opacity: 0;
             -webkit-transition: opacity 0.3s;
             transition: opacity 0.3s;
         }

         ul.drop-down-menu li:hover > ul { /* 滑鼠滑入展開次選單*/
             opacity: 1;
             -webkit-transition: opacity 0.3s;
             transition: opacity 0.3s;
             left: -1px;
             border-right: 5px;
         }

         ul.drop-down-menu li:hover > ul ul { /* 滑鼠滑入之後、次選單之後的選單依舊隱藏*/
             left: 99999px;
         }
</style>
<body style="background-image:url(/bckgrd.jpg)">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->

                <!-- Branding Image -->

            </div>
              <!-- <div class="collapse navbar-collapse" id="app-navbar-collapse"> -->
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->


                <!-- Right Side Of Navbar -->
                <ul class="drop-down-menu">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li style=""><a href="{{ url('/login') }}">Login</a></li>
                        <li style=""><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
