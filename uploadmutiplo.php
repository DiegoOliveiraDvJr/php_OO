<?php
        if(isset($_POST)){
            $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
            $quantArquivos = count($_FILES['arquivo']['name']);
            $contador = 0;

            while($contador < $quantArquivos){
                $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
                if(in_array($extensao, $formatosPermitidos)){
                    $pasta = "fotos/";
                    chmod ("/fotos/", 0777);
                    $arquivo_temp = $_FILES['arquivo']['tmp_name'][$contador];
                    $novoNome = uniqid().".$extensao";
                    try{
                        move_uploaded_file($arquivo_temp, $pasta.$novoNome);
                        echo 'enviado <br>';
                    }catch(Exception $e){

                    }
                    
                }

                $contador++;
            }


        }


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form method="POST" action="uploadmutiplo.php" id="formDoc2" enctype="multipart/form-data">
        <input type="file" accept="image/*" class="form-control" id="arquivo" name="arquivo[]" multiple required>
        <button type="submit">enviar</button>
    </form>
    
</body>
</html>