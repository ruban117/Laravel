<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UsersList</title>
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-center font-bold text-3xl pt-10">All Users List</h1>
  <div class="flex items-center justify-center h-screen mx-20 my-10">
    <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-md overflow-hidden">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border-b">#Id</th>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Phone</th>
                <th class="py-2 px-4 border-b">Address</th>
                <th class="py-2 px-4 border-b">Age</th>
                <th class="py-2 px-4 border-b">City</th>
                <th class="py-2 px-4 border-b">Delete User</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr class="{{ $key % 2 === 0 ? 'bg-gray-50' : '' }}">
                    <td class="py-2 px-4 border-b">{{ $value->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $value->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $value->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $value->phone }}</td>
                    <td class="py-2 px-4 border-b">{{ $value->address }}</td>
                    <td class="py-2 px-4 border-b">{{ $value->age }}</td>
                    <td class="py-2 px-4 border-b">{{ $value->city }}</td>
                    <td class="py-2 px-4 border-b"><a href="{{ route('delete',$value->id) }}" class="bg-red-400 text-white font-bold py-2 px-4 rounded">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>