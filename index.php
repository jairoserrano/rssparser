<?php
include 'GtaRSSParcer.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" media="all" href="estilo.css" />
        <meta name="viewport" content="width=320,initial-scale=1">
    </head>
    <body>
        <?php
        $rss = new GtaRSSParser('http://www.utbvirtual.edu.co/centro-de-noticias/boletin/rss.xml');
        ?>

        <?php
        for ($i = 1; $i <= $rss->getItemsCount(); $i++) {
            $item = $rss->getItem();
            ?>
            <div class="item">
                <h1><a href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>"><?php echo $item->title; ?></a></h1>
                <address>Categoría <?php echo $item->category; ?>, Publicado el <?php echo $item->pubDate; ?></address>
                <p><?php echo $item->description; ?></p>
            </div>
            <?php
        }
        ?>
    </body>
</html>