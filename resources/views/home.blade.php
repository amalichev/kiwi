@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">@lang('blocks.dashboard')</div>

    <div class="panel-body">
        @if (Auth::guest())
            @lang('messages.dashboard.guest')
        @else
            @lang('messages.dashboard.user', [
                'user' => '<a href="' . route('profile', $user->id) . '" rel="nofollow">' . $user->name . '</a>',
                'role' => '<a href="' . route('users') . '">' . $user->role->title . '</a>'
            ])
        @endif
    </div>
</div>
@endsection
