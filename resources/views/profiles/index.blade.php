@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row" style="padding-top: 20px;">
                <div class="col-3" style="text-align:center;">
                    <img src="{{ $user->profile->getProfileImage() }}" class="rounded-circle w-100">
                </div>
                <div class="col-9">
                    <div class="d-flex justify-content-between align-items-baseline pb-3">
                        <div class="d-flex">
                            <h1 style="margin:0;">{{ $user->username }}</h1>
                            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                        </div>

                        @can('update', $user->profile)
                            <a href="/p/create">Add new post</a>
                        @endcan
                    </div>
                    @can('update', $user->profile)
                        <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
                    @endcan
                    <div class="d-flex">
                        <div class="pe-5"><strong>{{ $postCount }}</strong> posts</div>
                        <div class="pe-5"><strong>{{ $followersCount }}</strong> followers</div>
                        <div class="pe-5"><strong>{{ $followingCount }}</strong> following</div>
                    </div>
                    <div class="pt-3"><strong>{{ $user->profile->title }}</strong></div>
                    <div>{{ $user->profile->description }}</div>
                    <div><a href="#" target="_blank">{{ $user->profile->url }}</a></div>
                </div>
            </div>

            <div class="row pt-4">
                @foreach ($user->posts as $post)
                    <div class="col-4 text-center pb-3">
                        <a href="/p/{{ $post->id }}">
                            <img src="/storage/{{ $post->image }}" style="width: 240px; height: 240px; object-fit: cover;">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
