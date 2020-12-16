<h1>Customer List</h1>

<table border="3">
    <tr>
        <td>Customer ID</td>
        <td>Country</td>
    </tr>

    @foreach ($customers as $item)
        <tr>
            <td>{{$item["customer_id"]}}</td>
            <td>{{$item["country"]}}</td>

            <td>
                <a href="{{url ("editCustomer/".$item->customer_id)}}">
                    Edit
                </a>
            </td>

            <td>
                <a href="{{url ("deleteCustomer/".$item->customer_id)}}">
                    Delete
                </a>
            </td>
        </tr>
    @endforeach
</table>
