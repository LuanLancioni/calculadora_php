<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>index</title>
</head>
<body class="p-3 mb-2 bg-danger-subtle text-danger-emphasis">
    <div class="container">
        <h1 class="container text-center">Calculadora</h1>
        <form method="get" action="resultado.php">
            <div class="form-group">
                <label for="numero1"> Número 1: </label>
                <input type="number" class="form-control" id="numero1" name="numero1" required>
            </div>
            <br/>
            <div class="form-group">
                <label for="numero2"> Número 2: </label>
                <input type="number" class="form-control" id="numero2" name="numero2" required>
            </div>
            <br/>
            <div class="form-group">
                <label for"operacao"> Operação: </label>
                <select class="form-control" id="operacao" name="operacao" required>
                    <option value="soma"> Soma </option>
                    <option value="subtracao"> Subtração </option>
                    <option value="multiplicacao"> Multiplicação </option>
                    <option value="divisao"> Divisão </option>
                </select>
            </div>
            <br/>
            <div class="container text-center">
            <button type="submit" class="btn btn-danger">Calcular</button>
            </div>
        </form>
    </div>
</body>
</html>