<?php
$currency = '&#36; '; //Currency Character or code

$db_username = 'ka578143';
$db_password = 'DancinG#93';
$db_name = 'ka578143';
$db_host = 'sulley.cah.ucf.edu';

$shipping_cost      = 1.50; //shipping cost
                    
//connect to MySql                      
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);                        
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>