<div class="container">
    <center>
        <div class="blog-header">
            <h1 class="blog-title">The Bootstrap Blog</h1>
            <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
        </div>
            <div class="col-sm-8 blog-main">

                <div class="blog-post">
                    <h2 class="blog-post-title">{{$post->title}}</h2>
                    <img class="card-img-top" src="{{$post->image}}" alt="Card image cap">

                    <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
                    <h4>{{$post->body}}</h4>
                </div><!-- /.blog-main -->

            </div><!-- /.row -->
    </center>
</div>
