@extends($adminTheme)

@section('title', 'Blog Show')

@section('style')
@endsection

@section('content')
<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title">Blog Show</h5>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.blog') }}" class="btn btn-success btn-sm mt-3" style="float: right;">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                        <center><h3>Blog Image</h3></center>
                        <center><img src="{{ asset($blog->image) }}" width="50%"></center>
                        <hr>

                        <center><h3>Blog English</h3></center>
                        <center><h5>{{ $blog->title }}</h5></center>
                        <div style="line-height: 1.8; font-size: 16px; max-width: 800px; margin: auto;">
                            {!! str_replace(['<pre>', '</pre>'], '', $blog->description) !!}
                        </div>
                        <hr>

                        <center><h3>Blog Hindi</h3></center>
                        <center><h5>{{ $blog->title_hindi }}</h5></center>
                        <div style="line-height: 1.8; font-size: 16px; max-width: 800px; margin: auto;">
                            {!! str_replace(['<pre>', '</pre>'], '', $blog->description_hindi) !!}
                        </div>
                        <hr>

                        <center><h3>Blog Gujarati</h3></center>
                        <center><h5>{{ $blog->title_gujrati }}</h5></center>
                        <div style="line-height: 1.8; font-size: 16px; max-width: 800px; margin: auto;">
                            {!! str_replace(['<pre>', '</pre>'], '', $blog->description_gujrati) !!}
                        </div>
                        <hr>

                        <center><h3>Blog Other Details</h3></center>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Publish Date</strong> : {{ getDateYMDToDMY($blog->post_publish_date) }}
                            </div>
                            <div class="col-md-3">
                                <strong>Category</strong> : {{ $blog->category->name ?? '' }}
                            </div>
                            <div class="col-md-3">
                                <strong>Sub Category</strong> : {{ $blog->subCategory->name ?? '' }}
                            </div>
                            <div class="col-md-3">
                                <strong>Post Type</strong> :
                                @if($blog->post_type == 0)
                                    Regular
                                @else
                                    Good
                                @endif
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <strong>Seo Tags</strong>:
                                @if (!empty($blog->seo_tags))
                                    @php
                                        $tags = json_decode($blog->seo_tags, true);
                                    @endphp
                                    @foreach ($tags as $tag)
                                        <span class="badge bg-primary">{{ $tag['value'] }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('script')
@endsection
