<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo POST</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>        
        <?php
            require './classes/AutoLoad.php';

            $param1 = Request::post('param1');
            echo $param1[0]." - ".$param1[1]."<br/>";

            $param2 = Request::post('param2');
            echo "<br/>número de valores: ".count($param2)."<br/>";
            foreach($param2 as $id => $value){
                echo $id." => ".$value."<br/>";
            }
        ?>
    </body>
</html>