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
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="ticket.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

</head>

<body>
    <?php include 'header.php'; ?>

    <main>
        <h1>Mon ticket de caisse</h1>

        <section class="html2pdf__page-break">
            <div class="ticket">
            <div class="background"></div>
            <h2><span>SHOP'</span>TON MÉTIER</h2>

            <p class="adresse">1 Avenue du Web</br><span>20 300 FRANCE</span></p>

            <div class="infos-utilisateur">
                <p>
                    Client : <span id="utilisateur"></span>
                    <br>
                    N° de ticket : <span id="num_ticket"></span>
                </p>

                <p>
                    Date : <span id="date"></span>
                    <br>
                    Heure : <span id="heure"></span>
                </p>
            </div>

            <div id="metiers">
            </div>

            <div class="domaine-favori">
                <p>Domaine favori :</p>
                <span id="domaine-favori"></span>
            </div>

            <div class="pied-ticket">
                <img src="medias/images/code barre.svg" alt="" class="code-barre">

                <p>
                    MERCI POUR VOTRE VISITE<br>
                    À BIENTÔT<br>
                    <br>
                    N'HÉSITEZ PAS  À RENOUVELER L'EXPÉRIENCE !
                </p>

            </div>

            </div>

        </section>

        <a class="telecharger">
            Télécharger
            <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.49977 12H10.4998C10.6898 12.0001 10.8727 12.0722 11.0116 12.202C11.1504 12.3317 11.2348 12.5093 11.2478 12.6989C11.2607 12.8885 11.2013 13.0759 11.0813 13.2233C10.9614 13.3707 10.79 13.4671 10.6018 13.493L10.4998 13.5H1.49977C1.30975 13.4999 1.12683 13.4278 0.98798 13.298C0.849129 13.1683 0.764697 12.9907 0.751745 12.8011C0.738793 12.6115 0.798287 12.4241 0.918204 12.2767C1.03812 12.1293 1.20952 12.0329 1.39777 12.007L1.49977 12H10.4998H1.49977ZM5.89777 0.00699997L5.99977 0C6.18101 7.6429e-06 6.35611 0.0656428 6.4927 0.184767C6.62929 0.303892 6.71812 0.468446 6.74277 0.648L6.74977 0.75V8.438L9.00477 6.184C9.13194 6.05687 9.30056 5.97966 9.47989 5.96645C9.65922 5.95323 9.83734 6.00489 9.98177 6.112L10.0658 6.184C10.1929 6.31117 10.2701 6.47979 10.2833 6.65912C10.2965 6.83845 10.2449 7.01657 10.1378 7.161L10.0658 7.245L6.52977 10.78C6.40278 10.907 6.23443 10.9842 6.05532 10.9976C5.87621 11.011 5.69824 10.9597 5.55377 10.853L5.46977 10.78L1.93377 7.245C1.79958 7.11117 1.72102 6.93151 1.7139 6.74213C1.70678 6.55274 1.77162 6.36768 1.89538 6.22416C2.01915 6.08063 2.19266 5.98928 2.38103 5.96848C2.5694 5.94767 2.75867 5.99895 2.91077 6.112L2.99477 6.184L5.24977 8.44V0.75C5.24978 0.568762 5.31541 0.393658 5.43454 0.257069C5.55366 0.120481 5.71822 0.0316483 5.89777 0.00699997L5.99977 0L5.89777 0.00699997Z" fill="white"/>
            </svg>

        </a>

        <a href="index.php" class="retour-accueil">
            Retourner à l'accueil
            <svg width="30" height="17" viewBox="0 0 30 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5858 16.4142C14.3668 17.1953 15.6332 17.1953 16.4142 16.4142L29.1421 3.68629C29.9232 2.90524 29.9232 1.63891 29.1421 0.857864C28.3611 0.0768156 27.0948 0.0768156 26.3137 0.857864L15 12.1716L3.68629 0.857864C2.90524 0.0768156 1.63891 0.0768156 0.857864 0.857864C0.0768156 1.63891 0.0768156 2.90524 0.857864 3.68629L13.5858 16.4142ZM13 11V15H17V11H13Z" fill="#3A4756"/>
            </svg>
        </a>


    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="medias/js/app.js"></script>
    <!-- <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script> -->
    <script>
        $(document).ready(function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position){
                    $.getJSON("https://eu1.locationiq.com/v1/reverse.php?key=pk.75cfb86f8bd1942b69d9e7508e54280d&lat="+position.coords.latitude+"&lon="+position.coords.longitude +"&format=json")
                        .done(function(data){
                            $(".adresse").html(data.address.county+"<br>\
                            <span>"+data.address.postcode+" "+data.address.country+"</span>")
                    
                        })
                })
                
            }
            let ticketdata = localStorage.getItem('shoptonmetierticket')

            let nombre = 0
            const ticket = JSON.parse(ticketdata)

            $('.infos-utilisateur #utilisateur').append(ticket.nom+ ' '+ticket.prenom)
            $('.infos-utilisateur #num_ticket').append(Math.floor(Math.random() * 10000) *10000)

            var now = new Date();
            var date = [
            now.getDate(),
            '/',
            now.getMonth() + 1,
            '/',
            now.getFullYear(),
            ' ',
            ].join('');

            var heure = [
            now.getHours(),
            ':',
            now.getMinutes() ,
            ' ',
            ].join('');

            $("#date").append(date)
            $("#heure").append(heure)

            $.each(ticket.ticket, function(index, data){
                const div = '<div class="metier">'+data[0]+'<br><span>'+data[1]+'</span></div>'

                $('#metiers').append(div)

                console.log(data[0])
            })

            $("#domaine-favori").append(ticket.domainefavori)

            $.getScript("https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js");

            $(".telecharger").on("click", function(){
                localStorage.setItem('shoptonmetier','[]')

                let height = parseInt($("section").height())
                let width = parseInt($("section").width())
                width = width-(width*0.01)
                
                var ticket = $("section").html()
                var opt = {
                margin: 0,
                filename:     "SHOP'TON MÉTIER.pdf",
                html2canvas:  { scale: 4 },
                jsPDF:        { unit: 'px', format: [width, height], orientation: 'portrait'},
                };

                html2pdf().set(opt).from(ticket).save()
            })
        })
    </script>
</body>

</html>