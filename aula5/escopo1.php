<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de Caso 1</title>
    <script>
        //Variavel Global
        var areaTotal = 0;

        function somaArea(){
            //Variaveis Locais
            var base= 10;
            var altura = 15;
            return (base + altura);
        }

        areaTotal = somaArea();
        //Printar resultado
        console.log(areaTotal);

        //Printar a variavel local (erro)
        console.log(base);
    </script>
</head>
<body>
    
</body>
</html>