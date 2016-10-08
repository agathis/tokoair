<html>
<head>
    <title>Requisition - Catering Management System</title>
</head>
<body>
@if(session('success'))
    {{session('success')}}
@endif
<a href="{{route('requisition.create')}}">Tambah Baru</a>
<table border="1" align="center">
    <thead>
    <th>Number</th>
    <th>Voyage Planning</th>
    <th>Date</th>
    <th>Total Amount</th>
    <th>Vendor</th>
    <th>Requested By</th>
    <th>Approval Status</th>
    <th>Approval Date</th>
    <th>Approved By</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($requisitions as $requisition)
        <tr>
            <td>
                {{$requisition->number}}
            </td>
            <td>
                @foreach($voyage_plannings as $voyage_planning)
                    @if($voyage_planning->id == $requisition->voyage_planning_id)
                        {{$voyage_planning->crew_qty}}
                    @endif
                @endforeach
            </td>
            <td>{{date_format(date_create($requisition->date), 'd-m-Y')}}</td>
            <td>
                {{$requisition->total_amount}}
            </td>
            <td>
                @foreach($vendors as $vendor)
                    @if($vendor->id == $requisition->vendor_id)
                        {{$vendor->name}}
                    @endif
                @endforeach
            </td>
            <td>
                {{$requisition->requested_by}}
            </td>
            <td>
                @if($requisition->approval_status == 0)
                    Not Approved
                @elseif($requisition->approval_status == 1)
                    Need Revised
                @elseif($requisition->approval_status == 2)
                    Approved
                @else
                    Status Error
                @endif
            </td>
            <td>
                @if(!empty($requisition->approval_date))
                    {{date_format(date_create($requisition->approval_date), 'd-m-Y')}}
                @endif

            </td>
            <td>
                {{$requisition->approved_by}}
            </td>
            <td>
                @if($requisition->approval_status != 2)
                    <a href="{{route('requisition.status', ['id' => $requisition->id, 'status' => 1])}}">Revised</a>
                    <a href="{{route('requisition.status', ['id' => $requisition->id, 'status' => 2])}}">Approval</a>
                @endif
                <a href="{{route('requisition.update', ['id' => $requisition->id])}}">Update</a>
                <a href="{{route('requisition.delete', ['id' => $requisition->id])}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>