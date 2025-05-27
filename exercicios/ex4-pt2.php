<html>
    <body>
        <?php
        $p = $_GET["preco"];
        $total = (($p * 16) / 100)+$p;
        $parcela = $total / 10;
        echo "O valor total é: ";
        echo $total;
        echo "valor total das parcelas: ";
        echo $parcela;
        ?>
    </body>
</html>