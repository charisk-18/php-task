@props(['post'])

<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex ">
        <img class="hidden w-48 mr-6 md:block min-w-[200px]" src="{{$post->image}}" alt="{{$post->title}}" />
        <div>
            <h3 class="text-2xl">
                <a href="/posts/{{$post->id}}" class="font-bold mb-4">{{ $post->title }}</a>
            </h3>
            

            <div class="text-lg mt-4">
                <p class="ml-5 ">{{ $post->content }}</p>
            </div>

        </div>
    </div>
</div>