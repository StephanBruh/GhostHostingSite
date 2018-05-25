@extends('shared.layout')
@section('content')

    <div id="index-banner" class="parallax-container" style="height: 180px;">
        <div class="section no-pad-bot">
            <div class="center white-text">
                <h1>Contact</h1>
            </div>
        </div>
        <div class="parallax"><img src="img/banner.jpg" alt="" style=" display: block; transform: translate3d(-50%, 244px, 0px);"></div>
    </div>

    <div class="contact container">
        <div class="row">
            <div class="col col s12 m6 l6">
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDh10jqvLVEZAmME2S3fk0ov18PGuG47_o'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:400px;width:520px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://maps-generator.com/nl'>GhostHosting</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=c6ff9dbcaa4ad7c31680a1d6c851dfc245a2a156'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(51.9208545,4.479528899999991),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.9208545,4.479528899999991)});infowindow = new google.maps.InfoWindow({content:'<strong>GhostHosting</strong><br>Coolsingel<br> Rotterdam<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            </div>
            <div class="col col s12 m6 l6">
                <h4>Contact</h4>
                <p>Telefoon: <a href="tel:09001234">09001234</a></p>
                <p>KVK Nummer: 123456789</p>
                <p>Zakelijke vragen: <a href="mailto:contact@ghosthosting.eu">contact@ghosthosting.eu</a></p>
                <p>Minecraft vragen: <a href="mailto:minecraft@ghosthosting.eu">minecraft@ghosthosting.eu</a></p>
                <p>Sponser vragen: <a href="mailto:sponser@ghosthosting.eu">minecraft@ghosthosting.eu</a></p>
            </div>
        </div>
    </div>
@stop