<x-app-layout>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white">New Item</h2>
        <form action="{{ route('item.store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">商品名</label>
                <input type="text" name="name" value="{{ old('name') }}" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="price">価格</label>
                <input type="text" name="price" value="{{ old('price') }}" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button class="bg-blue-500 text-sm text-white py-1 px-4 rounded focus:outline-none focus:shadow-outline">保存</button>
            <a href="{{ route('item.index') }}" class="bg-white text-blue-500 font-bold py-2 px-4 rounded">戻る</a>
        </form>
    </div>
</x-app-layout>