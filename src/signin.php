<?php 
    include('../config/database.php');

    $email = $_POST['e_mail'];
    $passw = $_POST['p_sswd']; 

        $sql ="
        SELECT id,email,password,
count(id) as total
from users 
WHERE 
	email= '$email' and
	password = '$passw' and
	status = true
	group by id;
    ";

    $res = pg_query($conn, $sql);

    if($res){
        $row = pg_fetch_assoc($res);
        if($row['total']>0){
            echo "Login Ok";
        }else{
             echo "Login failed";
            }
        }
    
?>