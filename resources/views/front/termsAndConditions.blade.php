@extends($frontTheme)

@section('title', 'Terms And Conditions')

@section('style')
<style>
    .terms-section {
        background: #f9f9f9;
        padding: 50px 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .terms-title {
        font-size: 28px;
        margin-bottom: 30px;
        font-weight: 700;
        color: #333;
        display: flex;
        align-items: center;
    }
    .terms-title i {
        font-size: 30px;
        margin-right: 10px;
        color: #00b894;
    }
    .terms-list li {
        margin-bottom: 15px;
        font-size: 17px;
        line-height: 1.6;
        color: #444;
    }
    .breadcrumb {
        background: none;
        padding-left: 0;
    }
</style>
@endsection

@section('content')
<!-- Page Title -->
<section id="page-title" class="page-title-mini">
    <div class="container clearfix fadeInRightBig animated" data-animate="fadeInRightBig">
        <h1 class="mb-0">Terms And Conditions</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Terms And Conditions</li>
        </ol>
    </div>
</section>

<!-- Terms Content -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix terms-section">
            @if(session('language') == 'value_english')
                <div class="terms-title"><i class="icon-line-content-right"></i>Welcome to our blog site!</div>
                <ol class="terms-list">
                    <li><strong>Entertainment Purpose Only:</strong> All content is for entertainment and general information. We do not guarantee accuracy.</li>
                    <li><strong>No Professional Advice:</strong> This blog does not provide professional advice. Please consult a qualified expert.</li>
                    <li><strong>Personal Opinions:</strong> Views shared are personal and not of any organization.</li>
                    <li><strong>Use at Your Own Risk:</strong> We are not liable for actions based on the content.</li>
                    <li><strong>External Links:</strong> We do not guarantee external site reliability or content.</li>
                    <li><strong>User Conduct:</strong> Avoid offensive or harmful activity. We may remove inappropriate comments.</li>
                    <li><strong>Copyright:</strong> Content is owned by us unless stated. No reuse without permission.</li>
                    <li><strong>Changes to Terms:</strong> Continued use means you accept updated terms.</li>
                </ol>

            @elseif(session('language') == 'value_hindi')
                <div class="terms-title"><i class="icon-line-content-right"></i> हमारे ब्लॉग साइट पर आपका स्वागत है!</div>
                <ol class="terms-list">
                    <li><strong>केवल मनोरंजन हेतु:</strong> यह सामग्री केवल मनोरंजन और सामान्य जानकारी के लिए है। हम सटीकता की गारंटी नहीं देते।</li>
                    <li><strong>कोई पेशेवर सलाह नहीं:</strong> कृपया विशेषज्ञ से सलाह लें।</li>
                    <li><strong>व्यक्तिगत विचार:</strong> यह लेखक के व्यक्तिगत विचार हैं।</li>
                    <li><strong>अपने जोखिम पर उपयोग:</strong> जानकारी के उपयोग हेतु आप स्वयं जिम्मेदार हैं।</li>
                    <li><strong>बाहरी लिंक:</strong> हम बाहरी लिंक की विश्वसनीयता की गारंटी नहीं देते।</li>
                    <li><strong>उपयोगकर्ता आचरण:</strong> अभद्र/हानिकारक गतिविधियों से बचें।</li>
                    <li><strong>कॉपीराइट:</strong> सभी सामग्री हमारी है, बिना अनुमति उपयोग वर्जित है।</li>
                    <li><strong>नियमों में बदलाव:</strong> निरंतर उपयोग का अर्थ है स्वीकार्यता।</li>
                </ol>

            @elseif(session('language') == 'value_gujrati')
                <div class="terms-title"><i class="icon-line-content-right"></i> અમારા બ્લોગ સાઇટ પર આપનું સ્વાગત છે!</div>
                <ol class="terms-list">
                    <li><strong>માત્ર મનોરંજન માટે:</strong> આ માત્ર મનોરંજન અને સામાન્ય માહિતી માટે છે. અમારે સચોટતા અંગે કોઈ ખાતરી નથી.</li>
                    <li><strong>કોઈ વ્યાવસાયિક સલાહ નથી:</strong> કૃપા કરીને નિષ્ણાતની સલાહ લો.</li>
                    <li><strong>વ્યક્તિગત અભિપ્રાયો:</strong> લેખકના અંગત અભિપ્રાયો છે.</li>
                    <li><strong>તમારા જોખમે ઉપયોગ:</strong> તમે માહિતીનો ઉપયોગ કરો છો એ તમારા જોખમે છે.</li>
                    <li><strong>બાહ્ય લિંક્સ:</strong> તૃતીય પક્ષ લિંક્સ માટે અમે જવાબદાર નથી.</li>
                    <li><strong>વપરાશકર્તા વર્તન:</strong> અયોગ્ય વર્તન ન કરો. ટિપ્પણીઓ દૂર કરવાની છૂટ રાખીએ છીએ.</li>
                    <li><strong>કૉપિરાઇટ:</strong> તમામ હક્ક અમારી પાસે છે. વગર પરવાનગી ઉપયોગ ના કરો.</li>
                    <li><strong>શરતોમાં ફેરફાર:</strong> બદલેલી શરતોનો સ્વીકાર તમારા સતત ઉપયોગથી માનવામાં આવશે.</li>
                </ol>
            @endif
        </div>
    </div>
</section>
@endsection

@section('script')
@endsection
