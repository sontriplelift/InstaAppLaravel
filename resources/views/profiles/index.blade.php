@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row" style="padding-top: 20px;">
                <div class="col-3" style="text-align:center;">
                    <img src="https://e0.365dm.com/23/03/2048x1152/skysports-martin-odegaard-arsenal_6074824.jpg" style="height: 150px; width: 150px;  object-fit: cover;" class="rounded-circle">
                </div>
                <div class="col-9">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h1>{{ $user->username }}</h1>
                        <a href="#">Add new post</a>
                    </div>
                    <div class="d-flex">
                        <div class="pe-5"><strong>100</strong> posts</div>
                        <div class="pe-5"><strong>1.3m</strong> followers</div>
                        <div class="pe-5"><strong>999</strong> following</div>
                    </div>
                    <div class="pt-3"><strong>{{ $user->profile->title }}</strong></div>
                    <div>{{ $user->profile->description }}</div>
                    <div><a href="#" target="_blank">{{ $user->profile->url }}</a></div>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-4 text-center"><img src="https://d2x51gyc4ptf2q.cloudfront.net/content/uploads/2023/01/29083952/Arsenal-midfielder-Martin-Odegaard.jpg" style="width: 240px; height: 240px; object-fit: cover;"></div>
                <div class="col-4 text-center"><img src="https://s.yimg.com/ny/api/res/1.2/k9l3uoASBLej5Mu7vV3jdw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTQyNw--/https://media.zenfs.com/en/evening_standard_239/f12c6ea0148308d7b98631330bf3ece4" style="width: 240px; height: 240px; object-fit: cover;"></div>
                <div class="col-4 text-center"><img src="https://www.arsenal.com/sites/default/files/styles/desktop_16x9/public/images/odegaard-celeb-fulham.png?itok=78OvoRBI" style="width: 240px; height: 240px; object-fit: cover;"></div>
            </div>
        </div>
    </div>
</div>
@endsection
