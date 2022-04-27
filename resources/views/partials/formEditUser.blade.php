<section class="max-w-4xl p-6 mt-5 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Account settings</h2>

    <form action="/user/{{$user->id}} " method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="username">Name</label>
                <input id="username" name="name" value="{{$user->name}} " type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="username">Firstame</label>
                <input id="username" name="firstname" value="{{$user->firstname}} " type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="username">Age</label>
                <input id="username" name="age" value="{{$user->age}} " type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                
            </div>
            
            
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="username">Role_id</label>
                <select name="role_id" type="text" class="form-select" id="addTreeInputLatin"
                    aria-describedby="addTreeInputLatinHelp">
                    @foreach ($roles as $role)
                    <option value="{{$role->id}} " @if($user->role_id == $role->id) ? selected : null @endif>{{$role->role}} </option>
                        
                    @endforeach
                </select>
            </div>
            
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Ajouter</button>
        </div>
    </form>
</section>