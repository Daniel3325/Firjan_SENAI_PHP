<?php
include 'conection.php'; // Inclui o arquivo de conexão para interagir com o banco de dados

// Verifica se o formulário foi enviado usando o método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados enviados pelo formulário e remove espaços extras
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $course = trim($_POST['course']);

    // Verifica se os campos obrigatórios estão preenchidos
    if (!empty($name) && !empty($email) && !empty($course)) {
        // Prepara uma consulta SQL para inserir os dados na tabela 'alunos'
        $sql = "INSERT INTO alunos (nome, email, telefone, curso) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql); // Prepara a declaração SQL para execução
        $stmt->bind_param("ssss", $name, $email, $phone_number, $course); // Vincula os parâmetros (as variáveis) ao SQL

        // Tenta executar a consulta preparada
        if ($stmt->execute()) {
            // Se bem-sucedido, exibe uma mensagem de sucesso
            echo "Aluno cadastrado com sucesso!";
        } else {
            // Caso haja erro, exibe uma mensagem de erro com detalhes
            echo "Erro ao cadastrar: " . $stmt->error;
        }

        // Fecha a declaração e a conexão com o banco de dados
        $stmt->close();
    } else {
        echo "Por favor, preencha todos os campos obrigatórios.";
    }
    $conn->close();
} else {
    echo "Método de envio inválido.";
}
?>