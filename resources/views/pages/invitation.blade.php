@extends('layouts.app')

@section('content')
<br>

<div class="row-fluid">
    <div class="text-center">
        <h1>{{$title}} 
            <div class="text-right"> </h1>
            </div>
    
    </div>    
</div>
    <div class="row-fluid" style="padding:50px;">
            <a href="/">
                <button type="button" class="btn btn-default">Go back</button>
            </a>
        <a href="createinvitation" class="btn btn-primary pull-right"> Create Invitation </a>
        <br>
        <br>
        <table id="invitations_datatable" class="table table-border">
            <thead class="thead-light">
                <tr>
                    <th><center>No.</center></th>
                    <th><center>Project Name</center></th>
                    <th><center>Procurement Type</center></th>
                    <th><center>Reference No.</center></th>
                    <th><center>Location</center></th>
                    <th><center>Approved Budget</center></th>
                    <th><center>Source of Fund</center></th>
                    <th><center>Non-refundable Bidder Fee</center></th>
                    <th><center>Delivery Period</center></th>
                    {{-- <th><center>Status</center></th> --}}
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
                            // { data: 'delivery_status', name: 'delivery_status', class: 'text-center' },
                            { data: '', render: function ( data, type, row ) {
                                    a =  '<div class="row"><a class="btn btn-primary" href="invitations/'+row.id+'/assign/lots?mode=edit"><span class="glyphicon glyphicon-pencil"></span></a>';
                                    a+= '<a class="btn btn-info" href="api/print/invitation/'+row.id+'"><span class="glyphicon glyphicon-print"></span></a>';
                                    a += '</div>';
                                    return a;
                                }
                            }
                            
                            
                        ],
                       
                });
            });
    </script>
@endsection