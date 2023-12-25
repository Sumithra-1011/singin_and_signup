<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cyber security</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- navbar -->
    <div>
      <div class="container-fluid">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg  rounded-3 navtop" data-bs-theme="dark">
          <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">Logo</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex flex-column flex-lg-row navhead w-100">
                <div
                  class="d-flex flex-lg-grow-1 justify-content-center"
                >
                  <ul class="nav navbar-nav ">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="welcome.php"
                        >Home</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#">services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#">contact</a>
                    </li>
                  </ul>
                </div>

                <div
                  class="navend d-flex flex-lg-row flex-column grid gap-3  justify-content-center align-items-center  mx-auto"
                >
                  <a class="btn1 border border-white border-2 text-white" href="signin.php">sign in</a>
                  <a class="btn1 border border-white border-2 text-white" href="signup.php">sign up</a>
                  <a class="btn1 border border-white border-2 text-white" href="logout.php">Logout</a>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
</html>
