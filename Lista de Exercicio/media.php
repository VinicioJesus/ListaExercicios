<?php

$nota1 = (double) 0;
$nota2 = (double) 0;
$nota3 = (double) 0;
$nota4 = (double) 0;
$media = (double) 0;

if(isset($_POST["btnCalc"])){

    $nota1 = $_POST["txtn1"];
    $nota2 = $_POST["txtn2"];
    $nota3 = $_POST["txtn3"];
    $nota4 = $_POST["txtn4"];

// tratamendto de erro para validar caixa vazia
    if ($_POST["txtn1"] == "" || $_POST["txtn2"] == "" || $_POST["txtn3"] == "" || $_POST["txtn4"] == "" ){
        echo('<p class="msgErro"> Verifique se todas as notas foram preenchidas  ¬_¬ </p>');
    }else{

        //Tratamento de erro para caracteres não numericos
        if(!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)){
            echo('<p class="msgErro"> Todos os valores digitados devem se números válidos !!! </p>');

        }else{
            // FAZENDO O CALCULO DA MEDIA
            $media = ($nota1 + $nota2 + $nota3 + $nota4) /4;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Home</title>
  </head>
  <body>
    <header>
      <div class="menuBurger"> <p> BURGAO </p> </div>
    </header>
    <main>
      <p>Menu</p>
      <div class="containerEscolhas">
        <li><a href="">Média</a></li>
        <li><a href="./calculadora.php">Calculadora</a></li>
        <li><a href="">Tabuada</a></li>
        <li><a href="">Par e Impar</a></li>
      </div>
      <div class="containerTelaEscolhida">
        <div class="media">
          <p>Média</p>
        </div>
        <div class="frame">
          <form name="frmMedia" method="post" action="media.php">
            <div>
              <label>Nota 1:</label>
              <input type="text" name="txtn1" value="<?php echo($nota1)?>" />
            </div>

            <div>
              <label>Nota 2:</label>
              <input type="text" name="txtn2" value="<?php echo($nota2)?>" />
            </div>

            <div>
              <label>Nota 3:</label>
              <input type="text" name="txtn3" value="<?php echo($nota3)?>" />
            </div>

            <div>
              <label>Nota 4:</label>
              <input type="text" name="txtn4" value="<?php echo($nota4)?>" />
            </div>
            <div>
              <input type="submit" name="btnCalc" value="Calcular" />
              <div id="botaoReset">
                <a href="media.php"> Novo Cálculo </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>
    <footer></footer>
  </body>
</html>
