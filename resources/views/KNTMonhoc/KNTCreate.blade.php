<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>KNT - Thêm môn học</title>
</head>
<body>
    <section class="container border my-3">
        <div class="card">
            <div class="card-header">
                Thêm mới thông tin môn học
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"> Mã MH: </span>
                        <input type="text" class="form-control" name="KNTMaMH">
                    </div>
                    @error('KNTMaMH')
                        <span class="text-danger"> {{ $message }} </span>    
                    @enderror
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"> Tên MH: </span>
                        <input type="text" class="form-control" name="KNTTenMH">
                    </div>
                    @error('KNTTenMH')
                        <span class="text-danger"> {{ $message }} </span>    
                    @enderror
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"> Số tiết: </span>
                        <input type="number" class="form-control" name="KNTSotiet">
                    </div>
                    @error('KNTSotiet')
                        <span class="text-danger"> {{ $message }} </span>    
                    @enderror
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" name="btnSubmit" value="Thêm mới">
                        <a href="/monhoc" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>