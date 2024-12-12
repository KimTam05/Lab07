<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KNT - Chi tiết môn học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                Thông tin môn học
            </div>
            <div class="card-body">
                <p class="card-text">
                    <b>Mã môn học:</b>
                    {{ $KNTMonhoc->KNTMaMH }}
                </p>
                <p>
                    <b>Tên môn học:</b>
                    {{ $KNTMonhoc->KNTTenMH }}
                </p>
                <p>
                    <b>Số tiết:</b>
                    {{ $KNTMonhoc->KNTSotiet }}
                </p>
                <div class="card-footer">
                    <a href="/monhoc" class="btn btn-secondary">Trở lại</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>