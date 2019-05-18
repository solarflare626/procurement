<!Doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>{{config('app-demo', 'Procurement Process')}}</title>   
        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.8.2/js/all.css" rel="stylesheet">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"></script>
        <style type="text/css" media="print">
        @page {
            size: auto;   /* auto is the initial value */
            margin: 0;  /* this affects the margin in the printer settings */
        }
        </style>
    </head>
    
    <body>
        <div class = "container">
        <br>
        <br>
        <br>
        <br>
        
        <b>Name of Project: </b><span>{{$invitation->project_name}}</span>
        <br>
        <b>Procurement Type: </b><span>{{$invitation->procurement_type}}</span>
        <br>
        <b>Reference No.: </b><span>{{$invitation->reference_no}}</span>
        <br>
        <b>Location: </b><span>{{$invitation->location}}</span>
        <br>
        <b>Approved Budget: </b><span>{{$invitation->approved_budget}}</span>
        <br>
        <b >Source of Fund: </b><span>{{$invitation->fund_source}}</span>
        <br>
        <b >Non-refundable Bidder Fee: </b><span>{{$invitation->bidder_fee}}</span>
        <br>
        <b>Delivery Period: </b><span>{{$invitation->delivery_period}}</span>
        <br>
        <br>

        </div>
        <br>
        <br>
        <br>
        <div class="container">
                <div id="hold-lots">
                @php
                    $grand_total = 0;
                @endphp
                    @foreach($invitation->invitation_lots as $invitation_lot)
                    @php
                     $cur_lot = $invitation_lot->lot();
                     $i = rand();
                     $total_amount = $cur_lot->total_amount();
                     $grand_total += $total_amount;
                     $items = $cur_lot->items();
                    @endphp
                    <div id="div-{{$i}}">
 <div class="float-left">
<p><b>LOT {{$cur_lot->lot_no}}<b></p>
 </div>
 <table class="table table-hover">
<thead class="thead-light">
<tr>
<th scope="col" style="width:5%"><center>No.</center></th>
<th scope="col" style="width:20%"><center>Item Description</center></th>
<th scope="col" style="width:15%"><center>Specification</center></th>
<th scope="col" style="width:5%"><center>Unit</center></th>
<th scope="col" style="width:20%"><center>Unit Price</center></th>
<th scope="col" style="width:8%"><center>Quantity</center></th>
<th scope="col" style="width:30%"><center>Amount</center></th>
</tr>
</thead>
<tbody id="tbody-{{$i}}">
@foreach($items as $item)
<tr>
    <th scope="row"><center>{{$item->id}}</center></th>
    <td data-toggle="tooltip" title="Items!"><center>{{$item->item_description}}</center></td>
    <td data-toggle="tooltip" title="Items!"><center>{{$item->specifications}}</center></td>
    <td data-toggle="tooltip" title="Items!"><center>{{$item->unit}}</center></td>
    <td data-toggle="tooltip" title="Items!"><center>P {{$item->unit_price}}</center></td>
    <td data-toggle="tooltip" title="Items!"><center>{{$item->quantity}}</center></td>
    <td data-toggle="tooltip" title="Items!"><center>P {{$item->amount}}</center></td>
    
</tr>
@endforeach
</tbody>
</table>
<div class="pull-right"><b>Total Amount: P</b><span>{{$total_amount}}  </span></div>


</div>
@endforeach
                            
                </div>

<br>
<br>
<div class="pull-right"><b>Grand Total Amount: P</b><span>{{$grand_total}}  </span></div>

            
            </div>
<script>
$( document ).ready(function() {
    
    window.print();
});
</script>
    </body>

</html>
