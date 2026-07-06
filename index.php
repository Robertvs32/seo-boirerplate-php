<?php
    $titulo = "Nutricionista esportivo em Guarulhos";
    $descricao = "aaaaaaaa";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $descricao?>">
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="./global.css">
</head>
<body>
    
    <?php include('./includes/navbar/navbar.php')?>
    <?php include('./includes/hero/hero.php')?>
    <?php include('./includes/sobre/sobre.php')?>
    <?php include('./includes/depoimentos/depoimentos.php')?>
    <?php include('./includes/servicos/servicos.php')?>
    <?php include('./includes/features/features.php')?>
    <?php include('./includes/processos/processos.php')?>
    <?php include('./includes/fotosGrid/fotosGrid.php')?>
    <?php include('./includes/faq/faq.php')?>
    <?php include('./includes/localizacao/localizacao.php')?>
    <?php include('./includes/footer/footer.php')?>
    <?php include('./includes/whatsapp/whatsapp.php')?>
    

</body>
</html>