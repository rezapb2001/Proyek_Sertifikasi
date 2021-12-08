<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Sistem Manajemen Siswa</title>
</head>

<body class="countainers">
    <!--menampilkan navbar-->
    @include('navbar')

    <!--header-->
    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Sistem Manajemen Siswa</h1>
        </div>
    </div>

    <!--operasi yang mengatur alur web dan mengatur -->
    @if($layout == 'index')
    <div class="container-fluid ">
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <section class="col-8">
                    @include("listsiswa")
                </section>
            </div>
        </div>
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid" id="create-form">
        <div class="row justify-content-center">
            <section class="col-md-7">
                @include("inputsiswa")
            </section>
        </div>
    </div>
    @elseif($layout == 'show')
    <div class="container">
        <div class="row justify-content-center">
            <section class="col">
                @include("listsiswa")
            </section>
            <section class="col"></section>
        </div>
    </div>
    @elseif($layout == 'edit')
    <div class="container">
        <div class="row justify-content-center">
            <section class="col-md-7">
                @include("editsiswa")
            </section>
        </div>
    </div>
    @endif

</body>

</html>