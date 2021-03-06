<?php
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

?>
 
       <?php   
            if(empty($_SESSION['cart']) == true)
            {
                return;
            }               
            echo "<div class='row'>";
            echo "<div class='col-md-9 col-md-offset-1'>";
            $grandTotal = 0;
                foreach($_SESSION['cart'] as $key => $value)
                {
                    if(empty($removeButtonNotRequired) == true){
                    echo "<button type='button' class='btn btn-primary' id='remove-from-cart' value='$key'>Remove</button>&nbsp;&nbsp;";
                    }
                    echo "<strong>{$_SESSION['cart'][$key][19]}</strong><br>";
                    echo "{$_SESSION['cart'][$key][0]}, {$_SESSION['cart'][$key][1]}<br><br>";
                    echo "<table class='table table-striped table-hover table-bordered'>";
                    $ticketDetails = array();
                    
                    // get all data
                    for($count = 2; $count <= 16; $count = $count + 2)
                    {
                         addToArray($ticketDetails, $key, $count);
                    }
                   
                    $headers = array_keys($ticketDetails[0]);
                    echo "<tr>";
                    foreach ($headers as $header)
                    {
                        echo "<th>$header</th>";
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
                    
                    $grandTotal += $_SESSION['cart'][$key][18];
                }   
                ?>
                <br><br>
                <div id='customer-info'>                    
                </div>
                <div class="btn-group">
                    <?php
                    if(empty($removeButtonNotRequired) == true)
                    {
                    echo "<button type='button' class='btn btn-primary' id='empty-cart'>Empty Cart</button>";                    
                    echo "<a href='./finalcheckout.php' type='button' class='btn btn-primary' id='check-out'>Check Out</a>";
                   
                    }
                    
                    if(empty($showGrandTotal) == false)
                    {
                       echo "<a href='./print_page.php'><button class='btn btn-primary'>Confirm and Print</button></a>";
                    }
                    ?>
                    
                </div> 
                </div>
</div>          
  <form id="form1">
  <h3>Enter Code</h3>
    <p>
    <input type='text' name='code' id='code' value='12345-67890-TK'/>
    
    <?php if(isset($_SESSION['voucher'])): ?>  

    <span>20% off</span>

  <?php else: ?>

    <button class="check_voucher" id = "btn">check</button>
  
  <?php endif; ?>

  </p>
  </form>
  <table class="table table-striped table-hover table-bordered">

    <tr>
       <td>Total:</td> 
       <td>Voucher:</td>
       <td>Grand Total:</td>
    </tr>

    <tr>
      <td>$<span>
        <?php 
           if(isset($_SESSION['total']))
        
            { echo $_SESSION['total'];}; 

        ?></span></td>
      <td><span id="voucher"><?php if(isset($_SESSION['voucher'])){ echo "20% off";}; ?></span></td>
      <td>$<span id="grand_total"><?php if(isset($_SESSION['grand_total'])){ echo $_SESSION['grand_total'];}; ?></span></td>
    </tr>

  </table>