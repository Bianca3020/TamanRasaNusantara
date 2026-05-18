<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            font-family:'Poppins', sans-serif;
        }

        body{

            min-height:100vh;

            display:flex;
            justify-content:center;
            align-items:center;

            background:
            linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)),
            url('https://images.unsplash.com/photo-1504674900247-0877df9cc836');

            background-size:cover;
            background-position:center;
        }

        .login-card{

            width:100%;
            max-width:420px;

            background:rgba(255,255,255,.95);

            padding:40px;

            border-radius:25px;

            backdrop-filter:blur(10px);

            box-shadow:
            0 10px 40px rgba(0,0,0,.2);

            animation:fadeIn .8s ease;
        }

        .login-title{
            font-size:34px;
            font-weight:700;
            color:#111;
        }

        .login-subtitle{
            color:#666;
            margin-top:10px;
        }

        .form-control{

            border-radius:15px;

            padding:14px;

            border:1px solid #ddd;

            transition:.3s;
        }

        .form-control:focus{

            border-color:#198754;

            box-shadow:
            0 5px 20px rgba(25,135,84,.2);
        }

        .btn-login{

            border-radius:30px;

            padding:12px;

            font-weight:600;

            transition:.3s;
        }

        .btn-login:hover{

            transform:translateY(-2px);
        }

        @keyframes fadeIn{

            from{
                opacity:0;
                transform:translateY(20px);
            }

            to{
                opacity:1;
                transform:translateY(0);
            }

        }

        @media(max-width:768px){

            .login-card{
                margin:20px;
                padding:30px;
            }

            .login-title{
                font-size:28px;
            }

        }

    </style>

</head>

<body>

<div class="login-card">

    <h1 class="login-title">
        Admin Login
    </h1>

    <p class="login-subtitle">
        Masuk ke dashboard admin Taman Rasa Nusantara
    </p>

    @if(session('error'))

        <div class="alert alert-danger mt-4">

            {{ session('error') }}

        </div>

    @endif

    <form action="/admin/login"
          method="POST"
          class="mt-4">

        @csrf

        <div class="mb-3">

            <label class="mb-2">
                Username
            </label>

            <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Masukkan username">

        </div>

        <div class="mb-4">

            <label class="mb-2">
                Password
            </label>

            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Masukkan password">

        </div>

        <button class="btn btn-success btn-login w-100">

            Login

        </button>

    </form>

</div>

</body>
</html>