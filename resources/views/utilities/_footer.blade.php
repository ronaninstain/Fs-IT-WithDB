<footer class="footer-area bg" style="background-image: url('/images/footer/footer.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-xxl-3">
          <div class="single-footer">
            <h2>FS IT</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio alias perspiciatis ducimus voluptate, dolorem quam ullam necessitatibus consequatur explicabo distinctio!</p>
          </div>
        </div>
        <div class="col-xxl-2">
          <div class="single-footer">
            <h4>quick links</h4>
            <ul>
              <li><a href=""><i class="fas fa-angle-double-right"></i> Home</a></li>
              <li><a href=""><i class="fas fa-angle-double-right"></i> About</a></li>
              <li><a href=""><i class="fas fa-angle-double-right"></i> Services</a></li>
              <li><a href=""><i class="fas fa-angle-double-right"></i> Blog</a></li>
              <li><a href=""><i class="fas fa-angle-double-right"></i> Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xxl-4">
          <div class="single-footer">
            <h4>latest posts</h4>
            <ul>
                @foreach ($blogs as $blog)
                <li><a href=""><i class="fas fa-angle-double-right"></i>{{$blog->title}}</a></li>
                @endforeach
            </ul>
          </div>
        </div>
        <div class="col-xxl-3">
          <div class="single-footer">
            <h4>contact us</h4>
            <ul>
              <li><i class="fas fa-map-marker-alt"></i> 57/3 Street, Kalabagan, Dhaka</li>
              <li><i class="fas fa-mobile-alt"></i> +23 0034 5567341</li>
              <li><i class="fas fa-phone-alt"></i> +23 0034 5567341</li>
              <li><i class="far fa-envelope"></i> info@demo.com</li>
              <li><i class="fas fa-globe-europe"></i> www.demo.com</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row footer-bottom">
        <div class="col-xxl-6">
          <div class="footer-copy">
            <p>&copy; All Rights Reserved 2021</p>
          </div>
        </div>
        <div class="col-xxl-6 text-end">
          <div class="footer-social">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
