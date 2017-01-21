    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">UIC CGCVP</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="">Status</a>
          </li>
        </ul>
      </div>
        <form class="form-inline my-2 my-lg-0" style="width: auto;">
<!-- Php part -->
        <?php
        if (@$_COOKIE['login'] == "admin"){
          echo "<a class='btn btn-outline-warning btn-block' href='/logout.php'>"."Login as: ". @$_COOKIE['login']."</a>";
        }
        ?>

        </form>
    </nav> 