<!DOCTYPE html>
 
<html>
<head>
    <title>mijn website</title>
</head>
<body>
<h1> Wat is je zoekopdracht? </h1>
    <form action="index.php" method="post">
    <input type="text" name="userinput" placeholder="Zoekopdracht">
    <br>
    <input type="submit" name="submit" value="Zoek">
    </form>

       
</body>
</html>
<?php
            if (isset($_POST['submit'])){
              if (!empty ($_POST['userinput'])) {
                 echo "Jouw zoek opdracht is  " . $_POST['userinput'] . "<br>" ;
                 

            } else {
            echo "voer iets in aub";
            }
           
} 
            //opdracht 1 .. je krijgt alleen coole website te zien de rest word niet geprint, xss word met een melding laten.
            //opdracht 2 .. de tweede echo de text "voer iets in aub" word blauw.
            //opdracht 3 .. je moet de input beperken tot alleen letters en cijfers 
        ?>

        