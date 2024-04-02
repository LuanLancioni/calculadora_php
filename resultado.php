<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>resposta</title>
</head>
<body class="p-3 mb-2 bg-danger-subtle text-danger-emphasis">
    <div class="container text-center" class="p-3 mb-2 bg-black text-white"">
        <h1> Resultado: </h1>
        <?php
 
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $operacao = $_GET['operacao'];
  
        if($operacao == 'soma'){
            $resultado = $numero1 + $numero2;
            echo "O resultado da soma é: $resultado"; 
        }
        else if($operacao == 'subtracao'){
            $resultado = $numero1 - $numero2;
            echo "O resultado da subtração é: $resultado";
        }
        else if($operacao == 'multiplicacao'){
            $resultado = $numero1 * $numero2;
            echo "O resultado da multiplicação é: $resultado";
        }
        else if($operacao == 'divisao'){
            $resultado = $numero1 / $numero2;
            echo "O resultado da divisão é: $resultado"; 
        }
        ?>
    </div>
</body>
</html>