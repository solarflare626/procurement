@extends('layouts.app')
    
@section('content')
    <br>

    <div class="container">
    <a href="/">
        <button type="button" class="btn btn-default">Go back</button>
    </a>

    <div class="text-center">
        <h1>{{$title}}</h1>

    </div>
    
            <form action="" method="POST">   
                @csrf    
                <div class="form-row">
                        <div class="form-group col-md-12" style="font-size: 12px">
                            <label for="inputProject">Name of Project</label>
                            <input type="project" name="project_name" class="form-control form-control-sm" id="inputproject4" placeholder="Type here">
                            </div>
                        
                     
                      <div class="form-group col-md-9" style="font-size: 12px">
                        <label for="inputType">Procurement Type</label>
                        <input type="type" name="procurement_type" class="form-control form-control-sm" id="inputType4" placeholder="Type here">
                      </div>
                   
                    <div class="form-group col-md-3" style="font-size: 12px">
                            <label for="inputZip">Reference No.</label>
                            <input type="number" name="reference_no" class="form-control form-control-sm" id="inputNumber">
                        </div>
                    </div>
                    <div class="form-group" style="font-size: 12px">
                      <label for="inputAddress">Location</label>
                      <input type="text" name="location" class="form-control form-control-sm" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group" style="font-size: 12px">
                      <label for="inputNo">Approved Budget</label>
                      <input type="number" name="approved_budget" class="form-control form-control-sm" id="inputNo" placeholder="P 000,000,000.00">
                    </div>
                    <div class="form-row" style="font-size: 12px">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Source of Fund</label>
                        <input name="fund_source" type="text" class="form-control form-control-sm" id="inputCity">
                      </div>
                      <div class="form-group col-md-4" style="font-size: 12px">
                        <label for="inputState">Non-refundable Bidder Fee</label>
                        <input name="bidder_fee" type="number" class="form-control form-control-sm" id="inputNo">
                      </div>
                      <div class="form-group col-md-2" style="font-size: 12px">
                            <label for="inputState">Delivery Period</label>
                            <select  name="delivery_period" type="text" class="form-control form-control-sm" id="inputNo">
                                <option value="30 days">30 days</option>
                                <option value="60 days">60 days</option>
                                <option value="90 days">90 days</option>
                                <option value="120 days"> 120 days</option>
                            </select>
                        </div>
                            
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <button type="submit" class="btn btn-primary center-block">Submit</button>
                        
                        
                    </div>
                </form>
            </div>
        </div>
        <br>
@endsection