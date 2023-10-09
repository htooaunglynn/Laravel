<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Create</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            list-style: none;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            width: 100vw;
            height: 100vh;
            background-color: lavender;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        section {
            width: 90%;
            height: 90%;
            border: none;
            border-radius: 10px;
            box-shadow: 9px 9px 20px rgba(128, 128, 128, 0.74);

            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }

        form {
            width: 340px;
            height: 80%;

            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        form div {
            width: 100%;
        }

        section h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        form div input {
            width: 100%;
            height: 70px;

            text-align: center;
            font-size: 1rem;
            font-weight: bold;

            border: none;
            border-radius: 5px;
            box-shadow: 5px 5px 20px rgba(128, 128, 128, 0.315);
        }

        form div input[type="submit"] {
            width: 50%;
            margin-left: auto;
            cursor: pointer;
        }

        form div input[type="submit"]:hover {
            background-color: rgba(230, 230, 250, 0.582);
            color: rgb(35, 35, 36);
            box-shadow: 5px 5px 20px gray;
        }

        ul .error {
            color: red;
            font: 0.99rem;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <section>
        <h1>Product Create</h1>
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form action="{{ route('product.store') }}" method="post">
            @csrf
            @method('post')
            <div>
                <input type="text" name="name" placeholder="Enter Product Name">
            </div>
            <div>
                <input type="number" name="qty" placeholder="Enter Product Qty">
            </div>
            <div>
                <input type="number" name="price" placeholder="Enter Product Price">
            </div>
            <div>
                <input type="text" name="description" placeholder="Enter Product Descritpion">
            </div>
            <div>
                <input type="submit" value="Add new Product">
            </div>
        </form>
    </section>
</body>

</html>
