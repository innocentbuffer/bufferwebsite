@extends('layouts.backend.main')


@section('title')
    Create User - Dashboard
@endsection

@section('head-title')
    Create User
@endsection

@section('subhead-title')
    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"></li>
@endsection

@section('main-content')
    <section class="container">
        <div>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    @include('backend-includes.success-error')
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-4 shadow bg-white">
                    <header class="p-4">
                        <h5>Create User</h5>
                    </header>
                    <form action="/backend/createuser" method="post" class="p-4">
                        @csrf
                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Role</label>
                            <select name="role" id="" class="form-control">
                                <option value="hr">- Select Role -</option>
                                <option value="sales">Sales</option>
                                <option value="marketing">Marketing</option>
                                <option value="hr">Hr</option>
                                <option value="dev">Developer</option>
                                <option value="admin">SubAdmin</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <input type="submit" class="btn comp-background text-white" name="" id="" value="Create">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection