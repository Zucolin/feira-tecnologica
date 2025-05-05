<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de E-mail - Sucesso</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1835/1835942.png" type="image/png">
    <link rel="stylesheet" href="css/info.css">
</head>
<body>
    <h1>Envio de E-mail Concluído</h1>

    <!-- Exibe a mensagem de sucesso com o nome enviado -->
    <p>O e-mail de <strong><?php echo htmlspecialchars($_POST['nome']); ?></strong> foi enviado com sucesso!</p>

</body>
</html>