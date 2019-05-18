@extends('layouts.app')
    
@section('content')
    <br>

    <div class="container">
    <a href="/">
        <button type="button" class="btn btn-default">Go back</button>
    </a>

    <div class="text-center">
        <h1>{{$title}} to {{$invitation->project_name}}</h1>

    </div>
    
            <form>    
                
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