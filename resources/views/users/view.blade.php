@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}</h1>

    <table class="table table-hover table-striped">
        <tr>
            <td>@lang('common.email')</td>
            <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
        </tr>
        <tr>
            <td>@lang('users.role')</td>
            <td><a href="{{ route('users') }}">{{ $user->role->title }}</a></td>
        </tr>
        <tr>
            <td>@lang('common.status')</td>
            <td>@lang('users.status_' . $user->status)</td>
        </tr>
    </table>
@endsection
