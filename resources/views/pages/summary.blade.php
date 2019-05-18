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
                <th scope="col" style="width:5%"><center>CSI No.</center></th>
                <th scope="col" style="width:12%"><center>Supplier</center></th>
                <th scope="col" style="width:10%"><center>Email</center></th>
                <th scope="col" style="width:8%"><center>Amount of Bid</center></th>
                <th scope="col" style="width:12%"><center>Date & Time</center></th>
                <th scope="col" style="width:10%"><center>Status</center></th>
                <th scope="col" style="width:12%"><center>Receiver's Name</center></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-toggle="tooltip" title="Items!"><center>2050</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Mark Malinog</center></td>
                <td data-toggle="tooltip" title="Items!"><center>mark.malinog@gmail.com</center></td>
                <td data-toggle="tooltip" title="Items!"><center>P 35,000.00</center></td>
                <td data-toggle="tooltip" title="Items!"><center>04/13/2019 4:00 PM</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Qualified</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Angelica Nonesa</center></td>
            </tr>

            <tr>
                <td data-toggle="tooltip" title="Items!"><center>2080</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Maricel Damao</center></td>
                <td data-toggle="tooltip" title="Items!"><center>maricel.damao@gmail.com</center></td>
                <td data-toggle="tooltip" title="Items!"><center>P 50,000.00</center></td>
                <td data-toggle="tooltip" title="Items!"><center>04/08/2019 2:00 PM</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Not Qualified</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Marie Satiniaman</center></td>
                
            </tr>

            <tr>
                <td data-toggle="tooltip" title="Items!"><center>2060</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Katty Panganiban</center></td>
                <td data-toggle="tooltip" title="Items!"><center>katty.panganiban@gmail.com</center></td>
                <td data-toggle="tooltip" title="Items!"><center>P 10,000.00</center></td>
                <td data-toggle="tooltip" title="Items!"><center>04/21/2019 10:30 AM</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Qualified</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Wilson Magumpara</center></td>
                </tr>
            </tbody>
        </table>
        <td>
                <a href="/postqual"><button type="button" class="btn btn-primary"data-toggle="tooltip"
                    title="List of Qualified Bidders">Post-Qualification</button></a></td>
                <td>
                <a href="/bidderlist"><button type="button" class="btn btn-default">Cancel</button></a></td>
    </div>

@endsection