<!doctype html>
<html lang="en">
    <head>
        <title>Thông tin chi tiết khoa</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>

    <body>
        <section class="container border my-3">
            <h1>KNT - Danh sách khoa</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã khoa</th>
                        <th>Tên khoa</th>
                        <th class="text-center">Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 0;
                    @endphp
                        @foreach ($KNTkhoa as $item)
                            @php
                                $stt++;
                            @endphp
                            <tr>
                                <td>{{ $stt }}</td>
                                <td>{{ $item->KNTMaKH }}</td>
                                <td>{{ $item->KNTTenKH }}</td>
                                <td class="text-center">
                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="/khoa/detail/{{$item->KNTMaKH}}" class="btn btn-success">Chi tiết</a>
                                        <a href="/khoa/edit/{{$item->KNTMaKH}}" class="btn btn-primary">Sửa</a>
                                        <button class="btn btn-danger" type="submit">Xóa</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </section>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
