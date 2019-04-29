@extends('layouts.admin')



@section('content')


    <h1>Categories</h1>


    <div class="col-sm-6">

        {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]])  !!}

        <div class="form-group">
            {!! Form::label('name', 'Title') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Edit Category', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]])  !!}


        <div class="form-group">
            {!! Form::submit('Delete Cateogry', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>




@stop