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
                <form role='form' action='./bookingreceipt.php' method="post">
                    <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" name='name' class="form-control" id="name" required>
                   </div>
                    
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name='email' class="form-control" id="email" required>
                  </div>
                    
                   <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" name='phone' id="phone" required pattern="^((61|\+61)?\s?)04[0-9]{2}\s?([0-9]{3}\s?[0-9]{3}|[0-9]{2}\s?[0-9]{2}\s?[0-9]{2})$">
                  </div>
                    
                  <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name='address' class="form-control" id="address">
                  </div>
                    
                  <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
                <hr>
                <?php  
                $removeButtonNotRequired = true;
                include_once './populatecart.php';?>
            </main>
        </div>
        <footer><?php include './footer.php'; ?></footer>
    </div>  
</body>
</HTML>