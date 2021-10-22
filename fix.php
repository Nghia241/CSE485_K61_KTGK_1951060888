<?php
    $id=$_POST['id'];
    $license = $_POST['license_no'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $ctype = $_POST['ctype'];
    $drate = $_POST['drate'];
    $wrate = $_POST['wrate'];
    $status = $_POST['status'];
    include "../config.php";   
    $sql = "UPDATE cars SET license_no = '$license', model = '$model', year = '$year', ctype = '$ctype', drate = '$drate', wrate = '$wrate' , status = '$status' WHERE vehicle_id ='$id'";
    $result = mysqli_query($conn, $sql);
    if($result >0){
        header('Location: index.php');
    }else{
        header('Location: error.php');
    }   
    mysqli_close($conn);
   
?>