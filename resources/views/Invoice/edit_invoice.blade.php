<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<div class="card-header">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/invoice">Invoice</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    <h3 class="ml-1">Edit Invoice</h3>
</div>

<form action="/editinvoice" method="POST" class="mt-4">
    @csrf

    <div class="form-group ml-4 mr-4">
        <label for="invoice_id">Id</label>
        <input readonly class="form-control" id="invoice_id" type="text" name="invoice_id" value="{{$data["invoice_id"]}}">
    </div>
{{-- 
    <div class="form-group ml-4 mr-4">
        <label for="invoice_no">Invoice Number</label>
        <input readonly class="form-control" id="invoice_no" type="text" name="invoice_no" value="{{$data["invoice_no"]}}">
    </div> --}}

    <div class="form-group ml-4 mr-4">
        <label for="stock_id">Stock Code</label>
        <input class="form-control" id="stock_id" type="text" name="stock_id" value="{{$data["stock_id"]}}">
    </div>

    <div class="form-group ml-4 mr-4">
        <label for="quantity">Quantity</label>
        <input class="form-control" id="quantity" type="text" name="quantity" value={{$data["quantity"]}} >
    </div>

    <div class="form-group ml-4 mr-4">
        <label for="invoice_date">Date</label>
        <input class="form-control" id="invoice_date" type="text" name="invoice_date" value="{{$data["invoice_date"]}}">
    </div>

    <div class="form-group ml-4 mr-4">
        <label for="customer_id">Customer Id</label>
        <input class="form-control" id="customer_id" type="text" name="customer_id" value="{{$data["customer_id"]}}">
    </div>

    <div class="mr-4 ml-4">
        <button class="btn btn-primary btn-block" type="submit">Update Invoice</button>
    </div>
</form>