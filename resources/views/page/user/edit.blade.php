@extends('._layouts.master')

@push('css')

@endpush
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/user') }}">Members</a></li>
        <li class="active">edit - {{ $user->email }}</li>
    </ol>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <form method="post" action="{{ url('user/'.$user->id.'/update') }}">
                {{ csrf_field() }}

                <div class="form-group label-floating">
                    <label class="control-label">Email address</label>
                    <input class="form-control" value="{{ $user->email }}" disabled>
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Full name</label>
                    <input type="text" name="fullname" class="form-control" value="{{ $user->fullname }}" required>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="type" checked="true"
                                       value="MEMBER" {{ $user->type == 'MEMBER' ? 'checked' : '' }}>Member
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="type"
                                       value="ADMIN" {{ $user->type == 'ADMIN' ? 'checked' : '' }}> Admin
                            </label>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-warning">Update Member
                </button>

            </form>
        </div>
    </div>




@endsection


@push('scripts')


@endpush
