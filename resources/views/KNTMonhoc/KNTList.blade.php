<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>KNT - Danh sách môn học</title>
</head>
<body>
    <section class="container border my-3">
        <h1>Danh sách môn học</h1>
        <a href="/monhoc/create" class="btn btn-success">Thêm mới</a>
        <hr>
        <table class="table table-border">
            <thead>
                <th>#</th>
                <th>Mã MH</th>
                <th>Tên MH</th>
                <th>Số tiết</th>
                <th class="text-center">Chỉnh sửa</th>
            </thead>
            @php
                $stt = 0;
            @endphp
            <tbody>
                @foreach($KNTMonhoc as $item)
                    @php
                        $stt++;
                    @endphp
                    <tr>
                        <td>{{ $stt }}</td>
                        <td>{{ $item->KNTMaMH }}</td>
                        <td>{{ $item->KNTTenMH }}</td>
                        <td>{{ $item->KNTSotiet }}</td>
                        <td class="text-center">
                            <a href="/monhoc/detail/{{$item->KNTMaMH}}" class="btn btn-success"><i class="fa-solid fa-circle-info"></i></a>
                            <a href="/monhoc/edit/{{$item->KNTMaMH}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="/monhoc/delete/{{$item->KNTMaMH}}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa khoa này không?')"><i class="fa-solid fa-trash"></i></button> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>