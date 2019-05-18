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
    
            <form>    
                <div class="form-row">
                        <div class="form-group col-md-12" style="font-size: 12px">
                            <label for="inputProject">Name of Project</label>
                            <input type="project" class="form-control form-control-sm" id="inputproject4" placeholder="Type here">
                            </div>
                        {{-- <div class="form-group col-md-3" style="font-size: 12px">
                            <label for="inputZip">Lot No.</label>
                            <input type="number" class="form-control form-control-sm" id="inputNumber">
                        </div> --}}
                     
                      <div class="form-group col-md-9" style="font-size: 12px">
                        <label for="inputType">Procurement Type</label>
                        <input type="type" class="form-control form-control-sm" id="inputType4" placeholder="Type here">
                      </div>
                   
                    <div class="form-group col-md-3" style="font-size: 12px">
                            <label for="inputZip">Reference No.</label>
                            <input type="number" class="form-control form-control-sm" id="inputNumber">
                        </div>
                    </div>
                    <div class="form-group" style="font-size: 12px">
                      <label for="inputAddress">Location</label>
                      <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group" style="font-size: 12px">
                      <label for="inputNo">Approved Budget</label>
                      <input type="number" class="form-control form-control-sm" id="inputNo" placeholder="P 000,000,000.00">
                    </div>
                    <div class="form-row" style="font-size: 12px">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Source of Fund</label>
                        <input type="text" class="form-control form-control-sm" id="inputCity">
                      </div>
                      <div class="form-group col-md-4" style="font-size: 12px">
                        <label for="inputState">Non-refundable Bidder Fee</label>
                        <input type="number" class="form-control form-control-sm" id="inputNo">
                      </div>
                      <div class="form-group col-md-2" style="font-size: 12px">
                            <label for="inputState">Delivery Period</label>
                            <select type="text" class="form-control form-control-sm" id="inputNo">
                                <option>30 days</option>
                                <option>60 days</option>
                                <option>90 days</option>
                                <option>120 days</option>
                            </select>
                        </div>
                            
                        </div>
                    </div>
                </form>
            </div>
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
                    <td><center>
                            <a href="/">
                                <button type="button" class="btn btn-success"><center>Add Content</center></button>
                            </a>
                        </center></td>
                    <td><center>
                            <a href="/createinvitation">
                                <button type="button" class="btn btn-success"><center>Add Another Lot</center></button>
                            </a>
                        </center></td>
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
                        <td><center>
                                <a href="/">
                                    <button type="button" class="btn btn-success"><center>Add Content</center></button>
                                </a>
                            </center></td>
                        <td><center>
                                <a href="/createinvitation">
                                    <button type="button" class="btn btn-success"><center>Add Another Lot</center></button>
                                </a>
                            </center></td>
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
        <td><center>
            <a href="/bidding">
                <button type="button" class="btn btn-primary">Submit</button>
            </a>
        </center></td>
        <script>
        $(function(){
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();
        var controlForm = $('.metrics .metrics-list:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);
        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();
		e.preventDefault();
		return false;
	});
});</script>
@endsection