<?php $title = 'Initial Page'; ?>
<?php $title2 = 'Hello World'; ?>
<?php $title3 = 'I am a PHP Website'; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>My Website - <?php echo $title?></title>
        <?php include './components/head.php'; ?>
</head>

<body>
    <?php include './components/nav-menu.php' ; ?>

    <h3><?php echo $title?></h3>

    <p><?php echo $title2?>,<?php echo $title3?></p>
    <?php include './components/footer.php'; ?>

    <?php include './components/footer.php'; ?>
</body>
</html>
