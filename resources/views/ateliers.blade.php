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
            <p class="p4">Pour un anniversaire " Vous aurez la possibilité de réservé <br>à la date souhaitez, sous
                réserve de disponibilité " </p>
            <p class="p5">En panne d’idée pour fêter l’anniversaire <br> de vos petites filles ? <br>
                <br><br>
                Nails and Beauty vous propose des activités <br>pour « faire comme les grandes»
            </p>

            <img src="image/anniversaire.png" class="photoanniversaire">
        </div>

        <div class="image-container1">
            <!-- Ajoutez plus d'images selon vos besoins -->
            <div>
                <img id="myImage" src="{{ asset('/image/enfant1.jpg') }}" alt="Ma photo" class="fade-in-image">
            </div>
        </div>


        </script>
    @endsection
    @section('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const image = document.getElementById('myImage');

                // Attendre 2 secondes avant de faire apparaître l'image progressivement
                setTimeout(function() {
                    image.classList.add('visible');
                    }, 1000); // 5000 ms = 5 secondes
    });
            
            </section>

        @endsection

