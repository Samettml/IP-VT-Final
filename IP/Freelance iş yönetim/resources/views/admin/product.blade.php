<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style type="text/css">
        body {
            background-color: #191c24; /* Sayfa arka planını koyu mavi-gri tonuna ayarladık */
            color: white; /* Yazı rengini beyaz yap */
        }

        .page-title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left; /* Etiketleri ve inputları sola yasla */
        }

        label {
            display: block;
            color: white;
            font-size: 16px;
            margin-bottom: 5px; /* Etiket ile input arasında boşluk bırak */
        }

        input[type="text"], input[type="number"], input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #555; /* Kenar rengi koyu gri */
            background-color: #2c2f38; /* Input arka planını koyu gri yap */
            color: white; /* Yazı rengini beyaz yap */
        }

        .btn-success {
            background-color: #28a745; /* Başarılı buton için yeşil renk */
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            border: 1px solid #555; /* Kenar rengi koyu gri */
            cursor: pointer;
        }

        .btn-success:hover {
            background-color: #218838; /* Hover efekti daha koyu yeşil */
        }

        /* Formun genel düzeni ve arka planı */
        .container {
            background-color: #2c2f38; /* Formun arka planı koyu gri */
            padding: 20px;
            border-radius: 8px; /* Yuvarlatılmış köşeler */
            margin-top: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Hafif gölge efekti */
        }

        /* Başlık stili */
        h1.page-title {
            font-size: 24px;
            margin-bottom: 30px;
        }

        /* Alert mesajlarının stili */
        .alert-success {
            background-color: #28a745;
            color: white;
        }

        /* Alert kapama butonu */
        .close {
            color: white;
        }
    </style>
</head>
<body>
@include('admin.sidebar')
@include('admin.navbar')

<div class="container-fluid page-body-wrapper">
    <div class="container" align="center">
        <h1 class="page-title">Add Product</h1>

        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}
            </div>
        @endif

        <form action="{{ url('uploadproduct') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Product Title</label>
                <input type="text" id="title" name="title" placeholder="Give a product title" required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" placeholder="Give a price" required>
            </div>

            <div class="form-group">
                <label for="des">Description</label>
                <input type="text" id="des" name="des" placeholder="Give a description" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" id="quantity" name="auntity" placeholder="Product Quantity" required>
            </div>

            <div class="form-group">
                <label for="file">Upload Image</label>
                <input type="file" id="file" name="file">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>

@include('admin.script')
</body>
</html>
