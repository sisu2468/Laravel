@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table" style="vertical-align: baseline; text-align: center;">
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td><a href="{{ route('usermanage.edit', ['usermanage' => $user->id]) }}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('usermanage.destroy', ['usermanage' => $user->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button href="{{ route('usermanage.destroy', ['usermanage' => $user->id]) }}" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection