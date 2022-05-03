<section class="text-4xl text-center">
    
<h1>Geoffrey</h1>
<h1>Gosset</h1>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold text-center">All users</h1>
            <!-- component -->
            <div class="antialiased mt-10 bg-gray-100 text-gray-600 h-screen px-4">
                <div class="flex flex-col justify-center">
                    <!-- Table -->
                    <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                        <header class="px-5 py-4 border-b border-gray-100">
                            <h2 class="font-semibold text-gray-800">Customers</h2>
                        </header>
                        <div class="p-3">
                            <div class="overflow-x-auto">
                                <table class="table-auto w-full">
                                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                        <tr>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-left">Name</div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-left">email</div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-left">Role</div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-left">Action</div>
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm divide-y divide-gray-100">
                                        @foreach ($users as $item)
                                            <tr>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="font-medium text-gray-800">{{$item->firstname}}</div>
                                                    </div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-left">{{$item->email}}</div>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="text-left font-medium text-green-500">{{$item->role->role}}</div>
                                                </td>
                                                @can('admin', $item)
                                                <td>
                                                    <a class="text-white bg-yellow-400 mr-2 px-2 rounded" href="/user/{{$item->id}}/edit ">Modifier</a>
                                                </td>
                                                <td>
                                                    <form action="/delete/{{$item->id}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button
                                                        class="text-white bg-red-700 px-2 rounded">Supprimer</button>

                                                    </form>
                                                </td>
                                                @endcan
                                            </tr>
                                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>