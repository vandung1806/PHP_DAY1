<?php
    header('Content-type: text/plain');
    $name = "William";
    $str = '$name is displayed.\\n';
    echo ($name);
    echo ($str);
    $str = "$name is displayed\n". "Goobye.";
    echo ($str);
?>