
<!--<footer class=" indigo bg-dark text-center footer__bottom" id="contact" >-->
<!--  <p class="h2 text-success">Contact us</p>-->
<!--  <hr style="width:100%" color="white">  -->
<!--<a href="https://t.me/bishishe"><span class="text-success">telegram </span><i class="fa fa-telegram text-light" aria-hidden="true"></i></a>-->
<!--<br>-->
<!--<p class="text-success">Phone Number: <span><a href="tel:+251961885661" class="text-success">+251917757677</a></span></p>-->

<!--<div class="footer-copyright text-center text-success">© <script>-->
<!--  document.write(new Date().getFullYear()); -->
<!--</script> All right reserved  <a href="http://deboengineering.com/n/" class="text-success">Debo Engineering</a></div><a href="http://deboengineering.com/n/" class="text-warning">-->

<!--</a></footer>-->
<div class="py-4 footer" style="border-radius:10px 10px 0px 0px;">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h4 class="text-success">Categories</h4>
     
      <ul class="m-0 p-0 ">
          @foreach($category as $item)
          <li class="pb-2"><a href="{{url('view-category/'.$item->name)}}" class="text-white">{{$item->name}}</a></li>
            @endforeach
      </ul>
      
    </div>
    <div class="col-lg-3 col-xs-12">
      <h4 class="mt-lg-0 mt-sm-3 text-success">Links</h4>
        <ul class="m-0 p-0 ">
          <li><a href="#" class="text-white">Terms and conditions</a></li>
          <li><a href="/about-us" class="text-white">About Us</a></li>
          <li><a href="#" class="text-white">Blog</a></li>
          <li><a href="#" class="text-white">FAQ</a></li>
          <li><a href="/contact-us" class="text-white">Contact Us</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4 text-success">Contact</h4>
      <p class="mb-0 text-white"><i class="fa fa-phone mr-3"></i><a href="tel:+251961885661" class="text-white">+251961885661</a><br><span  style="margin-left:30px;"><a href="tel:+25100944635" class="text-white" >+251900944635</a></span></p>
      <p class="text-white"><i class="fa fa-telegram mr-3"></i><a href="https://t.me/deboplantseedlingshopping" class="text-white" target="_blank">Telegram</a></p>
      <div class="col copyright">
      <p class=""><small class="text-white-50">©  <script>
  document.write(new Date().getFullYear());
</script>. All Rights Reserved.</small></p>
    </div>
     
    </div>
  </div>
 
</div>
</div>