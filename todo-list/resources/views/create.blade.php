<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-purple-300 w-screen h-screen flex justify-center items-center">
    <form action="store"
        class="w-1/2 h-1/2 py-20 flex justify-center items-center px-28 bg-purple-400 rounded-lg  shadow-2xl shadow-gray-400">
        {{-- @csrf
            @method('post') --}}
        <input type="text" name="name" class="mr-9 px-16 py-2 rounded-lg  shadow-2xl shadow-gray-400"
            placeholder="Enter Your Task">
        <input type="submit"
            class="ms-5 cursor-pointer bg-purple-900 hover:bg-purple-950 px-5 py-2 hover:text-white rounded-lg shadow-2xl shadow-gray-400"
            value="Add">
    </form>
</body>

</html>
