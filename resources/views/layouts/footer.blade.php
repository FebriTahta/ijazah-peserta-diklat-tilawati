<!-- Footer Style Three -->
<footer class="footer-style-three">
    <div class="auto-container">
        <!-- Widgets Section -->

        <div class="widgets-section">
            <div class="">
                
                
                <!--Footer Column-->
                <center>
                <div class="footer-column">
                    <div class="footer-widget logo-widget">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('assets/images/nf_logo_white.png') }}" width="130px" alt="" /></a>
                        </div>
                        <div class="copyright">&copy; 2021 <a href="#">Dokumentasi & IT </a> Tilawati Pusat.</div>
                    </div>
                </div>
                </center>
            
                
            </div>
        </div>
    </div>
</footer>


</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
<button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
<form method="post" action="blog.html">
    <div class="form-group">
        <input type="search" name="search-field" value="" placeholder="Search Here" required="">
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>
</form>
</div>
<!-- End Header Search -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
<script src="{{ asset('tilawatipusat/landing/js/jquery.js') }}"></script>
<script src="{{ asset('tilawatipusat/landing/js/popper.min.js') }}"></script>
<script src="{{ asset('tilawatipusat/landing/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('tilawatipusat/landing/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('tilawatipusat/landing/js/appear.js') }}"></script>
<script src="{{ asset('tilawatipusat/landing/js/parallax.min.js') }}"></script>
<script src="{{ asset('tilawatipusat/landing/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('tilawatipusat/landing/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('tilawatipusat/landing/js/owl.js') }}"></script>
<script src="{{ asset('tilawatipusat/landing/js/wow.js') }}"></script>
<script src="{{ asset('tilawatipusat/landing/js/nav-tool.js') }}"></script>
<script src="{{ asset('tilawatipusat/landing/js/jquery-ui.js') }}"></script>
<script src="{{ asset('tilawatipusat/landing/js/script.js') }}"></script>
@yield('script')
</body>
</html>