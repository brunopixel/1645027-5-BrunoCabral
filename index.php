<?php require_once('include/header.php'); ?>
    
    <?php require_once('include/menu.php'); ?>

    <?php

    $pagina = isset($_GET['page']) ? $_GET['page'] : '';

    switch($pagina):
        case 'home':
            include 'pages/home.php';
            break;
        case 'quemsomos':
            include 'pages/quem-somos.php';
            break;
        case 'produtoslista':
            include 'pages/produtos-lista.php';
            break;
        case 'produtounico':
            include 'pages/produto-unico.php';
            break;  
        case 'contato':
            include 'pages/contato.php';
            break;
        default:
            include 'pages/home.php';
            break;
    endswitch;
    ?>
   
<?php require_once('include/footer.php'); ?>   