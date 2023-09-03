@extends('subjects.layout')
@section('content')
    <div class="row justify content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5">
                        <h2>Laravel Subject List</h2>
                    </div>
                </div>
                <div class="col-md-12 text-end mt-4">
                    <a href="{{ route('subjects.create') }}" class="btn btn-primary">+ Create new Subject</a>
                    <a href="{{url('/teachers')}}" class="btn btn-primary">Teachers</a>
                    <a href="{{url('/students')}}" class="btn btn-primary">Students</a>
                    <a href="{{url('/groups')}}" class="btn btn-primary">Groups</a>
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
                    <th>Objective</th>
                    <th>Description</th>
                    <th>Options</th>
                </tr>
                @foreach ($subjects as $subject)
                    <tr>
                        <td>{{ $subject->id }}</td>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->objective }}</td>
                        <td>{{ $subject->description }}</td>
                        <td>
                            <form action="{{ route('subjects.destroy', $subject->id) }}" method="post">
                                <a class="btn btn-info btn-sm text-white" href="{{ route('subjects.show', $subject->id) }}">Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('subjects.edit', $subject->id) }}">Edit</a>
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
