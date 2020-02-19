<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FORMULARIO DE CADASTRO</title>
  </head>
  <body>
    <h1>CADASTRO REALIZADO COM SUCESSO</h1>
    <?php
      $primeiro_nome = $_POST['nome'];
      $so_brenome = $_POST['sobrenome'];
      $ano_nascimento = $_POST['anonascimento'];
      $ge_nero = $_POST['genero'];
      $en_dereco = $_POST['endereco'];
      $ba_irro = $_POST['bairro'];
      $es_tado = $_POST['estado'];
      $tele = $_POST['telefone'];
      $e_mail = $_POST['email'];
      /*
      FUNÇÃO mysqli_connect-->conecta-se ao banco de dados MYSQL usando as informações
      adequadas. Localozação do banco, login do usuário, senha e o nome da base de dados
      */
      $bd = mysqli_connect('localhost', 'root', '','cadastro_pessoas')
      or die('Erro ao conectar o servidor MYQL');
      $query="INSERT INTO cadastros(primeiro_nome, so_brenome, ano_nascimento,
        ge_nero, en_dereco, ba_irro, es_tado, tele, e_mail)
        VALUES('$primeiro_nome', '$so_brenome', '$ano_nascimento', '$ge_nero',
        '$en_dereco', '$ba_irro', '$es_tado', '$tele', '$e_mail')";
        /*FUNÇÃO mysqli_query-->Emite uma instrução (query) a um banco de dados MYSQL,
        o que, frequentemente, envolve armazenar ou obter dados de uma tabela*/
        $result = mysqli_query($bd, $query)
        or die('erro requisição ao banco de daddos');
        /*FUNÇÃO mysqli_close-->Encerra uma conexão com o banco de dados*/
      mysqli_close($bd);

      echo 'Obrigado por fazer o cadastro.<br/>';
      echo 'Meu nome é: '.$primeiro_nome.'<br/>';
      echo 'meu sobrenome é: '.$so_brenome.'<br/>';
      echo 'Data de nascimento: '.$ano_nascimento.'<br/>';
      echo 'Genero: '.$ge_nero.'<br/>';
      echo 'Endereço: '.$en_dereco.'<br/>';
      echo 'Bairro: '.$ba_irro.'<br/>';
      echo 'Estado: '.$es_tado.'<br/>';
      echo 'Telefone: '.$tele.'<br/>';
      echo 'E-mail: '.$e_mail.'<br>';



    ?>
    </body>
</html>
