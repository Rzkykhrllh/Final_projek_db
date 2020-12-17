<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<div class="card-header"><nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Customer</li>
    </ol>
<h3 class="ml-1">Customer List</h3>
</div>

<div class="mt-4 ml-4 mr-4">
    <a href="/addcustomer">
        <button class="btn btn-primary"> 
            Add Customer
        </button>
    </a>
    <table class="mt-4 table table-bordered table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Country Id</td>
                <td>Country</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($customers as $item)
            <tr>
                <td>{{$item["customer_id"]}}</td>
                <td>{{$item["customer_name"]}}</td>
                <td>{{$item["customer_email"]}}</td>
                <td>{{$item["country_id"]}}</td>
                <td>{{$item->country->country_name}}</td>

                <td>
                    <a href="{{url ("editCustomer/".$item->customer_id)}}">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                </td>

                <td>
                    <a href="{{url ("deleteCustomer/".$item->customer_id)}}">
                        <button class="btn btn-danger">
                            Delete
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <span>{{$customers->links()}}</span>
</div>
