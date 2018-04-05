<?php echo doctype('html5'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <?php 
        $meta = array(
            array('name' => 'robots', 'content' => 'no-cache'),
            array('name' => 'description', 'content' => $description),
            array('name' => 'keywords', 'content' => $keywords),
            array('name' => 'robots', 'content' => 'no-cache'),
            array('name' => 'Content-type', 'content' => 'text/html;charset=utf-8', 'type' => 'equiv')
        );
        echo meta($meta);
        echo link_tag('assets/images/favicon.ico', 'shortcut icon', 'image/ico');
        echo link_tag('assets/css/bootstrap.min.css');
        echo link_tag('assets/css/style.css?v=2');
        ?>
    </head>
    <body>
        <?php
          $link = ($valor % 2 == 0 ? 'http://abyara.hypnobox.com.br/?controle=Atendimento&acao=index&id_interno=638766&midia=Site_Abyara_Brokers-LITORAL&SUBSIDIARIA=ABYARA&VIEW=LITORAL' : 'http://www.lopes.com.br/chatonline/21?Reference=2362&lpsmidiaorigem=pg:N|ft:incorporador|camp:chat&lpsCanalContato=Chat%20Site%20Incorporador');
        ?>
        <a class="online_service hidden-xs" href="<?php echo $link; ?>" target="_blank">
            <img class="img-responsive" src="<?= base_url(); ?>assets/images/online_service.png" alt="Atendimento Online">
        </a>