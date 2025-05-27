<html>
    <body>
    <?php 
        echo "O Consumo médio do seu carro foi: ";
        $distancia = $_GET["Km"];
        $gaso = $_GET["litros"];
        $resultado = $distancia / $gaso;
        echo $resultado ;
    ?>
    </body>
</html>