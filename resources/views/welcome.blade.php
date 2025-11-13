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
    <div class="navbar gap-2">
<ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
  <li class="nav-item" role="presentation">
    <a href="#" class="nav-link link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Home</a>
  </li>
  <li class="nav-item" role="presentation">
    <a href="#profile" class="nav-link link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">About</a>
  </li>
  <li class="nav-item" role="presentation">
    <a href="#detail" class="nav-link rounded-5" id="detail-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Details</a>
  </li>
   <li class="nav-item" role="presentation">
    <a href="#blog" class="nav-link rounded-5" id="blog-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Blog</a>
  </li>
  <li class="nav-item" role="presentation">
    <a href="#contact" class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Contact</a>
  </li>
</ul>
<ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
  <li class="nav-item" role="presentation">
    <a class="nav-link active rounded-5 d-flex gap-2 items-center" id="login-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">login <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg></span></a>
  </li>
</ul>
</div>
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
          <div class="col"> 
           
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
  <div class="card" style="width: 25rem;">
    <img src="/assets/2.png" alt="" class="card-image-top img">
    <div class="card-body bg-primary text-white">
      <h3 class="card-title">How to grow on A Business</h3>
      <span class="badges rounded-pill text-bg-success">Business Strategy</span>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, temporibus.</p>
      <a href="#" class="btn btn-warning text-white rounded-pill">Show more</a>
    </div>
  </div>

  <div class="card" style="width: 25rem;">
    <img src="/assets/2.png" alt="" class="card-image-top img">
    <div class="card-body bg-primary text-white">
      <h3 class="card-title">How to grow on A Business</h3>
      <span class="badges rounded-pill text-bg-success">Business Strategy</span>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, temporibus.</p>
      <a href="#" class="btn btn-warning text-white rounded-pill">Show more</a>
    </div>
  </div>

  <div class="card" style="width: 25rem;">
    <img src="/assets/2.png" alt="" class="card-image-top img">
    <div class="card-body bg-primary text-white">
      <h3 class="card-title">How to grow on A Business</h3>
      <span class="badges rounded-pill text-bg-success">Business Strategy</span>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, temporibus.</p>
      <a href="#" class="btn btn-warning text-white rounded-pill">Show more</a>
    </div>
  </div>
</div>

</section>

<section id="profile" class="min-h-screen">
      
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
</section>
<script src="/js/script.js"></script>
</body>
</html>