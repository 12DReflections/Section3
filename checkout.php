<!doctype html>
<?php 
session_start();
?>

<HTML>
    <head>
        <title>Main Page</title>
        <?php include './head.php'; ?>
    </head>
    <body>
        <div class="container">
            <?php include './header.php'; ?>
            <?php include './navbar.php'; ?>
            <br><br><br>
            <main id='main-area'>
                <?php  include_once './populatecart.php';?>

            </main>
        </div>
        <footer><?php include './footer.php'; ?></footer>
    </div>  
</body>
</HTML>