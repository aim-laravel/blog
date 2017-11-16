@extends('layouts.manage')
@section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">
                {{ $role->display_name }} <small class="m-l-25"><em>{{ $role->name }}</em></small>
            </h1>
            <h3 class="subtitle">{{ $role->description }}</h3>
        </div>
        <div class="column">
            <a href="{{ route('roles.edit', $role->id) }}">
                <i class="fa fa-edit m-r-10"></i> Edit
            </a>
        </div>
    </div>
    <hr class="m-t-0">
    <div class="columns">
        <div class="column">
            <div class="box">
                <div class="media">
                    <div class="media-content">
                        <div class="content">
                            <h2 class="title">Permisssions</h2>
                            <ul>
                                @foreach ($role->permissions as $r)
                                <li>
                                    {{$r->display_name}} <em class="m-l-15">({{ $r->description }})</em>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
