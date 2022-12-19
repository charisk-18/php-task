@extends('layout')


@section('content')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($posts) == 0)
            @foreach ($posts as $post)
                <x-post-card :post="$post"/>
            @endforeach
        @else
            <p>No Posts</p>
        @endunless
    </div>
@endsection
