<?php
require './Classes/OpenWheatherApi.php';
$openWheater = new OpenWheatherApi();
$clima = $openWheater->getClima();
?>

<?php 

//Como imprimir a temperatura
//echo $clima->temperatura; 

?>

<!-- Coloque seu HTML aqui -->
<html>
    <head>
        <title>ClimaMunicípio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">    
        <link href="cssStyle/style.css" rel="stylesheet" type="text/css">
        
            
    </head>
    <body>
        <header>
             
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                
                <a class="navbar-brand" href="#">Clima Município</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notícias</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Mapas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Brusque</a>
                                <a class="dropdown-item" href="#">Região Sul</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Mapa brasileiro</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Mais procurados</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Login</button> 
                    </form>
                </div>              
            </nav>
                
        </header>
        <main role="main">
            <!--banner-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">                    
                    <div class="carousel-item active">

                        <img class="first-slide" src="img/pordosol.jpg" alt="First slide" width="100%" height="80%">
                        <div class="container">

                            <div class="carousel-caption text-left">
                                <h1>Município de <?php echo $clima->cidade?> : informações climáticas</h1>
                                <h5>As atualizações da temperatura atual na cidade de Brusque você encontra aqui!</h5>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Veja mais!</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="second-slide" src="img/ceuescuro.jpg" alt="Second slide" width="100%" height="80%">
                        <div class="container">
                            <div class="carousel-caption ">
                                <h1>Confira as notícias da semana!</h1>
                                <h5>Neste artigo, organizamos as principais informações da semana, referente ao clima no Sul do Brasil. Fique por dentro dos principais fatos da região!</h5>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Confira agora mesmo!</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="third-slide" src="img/ceuazul.jpg" alt="Third slide" width="100%" height="80%">
                        <div class="container">
                            <div class="carousel-caption text-right">
                                <h1>A temperatura em Brusque está <?php echo $clima->getTemperaturaCelcius($temperatura)?>ºC!</h1>
                                <h5>Confira as informações sobre a temperatura da cidade de Brusque aqui!</h5>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Confira</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Voltar</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Avançar</span>
                </a>
            </div>

            <br><br>
            <div class="container">
                <div class="text-center">
                    <h2>Brusque- Santa Catarina</h2>
                    <h5>Código da cidade: <?php echo $clima->codCidade?></h5>
                    <p>Segue abaixo as informações climáticas do dia de hoje. Confira:</p>
                </div>
            </div>
             <hr class="featurette-divider">
            <br><br>
            <div class="container">
                <div class="row text-center">
                    <div class=" col col-md-4">
                        <img class="rounded-circle" src="img/icone.jpg" width="140" height="140" alt="Temperatura em Celcius"/>
                        <h2><?php echo $clima->getTemperaturaCelcius($temperatura)?> ºCelcius</h2>
                        <p>A atual temperatura em Celcius.</p>
                        <!--<p><a class="btn btn-lg btn-dark" href="#" role="button">Saiba mais</a></p>-->
                    </div>

                    <div class="col col-md-4">
                        <img class="rounded-circle" src="img/solzinho.jpg" width="140" height="140" alt="Temperatura em Fahrenheit"/>
                        <h2><?php echo $clima->getTemperaturaFahrenheit($temperatura)?> ºFahrenheit</h2>
                        <p>A atual temperatura em Fahrenheit.</p>                    
                        <!--<p><a class="btn btn-lg btn-dark" href="#" role="button">Saiba mais</a></p>-->
                    </div>

                    <div class="col col-md-4">
                        <img class="rounded-circle" src="img/termoetro.jpg" width="140" height="140" alt="Temperatura em Kelvin"/>
                        <h2><?php echo $clima->temperatura?>ºKelvin</h2>
                        <p>A atual temperatura em Kelvin.</p>
                        <!--<p><a class="btn btn-lg btn-dark" href="#" role="button">Saiba mais</a></p>-->
                    </div>
                </div>                
            </div>
            <br><br>
            
            <div class="container">
                <div class="row text-center">
                    <div class=" col col-md-4">
                        <img class="rounded-circle" src="img/velocidadeDoVento.jpg" width="140" height="140" alt="Temperatura em Celcius"/>
                        <h2>Vento: <?php echo $clima->getVelocidadeVento()?> Km/h</h2>
                        
                        <p>A atual velocidade do vento em Km/h.</p>
                        <!--<p><a class="btn btn-lg btn-dark" href="#" role="button">Saiba mais</a></p>-->
                    </div>

                    <div class="col col-md-4">
                        <img class="rounded-circle" src="img/umidade.png" width="140" height="140" alt="Temperatura em Fahrenheit"/>
                        <h2>Umidade: <?php echo $clima->humidade?> %</h2>
                        
                        <p>A atual umidade relativa do ar.</p>                    
                        <!--<p><a class="btn btn-lg btn-dark" href="#" role="button">Saiba mais</a></p>-->
                    </div>

                    <div class="col col-md-4">
                        <img class="rounded-circle" src="img/pressao.png" width="110" height="110" alt="Temperatura em Kelvin"/>
                        <h2>Pressão: <?php echo $clima->getPressaoAtm()?> atm</h2>
                        <p>Aproximadamente a atual pressão atmosférica.</p>
                        <!--<p><a class="btn btn-lg btn-dark" href="#" role="button">Saiba mais</a></p>-->
                    </div>
                </div>                
            </div>
            <!--Texto do site-->
            
            <br><br>
            <div class="container">
            <div class="row">
                <div class="col-md-6">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h3 class="my-0 font-weight-normal"><?php echo $clima->cidade?> -Santa Catarina</h3>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title pricing-card-title">Descrição do clima</h2>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><h3><?php echo $clima->descricao?></h3></li>
                                <img src="img/opcao2.jpeg" width="200" height="200">
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-primary">Saiba mais</button>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                    <h2>Localização da cidade de: <span class="text-muted"> <?php echo $clima->cidade ?></span></h2>                                          
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227332.96807536954!2d-49.029321063583225!3d-27.09084818435205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df47e7c38fa4b3%3A0xf5e4cbe02813448!2sBrusque%2C%20SC!5e0!3m2!1spt-BR!2sbr!4v1586790725461!5m2!1spt-BR!2sbr" width="500" height="420" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                          
                </div>
               
            </div>
                    
                </div>
                <br><br>              
                </div>
                <hr class="featurette-divider">
    
                </div> <!-- /container icones -->
                <div class="row">
                <div class="col-md-3">
                    <p class="text-center"><img src="https://img.icons8.com/doodle/50/000000/sun.png"width="50"></p>
                </div>
                
                <div class="col-md-3">
                <p class="text-center"><img src="https://img.icons8.com/ultraviolet/40/000000/rain.png" width="45"></p>    
                </div>
                <div class="col-md-3">
                    <p class="text-center"><img src="https://img.icons8.com/dusk/64/000000/umbrella.png" width="50"></p>
                </div>
                 <div class="col-md-3">
                    <p class="text-center"><img src="https://img.icons8.com/color/48/000000/windy-weather.png" width="50"></p>
                </div>                    
                </div>
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="js/bootstrap.min.js" type="text/javascript"></script>
                <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
            <!--Footer- Rodapé-->
            <div class="container">
                <footer class="pt-4 my-md-5 pt-md-5 border-top">
                    <div class="row">
                        <div class="col-12 col-md">
                            <img class="mb-2" src="img/solzinho.jpg" alt="" width="150" height="150">
                            <small class="d-block mb-3 text-muted">&copy; 2019-2020</small>
                        </div>
                        <div class="col-6 col-md">
                            <h4>Novidades</h4>
                            <ul class="list-unstyled text-small">
                                <li><a class="text-muted" href="#">Clima Região</a></li>
                                <li><a class="text-muted" href="#">Satélites</a></li>
                                <li><a class="text-muted" href="#">Notícias</a></li>
                                <li><a class="text-muted" href="#">Imagens</a></li>                     
                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <h4>Brusque-SC</h4>
                            <ul class="list-unstyled text-small">
                                <li><a class="text-muted" href="#">Localização</a></li>
                                <li><a class="text-muted" href="#">Sobre a cidade</a></li>
                                <li><a class="text-muted" href="#">Previsão de tempo</a></li>
                                <li><a class="text-muted" href="#">Principais notícias</a></li>
                                
                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <h4>Sobre</h4>
                            <ul class="list-unstyled text-small">
                                <li><a class="text-muted" href="#">Temperatura</a></li>
                                <li><a class="text-muted" href="#">Umidade</a></li>
                                <li><a class="text-muted" href="#">Velocidade do Vento</a></li>
                                <li><a class="text-muted" href="#">Descrição</a></li>                             
                                <li><a class="text-muted" href="#">Pressão Atmosférica</a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
        </main>
    </body>
</html>