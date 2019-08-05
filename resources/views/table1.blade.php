<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .all{
            display:flex;
            width:100%;
        }
        .left{
            width:15%;
            height:200px;
           
        }
        .right{
            width:85%;
          
            
        }
        .nav
        {
            background:#00a0a0;
            margin-bottom:30px;
           
        }
        .nav a
        {
            color:white;
        }
        .title
        {
            text-align:left;
            
        }
        h5
        {
            text-transform:uppercase;
        }
        .box1
        {
            width:100%;
            height:100px;
            background:red;
        }
        @media only screen and (max-width: 480px){
        .right{
            width:70%;
        }
        .header{
            width:100%;
        }
}
       
    </style>
</head>
<body>
<div class="header">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
<div>
<div class="container-fluid text-center">
    <div class="all">
    <div class="left">
    <h6 class="title">Thiết lập giờ phát sóng</h6>
    </div>
        <div class="right">
            <h5 class="title">Thiết lập giờ phát sóng</h5>
            <table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên chương trình</th>
        <th>Ảnh</th>
        <th>Bắn noti</th>
        <th>Giờ phát</th>
        <th>Giờ kết thúc</th>
        <th>Link face</th>
        <th>Link youtube</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td><b>Bản tin 360</b></td>
        <td>Moe</td>
        <td>Icon</td>
        <td>20:00</td>
        <td>20:45</td>
        <td><a href="#">Facebook</a></td>
        <td><a href="#">youtube</a></td>
        <td>
         <button type="button" class="btn btn-danger">Xóa</button>
         <button type="button" class="btn btn-info">Duyệt</button>
       </td>
      </tr>
      <tr>
        <td>2</td>
        <td><b>Bản tin 360</b></td>
        <td>Moe</td>
        <td>Icon</td>
        <td>20:00</td>
        <td>20:45</td>
        <td><a href="#">Facebook</a></td>
        <td><a href="#">youtube</a></td>
        <td>
         <button type="button" class="btn btn-danger"><i class="fa fa-trash-alt"></i>Xóa</button>
         <button type="button" class="btn btn-info">Duyệt</button>
        </td>
      </tr>
    </tbody>
  </table>
  <button style="float:left" type="button" class="btn btn-info">Thêm chương trình</button>
  <button style="float:right" type="button" class="btn btn-info">Lưu</button>
        <div>
    <div>
</div>



</body>
</html>