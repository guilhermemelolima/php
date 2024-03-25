<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de médicos</title>
    </head>
    <body>
        <h1>Inclusão</h1>

        <?php
            // verifica se o formulário foi enviado
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                // realiza a conexão
                include('conexao.php');
                
                // pega os dados do formulário
                $nome = $_POST['nome'];
                $cpf = $_POST['cpf'];
                $endereco = $_POST['endereco'];
                $numero = $_POST['numero'];
                $bairro = $_POST['bairro'];
                $cidade = $_POST['cidade'];
                $estado = $_POST['estado'];
                $crm = $_POST['crm'];
                $salario = $_POST['salario'];
                $celular = $_POST['celular'];
                $codEsp = $_POST['codEsp'];
 
                // prepara o insert dos dados
                $query = "INSERT INTO  medico (nome, cpf, endereco, numero, bairro, cidade, estado, crm, salario, celular,cod_esp) 
                VALUES ('$nome','$cpf','$endereco','$numero','$bairro','$cidade','$estado','$crm','$salario','$celular','$codEsp')";
                                
                // executa o insert
                $resu = mysqli_query($con,$query);

                // verifica se o insert foi realizado
                if (mysqli_insert_id($con)) {
                    echo "Include realizado com sucesso";
                }else {
                    echo "ERRO ao inserir os dados: ".mysqli_connect_error();
                }

                // fecha a conexão com o banco
                mysqli_close($con);

            }
        ?>

        <form method="post">
            <label> Nome: </label> 
            <input type="text" size="80" maxlength="100" name="nome" required>
            
            <br>
            <label> CPF: </label> 
            <input type="text" size="11" maxlength="11" name="cpf" required>
            
            <br>
            <label> Endereco: </label> 
            <input type="text" size="80" maxlength="100" name="endereco" required>
            
            <br>
            <label> Número: </label> 
            <input type="number" maxlength="100" name="numero" >
            
            <br>
            <label> Bairro: </label> 
            <input type="text" size="60" maxlength="60" name="bairro" required>

            <br>
            <label> Cidade: </label> 
            <input type="text" size="40" maxlength="80" name="cidade" required>

            <br>
            <label> Estado: </label>
            <select name="estado">
                <option value="sp"> São Paulo </option>
                <option value="mg"> Minas Gerais </option>
                <option value="pr"> Paraná </option>
                <option value="rj"> Rio de Janeiro </option>
            </select>

            <br>
            <label> CRM no.: </label>
            <input type="text" size="20" maxlength="20" name="crm" required>

            <br>
            <label> Salário: </label>
            <input type="number" min="0" maxlength="30000" step="100" name="salario" required>

            <br>
            <label> Celular: </label>
            <input type="tel" name="celular" maxlength="15" placeholder="(--) 9 0000-0000">

            <br>
            <label> Especialidade: </label>
            <select name="codEsp">
                <?php
                    include("conexao.php");
                    
                    $query = 'SELECT * FROM especialidade ORDER BY descricao;';

                    $resu = mysqli_query($con, $query) or die (mysqli_connect_error());

                    while ($reg = mysqli_fetch_array($resu)){
                ?>
                <option value="<?php echo $reg['id']; ?>">
                    <?php echo $reg['descricao']; ?>
                </option>
                <?php
                    }
                    mysqli_close($con);
                ?>
            </select>
            
            <br>
            <input type="submit" value="env">
            <input type="reset" value="limp">

        </form>
        
    </body>
</html>