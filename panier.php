<!DOCTYPE html>
<html lang="fr">

<?php include 'link.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP'TON MÉTIER</title>
    <link rel="icon" type="image/png" href="medias/drone-light.png" media="(prefers-color-scheme:no-preference)">
    <link rel="icon" type="image/png" href="medias/drone-dark.png" media="(prefers-color-scheme:dark)">
    <link rel="icon" type="image/png" href="medias/drone-light.png" media="(prefers-color-scheme:light)">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="panier.css">
    <link rel="stylesheet" href="footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="panier">
            <div onclick="window.history.back()" class="retour">
                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM2 7H1L1 9H2L2 7Z"
                        fill="#09192C" />
                </svg>

                <span>Continuer le shopping</span>

                <img src="medias/images/trolley.svg" alt="">
            </div>

            <h1>Mon panier</h1>

            <p class="nombre"></p>
            
        </section>

        <section class="coordonnees">

            <form action="" class="donnees">
                <h1>Mes informations</h1>

                <h2 class="titre-form">Situation professionnelle</h2>

                <div class="situation-pro">
                <label for="lyceen" class="checkbox">
                        <input type="radio" id="lyceen" name="situtationpro" value="lyceen">
                        <p class="box">Lycéen(ne)</p>
                    </label>

                    <label for="mmi" class="checkbox">
                        <input type="radio" id="mmi" name="situtationpro" value="reorientation">
                        <p class="box">Etudiant(e) en MMI</p>
                    </label>

                    <label for="autre" class="checkbox">
                        <input type="radio" id="autre" name="situtationpro" value="mmi">
                        <p class="box">Autre</p>
                    </label>
                </div>

                <label for="nom" class="titre-form">Nom</label>
                <input type="text" id="nom" name="nom" required placeholder="Mon nom...">

                <label for="prenom" class="titre-form">Prénom</label>
                <input type="text" id="prenom" name="prenom" required placeholder="Mon prénom...">

                <div class="age-postal-inputs">
                    <div>
                        <label for="age" class="titre-form">Age</label>
                        <input type="text" id="age" name="age" required placeholder="Mon âge...">
                    </div>
                    <div>
                        <label for="codepostal" class="titre-form">Code postal</label>
                        <input type="text" id="codepostal" name="codepostal" required
                            placeholder="Mon code postal...">
                    </div>
                </div>

                <div class="domaine-fav">
                    <p>Domaine favori</p>
                    <span></span>
                </div>

                <input type="submit" name="valider" value="Valider ma commande !" class="bouton-valider">
</form>

</section>
    </main>

    <?php include 'footer.php'; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="medias/js/app.js"></script>
    <script>
        $(document).ready(function(){

            function domaine(id_shop) {
                var uniqs = {};

                for(var i = 0; i < id_shop.length; i++) {
                    uniqs[id_shop[i]] = (uniqs[id_shop[i]] || 0) + 1;
                }

                var domaine = { id: id_shop[0], count: 1 };
                for(var u in uniqs) {
                    if(domaine.count < uniqs[u]) { domaine = { id: u, count: uniqs[u] }; }
                }

                return domaine.id;
            }

            function getpanier(){
                $('.metier').remove()

                let panierdata = localStorage.getItem('shoptonmetier')

                let nombre = 0

                let metiers = [];
                let domaines =[];

                $.each(JSON.parse(panierdata) , function( index, metier ) {
                    const div = '<div class="metier '+metier.shop.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")+' '+metier.id+' metier'+metier.id+'">\
                    <img src="medias/images/metier/'+metier.id+'.png" alt="" class="perso-3d">\
                    <div>\
                    <h2>'+metier.nom+'</h2>\
                    <p class="phrase-metier">'+metier.phrase+'</p>\
                    <a href="metier.php?id='+metier.id+'" class="lien-fiche-metier">Fiche descriptive</a>\
                    </div>\
                    <div>\
                    <svg width="55" height="55" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg" class="remove">\
                    <rect x="5.25" y="6.5" width="2" height="16" rx="1" transform="rotate(-45 5.25 6.5)" fill="#F14A72" />\
                    <rect x="16.5" y="5" width="2" height="16" rx="1" transform="rotate(45 16.5 5)" fill="#ff314a" />\
                    </svg>\
                    </div>\
                    </div>'
                    $('.panier').append(div)
                    metiers.push([metier.nom, metier.phrase])
                    domaines.push(metier.id_shop)
                    nombre++
                });

                let panier = []
                panier.push(metiers)

                let domaineid = parseInt(domaine(domaines))

                var domainefavori

                if(domaineid == 1){
                    domainefavori = "Audiovisuel"
                    $('.domaine-fav span').text(domainefavori)
                }
                if(domaineid == 2){
                    domainefavori = "Design"
                    $('.domaine-fav span').text(domainefavori)
                }
                if(domaineid == 3){
                    domainefavori = "Développement"
                    $('.domaine-fav span').text(domainefavori)
                }
                if(domaineid == 4){
                    domainefavori = "Communication"
                    $('.domaine-fav span').text(domainefavori)
                }
                // if(panier[0] == 1){
                //     const domainefavori = "Audiovisuel"
                // }
                panier.push(domainefavori)
               

                if(nombre > 1){
                    $('.nombre').text(nombre+" métiers dans mon panier")
                }
                if(nombre == 1){
                    $('.nombre').text("1 métier dans mon panier")
                }
                if(nombre == 0){
                    $('.nombre').text("Le panier est vide 😥")
                }

                $('.metier svg').click(function(){
                    let metierid = parseInt($(this).parent().parent().attr('class').split(' ')[2])
                    let metierclass = $(this).parent().parent().attr('class').split(' ')[3]

                    let panierdata = JSON.parse(localStorage.getItem('shoptonmetier')).filter(metier => metier.id !== metierid)

                    localStorage.setItem('shoptonmetier', JSON.stringify(panierdata));

                    $('.'+metierclass).remove()

                    const metiers = getpanier()
                    
                })

                return panier
            }
            

            const panier = getpanier()
            let paniermetier = []
            $.each(panier[0], function(key, value){
                paniermetier.push(value[0])
                
            })

            $('.donnees').submit(function(event){
                event.preventDefault();
                const form = $(this).serializeArray()

                const ticket = {
                    nom : form[1].value,
                    prenom : form[2].value,
                    age: form[3].value,
                    codepostal: form[4].value,
                    situation: form[0].value,
                    domainefavori: panier[1],
                    panier:paniermetier,
                    ticket: panier[0]
                }
                
                
                $.ajax({
                    url: 'sendpanier.php',
                    type: "POST",
                    data: {
                        nom : ticket.nom,
                        prenom: ticket.prenom,
                        age: ticket.age,
                        codepostal: ticket.codepostal,
                        situation: ticket.situation,
                        domainefavori: ticket.domainefavori,
                        panier: ticket.panier },
                    dataType: 'json',
                    success: function (data) {
                    }
                })
                localStorage.setItem('shoptonmetierticket', JSON.stringify(ticket))
               
                window.location.replace("ticket.php");
            })
            
            $(window).scroll(function() {
            var winTop = $(window).scrollTop();
            var winBottom = winTop + $(window).height();
            var top = $('footer').offset().top

            var height = parseInt($('.coordonnees').css("height"))/2
            var width = parseInt($('.coordonnees').css("width"))/2

            var translate = winBottom-top+height

            if(top <= winBottom){
                $(".coordonnees").css("transform", "translate(-"+width+"px, -"+translate+"px)")
            }
        });

        })
    </script>
</html>