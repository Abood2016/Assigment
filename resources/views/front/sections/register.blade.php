@include('front.layouts.header-meta')
@include('front.layouts.nav-bar')

<br>
<br>
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Join Us</h2>
        <!-- Icon Divider-->
        <br>
        <br>
        @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success pt-4">
            {{ session()->get('success') }}
        </div>
    @endif
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form action="{{ route('user.store') }}" method="post" novalidate="novalidate">
                    @csrf

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Name</label>
                            <input class="form-control" id="name" name="name"  type="name" placeholder="Name"
                                required="required"
                                data-validation-required-message="Please enter your name address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>


                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email Address</label>
                            <input class="form-control" id="email" name="email"  type="email" placeholder="Email Address"
                                required="required"
                                data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <input class="form-control" id="Password" name="password"  type="Password" placeholder="Password"
                            required="required"
                            data-validation-required-message="Please enter your Password" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton"
                            type="submit">Send</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
@include('front.layouts.footer')
