<h1 class="text-center mt-11 text-4xl">Page articles</h1>
<div class="flex flex-wrap">
    @foreach ($articles as $article)
        <div
            class="max-w-2xl flex flex-col justify-between my-5 px-8 py-4 mx-auto bg-gray-100 rounded-lg shadow-md dark:bg-green-700">
            <div class="flex items-center justify-between">
                <span class="text-sm font-light text-gray-600 dark:text-gray-400">{{ $article->titre }}</span>
                <a
                    class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500">{{ $article->user->name }}</a>
            </div>
            <div class="mt-2">
                <p class="font-bold text-gray-700 dark:text-white">{{ $article->contenu }}</p>
            </div>
            <div class="flex justify-end">

                <a href="/article/{{ $article->id }}" class="text-white bg-green-700 mr-2 px-2 rounded">Lire
                    l'article</a>

                @can('member', $article)
                    <a href="/article/{{ $article->id }}/edit" class="text-white bg-black mr-2 px-2 rounded">Modifier
                        l'article</a>
                @endcan

                @can('redac', $article)
                    <form action="/article/{{ $article->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-white bg-red-700 px-2 rounded">Supprimer</button>
                    </form>
                @endcan
            </div>
        </div>
    @endforeach
</div>
