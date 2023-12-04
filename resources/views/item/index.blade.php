<x-app-layout>
    <div class="w-full max-auto">

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white">Item List</h2>

            <div class="mb-3">
                <form action="{{ route('item.index') }}" method="get">
                    <input type="text" name="item_name">
                    <button>{{ __('message.search') }}</button>
                </form>
            </div>

            <a href="{{ route('item.create') }}" class="bg-white text-blue-500 font-bold py-2 px-4 rounded">New</a>
            <table class="text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <th scope="col" class="px-6 py-3">
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('Name') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('Price') }}
                    </th>
                </thead>
                <tbody>
                    <!-- 繰り返し表示 -->
                    @foreach($items as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            <a href="{{ route('item.edit', $item->id) }}">Edit</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('item.show', $item->id) }}">{{ $item->name }}</a>
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->price }}円
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>