<x-diary>
    <div class="max-w-6xl ml-auto mr-auto overflow-hidden bg-white rounded-lg shadow-md my-6 py-8">
        {{-- <a type="button" href="{{ route('index') }}" class="bg-white rounded-lg hover:bg-gray-100 duration-300 transition-colors border px-8 py-2.5 m-6 cursor-pointer">
            戻る
        </a> --}}
        <form action="{{ route('update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <div class="m-3 mb-8">
                    <label for="title" class="block text-md text-gray-500">タイトル<span class="text-red-400 ml-2">必須</span></label>
                    <input type="text" name="title" class="block  mt-2 w-full placeholder-gray-400/70 rounded-lg border border-gray-400 bg-white px-5 py-2.5 text-gray-700 focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40" value="{{ old('title') ?? $post->title }}" />
                    @if ($errors->has('title'))
                        @foreach ($errors->get('title') as $message)
                            <p class="mt-3 text-sm text-red-400">{{ $message }}</p>
                        @endforeach
                    @endif
                </div>
                <div class="m-3 mb-8">
                    <label for="content" class="block text-md text-gray-500">本文<span class="text-red-400 ml-2">必須</span></label>
                    <input type="text" name="content" class="block  mt-2 w-full placeholder-gray-400/70 rounded-lg border border-gray-400 bg-white px-5 py-2.5 text-gray-700 focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40" value="{{ old('content') ?? $post->content }}" />
                    @if ($errors->has('content'))
                        @foreach ($errors->get('content') as $message)
                            <p class="mt-3 text-sm text-red-400">{{ $message }}</p>
                        @endforeach
                    @endif
                </div>
                <div class="m-3 mb-6">
                    <label for="image" class="block text-md text-gray-500">画像（1枚）</label>
                    <input type="file" name="image" class="block w-full px-3 py-2 mt-2 text-sm text-gray-600 bg-white border border-gray-200 rounded-lg file:bg-gray-200 file:text-gray-700 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 cursor-pointer" />
                    @if ($errors->has('image'))
                        @foreach ($errors->get('image') as $message)
                            <p class="mt-3 text-sm text-red-400">{{ $message }}</p>
                        @endforeach
                    @endif
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-white rounded-lg hover:bg-gray-100 duration-300 transition-colors border px-8 py-2.5 m-6 cursor-pointer">
                        編集
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
</x-diary>
