<html>
<head>
    <title>Vendor - Catering Management System</title>
</head>
<body>
@if(session('success'))
    {{session('success')}}
@endif
<a href="{{route('vendor.create')}}">Tambah Baru</a>
<table border="1" align="center">
    <thead>
    <th>Name</th>
    <th>Payment Method</th>
    <th>Bank Account</th>
    <th>Address</th>
    <th>City</th>
    <th>Zip Code</th>
    <th>Phone</th>
    <th>Contact Name</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($vendors as $vendor)
        <tr>
            <td>{{$vendor->name}}</td>
            <td>{{$vendor->payment_method}}</td>
            <td>{{$vendor->bank_account}}</td>
            <td>{{$vendor->address}}</td>
            <td>{{$vendor->city}}</td>
            <td>{{$vendor->zip_code}}</td>
            <td>{{$vendor->phone}}</td>
            <td>{{$vendor->contact_name}}</td>
            <td>
                <a href="{{route('vendor.update', ['id' => $vendor->id])}}">Update</a>
                <a href="{{route('vendor.delete', ['id' => $vendor->id])}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>