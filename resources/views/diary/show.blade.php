<x-diary>
    <div class="max-w-6xl ml-auto mr-auto overflow-hidden bg-white rounded-lg shadow-md my-6">
        <a type="button" href="{{ route('index') }}" class="bg-white rounded-lg hover:bg-gray-100 duration-300 transition-colors border px-8 py-2.5 m-6 cursor-pointer">
            戻る
        </a>
        <div class="block mt-2 text-3xl font-semibold text-gray-800 transition-colors duration-300 transform mb-6 px-6" tabindex="0" role="link">{{ $post->title }}</div>
        <img class="object-cover w-full h-64" src="{{ Storage::url($post->image) }}" alt="Article">
            <div class="p-6">
                <div>
                    <p class="mt-2 text-xl text-gray-600">{{ $post->content }}</p>
                </div>

                <div class="mt-4">
                    <div class="flex items-center">
                        <span class="mx-1 text-md text-gray-600">{{ $post->created_at }}</span>
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <a type="button" href="{{ route('edit', ['id' => $post->id]); }}" class="bg-white rounded-lg hover:bg-gray-100 duration-300 transition-colors border px-8 py-2.5 m-6 cursor-pointer">
                    編集
                </a>
                <form action="{{ route('destroy', ['id' => $post->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('本当に削除しますか？');" class="bg-white rounded-lg hover:bg-gray-100 duration-300 transition-colors border px-8 py-2.5 m-6 cursor-pointer text-red-500">
                        削除
                    </button>
                </form>
            </div>
        </div>
</x-diary>
