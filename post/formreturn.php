<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Your Data:</h1>
        <table width = "100%">
        <?php 
            foreach ($_POST as $key => $value) {
                echo "<tr>";
                echo "<td>";
                echo $key;
                echo "</td>";
                echo "<td>";
                echo $value;
                echo "</td>";
                echo "</tr>";
            }
        ?>
        </table>
    </body>
</html>