@extends('base')

<section class="ateliers">
    @section('title', 'Accueil')

    @section('content')

    </section>

    <section class="ateliers1">
        <h2>Découvrez nos Ateliers pour un Anniversaire <br>ou une Après-midi Inoubliable entre Filles !</h2>
        <div class="textateliers">Que vous célébriez un anniversaire spécial ou que vous cherchiez simplement à passer un
            moment fantastique entre amies,<br>
            nos ateliers sont conçus pour vous faire passer à votre enfant un moment unique. <br>
            Plongez dans une aventure créative et divertissante avec nos options d'ateliers variées :</div>
        <div class="rectangle">
            <br><br>
            <p class="p4">Découvrez un concept unique dans la région. 🔥❤️<br><br>

            <p class="p4">En panne d’idée pour fêter l’anniversaire <br> de vos petites filles ? 🎂 <br>
                <br><br>
                Nails and Beauty Concept vous propose des activités <br>pour « faire comme les grandes»
                <br><br>Un évènement inoubliable pour un anniversaire 🥳, <br>ou un simple goûter entre fille🌸<br><br>
                Cette fête permettra à vos enfants de profiter de soins de beauté <br> et de bien-être adaptés, le tout dans
                une ambiance joyeuse, <br> gourmande et festive! 🍭🎂
            </p>

            <img src="image/anniversaire.png" class="photoanniversaire">
        </div>
        <br><br><br><br><br>
        <div>
            <p10>Au programme 2h d'animation sous forme d'ateliers beauté :</p10>
        </div>
        <br><br><br><br><br>
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
                <img class="fade-in" id="image1" src="{{ asset('/image/vernis.png') }}"
                    alt="opacity:0;transition-duration:.5s;">
                <img class="fade-in" id="image2" src="{{ asset('/image/maquillage.png') }}"
                    alt="opacity:0;transition-duration:.5s;">
                <img class="fade-in" id="image3" src="{{ asset('/image/naturel.png') }}"
                    alt="opacity:0;transition-duration:.5s;">
                <img class="fade-in" id="image4" src="{{ asset('/image/tatouage.png') }}"
                    alt="opacity:0;transition-duration:.5s;">

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
        <div class="texteparty">
            <p12>🌸 Pour l'occasion nous privatison l'espace beauté 🌸</p12>
        </div>
        <br><br><br>
        <div class="container">
        <div class="carousel">
            <div class="carousel-images">
                <img src="{{ asset('image/table1.jpg') }}" alt="Image 1" id="table1">
                <img src="{{ asset('image/photoenfantnew.jpg') }}" alt="Image 2" id="table2">
                <img src="{{ asset('image/table6.jpg') }}" alt="Image 3" id="table3">


            </div>
            <button class="carousel-button left">&#10094;</button>
            <button class="carousel-button right">&#10095;</button>
        </div>
        <div class="animationphoto">
            <p13>Goûter, décoration et cartons d'invitations inclus pour la formule anniversaire ( allergies alimentaires
                éventuelles à communiquer)

                & Bien d'autres surprises ! ✨

                🍭De 6 ans à 12 ans

                🧁A partir de 6 enf</p13>
        </div>
    </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const carousel = document.querySelector('.carousel');
                const imagesContainer = carousel.querySelector('.carousel-images');
                const images = imagesContainer.querySelectorAll('img');
                const prevButton = carousel.querySelector('.carousel-button.left');
                const nextButton = carousel.querySelector('.carousel-button.right');

                let currentIndex = 0;

                function showImage(index) {
                    const totalImages = images.length;
                    if (index >= totalImages) {
                        currentIndex = 0;
                    } else if (index < 0) {
                        currentIndex = totalImages - 1;
                    } else {
                        currentIndex = index;
                    }
                    const offset = -currentIndex * 100; // Décalage pour faire défiler une seule image
                    imagesContainer.style.transform = `translateX(${offset}%)`;
                }

                prevButton.addEventListener('click', () => {
                    showImage(currentIndex - 1);
                });

                nextButton.addEventListener('click', () => {
                    showImage(currentIndex + 1);
                });

                // Optionnel : changer d'image automatiquement toutes les 3 secondes
                setInterval(() => {
                    showImage(currentIndex + 1);
                }, 3000);
            });
        </script>
    @endsection
