<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de paciente</title>
    </head>
    <body>

        <h1>Inclusão médico</h1>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                Include('conexao.php');

                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $numero = $_POST['numero'];
                $complemento = $_POST['complemento'];
                $bairro = $_POST['bairro'];
                $cidade = $_POST['cidade'];
                $estado = $_POST['estado'];
                $cpf = $_POST['cpf'];
                $rg = $_POST['rg'];
                $telefone = $_POST['telefone'];
                $celular = $_POST['celular'];
                $email = $_POST['email'];

                $query = "INSERT INTO paciente (nome, endereco, numero, complemento, bairro, cidade, estado, cpf, rg, telefone, celular, email)
                VALUES ('$nome', '$endereco', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$cpf', '$rg', '$telefone', '$celular', '$email')";

                $resu = mysqli_query($con, $query);

                if (mysqli_insert_id($con)) {
                    echo "Include realizado com sucesso";
                } else {
                    echo "ERRO ao inserir os dados: ".mysqli_connect_error();
                }

                mysqli_close($con);                

            }
        ?>
        
        <form method="post">
            <label> Nome: </label>
            <input type="text" name="nome" maxlength="100" required>
            
            <br>
            <label> Endereço: </label>
            <input type="text" name="endereco" maxlength="100" required>

            <br>
            <label> Numero: </label>
            <input type="number" name="numero" maxlength="10" required>

            <br>
            <label> Complemento: </label>
            <input type="text" name="complemento" maxlength="50">

            <br>
            <label> Bairro: </label>
            <input type="text" name="bairro" maxlength="50" required>

            <br>
            <label> Cidade: </label>
            <input type="text" name="cidade" maxlength="50" required>

            <br>
            <label> Estado: </label>
            <select name="estado">
                <option value="sp"> São Paulo </option>
                <option value="mg"> Minas Gerais </option>
                <option value="pr"> Paraná </option>
                <option value="rj"> Rio de Janeiro </option>
            </select>

            <br>
            <label> CPF: </label>
            <input type="text" name="cpf" maxlength="11" required>

            <br>
            <label> RG: </label>
            <input type="" name="rg" maxlength="9" required>

            <br>
            <label> Telefone: </label>
            <input type="text" name="telefone" maxlength="15">

            <br>
            <label> Celular: </label>
            <input type="text" name="celular" maxlength="15">

            <br>
            <label> E-mail: </label>
            <input type="text" name="email" maxlength="100" required>

            <br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </form>

    </body>
</html>