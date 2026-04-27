
<?php
// db.php
$host = 'localhost';
$db_name   = 'dhirajco_dhiraj298167';
$user = 'dhirajco';
$pass = 'Dhiraj@123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8mb4", $user, $pass);
        // This tells PHP to stop immediately if a connection error occurs
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                // This will print the EXACT error (e.g., Access Denied, DB not found)
                    die("CRITICAL CONNECTION ERROR: " . $e->getMessage());
                    }
                    ?>

