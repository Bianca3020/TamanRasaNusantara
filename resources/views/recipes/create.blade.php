<!DOCTYPE html>
<html>
<head>
    <title>Tambah Resep</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f5f5f5;
        }

        .navbar{
            background:#111;
            padding:15px 0;
        }

        .navbar-brand{
            font-size:24px;
            font-weight:700;
        }

        .form-card{
            background:white;
            padding:40px;
            border-radius:25px;

            box-shadow:0 10px 30px rgba(0,0,0,.08);
        }

        .page-title{
            font-size:36px;
            font-weight:700;
            margin-bottom:30px;
        }

        .form-control{
            border-radius:15px;
            padding:14px;
            border:1px solid #ddd;
        }

        textarea.form-control{
            min-height:140px;
        }

        .btn-custom{
            border-radius:30px;
            padding:12px 30px;
        }

        .label-title{
            font-weight:600;
            margin-bottom:10px;
        }

        @media(max-width:768px){

        .form-card{
            padding:25px;
        }

        .page-title{
            font-size:28px;
        }

    }

    </style>

</head>

<body>

<nav class="navbar navbar-dark">

    <div class="container">

        <a class="navbar-brand" href="/admin/dashboard">
            Admin Dashboard
        </a>

        <a href="/recipes"
           class="btn btn-light rounded-pill px-4">
            Kembali
        </a>

    </div>

</nav>

<div class="container mt-5 mb-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="form-card">

                <h1 class="page-title">
                    Tambah Resep
                </h1>

                @if ($errors->any())

                    <div class="alert alert-danger">

                        <ul class="mb-0">

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <form action="/recipes"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="mb-4">

                        <label class="label-title">
                            Nama Resep
                        </label>

                        <input
                            type="text"
                            name="nama"
                            class="form-control"
                            placeholder="Masukkan nama resep">

                    </div>

                    <div class="mb-4">

                        <label class="label-title">
                            Deskripsi
                        </label>

                        <textarea
                            name="deskripsi"
                            class="form-control"
                            placeholder="Masukkan deskripsi resep"></textarea>

                    </div>

                    <div class="mb-4">

                        <label class="label-title">
                            Bahan-Bahan
                        </label>

                        <textarea
                            name="bahan"
                            class="form-control"
                            placeholder="Masukkan bahan-bahan"></textarea>

                    </div>

                    <div class="mb-4">

                        <label class="label-title">
                            Langkah Memasak
                        </label>

                        <textarea
                            name="langkah"
                            class="form-control"
                            placeholder="Masukkan langkah memasak"></textarea>

                    </div>

                    <div class="mb-4">

                        <label class="label-title">
                            Kategori
                        </label>

                        <input
                            type="text"
                            name="kategori"
                            class="form-control"
                            placeholder="Contoh: Masakan Jawa Tengah">

                    </div>

                    <div class="mb-4">

                        <label class="label-title">
                            Upload Gambar
                        </label>

                        <input
                            type="file"
                            name="gambar"
                            class="form-control">

                    </div>

                    <button class="btn btn-success btn-custom">
                        Simpan Resep
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>