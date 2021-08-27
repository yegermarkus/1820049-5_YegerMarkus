<?php

    include ("dados/produtos.php");

    foreach ($produtos as $produto) { ?>

        <div class="card text-center">
            <img class="card-img-top" src="images/donut.jpeg" alt="Imagem de capa do card">
            <div class="card-body ">
                <h3 class="card-title font-weight-bold"><?= $produto['nome'] ?><h3>
                        <p class="card-text  card-text-size"><?= $produto['preco'] ?></p>
            </div>
            <div class="card-footer bg-transparent">
                <a href="index.php?page=produto.php&" class="btn btn-primary">Detalhes</a>
            </div>
        </div>

    <?php } ?>