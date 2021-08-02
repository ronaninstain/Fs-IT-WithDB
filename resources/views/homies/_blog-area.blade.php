<section class="blog-area pt-100 pb-100">
    <div class="container">
      <div class="row section-title align-items-center">
        <div class="col-xxl-6 text-end">
          <span>What cliets say?</span>
          <h4>Our Blogs</h4>
        </div>
        <div class="col-xxl-6">
          <p>A duet of students who are facing a lot of problems handling git and github!!</p>
        </div>
      </div>
      <div class="row">
          @foreach ($blogs as $blog)
          <div class="col-xxl-4">
            <div class="single-blog">
              <img src="/images/blogs/blog1.jpg" alt="">
              <div class="blog-content">
                <div class="blog-title">
                  <h4><a href="">{{ $blog->title }}</a></h4>
                  <div class="blog-meta">
                    <a href="">{{ $blog->updated_at }}</a>
                    <a href="">/ Admin</a>
                  </div>
                  <p>{{ $blog->body }}</p>
                  <a href="" class="box-btn"> read more  <i class="fas fa-angle-double-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
      </div>
    </div>
  </section>
