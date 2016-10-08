<html>
<head>
    <title>Vendor - Catering Management System</title>
</head>
<body>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="{{route('vendor.update', ['id' => $vendor->id])}}">

    <input type="hidden" name="_method" value="PUT">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Nama
        <input type="text" name="name" value="{{ $vendor->name }}"/>
    </p>
    <p>
        Payment Method
        <input type="text" name="payment_method" value="{{ $vendor->payment_method }}"/>
    </p>
    <p>
        Bank Account
        <input type="text" name="bank_account" value="{{ $vendor->bank_account }}"/>
    </p>
    <p>
        Address
        <input type="text" name="address" value="{{ $vendor->address }}"/>
    </p>
    <p>
        City
        <input type="text" name="city" value="{{ $vendor->city }}"/>
    </p>
    <p>
        Zip Code
        <input type="number" name="zip_code" value="{{ $vendor->zip_code }}"/>
    </p>
    <p>
        Phone
        <input type="text" name="phone" value="{{ $vendor->phone }}"/>
    </p>
    <p>
        Contact Name
        <input type="text" name="contact_name" value="{{ $vendor->contact_name }}"/>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>