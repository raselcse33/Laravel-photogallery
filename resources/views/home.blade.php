@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('store.gallary')}}" class="btn btn-primary btn-lg btn-block">Create Image</a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                   
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Image Name</th>
                          <th scope="col">Image</th>
                          <th scope="col">Description</th>
                          <th scope="col">Cetagory Name</th>
                          <th scope="col">Author Name</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($post as $p)

                        <tr>
                          <td>{{$p->imagename}}</td>
                          <td><img width="60px" height="60px" src="{{asset('/image/'.$p->image)}}"></td>
                          <td>{{$p->description}}</td>
                          <td>{{$p->cetagory->name}}</td>
                          <td>{{$p->user->name}}</td>
                          <td>
                         <a href="{{route('image.edit',['id'=>$p->id])}}"> Edit </a> || <a href="{{route('image.delete',['id'=>$p->id])}}"> Delete</a>
                         </td>
                        </tr>

                        @endforeach
                      </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
