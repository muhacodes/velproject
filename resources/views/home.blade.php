<html>
<head>
<title> Orders </title>

<link href="/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.2/css/all.min.css" integrity="sha512-NicFTMUg/LwBeG8C7VG+gC4YiiRtQACl98QdkmfsLy37RzXdkaUAuPyVMND0olPP4Jn8M/ctesGSB2pgUBDRIw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="////cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css" />
<link href="/app.css" rel="stylesheet">
</head>


<body>

<div class="container">
    <h2 class="text-center"> Mandela | CJs  </h2>
    <a class="btn btn-default text-primary "> Logout </a>
    <table id="mytable" class="table table-responsive ">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">OrderNumber</th>
        <th scope="col"> Customer </th>
        <th scope="col"> Address </th>
        <th scope="col"> Amount </th>
        <th scope="col"> item </th>
        <th scope="col"> Agent </th>
        <th scope="col"> Status </th>
        <th> Action </th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $data)
        @if($data->status == "approved")
        <tr class="approved">
            <td scope="row"> {{ $loop->index+1 }} </td>
            <td> {{ $data->order_id }} </td>
            <td> {{ $data->customer }} </td>
            <td> {{ $data->address }} </td>
            <td> {{ $data->amount }} </td>
            <td> {{ $data->Item }} </td>
            <td> {{ $data->agent }} </td>
            <td> {{ $data->status }} </td>
            <td> 
                <a data-id="{{ $data->id }}" class=" approve "> <i class="fa-2x fas fa-check"></i> </a> 
                <a data-id="{{ $data->id }}" class=" reject "> <i class="fa-2x fas fa-window-close"></i> </a>
            </td>
        </tr>
        @elseif($data->status == "rejected")
        <tr class="rejected">
            <td scope="row"> {{ $loop->index+1 }} </td>
            <td> {{ $data->order_id }} </td>
            <td> {{ $data->customer }} </td>
            <td> {{ $data->address }} </td>
            <td> {{ $data->amount }} </td>
            <td> {{ $data->Item }} </td>
            <td> {{ $data->agent }} </td>
            <td> {{ $data->status }} </td>
            <td> 
                <a data-id="{{ $data->id }}" class=" approve "> <i class="fa-2x fas fa-check"></i> </a> 
                <a data-id="{{ $data->id }}" class=" reject "> <i class="fa-2x fas fa-window-close"></i> </a>
            </td>
        </tr>
        @else
        <tr>
            <td scope="row"> {{ $loop->index+1 }} </td>
            <td> {{ $data->order_id }} </td>
            <td> {{ $data->customer }} </td>
            <td> {{ $data->address }} </td>
            <td> {{ $data->amount }} </td>
            <td> {{ $data->Item }} </td>
            <td> {{ $data->agent }} </td>
            <td> {{ $data->status }} </td>
            <td> 
                <a data-id="{{ $data->id }}" class=" approve "> <i class="fa-2x fas fa-check"></i> </a> 
                <a data-id="{{ $data->id }}" class=" reject "> <i class="fa-2x fas fa-window-close"></i> </a>
            </td>
        </tr>
        @endif
        @endforeach()
       
    </tbody>
    </table>
</div>


<script src="/jquery/jquery.js"> </script>
<script src="/app.js"> </script>
<script src="////cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#mytable').DataTable();
} );
</script>
</body>


</html>