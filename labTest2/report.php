<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Report</title>
        
    </head>
    <body>
        <div id="main">
        <h3>Shop Details</h3><br/>
        <?php
            require_once 'department.php';
            require_once 'product.php';
            session_start();
            /* @var $department Department */
            $department = $_SESSION['department'];
            
            echo 'Shop ID : '.$department->get_code()."<br />";
            echo 'Shop Name : '.$department->get_name()."<br />"."<br />";
                       
            echo "<table>";

            echo "<tr>";
                echo "<td>" . "Product Id" . "</td>";
                echo "<td>" . "Quantity" . "</td>";
            echo "</tr>";

            echo "<tr>";
                foreach ($department->get_product_list() as $a_product) {
                echo "<tr>"."<td>".$a_product->get_product_id()."</td><td>".$a_product->get_product_quantity().'</td>'."</tr>";
                
            }
            echo "</tr>";

            echo "</table>";
                    
        ?>
</div>
</body>
</html>