@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3><div class="card-header">{{ __('User Index') }}</div></h3>

                <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <!-- <th>Email</th>
                    <th>No K/P</th> -->
                    <th>Position</th>
                    <th>Role</th>
                    <!-- <th>Branch</th>
                    <th>Date Created</th> -->
                    <th>Status</th>
                    <th>Modify</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                
                    <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{$user->name}}</td>
                    <!-- <td>{{$user->email}}</td>
                    <td>{{$user->nokp}}</td> -->
                    <td>{{$user->position}}</td>
                    <td>{{$user->role}}</td>
                    <!-- <td>{{$user->branch}}</td>
                    
                    <td>{{$user->created_at ? $user->created_at->diffForHumans() : 'Tidak Pasti'}}</td> -->
                    <td>{{$user->status}}</td>
                    <td><a href="{{ route('user:show', $user)}}" class="btn btn-primary">View</a></td>
                    </tr>
                @endforeach


                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection