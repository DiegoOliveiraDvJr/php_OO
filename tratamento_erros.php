<?php


    try {

        echo '<h3>Try</h3>';

        $sql = 'select * from cliente';
        //mysql_query($sql);//erro
        if(!file_exists('require_arquivo_a.php')){
            throw new Error('O arquivo em questão devia estar disponiel as '.date("d/m/Y").' horas  mas não estava');
        }
    }catch(Error $e){
        echo '<h3>catch error</h3>';
        echo '<p style="color:red;">'.$e.'</p>';
    }catch(Exception $e){
        echo '<h3>catch Exception</h3>';
        echo '<p style="color:red;">'.$e.'</p>';
    }
    