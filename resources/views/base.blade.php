<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>

    @section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @show
    
</head>
<body>
    <header>
        <header class="image"></header>

        <div class="header-content">
            
            <nav class="menu">
                <ul>

                    <div class="home">
                        <li>
                            <a href="{{ route('main.home') }}">Beauty Party</a>
                        </li>
                    </div>
                     <div class="ateliers">
                        <li>
                            <a href="{{ route('main.ateliers') }}">Ateliers</a>
                        </li>
                    </div>  
                    <div class="tarifs">
                        <li>
                            <a href="{{ route('main.tarifs') }}">Tarifs</a>
                        </li>
                    </div>
                    <div class="rendezvous">
                        <li>
                            <a href="https://www.planity.com/nails-and-beauty-concept-encre-beaute-59147-gondecourt">Prendre rendez-vous</a>
                        </li>
                    </div> 
                    <div class="contact">
                        <li>
                             <a href="{{ route('main.contact') }}">Contact</a>
                        </li>
                     </div> 
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')
    
</body>
<footer>
        @section('footer')
        <div class="foot">
            <p class="p24">Copyright 2024</p24>
            <p class="p28">Venez nous suivre via :   </p28> <p26> Instagram:</p26>
            <a href="https://www.instagram.com/nailsandbeauty_concept/">
            <img src="image/insta.png" class="insta">
            </a>
            <p27>Facebook</p27>
            <a href="https://www.facebook.com/NailsAndBeautyConcept/">
                <img src="image/facebook1.png" class="facebook">
        </div>
        @show
    </footer>
</html>