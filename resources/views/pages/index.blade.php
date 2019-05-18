@extends('layouts.app')

@section('content')
<br>
    <div class="text-center">
        <h1>{{$title}}</h1>
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
                <th scope="col" style="width:30%"><center>Cost Center</center></th>
                <th scope="col" style="width:15%"><center>Mode of Procurement</center></th>
                <th scope="col" style="width:15%"><center>Account No.</center></th>
                <th scope="col" style="width:3%"><center></center></th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <th scope="row">1</th>
                <td data-toggle="tooltip" title="Items!"><center>Blank Check</center></td>
                <td data-toggle="tooltip" title="Items!"><center></center></td>
                <td data-toggle="tooltip" title="Items!"><center>pc</center></td>
                <td data-toggle="tooltip" title="Items!"><center>P 750.00</center></td>
                <td data-toggle="tooltip" title="Items!"><center>16</center></td>
                <td data-toggle="tooltip" title="Items!"><center>P 12,000.00</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Cashier</center></td>
                <td data-toggle="tooltip" title="Items!"><center>SVP</center></td>
                <td data-toggle="tooltip" title="Items!"><center>123456</center></td>
                <td><center><div style="display:block;width:100%;">
                    <input type="checkbox" >
                  </div></center></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td data-toggle="tooltip" title="Items!"><center>Air Condition</center></td>
                <td data-toggle="tooltip" title="Items!"><center>9x5 inch</center></td>
                <td data-toggle="tooltip" title="Items!"><center>pc</center></td>
                <td data-toggle="tooltip" title="Items!"><center>P 35,000.00</center></td>
                <td data-toggle="tooltip" title="Items!"><center>3</center></td>
                <td data-toggle="tooltip" title="Items!"><center>P 100,000.00</center></td>
                <td data-toggle="tooltip" title="Items!"><center>CCS</center></td>
                <td data-toggle="tooltip" title="Items!"><center>SVP</center></td>
                <td data-toggle="tooltip" title="Items!"><center>14567</center></td>
                <td><center><div style="display:block;width:100%;">
                    <input type="checkbox" >
                  </div></center></td>
                
            </tr>
            <tr>
                <th scope="row">3</th>
                <td data-toggle="tooltip" title="Items!"><center>Bond paper</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Short</center></td>
                <td data-toggle="tooltip" title="Items!"><center>box</center></td>
                <td data-toggle="tooltip" title="Items!"><center>P 300.00</center></td>
                <td data-toggle="tooltip" title="Items!"><center>5</center></td>
                <td data-toggle="tooltip" title="Items!"><center>P 1,500.00</center></td>
                <td data-toggle="tooltip" title="Items!"><center>CASS</center></td>
                <td data-toggle="tooltip" title="Items!"><center>SVP</center></td>
                <td data-toggle="tooltip" title="Items!"><center>92300</center></td>
                <td><center><div style="display:block;width:100%;">
                    <input type="checkbox" >
                  </div></center></td>
            </tr>
            </tbody>
        </table>
    </div>
    <td><center>
        <a href="/createinvitation">
            <button type="button" class="btn btn-success">Submit</button>
        </a>
    </center></td>
      
@endsection