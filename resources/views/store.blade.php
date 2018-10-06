@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Image</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif




                   <form action="{{route('gallary.insert')}}" method="post" enctype='multipart/form-data'>
                    {{csrf_field()}}

                      <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" name="imagename" placeholder="give name">
                      </div>


                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Cetagory</label>
                        <select class="form-control" name="cetagory">
                            @foreach($category as $c)
                          <option value="{{$c->id}}">{{$c->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlInput1">Image</label>
                        <input type="file" name="image">
                      </div>

                      <input type="submit" class="btn btn-info" value="Submit">
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
