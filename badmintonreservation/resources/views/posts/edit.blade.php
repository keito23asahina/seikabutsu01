<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿の編集
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('posts.update', $post) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">タイトル</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-4">
                            <label for="body" class="block text-gray-700 text-sm font-bold mb-2">本文</label>
                            <textarea name="body" id="body" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('body', $post->body) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="gym_id" class="block text-gray-700 text-sm font-bold mb-2">体育館</label>
                            <select name="gym_id" id="gym_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @foreach($gyms as $gym)
                                    <option value="{{ $gym->id }}" {{ old('gym_id', $post->gym_id) == $gym->id ? 'selected' : '' }}>
                                        {{ $gym->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                更新
                            </button>
                            <a href="{{ route('posts.show', $post) }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                キャンセル
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>