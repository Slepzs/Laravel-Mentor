@extends('layouts.admin')




@section('content')

    <h1>Media Library</h1>


    @if($photos)

    <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
              <th>Create At</th>
          </tr>
        </thead>
        <tbody>

        @foreach($photos as $photo)

        <tr>
            <td>{{$photo->id}}</td>
            <td><img width="200px" src="{{$photo->file}}"></td>
            <td>{{$photo->created_at ? $photo->created_at : 'No Date'}}</td>
            <td>

                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]])  !!}

                        <div class="form-group">
                           {!! Form::submit('Delete Image', ['class'=>'btn btn-danger']) !!}
                        </div>

                    {!! Form::close() !!}

            </td>
        </tr>

            @endforeach

        </tbody>
    </table>


    @endif


    @stop