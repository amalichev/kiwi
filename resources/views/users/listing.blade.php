@extends('layouts.app')

@section('content')
    <h1>{{ $page_title }}</h1>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>@lang('users.name')</th>
                        <th>@lang('common.email')</th>
                        <th>@lang('users.role')</th>
                        <th>@lang('common.status')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><a href="{{ route('profile', $user->id) }}">{{ $user->name }}</a></td>
                            <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                            <td>{{ $user->role->title }}</td>
                            <td>@lang('users.status_' . $user->status)</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
