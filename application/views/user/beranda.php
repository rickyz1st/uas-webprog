<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <!--  my css -->
    <link rel="stylesheet" href="style.css" />

    <title>My Portofolio Ricki</title>
  </head>
  <body id="home">
    
    <!-- jumbotron -->
    <section class="jumbotron text-center">
      <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Ricki Saputra" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4"><?= $user['name']; ?></h1>
      <p class="lead">College Student</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,64L40,69.3C80,75,160,85,240,122.7C320,160,400,224,480,224C560,224,640,160,720,128C800,96,880,96,960,133.3C1040,171,1120,245,1200,256C1280,267,1360,213,1400,186.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir jumbotron -->

    <!-- about -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius minima repudiandae rerum ea voluptas sapiente quas, culpa vel eligendi esse!</p>
          </div>
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ipsa excepturi quam optio impedit deleniti quasi debitis iste nesciunt ipsam cupiditate corporis, facilis mollitia vel?</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="rgb(228, 189, 145)"
          fill-opacity="1"
          d="M0,96L40,80C80,64,160,32,240,42.7C320,53,400,107,480,117.3C560,128,640,96,720,80C800,64,880,64,960,80C1040,96,1120,128,1200,117.3C1280,107,1360,53,1400,26.7L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir about -->

    <!-- project -->
    <section id="project">
      <div class="container">
        <div class="row text-center">
          <div class="col mb-3">
            <h2>My Project</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/controllers web.png" class="card-img-top" alt="project 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/controllers web.png" class="card-img-top" alt="project 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/controllers web.png" class="card-img-top" alt="project 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/controllers web.png" class="card-img-top" alt="project 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/controllers web.png" class="card-img-top" alt="project 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir project -->

    <!-- contact me -->
    <section id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="kirim" class="btn btn-warning">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffc107"
          fill-opacity="1"
          d="M0,160L60,149.3C120,139,240,117,360,144C480,171,600,245,720,240C840,235,960,149,1080,112C1200,75,1320,85,1380,90.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!--akhir contact me  -->
    <!--footer-->
    <footer class="bg-warning text-center fs-3 pb-5">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i><?= $user['name']; ?></p>
    </footer>
    <!-- akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>