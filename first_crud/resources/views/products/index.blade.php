<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            list-style: none;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            /* width: 100vw;
            min-height: 500px; */
            background-color: lavender;

            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }

        /* section {
            width: 90%;
            height: 90%;
            border: none;
            border-radius: 10px;
            box-shadow: 9px 9px 20px rgba(128, 128, 128, 0.74);

            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        } */

        /* div {
            width: 97%;
            height: 90%;
        } */

        h1 {
            margin: 20px;
        }

        table {
            margin: 20px 20px;
            /* width: 100%;
            height: 100%; */
            border-collapse: collapse;

            border-radius: 10px;
            box-shadow: 9px 9px 20px rgba(128, 128, 128, 0.74);
        }

        td,
        th {
            padding: 20px 35px;
            text-align: left;
            border-bottom: 1px solid #696969;
            text-align: center;
        }
        a {
            text-decoration: none;
        }
        input {
            border: none;
            color: red;
            cursor: pointer;
        }
        .create {
            position: fixed;
            bottom: 40px;
            right: 20px;

            color: darkgoldenrod;

            padding: 10px 20px;
            border: 1px solid rgb(186, 186, 223);
            border-radius: 20px;
            box-shadow: 4px 4px 10px rgba(128, 128, 128, 0.74);
        }
    </style>
</head>

<body>
    <h1>Product</h1>
    <div>
        @if (session()->has('success'))
            <p>{{ session('success') }}</p>
        @endif
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['qty'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $product['description'] }}</td>
                    <td>
                        <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                    <td style="color: blue; cursor: pointer;">
                        <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <footer>
        <a href="{{ route('product.create') }}" class="create">
            Product Create
        </a>
    </footer>
</body>

</html>
