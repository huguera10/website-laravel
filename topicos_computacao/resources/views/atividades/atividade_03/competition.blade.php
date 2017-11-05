<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/comp_css.css">
        <title>Hugo - Tópicos</title>

        <!-- Styles -->
        

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

            <div class="profile-padding"></div>
            <div class="flex-center position-ref text">
                @if ($name == "Single Random Number")
                    <img src="/storage/images/one_dice.png" alt={{$name}} height=224 width=224>
                @else
                    <img src="/storage/images/two_dices.png" height=150 width=224>
                @endif
            </div>

            <div class="flex-center position-ref text">
                <p> {{$name}} <br> </p>
            </div>

            <div class="flex-center position-ref text">
                @if ($name == "Single Random Number")
                    <p> 
                        <h2> Guess a number between 0 and 100! </h2>
                    </p>
                @else
                    <p> 
                        <h2> Guess two number between 0 and 100! </h2>
                    </p>
                @endif
            </div>

            <div class="flex-center position-ref text">
                @if ($name == "Single Random Number")
                    <form action="" method="get">
                        <input type="number" name="guessed_number">
                        <input type="submit" name="submit">
                    </form>
                @else
                    This page has not been created yet
                @endif
            </div>

            <div class="flex-center position-ref text">
                @if(isset($_GET['submit'])) {
                    @if($_GET['guessed_number'] == 8){
                        <p> Acertou! </p>
                    }
                    @else{
                        <p> Tente Novamente...</p>
                    }
                    @endif
                }
                @endif
            </div>
        </div>

        <footer class="footer">
            <p>@ All Rights Reserved</p>
        </footer>
    </body>
</html>