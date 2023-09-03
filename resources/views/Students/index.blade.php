@extends('students.layout')
@section('content')
    <div class="row justify content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5">
                        <h2>Laravel Student List</h2>
                    </div>
                </div>
                <div class="col-md-12 text-start mt-4">
                    <a href="{{route('students.create')}}" class="btn btn-primary">+ Create new Student</a>
                    <a href="{{url('/groups')}}" class="btn btn-primary">Groups</a>
                    <a href="{{url('/teachers')}}" class="btn btn-primary">Teachers</a>
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
                    <th>Address</th>
                    <th>Group</th>
                    <th>Options</th>
                </tr>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>{{ $student->address }}</td>
                        @foreach ($groups as $group)
                            @if($student->group_id == $group->id)
                                <td>{{ $group->group }}-{{ $group->grade }}</td>
                            @endif
                        @endforeach
                        <td>
                            <form action="{{ route('students.destroy', $student->id) }}" method="post">
                                <a class="btn btn-info btn-sm text-white" href="{{ route('students.show', $student->id) }}">Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('students.edit', $student->id) }}">Edit</a>
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
