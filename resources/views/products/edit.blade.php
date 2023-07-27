<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <style>
        *, ::before,::after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 12px;
        }
        .container {
            padding: 15px;
        }
        .pageName {
            font-size: 20px;
            margin-bottom: 15px;
        }
        .homePageLink {
            display: inline-block;
            margin-top: 5px;
            margin-bottom: 5px;
            text-decoration: none;
            background-color: #000;
            color: #fff;
            padding: 5px;
            padding-left: 15px;
            padding-right: 15px;
            border-radius: 3px;
        }
        ul {
            padding-left: 30px;
            margin-top: 5px;
            margin-bottom: 5px;
            color: orangered;
        }
        .homePageLink:hover {
            background-color: #333;
        }
        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 3px;
        }
        input[type="text"] {
            height: 30px;
            width: 300px;
            padding: 5px;
        }

        input[type="submit"] {
            margin-top: 15px;
            border: none;
            padding: 5px;
            padding-left: 15px;
            padding-right: 15px;
            background-color: #000;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
            height: 30px;;
        }
        input[type="submit"]:hover {
            background-color: #333;;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="pageName">Edit Product</h1>
        <div>
            @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <a class="homePageLink" href="{{route('product/index')}}">Products List</a>
        <form action="{{route('product/update', ['product'=>$product])}}" method="post">
            @csrf
            @method("put")
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" value="{{$product->name}}">
            </div>
            <div>
                <label for="quantity">Quantity</label>
                <input type="text" id="quantity" name="quantity" placeholder="Quantity" value="{{$product->quantity}}">
            </div>
            <div>
                <label for="price">Price</label>
                <input type="text" id="price" name="price" placeholder="Price" value="{{$product->price}}">
            </div>
            <div>
                <input type="submit" value="UPDATE" />
            </div>
        </form>
    </div>
</body>
</html>