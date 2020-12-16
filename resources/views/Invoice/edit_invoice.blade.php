<h1>Edit Customer</h1>
<h2>{{$data}}</h2>

<form action="/edit" method="POST">
    @csrf
    {{-- @method("PUT") --}}

    <input type="hidden" name="invoice_no" value="{{$data["invoice_no"]}}"> </br>
    <input type="text" name="stock_code" value="{{$data["stock_code"]}}"> </br>
    <input type="text" name="quantity" value="{{$data["quantity"]}}"> </br>
    <input type="text" name="invoice_date" value="{{$data["invoice_date"]}}"> </br>
    <input type="text" name="customer_id" value="{{$data["customer_id"]}}"> </br>

    <button type="submit">Update Invoice</button>
</form>