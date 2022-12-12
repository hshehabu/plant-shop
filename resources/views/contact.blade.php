@section('title')
Contact Us
@endsection
@extends('master')

@section("content")
<div class="py-3 mb-4 shadow-sm bg-dark border-top">
    <div class="container">
        <h5 class="mb-0 text-light"><a href="/" class="text-light">Home </a> <i class="fa fa-angle-right px-2"></i>   Contact us</h5>
    </div>
</div>
<div class="container my-4">
  
  <div class="py-4">


    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
  
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

              
                <div class="row">

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="email" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>

                </div>
              
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
            
                <div class="row">

                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
            

            </form>

            <div class="text-center text-md-left ">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();"><span class="text-light">Send</span></a>
            </div>
            <div class="status"></div>
        </div>
 
        <div class="col-md-3 text-center">
           <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt text-dark"></i>
                    <p>Jimma, Oromia, Ethiopia</p>
                </li>
                <li><i class="fas fa-phone mt-4 text-dark"></i>
                   <a href="tel:+251961885661" class="text-dark ml-2">+251961885661</a>
                   <br><span  style="margin-left:30px;"><a href="tel:+25100944635" class="text-dark ml-2 " >+251900944635</a></span>
                </li>

                <li><i class="fas fa-envelope mt-4 text-dark"></i>
                    <a href="#" class="text-dark ml-2" target="_blank">
                        debo-developers@gmail.com
                    </a>
                </li>
                <li>
                    <i class="fa fa-telegram mt-4 text-dark" ></i>
                    <a href="https://t.me/deboplantseedlingshopping" class="text-dark ml-2" target="_blank"> telegram</a>
                </li>
            </ul>


        </div>
      

    </div>
    <div class="row my-4" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31632.66349246459!2d36.807630599284686!3d7.674233000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17adb960abc3de2d%3A0xd55c9da7e74aaaf1!2sDebo%20Engineering!5e0!3m2!1sen!2set!4v1659776018756!5m2!1sen!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         
    </div>
</div>

</div>
@endsection

