@extends('students.layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5">
                        <h2>Show</h2>
                    </div>
                </div>
                <div class="col-md-12 text-end mt-4">
                    <a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8 margin-tb">
            <table class="table table-bordered mt-4">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>LastName</th>
                    <th>Address</th>
                    <th>Group</th>
                </tr>
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->lastname }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $group->grade }}-{{ $group->group }}</td>
            </table>
        </div>
    </div>
@endsection
