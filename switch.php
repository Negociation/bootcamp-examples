<?php
    //Minha Pagina
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Switch</title>
    <script>
        //Caso queira comparar com inteiro use parseInt
        var digiteNumero = prompt("Digite um numero");
        switch(digiteNumero){
            case "0":
                alert("Digitou 0");
                break;
            case "1":
                alert("Digitou 1");
                break;
            default:
                alert("Não sei o que digitou");
                break;
        }
    </script>
</head>
<body>
    
</body>
</html>