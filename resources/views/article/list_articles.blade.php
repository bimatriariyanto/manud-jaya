@extends('frontend/master')
@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
            {{--            <div class="row">--}}
            {{--                <div class="col-lg-12">--}}
            {{--                    <nav aria-label="breadcrumb">--}}
            {{--                        <ol class="breadcrumb">--}}
            {{--                            <li class="breadcrumb-item active fw-bold" aria-current="page">Kabar Desa</li>--}}
            {{--                        </ol>--}}
            {{--                    </nav>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="row">
                <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                    <h1 class="display-1 mb-3">Kabar Desa</h1>
                    <p class="lead px-lg-5 px-xxl-8">Selamat Datang di Kabar Desa Kami!</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog classic-view mt-n17">
                        @foreach($articles as $article)
                            <article class="post">
                                <div class="card">
                                    <figure class="card-img-top overlay overlay-1 hover-scale"><a class="link-dark"
                                                                                                  href="{{ route('detail_article', ['article' => $article['id']]) }}"><img
                                                src="{{ $article['image_url'] }}" alt=""/></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">{{ $article->category }}</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title mt-1 mb-0"><a class="link-dark"
                                                                                href="{{ route('detail_article', ['article' => $article['id']]) }}">{{ $article['title'] }}</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            {!!  $article['body'] !!}
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!--/.card-body -->
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $article->createdAt->isoFormat('D MMMM Y') }}</span>
                                            </li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </article>
                        @endforeach

                        {{--                        <article class="post">--}}
                        {{--                            <div class="card">--}}
                        {{--                                <figure class="card-img-top overlay overlay-1 hover-scale"><a class="link-dark"--}}
                        {{--                                        href="{{ route('detail_article', ['article_id' => 0]) }}"><img src="./assets/img/photos/b1.jpg" alt="" /></a>--}}
                        {{--                                    <figcaption>--}}
                        {{--                                        <h5 class="from-top mb-0">Read More</h5>--}}
                        {{--                                    </figcaption>--}}
                        {{--                                </figure>--}}
                        {{--                                <div class="card-body">--}}
                        {{--                                    <div class="post-header">--}}
                        {{--                                        --}}{{-- <div class="post-category text-line">--}}
                        {{--                                            <a href="#" class="hover" rel="category">Teamwork</a>--}}
                        {{--                                        </div> --}}
                        {{--                                        <!-- /.post-category -->--}}
                        {{--                                        <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="{{ route('detail_article', ['article_id' => 0]) }}">Desa--}}
                        {{--                                                Harmoni: Kisah Kecil di Tengah Keindahan Alam</a></h2>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!-- /.post-header -->--}}
                        {{--                                    <div class="post-content">--}}
                        {{--                                        <p><i>Desa Harmoni, 6 Oktober 2023</i> - Di suatu sudut yang tersembunyi di pedalaman,--}}
                        {{--                                            terletak sebuah desa kecil yang dikenal dengan nama "Desa Harmoni." Desa ini--}}
                        {{--                                            adalah sebuah permata tersembunyi yang memancarkan keindahan alam dan kehidupan--}}
                        {{--                                            yang damai.</p>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!-- /.post-content -->--}}
                        {{--                                </div>--}}
                        {{--                                <!--/.card-body -->--}}
                        {{--                                <div class="card-footer">--}}
                        {{--                                    <ul class="post-meta d-flex mb-0">--}}
                        {{--                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>6 Oktober 2023</span>--}}
                        {{--                                        </li>--}}
                        {{--                                        --}}{{-- <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By--}}
                        {{--                                                    Sandbox</span></a></li>--}}
                        {{--                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3<span>--}}
                        {{--                                                    Comments</span></a></li>--}}
                        {{--                                        <li class="post-likes ms-auto"><a href="#"><i--}}
                        {{--                                                    class="uil uil-heart-alt"></i>3</a></li> --}}
                        {{--                                    </ul>--}}
                        {{--                                    <!-- /.post-meta -->--}}
                        {{--                                </div>--}}
                        {{--                                <!-- /.card-footer -->--}}
                        {{--                            </div>--}}
                        {{--                            <!-- /.card -->--}}
                        {{--                        </article>--}}
                        <!-- /.post -->
                    </div>
                    <!-- /.blog -->
                    {{-- <nav class="d-flex" aria-label="pagination">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                        <!-- /.pagination -->
                    </nav> --}}
                    <!-- /nav -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
