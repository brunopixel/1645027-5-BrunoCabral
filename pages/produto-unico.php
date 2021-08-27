<?php
    include("dados/dados.php");
    include("function/function.php");
?>

<?php
if (isset($_GET["id"])&& !empty($_GET["id"])){
    $id = $_GET["id"];
} else {
    return 0;
}
    foreach ($doces as $dados){
        if ($dados["id"] == $id){
?>

            <header class="bannerInterno">
                <div class="container">
                    <div class="bannerInterno-heading">Detalhes do Produto:<br/> <?php echo $dados["nome"]; ?></div>
                </div>
            </header>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="card mb-5 mt-5">
                            <img src="assets/images/produtos/<?php echo $dados["imagem"]; ?>" class="card-img-top" alt="<?php echo $dados["nome"]; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $dados["nome"]; ?></h5>
                                <p class="card-text"><?php echo $dados["desc"]; ?></p>
                                <p class="card-text"><small class="text-muted"><?php echo $dados["preco"]; ?></small></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
<?php
        } else {
            //header('Location: index.php');
        }
    }
?>