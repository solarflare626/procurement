@extends('layouts.app')

@section('content')
<br>
    <div class="text-center">
        <h1>Assigning of Lot</h1>
    </div>
<br>
    @if(count($app_items) > 0)
        @foreach($app_items as $app_items)
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
            <tr><th {{$app_items->id}}><center>No.</center></th>
                <th {{$app_items->item_description}}><center>Item Description</center></th>
                <th {{$app_items->specifications}}><center>Specification</center></th>
                <th {{$app_items->unit}}><center>Unit</center></th>
                <th {{$app_items->unit_price}}><center>Unit Price</center></th>
                <th {{$app_items->quantity}}><center>Quantity</center></th>
                <th {{$app_items->amount}}><center>Amount</center></th>
                <th {{$app_items->cost_center}}><center>Cost Center</center></th>
                <th {{$app_items->procurement_name}}><center>Mode of Procurement</center></th>
                <th {{$app_items->acc_no}}><center>Account No.</center></th>
                <th {{$app_items->lot_no}}><center>Lot No.</center></th>
                <th>
                    <input type="text" class="form-control" size="16" value="Type number">
                </th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <center><th {{$app_items->id}}></center></th>
                <center><th {{$app_items->item_description}}></center></th>
                <center><th {{$app_items->specifications}}></center></th>
                <center><th {{$app_items->unit}}></center></th>
                <center><th {{$app_items->unit_price}}></center></th>
                <center><th {{$app_items->quantity}}></center></th>
                <center><th {{$app_items->amount}}></center></th>
                <center><th {{$app_items->cost_center}}></center></th>
                <center><th {{$app_items->procurement_mode}}></center></th>
                <center><th {{$app_items->acc_no}}></center></th>
                <center><th {{$app_items->lot_id}}></center></th>
            </tr>
            </tbody>
        </table>
    </div>
    <td><center>
        <a href="/createinvitation">
            <button type="button" class="btn btn-success">Submit</button>
        </a>
    </center></td>
    @endforeach
    @else
        <p>No records found</p>
    @endif
@endsection