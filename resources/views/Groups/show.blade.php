@extends('groups.layout')
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
                    <a class="btn btn-primary" href="{{ route('groups.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8 margin-tb">
            <table class="table table-bordered mt-4">
                <tr>
                    <th>No</th>
                    <th>Group</th>
                    <th>Grade</th>
                    <th>Academic Level</th>
                </tr>
                <tr>
                    <td>{{ $group->id }}</td>
                    <td>{{ $group->group }}</td>
                    <td>{{ $group->grade }}</td>
                    <td>{{ $group->academicLvl }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
