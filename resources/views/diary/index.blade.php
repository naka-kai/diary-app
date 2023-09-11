<x-diary>
    <div class="flex justify-start">
        <a type="button" href="{{ route('create') }}" class="bg-white rounded-lg hover:bg-gray-100 duration-300 transition-colors border px-8 py-2.5 m-6 cursor-pointer">
            新規投稿
        </a>
    </div>
    @foreach ($posts as $post)
        <div class="max-w-xl ml-auto mr-auto overflow-hidden bg-white rounded-lg shadow-md mb-24">
            <img class="object-cover w-full h-64" src="{{ Storage::url($post->image) }}" alt="Article">
            <a href="{{ route('show',['id' => $post->id]) }}">
                <div class="p-6">
                    <div>
                        <div class="block mt-2 text-xl font-semibold text-gray-800 transition-colors duration-300 transform hover:text-gray-600 hover:underline" tabindex="0" role="link">{{ $post->title }}</div>
                        <p class="mt-2 text-sm text-gray-600">{{ $post->content }}</p>
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center">
                            <span class="mx-1 text-xs text-gray-600">{{ $post->created_at }}</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
    <div class="my-6 max-w-xl mr-auto ml-auto">
        {{ $posts->links() }}
    </div>
</x-diary>
