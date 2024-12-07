<style>
  * {
    font-family: "Lato", sans-serif;
    /* min-height: 10vh; */
    font-size: 13px;
  }

  img {
    max-width: 23vh;
  }

  nav {
    background-color: #FCF5ED;
    position: fixed;
  }

  .container {
    height: 9vh;
  }

  #donateBtn {
    border-radius: 50px;
    background-color: #EEC96C;
    border-color: none;
    color: rgb(24, 24, 24);
    font-weight: 600;
    font-size: 13px;
    height: 5vh;
    width: 14vh;
  }
  #signInBtn {
    border-radius: 50px;
    border-color: rgb(24, 24, 24);
    /* background-color: #EEC96C; */
    border-color: none;
    color: rgb(24, 24, 24);
    font-weight: 600;
    font-size: 13px;
    height: 5vh;
    width: 14vh;
    margin-left: 4px;
  }

  #donateBtn:hover {
    background-color: #c9aa5c;
  }
</style>

<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="img/Joyful Crafts.svg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel" style="background-color: #FCF5ED">
      <div class="offcanvas-header">
        <a class="navbar-brand" href="#"><img src="img/Joyful Crafts.svg" alt=""></a>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-flex flex-column p-4 flex-lg-row p-lg-0">
        <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3 gap-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">GALLERY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">STORE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FAQ</a>
          </li>
        </ul>
        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
          <button type="button" class="btn btn-sm" id="donateBtn">DONATE</button>
          <button type="button" class="btn btn-sm" id="signInBtn">SIGN IN</button>
        </div>
      </div>
    </div>
  </div>
</nav>