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
<form method="post" action="{{route('vendor.create')}}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Nama
        <input type="text" name="name" value="{{ old('name') }}"/>
    </p>
    <p>
        Payment Method
        <input type="text" name="payment_method" value="{{ old('payment_method') }}"/>
    </p>
    <p>
        Bank Account
        <input type="text" name="bank_account" value="{{ old('bank_account') }}"/>
    </p>
    <p>
        Address
        <input type="text" name="address" value="{{ old('address') }}"/>
    </p>
    <p>
        City
        <input type="text" name="city" value="{{ old('city') }}"/>
    </p>
    <p>
        Zip Code
        <input type="number" name="zip_code" value="{{ old('zip_code') }}"/>
    </p>
    <p>
        Phone
        <input type="text" name="phone" value="{{ old('phone') }}"/>
    </p>
    <p>
        Contact Name
        <input type="text" name="contact_name" value="{{ old('contact_name') }}"/>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>