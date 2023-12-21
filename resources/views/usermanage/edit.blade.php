@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('usermanage.update', ['usermanage' => $user->id]) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="raw">
            <div class="col-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">name</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value='{{ $user -> name}}'>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">email</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value='{{ $user -> email}}'>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">created_at</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value='{{ $user -> created_at}}'>
                    </div>

                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">updated_at</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value='{{ $user -> updated_at}}'>
                    </div>
                </div>
                <button type='submit' class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection