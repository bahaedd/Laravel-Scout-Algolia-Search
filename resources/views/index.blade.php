<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel Scout</title>
</head>
<body>
    <div class="container mx-auto">
        <form class="w-full max-w-sm" method="GET" action="{{ url('index') }}">
            <div class="flex items-center border-b border-teal-500 py-2">
              <input name="search" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Search ..." aria-label="Full name">
              <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                Search
              </button>
            </div>
        </form><br>
        <table class="table-fixed">
            <thead>
              <tr>
                <th class="border w-1/2 px-4 py-2">ID</th>
                <th class="border w-1/4 px-4 py-2">Name</th>
                <th class="border w-1/4 px-4 py-2">Email</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($users as $user)
              <tr class="bg-gray-100">
                <td class="border px-4 py-2">{{ $user->id }}</td>
                <td class="border px-4 py-2">{{ $user->name }}</td>
                <td class="border px-4 py-2">{{ $user->email }}</td>
              </tr>
              @empty
                <p>No records Founds :(</p>
              @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>
