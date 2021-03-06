<!DOCTYPE html>
<html>

<head>
    <title>Datatables in Laravel Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h2>Laravel 8 Yajra Datatables Example</h2>
        <table class="table yajra-dt">
            <thead>
                <tr>
                    <th> Id </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th> DOB </th>
                    <th> Class </th>
                    <th> Address </th>
                    <th> Country </th>
                    <th> State </th>
                    <th> City </th>
                    <th> Status </th>
                    <th> Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

</body>

<script type="text/javascript">
    $(function () {
        var table = $('.yajra-dt').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('crud.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                
                {data: 'first_name', name: 'first_name'},
                    {data: 'last_name', name: 'last_name'},
                    {data: 'dob', name: 'dob'},
                    {data: 'class', name: 'class'},
                    {data: 'address', name: 'address'},
                    {data: 'country', name: 'country'},
                    {data: 'state', name: 'state'},
                    {data: 'city', name: 'city'},
                    {data: 'status', name: 'status'},
                    {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
                
            ]
        });

    });
</script>

</html>