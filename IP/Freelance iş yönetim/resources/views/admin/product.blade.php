<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style type="text/css">
        body {
            background-color: #191c24;
            color: white;
        }

        .page-title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            color: white;
            font-size: 16px;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="number"], input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #555;
            background-color: #2c2f38;
            color: white;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            border: 1px solid #555;
            cursor: pointer;
        }

        .btn-success:hover {
            background-color: #218838;
        }


        .container {
            background-color: #2c2f38;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }


        h1.page-title {
            font-size: 24px;
            margin-bottom: 30px;
        }


        .alert-success {
            background-color: #28a745;
            color: white;
        }


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
