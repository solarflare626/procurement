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
                <th scope="col" style="width:3%"><center>No.</center></th>
                <th scope="col" style="width:20%"><center>Supplier</center></th>
                <th scope="col" style="width:15%"><center>Email</center></th>
                <th scope="col" style="width:5%"><center>Contact No.</center></th>
                <th scope="col" style="width:20%"><center>Date & Time</center></th>
                <th scope="col" style="width:15%"><center>Total Amount</center></th>
                <th scope="col" style="width:15%"><center>Order Term</center></th>
                <th scope="col" style="width:8%"><center>Status</center></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><center>1</center></th>
                <td data-toggle="tooltip" title="Items!"><center>Fe Ambalong</center></td>
                <td data-toggle="tooltip" title="Items!"><center>fe.ambalong@gmail.com</center></td>
                <td data-toggle="tooltip" title="Items!"><center>+63956687324</center></td>
                <td data-toggle="tooltip" title="Items!"><center>05/17/2019 9:00 AM</center></td>
                <td data-toggle="tooltip" title="Items!"><center>P 1,580,200.00</center></td>
                <td data-toggle="tooltip" title="Items!"><center>30 days</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Approved</center></td>
            </tr>
            <tr>
                <th scope="row"><center>2</center></th>
                <td data-toggle="tooltip" title="Items!"><center>Azzy Asman</center></td>
                <td data-toggle="tooltip" title="Items!"><center>azzy.asman@gmail.com</center></td>
                <td data-toggle="tooltip" title="Items!"><center>+639252145678</center></td>
                <td data-toggle="tooltip" title="Items!"><center>06/21/2019 1:24 PM</center></td>
                <td data-toggle="tooltip" title="Items!"><center>P 1,215,209.00</center></td>
                <td data-toggle="tooltip" title="Items!"><center>60 days</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Approved</center></td>
            </tr>
            
            <tr>
                <th scope="row"><center>3</center></th>
                <td data-toggle="tooltip" title="Items!"><center>Leah Sikula</center></td>
                <td data-toggle="tooltip" title="Items!"><center>leah.sikula@gmail.com</center></td>
                <td data-toggle="tooltip" title="Items!"><center>+639806784321</center></td>
                <td data-toggle="tooltip" title="Items!"><center>05/30/2019 8:10 AM</center></td>
                <td data-toggle="tooltip" title="Items!"><center>P 1,800,20.00</center></td>
                <td data-toggle="tooltip" title="Items!"><center>90 days</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Approved</center></td>
            </tr>
            </tbody>
        </table>
    </div>
    <td><center>
        <a href="/">
            <button type="button" class="btn btn-success">Submit</button>
        </a>
    </center></td>
      
@endsection