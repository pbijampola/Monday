

    @extends('layouts.app')

    @section("content")

    <div class="py-12">
        <div class="max-w-7xl m-1 mx-auto sm:px-6 lg:px-8">
            @foreach ($posts as  $post)


            <div class="bg-white m-1 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  border-b border-gray-200">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="img img-thumbnail" src="test.jpg" alt="">
                            </div>
                            <div class="col-md-8">
                                <h5 class="fw-bold">
                                   <a href="{{ route("readPost",$post->id
                                   ) }}"> {{ $post->title }}</a> </h5>


                                    <p>{{ $post->excerpt }}</p>
                            </div>


                            <div class="card shadow-lg m-3 ">
                               {{ $post->created_at->diffForHumans() }}
                            </div>




                        </div>
                    </div>
                 </div>


            </div>
            @endforeach

            {{ $posts->links() }}

        </div>
    </div>

    @endsection
