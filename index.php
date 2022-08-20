
<?php
         // Comentários em php - linha
        /*

        */

        //echo "Hello World";
        $idade = 21;
        $nome = "Leo";
        $altura = 1.93;
        CONST IDADE = 12;
        
        //Variáveis
        $nota1= 6;
        $nota2=10;
        $media = ($nota1 + $nota2)/2;


        /*if($nota1 >= 6 ){
            echo "aprovado!";
        }
        else if($nota1 > 6 && $nota1 >=2){
            echo "Ainda tem chance";
        
        }*/
        if ($media >=6){
            echo "VOCE FOI APROVADO, SUA MÉDIA FOI $media";
        }
        else if($media < 6){
            echo "REPROVADO";
        }
        /*
        do{
                $contadora ++;
        }while($contadora <10);
        */
        for($i = 0; $i<10; $i++){
            if($i %2 ==0){
                echo "<p>".$i." é par";
            }else{
                echo"<p>".$i." é impar</p>";
            }
        }

?>
