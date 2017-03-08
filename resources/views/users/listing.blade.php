@extends('layouts.app')

@section('content')
    <h1>@lang('common.users')</h1>

    @foreach($roles as $role)
        <div class="panel panel-default">
            <div class="panel-heading">{{ $role['title'] }}</div>

            <div class="panel-body">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>@lang('users.name')</th>
                        <th>@lang('common.email')</th>
                        <th>@lang('common.status')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($role['users'] as $user)
                        <tr>
                            <td><a href="{{ route('profile', $user->id) }}">{{ $user->name }}</a></td>
                            <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                            <td>@lang('users.status_' . $user->status)</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
@endsection
