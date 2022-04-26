<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <a class="m-20 text-4xl text-white bg-green-700 mr-2 px-2 rounded" href="/article/create">Créer un article</a>
    <div class="py-12">
        @include('partials.afficheArticles')
    </div>
</x-app-layout>
