@extends('layouts.backend.main')


@section('title')
    Contact Request - Dashboard
@endsection

@section('head-title')
    Contact Request
@endsection

@section('subhead-title')
    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page">Request</li>
    <li class="breadcrumb-item active" aria-current="page">Contact request</li>
@endsection

@section('main-content')
    <section class="container">
            <div class="card">
                <div class="card-body shadow bg-white">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            @if(count($contacts) > 0)
                            <thead class="thead-comp-color border">
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Position</th>
                                    <th>Message</th>
                                    @if(Auth::user()->name == "Administrator")
                                        <th>Contact Type</th>
                                    @endif
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            
                            @foreach($contacts as $contact)
                                @if(Auth::user()->name != "Administrator")
                                    @if(strtolower($contact->contacttype) != strtolower($role))
                                        @continue
                                    @endif
                                @endif
                                <tbody>
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$contact->firstname}} {{$contact->lastname}}</td>
                                        <td>{{$contact->company}}</td>
                                        <td>{{$contact->position}}</td>
                                        <td>{{$contact->message}}</td>
                                        @if(Auth::user()->name == "Administrator")
                                            <td>{{$contact->contacttype}}</td>
                                        @endif
                                        <td>{{$contact->created_at}}</td>
                                        <td >
                                            <button type="button" class="btn btn-icon-circle btn-icon-circle1 propertyModal" data-toggle="modal" data-target="#myModal" data-propertyname="{{$contact->title}}" data-propertyid="{{$contact->id}}"  title="Trash"><i class="fas fa-trash" data-propertyname="{{$contact->name}}" data-propertyid="{{$contact->id}}"></i></button> 
                                        
                                        </td>
                                    </tr>
                                <tbody> 
                            @endforeach
                            @else
                                <p class="text-center display-3">
                                    No request for contacts has been received
                                </p>
                            @endif 
                        </table>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        {{$contacts->links()}}
                    </div>
                </div>
            </div>
        
    </section>
@endsection