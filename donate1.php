<!-- //include auth_session.php file on all user panel pages -->
<!-- include("auth_session.php");
?> -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body style="overflow-y: hidden; " >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>





 
    <nav class="navbar  navbar-expand-lg ">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">Vi-Sahay</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link " href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="donate1.php">Donation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="message.php">Message</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li> -->
    </div>
  </div>
</nav>








<section class="intro">
  <div class="img6 " style="background-image: url('images/img16.jpg');">
    <div class="mask d-flex align-items-center h-100" >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card6 " style="border-radius: 1rem;">
              <div class="card-body p-4 text-white">

                <div class="my-md-1">
                <form method="post" action="collect.php">
                  <div class="text-center pb-2">
                    <i class="fas fa-user-astronaut fa-3x"></i>
                    <h1 class="fw-bold my-4 text-uppercase">DONATION</h1>
                  </div>


                  <div class="form-outline form-white mb-3" style="font-size: 22px;">
                    <label class="form-label" for="typename">Name</label>
                    <input type="name"  name="name" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline form-white mb-3" style="font-size: 22px;">
                    <label class="form-label" for="typeEmail">Email</label>
                    <input type="email" name="email" id="typeEmail" class="form-control form-control-lg" />
                  </div>


                  <div class="form-outline form-white mb-3" style="font-size: 22px;">
                    <label class="form-label" for="typenumber">Phone-No.</label>
                    <input type="number" name="pno" class="form-control form-control-lg" />
                  </div>


                  <div class="text-center py-2" >

                  <button class="btn btn-light btn-lg btn-rounded px-5" type="submit" value="Pay">Donate</button></a> 
                  </div>
                </form>
                 
 
            
                 
                  </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




</body>
</html>