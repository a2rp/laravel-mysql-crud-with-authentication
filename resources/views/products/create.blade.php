<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a Product</title>
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
        ul {
            padding-left: 30px;
            margin-top: 5px;
            margin-bottom: 5px;
            color: orangered;
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
        <h1 class="pageName">Add a Product</h1>
        <div>
            @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <a class="homePageLink" href="{{route('product/index')}}">Product List</a>
        <form action="{{route('product/store')}}" method="post">
            @csrf
            @method("post")
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name">
            </div>
            <div>
                <label for="quantity">Quantity</label>
                <input type="text" id="quantity" name="quantity" placeholder="Quantity">
            </div>
            <div>
                <label for="price">Price</label>
                <input type="text" id="price" name="price" placeholder="Price">
            </div>
            <div>
                <input type="submit" value="SAVE A NEW PRODUCT" />
            </div>
        </form>
    </div>
</body>
</html>