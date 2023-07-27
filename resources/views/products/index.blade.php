<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products List</title>
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
        .pageName a {
            font-size: 20px;
            color: #000000;
            text-decoration: none;
            margin-bottom: 15px;
        }
        .successMessage {
            margin: 5px;
            color: green;
            font-weight: bolder;
        }
        .createProductLink, .dashboard, .homeLink {
            display: inline-block;
            margin-top: 5px;
            margin-bottom: 5px;
            text-decoration: none;
            background-color: #000;
            color: #fff;
            padding: 5px;
            padding-left: 15px;
            padding-right: 15px;
        }
        .createProductLink:hover, .dashboard:hover, .homeLink:hover {
            background-color: #333;
        }
        table, th, tr {
            width: 100%;
            table-layout: fixed;
            border: 1px solid black;
            border-collapse: collapse;
        }
        th {
            background-color: #000;
            color: #fff;
            padding: 5px;
        }
        td {
            text-align: center;
            padding: 5px;
        }
        .editLink {
            text-decoration: none;
            padding: 5px;
            padding-left: 15px;
            padding-right: 15px;
            background-color: lightblue;
            color: #333;
            border-radius: 3px;
            font-weight: bolder;
        }
        .editLink:hover {
            background-color: lightgreen;
        }
        .deleteButton {
            border: none;
            border-radius: 3px;
            background-color: lightsalmon;
            color: #333;
            font-weight: bolder;
            padding: 5px;
            padding-left: 15px;
            padding-right: 15px;
            cursor: pointer;
        }
        .deleteButton:hover {
            background-color: lightcoral;
        }
        .noProductsMessage {
            margin-top: 20px;
            font-size: 20px;
            text-align: center;
            color: orangered;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="pageName"><a href="{{route('product/index')}}">Product List</a></div>
        @if(session()->has("success"))
        <div class="successMessage">
            {{session("success")}}
        </div>
        @endif
        <a href="{{route('product/create')}}" class="createProductLink">Add a Product</a>
        <a href="{{route('dashboard')}}" class="dashboard">Dashboard</a>
        <a href="{{route('welcome')}}" class="homeLink">Home</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($products))
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                <a class="editLink" href="{{route('product/edit', ['product' => $product])}}">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('product/delete', ['product' => $product])}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <input class="deleteButton" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        @if(empty($product))
            <h1 class="noProductsMessage">No Products To Display</h1>
        @endif
    </div>
</body>
</html>