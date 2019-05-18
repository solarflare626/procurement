@extends('layouts.app')
    
@section('content')
    @php
        if(isset($_GET['mode'])){
            $mode = $_GET['mode'];
        }else{
            $mode = null;
        }
    @endphp
    <br>

    <div class="container">
    <a href="/">
        <button type="button" class="btn btn-default">Go back</button>
    </a>

    <div class="text-center">

        <h1>{{$title}} to {{$invitation->project_name}}</h1>

    </div>
            
            <div class="pull-right">
                @if($mode == "edit")
                    <a href="/invitations/{{$invitation->id}}/pre-bidding" class="btn btn-primary">Pre Bidding</a>
                    <a href="/invitations/{{$invitation->id}}/actual-bidding" class="btn btn-primary">Actual Bidding</a>
                    <a href="/invitations/{{$invitation->id}}/post-qualification" class="btn btn-primary">Post Qualification</a>
                @endif
                <button id="btn-add-slot" class="btn btn-primary">Add slot</button>
            </div>
            
            <br>
            <br>
            <br>
            <form method="POST" action="/invitations/{{$invitation->id}}/assign/lots/submit">    
            @csrf
            <div class="container">
                <div id="hold-lots">
                    @foreach($invitation->invitation_lots as $invitation_lot)
                    @php
                     $cur_lot = $invitation_lot->lot();
                     $i = rand();
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
</div>
                    @endforeach
                            
                </div>
            
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <button type="submit" class="btn btn-primary center-block">Submit</button>
            </div>
            </form>
            </div>
        </div>
        <br>
    
    <div class="container">
        
                
        </div>
        <script>


function makeid(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}

$("#btn-add-slot").click(function(){
 var i = makeid(12);
 console.log(i);
 
 var e = '<div id="div-'+i+'">'+
 '<div class="float-left">'+
 '<select id="select-lot-'+i+'" class="select-lot" name="lots[]">'+
'<option value="" disabled selected>Select Lot</option>'+
@foreach  ($lots as $lot)
'<option value="{{$lot->id}}">Lot {{$lot->lot_no}}</option>'+
@endforeach
'</select>'
 +'</div><div class="float-right"><button class="remove-lot btn btn-danger" id="remove-lot-'+i+'">Remove</button></div>'+
 '<table class="table table-hover">'+
'<thead class="thead-light">'+
'<tr>'+
'<th scope="col" style="width:5%"><center>No.</center></th>'+
'<th scope="col" style="width:20%"><center>Item Description</center></th>'+
'<th scope="col" style="width:15%"><center>Specification</center></th>'+
'<th scope="col" style="width:5%"><center>Unit</center></th>'+
'<th scope="col" style="width:20%"><center>Unit Price</center></th>'+
'<th scope="col" style="width:8%"><center>Quantity</center></th>'+
'<th scope="col" style="width:30%"><center>Amount</center></th>'+
'</tr>'+
'</thead>'+
'<tbody id="tbody-'+i+'">'+
''+
'</tbody>'+
''+
'</table>'+
'</div>'
  $("#hold-lots").append(e);
  
});

$(document).on('click', '.remove-lot', function(e){
    e.preventDefault();
    id = this.id.split('remove-lot-')[1];
    $("#div-"+id).remove();
});

// $(document).on('click', '.add-item', function(e){
//     e.preventDefault();
//     id = this.id.split('add-item-')[1];
//     $("#div-"+id).remove();
// });

$(document).on('change', '.select-lot', function(e){
    // e.preventDefault();
    console.log("change");
    id = this.id.split('select-lot-')[1];

    $.ajax({
    url: "/api/lots/"+$(this).val(),
    method:"GET",
        success: function(result){
            $("#tbody-"+id).html("");
            var hold = ""
            result.items.forEach(item => {
                hold +='<tr>'+
            '<th scope="row"><center>'+item.id+'</center></th>'+
            '<td data-toggle="tooltip" title="Items!"><center>'+item.item_description+'</center></td>'+
            '<td data-toggle="tooltip" title="Items!"><center>'+item.specifications+'</center></td>'+
            '<td data-toggle="tooltip" title="Items!"><center>'+item.unit+'</center></td>'+
            '<td data-toggle="tooltip" title="Items!"><center>P '+item.unit_price+'</center></td>'+
            '<td data-toggle="tooltip" title="Items!"><center>'+item.quantity+'</center></td>'+
            '<td data-toggle="tooltip" title="Items!"><center>P '+item.amount+'</center></td>'+
            ''+
            '</tr>'
            });

            $("#tbody-"+id).append(hold);
             
    },
    error: function(err){
        console.log(err);
    }
    });
});
</script>
@endsection