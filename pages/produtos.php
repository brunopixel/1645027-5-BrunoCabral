<?php
    include("dados/dados.php");
    include("function/function.php");
?>
<?php
    foreach ($doces as $dados){
?>
    <div class="docesLista col-md-4">
        <div class="card">
            <img src="assets/images/produtos/<?php echo $dados["imagem"]; ?>" class="card-img-top" alt="<?php echo $dados["nome"]; ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $dados["nome"]; ?></h5>
                <p class="card-text"><?php echo limita_caracteres("$dados[desc]", 60); ?></p>
                <a href="index.php?page=produtounico&id=<?=$dados["id"];?>" class="btn btn-primary">DETALHES</a>
            </div>
        </div>
    </div>
<?php
    }
?>