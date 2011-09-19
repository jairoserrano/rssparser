<?php
include 'GtaRSSParcer.php';
$rss = new GtaRSSParser('http://www.utbvirtual.edu.co/centro-de-noticias/boletin/rss.xml');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SAVIO Móvil</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" media="all" href="estilo.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b3/jquery.mobile-1.0b3.min.css" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.0b3/jquery.mobile-1.0b3.min.js"></script>
    </head>
    <body>
        <div data-role="page"  id="novedades" data-theme="c"> 
            <div data-role="header" data-position="fixed">
                <!--<img src="http://www.utbvirtual.edu.co/images/logoutb.png" />-->
                <div data-role="navbar" class="ui-state-persist">
                    <ul>
                        <li><a href="#novedades" class="ui-btn-active">Novedades</a></li>
                        <li><a href="#savio">SAVIO</a></li>
                        <li><a href="#soporte">Soporte</a></li>
                    </ul>
                </div>
            </div> 
            <div data-role="content">
                <div data-role="collapsible-set">

                    <?php
                    $item = $rss->getItem();
                    ?>
                    <div data-role="collapsible" data-collapsed="false">
                        <h3><?php echo $item->title; ?></h3>
                        <p><?php echo $item->description; ?></p>
                    </div>
                    <?php
                    //$rss->getItemsCount()
                    for ($i = 2; $i <= 4; $i++) {
                        $item = $rss->getItem();
                        ?>
                        <div data-role="collapsible">
                            <h3><?php echo $item->title; ?></h3>
                            <p><?php echo $item->description; ?></p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div> 
            <div data-role="footer"  data-position="fixed">
                Pruebas realizadas por Jairo Serrano 2011
            </div>
        </div>


        <!-- Start of second page: #savio -->
        <div data-role="page" id="savio" data-theme="c">

            <div data-role="header"  data-position="fixed">
                <div data-role="navbar" class="ui-state-persist" data-theme="b">
                    <ul>
                        <li><a href="#novedades">Novedades</a></li>
                        <li><a href="#savio" class="ui-btn-active">SAVIO</a></li>
                        <li><a href="#soporte">Soporte</a></li>
                    </ul>
                </div>
            </div><!-- /header -->

            <div data-role="content" data-theme="c">	
                <h2>Datos de acceso:</h2>
                <form action="http://aulas2.utbvirtual.edu.co/login/index.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
                    <div data-role="fieldcontain">
                        <label for="username">Usuario:</label>
                        <input type="text" name="username" id="username" value=""  />
                    </div>
                    <div data-role="fieldcontain">
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password" id="password" value="" />
                    </div>
                    <button type="submit" data-theme="c" name="submit" value="submit-value">Ingresar</button>
                </form>
            </div><!-- /content -->

            <div data-role="footer"  data-position="fixed">
                Pruebas realizadas por Jairo Serrano 2011

            </div><!-- /footer -->
        </div><!-- /page savio -->

        <!-- Start of second page: #soporte -->
        <div data-role="page" id="soporte" data-theme="c">

            <div data-role="header" data-position="fixed">
                <div data-role="navbar" class="ui-state-persist">
                    <ul>
                        <li><a href="#novedades" data-direction="reverse">Novedades</a></li>
                        <li><a href="#savio" data-direction="reverse">SAVIO</a></li>
                        <li><a href="#soporte" data-direction="reverse" class="ui-btn-active">Soporte</a></li>
                    </ul>
                </div>
            </div><!-- /header -->

            <div data-role="content" data-theme="c">	
                <h2>¿Necesita ayuda?</h2>
                <p></p>	
            </div><!-- /content -->

            <div data-role="footer"  data-position="fixed">
                Pruebas realizadas por Jairo Serrano 2011
            </div><!-- /footer -->
        </div><!-- /page soporte -->

    </body>
</html>