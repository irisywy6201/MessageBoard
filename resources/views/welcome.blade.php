<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MessageBoard</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


            ul { /* 取消ul預設的內縮及樣式 */
              list-style-type: none;
              margin: 0;
              padding: 0;
              opacity: 0.9;
              background-color:#00AAAA;
              border-radius: 5px;

              }

              ul.drop-down-menu {
                  border: #000 0px solid;
                  display: inline-block;
                  s
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
        </style>
    </head>
    <body style="background-image:url(/bckgrd.jpg)">
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                  
                    登錄進入留言板/註冊進入留言板
                </div>
                @if (Route::has('login'))
                    <!-- <div class="top-right links"> -->
                      <ul class="drop-down-menu">
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </li>
                        <li>
                          <a href="{{ url('/login') }}">L o g i n</a>
                        </li>
                        <li>
                          <a href="{{ url('/register') }}">R e g i s t e r</a>
                        </li>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </li>
                      </ul>
                    <!-- </div> -->
                @endif
                <!-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
    </body>
</html>
