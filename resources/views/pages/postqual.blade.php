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
                <th scope="col" style="width:12%"><center>Company</center></th>
                <th scope="col" style="width:13%"><center>Contact Person</center></th>
                <th scope="col" style="width:12%"><center>Date & Time</center></th>
                <th scope="col" style="width:10%"><center>Location</center></th>
                <th scope="col" style="width:10%"><center>Status</center></th>
                <th scope="col" style="width:10%"><center>Notice</center></th>
                <th scope="col" style="width:5%"><center>Action</center></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-toggle="tooltip" title="Items!"><center>2050</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Colormatic</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Mark Malinog</center></td>
                <td data-toggle="tooltip" title="Items!"><center>04/13/2019 4:00 PM</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Davao City</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Qualified</center></td>
                
                <td><select type="text" class="form-control form-control-sm" id="inputText">
                        <option>Goods</option>
                        <option>Infrastracture</option>
                    </select>
                </td>
                <td><center>
                        <a href="/purchaseorder">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </a>
                    </center></td>

            </tr>

            <tr>
                <td data-toggle="tooltip" title="Items!"><center>2080</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Paperlink</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Maricel Damao</center></td>
                <td data-toggle="tooltip" title="Items!"><center>04/08/2019 2:00 PM</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Makati City</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Not Qualified</center></td>
                
                <td> <select type="text" class="form-control form-control-sm" id="inputText">
                        <option>Goods</option>
                        <option>Infrastracture</option>
                    </select>
                </td>
                <td><center>
                        <a href="/purchaseorder">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </a>
                    </center></td>

            </tr>

            <tr>
                <td data-toggle="tooltip" title="Items!"><center>2060</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Marga Enterprises</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Katty Panganiban</center></td>
                <td data-toggle="tooltip" title="Items!"><center>04/21/2019 10:30 AM</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Cagayan De Oro</center></td>
                <td data-toggle="tooltip" title="Items!"><center>Qualified</center></td>
                
                <td>
                        {{-- <div class="form-group col-md-" style="font-size: 12px"> --}}
                                {{-- <label for="inputState">Notice</label> --}}
                                <select type="text" class="form-control form-control-sm" id="inputText">
                                    <option>Goods</option>
                                    <option>Infrastracture</option>
                                </select>
                            {{-- </div> --}}
                </td>
                <td><center>
                        <a href="/purchaseorder">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </a>
                    </center></td>

                </tr>
            </tbody>
        </table>
    </div>
           
    

@endsection