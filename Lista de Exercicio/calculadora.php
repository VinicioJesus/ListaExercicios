<?php 
	$valor1 = (double) 0;
	$valor2 = (double) 0;
	$resultado = (double) 0;
	$opcao = (string) null;

	function operacaoMatematica ($numero1, $numero2, $operacao)
	{
		$num1 = (double) $numero1;
		$num2 = (double) $numero2;
		$result = (double) 0;
		$tipoCalculo = (string) $operacao;

		switch ($tipoCalculo)
			{
				case "SOMAR":
					$result = $num1 + $num2;
					break;
				case "SUBTRAIR":
					$result = $num1 - $num2;
					break;
				case "MULTIPLICAR":
					$result = $num1 * $num2;
					break;
				case "DIVIDIR":
					if($num2 == 0)
						echo('<script> alert("Não é possível realizar divisão, onde o valor 2 é igual a 0!"); </script>');
					else
						$result = $num2 / $num2;

					break;				
			}

			$result = round($result, 2);
		
		return $result;
	}

	if(isset($_POST['btncalc']))
	{
		$valor1 = $_POST['txtn1'];
		$valor2 = $_POST['txtn2'];
		
		if($_POST['txtn1'] == "" || $_POST['txtn2'] == "" )
			echo('<script> alert("Favor preencher todas as caixas!"); </script>');
		else
		{
			if(!isset($_POST['rdocalc']))
				echo('<script> alert("Favor escolher uma operação válida"); </script>');
			else
			{
				if(!is_numeric($valor1) || !is_numeric($valor2))
					echo('<script> alert("Não é possível realizar calculos de dados não numericos!"); </script>');
				else
				{
					$opcao = strtoupper($_POST['rdocalc']);

					$resultado = operacaoMatematica($valor1, $valor2, $opcao);					
				}
			}
		}
	}


?>
<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="calculadora_simples.php">
                    Valor 1:<input type="text" name="txtn1" value="<?=$valor1;?>" > <br>
                    Valor 2:<input type="text" name="txtn2" value="<?=$valor2;?>" > <br>
                    <div id="container_opcoes">
                        <input type="radio" name="rdocalc" value="somar" <?=$opcao == 'SOMAR'?'checked':null;?> >Somar <br>
                        <input type="radio" name="rdocalc" value="subtrair" <?=$opcao == 'SUBTRAIR'?'checked':null;?> >Subtrair <br>
                        <input type="radio" name="rdocalc" value="multiplicar" <?=$opcao == 'MULTIPLICAR'?'checked':null;?> >Multiplicar <br>
                        <input type="radio" name="rdocalc" value="dividir" <?=$opcao == 'DIVIDIR'?'checked':null;?>>Dividir <br>
                        
                        <input type="submit" name="btncalc" value ="Calcular" >
                        
					</div>	
					<div id="resultado">
					<?=$resultado;?>
					</div>
						
				</form>

            </div>
           
        </div>        
		
	</body>

</html>

