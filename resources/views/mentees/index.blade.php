@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mentee Index') }}</div>

                <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>No Matrik</th>
                    <th>Program</th>
                    <th>Semester</th>
                    <th>Branch</th>
                    <!-- <th>Branch</th>
                    <th>Status</th>
                    <th>Date Created</th> -->
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mentees as $mentee)
                
                    <tr>
                    <td>{{$mentee->id}}</td>
                    <td>{{$mentee->student_name}}</td>
                    <td>{{$mentee->mentee_id}}</td>
                    <td>{{$mentee->program}}</td>
                    <td>{{$mentee->semester}}</td>
                    <td>{{$mentee->branch}}</td>
                    <!-- <td>{{$user->branch}}</td>
                    <td>{{$user->status}}</td>
                    <td>{{$user->created_at ? $user->created_at->diffForHumans() : 'Tidak Pasti'}}</td> -->
                    
                    </tr>
                @endforeach


                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection