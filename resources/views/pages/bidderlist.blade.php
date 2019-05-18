@extends('layouts.app')

@section('content')
<br>
    <div class="text-center">
        <h1>{{$title}}</h1>
    </div>
<br>
    <div class="container-fluid">
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col" style="width:5%"><center>CSI No.</center></th>
                <th scope="col" style="width:12%"><center>Company</center></th>
                <th scope="col" style="width:10%"><center>Address</center></th>
                <th scope="col" style="width:15%"><center>Contact Person</center></th>
                <th scope="col" style="width:8%"><center>Contact No.</center></th>
                <th scope="col" style="width:4%"><center>Email Address</center></th>
                <th scope="col" style="width:12%"><center>Date & Time</center></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-toggle="tooltip" title="Items!"><center>2050</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Colormatic</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Davao City</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Mark Malinog</center></td>
                <td data-toggle="tooltip" title="Items!"><center>+6309090999</center></td>
                <td data-toggle="tooltip" title="Items!"><center>mark.malinog@gmail.com</center></td>
                <td data-toggle="tooltip" title="Items!"><center>04/13/2019 4:00 PM</center></td>
            </tr>

            <tr>
                <td data-toggle="tooltip" title="Items!"><center>2080</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Paperlink</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Makati City</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Maricel Damao</center></td>
                <td data-toggle="tooltip" title="Items!"><center>+639482134528</center></td>
                <td data-toggle="tooltip" title="Items!"><center>maricel.damao@gmail.com</center></td>
                <td data-toggle="tooltip" title="Items!"><center>04/08/2019 2:00 PM</center></td>
            </tr>

            <tr>
                <td data-toggle="tooltip" title="Items!"><center>2060</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Marga Enterprises</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Cagayan De Oro</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Katty Panganiban</center></td>
                <td data-toggle="tooltip" title="Items!"><center>+6394264589032</center></td>
                <td data-toggle="tooltip" title="Items!"><center>katty.panganiban@gmail.com</center></td>
                <td data-toggle="tooltip" title="Items!"><center>04/21/2019 10:30 AM</center></td>
                </tr>
            </tbody>
        </table>
        <td><center><div style="display:block;width:100%;">
            <a href="/summary"><button type="button" class="btn btn-success" >View</button></a></td>
      </div></center></td>
    </div>
           
    

@endsection