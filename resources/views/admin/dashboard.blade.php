<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

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

        .sidebar{
            width:260px;
            height:100vh;

            background:#111;

            position:fixed;

            padding:30px 20px;

            color:white;
        }

        .sidebar-title{
            font-size:28px;
            font-weight:700;

            margin-bottom:50px;
        }

        .sidebar a{
            display:block;

            color:#ddd;

            text-decoration:none;

            padding:14px 18px;

            border-radius:12px;

            margin-bottom:10px;

            transition:.3s;
        }

        .sidebar a:hover{
            background:#198754;
            color:white;
        }

        .main-content{
            margin-left:260px;
            padding:40px;
        }

        .page-title{
            font-size:38px;
            font-weight:700;
        }

        .dashboard-card{
            background:white;

            border-radius:25px;

            padding:30px;

            box-shadow:0 10px 30px rgba(0,0,0,.06);

            transition:.3s;
        }

        .dashboard-card:hover{
            transform:translateY(-5px);
        }

        .card-title{
            font-size:18px;
            color:#777;
        }

        .card-number{
            font-size:42px;
            font-weight:700;
            margin-top:10px;
        }

        .menu-card{
            background:white;

            border-radius:20px;

            padding:30px;

            text-align:center;

            box-shadow:0 5px 20px rgba(0,0,0,.05);

            transition:.3s;
        }

        .menu-card:hover{
            transform:translateY(-8px);

            box-shadow:0 10px 25px rgba(0,0,0,.08);
        }

        .menu-btn{
            border-radius:30px;
            padding:10px 25px;
        }

        @media(max-width:768px){

            .sidebar{
                position:relative;
                width:100%;
                height:auto;
            }

            .main-content{
                margin-left:0;
            }

        }

            .sidebar-title{
        margin-bottom:25px;
    }

    .sidebar a{
        margin-bottom:5px;
    }

    .main-content{
        padding:25px;
    }

    .page-title{
        font-size:30px;
    }

    .card-number{
        font-size:34px;
    }

    </style>

</head>

<body>

<div class="sidebar">

    <div class="sidebar-title">
        Admin Panel
    </div>

    <a href="/admin/dashboard">
        Dashboard
    </a>

    <a href="/recipes">
        Kelola Resep
    </a>

    <a href="/recipes/create">
        Tambah Resep
    </a>

    <a href="/admin/logout">
        Logout
    </a>

</div>

<div class="main-content">

    <h1 class="page-title">
        Dashboard Admin
    </h1>

    <p class="text-muted mt-2">
        Selamat datang kembali admin 👋
    </p>

    <div class="row mt-4">

        <div class="col-lg-4 mb-4">

            <div class="dashboard-card">

                <div class="card-title">
                    Total Resep
                </div>

                <div class="card-number">
                    {{ $totalRecipes }}
                </div>

            </div>

        </div>

    </div>

    <div class="row mt-3">

        <div class="col-lg-4 mb-4">

            <div class="menu-card">

                <h4>
                    Kelola Resep
                </h4>

                <p class="text-muted mt-3">
                    Lihat seluruh resep makanan.
                </p>

                <a href="/recipes"
                   class="btn btn-dark menu-btn mt-2">
                    Buka
                </a>

            </div>

        </div>

        <div class="col-lg-4 mb-4">

            <div class="menu-card">

                <h4>
                    Tambah Resep
                </h4>

                <p class="text-muted mt-3">
                    Tambahkan resep baru ke website.
                </p>

                <a href="/recipes/create"
                   class="btn btn-success menu-btn mt-2">
                    Tambah
                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>