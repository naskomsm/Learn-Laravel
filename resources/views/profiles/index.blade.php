@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fsof10-1.fna.fbcdn.net/v/t51.2885-19/s320x320/20635165_1942203892713915_5464937638928580608_a.jpg?tp=1&_nc_ht=instagram.fsof10-1.fna.fbcdn.net&_nc_ohc=3nP3ZoUUCXwAX_yL3RA&ccb=7-4&oh=e8b4c64963e022bcac846aaa789c390f&oe=6085CC1C&_nc_sid=7bff83" class="rounded-circle" style="height: 200px;" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>25.4m</strong> followers</div>
                <div class="pr-4"><strong>6</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="https://www.apple.com/">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
       @foreach ($user->posts as $post)
           <div class="col-4 pb-4">
              <a href="/p/{{ $post->id }}">
                 <img src="/storage/{{ $post-> image }}" class="w-100">
              </a>
           </div>
       @endforeach
    </div>
</div>
@endsection
