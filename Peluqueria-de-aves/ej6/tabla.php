<?php

    function imprimirTabla($num){
        $CantCol = $num;
        if($CantCol<1 or $CantCol > 50){
        echo("Valor Incorrecto, por favor ingresa uno entre 1 y 50");
        }else{
            echo("<table border=2>");
            for ($i=1; $i<=$CantCol; $i++) { 
            echo("<tr>");
                for ($j=1; $j <= $CantCol ; $j++) { 
                    
                    echo("<td>".$i*$j."</td>");
                }
            echo("</tr>");
                
            }
            echo("</table>");
        }
    }