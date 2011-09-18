<?php
include 'GtaRSSParcer.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" media="all" href="estilo.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b3/jquery.mobile-1.0b3.min.css" />
        <meta name="viewport" content="width=320,initial-scale=1">
        <script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.0b3/jquery.mobile-1.0b3.min.js"></script>
    </head>
    <body>
        <?php
        $rss = new GtaRSSParser('http://www.utbvirtual.edu.co/centro-de-noticias/boletin/rss.xml');
        ?>
        <div data-role="collapsible-set">


            <?php
            //$rss->getItemsCount()
            for ($i = 1; $i <= 5; $i++) {
                $item = $rss->getItem();
                ?>
                <div data-role="collapsible" data-collapsed="false">
                    <h3><?php echo $item->title; ?></h3>
                    <p><?php echo $item->description; ?></p>
                </div>
                <?php
            }
            ?>
        </div>
    </body>
</html>

<!--
 <div class="item">
                <h1><a href="<?php echo $item->link; ?>" title=""><?php echo $item->title; ?></a></h1>
                <address>Categoría <?php echo $item->category; ?>, Publicado el <?php echo $item->pubDate; ?></address>
                <p></p>
            </div>-->