@extends('groups.layout')
@section('content')
    <div class="row justify content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5">
                        <h2>Laravel Group List</h2>
                    </div>
                </div>
                <div class="col-md-12 text-end mt-4">
                    <a href="{{ route('groups.create') }}" class="btn btn-primary">+ Create new Group</a>

                    <a href="{{url('/students')}}" class="btn btn-primary">Students</a>
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
                    <th>Group</th>
                    <th>Grade</th>
                    <th>Academic Level</th>
                    <th>Options</th>
                </tr>
                @foreach ($groups as $group)
                    <tr>
                        <td>{{ $group->id }}</td>
                        <td>{{ $group->group }}</td>
                        <td>{{ $group->grade }}</td>
                        <td>{{ $group->academicLvl }}</td>
                        <td>
                            <form action="{{ route('groups.destroy', $group->id) }}" method="post">
                                <a class="btn btn-info btn-sm text-white" href="{{ route('groups.show', $group->id) }}">Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('groups.edit', $group->id) }}">Edit</a>
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
