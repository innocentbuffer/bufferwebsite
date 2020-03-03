@extends('layouts.backend.main')


@section('title')
    Create User - Dashboard
@endsection

@section('head-title')
    Users List
@endsection

@section('subhead-title')
    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page">Creation</li>
    <li class="breadcrumb-item active" aria-current="page">Users List</li>
@endsection

@section('main-content')
    <section class="container">
            <div class="card">
                <div class="card-body shadow bg-white">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            @if(count($users) > 0)
                            <thead class="thead-comp-color border">
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Date Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            
                            @foreach($users as $user)
                            <tbody>
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    @if($user->name === "Administrator")
                                        <td>Administrator</td>
                                    @else       
                                        @foreach($user->roles as $role)
                                            <td>{{$role->name}}</td>
                                        @endforeach
                                    @endif
                                   
                                    <td>{{$user->created_at}}</td>
                                    <td >
                                        <button type="button" class="btn btn-icon-circle btn-icon-circle1 propertyModal" data-toggle="modal" data-target="#myModal" data-propertyname="{{$user->title}}" data-propertyid="{{$user->id}}"  title="Trash"><i class="fas fa-trash" data-propertyname="{{$user->name}}" data-propertyid="{{$user->id}}"></i></button> 
                                    
                                    </td>
                                </tr>
                            <tbody> 
                            @endforeach
                            @else
                                <p class="text-center display-3">
                                    No user has been created <br/>
                                    <small style="font-size:20px"><a href="/backend/createuser">Add a news</a></small>
                                </p>
                            @endif 
                        </table>
                    </div>
                </div>
            </div>
        
    </section>
@endsection