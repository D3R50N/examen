@extends('template.index')




@section('content')
@foreach ($posts as $post)
<figure class="white">
    <a href="{{route('posts.show', ['post' => $post->id])}}">
       
        <img src="{{ asset('img/' . $post->image) }}" alt="" />
        <dl>
            <dt>{{ $post->title }}</dt>
            <dd>{{ $post->resume }}</dd>
        </dl>
    </a>
    <div id="wrapper-part-info">
        <div class="part-info-image"><img src="{{asset('storage/' . $post->Category->image)}}" alt="" width="28" height="28"/></div>
        <div id="part-info">{{ $post->title }}</div>
    </div>
</figure>

@endforeach

@stop