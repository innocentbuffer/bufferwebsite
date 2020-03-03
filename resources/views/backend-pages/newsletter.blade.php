@extends('layouts.backend.main')


@section('title')
    Newsletters - Dashboard
@endsection

@section('head-title')
    Newsletters
@endsection

@section('subhead-title')
    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page">Request</li>
    <li class="breadcrumb-item active" aria-current="page">Newsletters</li>
@endsection

@section('main-content')
    <section class="container">
            <div class="card">
                <div class="card-body shadow bg-white">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            @if(count($newsletters) > 0)
                            <thead class="thead-comp-color border">
                                <tr>
                                    <th>S/N</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            
                            @foreach($newsletters as $newsletter)
                            <tbody>
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$newsletter->email}}</td>
                                    <td>{{$newsletter->created_at}}</td>
                                    <td >
                                        <button type="button" class="btn btn-icon-circle btn-icon-circle1 propertyModal" data-toggle="modal" data-target="#myModal" data-propertyname="{{$newsletter->title}}" data-propertyid="{{$newsletter->id}}"  title="Trash"><i class="fas fa-trash" data-propertyname="{{$newsletter->name}}" data-propertyid="{{$newsletter->id}}"></i></button>   
                                    </td>
                                </tr>
                            <tbody> 
                            @endforeach
                            @else
                                <p class="text-center display-3">
                                    No request for newsletters has been received 
                                </p>
                            @endif 
                        </table>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        {{$newsletters->links()}}
                    </div>
                </div>
            </div>
        
    </section>
@endsection