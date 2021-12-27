
<main role="main">

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{$blog->image}}" alt="Card image cap">
                        <div class="card-body">
                            <a style="text-decoration: none" href="{{route('blog.details', $blog->id)}}" class="card-text">{{$blog->title}}</a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{route('blog.details', $blog->id)}}" class="btn btn-sm btn-info btn-block">View</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{$blogs->links()}}
        </div>
    </div>

</main>
