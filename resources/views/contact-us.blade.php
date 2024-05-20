@extends('layout.main')

@section('title','Contact Us')
@section('content')

    <main class="main-bg">



        <!-- ==================== Start Header ==================== -->

        <header class="page-header-cerv bg-img section-padding" data-background="{{asset('imgs/header/bg1.jpg')}}"
                data-overlay-dark="4">
            <div class="container pt-100">
                <div class="text-center">
                    <h1 class="fz-100">Contact Us.</h1>
                    <div class="mt-15">
                        <a href="/">Home</a>
                        <span class="padding-rl-20">|</span>
                        <span class="main-color">Contact</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Header ==================== -->



        <!-- ==================== Start Contact ==================== -->

        <section class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 valign">
                        <div class="sec-head info-box full-width md-mb80">
                            <div class="phone fz-30 fw-600 underline main-color">
                                <a href="#0">+1 840 841 25 69</a>
                            </div>
                            <div class="morinfo mt-50 pb-30 bord-thin-bottom">
                                <h6 class="mb-15">Address</h6>
                                <p>Besòs 1, 08174 Sant Cugat del Vallès, Barcelona</p>
                            </div>
                            <div class="morinfo mt-30 pb-30 bord-thin-bottom">
                                <h6 class="mb-15">Email</h6>
                                <p>Support@uithemez.com</p>
                            </div>

                            <div class="social-icon-circle mt-50">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-dribbble"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1 valign">
                        <div class="full-width">
                            <div class="sec-head mb-50">
                                <h6 class="sub-title main-color mb-15">Let's Chat</h6>
                                <h3 class="text-u ls1">Send a <span class="fw-200">message</span></h3>
                            </div>
                            <form id="contact-form" class="form2">
                                @csrf
                                <div class="controls row">

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_name" type="text" name="contact_name" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_email" type="email" name="contact_email" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mb-30">
                                            <input id="form_subject" type="text" name="contact_subject" placeholder="Subject">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                                    <textarea id="form_message" name="contact_message" placeholder="Message" rows="4"></textarea>
                                        </div>
                                        <div id="responseMessage"></div>
                                        <div class="mt-30">
                                            <button type="submit" onclick="submitForm()" class="butn butn-full butn-bord radius-30">
                                                <span class="text">Let's Talk</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->



        <!-- ==================== Start google-map ==================== -->

        <div class="google-map">
            <iframe id="gmap_canvas"
                    src="https://maps.google.com/maps?q=hollwood&t=&z=11&ie=UTF8&iwloc=&output=embed">
            </iframe>
        </div>

        <!-- ==================== End google-map ==================== -->



    </main>

@endsection

@push('js')
    <script>
        function submitForm() {
            var name = $('input[name=contact_name]').val();
            var email = $('input[name=contact_email]').val();
            var subject = $('input[name=subject]').val();
            var message = $('textarea[name=contact_message]').val();

            if(name === '' || email === '' || message === '' || subject === '') {
                $('#responseMessage').html('<div class="text-danger">Please fill all the fields</div>');
                return false;
            }

            $.ajax({
                url: '{{ route('contactUs') }}',
                type: 'POST',
                data:$('#contact-form').serialize(),
                success: function(response) {
                    if (response.status === 'success') {
                        $('#responseMessage').html('<div class="text-success">' + response.message + '</div>');
                    } else {
                        $('#responseMessage').html('<div class="text-danger">Unexpected error. Please try again.</div>');
                    }
                },
                error: function(xhr, status, error) {
                    $('#responseMessage').html('<div class="text-danger">Error submitting form. Please try again.</div>');
                }
            });
        }
    </script>
@endpush
