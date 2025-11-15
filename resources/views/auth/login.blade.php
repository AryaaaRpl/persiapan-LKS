<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    @include("layouts.navLogin")
    <video class="vid-bg" src="/assets/video-background.mp4" autoplay muted loop></video>
    <div class="container form-login">
    <div class="row">
        <div class="col"> 
            <div class="login-title text-center mb-3">
        <h1 class="text-white">Login</h1>
    </div>
    <div class="justify-center login">
    <form class="form">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
    </div>
</div>

<footer class="text-center text-white footer mt-3">&copy; accounting website</footer>
</body>
</html>