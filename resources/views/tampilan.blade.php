@extends('template.main')
@section('container1')
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Buruan Beli Sebelum Kehabisan!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Kami mendediakan garansi dengan harga termurah dan Berkualitas!,Jaminan Uang kembali Jika anda menemukan Harga Lebih Murah di Toko Lain!</p>
                        
                    </div>
                </div>
            </div>
@endsection

@section('container2')
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                <div class="row">
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width: 16rem;">
                            <img src="assets/img/portfolio/1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">
                                <strong>Harga:10</strong> Rp.1,979,000 
                                <br>
                                <strong>Stock:</strong> 
                                <br>
                                <hr>
                                <strong>Keterangan:Nike Kyrie 5 Infinity Black</strong><br>     
                                </p>
                                <a href="" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width: 16rem;">
                            <img src="assets/img/portfolio/2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">
                                <strong>Harga:</strong> Rp. 1,999,000 
                                <br>
                                <strong>Stock:10</strong> 
                                <br>
                                <hr>
                                <strong>Keterangan:Nike Kyrie 6 Infinity Black</strong><br>     
                                </p>
                                <a href="" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width: 16rem;">
                            <img src="assets/img/portfolio/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">
                                <strong>Harga:</strong> Rp. 1,800,000 
                                <br>
                                <strong>Stock:10</strong> 
                                <br>
                                <hr>
                                <strong>Keterangan:Nike Kyrie 7 Infinity Blue</strong><br>     
                                </p>
                                <a href="" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width: 16rem;">
                            <img src="assets/img/portfolio/4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">
                                <strong>Harga:</strong> Rp. 2,000,000 
                                <br>
                                <strong>Stock:10</strong> 
                                <br>
                                <hr>
                                <strong>Keterangan:Nike Kyrie 8 Infinity White</strong><br>     
                                </p>
                                <a href="" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
@endsection

@section('container3')
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
@endsection