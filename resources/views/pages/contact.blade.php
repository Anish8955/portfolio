<section id="contact" class="position-relative section">
        <div class="container text-center">
            <h6 class="subtitle">Contact</h6>
            <h6 class="section-title mb-4">Get In Touch With Me</h6>
            <p class="mb-5 pb-4">Connect with me for your web development needs. Let's collaborate!</p>

            <div class="contact text-left">
                <div class="form">
                    <h6 class="subtitle">Available 24/7</h6>
                    <h6 class="section-title mb-4">Get In Touch</h6>
                    <form action ="{{ route('contact')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control"  placeholder="Mobile Number" name="mobile" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message"  cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block rounded w-lg">Send Message</button>
                    </form>
                </div>
                <div class="contact-infos">
                    <div class="item">
                        <i class="ti-location-pin"></i>
                        <div class="">
                            <h5>Location</h5>
                            <p> Vill-Kayamsar,Dhanuri,Jhunjhunu,India</p>
                        </div>                          
                    </div>
                    <div class="item">
                        <i class="ti-mobile"></i>
                        <div>
                            <h5>Phone Number</h5>
                            <p>91+ 8955349294</p>
                        </div>                          
                    </div>
                    <div class="item">
                        <i class="ti-email"></i>
                        <div class="mb-0">
                            <h5>Email Address</h5>
                            <p>anishkhanpro2@gmail.com</p>
                        </div>
                    </div>
                </div>                  
            </div>
        </div>  
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439.8683987289001!2d75.38448133435627!3d28.117639926581823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3913392b0c7ed11b%3A0x8a58d3b232acdce!2sReliance%20Smart%20Point!5e0!3m2!1sen!2sin!4v1704619599332!5m2!1sen!2sin"></iframe>
        </div>      
    </section>