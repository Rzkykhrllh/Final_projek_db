<h1>Customer List</h1>

<table border="3">
    <tr>
        <td>Stock Code</td>
        <td>description</td>
        <td>Unit Price</td>
    </tr>

    @foreach ($Stocks as $item)
        <tr>
            <td>{{$item["stock_code"]}}</td>
            <td>{{$item["description"]}}</td>
            <td>{{$item["unit_price"]}}</td>

            <td>
                <a href="{{url ("editStock/".$item->stock_code)}}">
                    Edit
                </a>
            </td>

            <td>
                <a href="{{url ("deleteStock/".$item->stock_code)}}">
                    Delete
                </a>
            </td>
        </tr>
    @endforeach
</table>
<button><a href="/addstock">Tambah stock ?</a> </button>
