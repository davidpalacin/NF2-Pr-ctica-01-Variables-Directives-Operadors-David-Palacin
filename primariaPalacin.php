<?php
    session_start();
    
    //Check user permission
    if ($_SESSION['authuser'] != 1){
        echo "Lo siento no puedes entrar!";
        exit();     
    }
?>

<?php
    echo "Bienvenido a la web, ";
    echo $_COOKIE["username"];
    echo "! <br/>";
?>

<html>
    <head><title>Mi página de php!</title></head>
    <body>
    
    <?php
    
        //Esta parte es para usar el GET
        define ("FAVANIMAL", "gato");
        define ("nUSUARIO", "david");
        echo "Mi animal favorito es el ";
        echo FAVANIMAL;
        echo '<br/>';
        
        echo "Repito que mi animal favorito es el ";
        echo $_GET['FAVANIMAL'];
        echo "<br>";
    
    ?>
    
    <?php
    
        //Para usar los NULL
        $nombre_usuario = $_GET['nUSUARIO'] ?? 'nadie';
        echo $nombre_usuario;

    ?>
    
    <?php
    
    //Esta parte es para usar el urlencode
        echo "Mi peli favorita es ";
        echo $_GET['favmovie'];
        echo "<br>";
        $movierate = 7;
        echo "Mi nota para esta peli es: ";
        echo $movierate;
    ?>
    
    <?php
    
        $_POST["nombre"];
        $_POST["pass"];
        $_POST["robot"];
    
    ?>
    
    <form method="post" action="secundariaPalacin.php">
       <p>Nombre de usuario: 
        <input type="text" name="nombre"/>
       </p>
       <p>Mete la contraseña: 
        <input type="password" name="pass"/>
       </p>
       <p>Eres un robot?: 
        <input type="text" name="robot"/>
       </p>
       <p>
        <input type="submit" name="submit" value="Submit"/>
       </p>
    </form>
    
    <?php
    
        //Aquí solo pruebo el POST
        $_POST["prueba"] = "david";
        if($_POST["prueba"] == "david"){
            echo ("<p>Hola " . $_POST["prueba"] . "</p>");}else{
            echo "<p>";
            echo "Tu nombre no es david! ";
            echo "</p>";
        }
    
    ?>
    
    <?php
    
        $_POST["nombreTabla"]= "Mapache";
        $_POST["apellidoTabla"]= "García";
        //Esto es para usar el POST en una tabla
        echo "<table style='font-family: Arial, Arial; font-size: 100%;";
        echo "width: 50%;'>";
        echo "<tr>";
        echo "<td style='width: 25%;'>";
        echo "First Name:";
        echo "</td >";
        echo "<td style='width: 25%'>";
        echo $_POST["nombreTabla"];
        echo "</td>";
        echo "<td style='width: 25%;'>";
        echo "Last Name:";
        echo "</td >";
        echo "<td style='width: 25%'>";
        echo $_POST["apellidoTabla"];
        echo "</td>";
        echo "</tr>";
        echo "</table > ";
    
    ?>
    
    <?php
    
        //Esto dice los días del mes actual al final de la página
        date_default_timezone_set('America/New_York');
        $mes = date('n');
        if ($mes ==  1) { echo '31'; }
        if ($mes ==  2) { echo '28'; }
        if ($mes ==  3) { echo '31'; }
        if ($mes ==  4) { echo '30'; }
        if ($mes ==  5) { echo '31'; }
        if ($mes ==  6) { echo '30'; }
        if ($mes ==  7) { echo '31'; }
        if ($mes ==  8) { echo '31'; }
        if ($mes ==  9) { echo '30'; }
        if ($mes == 10) { echo '31'; }
        if ($mes == 11) { echo '30'; }
        if ($mes == 12) { echo '31'; }
        
    ?>
    
    </body>
</html> 



