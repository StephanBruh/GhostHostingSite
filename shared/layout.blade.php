<html>
<head>
    <title>GhostHosting</title>
    <!-- MATERIALIZE CSS -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- PROJECT CSS -->
    <link type="text/css" rel="stylesheet" href="css/ghosthosting.css"  media="screen,projection"/>
</head>

<body>
<nav class="white">
    <div class="nav-wrapper container">
        <a href="#!" class="brand-logo"><img style="height: 55px;  width: auto; margin-top: 2px;" src="img/logo.png"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons black-text">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="./" class="black-text">Home</a></li>
            <li><a href="./#product" class="black-text">Producten</a></li>
            <li><a href="#" class="black-text">Inloggen</a></li>
            <li><a href="./contact" class="black-text">Contact</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="./" class="black-text">Home</a></li>
            <li><a href="./#product" class="black-text">Producten</a></li>
            <li><a href="#" class="black-text">Inloggen</a></li>
            <li><a href="./contact" class="black-text">Contact</a></li>
        </ul>
    </div>
</nav>
<nav class="green navbar-fixed" style="height: 20px"></nav>

@yield('content')

<footer class="page-footer green">
    <div class="container">
        <div class="row">
            <div class="col s6 m6 l3">
                <h5 class="white-text">GhostHosting</h5>
                <p class="white-text">Handig overzicht van bijna al onze pagina's</p>
            </div>
            <div class="col s6 m6 l3">
                <h5 class="white-text " style="margin-bottom: 25px;">Producten</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Minecraft Basic</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Minecraft Standaard</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Minecraft Advanced</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Minecraft Pro</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Meer...</a></li>
                </ul>
            </div>
            <div class="col s6 m6 l3">
                <h5 class="white-text">Klanten</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Login</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Betalingen</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Multicraft</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Registeer</a></li>
                </ul>
            </div>
            <div class="col s6 m6 l3">
                <h5 class="white-text">Contact</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">KVK Nmr: 123456789</a></li>
                    <li><a class="grey-text text-lighten-3" href="mailto:contact@ghosthosting.eu">Mail: contact@ghosthosting.eu</a></li>
                    <li><a class="grey-text text-lighten-3" href="tel:09001234">TEL: 09001234</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2017 GhostHosting
            <a class="grey-text text-lighten-4 right" href="https://www.twitter.com/ghosthostingeu">Twitter</a>
        </div>
    </div>
</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>$(".button-collapse").sideNav();</script>
</body>
</html>