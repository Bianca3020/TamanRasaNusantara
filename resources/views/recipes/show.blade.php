<!DOCTYPE html>
<html>
<head>
    <title>{{ $recipe->nama }}</title>

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

        .recipe-image{
            width:100%;
            height:500px;
            object-fit:cover;

            border-radius:25px;

            box-shadow:0 10px 30px rgba(0,0,0,.1);
        }

        .recipe-title{
            font-size:42px;
            font-weight:700;
            margin-top:30px;
        }

        .badge-custom{
            background:#198754;
            padding:10px 18px;
            border-radius:30px;
            font-size:14px;
        }

        .content-card{
            background:white;
            border-radius:25px;
            padding:35px;

            box-shadow:0 5px 20px rgba(0,0,0,.06);
        }

        .section-title{
            font-size:28px;
            font-weight:700;
            margin-bottom:20px;
        }

        .content-text{
            color:#555;
            line-height:1.9;
        }

        .btn-custom{
            border-radius:30px;
            padding:10px 25px;
        }

    </style>

</head>

<body>

<nav class="navbar navbar-dark">

    <div class="container">

        <a class="navbar-brand" href="/recipes">
            Taman Rasa Nusantara
        </a>

        <a href="/recipes"
           class="btn btn-light rounded-pill px-4">
            Kembali
        </a>

    </div>

</nav>

<div class="container mt-5 mb-5">

    <div class="row justify-content-center">

        <div class="col-lg-10">

            @if($recipe->gambar)

                <img
                    src="{{ asset('images/' . $recipe->gambar) }}"
                    class="recipe-image">

            @endif

            <div class="mt-4">

                <span class="badge badge-custom">
                    {{ $recipe->kategori }}
                </span>

                <h1 class="recipe-title">

                    {{ $recipe->nama }}

                </h1>

            </div>

            @if(session('admin'))

                <div class="mt-4">

                    <a href="/recipes/{{ $recipe->id }}/edit"
                       class="btn btn-warning btn-custom">
                        Edit
                    </a>

                    <form action="/recipes/{{ $recipe->id }}"
                          method="POST"
                          style="display:inline-block">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-custom">
                            Hapus
                        </button>

                    </form>

                </div>

            @endif

            <div class="content-card mt-5">

                <h3 class="section-title">
                    Deskripsi
                </h3>

                <p class="content-text">
                    {{ $recipe->deskripsi }}
                </p>

            </div>

            <div class="content-card mt-4">

                <h3 class="section-title">
                    Bahan-Bahan
                </h3>

                <p class="content-text">
                    {!! nl2br(e($recipe->bahan)) !!}
                </p>

            </div>

            <div class="content-card mt-4">
                
                <h3 class="section-title">
                    Langkah Memasak
                </h3>

                @foreach(explode("\n", $recipe->langkah) as $index => $item)

                            <div class="step-box">
                                <b>Step {{ $index + 1 }}</b>

                                <p>{{ $item }}</p>
                            </div>

                @endforeach
                

            </div>

            

        </div>

    </div>

</div>

</body>
</html>