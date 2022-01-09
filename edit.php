<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin người dùng</title>
   
    
</head>

<body>
     <div class="container">
         <h1>Sửa thông tin dự án</h1>
         <div class="row">
         <form action="" method="post">
        <div class="col-md-12">
            <div class="form-group">
                <label for="">Tên dự án</label>
                <input type="text" require name="txtName" class="form-control"  value="<?php echo isset($_POST['txtName']) ? $_POST['txtName'] : $blood['tenduan'] ?>" required/>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="">Năm thực hiện</label>
                <input type="text" require name="txtYear" class="form-control"  value="<?php echo isset($_POST['txtYear']) ? $_POST['txtYear'] : $blood['namthuchien'] ?>" required/>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="">Lĩnh vực</label>
                <input type="text" require name="txtLinhvuc" class="form-control"  value="<?php echo isset($_POST['txtLinhvuc']) ? $_POST['txtLinhvuc'] : $blood['linhvuc'] ?>" required/>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
            <label for="">Nhiệm vụ</label>
            <input type="text" class="form-control" class="form-control"  require name="txtNhiemvu" value="<?php echo isset($_POST['txtNhiemvu']) ? $_POST['txtNhiemvu'] : $blood['nhiemvu'] ?>" required/>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="">Cơ quan thực hiện</label>
                <input type="text" require name="txtCoquanthuchien" class="form-control"  value="<?php echo isset($_POST['txtCoquanthuchien']) ? $_POST['txtCoquanthuchien'] : $blood['coquanthuchien'] ?>" required/>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <input type="submit" class="btn btn-dark w-100 mt-3" name="submit" value="Cập nhập" />
            </div>
        </div>
    </form>
         </div>
     </div>

    
</body>

</html>