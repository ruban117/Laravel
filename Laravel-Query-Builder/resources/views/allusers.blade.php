<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Showing All the users</title>
  @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-center pt-14 text-3xl font-bold">List Of All Users From Database</h1>
    <div class="flex items-center justify-center h-screen mx-40">
        <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-md overflow-hidden">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b">Id</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Phone</th>
                    <th class="py-2 px-4 border-b">Address</th>
                    <th class="py-2 px-4 border-b">Created At</th>
                    <th class="py-2 px-4 border-b">Updated At</th>
                    <th class="py-2 px-4 border-b">View User</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($data as $key => $value)
                    <tr class="{{ $key % 2 === 0 ? 'bg-gray-50' : '' }}">
                        <td class="py-2 px-4 border-b">{{ $i }}</td>
                        <td class="py-2 px-4 border-b">{{ $value->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $value->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $value->phone }}</td>
                        <td class="py-2 px-4 border-b">{{ $value->address }}</td>
                        <td class="py-2 px-4 border-b">{{ $value->created_at }}</td>
                        <td class="py-2 px-4 border-b">{{ $value->updated_at }}</td>
                        <td class="py-2 px-4 border-b"><a href="{{ route('view.user',$value->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a></td>
                    </tr>
                    @php
                    $i++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>