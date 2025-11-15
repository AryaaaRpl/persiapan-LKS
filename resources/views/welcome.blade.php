<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounting</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- navbar -->
  @include("layouts.navbar")
<!-- home -->
<section id="home">
  <!-- background blob 1 -->
  <div class="blob-1">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
  <path fill="#FA4D56" d="M21.9,-38.5C28.7,-25.1,34.9,-19.2,43.2,-10.1C51.6,-1,62.1,11.3,59,18.7C55.9,26.1,39.2,28.6,27.1,30.4C15,32.2,7.5,33.4,-2.5,36.8C-12.5,40.2,-24.9,45.8,-37.5,44.1C-50.1,42.5,-62.8,33.5,-72,19.9C-81.2,6.3,-86.9,-11.9,-80.4,-24.3C-73.8,-36.7,-55,-43.2,-39.5,-53.8C-24.1,-64.4,-12.1,-79,-2.3,-75.9C7.5,-72.8,15,-51.9,21.9,-38.5Z" transform="translate(100 100)" />
</svg>
      </div>
<div class="container">
        <div class="row"> 
          <div class="d-flex justify-between">
          <div class="col home-layout"> 
    <h1 class="title">Accounting</h1>
    <div class="decoration d-flex items-center">
    <span class="badge rounded-pill text-bg-primary items-center">it's all matters</span> <img style="width:25px;" src="/assets/5.png" alt=""></div>
    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam beatae voluptas, explicabo soluta unde ab et accusamus quod provident laudantium molestiae nihil eaque quos sapiente facere iure consectetur, debitis temporibus.</p>
    <a href="#" class="btn btn-primary rounded-pill w-40 gap-3 justify-center d-flex items-center">Show More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1z"/>
  <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708z"/>
</svg>
</svg></a>
    </div>
    <div class="home-image">
      <img src="/assets/1.png" alt="">
    </div>
    </div>
    <!-- background blob -->
    <div class="blob-2">
      <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
  <path fill="#0F62FE" d="M53.9,-55.7C68.3,-39.6,77.2,-19.8,75.7,-1.5C74.2,16.8,62.3,33.6,47.9,46.8C33.6,60.1,16.8,69.8,1.5,68.2C-13.7,66.7,-27.4,53.9,-37.8,40.7C-48.2,27.4,-55.2,13.7,-59.4,-4.2C-63.6,-22.1,-64.9,-44.2,-54.5,-60.3C-44.2,-76.4,-22.1,-86.5,-1.1,-85.4C19.8,-84.2,39.6,-71.8,53.9,-55.7Z" transform="translate(100 100)" />
</svg>
</div>
</div>
    </div>
    <!-- card  -->
      <div class="card-wrapper">
  <div class="card custom-card" style="width: 25rem;">
    <img src="/assets/2.png" alt="" class="card-image-top img">
    <div class="card-body text-white">
      <h3 class="card-title">How to grow on A Business</h3>
      <span class="badges rounded-pill text-bg-success placeholder">Business Strategy</span>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, temporibus.</p>
      <a href="#" class="btn btn-warning text-white rounded-pill">Show more</a>
    </div>
  </div>

  <div class="card custom-card" style="width: 25rem;">
    <img src="/assets/2.png" alt="" class="card-image-top img">
    <div class="card-body  text-white">
      <h3 class="card-title">How to grow on A Business</h3>
      <span class="badges rounded-pill text-bg-success">Business Strategy</span>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, temporibus.</p>
      <a href="#" class="btn btn-warning text-white rounded-pill">Show more</a>
    </div>
  </div>

  <div class="card custom-card" style="width: 25rem;">
    <img src="/assets/2.png" alt="" class="card-image-top img">
    <div class="card-body  text-white">
      <h3 class="card-title">How to grow on A Business</h3>
      <span class="badges rounded-pill text-bg-success">Business Strategy</span>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, temporibus.</p>
      <a href="#" class="btn btn-warning text-white rounded-pill">Show more</a>
    </div>
  </div>
</div>

</section>

<section id="about" class="min-h-screen">
      
        <div class="container">
        <div class="row">
          <div class="col"> 
          <div class="d-flex justify-between p-20 mt-40">
        <div class="about-desc ">
          <h2>About Accounting</h2>
          <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis aspernatur delectus, rem laudantium iure sequi at accusantium explicabo eveniet omnis commodi cum labore esse non nulla suscipit iste ad ratione nesciunt ut dolores odio soluta consectetur? Sit reprehenderit doloribus eveniet asperiores veritatis perferendis neque, architecto rerum impedit. Minima, ex esse.</p>
          <button class="btn btn-primary rounded-pill gap-2 d-flex items-center">Show Details <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707"/>
</svg></button>
        </div>
        <div class="arrow-elements">
        <img src="/assets/3.png" alt="">
      </div>
        <div class="image-about">
        <img src="/assets/4.png" alt="">
        </div>
      </div>
      </div>
      </div>
    </div>
    <div class="arrow gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
</svg>
<span>Scroll Down</span>
</div>
</section>

<section id="details" class="min-h-screen">
      <div class="container">
      <div class="row">
        <div class="col">
          <div class="text-center">
            <div class="details-wrapper">
            <h1 class="title">Details</h1>
            <p class="why">Why Accounting Is Important?</p>
            <div class="card-wrapper-detail">
            <div class="detail-card">
              <div class="detail-logo">
                <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
  <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1z"/>
</svg>
</div>
              </div>
              <div class="detail-text">
                <div class="text">
                  <h1>Stonks</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus cum architecto assumenda deleniti perspiciatis ex recusandae distinctio quis, ratione ea.</p>
              </div>
              </div>
            </div>
            <div class="card-wrapper-detail">
            <div class="detail-card">
              <div class="detail-logo">
                <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-align-middle" viewBox="0 0 16 16">
  <path d="M6 13a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zM1 8a.5.5 0 0 0 .5.5H6v-1H1.5A.5.5 0 0 0 1 8m14 0a.5.5 0 0 1-.5.5H10v-1h4.5a.5.5 0 0 1 .5.5"/>
</svg>
</div>
              </div>
              <div class="detail-text">
                <div class="text">
                  <h1>Stable</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus cum architecto assumenda deleniti perspiciatis ex recusandae distinctio quis, ratione ea.</p>
              </div>
              </div>
            </div>
            <div class="card-wrapper-detail">
            <div class="detail-card">
              <div class="detail-logo">
                <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
</svg>
</div>
              </div>
              <div class="detail-text">
                <div class="text">
                  <h1>Profit</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus cum architecto assumenda deleniti perspiciatis ex recusandae distinctio quis, ratione ea.</p>
              </div>
              </div>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      </div>
</section>

<section id="contact" class="min-h-screen contact">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="intro">
             <h1>Contact</h1>
             <p>Contact Me If You Wanna Learn!!</p>
          </div>
          <div class="d-flex form-contact justify-between">
          <div class="form">
            <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Your Name</label>
  <input type="text" class="form-control max-w-100" id="exampleFormControlInput1" placeholder="Your Name">
</div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">No. Telp</label>
  <input type="number" class="form-control max-w-100" id="exampleFormControlInput1" placeholder="ex: +6212345678">
</div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control max-w-100" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
  <textarea class="form-control max-w-150" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
 <button class="btn btn-primary">Submit</button>
</div>
<img src="/assets/7.png" alt="">
          </div>
         
        </div>
      </div>
    </div>
</section>
<script src="/js/script.js"></script>
</body>
</html>