@extends('layouts.app')

@section('content')
    <br>
        <div class="text-center">
            <h1>Assigning of Lot</h1>
        </div>
    <br>
    <div class="container">
        <table class="table table-bordered" id="items_datatable">
            <thead class="thead-light">
                <tr>
                    <th><center>No.</center></th>
                    <th><center>Item Description</center></th>
                    <th><center>Specification</center></th>
                    <th><center>Unit</center></th>
                    <th><center>Unit Price</center></th>
                    <th><center>Quantity</center></th>
                    <th><center>Amount</center></th>
                    <th><center>Cost Center</center></th>
                    <th><center>Mode of Procurement</center></th>
                    <th><center>Account No.</center></th>
                    <th><center>Lot No.</center></th>
                    
                </tr>
            </thead>
        </table>
    </div>
  
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
                            { data: 'acc_no', name: 'acc_no', class: 'text-center' },
                            { data: 'lot_id', render: function ( data, type, row ) {
                                    return '<input id="'+row.id+'" type="number" value="'+data+'" placeholder="Lot No." class="input-lot">';
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
                $.ajax({
                url: "/api/item/"+this.id+"/assign/lot/"+$(this).val(),
                method:"POST",
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
        
@endsection
{{-- 
@push('scripts')
    {!! $html->scripts() !!}
@endpush --}}