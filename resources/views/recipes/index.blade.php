@php
use Illuminate\Support\Str;
@endphp

<!DOCTYPE html>
<html>
<head>
    <title>Taman Rasa Nusantara</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            font-family:'Poppins', sans-serif;
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

        .hero{
            height:500px;
            background:
            linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)),
            url('https://images.unsplash.com/photo-1504674900247-0877df9cc836');
            background-size:cover;
            background-position:center;
            display:flex;
            justify-content:center;
            align-items:center;
            text-align:center;
            color:white;
        }

        .hero h1,
        .hero p{
            opacity:0;
            animation:fadeIn 0.8s ease forwards;
        }

        .hero p{
            animation-delay:0.3s;
        }

        .category-wrapper{
            display:flex;
            flex-wrap:wrap;
            gap:10px;
        }

        .category-scroll{
            display:flex;
            gap:10px;
            overflow-x:auto;
            padding:10px 5px;
            scrollbar-width:none;
        }

        .category-scroll::-webkit-scrollbar{
            display:none;
        }

        .category-btn{
            flex:0 0 auto;
            padding:8px 16px;
            border-radius:30px;
            background:#f1f1f1;
            color:#333;
            text-decoration:none;
            font-size:14px;
            white-space:nowrap;
            transition:.2s;
        }

        .category-btn:hover{
            background:#198754;
            color:white;
            transform:scale(1.05);
        }

        .category-btn.active{
            background:#111;
            color:white;
        }

        .recipe-card{
            border:none;
            border-radius:20px;
            overflow:hidden;
            transition:.3s;
            background:white;
        }

        .recipe-card:hover{
            transform:translateY(-12px) scale(1.02);
            box-shadow:0 20px 40px rgba(0,0,0,.15);
        }

        .recipe-img{
            height:240px;
            object-fit:cover;
        }

        .recipe-content{
            padding:20px;
        }

        .recipe-title{
            font-size:22px;
            font-weight:600;
            color:#111;
            text-decoration:none;
        }

        .recipe-title:hover{
            color:#198754;
        }

        .badge-custom{
            background:#198754;
            padding:8px 14px;
            border-radius:30px;
            font-size:13px;
        }

        .footer{
            background:#111;
            color:white;
            margin-top:80px;
            padding:50px 0;
            text-align:center;
        }

        @media(max-width:768px){
            .hero{
                height:350px;
            }

            .hero h1{
                font-size:38px;
            }

            .hero p{
                font-size:16px;
            }
        }

        html,
        body{
            overflow-x:hidden;
        }

        .recipe-img{
            width:100%;
            object-fit:cover;
        }

        @media(max-width:768px){

            .navbar-brand{
                font-size:18px;
            }

            .hero{
                height:320px;
                padding:20px;
            }

            .hero h1{
                font-size:32px;
            }

            .hero p{
                font-size:14px;
            }

            .recipe-title{
                font-size:18px;
            }

            .recipe-content{
                padding:16px;
            }

            .category-scroll{
                padding-bottom:5px;
            }

            .category-btn{
                font-size:13px;
                padding:8px 14px;
            }

            .footer{
                padding:35px 15px;
            }

            .footer h4{
                font-size:20px;
            }

            .footer p{
                font-size:14px;
            }

            .input-group{
                flex-direction:column;
                gap:10px;
            }

            .input-group .btn{
                width:100%;
            }

            .navbar .d-flex{
                flex-wrap:wrap;
                justify-content:flex-end;
            }
        }

        .search-wrapper{
            display:flex;
            gap:10px;
        }

        .search-input{
            height:50px;
            border-radius:14px;
        }

        .search-btn{
            border-radius:14px;
            padding:0 24px;
        }

        @media(max-width:768px){

            .search-wrapper{
                flex-direction:column;
            }

            .search-btn{
                width:100%;
                height:50px;
            }
        }

        .modal-img{
            width:100%;
            height:320px;
            object-fit:cover;
        }

        .step-box{
            display:flex;
            gap:15px;
            background:#f5f5f5;
            padding:15px;
            border-radius:16px;
            margin-bottom:15px;
        }

        .step-number{
            width:35px;
            height:35px;
            border-radius:50%;
            background:#198754;
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            font-weight:600;
            flex-shrink:0;
        }

        @media(max-width:768px){

            .modal-img{
                height:220px;
            }

            .step-box{
                flex-direction:column;
                gap:10px;
            }
        }

        .admin-actions{
            display:flex;
            flex-wrap:wrap;
            gap:10px;
            margin-top:12px;

            opacity:0;
            visibility:hidden;
            transform:translateY(10px);

            transition:.3s;
        }

        .recipe-card:hover .admin-actions{
            opacity:1;
            visibility:visible;
            transform:translateY(0);
        }

        .action-box .btn{
            border-radius:12px;
        }

        @media(max-width:768px){

        .admin-actions{
            opacity:1 !important;
            visibility:visible !important;
            transform:none !important;

            width:100%;
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:10px;
        }

        .action-box{
            display:flex;
            flex-direction:column;
            gap:10px;
        }

        .action-box .btn{
            width:100%;
        }
    }
    </style>

</head>

<body>

<nav class="navbar navbar-dark">
    <div class="container">

        <a class="navbar-brand" href="/recipes">
            Taman Rasa Nusantara
        </a>

        <div class="d-flex gap-2">

            @if(session('admin'))
                <a href="/admin/dashboard" class="btn btn-light rounded-pill px-3">
                    Dashboard
                </a>

                <a href="/recipes/create" class="btn btn-warning rounded-pill px-3">
                    Tambah
                </a>

                <a href="/admin/logout" class="btn btn-danger rounded-pill px-3">
                    Logout
                </a>
            @endif

        </div>

    </div>
</nav>

<div class="hero">
    <div>
        <h1>Resep Makanan Khas Nusantara</h1>
        <p>Temukan cita rasa tradisional Indonesia yang autentik</p>
    </div>
</div>

<div class="container mt-4">
    <form action="/recipes" method="GET">

    <div class="search-wrapper">

        <input type="text"
                id="search"
                name="search"
                class="form-control search-input"
                placeholder="Cari resep..."
                value="{{ request('search') }}">

        <button class="btn btn-success search-btn">
            Search
        </button>

    </div>

</form>

</div>

<div class="container mt-4">

    <div class="category-scroll">

            <a href="#"
        class="category-btn"
        onclick="filterData('', this)">

            Semua

        </a>

        @foreach($kategoris as $item)

            <a href="#"
            class="category-btn"
            onclick="filterData('{{ $item->kategori }}', this)">

                {{ $item->kategori }}

            </a>

        @endforeach

    </div>

</div>

<div class="container mt-5">

    <h2 class="mb-4">Daftar Resep</h2>

    <div class="row" id="recipe-container">

        @foreach($recipes as $recipe)

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card recipe-card h-100">

                    @if($recipe->gambar)
                        <img src="{{ asset('images/' . $recipe->gambar) }}"
                             class="card-img-top recipe-img">
                    @endif

                    <div class="recipe-content">

                        <span class="badge badge-custom">
                            {{ $recipe->kategori }}
                        </span>

                        <div class="mt-3">
                            <a href="/recipes/{{ $recipe->id }}"
                               class="recipe-title">
                                {{ $recipe->nama }}
                            </a>
                        </div>

                        <p class="text-muted mt-2">
                            {{ Str::limit($recipe->deskripsi, 100) }}
                        </p>

                        <div class="mt-3 action-box">

                            <button class="btn btn-outline-dark rounded-pill px-4"
                                    onclick="openRecipeModal({{ $recipe->id }})">

                                Lihat Detail

                            </button>

                            @if(session('admin'))

                            <div class="admin-actions">

                                <a href="/recipes/{{ $recipe->id }}/edit"
                                class="btn btn-warning rounded-pill">

                                    Edit

                                </a>

                                <button class="btn btn-danger rounded-pill"
                                        onclick="openDeleteModal({{ $recipe->id }})">

                                    Hapus

                                </button>

                            </div>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        @endforeach

    </div>
</div>

    <div class="d-flex justify-content-center mt-4">
        {{ $recipes->links() }}
    </div>

</div>

<div class="footer">
    <h4>Taman Rasa Nusantara</h4>
    <p>Website resep makanan tradisional Indonesia</p>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

let search = '';
let kategori = '';

function filterData(cat, element){

    kategori = cat;

    $('.category-btn').removeClass('active');

    $(element).addClass('active');

    fetchData();
}

$('#search').on('keyup', function(){

    search = $(this).val();

    fetchData();
});

function fetchData(){

    $.ajax({

        url:'/recipes/filter',

        method:'GET',

        data:{
            search: search,
            kategori: kategori
        },

        success:function(data){

            let html = '';

            if(data.length === 0){

                html = `
                <div class="col-12 text-center mt-5">
                    <h4>Resep tidak ditemukan</h4>
                </div>
                `;

                $('#recipe-container').html(html);

                return;
            }

            data.forEach(r => {

                html += `
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="card recipe-card h-100">

                        ${r.gambar
                            ? `<img src="/images/${r.gambar}"
                                    class="card-img-top recipe-img">`
                            : ''
                        }

                        <div class="recipe-content">

                            <span class="badge badge-custom">
                                ${r.kategori}
                            </span>

                            <div class="mt-3">

                                <a href="/recipes/${r.id}"
                                class="recipe-title">

                                    ${r.nama}

                                </a>

                            </div>

                            <p class="text-muted mt-2">
                                ${r.deskripsi.substring(0,100)}...
                            </p>

                            <div class="mt-3 action-box">

                                <button class="btn btn-outline-dark rounded-pill px-4"
                                        onclick="openRecipeModal(${r.id})">

                                    Lihat Detail

                                </button>

                                @if(session('admin'))

                                <div class="admin-actions">

                                    <a href="/recipes/${r.id}/edit"
                                    class="btn btn-warning rounded-pill">

                                        Edit

                                    </a>

                                    <button class="btn btn-danger rounded-pill"
                                            onclick="openDeleteModal(${r.id})">

                                        Hapus

                                    </button>

                                </div>

                                @endif

                            </div>

                        </div>

                    </div>

                </div>
                `;
            });

            $('#recipe-container').html(html);
        }
    });
}

function openDeleteModal(id){

    let form = document.getElementById('deleteForm');

    form.action = '/recipes/' + id;

    let modal = new bootstrap.Modal(
        document.getElementById('deleteModal')
    );

    modal.show();
}

function openRecipeModal(id){

    let modal = new bootstrap.Modal(
        document.getElementById('recipeModal')
    );

    $('#modalContent').html(`
        <div class="text-center py-5">
            Loading...
        </div>
    `);

    modal.show();

    $.ajax({

        url:'/recipes/filter?id=' + id,

        method:'GET',

        success:function(recipe){

            recipe = recipe[0];

            let bahanList = '';
            let langkahList = '';

            if(recipe.bahan){

                recipe.bahan.split('\n').forEach(item => {

                    bahanList += `
                        <li class="mb-2">${item}</li>
                    `;
                });
            }

            if(recipe.langkah){

                recipe.langkah.split('\n').forEach((item, index) => {

                    langkahList += `
                        <div class="step-box">

                            <div class="step-number">
                                ${index + 1}
                            </div>

                            <div>
                                ${item}
                            </div>

                        </div>
                    `;
                });
            }

            $('#modalTitle').text(recipe.nama);

            $('#modalContent').html(`

                ${recipe.gambar
                    ? `
                    <img src="/images/${recipe.gambar}"
                         class="modal-img">
                    `
                    : ''
                }

                <div class="p-4">

                    <span class="badge bg-success mb-3">
                        ${recipe.kategori}
                    </span>

                    <p class="text-muted">
                        ${recipe.deskripsi}
                    </p>

                    <hr>

                    <h5 class="mb-3">
                        Bahan-bahan
                    </h5>

                    <ul class="mb-4">
                        ${bahanList}
                    </ul>

                    <h5 class="mb-3">
                        Langkah-langkah
                    </h5>

                    ${langkahList}

                </div>

            `);
        }
    });
}
</script>

<div class="modal fade" id="recipeModal" tabindex="-1">

    <div class="modal-dialog modal-lg modal-dialog-scrollable">

        <div class="modal-content border-0 rounded-4 overflow-hidden">

            <div class="modal-header">

                <h5 class="modal-title" id="modalTitle">
                    Detail Resep
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body p-0" id="modalContent">

                <div class="text-center py-5">
                    Loading...
                </div>

            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="deleteModal" tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content border-0 rounded-4">

            <div class="modal-header">

                <h5 class="modal-title">
                    Hapus Resep
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                Yakin ingin menghapus resep ini?

            </div>

            <div class="modal-footer">

                <form id="deleteForm" method="POST">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger">
                        Ya, Hapus
                    </button>

                </form>

                <button class="btn btn-secondary"
                        data-bs-dismiss="modal">

                    Batal

                </button>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>