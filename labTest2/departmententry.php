<!DOCTYPE html>
<html>
    <head>
       
        <title>Create Shop</title>
        
    </head>
    
    
    <body>
    <div id="main">
        <h3>Create a Shop</h3>
        <form action="departmententry.php" method ="POST">
            <table>
                <tr>
                   <td>Code</td>
                    <td><input type ="text" name ="codeText"></td>
                </tr>
                
                 <tr>
                    <td>Name</td>
                    <td><input type ="text" name ="nameText"></td>
                    <td><input type="submit" value ="Create" name = 'create'></td>
                </tr>
            </table>
        </form>
        
        <?php
        {
            require 'department.php';
            session_start();
            if (isset($_POST['create']))
            {
                $department = new Department($_POST['codeText'], $_POST['nameText']);
                $_SESSION['department'] = $department;
                echo 'Shop created successfully!';
                echo '<br/>';
                echo "<a href='productentry.php'>Enter Product Now</a>";
                
            }
        }
        ?>
</div>
</body>
</html>