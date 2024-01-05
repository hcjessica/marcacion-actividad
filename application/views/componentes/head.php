<!DOCTYPE html5>
<html lang="es">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="theme-color" content="#09f"><!--color a la barra de direcciones del browser de dispositivos móviles-->
        <meta name="descripcion" content="Una aplicación para tener el control de las actividades que se realizan en el día a día">
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
        <meta name="keywords" content="herramienta, productividad, control de actividades, marcación">
        <meta name="author" content="Fabiola Jessica Huancollo Chambi">
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/ic-logo-app.png'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/librerias/normalize/normalize.css'); ?>">

        <?php
        $contador = 0;
        if(isset($recursoscss)){
            foreach($recursoscss as $css){
            ?>
                <link rel="stylesheet" href="<?php echo base_url('assets/css/').$css; ?>" media="<?php echo $media[$contador]; ?>">
            <?php
                $contador++;
            }
        }
        ?>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,600;1,9..144,800&display=swap" rel="stylesheet">
    </head>
    <body>

