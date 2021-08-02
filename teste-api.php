<?php
session_start();
$get = file_get_contents('http://rcarvalhoconstrutora.ddns.com.br:85/validausuario?CLILOG=07238760533&CLISEN=5102');
$response = simplexml_load_string($get);
$response = json_encode($response);
$response = json_decode($response, 1);

/*echo '<pre>';
var_dump($response['validacaoresultado']);
echo '</pre>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
*/
echo '<pre>';
var_dump($response);
echo '</pre>';


if(isset($response['validacaoresultado']) && $response['validacaoresultado'] === 'OK'){
    echo 'logado';
  //  $_SESSION['CLILOG'] = trim($_POST['CLILOG']);
    //$_SESSION['CLISEN'] = trim($_POST['CLILOG'])
}else{
    echo 'login incorreto';
}


?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    </head>
    <body>
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <h3 selected>SELECIONE O EMPREENDIMENTO</h3>
        <?php
            foreach ($response['listacontratos'] as $key => $listacontratos) {
                echo '<input type="button" value="'.$listacontratos['empreendimento_nome'].'"></button>';
            }
        
        ?>
    </select>

    </body>

</html>
<?php

?>