<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div class="container">

       
        <?php
         $nom = $_GET ["nom"];
         $ape = $_GET ["ape"];
         $q1_answer = $_GET["q1"];
         $q2_answer = $_GET["q2"];
         $q3_answer = $_GET["q3"];
         $q4_answer = $_GET["q4"];
         $q5_answer = $_GET["q5"];
         $q6_answer = $_GET["q6"];
         $q7_answer = $_GET["q7"];
         $q8_answer = $_GET["q8"];
         $q9_answer = $_GET["q9"];
         $q10_answer = $_GET["q10"];
            
            $correct_answers = 0;
            $incorectas = 0;
            if ($q1_answer == "a") {
                $correct_answers++;
            }
            
                else 
            {
            $incorectas++;
             }
            
            if ($q2_answer == "c") {
                $correct_answers++;
            }
            else 
            {
            $incorectas++;
             }
            
            if ($q3_answer == "b") {
                $correct_answers++;
            }
            else 
            {
            $incorectas++;
             }
            
            if ($q4_answer == "b") {
                $correct_answers++;
            }
            else 
            {
            $incorectas++;
             }
            if ($q5_answer == "a") {
                $correct_answers++;
            }
            else 
            {
            $incorectas++;
             }
            
            if ($q6_answer == "c") {
                $correct_answers++;
            }
            else 
            {
            $incorectas++;
             }
            if ($q7_answer == "a") {
                $correct_answers++;
            }
            else 
            {
            $incorectas++;
             }
            
            if ($q8_answer == "b") {
                $correct_answers++;
            }
            else 
            {
            $incorectas++;
             }
            if ($q9_answer == "a") {
                $correct_answers++;
            }
            else 
            {
            $incorectas++;
             }
            
            if ($q10_answer == "c") {
                $correct_answers++;
            }
            
                else 
                {
                $incorectas++;
                 }

            echo "Hola"." ". $nom. " " .$ape. " ". "tu resultado en la trivia fue de: ". "<br> <br>"; 
            echo "<p>". $correct_answers. " ". "Respuestas correctas: ". "</p>";
            echo "<p>". $incorectas. " ". "Respuestas incorrectas: ". "</p>";
            echo "<p> obtuviste un". " ". $correct_answers."/10". "</p>" 
            

        ?>
        <a href="index.html">Volver a jugar</a>
    </div>
</body>
</html>
