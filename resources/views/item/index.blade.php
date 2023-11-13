<x-app-layout>
    <h2>Item List</h2>

    <a href="{{ route('item.create') }}">New</a>
    <table>
        @foreach($items as $id => $item)
        <tr>
            <td>
                <a href="{{ route('item.show', $id) }}">{{ $item }}</a>
            </td>
        </tr>
        @endforeach
    </table>
</x-app-layout>