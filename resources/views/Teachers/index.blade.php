@extends('teachers.layout')
@section('content')
    <div class="row justify content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5">
                        <h2>Laravel Teacher List</h2>
                    </div>
                </div>
                <div class="col-md-12 text-end mt-4">
                    <a href="{{ route('teachers.create') }}" class="btn btn-primary">+ Create new Teacher</a>
                    <a href="{{url('/students')}}" class="btn btn-primary">Students</a>
                    <a href="{{url('/groups')}}" class="btn btn-primary">Groups</a>
                    <a href="{{url('/subjects')}}" class="btn btn-primary">Subjects</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            @if ($message = Session::get('success'))
                <div class="alert alert-success mt-3">
                    <span>{{ $message }}</span>
                </div>
            @endif
            <table class="table table-bordered mt-4">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Career</th>
                    <th>Options</th>
                </tr>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->lastname }}</td>
                        <td>{{ $teacher->career }}</td>
                        <td>
                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="post">
                                <a class="btn btn-info btn-sm text-white" href="{{ route('teachers.show', $teacher->id) }}">Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('teachers.edit', $teacher->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
