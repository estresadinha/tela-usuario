<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela usuario </title>
</head>
<body>
    <div class = "container longin-usuario">
        <h2 class="text-center mb-4">login</h2>

        <form method= "post" action = "validar-senha.php">
        <div class="form grop">
                <label for="usuario">Usuario</label>
                <input type="text" class="forr-control" id="usuario" name="usuario" placeholder="Digite seu Usuário">
            </div>
 
            <div class="mt-1 form-group">
                <label for="senha">Senha:</label>
                <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a senha">
            </div>
 
            <div class="mt-2 text-center">
                <button type="submit" class="btn btn-warning">Login</button>
            </div>
            
        </form>
    </div>


           




            </div>
</body>
</html>