<?php
    $servername = "localhost"; //máquina local
    $username = "Daniel"; //user do db
    $password = "142536"; //senha do user
    $dbname = "senai_ta_aulaphp"; //nome do db

    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname, 3307);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Define o charset como UTF-8
    $conn->set_charset("utf8");
?>