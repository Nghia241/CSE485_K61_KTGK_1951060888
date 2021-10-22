<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xe Cho Thuê</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
       h1{
           color : red;
           margin: 1px 300px 1px 450px;
       }
</style>  
<body>
<h1:</h1>
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Mã phương tiện</th>
      <th scope="col">Biển số xe</th>
      <th scope="col">Model</th>
      <th scope="col">Năm sản xuất</th>
      <th scope="col">Kiểu ô tô</th>
      <th scope="col">Giá cho thuê theo ngày</th>
      <th scope="col">Giá cho thuê theo tuần</th>
      <th scope="col">Trạng thái
</th>
    </tr>
  </thead>
  <tbody>
    <style>
a {
width:80px;
height:40px;
margin:20px;
}
 
    </style>
<?php
 $conn=mysqli_connect('localhost','root','','cars');
 if(!$conn)
 die('Kết nối thất bại!!');
 $sql= "SELECT * FROM cars";
 $result= mysqli_query($conn,$sql);
$loai="bình thường";
$trangthai="Tốt";
 
 
 if(mysqli_num_rows($result)>0)
 while($row=mysqli_fetch_assoc($result)){
     if($row['status'] ==3)
       $trangthai="Hư hỏng ";  
 
    if($row['ctype'] ==3)      
    $loai="Bán tải";
echo    '<tr>';
echo    '<th scope="row">'.$row['vehicle_id'].'</th>';
echo     '<td>'.$row['license_no'].'</td>';
echo     '<td>'.$row['model'].'</td>';
echo    '<td>'.$row['year'].'</td>';
echo    '<td>'.$loai.'</td>';
echo    '<td>'.$row['drate'].'</td>';
echo    '<td>'.$row['wrate'].'</td>';
echo    '<td>'.$trangthai.'</td>';
echo  '</tr>';
echo  '</tr>';
 }
?>
  </tbody>
</table>
<?php
echo '<a class="btn btn-primary" href="add.php" role="button">Thêm</a>';
echo '<a style="background:red" class="btn btn" href="delete.php" role="button">Xóa</a>';
echo '<a style="background:green" class="btn btn" href="edit.php" role="button">Sửa</a>';
?>
 
 
 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" c