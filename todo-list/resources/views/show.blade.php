<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show List</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-purple-300 w-screen h-screen flex justify-center items-center">
    <section
        class="w-8/12 min-h-min bg-purple-400 rounded-lg flex flex-col shadow-2xl shadow-gray-400 justify-evenly items-center">
        <h1 class="mt-5">Hello</h1>
        <table class="table-auto border-collapse my-5 border border-slate-500">
            <thead>
                <tr>
                    <th class="border border-slate-600 p-4 py-2">No</th>
                    <th class="border border-slate-600 p-4 py-2">To Do</th>
                    <th class="border border-slate-600 p-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todo_lists as $todo)
                    <tr>
                        <td class="border border-slate-600 px-4 py-2">{{ $todo->id }}</td>
                        <td class="border border-slate-600 px-4 py-2">{{ $todo->name }}</td>
                        <td class="border border-slate-600 px-4 py-2">
                            <span>
                                <a href="delete/{{ $todo->id }}" class="bg-red-500 shadow-2xl shadow-gray-400 hover:bg-red-700 hover:text-white rounded-lg px-3 py-1 mr-3">Delete</a>
                            </span>
                            <span>
                                <a href="edit/{{ $todo->id }}" class="bg-sky-500 shadow-2xl shadow-gray-400 hover:bg-sky-700 hover:text-white rounded-lg px-3 py-1">Edit</a>
                            </span>
                        </td>
                    </tr>
                @endforeach
                {{-- {{ todo_list }} --}}
            </tbody>
        </table>
    </section>
</body>

</html>
