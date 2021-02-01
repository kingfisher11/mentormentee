@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail information ') }}</div>

                <div class="card-body">
                <form method="post" action="">
                @csrf
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="title" class="form-control" required value="{{$user->name}}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" required value="{{$user->email}}" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label>No K/P</label>
                        <input type="text" name="nokp" class="form-control" required value="{{$user->nokp}}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Position</label>
                        <input type="text" name="position" class="form-control" required value="{{$user->position}}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <input type="text" name="role" class="form-control" required value="{{$user->role}}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Branch</label>
                        <input type="text" name="branch" class="form-control" required value="{{$user->branch}}" readonly>
                    </div>

                    <!-- @if($training->attachment)
                    
                   <a href="{{asset('storage/'.$training->attachment)}}" target="_blank">Open Attachment</a>
                    
                    <a href="{{asset($training->attachment_url)}}" target="_blank">Open Attachment</a>        
                    @endif -->
                    
                
                </form>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection