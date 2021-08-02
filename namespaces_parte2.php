<?php

    require './bibliotecas/lib1/lib1.php';
    require './bibliotecas/lib2/lib2.php';

    use A\CLiente as C1;
    use B\CLiente as C2;

    $c = new C1();

    print_r($c);

    echo $c->__get('nome');

    $c = new C2();

    print_r($c);

    echo $c->__get('nome');
