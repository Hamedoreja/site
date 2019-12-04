<?php
    require_once "shop.php";
    //var_dump($productsMan);
?>

<html>
<head>
    <title>Мужские духи</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/social.css">
    <link rel="stylesheet" href="../css/media.css">
</head>
<body>
    <?php
        require "../blocks/header.php";
        require "../blocks/navigation.php";
    ?>
<main>
    <?php foreach($productsMan as $product) : ?>
    <figure>
        <p><a href="<?php echo $product['page']?>">
                <img src="<?php echo $product['image']?>" alt="<?php echo $product['alt']?>"/></a></p>
        <figcaption>
            <a href="<?php echo $product['page']?>"><?php echo $product['name']?></a>
        </figcaption>
    </figure>
    <?php endforeach; ?>
</main>
    <?php require "../blocks/footer.php" ?>
</body>
</html>