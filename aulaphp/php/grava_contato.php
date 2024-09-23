<?php
//Verifica se os dados foram enviados via GET
if (isset($_GET['nome']) && isset($_GET['mensagem'])) {
    //Captura os dados enviados pelo formulário
    $nome = htmlspecialchars($_GET['nome']);
    $email = htmlspecialchars($_GET['email']);
    $mensagem = htmlspecialchars($_GET['mensagem']);

    //Exibe os dados capturados
    echo "<h2>Informações Recebidas</h2>"
    echo "<p<strong>Nome:</strong>" . $nome . "</p>"
    echo "<p<strong>E-mail:</strong>" . $email . "</p>"
    echo "<p<strong>Mensagem:</strong>" . $mensagem . "</p>"
    //Verifica se a variável $po, que deve ser uma instância de PDO, está definida e é válida
    //Prepara uma cosulta SQL para selecionar as colunas 'id' e 'nome' da tabela 'usuario'
    $stmt = $pdo->prepare(insert into contato(Nome, Email, Mensagem) values ('$nome', '$email', '$mensagem'););

    //Executa a consulta preparada
    $stmt->execute();
}
else{
    echo"Nenhum dado foi enviado."
}
?>