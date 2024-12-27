<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        body {
            background-color: #191c24; /* Sayfa arka planını koyu gri yap */
            color: #fff; /* Varsayılan yazı rengini beyaz yap */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            text-align: left;
            background-color: #3a3a3a; /* Tablo arka planını koyu gri yap */
            color: #fff; /* Tablo içindeki yazıları beyaz yap */
            border-radius: 8px; /* Kenar yuvarlama */
            overflow: hidden; /* Kenar taşıması engelle */
        }

        table thead tr {
            background-color: #444; /* Başlık satırını koyu gri */
            color: #fff; /* Başlık yazı rengini beyaz yap */
        }

        table th, table td {
            padding: 15px;
            border: 1px solid #555; /* Daha koyu gri kenar */
        }

        table tbody tr:nth-child(even) {
            background-color: #4a4a4a; /* Alternatif satır koyu gri */
        }

        table tbody tr:hover {
            background-color: #555; /* Hover efekti daha koyu gri */
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn-danger:hover {
            background-color: #a71d2a;
        }

        img {
            border-radius: 8px;
        }
    </style>
</head>
<body>
@include('admin.sidebar')
@include('admin.navbar')

<div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}
            </div>
        @endif

        <table>
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $product)
                <tr>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>${{ $product->price }}</td>
                    <td>
                        <img height="100" width="100" src="/productimage/{{ $product->image }}">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('updateview', $product->id) }}">Update</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ url('deleteproduct', $product->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.script')
</body>
</html>
