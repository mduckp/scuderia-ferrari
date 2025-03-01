if ($_POST['username']) == 'ferrari' &&
$_POST['passaword'] == '1234' {
    echo "Bem-Vindo, " . 
    htmlspecialchars($_POST['username']) . "!";
} else {
    echo "Nome de usúario ou senha inválidos";
}