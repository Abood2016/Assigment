@include('front.layouts.header-meta')
@include('front.layouts.nav-bar')

<br>
<br>
<section class="page-section portfolio " id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->

            @foreach ($portfolios as $portfolio)
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"></div>
                    </div>
                    <img class="img-fluid" src="{{ asset('images/portfolio/' . $portfolio->image) }}" alt="" />
                </div><br>
                <div class="justify-content-center" style="text-align: center;"><span class="btn btn-success"><a  style="text-decoration: none;color:black" href="{{ route('front.portfolio.show',['id' => $portfolio->id]) }}">{{ $portfolio->name }}</a></span></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('front.layouts.footer')
