<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if($posts->count())
        <x-main-post-card :post="$posts[0]"/>
        @if($posts->count() > 1)
            <div class="lg:grid lg:grid-cols-6">
                @foreach($posts->skip(1) as $post)
                    <x-post :post="$post" class="{{ $loop->iteration > 2 ? 'col-span-2' : 'col-span-3' }}"/>
                @endforeach
                @endif
                @else
                    <div>NO Found Posts.</div>
                @endif
            </div>
</main>
