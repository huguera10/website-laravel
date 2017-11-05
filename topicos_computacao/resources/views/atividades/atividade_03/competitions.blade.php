<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hugo - Tópicos</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 82vh;
            }

            .header {
                height: 10vh;
                background-color: #636b6f;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .flex-left {
                align-items: center;
                display: flex;
                justify-content: left;
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
                font-size: 70px;
            }

            .links > a {
                color: #fff;
                padding: 0 55px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                text-align: center;
            }

            .logo {
                text-align: left;
                color: #fff;
                padding: 0 55px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .competitions-preview {
                height: 16vh;
                width: 130vh;
                background-color: #D1D1D1;
            }

            .competitions-padding {
                height: 5vh;
            }

            .text > p {
                padding: 0 55px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                color: #636b6f;
            }

        </style>

    </head>
    <body>
        <div class="content">
            <div class="header flex-center">

                <div class="links">
                    <a href="{{action('Atividade03Controller@index')}}">Home</a>
                    <a href="{{action('Atividade03Controller@profiles')}}">Profiles</a>
                    <a href="{{action('Atividade03Controller@competitions')}}">Competitions</a>
                    <a href="{{action('Atividade03Controller@about')}}">About</a>
                </div>
                
            </div>

            <div class="competitions-padding"></div>
            <div class="flex-center position-ref ">
                
                <a href="{{action('Atividade03Controller@show_competition', ['Single Random Number'])}}">
                    <div class="competitions-preview">
                        <div class="flex-left text">
                            <img src="/storage/images/one_dice.png" height=100 width=100>
                            <p>Single Random Number <br>
                            Go to competition</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="competitions-padding"></div>
            <div class="flex-center position-ref">
                
                <a href="{{action('Atividade03Controller@show_competition', ['Two Random Numbers'])}}">
                    <div class="competitions-preview">
                        <div class="flex-left text">
                            <img src="/storage/images/two_dices.png" height=70 width=100>
                            <p>Two Random Numbers <br>
                            Go to competition</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        </div>

        <footer class="footer">
            <p>@ All Rights Reserved</p>
        </footer>
    </body>
</html>
