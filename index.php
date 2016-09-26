<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Barão de Ramalho</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .map-control {
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
            font-family: 'Roboto','sans-serif';
            margin: 10px;
            /* Hide the control initially, to prevent it from appearing
               before the map loads. */
            display: none;
        }
        /* Display the control once it is inside the map. */
        #map .map-control {
            display: none;
        }

        #map{
            width: 100%;
            height: 500px;
            position: relative;
        }

        .selector-control {
            display: none;
            font-size: 14px;
            line-height: 30px;
            padding-left: 5px;
            padding-right: 5px;
        }
    </style>

</head>

<body>
   <div id="back"></div>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="images/Logo-Barao-Ramalho.png" alt="">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="" class="text-center"><img src="images/contact-top.png" alt=""></a>
                        </li>
                        <li>
                            <a href="" class="text-center"><img src="images/logo-aurea.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div class="carousel slide" data-ride="carousel" id="Carrossel">
            <ol class="carousel-indicators">
                <li data-target="#Carrossel" data-slide-to="0" class="active"></li>
                <li data-target="#Carrossel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/banner.jpg" alt="" class="img-banner">
                </div>

                <div class="item">
                    <img src="images/banner-2.jpg" alt="" class="img-banner">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="circle-blue">
                <img src="images/circle.png" alt="" class="img-responsive center-block">
            </div>
        </div>

        <br>
        <br>       


        <div class="text-center">

            <h1 class="first-text">Uma opção única <br> e viável para moradia <br> ou investimento.</h1>

            <br>
            <br>
            <br>

            <p class="second-text">O Residencial Barão de Ramalho está localizado em uma das
                <br> regiões de maior crescimento e valorização da cidade. A apenas 5
                <br> minutos do centro, próximo a mercados, padarias, igrejas, pontos
                <br> de ônibus e colégios. Esta é, sem dúvida, uma ótima escolha.</p>
        </div>

        <div class="img-center-logo">
            <img src="images/Logo-Barao-Ramalho.png" alt="" class="img-responsive center-block">
        </div>


        <div class="container-fluid blocos-apartamentos">
            <div class="container">
                <div class="colunas">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <img src="images/card-blue.png" class="center-block img-responsive">
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <img src="images/card-blue-1.png" class="center-block img-responsive">
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <img src="images/card-blue-2.png" class="center-block img-responsive">
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <img src="images/card-blue-3.png" class="center-block img-responsive">
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid blocos-frente">
            <div class="row">
                <h1 class="title-theme">Sobrado com</h1>
            </div>

            <div class="container">
                <div class="detalhes-ape">
                    <div class="col-md-6">
                        <h1 class="title-add"><img src="images/numero-um.png" alt="" class="img-item-quarto">Suíte</h1>
                    </div>
                    <div class="col-md-6">
                        <h1 class="title-add"><img src="images/numero-um.png" alt="" class="img-item-quarto">Escritório</h1>
                    </div>
                    <div class="col-md-6">
                        <h1 class="title-add"><img src="images/numero-um.png" alt="" class="img-item-quarto">Quarto</h1>
                    </div>
                    <div class="col-md-6">
                        <h1 class="title-add"><img src="images/numero-um.png" alt="" class="img-item-quarto">Banheiro <br><h5 class="descricao-quarto">Com opção de adaptação para suíte / baby suíte / quarto.</h5></h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <h1 class="title-theme-2">Conheça o interior</h1>

            <div class="row">
                <h2 class="title-plant">Andar térreo</h2>
                <br>
                <img src="images/planta-1.jpg" alt="" class="img-responsive center-block">
                <p class="text-center"><small>Imagens meramente ilustrativas, confira o memorial descritivo.</small></p>
            </div>
            <br>
            <div class="row">
                <h2 class="title-plant">Andar superior</h2>
                <br>
                <img src="images/planta-2.jpg" alt="" class="img-responsive center-block">
                <p class="text-center"><small>Imagens meramente ilustrativas, confira o memorial descritivo.</small></p>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <img src="images/atributos-apartamento.jpg" alt="" class="img-responsive center-block">
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>


        <div>
            <h1 class="title-local">Excelente <b>Localização</b></h1>
        </div>

        <div id="style-selector-control"  class="map-control">
            <select id="style-selector" class="selector-control">
                <option value="default">Default</option>
                <option value="silver">Silver</option>
                <option value="night">Night mode</option>
                <option value="retro">Retro</option>
                <option value="hiding">Hide features</option>
                <option value="bluedark" selected="selected">Blue Dark</option>
            </select>
        </div>
        <div id="map"></div>


        <div class="row line-adjuste">
            <div class="referencia col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <h1 class="title-ponto-referencia">Pontos de <br> referência</h1>
            </div>

            <div class="clientes col-md-6 col-sm-12 col-lg-6 col-xs-12">
                <ul class="lista-clientes">
                    <li>DeMario Supermercado</li>
                    <li>Comunidade Dom Bosco</li>
                    <li>Jockey</li>
                    <li>Colégio Sagrado Coração de Jesus</li>
                    <li>Igreja Ucraniana</li>
                    <li>Igreja Evangélica</li>
                    <li>BRFoods</li>
                </ul>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer">
            <div class="container">
               <div class="row">               
                   <img src="/images/logo-rodape.png" class="logo-rodape hidden-xs hidden-sm">
                    <h2 class="contato-corretor">
                           Entre em contato <br> com um de nossos <br> corretores e comece <br> já a realizar <br> o seu sonho.
                    </h2>                    
                </div>                
                    <div class="col-md-4 col-sm-12">
                        <div class="fone">
                            <h2> <br>(42) <b>8803-4449</b></h2>
                            <a href="mailto:aurea@aureaempreendimentos.com">aurea@aureaempreendimentos.com</a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <img src="images/minha-casa.png" alt="Minha casa, Minha vida" class="img-responsive center-block img-minha-casa" width="116">
                    </div>

                    <div class="col-md-4  col-sm-12 endereco">                       
                        <h5>R. Barão de Ramalho, 818 - Ponta Grossa</h5>
                    </div>
            </div>    
                    
        </div>        
    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
        <script>
        jQuery(document).ready(function($){
            $('#back').hide();
            
            $(window).scroll(function(){                                
                if ($(this).scrollTop() > 300){
                    $('#back').fadeIn();
                }else{
                    $('#back').fadeOut();
                }
            });
            
            // scroll body to 0px on click
            $('#back').click(function(){
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    </script>


    <script>
               var map;
               var myLatLng = {lat: -25.0856186, lng: -50.1232759};
               var image = 'images/location-pointer.png';

               var locations = [
                   ['<div id="content">'+
                   '<div id="siteNotice">'+
                   '</div>'+
                   '<h1 id="firstHeading" class="firstHeading">Barão de Ramalho</h1>'+
                   '<div id="bodyContent">'+
                   '<p>R. Barão de Ramalho, 818 - Ponta Grossa'+
                   'PR.</p>'+'Telefone: <b> (42) 8803-4449 </b>'+
                   '<p>E-mail: <a href="maito:aurea@aureaempreendimentos.com">'+
                   'aurea@aureaempreendimentos.com</a></p>'+
                   '</div>'+
                   '</div>', -25.0856186,-50.1232759, 1],
                   ['BRF Brasil', -25.082747, -50.1220858, 2],
                   ['Colégio Sagrada Família', -25.0824663, -50.1353801, 3],
                   ['Bilhares Rio Verde', -25.085836, -50.125674, 4],
                   ['Paróquia São Jorge Protetor', -25.0855698, -50.1247237, 5],
                   ['Casa de Carne de Mário', -25.0875545, -50.1255505, 6],
                   ['13 BIB', -25.091975, -50.130316, 7],
                   ['Jockey Club', -25.0969328, -50.1619386, 8]
               ];

               function initMap() {
                   // Create the map with no initial style specified.
                   // It therefore has default styling.
                   map = new google.maps.Map(document.getElementById('map'), {
                       center: myLatLng,
                       zoom: 17,
                       mapTypeId: google.maps.MapTypeId.ROADMAP,
                       mapTypeControl: false,
                   });

                   var marker, i ;

                   var infowindow = new google.maps.InfoWindow();

                   for (i = 0; i < locations.length; i++) {
                       marker = new google.maps.Marker({
                           position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                           map: map,
                           icon: image

                       });

                       google.maps.event.addListener(marker, 'click', (function(marker, i) {
                           return function() {
                               infowindow.setContent(locations[i][0]);
                               infowindow.open(map, marker);
                           }
                       })(marker, i));
                   }

                   // Add a style-selector control to the map.
                   var styleControl = document.getElementById('style-selector-control');
                   map.controls[google.maps.ControlPosition.TOP_LEFT].push(styleControl);

                   // Set the map's style to the initial value of the selector.
                   var styleSelector = document.getElementById('style-selector');
                   map.setOptions({styles: styles[styleSelector.value]});

                   // Apply new JSON when the user selects a different style.
                   styleSelector.addEventListener('change', function() {
                   map.setOptions({styles: styles[styleSelector.value]});
               });
           }


               var styles = {
               default: null,
               silver: [
           {
               elementType: 'geometry',
               stylers: [{color: '#f5f5f5'}]
           },
           {
               elementType: 'labels.icon',
               stylers: [{visibility: 'off'}]
           },
           {
               elementType: 'labels.text.fill',
               stylers: [{color: '#616161'}]
           },
           {
               elementType: 'labels.text.stroke',
               stylers: [{color: '#f5f5f5'}]
           },
           {
               featureType: 'administrative.land_parcel',
               elementType: 'labels.text.fill',
               stylers: [{color: '#bdbdbd'}]
           },
           {
               featureType: 'poi',
               elementType: 'geometry',
               stylers: [{color: '#eeeeee'}]
           },
           {
               featureType: 'poi',
               elementType: 'labels.text.fill',
               stylers: [{color: '#757575'}]
           },
           {
               featureType: 'poi.park',
               elementType: 'geometry',
               stylers: [{color: '#e5e5e5'}]
           },
           {
               featureType: 'poi.park',
               elementType: 'labels.text.fill',
               stylers: [{color: '#9e9e9e'}]
           },
           {
               featureType: 'road',
               elementType: 'geometry',
               stylers: [{color: '#ffffff'}]
           },
           {
               featureType: 'road.arterial',
               elementType: 'labels.text.fill',
               stylers: [{color: '#757575'}]
           },
           {
               featureType: 'road.highway',
               elementType: 'geometry',
               stylers: [{color: '#dadada'}]
           },
           {
               featureType: 'road.highway',
               elementType: 'labels.text.fill',
               stylers: [{color: '#616161'}]
           },
           {
               featureType: 'road.local',
               elementType: 'labels.text.fill',
               stylers: [{color: '#9e9e9e'}]
           },
           {
               featureType: 'transit.line',
               elementType: 'geometry',
               stylers: [{color: '#e5e5e5'}]
           },
           {
               featureType: 'transit.station',
               elementType: 'geometry',
               stylers: [{color: '#eeeeee'}]
           },
           {
               featureType: 'water',
               elementType: 'geometry',
               stylers: [{color: '#c9c9c9'}]
           },
           {
               featureType: 'water',
               elementType: 'labels.text.fill',
               stylers: [{color: '#9e9e9e'}]
           }
               ],

               night: [
           {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
           {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
           {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
           {
               featureType: 'administrative.locality',
               elementType: 'labels.text.fill',
               stylers: [{color: '#d59563'}]
           },
           {
               featureType: 'poi',
               elementType: 'labels.text.fill',
               stylers: [{color: '#d59563'}]
           },
           {
               featureType: 'poi.park',
               elementType: 'geometry',
               stylers: [{color: '#263c3f'}]
           },
           {
               featureType: 'poi.park',
               elementType: 'labels.text.fill',
               stylers: [{color: '#6b9a76'}]
           },
           {
               featureType: 'road',
               elementType: 'geometry',
               stylers: [{color: '#38414e'}]
           },
           {
               featureType: 'road',
               elementType: 'geometry.stroke',
               stylers: [{color: '#212a37'}]
           },
           {
               featureType: 'road',
               elementType: 'labels.text.fill',
               stylers: [{color: '#9ca5b3'}]
           },
           {
               featureType: 'road.highway',
               elementType: 'geometry',
               stylers: [{color: '#746855'}]
           },
           {
               featureType: 'road.highway',
               elementType: 'geometry.stroke',
               stylers: [{color: '#1f2835'}]
           },
           {
               featureType: 'road.highway',
               elementType: 'labels.text.fill',
               stylers: [{color: '#f3d19c'}]
           },
           {
               featureType: 'transit',
               elementType: 'geometry',
               stylers: [{color: '#2f3948'}]
           },
           {
               featureType: 'transit.station',
               elementType: 'labels.text.fill',
               stylers: [{color: '#d59563'}]
           },
           {
               featureType: 'water',
               elementType: 'geometry',
               stylers: [{color: '#17263c'}]
           },
           {
               featureType: 'water',
               elementType: 'labels.text.fill',
               stylers: [{color: '#515c6d'}]
           },
           {
               featureType: 'water',
               elementType: 'labels.text.stroke',
               stylers: [{color: '#17263c'}]
           }
               ],

               retro: [
           {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
           {elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
           {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
           {
               featureType: 'administrative',
               elementType: 'geometry.stroke',
               stylers: [{color: '#c9b2a6'}]
           },
           {
               featureType: 'administrative.land_parcel',
               elementType: 'geometry.stroke',
               stylers: [{color: '#dcd2be'}]
           },
           {
               featureType: 'administrative.land_parcel',
               elementType: 'labels.text.fill',
               stylers: [{color: '#ae9e90'}]
           },
           {
               featureType: 'landscape.natural',
               elementType: 'geometry',
               stylers: [{color: '#dfd2ae'}]
           },
           {
               featureType: 'poi',
               elementType: 'geometry',
               stylers: [{color: '#dfd2ae'}]
           },
           {
               featureType: 'poi',
               elementType: 'labels.text.fill',
               stylers: [{color: '#93817c'}]
           },
           {
               featureType: 'poi.park',
               elementType: 'geometry.fill',
               stylers: [{color: '#a5b076'}]
           },
           {
               featureType: 'poi.park',
               elementType: 'labels.text.fill',
               stylers: [{color: '#447530'}]
           },
           {
               featureType: 'road',
               elementType: 'geometry',
               stylers: [{color: '#f5f1e6'}]
           },
           {
               featureType: 'road.arterial',
               elementType: 'geometry',
               stylers: [{color: '#fdfcf8'}]
           },
           {
               featureType: 'road.highway',
               elementType: 'geometry',
               stylers: [{color: '#f8c967'}]
           },
           {
               featureType: 'road.highway',
               elementType: 'geometry.stroke',
               stylers: [{color: '#e9bc62'}]
           },
           {
               featureType: 'road.highway.controlled_access',
               elementType: 'geometry',
               stylers: [{color: '#e98d58'}]
           },
           {
               featureType: 'road.highway.controlled_access',
               elementType: 'geometry.stroke',
               stylers: [{color: '#db8555'}]
           },
           {
               featureType: 'road.local',
               elementType: 'labels.text.fill',
               stylers: [{color: '#806b63'}]
           },
           {
               featureType: 'transit.line',
               elementType: 'geometry',
               stylers: [{color: '#dfd2ae'}]
           },
           {
               featureType: 'transit.line',
               elementType: 'labels.text.fill',
               stylers: [{color: '#8f7d77'}]
           },
           {
               featureType: 'transit.line',
               elementType: 'labels.text.stroke',
               stylers: [{color: '#ebe3cd'}]
           },
           {
               featureType: 'transit.station',
               elementType: 'geometry',
               stylers: [{color: '#dfd2ae'}]
           },
           {
               featureType: 'water',
               elementType: 'geometry.fill',
               stylers: [{color: '#b9d3c2'}]
           },
           {
               featureType: 'water',
               elementType: 'labels.text.fill',
               stylers: [{color: '#92998d'}]
           }
               ],

               hiding: [
           {
               featureType: 'poi.business',
               stylers: [{visibility: 'off'}]
           },
           {
               featureType: 'transit',
               elementType: 'labels.icon',
               stylers: [{visibility: 'off'}]
           }
               ],

               bluedark: [
                   {
                       "featureType": "all",
                       "elementType": "all",
                       "stylers": [
                           {
                               "hue": "#0081ff"
                           },
                           {
                               "visibility": "on"
                           },
                           {
                               "lightness": "-65"
                           },
                           {
                               "saturation": "75"
                           }
                       ]
                   },
                   {
                       "featureType": "administrative.province",
                       "elementType": "geometry.stroke",
                       "stylers": [
                           {
                               "color": "#fafafa"
                           }
                       ]
                   },
                   {
                       "featureType": "administrative.locality",
                       "elementType": "labels.text",
                       "stylers": [
                           {
                               "color": "#ffffff"
                           },
                           {
                               "weight": "0.01"
                           }
                       ]
                   },
                   {
                       "featureType": "administrative.neighborhood",
                       "elementType": "labels.text",
                       "stylers": [
                           {
                               "color": "#cae6fa"
                           },
                           {
                               "gamma": "0.50"
                           },
                           {
                               "weight": "0.01"
                           }
                       ]
                   },
                   {
                       "featureType": "administrative.land_parcel",
                       "elementType": "labels.text",
                       "stylers": [
                           {
                               "visibility": "on"
                           },
                           {
                               "color": "#fcf9f9"
                           },
                           {
                               "weight": "0.01"
                           }
                       ]
                   },
                   {
                       "featureType": "poi",
                       "elementType": "labels.text",
                       "stylers": [
                           {
                               "color": "#ffffff"
                           },
                           {
                               "visibility": "on"
                           },
                           {
                               "gamma": "2.00"
                           },
                           {
                               "weight": "0.01"
                           }
                       ]
                   },
                   {
                       "featureType": "road",
                       "elementType": "geometry",
                       "stylers": [
                           {
                               "lightness": 25
                           },
                           {
                               "visibility": "simplified"
                           }
                       ]
                   },
                   {
                       "featureType": "road",
                       "elementType": "labels",
                       "stylers": [
                           {
                               "visibility": "off"
                           }
                       ]
                   },
                   {
                       "featureType": "road.highway.controlled_access",
                       "elementType": "geometry.fill",
                       "stylers": [
                           {
                               "visibility": "on"
                           }
                       ]
                   },
                   {
                       "featureType": "road.highway.controlled_access",
                       "elementType": "labels.text",
                       "stylers": [
                           {
                               "color": "#ffffff"
                           },
                           {
                               "visibility": "on"
                           }
                       ]
                   },
                   {
                       "featureType": "road.highway.controlled_access",
                       "elementType": "labels.text.stroke",
                       "stylers": [
                           {
                               "gamma": "0.00"
                           },
                           {
                               "weight": "0.01"
                           }
                       ]
                   }
               ]
           };

   </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4gEfKYO242eAjmHoP9Db24TKBQNHp-IA&callback=initMap" async defer></script>
</body>
</html>