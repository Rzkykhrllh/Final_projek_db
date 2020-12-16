<h1>Customer List</h1>

<table border="3">
    <tr>
        <td>Invoice Number</td>
        <td>Stock Code</td>
        <td>Quantity</td>
        <td>Invoice Date</td>
        <td>Customer Id</td>
        <td>Customer county</td>
        <td>Stock Description</td>
        <td>Stock Unit Price</td>

    </tr>

    @foreach ($Invoices as $item)
        <tr>
            <td>{{$item["invoice_no"]}}</td>
            <td>{{$item["stock_code"]}}</td>
            <td>{{$item["quantity"]}}</td>
            <td>{{$item["invoice_date"]}}</td>
            <td>{{$item["customer_id"]}}</td>
            <td>{{$item->customer->country}}</td>
            <td>{{$item->stock->description}}</td>
            <td>{{$item->stock->unit_price}}</td>
            {{-- {{$item->stock}} --}}

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
<button><a href="/addinvoice">Tambah Invoice</a> </button>
