
@include('front.layouts.header-meta')
@include('front.layouts.nav-bar')

<br>
<br>
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container text-center">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row ">
            <div class="col-lg-12">
                <p class="lead">{{ $setting->about }}</p>
            </div>
        </div>
        <!-- About Section Button-->
        {{-- <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light"
                href="{{ route('document.download',['file' => $document->file]) }}">
                <i class="fas fa-download mr-2"></i>
                Download Cv!
            </a>
        </div> --}}
    </div>
</section>

@include('front.layouts.footer')
