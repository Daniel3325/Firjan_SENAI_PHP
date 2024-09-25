<form action="http://localhost:8080/cadastro_alunos/process_registration.php" method="POST">

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- Conecta o arquivo CSS externo -->
    <title>Student Registration</title>
</head>
<body>
    <div class="container">
        <h2>Student Registration</h2>
        <!-- Formulário que envia os dados para 'processa_cadastro.php' via método POST -->
        <form action="http://localhost:8080/cadastro_alunos/process_registration.php" method="POST">
            <label for="name">Name:</label> <!-- Campo para nome do aluno -->
            <input type="text" id="name" name="name" require> <!-- Campo de texto obrigatório para o nome -->

            <label for="email">E-mail:</label> <!-- Campo para e-mail do aluno -->
            <input type="email" id="email" name="email" required> <!-- Campo obrigatório para o e-mail com validação de formato -->

            <label for="phone_number">Phone_Number:</label> <!-- Campo para telefone do aluno -->
            <input type="text" id="phone_number" name="phone_number"> <!-- Campo opcional para telefone -->

            <label for="course">Course:</label> <!-- Campo para curso do aluno -->
            <input type="text" id="course" name="course" required> <!-- Campo obrigatório para o curso -->

            <button type="submit">Register</button> <!-- Botão de envio do formulário -->
        </form>
    </div>
</body>
</html>