@extends('layouts.app')

@section('content')
<div class="container">
    
    @foreach ($posts as $post)

    <div class="row">
        <div class="col-6 offset-3 pt-4 pb-2">

            <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100">
            </a>


                <p class="pt-2 pb-4"><span class="font-weight-bold"><a href="/profile/{{ $post->user->id }}">
                <span class="text-dark">{{ $post->user->username }}</span></a>    
                </span> : {{ $post->caption }}</p>

        </div>

        
        
    

    </div>

    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>

</div>
@endsection
