@extends('._layouts.master')

@push('css')

@endpush
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active">Members</li>
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
    <button class="btn btn-success pull-right" data-toggle="modal" data-target="#addMemberModal">
        <i class="material-icons">add</i> Add
    </button>
    <div class="modal fade" id="addMemberModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <form method="post" action="{{ url('user/add') }}">
            {{ csrf_field() }}
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Member</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group label-floating">
                            <label class="control-label">Full name</label>
                            <input type="text" name="fullname" class="form-control" required>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Email address @kmi.tl</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Re-Password</label>
                            <input type="password" name="confirm_password" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="type" checked="true" value="MEMBER">Member
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="type" value="ADMIN"> Admin
                                    </label>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                        <button type="submit" class="btn btn-primary"><i class="material-icons">add</i> Add Member
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">supervisor_account</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">Members</h4>
            <div class="table-responsive">
                <table class="table table-striped">

                    <thead class="text-primary">
                    <tr>
                        <th>ID</th>
                        <th>Full name</th>
                        <th>E-Mail</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->fullname}}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->type }}</td>
                            <td>

                                <a class="btn btn-warning" href="{{ url('user/'.$user->id.'/edit') }}"><i
                                            class="material-icons">edit</i> Edit</a>
                                <a class="btn btn-danger" onclick="return confirm('Confirm Delete')"
                                   href="{{ url('user/'.$user->id.'/delete') }}"><i
                                            class="material-icons">close</i>Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    {{ $users->links() }}
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


@endsection


@push('scripts')


@endpush
