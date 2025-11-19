@extends($frontTheme)

@section('title', 'Home')

@section('style')
    
@endsection

@section('content')
<section id="page-title" class="page-title-mini">

    <div class="container clearfix fadeInRightBig animated" data-animate="fadeInRightBig">
        <h1>
            @if(session('language') == 'value_english')
                Blogs
            @elseif(session('language') == 'value_hindi')             
                ब्लॉग
            @elseif(session('language') == 'value_gujrati')            
                બ્લોગ્સ
            @endif
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">
                @if(session('language') == 'value_english')
                    Home
                @elseif(session('language') == 'value_hindi')
                    घर
                @elseif(session('language') == 'value_gujrati')
                    ઘર
                @endif
            </a></li>
            <li class="breadcrumb-item active" aria-current="page">
                @if(session('language') == 'value_english')
                     Blogs
                @elseif(session('language') == 'value_hindi')
                     ब्लॉग
                @elseif(session('language') == 'value_gujrati')
                     બ્લોગ્સ
                @endif
            </li>
        </ol>
    </div>

</section>
<section id="content">
    <div class="content-wrap">
        
    </div>
</section>
@endsection

@section('script')
    
@endsection