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

            .full-height-width {
                height: 80vh;
                width: 70vh;
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

            .profile-preview {
				height: 16vh;
				width: 130vh;
				background-color: #D1D1D1;
            }

            .profile-padding {
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

            <div class="profile-padding"></div>
            <div class="flex-center position-ref ">
                
                <a href="{{action('Atividade03Controller@show_profile', ['Hugo Pinto'])}}">
                	<div class="profile-preview">
                		<div class="flex-left text">
                			<img src="/storage/images/perfil.jpg" alt="Hugo" height=100 width=100>
							<p>Hugo Pinto <br>
							Go to profile</p>
						</div>
					</div>
                </a>
            </div>

			<div class="profile-padding"></div>
            <div class="flex-center position-ref">
                
                <a href="{{action('Atividade03Controller@show_profile', ['Guest User'])}}">
                	<div class="profile-preview">
                		<div class="flex-left text">
                			<img src="/storage/images/guest.png" height=100 width=100>
							<p>Guest User <br>
							No profile</p>
						</div>
					</div>
                </a>
            </div>

        </div>

        <footer class="footer">
            <p>@ All Rights Reserved</p>
        </footer>
    </body>
</html>