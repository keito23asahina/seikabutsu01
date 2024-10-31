<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('新規投稿') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">タイトル:</label>
                            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div class="mb-4">
                            <label for="body" class="block text-gray-700 text-sm font-bold mb-2">本文:</label>
                            <textarea name="body" id="body" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                        </div>

                        <!-- 都道府県選択 -->
                        <div class="mb-4">
                            <label for="prefecture" class="block text-gray-700 text-sm font-bold mb-2">都道府県:</label>
                            <select name="prefecture" id="prefecture" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                <option value="">選択してください</option>
                                @foreach($prefectures as $prefecture)
                                    <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- 市区町村選択 -->
                        <div class="mb-4">
                            <label for="municipality" class="block text-gray-700 text-sm font-bold mb-2">市区町村:</label>
                            <select name="municipality" id="municipality" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                <option value="">都道府県を選択してください</option>
                                <!-- 選択された都道府県に応じて、市区町村をJavaScriptで動的に挿入 -->
                            </select>
                        </div>

                        <!-- 体育館名の動的検索 -->
                        <div class="mb-4">
                            <label for="gym" class="block text-gray-700 text-sm font-bold mb-2">体育館:</label>
                            <input type="text" name="gym" id="gym" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" autocomplete="off">
                            <div id="gym-suggestions" class="border rounded bg-white mt-2 hidden">
                                <!-- ここに検索結果が表示されます -->
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                投稿する
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>