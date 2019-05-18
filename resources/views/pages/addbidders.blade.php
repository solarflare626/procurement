@extends('layouts.app')

@section('content')
<br>
    <div class="text-center">
        <h1>{{$title}}</h1>
    </div>
<br>
    <div class="container-fluid">
        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add Bidder</button>
        
        <br>
        <br>
        <form method="POST" action="/invitations/{{$invitation->id}}/attendance"> 
        @csrf
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
                <th scope="col" style="width:12%"><center>Attendance</center></th>
            </tr>
            </thead>
            <tbody>
            
            @foreach($bidders as $bidder)

                <tr>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->csi_no}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->company_name}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->address}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->contact_person}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->contact_no}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->email}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center>{{$bidder->created_at}}</center></td>
                    <td data-toggle="tooltip" title="Items!"><center><input type="checkbox" name="attendance[]" value="{{$bidder->id}}"></center></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <center>
           <button type="submit" class="btn btn-primary" >Submit Attendance</button>
      </center>
        </form>
    </div>
           
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">Add Bidder</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form method="POST">
      @csrf
      <div class="modal-body">

            <div class="form-row">
                <div class="form-group col-md-12" style="font-size: 12px">
                    <label for="inputProject">CSI No.</label>
                    <input  name="csi_no" class="form-control form-control-sm"  placeholder="Type here">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12" style="font-size: 12px">
                    <label for="inputProject">Company</label>
                    <input  name="company_name" class="form-control form-control-sm"  placeholder="Type here">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12" style="font-size: 12px">
                    <label for="inputProject">Address</label>
                    <input  name="address" class="form-control form-control-sm"  placeholder="Type here">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12" style="font-size: 12px">
                    <label for="inputProject">Contact Person</label>
                    <input  name="contact_person" class="form-control form-control-sm"  placeholder="Type here">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12" style="font-size: 12px">
                    <label for="inputProject">Contact No.</label>
                    <input  name="contact_no" class="form-control form-control-sm"  placeholder="Type here">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12" style="font-size: 12px">
                    <label for="inputProject">Email</label>
                    <input  name="email" type="email" class="form-control form-control-sm"  placeholder="Type here">
                </div>
            </div>
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection