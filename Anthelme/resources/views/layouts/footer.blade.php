<footer class="footer-section">
  <div class="container relative">

    <div class="sofa-img">
      <img src="{{asset('assets/images/logo-bonr.png')}}" alt="Image" class="img-fluid">
    </div>

    <div class="row">
      <div class="col-lg-8">
        <div class="subscription-form">
          <h3 class="d-flex align-items-center"><span class="me-1"><img src="{{asset('assets/images/envelope-outline.svg')}}" alt="Image" class="img-fluid"></span><span class=" me-2" style="color:blue;">S'inscrire à la Newsletter</span></h3>

          <form action="#" class="row g-3">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Entrer votre nom">
            </div>
            <div class="col-auto">
              <input type="email" class="form-control" placeholder="Entrer votre prénom">
            </div>
            <div class="col-auto ">
              <button class="btn btn-primary px-4 w-100">
                <span class="fa fa-paper-plane"></span>
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>

    <div class="row g-5 mb-5">
      <div class="col-lg-4">
        <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Santé Plus<span>.</span></a></div>
        <p class="mb-4">
          Notre solution de gestion des bons de restauration est conçue pour répondre aux besoins des entreprises de toutes tailles.

Contactez-nous dès aujourd'hui pour en savoir plus et découvrir comment nous pouvons vous aider à simplifier la gestion de vos bons de restauration.

Additional notes:
        </p>

        <ul class="list-unstyled custom-social">
          <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
          <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
          <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
          <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
        </ul>
      </div>

      <div class="col-lg-8">
        <div class="row links-wrap">
          <div class="col-6 col-sm-6 col-md-3">
            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>
          </div>

          <div class="col-6 col-sm-6 col-md-3">
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Knowledge base</a></li>
              <li><a href="#">Live chat</a></li>
            </ul>
          </div>

          <div class="col-6 col-sm-6 col-md-3">
            <ul class="list-unstyled">
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Our team</a></li>
              <li><a href="#">Leadership</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>

          {{-- <div class="col-6 col-sm-6 col-md-3">
            <ul class="list-unstyled">
              <li><a href="#">Nordic Chair</a></li>
              <li><a href="#">Kruzo Aero</a></li>
              <li><a href="#">Ergonomic Chair</a></li>
            </ul>
          </div> --}}
        </div>
      </div>

    </div>

    <div class="border-top copyright">
      <div class="row pt-4">
        <div class="col-lg-6">
          <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distribué par <a hreff="https://sparkcorporation.org">Spark</a>
        </p>
        </div>

        <div class="col-lg-6 text-center text-lg-end">
          <ul class="list-unstyled d-inline-flex ms-auto">
            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>

      </div>
    </div>

  </div>
</footer>

<style>
  .footer-section {
    z-index: 999;
  padding: 80px 0;
  background: #ffffff; }
  .footer-section .relative {
    position: relative; }
  .footer-section a {
    text-decoration: none;
    color: #2f2f2f;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
    .footer-section a:hover {
      color: rgba(47, 47, 47, 0.5); }
  .footer-section .subscription-form {
    margin-bottom: 40px;
    position: relative;
    z-index: 2;
    margin-top: 100px; }
    @media (min-width: 992px) {
      .footer-section .subscription-form {
        margin-top: 0px;
        margin-bottom: 80px; } }
    .footer-section .subscription-form h3 {
      font-size: 18px;
      font-weight: 500;
      color: #3b5d50; }
    .footer-section .subscription-form .form-control {
      height: 50px;
      border-radius: 10px;
      font-family: "Inter", sans-serif; }
      .footer-section .subscription-form .form-control:active, .footer-section .subscription-form .form-control:focus {
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-color: #3b5d50;
        -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.2); }
      .footer-section .subscription-form .form-control::-webkit-input-placeholder {
        font-size: 14px; }
      .footer-section .subscription-form .form-control::-moz-placeholder {
        font-size: 14px; }
      .footer-section .subscription-form .form-control:-ms-input-placeholder {
        font-size: 14px; }
      .footer-section .subscription-form .form-control:-moz-placeholder {
        font-size: 14px; }
    .footer-section .subscription-form .btn {
      border-radius: 10px !important; }
  .footer-section .sofa-img {
    position: absolute;
    top: -200px;
    z-index: 1;
    right: 0; }
    .footer-section .sofa-img img {
      max-width: 380px; }
  .footer-section .links-wrap {
    margin-top: 0px; }
    @media (min-width: 992px) {
      .footer-section .links-wrap {
        margin-top: 54px; } }
    .footer-section .links-wrap ul li {
      margin-bottom: 10px; }
  .footer-section .footer-logo-wrap .footer-logo {
    font-size: 32px;
    font-weight: 500;
    text-decoration: none;
    color: #3b5d50; }
  .footer-section .custom-social li {
    margin: 2px;
    display: inline-block; }
    .footer-section .custom-social li a {
      width: 40px;
      height: 40px;
      text-align: center;
      line-height: 40px;
      display: inline-block;
      background: #dce5e4;
      color: #3b5d50;
      border-radius: 50%; }
      .footer-section .custom-social li a:hover {
        background: #3b5d50;
        color: #ffffff; }
  .footer-section .border-top {
    border-color: #dce5e4; }
    .footer-section .border-top.copyright {
      font-size: 14px !important; }

.untree_co-section {
  padding: 7rem 0; }

.form-control {
  height: 50px;
  border-radius: 10px;
  font-family: "Inter", sans-serif; }
  .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #3b5d50;
    -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.2); }
  .form-control::-webkit-input-placeholder {
    font-size: 14px; }
  .form-control::-moz-placeholder {
    font-size: 14px; }
  .form-control:-ms-input-placeholder {
    font-size: 14px; }
  .form-control:-moz-placeholder {
    font-size: 14px; }

.service {
  line-height: 1.5; }
  .service .service-icon {
    border-radius: 10px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50px;
    flex: 0 0 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    background: #3b5d50;
    margin-right: 20px;
    color: #ffffff; }

textarea {
  height: auto !important; }

.site-blocks-table {
  overflow: auto; }
  .site-blocks-table .product-thumbnail {
    width: 200px; }
  .site-blocks-table .btn {
    padding: 2px 10px; }
  .site-blocks-table thead th {
    padding: 30px;
    text-align: center;
    border-width: 0px !important;
    vertical-align: middle;
    color: rgba(0, 0, 0, 0.8);
    font-size: 18px; }
  .site-blocks-table td {
    padding: 20px;
    text-align: center;
    vertical-align: middle;
    color: rgba(0, 0, 0, 0.8); }
  .site-blocks-table tbody tr:first-child td {
    border-top: 1px solid #3b5d50 !important; }
  .site-blocks-table .btn {
    background: none !important;
    color: #000000;
    border: none;
    height: auto !important; }

.site-block-order-table th {
  border-top: none !important;
  border-bottom-width: 1px !important; }

.site-block-order-table td, .site-block-order-table th {
  color: #000000; }

.couponcode-wrap input {
  border-radius: 10px !important; }

.text-primary {
  color: #3b5d50 !important; }

.thankyou-icon {
  position: relative;
  color: #3b5d50; }
  .thankyou-icon:before {
    position: absolute;
    content: "";
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: rgba(59, 93, 80, 0.2); }

</style>