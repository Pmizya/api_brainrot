<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Brainrot Gallery</title>
  <link rel="icon" href="./assets/img/5.webp">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/mainStyle.css">
</head>

<body>
  <video id="video-bg" autoplay muted loop playsinline>
    <source src="./assets/img/home.mp4" type="video/mp4">
    Il tuo browser non supporta HTML5 video.
  </video>

  <div class="container text-center">
    <h1 id="title" class="mb-3"></h1>

    <div class="d-flex justify-content-center mb-4">
      <input type="text" id="search-input" class="form-control form-control-lg w-75" placeholder="Il nome del Brainrot...">      
    </div>

    <h2 id="errorMsg" class="text-danger mb-5"></h2>

    <div id="card-row" class="row g-4 justify-content-center p-5"></div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
  <script src="js/mainScript.js"></script>
  <script src="js/videoPlayer.js"></script>
</body>

</html>