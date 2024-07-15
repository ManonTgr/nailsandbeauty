@extends('base')

<section class="ateliers">
    @section('title', 'Accueil')

    @section('content')

    </section>

    <section class="ateliers1">
        <h2>Découvrez nos Ateliers pour un Anniversaire <br>ou une Après-midi Inoubliable entre Filles !</h2>
        <div class="textateliers">Que vous célébriez un anniversaire spécial ou que vous cherchiez simplement à passer un
            moment fantastique entre amies,<br>
            nos ateliers sont conçus pour vous offrir des expériences uniques et mémorables. <br>
            Plongez dans une aventure créative et divertissante avec nos options d'ateliers variées :</div>
        <div class="rectangle">
            <br><br>
            <p class="p4">Pour un anniversaire " Vous aurez la possibilité de réserver <br>à la date souhaitez, sous
                réserve de disponibilité " </p>
            <p class="p5">En panne d’idée pour fêter l’anniversaire <br> de vos petites filles ? <br>
                <br><br>
                Nails and Beauty vous propose des activités <br>pour « faire comme les grandes»
            </p>

            <img src="image/anniversaire.png" class="photoanniversaire">
        </div>
        <br><br>
        <div><p10>Au programme :</p10></div>
        <br><br><br>
        <div class="photoateliers">
            <p7>Atelier Vernis "Bio"</p7>
            <p8>Atelier Maquillage</p8>
            <p9>Atelier Soins du Visage
                 "Naturel"</p9>
            <p11>Atelier tatouage "Paillette"</p11>

        </div>
        <div class="image-container1">
            <!-- Ajoutez plus d'images selon vos besoins -->
            <div>
                <img class="fade-in" id="image1" src="{{ asset('/image/vernis.png') }}" alt="opacity:0;transition-duration:.5s;">
                <img class="fade-in" id="image2" src="{{ asset('/image/maquillage.png') }}" alt="opacity:0;transition-duration:.5s;">
                <img class="fade-in" id="image3" src="{{ asset('/image/naturel.png') }}" alt="opacity:0;transition-duration:.5s;">
                <img class="fade-in" id="image4" src="{{ asset('/image/tatouage.png') }}" alt="opacity:0;transition-duration:.5s;">

                <script>
                    window.onload = function() {
                        setTimeout(function() {
                            document.querySelector('#image1').style.opacity = "1";
                            setTimeout(function() {
                                document.querySelector('#image2').style.opacity = "1";
                                setTimeout(function() {
                                    document.querySelector('#image3').style.opacity = "1";
                                    setTimeout(function() {
                                        document.querySelector('#image4').style.opacity = "1";
                                }, 3000); // La deuxième image apparaîtra 3 secondes après la première
                            }, 3000); // La deuxième image apparaîtra 3 secondes après la première
                        }, 3000); // La première image apparaîtra après 3 secondes
                    }, 3000); // La deuxième image apparaîtra 3 secondes après la première
                    };
                </script>
            </div>
        </div>


        </script>
    @endsection
