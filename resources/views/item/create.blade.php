<x-app-layout>
    <h2>Item</h2>
    <div>
        <form action="{{ route('item.store') }}" method="post">
            @csrf

            <div>
                <label>商品名</label>
                <input type="text" name="name" value="{{ old('name') }}">
            </div>
            <div>
                <label>価格</label>
                <input type="text" name="price" value="{{ old('price') }}">
            </div>
            <button>保存</button>
        </form>
    </div>
</x-app-layout>