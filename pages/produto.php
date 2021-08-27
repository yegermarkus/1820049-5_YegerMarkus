<div class="container">

    <?php
    include("dados/produtos.php");
    ?>

    <div class="row pt-5 pb-4 text-center">
        <div class="col">
            <h1>Nossos Produtos</h1>
        </div>
    </div>

    <!-- Inicio Cards 1 -->
    <div class="container-fluid">
        <div class="card-deck mb-5">

            <?php foreach ($produtos as $produto) {
                if ($produto['nome'] == $nome) {
            ?>
                    <div class="card text-center">
                        <img class="card-img-top" src="<?= $produto['img'] ?>" alt="Imagem de capa do card">
                        <div class="card-body ">
                            <h3 class="card-title font-weight-bold"><?= $produto['nome'] ?><h3>
                                    <p class="card-text  card-text-size"><?= $produto['preco'] ?></p>
                        </div>
                    </div>

            <?php }
            } ?>
        </div>
        <!-- Fim Cards 1 -->
    </div>
</div>