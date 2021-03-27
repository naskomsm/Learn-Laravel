@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fsof10-1.fna.fbcdn.net/v/t51.2885-19/s320x320/20635165_1942203892713915_5464937638928580608_a.jpg?tp=1&_nc_ht=instagram.fsof10-1.fna.fbcdn.net&_nc_ohc=3nP3ZoUUCXwAX_yL3RA&ccb=7-4&oh=e8b4c64963e022bcac846aaa789c390f&oe=6085CC1C&_nc_sid=7bff83" class="rounded-circle" style="height: 200px;" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="div">
                <h1>{{ Auth::user()->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>774</strong> posts</div>
                <div class="pr-4"><strong>25.4m</strong> followers</div>
                <div class="pr-4"><strong>6</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">apple</div>
            <div>Everyone has a story to tell.</div>
            <div>Tag #ShotoniPhone to take part.</div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fsof10-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.169.1349.1349a/s640x640/164879560_2709785519243957_5826713739885785542_n.jpg?tp=1&_nc_ht=instagram.fsof10-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=AUHosV8J37cAX81-H6U&ccb=7-4&oh=ec41c638c9b843fab0ae87647b3a70b3&oe=60889EE0&_nc_sid=7bff83" class="w-100">

        </div>
        <div class="col-4">
            <img src="https://instagram.fsof10-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.180.1440.1440a/s640x640/165036544_501627927909038_7869953344961084884_n.jpg?tp=1&_nc_ht=instagram.fsof10-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=60DTszO_1DIAX9gSori&ccb=7-4&oh=b901b340a8d98592f6abd435588fff1c&oe=60888D56&_nc_sid=7bff83" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fsof10-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.169.1349.1349a/s640x640/162649131_1063834797474729_3901673075994798426_n.jpg?tp=1&_nc_ht=instagram.fsof10-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=qtJgphOZ8hcAX_y5Yqq&ccb=7-4&oh=61a518aefe1dd8ca9dfead0771e2fcc7&oe=60866CA9&_nc_sid=7bff833" class="w-100">
        </div>
    </div>
</div>
@endsection