<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>

    <style>
        .dangky{
            margin-top : 40px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 dangky">
                <div class="alert alert-primary" role="alert">
                        Đăng ký thành viên
                </div>
                @include('err')
                <form method="POST" action="{!! route ('createHocSinh')!!}">
                        <div class="form-group">
                            @csrf
                          <label for="exampleInputEmail1">Họ tên</label>
                          <input type="text" name="fullName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập họ tên">
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Địa chỉ</label>
                          <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Nhập địa chỉ">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputPassword1">Giới tính</label>
                                <select class="form-control form-control-sm" name="sex">
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleInputPassword1">UserName</label>
                                <input type="text" name="userName" class="form-control" id="exampleInputPassword1" placeholder="Nhập tên đăng nhập">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputPassword1">PassWord</label>
                                <input type="text" name="passWord" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Đăng ký</button>
                      </form>
            </div>
        </div>
    </div>
    
</body>
</html>