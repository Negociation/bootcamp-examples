<?php
    //Minha Pagina
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de If/Else (Fluxograma)</title>
    <script>
        alert("A lampada não funciona, vamos te ajudar");
        var pergunta1 = confirm("A lampada estava plugada");
        if(pergunta1 == true){
            var pergunta2 = confirm("O bulbo queimou ?");
            if(pergunta2 == true){
                alert("Trocar o bulbo");
            }else{
                alert("Trocar a lampada");
            }
        }else{
            alert("Plugar a lampada");
        }
    </script>
</head>
<body>
    
</body>
</html>