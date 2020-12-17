<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<div class="card-header"><nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Country</li>
    </ol>
<h3 class="ml-1">Country List</h3>
</div>

<div class="mt-4 ml-4 mr-4">

    <a href="/addcountry">
        <button class="btn btn-primary"> 
            Add Country
        </button>
    </a>

    <table class="mt-4 table table-bordered table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>Country Name</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($countries as $item)
            <tr>
                <td>{{$item["country_id"]}}</td>
                <td>{{$item->country["country_name"]}}</td>

                <td>
                    <a href="{{url ("editCountry/".$item->country_id)}}">
                        <button class="btn btn-warning">
                            Edit
                        </button>
                    </a>
                </td>

                <td>
                    <a href="{{url ("deleteCountry/".$item->country_id)}}">
                        <button class="btn btn-danger">
                            Delete
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
</div>
