@extends('layouts.backend.main')


@section('title')
    Qoute Request - Dashboard
@endsection

@section('head-title')
    Qoute Request
@endsection

@section('subhead-title')
    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page">Request</li>
    <li class="breadcrumb-item active" aria-current="page">Qoute Request</li>
@endsection

@section('main-content')
    <section class="container">
            <div class="card">
                <div class="card-body shadow bg-white">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            @if(count($qoutes) > 0)
                            <thead class="thead-comp-color border">
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Position</th>
                                    <td>Qoute Type</td>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            
                            @foreach($qoutes as $qoute)
                            <tbody>
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{ucfirst($qoute->firstname)}} {{ucfirst($qoute->lastname)}}</td>
                                    <td>{{$qoute->company}}</td>
                                    <td>{{$qoute->position}}</td>
                                    <td>{{$qoute->qoutetype}}</td>
                                    <td>{{$qoute->message}}</td>
                                    <td>{{$qoute->created_at}}</td>
                                    <td >
                                        <button type="button" class="btn btn-icon-circle btn-icon-circle1 propertyModal" data-toggle="modal" data-target="#myModal" data-propertyname="{{$qoute->title}}" data-propertyid="{{$qoute->id}}"  title="Trash"><i class="fas fa-trash" data-propertyname="{{$qoute->name}}" data-propertyid="{{$qoute->id}}"></i></button>   
                                    </td>
                                </tr>
                            <tbody> 
                            @endforeach
                            @else
                                <p class="text-center display-3">
                                    No request for qoutes has been received
                                </p>
                            @endif 
                        </table>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        {{$qoutes->links()}}
                    </div>
                </div>
            </div>
        
    </section>
@endsection