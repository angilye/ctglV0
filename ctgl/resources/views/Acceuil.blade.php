<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8" />
        {{--<meta name="viewport" content="width=device-width, initial-scale=1.0, target-densitydpi=device-dpi">--}}
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>C.T.G.L. | Acceuil</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/app.css"/>

    </head>

    <header class="header">
        <img src="img/headerCtgl.png" alt="Header CTGL" class="logo">
        <a class="nav-link" href="{{ route('login') }}" style="position:absolute;top: 41px;margin-left: 94.5%;z-index:2;font-size: 150%;color: white;" >{{ __('Login') }}</a>
    </header>

    <div>
        {{--@guest--}}
            {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
            {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
        {{--@else--}}
            {{--<li class="nav-item dropdown">--}}
                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                {{--</a>--}}

                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                        {{--{{ __('Logout') }}--}}
                    {{--</a>--}}

                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                        {{--@csrf--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</li>--}}
        {{--@endguest--}}
    </div>

    <body>
        <!--slideshow-->
        <ul>
            <li>
                <a class="content" href="{{ route('presentation_path') }}">
                    <h2>Association de Chiens de Traineau des Gorges du Loup - C.T.G.L.</h2>
                    <p>Présentation de l'association.</p>
                </a>
            </li>
            <li>
                <div class="content">
                    <h2>Les activités</h2>
                    <p>Présentation des activités de l'association.</p>
                </div>
            </li>
            <li>
                <div class="content">
                    <h2>Evénements</h2>
                    <p>Exposition des prochains évenements de l'association.</p>
                    <!--lien vers calendrier d'évenement-->
                </div>
            </li>
            <li>
                <div class="content">
                    <h2>Adhérer à l'association</h2>
                    <p>Pour adherer à l'association : -prérequis; -coût; etc...</p>
                    <!--lien vers formulaire de futur adhérant-->
                </div>
            </li>
            <li>
                <a class="content" href="{{ route('Contact_path') }}">
                    <h2>Nous contacter</h2>
                    <p>
                        Vous pouvez nous contacter par téléphone au : 0#.##.##.##.##, par courrier postal a : adresse, ou encore par le biais du formulaire de contacte.
                    </p>
                    <!--lien vers formulaire de contacte-->
                </a>
            </li>
        </ul>
    </body>

</html>

