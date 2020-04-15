<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

$interesses = $_POST['interesse'];
$onde_conheceu = $_POST['onde_conheceu'];
$mensagem = $_POST['mensagem'];
$redirecionar = $_POST['redirecionar'];
$interesses = $_POST['interesse'];

echo "<strong>Nome:</strong>" . $nome;
echo "<br>";
echo "<strong>Email:</strong>" . $email;
echo "<br>";
echo "<strong>Interesses:</strong>";
echo "<ul>";
foreach ($interesses as $interesse) {
    echo "<li>" . $interesse . "</li>";
}
echo "</ul>";
echo "<br>";
echo "<strong>Onde conheceu:</strong>" . $onde_conheceu;
echo "<br>";
echo "<strong>Mensagem:</strong>" . $mensagem;
echo "<br>";
echo "<strong>redirecionar:</strong>" . $interesses;
