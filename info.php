<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Sucesso</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1835/1835942.png" type="image/png">
    <link rel="stylesheet" href="css/info.css">
</head>
<body>
    <a href="index.html" class="logo-link">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnmGIoX5XBPOKaWqpuw0mYaThFGOVd6_F4Gg&s" alt="Logo" class="logo">
    </a>

    <div class="container">
    <h1>Cadastro Concluído</h1>

    <p>O participante <strong><?php echo htmlspecialchars($_POST['nome']); ?></strong> foi cadastrado com sucesso!</p>

    </div>
    
</body>
</html>