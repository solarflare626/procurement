@extends('layouts.app')

@section('content')
<br>

<div class="container">
    <div class="text-center">
        <h1>{{$title}} 
            <div class="text-right"> <td>
                <a href="/print"><button type="button" class="btn btn-primary">Print</button></a></td>
                <td>
                <a href="/download"><button type="button" class="btn btn-warning">Download</button></a></td>
                <td>
                <a href="/createinvitation"><button type="button" class="btn btn-default">Cancel</button></a></td>
                </td></h1>
            </div>
<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
      </button>
<div class = "modal" id = "myModal">

</div>    
    {{-- <div class="row">
        <b><div class="col-md-8">Name of Project: Procurement of Various Laboratory Supplies for Research Projects</b></div>
        <b><div class="col-md-4">Procurement Type: Goods</b></div>
        <b><div class="col-md-8">Location: MSU- Iligan Institute of Technology</b></div>
        <b><div class="col-md-4">Approved Budget: Php1,222,791.49</b></div>
        <b><div class="col-md-8">Source of Fund: INCOME</b></div>
        <b><div class="col-md-4">Non-refundable Bidder Fee: Php1,200.00</b></div>
        <b><div class="col-md-8">Delivery Period: 30 Calendar Days</b></div>
        <b><div class="col-md-4">Reference No.: 2019 – 007</b></div>
    </div> --}}
</div>
    <br>

    <div class="container">
            <table id="invitations_datatable" class="table table-border">
                <thead class="thead-light">
                    <tr>
                        <th><center>No.</center></th>
                        <th><center>Name of Project</center></th>
                        <th><center>Procurement Type</center></th>
                        <th><center>Reference</center></th>
                        <th><center>Location</center></th>
                        <th><center>Approved Budget</center></th>
                        <th><center>Source of Fund</center></th>
                        <th><center>Non-refundable Bidder Fee</center></th>
                        <th><center>Delivery Period</center></th>
                        <th><center>Status</center></th>
                        <th><center>Action</center></th>
                    </tr>
                </thead>
            </table>
    </div>
    <script>
            $(document).ready( function () {
            $('#invitations_datatable').DataTable().destroy();
            $('#invitations_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('invitations-data') }}",
                type: "GET",
                dataType: "json",
                columns: [
                            { data: 'id', name: 'id', class: 'text-center' },
                            { data: 'project_name', name: 'project_name', class: 'text-center'},
                            { data: 'procurement_type', name: 'procurement_type', class: 'text-center' },
                            { data: 'reference_no', name: 'reference_no', class: 'text-center' },
                            { data: 'location', name: 'location', class: 'text-center' },
                            { data: 'approved_budget', name: 'approved_budget', class: 'text-center' },
                            { data: 'fund_source', name: 'fund_source', class: 'text-center' },
                            { data: 'bidder_fee', name: 'bidder_fee', class: 'text-center' },
                            { data: 'delivery_period', name: 'delivery_period', class: 'text-center' },
                            { data: 'delivery_status', name: 'delivery_status', class: 'text-center' },
                            { data: '', render: function ( data, type, row ) {
                                    return '<a class="btn btn-primary" href="invitations/'+row.id+'/assign/lots">Lots</a>';
                                }
                            }
                            
                            
                        ],
                       
                });
            });
    </script>
@endsection