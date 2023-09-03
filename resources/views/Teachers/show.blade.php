@extends('teachers.layout')
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
                    <a class="btn btn-primary" href="{{ route('teachers.index') }}">Back</a>
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
                    <th>Career</th>
                </tr>
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->lastname }}</td>
                    <td>{{ $teacher->career }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
