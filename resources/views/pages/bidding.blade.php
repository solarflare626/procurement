@extends('layouts.app')
    
@section('content')
<br>
    <div class="text-center">
        <h1>{{$title}}</h1>
        <br>
    </div>
    <div class="container">
            <form>
                <div class="form-row">
                        <div class="form-group col-md-4" style="font-size: 15px">
                            <label for="inputProject">Company Name</label>
                            <input type="project" class="form-control form-control-sm" id="inputproject" placeholder="Type here">
                            </div>
                        <div class="form-group col-md-4" style="font-size: 15px">
                            <label for="inputPerson">Contact Person</label>
                            <input type="type" class="form-control form-control-sm" id="inputfname" placeholder="First name">
                        </div>
                     
                      <div class="form-group col-md-4" style="font-size: 15px">
                            <label for="inputPerson"><br></label>
                        <input type="type" class="form-control form-control-sm" id="inputlname" placeholder="Last name">
                      </div>
                    </div>

                    <div class="form-row" style="font-size: 15px">
                            <div class="form-group col-md-8">
                              <label for="inputEmail">Address</label>
                              <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group col-md-4" style="font-size: 15px">
                              <label for="inputNumber">Contact No.</label>
                              <input type="text" class="form-control form-control-sm" id="inputNo" placeholder="Type here">
                            </div>
                              </div>

                    <div class="form-row" style="font-size: 15px">
                      <div class="form-group col-md-8">
                        <label for="inputEmail">Email address</label>
                        <input type="text" class="form-control form-control-sm" id="inputEmail" placeholder="@gmail.com">
                      </div>
                      <div class="form-group col-md-4" style="font-size: 15px">
                        <label for="inputNumber">CSI No.</label>
                        <input type="number" class="form-control form-control-sm" id="inputNo">
                      </div>
                        </div>
                    </div>
                </form>
            </div>
        <td><center>
            <a href="/bidderlist">
                <button type="button" class="btn btn-primary">Add Bidder</button>
            </a>
        </center></td>
@endsection