

    @extends('layouts.app')

    @section("content")

    <div class="py-12">
        <div class="max-w-7xl m-1 mx-auto sm:px-6 lg:px-8">


            <div class="bg-white m-1 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  border-b border-gray-200">
                    <div class="container">
                        <div class="row">
                            <h5 class="fw-bold">
                                <a > {{ $post->title }}</a> </h5>

                                <img class="img img-thumbnail" src="{{ asset('test.jpg') }}" alt="post image">




                                    <p class="bg-secondary p-2 shadow-sm">"{{ $post->excerpt }}"</p>


                                    {{ $post->full_post }}




                        </div>
                    </div>
                 </div>


            </div>

        </div>
    </div>

    @endsection
