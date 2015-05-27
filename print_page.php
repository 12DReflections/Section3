
<html>
	<head>
		<title>
			The Movie Ticket Print
		</title>	
        <?php
             include "./head.php";
        ?>
	</head>
	<body>
		<?php

        session_start();
function addToArray(&$array, $key, $index){
    
    if($_SESSION['cart'][$key][$index] == 0)
    {
        return;
    }

    $ticketType = '';
    switch($index)
    {
        case 2: $ticketType = 'Standard Adult';
            break;
        case 4: $ticketType = 'Standard Pension';
            break;
        case 6: $ticketType = 'Standard Child';
            break;
        case 8: $ticketType = 'First Class Adult';
            break;
        case 10: $ticketType = 'First Class Child';
            break;
        case 12: $ticketType = 'BeanBag-1';
            break;
        case 14: $ticketType = 'BeanBag-2';
            break;
        case 16: $ticketType = 'BeanBag-3';
            break;
    }  
    
    $ticketTypeCount = count($array);
    
    $array[$ticketTypeCount] = array(
                            'Ticket Type' => $ticketType,
                            'Qty' => $_SESSION['cart'][$key][$index],
                            'Cost' => '$' . $_SESSION['cart'][$key][$index+1] / $_SESSION['cart'][$key][$index],                            
                            'SubTotal' => '$' . $_SESSION['cart'][$key][$index+1],
                        );
}
    if(empty($_SESSION)==true)
    {
        print_r($_SESSION);
        return;
    }
    ?>
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php
	 foreach($_SESSION['cart'] as $key => $value)
                {
                    
                    echo "<table class='table table-striped'>";
                    $ticketDetails = array();
                   
                    // get all data
                    for($count = 2; $count <= 16; $count = $count + 2)
                    {
                         addToArray($ticketDetails, $key, $count);
                    }
                    $headers = array_keys($ticketDetails[0]);
                    echo "<tr>";
                    echo "<th colspan='2'>";
                    echo "Your Name:</th>";
                    echo "<th colspan='2'>";
                    echo $_SESSION['username'];
                    echo "</th>";
                    echo "</tr>";
                    echo "<tr>";
                     echo "<th colspan='2'>";
                     echo "Date:";
                     echo "</th>";
                     echo "<th colspan='2'>";
	                    echo "{$_SESSION['cart'][$key][0]}, {$_SESSION['cart'][$key][1]}<br><br>";
	                    echo "</th>";
					echo "<tr>";
	                 echo "<th colspan='2'>";
                     echo "Your Email:</th>";
                     echo "<th colspan='2'>";
	                 echo $_SESSION['email_addr'];
                     echo "</th>";

	                 echo "</th>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<th colspan='2'>";
                    echo "Your Phone Number:";
                    echo "<th colspan='2'>";
                   	echo $_SESSION['phone_num'];
                    echo "</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th colspan='2'>";
                    echo "Your Address:";
                    echo "</th>";
                    echo "<th colspan='2'>";
                    echo $_SESSION['addr'];
                    echo "</th>";
                    echo "</tr>";
                    echo "<tr>";
                   	echo "<th colspan='4'>";
                    echo "<h>Movie Name:</h>";
                   	echo "<strong>{$_SESSION['cart'][$key][19]}</strong><br>";
                   	echo "</th>";
                    echo "</tr>";
                    echo "<tr>";
                    foreach ($headers as $header)
                    {
                        echo "<th style='text-align:center;'>$header</th>";
                    }
                    echo "</tr>";

                    foreach ($ticketDetails as $ticket)
                    {
                        echo "<tr>";
                        foreach($ticket as $k => $v)
                        {
                             echo "<td>$v</td>";
                        }
                        echo "</tr>";
                    }
                     echo "<tr><td colspan='2'></td><th>Total</th><th>\${$_SESSION['cart'][$key][18]}</th></tr>";
                    echo "</table>";   
                    echo "<br>";
                    echo "<br>";
                }
                echo "<a href='./index.php'><button class='btn btn-primary'>Back</button></a>";
                echo "</div>";
                echo "</div>";
                session_destroy();

?>      

	</body>
</html>