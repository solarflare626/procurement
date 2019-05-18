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
                    <th scope="col" style="width:10%"><center>Lot 1</center></th>
                        <th scope="col" style="width:10%"><center></center></th>
                        <th scope="col" style="width:10%"><center></center></th>
                        <th scope="col" style="width:5%"><center></center></th>
                        <th scope="col" style="width:5%"><center></center></th>
                    <tbody>
        
                    <tr>
                        <th scope="row"><center>1</th></center>
                        <td data-toggle="tooltip" title="Items!"><center>Blank Check</center></td>
                        <td data-toggle="tooltip" title="Items!"><center></center></td>
                        <td data-toggle="tooltip" title="Items!"><center>pc</center></td>
                        <td data-toggle="tooltip" title="Items!"><center>P 750.00</center></td>
                        <td data-toggle="tooltip" title="Items!"><center>16</center></td>
                        <td data-toggle="tooltip" title="Items!"><center>P 12,000.00</center></td>
                    </tr>
                    <tr>
                        <th scope="row"><center>2</center></th>
                        <td data-toggle="tooltip" title="Items!"><center>Air Condition</center></td>
                        <td data-toggle="tooltip" title="Items!"><center>9x5 inch</center></td>
                        <td data-toggle="tooltip" title="Items!"><center>pc</center></td>
                        <td data-toggle="tooltip" title="Items!"><center>P 35,000.00</center></td>
                        <td data-toggle="tooltip" title="Items!"><center>3</center></td>
                        <td data-toggle="tooltip" title="Items!"><center>P 100,000.00</center></td>
                        
                    </tr>
                    <tr>
                        <th scope="row"><center>3</center></th>
                        <td data-toggle="tooltip" title="Items!"><center>Bond paper</center></td>
                        <td data-toggle="tooltip" title="Items!"><center>Short</center></td>
                        <td data-toggle="tooltip" title="Items!"><center>box</center></td>
                        <td data-toggle="tooltip" title="Items!"><center>P 300.00</center></td>
                        <td data-toggle="tooltip" title="Items!"><center>5</center></td>
                        <td data-toggle="tooltip" title="Items!"><center>P 1,500.00</center></td>
                    </tr>
                        <th scope="col" style="width:10%"><center>Lot 2</center></th>
                            <th scope="col" style="width:10%"><center></center></th>
                            <th scope="col" style="width:10%"><center></center></th>
                            <th scope="col" style="width:5%"><center></center></th>
                            <th scope="col" style="width:5%"><center></center></th>
                        <tbody>
            
                        <tr>
                            <th scope="row"><center>1</th></center>
                            <td data-toggle="tooltip" title="Items!"><center>Pencil</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>Monggol 2</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>box</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>P 130.00</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>20</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>P 2,600.00</center></td>
                        </tr>
                        <tr>
                            <th scope="row"><center>2</center></th>
                            <td data-toggle="tooltip" title="Items!"><center>Ballpen</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>G-tech</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>box</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>P 800.00</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>10</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>P 8,000.00</center></td>
                            
                        </tr>
                        <tr>
                            <th scope="row"><center>3</center></th>
                            <td data-toggle="tooltip" title="Items!"><center>Whiteboard marker</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>Color black</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>box</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>P 600.00</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>8</center></td>
                            <td data-toggle="tooltip" title="Items!"><center>P 4,800.00</center></td>
                        </tr>
                    </tbody>
                </table>
    </div>
@endsection