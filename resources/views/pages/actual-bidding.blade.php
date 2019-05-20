@extends('layouts.app')

@section('content')
<br>
    <div class="text-center">
        <h1>Opening of Bids</h1>
    </div>
<br>
    <div class="container-fluid">
          
        <form method="POST" action="/invitations/{{$invitation->id}}/attendance"> 
        @csrf
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col" style="width:5%"><center>Reference No.</center></th>
                <th scope="col" style="width:12%"><center>Supplier</center></th>
                <th scope="col" style="width:4%"><center>Email</center></th>
                <th scope="col" style="width:12%"><center>Date & Time</center></th>
                <th scope="col" style="width:12%"><center>Amount of Bid</center></th>
                <th scope="col" style="width:12%"><center>Receiver's Name</center></th>
            </tr>
            </thead>
            <tbody>
            
            @foreach($actual_biddings as $actual_bidding)
                @php
                $bidder = $actual_bidding->bidder();
                @endphp

                <tr>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->csi_no}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->contact_person}}</center></td>
                      <td data-toggle="tooltip" title="Items!"><center>{{$bidder->email}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->created_at}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center><input type="number" name="amount" id="{{$actual_bidding->id}}" class="amount" value="{{$actual_bidding->amount}}"></center></td>
                    <td data-toggle="tooltip" title="Items!"><center><input type="text" name="receiver" id="{{$actual_bidding->id}}" class="receiver" value="{{$actual_bidding->receiver}}"></center></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <center>
           <a href="/invitations/{{$invitation->id}}/post-qualification" class="btn btn-primary" >Post Qualification</a>
      </center>
        </form>
    </div>

<script>
$(document).on('change', '.amount', function(e){
    // e.preventDefault();
    id = this.id;
    var data = {
        id: id,
        amount: $(this).val()
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
        console.log(result);
        console.log("success");
             
    },
    error: function(err){
        console.log(err);
    }
    });
});

$(document).on('change', '.receiver', function(e){
    // e.preventDefault();
    id = this.id;
    var data = {
        id: id,
        receiver: $(this).val()
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
        console.log(result);
        console.log("success");
             
    },
    error: function(err){
        console.log(err);
    }
    });
});
</script>
@endsection