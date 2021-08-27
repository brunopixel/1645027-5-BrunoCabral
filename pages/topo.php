<?php
$paginaInterna = isset($_GET['page']) ? $_GET['page'] : '';
$nometela = "";
switch($paginaInterna):
    case 'quemsomos':
        $nometela = "Quem Somos";
        break;
    case 'produtos-lista':
        $nometela = "Produtos";
        break;
    case 'contato':
        $nometela = "Contato";
        break;
endswitch;
?>

<header class="bannerInterno">
    <div class="container">
        <div class="bannerInterno-heading"><?php echo $nometela; ?></div>
    </div>
</header>