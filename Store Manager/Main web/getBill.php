<?php
    // Lấy dữ liệu từ yêu cầu POST
$myArray = json_decode($_POST['myArray'], true);

// Xử lý mảng dữ liệu
foreach ($myArray as $item) {
  $name = $item['TenMon'];
  $price = $item['DonGia'];

  // Xử lý dữ liệu ở đây (ví dụ: thêm vào cơ sở dữ liệu, xử lý logic, vv.)

  // Ví dụ: in ra tên và tuổi của mỗi đối tượng
  echo "Name: $name, Age: $price";
}
?>