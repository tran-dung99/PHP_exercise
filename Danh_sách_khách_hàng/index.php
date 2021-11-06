<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .bang{
            width: 600px;
            margin: 0;
            padding: 10px;
        }
        h2{
            text-align: center;
        }

        table tr td{
            padding: 20px;
            margin-left: 50px;
        }
    </style>
</head>
<body>
<?php
$customerList = [
    "1" => [
        "ten" => "Mai Văn Hoàn",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Hà nội",
        "anh" => "ảnh mạng.jpg",
    ],
    "2" => [
        "ten" => "Nguyễn Văn Nam",
        "ngaysinh" => "1983-08-21",
        "diachi" => "Bắc Giang",
        "anh" => "ảnh mạng.jpg",
    ],
    "3" => [
        "ten" => "Nguyễn Thái Hòa",
        "ngaysinh" => "1983-08-22",
        "diachi" => "Nam Định",
        "anh" => "ảnh mạng.jpg",
    ],
    "4" => [
        "ten" => "Trần Đăng Khoa",
        "ngaysinh" => "1983-08-23",
        "diachi" => "Hà Tây",
        "anh" => "ảnh mạng.jpg",
    ],
    "5" => [
        "ten" => "Nguyễn Đình Thi",
        "ngaysinh" => "1983-08-17",
        "diachi" => "Hà Nội",
        "anh" => "ảnh mạng.jpg",
    ]
];
?>
<table class="bang">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ( $customerList as $key => $value): ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value['ten']?></td>
        <td><?php echo $value['ngaysinh']?></td>
        <td><?php echo $value['diachi']?></td>
        <td><img src="<?php echo $value['anh']?>" alt="" width="50px"></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>




