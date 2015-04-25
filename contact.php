<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
    <head>

        <!-- Basic -->
        <title>Softage | Contato</title>

        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Page Description and Author -->
        <meta name="description" content="Margo - Responsive HTML5 Template">
        <meta name="author" content="iThemesLab">


        <!-- Bootstrap CSS  -->
        <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

        <!-- CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

        <!-- Responsive CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

        <!-- Color CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="css/colors/purple.css" title="purple" media="screen" />




        <!-- JS  -->
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.migrate.js"></script>
        <script type="text/javascript" src="js/modernizrr.js"></script>
        <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/count-to.js"></script>
        <script type="text/javascript" src="js/jquery.textillate.js"></script>
        <script type="text/javascript" src="js/jquery.lettering.js"></script>
        <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
        <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.parallax.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script type="text/javascript" src="js/script.js"></script>



<!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    </head>
    <body>

        <!-- Container -->
        <div id="container" class="boxed-page">

            <!-- Start Header Section -->
            <?php include 'topo.php'; ?>
            <!-- End Header Section -->
            
            <!-- Start Map -->
            <div id="map" data-position-latitude="-7.855593" data-position-longitude="-34.907452"></div>
            <script>
                (function($) {
                    $.fn.CustomMap = function(options) {

                        var posLatitude = $('#map').data('position-latitude'),
                                posLongitude = $('#map').data('position-longitude');

                        var settings = $.extend({
                            home: {latitude: posLatitude, longitude: posLongitude},
                            text: '<div class="map-popup"><h4>Web Development | ZoOm-Arts</h4><p>A web development blog for all your HTML5 and WordPress needs.</p></div>',
                            icon_url: $('#map').data('marker-img'),
                            zoom: 15
                        }, options);

                        var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

                        return this.each(function() {
                            var element = $(this);

                            var options = {
                                zoom: settings.zoom,
                                center: coords,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                mapTypeControl: false,
                                scaleControl: false,
                                streetViewControl: false,
                                panControl: true,
                                disableDefaultUI: true,
                                zoomControlOptions: {
                                    style: google.maps.ZoomControlStyle.DEFAULT
                                },
                                overviewMapControl: true,
                            };

                            var map = new google.maps.Map(element[0], options);

                            var icon = {
                                url: settings.icon_url,
                                origin: new google.maps.Point(0, 0)
                            };

                            var marker = new google.maps.Marker({
                                position: coords,
                                map: map,
                                icon: icon,
                                draggable: false
                            });

                            var info = new google.maps.InfoWindow({
                                content: settings.text
                            });

                            google.maps.event.addListener(marker, 'click', function() {
                                info.open(map, marker);
                            });

                            var styles = [{"featureType": "landscape", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "administrative.province", "stylers": [{"visibility": "on"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}];

                            map.setOptions({styles: styles});
                        });

                    };
                }(jQuery));

                jQuery(document).ready(function() {
                    jQuery('#map').CustomMap();
                });
            </script>
            <!-- End Map -->




            <!-- Start Content -->
            <div id="content">
                <div class="container">

                    <div class="row">

                        <div class="col-md-8">

                            <!-- Classic Heading -->
                            <h4 class="classic-title"><span>Contacte-nos agora</span></h4>

                            <!-- Start Contact Form -->
                            <form role="form" class="contact-form" id="contact-form" method="post">
                                <div class="form-group">
                                    <div class="controls">
                                        <input type="text" placeholder="Nome" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <input type="email" class="email" placeholder="E-mail" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <input type="text" class="requiredField" placeholder="Objetivo" name="subject">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="controls">
                                        <textarea rows="7"  placeholder="Mensagem" name="message"></textarea>
                                    </div>
                                </div>
                                <button type="submit" id="submit" class="btn-system btn-large">Enviar</button><div id="success" style="color:#34495e;"></div>
                            </form>
                            <!-- End Contact Form -->

                        </div>

                        <div class="col-md-4">

                            <!-- Classic Heading -->
                            <h4 class="classic-title"><span>Informações</span></h4>

                            <!-- Some Info -->
                            <p>Você pode nos contactar por e-mail ou por telefone</p>

                            <!-- Divider -->
                            <div class="hr1" style="margin-bottom:10px;"></div>

                            <!-- Info - Icons List -->
                            <ul class="icons-list">
                                <li><i class="fa fa-envelope-o"></i> <strong>E-mail:</strong> softage@softage.com</li>
                                <li><i class="fa fa-mobile"></i> <strong>Phone:</strong> +55 81 8673-3592</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
            <!-- End content -->

            <!-- Start Footer -->
            <?php include 'rodape.php'; ?>
            <!-- End Footer -->

        </div>
        <!-- End Container -->

        <!-- Go To Top Link -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

        <div id="loader">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
        

        <script type="text/javascript">
            //Contact Form

            $('#submit').click(function() {

                $.post("php/send.php", $(".contact-form").serialize(), function(response) {
                    $('#success').html(response);
                });
                return false;

            });

        </script>

    </body>
</html>