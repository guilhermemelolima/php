<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de especialidades médicas</title>
</head>
<body>
    <h1>Inclusão</h1>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            include('conexao.php');
        
            $nome = $_POST["nome"];
            $sigla = $_POST["sigla"];

            $query = "INSERT INTO especialidade (descricao, sigla) VALUES('$nome', '$sigla')";

            $resu = mysqli_query($con, $query);

            if(mysqli_insert_id($con)){
                echo "Inclusão realizada com sucesso !!";
            }
            else{
                echo "Erro ao inserir os dados :".mysqli_connect_error();
            }

            mysqli_close($con);
        }
        
    ?>

<form method="post">
    <br>
    <label for="">Descrição da especialidade</label>
    <br>
    <input type="text" name="nome" size="100" maxlength="100" required>
    <br><br>
    <label for="">Sigla da especialidade</label>
    <br>
    <input type="text" name="sigla" size="3" maxlength="3" required>
    <br><br>

    <input type="submit" value="Enviar">
    <input type="reset" value="Limpar">

</form>
    
</body>
</html>