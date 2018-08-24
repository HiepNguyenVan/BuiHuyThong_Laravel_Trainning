<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{!! asset('public/bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('public/fontawesome/css/font-awesome.min.css') !!}">
    <script src="{!! asset('public/bootstrap/js/bootstrap.min.js') !!}"></script>
</head>
<body>
   <div class="container">
       <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="alert alert-primary text-center" role="alert">
                    Danh sách sản phẩm trong cơ sở dữ liệu
                </div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên Sản Phẩm</th>
                        <th scope="col">Giá sản phẩm</th>
                        <th scope="col">Tác vụ</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($product as $v)
                      <tr>
                        <th scope="row">{!! $v->id !!}</th>
                        <td>{!! $v->name !!}</td>
                        <td>{!! $v->gia !!}</td>
                        <td></td>
                    
                      </tr>
                    @endforeach    
                    </tbody>
                  </table>
            </div>
            <div class="col-sm-3"></div>
       </div>
   </div>
</body>
</html>