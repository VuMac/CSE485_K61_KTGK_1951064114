<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thông tin dự án</title>
    
    
</head>

<body>
     <div class="container">
     <h1>Thêm thông tin dự án</h1>
         <div class="row">
         <form action="" method="post">
        <div class="col-md-12">
            <div class="form-group">
                <label for="">Tên dự án</label>
                <input type="text" class="form-control" require name="txtName" required/>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="">Năm thực hiện</label>
                <input type="text" class="form-control" require name="txtYear"  required/>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
            <label for="">Lĩnh vực</label>
            <input type="text" class="form-control" require name="txtLinhvuc" required />
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="">Nhiệm vụ</label>
                <input type="text" class="form-control" require name="txtPhone" required/>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="">Cơ quan thực hiện</label>
                <input type="text" class="form-control" require name="txtCoquanthuchien" required/>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <input type="submit" class="btn btn-dark mt-3 w-100"  name="submit" value="Save" />
            </div>
        </div>
    </form>
         </div>
     </div>


</body>

</html>