<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">


<div class="card-header">
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Stock</li>
        </ol>
    </nav>

    <h3 class="ml-1">Stock List</h3>
</div>

<div class="mt-4 ml-4 mr-4">
    
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <td>Stock Code</td>
                <td>description</td>
                <td>Unit Price</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($Stocks as $item)
            <tr>
                <td>{{$item["stock_code"]}}</td>
                <td>{{$item["description"]}}</td>
                <td>{{$item["unit_price"]}}</td>

                <td>
                    <a href="{{url ("editStock/".$item->stock_code)}}">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                </td>

                <td>
                    <a href="{{url ("deleteStock/".$item->stock_code)}}">
                        <button class="btn btn-danger">
                            Delete
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
        
    </table>
    
    <a href="/addstock">
        <button class="btn btn-primary"> 
            Add Stock
        </button>
    </a>

</div>