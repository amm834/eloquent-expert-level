<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <main class="py-8 px-4">
                    <form action="{{ route("posts.store") }}" method="post">
                        @csrf
                        <x-input-label class="mb-3">Name</x-input-label>
                        <x-text-input class="mb-3" type="text" name="title"/>

                        <x-input-label class="mb-3">Body</x-input-label>
                        <x-text-input type="text" name="body"/>

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded
                        font-medium">Submit
                        </button>
                    </form>

                    <div>

                        @foreach(\App\Models\Post::all() as $post)
                            <div class="mb-4">
                                <h2 class="text-lg font-bold">{{ $post->title }}</h2>
                                <p class="text-sm">{{ $post->body }}</p>
                            </div>
                        @endforeach
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
