@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="form-group row mb-1">
                        <form action= "{{ route('imagestore') }}" method= "POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image" required>
                            <input type="submit" name="upload" value="Add">
                            <input type="hidden" name="owner" value= "{{$user->id}}" ><br>
                            <input type="checkbox" name="hidden" id="hide" >
                            <label>Hidden</label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
