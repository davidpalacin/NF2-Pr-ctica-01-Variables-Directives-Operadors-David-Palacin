<?php 
    session_start();
    setcookie("username","david",time()+60);
    $_SESSION['username'] = "david";
    $_SESSION['lastname'] = "palacin";
    $_SESSION['authuser'] = 1;
?>
<html>
 <head>
  <title>Encuentra mi animal favorito!</title>
 </head>
 <body>
 
<?php
    //Esta parte es para usar el GET
    echo "<a href='primariaPalacin.php?FAVANIMAL=gato'>";
    echo "Clica para saber cuál es mi animal favorito!!";
    echo "</a>";
    echo "<br>";
    
    //Esta parte es para usar el POST
    echo "En el formulario, has dicho que te llamas " . $_POST["nombre"];
    echo "<br>";
    echo "Tu contraseña es " . $_POST["pass"];
    echo "<br>";
    echo "A la pregunta de eres un robot, has dicho que " . $_POST["robot"];
    echo "<br>"

?>

<?php
    //Esta parte es para usar urlencode
    $myfavmovie = urlencode("Avatar");
    echo "<a href='primariaPalacin.php?favmovie=$myfavmovie'>";
    echo "Clica para ver información sobre mi peli favorita!"; 
    echo "</a>";
?>

 </body>
</html>

