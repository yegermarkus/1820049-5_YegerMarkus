<?php
if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST["name"]) && !empty($_POST["email"])) {
        if (!empty($_POST["name"]) && !empty($_POST["email"])) {
            $name = filter_input(INPUT_POST, "name");
            if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
                $email = filter_input(INPUT_POST, "email");
            else
                echo "Email inválido";
                echo $name;
                echo $email;
        } else {
            echo "Há algum campo vazio.";
        }
    } else {
        echo "Campos obrigatórios não preenchidos.";
    }
} else {
    echo "Erro de envio de dados.";
}
