@extends('layouts.app')

@section('content')
<br>
    <div class="text-center">
        <h1>Create a Lot</h1>
    </div>
    <br>
    {{ Form::open(['action' => 'app_itemsController@store', 'method' => 'LOT'])}}
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light"><thead>
                <tr>
                    <th {{Form::label('id', 'No.')}}></th>
                    <th {{Form::label('item_description', 'Item Description')}}></th>
                    <th {{Form::text('lot_no', '', ['class' => 'table', 'placeholder' => 'Lot No.'])}}></th>
                </tr>
            </tbody>
        </table>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {{ Form::close() }}
    </div>

@endsection