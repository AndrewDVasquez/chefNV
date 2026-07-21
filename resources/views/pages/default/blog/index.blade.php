<x-mylayouts.layout-default title="Blog"
bannerImage="template_default/images/banner.jpg">



<div class="container py-5">
    <div class="row">


        @foreach ($posts as $post)


            <div class="col-lg-4 col-md-6 mb-4">

                <div class="card h-100 shadow-sm">

                    <img src="{{ asset('storage/' . $post->featured_image) }}"
                         class="card-img-top"
                         alt="{{ $post->title }}">

                    <div class="card-body">

                        <small class="text-muted">
                           <strong>Posted on:</strong> {{ $post->created_at?->format('F d, Y') }}
                        </small>

                        <h4 class="mt-2">
                            {{ $post->title }}
                        </h4>

                        <p>
                            {{ Str::limit(strip_tags($post->content), 120) }}
                        </p>

                    </div>

                    <div class="card-footer bg-white border-0">

                        <a href="{{ route('blog.show', $post->slug) }}"
                           class="btn btn-warning">
                            Read More
                        </a>

                    </div>

                </div>

            </div>

        @endforeach
        <div class="mt-5 d-flex justify-content-center">
    {{ $posts->links() }}
</div>

    </div>
</div>



</x-mylayouts.layout-default>
