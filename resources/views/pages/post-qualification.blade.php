@extends('layouts.app')

@section('content')
<br>
    <div class="text-center">
        <h1>Post-Qualification</h1>
    </div>
<br>
    <div class="container-fluid">
          
        
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col" style="width:12%"><center>Reference No.</center></th>
                {{-- <th scope="col" style="width:12%"><center>Project Name</center></th> --}}
                <th scope="col" style="width:12%"><center>Company</center></th>
                <th scope="col" style="width:12%"><center>Contact Person</center></th>
                <th scope="col" style="width:12%"><center>Date & Time</center></th>
                <th scope="col" style="width:12%"><center>Address</center></th>
                <th scope="col" style="width:12%"><center>Amount of Bid</center></th>
                <th scope="col" style="width:12%"><center>Status</center></th>
                <th scope="col" style="width:12%"><center>Notice</center></th>
                <th scope="col" style="width:12%"><center>Action</center></th>
            </tr>
            </thead>
            <tbody>
            
            @foreach($actual_biddings as $actual_bidding)
                @php
                $bidder = $actual_bidding->bidder();
                @endphp

                <tr>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->csi_no}}</center></td>
                    <td data-toggle="tooltp" title="Items!"><center>{{$bidder->company_name}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->contact_person}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->created_at}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->address}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center>{{$actual_bidding->amount}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center><select  @php if($actual_bidding->submitted) echo "disabled" @endphp class="status" id="status-{{$actual_bidding->id}}"><option disabled selected>Select...</option><option @php if($actual_bidding->status== "Qualified") echo "selected" @endphp value="Qualified">Qualified</option><option @php if($actual_bidding->status== "Not Qualified") echo "selected" @endphp value="Not Qualified">Not Qualified</option></select></center></td>
                    <td data-toggle="tooltip" title="Items!"><center><select @php if($actual_bidding->submitted) echo "disabled" @endphp  id="notice-{{$actual_bidding->id}}"><option disabled selected>Select...</option><option @php if($actual_bidding->notice== "Goods") echo "selected" @endphp value="Goods">Goods</option><option @php if($actual_bidding->notice== "Infrastructure") echo "selected" @endphp value="Infrastructure">Infrastructure</option><option @php if($actual_bidding->notice== "Consultancy") echo "selected" @endphp value="Consultancy">Consultancy</option></select></center></td>
                    <td data-toggle="tooltip" title="Items!"><center><button  @php if($actual_bidding->submitted) echo "disabled" @endphp  id="{{$actual_bidding->id}}" class="btn-submit btn btn-primary">Submit</button></center></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <center>
           <a href="/invitation" class="btn btn-primary">Invitations</a>
      </center>
       
    </div>

<script>
$(document).on('change', '.status', function(e){
    id= this.id.split("status-")[1];

    if($(this).val() == "Not Qualified"){
        $("#notice-"+id).prop("selectedIndex",0);
        $("#notice-"+id).prop("disabled",true);
    }else{
        $("#notice-"+id).prop("selectedIndex",0);
        $("#notice-"+id).prop("disabled",false);
        

    }

});
$(document).on('click', '.btn-submit', function(e){
    e.preventDefault();
    id = this.id;
    var data = {
        id: id,
        status: $("#status-"+id).val(),
        notice: (($("#status-"+id).val() == "Qualified") ? $("#notice-"+id).val():null)
    };
    console.log(data);
    $.ajax({
    url: "/api/acutal-bidding/update",
    method:"POST",
    data: data,
    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function(result){
        location.reload(true); 
             
    },
    error: function(err){
        console.log(err);
    }
    });
});

</script>
@endsection