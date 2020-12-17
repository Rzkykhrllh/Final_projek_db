<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<div class="card-header">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Invoice</li>
    </ol>
<h3 class="ml-1">Invoice List</h3>
</div>

<div class="mt-4 mr-4 ml-4">

    <a href="/addinvoice">
        <button class="btn btn-primary"> 
            Add Invoice
        </button>
    </a>

    <table class="mt-4 table table-bordered table-hover" >
        <thead class="thead-dark">
            <tr>
                <td>Id</td>
                <td>Invoice Number</td>
                <td>Stock Code</td>
                <td>Quantity</td>
                <td>Invoice Date</td>
                <td>Customer Id</td>
                <td>Customer county</td>
                <td>Stock Description</td>
                <td>Stock Unit Price</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($Invoices as $item)
            <tr>
                <td>{{$item["id"]}}</td>
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
                    <a href="{{url ("editInvoice/".$item->invoice_no)}}">
                        <button class="btn btn-warning">
                        Edit
                        </button>
                    </a>
                    
                </td>

                <td>
                    <a href="{{url ("deleteInvoice/".$item->invoice_no)}}">
                        <button class="btn btn-danger">
                            Delete
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
        
    </table>

    <span>{{$Invoices->links()}}</span>
    

</div>
