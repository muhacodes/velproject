<!DOCTYPE html>
<html lang="en">
<head>
<title> PosJobCard </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

<link href="/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.2/css/all.min.css" integrity="sha512-NicFTMUg/LwBeG8C7VG+gC4YiiRtQACl98QdkmfsLy37RzXdkaUAuPyVMND0olPP4Jn8M/ctesGSB2pgUBDRIw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="////cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css" />
<link href="/app.css" rel="stylesheet">
</head>


<body>

<div id="container" class="container-fluid">
    <h2 class="text-center"> PosJobCard  </h2>
    <a href="/user/logout" class="btn btn-warning text-primary "> Logout </a>
    
    <div id="filter" class="row">
        <div class="col-md-6">
            <form method="get" action="{{ route('jobcard-all') }}">
                <h3 style="display: inline;"> Filter </h3>
                <input value="{{ request()->get('date') }}" type="date" name="date" />
                <select name="filter">
                    @if(request()->get('filter'))
                    <option value="{{ request()->get('filter') }}"> {{ request()->get('filter') }} </option>
                    @endif
                    <option value="pending"> --- </option>
                    <option value="all"> All </option>
                    <option value="pending"> Pending </option>
                    <option vlaue="Approved"> Approved </option>
                    <option value="Rejected"> Rejected </option>
                </select>
                <button class="btn btn-sm btn-success" type="submit"> Filter </button> |
                <a href="{{ route('home') }}" class="btn btn-info"> Today </a>

            </form>
        </div>
    </div>
    <table id="mytable" class="table  table-responsive ">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Jobcard No</th>
        <th scope="col"> Branch </th>
        <th scope="col"> Customer Name </th>
        <th scope="col"> Description </th>
        <th scope="col"> Quantity </th>
        <th scope="col"> Price </th>
        <th scope="col"> Actual Price </th>
        <th scope="col"> Price Difference </th>
        <th scope="col"> Total Difference </th>
        <th scope="col"> Date </th>
        <th scope="col"> Status </th>
        <th> Approve </th>
        <th> Reject </th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $data)
        @if($data->is_approved == "approved")
        <tr class="approved">
            <td scope="row"> {{ $loop->index+1 }} </td>
            <td> {{ $data->job_card_no }} </td>
            <td> {{ $data->branch_name }} </td>
            <td style="width:10px"> {{ $data->customer_name }} </td>
            <td> {{ $data->description }} </td>
            <td> {{ $data->quantity }} </td>
            <td> {{ $data->price }} </td>
            <td> {{ $data->actual_amount }} </td>
            <td> {{ $data->price_difference }} </td>
            <td> {{ $data->total_difference }} </td>
            <td> {{ $data->created_at }} </td>
            <td> <strong>{{ $data->is_approved }}</strong> -  by {{ $data->user['name'] }} on {{ $data->updated_at }} </td>
            <td> <a data-id="{{ $data->id }}" class=" approve text-white btn btn-success "> Approve </a> </td>
            <td> <a data-id="{{ $data->id }}" class=" reject text-white  btn btn-danger"> Reject </a></td>
        </tr>
        @elseif($data->is_approved == "rejected")
        <tr class="rejected">
        <td scope="row"> {{ $loop->index+1 }} </td>
            <td> {{ $data->job_card_no }} </td>
            <td> {{ $data->branch_name }} </td>
            <td> {{ $data->customer_name }} </td>
            <td> {{ $data->description }} </td>
            <td> {{ $data->quantity }} </td>
            <td> {{ $data->price }} </td>
            <td> {{ $data->actual_amount }} </td>
            <td> {{ $data->price_difference }} </td>
            <td> {{ $data->total_difference }} </td>
            <td> {{ $data->created_at }} </td>
            <td> <strong>{{ $data->is_approved }}</strong> -  by {{ $data->user['name'] }} on {{ $data->updated_at }} </td>
            <td> <a data-id="{{ $data->id }}" class=" approve text-white btn btn-success "> Approve </a> </td>
            <td> <a data-id="{{ $data->id }}" class=" reject text-white  btn btn-danger"> Reject </a></td>
        </tr>
        @else
        <tr>
            <td scope="row"> {{ $loop->index+1 }} </td>
            <td> {{ $data->job_card_no }} </td>
            <td> {{ $data->branch_name }} </td>
            <td> {{ $data->customer_name }} </td>
            <td> {{ $data->description }} </td>
            <td> {{ $data->quantity }} </td>
            <td> {{ $data->price }} </td>
            <td> {{ $data->actual_amount }} </td>
            <td> {{ $data->price_difference }} </td>
            <td> {{ $data->total_difference }} </td>
            <td> {{ $data->created_at }} </td>
            <td> {{ $data->created_at }} </td>
            <td> <a data-id="{{ $data->id }}" class=" approve text-white btn btn-success "> Approve </a> </td>
            <td> <a data-id="{{ $data->id }}" class=" reject text-white  btn btn-danger"> Reject </a></td>
        </tr>
        @endif
        @endforeach()
       
    </tbody>
    </table>
</div>


<script src="/jquery/jquery.js"> </script>
<script src="////cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="/app.js"> </script>
<script>
    $(document).ready( function () {
    $('#mytable').DataTable(
        // "ordering": false
    );
} );
</script>
</body>


</html>