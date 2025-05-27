<html>
    <body>
        <?php 
        echo "o volume da caixa vai ser: ";   
        $alt = $_GET["altura"]; 
        $larg = $_GET["largura"];
        $comp = $_GET["comprimento"];
        $volume = $comp * $alt * $larg;
        echo $volume;
        ?>
    </body>
</html>