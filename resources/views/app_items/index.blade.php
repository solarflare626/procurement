@extends('layouts.app')

@section('content')
        <div class="text-center">
            <h1>Assigning of Lot</h1>
        </div>
    <div class="container">
        <table class="table table-bordered" id="items_datatable">
            <thead class="thead-light">
                <tr>
                    <th scope="col" style="width:5%"><center>No.</center></th>
                    <th scope="col" style="width:12%"><center>Item Description</center></th>
                    <th scope="col" style="width:10%"><center>Specification</center></th>
                    <th><center>Unit</center></th>
                    <th scope="col" style="width:12%"><center>Unit Price</center></th>
                    <th scope="col" style="width:8%"><center>Quantity</center></th>
                    <th><center>Amount</center></th>
                    <th scope="col" style="width:12%"><center>Cost Center</center></th>
                    <th scope="col" style="width:12%"><center>Mode of Procurement</center></th>
                    {{-- <th><center>Account No.</center></th> --}}
                    <th><center>Lot No.</center></th>
                    
                </tr>
            </thead>
        </table>
    </div>

            <div class="container-fluid">
               <center> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Submit</button>
               </center><br>
                <br>
                {{-- <form method="POST" action="/invitations/{{$invitation->id}}/invitations">  --}}
                @csrf
                <table class="table table-hover">
                    <thead class="thead-light">
                    </thead>
                    <tbody>
  
    <script>
            $(document).ready( function () {
            $('#items_datatable').DataTable().destroy();
            $('#items_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('app-data') }}",
                type: "GET",
                dataType: "json",
                columns: [
                            { data: 'id', name: 'id', class: 'text-center' },
                            { data: 'item_description', name: 'item_description', class: 'text-center'},
                            { data: 'specifications', name: 'specifications', class: 'text-center'},
                            { data: 'unit', name: 'unit', class: 'text-center' },
                            { data: 'unit_price', name: 'unit_price', class: 'text-center' },
                            { data: 'quantity', name: 'quantity', class: 'text-center' },
                            { data: 'amount', name: 'amount', class: 'text-center' },
                            { data: 'cost_center', name: 'cost_center', class: 'text-center' },
                            { data: 'procurement_mode', name: 'procurement_mode', class: 'text-center' },
                            // { data: 'acc_no', name: 'acc_no', class: 'text-center' },
                            { data: 'lot_id', render: function ( data, type, row ) {
                                    return '<input id="'+row.id+'" '+(row.disabled ? 'disabled': '')+' type="number" value="'+data+'" placeholder="Lot No." class="input-lot">';
                                }
                            }
                            
                        ],
                       
                });
            });
        </script>
        <script>
         $(document).ready( function () {
            $('#items_datatable').on('change','.input-lot',function() {
                console.log(this.id, $(this).val());
				var data = {
					lot : $(this).val()
				};
				console.log(data);
                $.ajax({
                url: "/api/item/"+this.id+"/assign/lot/submit",
				data: data,
                type:"POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                 success: function(result){
                   console.log("SUCCESS");
                },
                error: function(err){
                   console.log(err);
                }
                });
            });
            
         });
         </script>

         <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          {{-- <h4 class="modal-title" id="exampleModalLongTitle"></h4> --}}
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <form method="POST">
        @csrf
        <div class="modal-body">
          <center>  The items has been successfully added to a lot! </center>
        </div>
        <div class="modal-footer">
          <a href = "invitation"><button type="button" class="btn btn-primary">Ok</button>
        </div>
        </form>
      </div>
    </div>
  </div>
        
@endsection
{{-- 
@push('scripts')
    {!! $html->scripts() !!}
@endpush --}}