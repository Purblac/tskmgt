<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .navbar-brand {
        font-family: 'Brush Script MT', cursive;
        font-size: 100px;
    }
    body {
      position: relative;
      min-height: 100vh;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .content {
      padding-bottom: 100px;
    }

    footer {
      position:absolute;
      bottom: 0;
      width: 100%;
      background-color: #929fba;
      color: rgb(21, 21, 21);
      text-align: center;
      /* padding: 10px 0; Adjust the padding as needed */
      font-size: 12px; /* Adjust the font size as needed */
    }
    .image-container {
            text-align: center;
            margin-top: 5%; /* Adjust the margin as needed */
        }

        .image-container img {
            max-width: 50%; /* Adjust the image size as needed */
            height: auto;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskOrg</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="
background-color: #F7E8BE;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">TaskOrg</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="{{ route('login') }}">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center ">
        <div class="row">
          <div class="col-md-6 pt-5">
            <h1 class="mb-4 pt-5" style="font-family: 'Brush Script MT', cursive; white-space: nowrap;"> Welcome to <br>Task Organizing System</h1>

        </div>
          <div class="col-md-6">
            <div class="d-flex flex-column justify-content-center ">
                <div class="image-container">
                    <img src="https://cdn-icons-png.flaticon.com/512/762/762096.png" alt="checklist" class="mx-auto">
                </div>                
              <p class="p-5">Elevate your productivity with Task Organizing System. Seamlessly record and manage your tasks.</p>
            </div>
          </div>
        </div>
    </div>

      <footer class="bg-light text-center text-lg-start">
        
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
          Wisely Diwan |  Email : wiselydiwanv2@gmail.com
        </div>
        
      </footer>

   @include('cdn')
</body>
</html>
