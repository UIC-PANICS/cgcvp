<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>UIC-PANICS CGCVP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/indexstyle.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="array.js"></script>
    <?php
    $url = "admin";
    if (@$_COOKIE['login'] != $url ){
        $url = "/";
        echo "<script language='javascript' type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    } 

    ?>
    <script>
        var arr=new Array();
                arr=<?php
                      $path1="array.txt";
                      $content=file_get_contents($path1);
                      echo $content;
                    ?>;
        var total = arr.length/2;
        var arr1=arr.slice(total);
    </script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<!-- navbar -->
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">UIC CGCVP</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="">Status<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
        <form class="form-inline my-2 my-lg-0" style="width: auto;">
        <a class="btn btn-outline-warning btn-block" href="/logout.php">Login as: <?php echo $_COOKIE["login"];?></a>
           
        </form>
    </nav>
<!-- navbar end -->
    <div class="container">
    <img src="/img/logo.png" class="img-fluid" alt="Responsive image">
    <div class="row">
    <div class="col">
        <h2 class="form-signin-heading">Add Contestants</h2>
            <form action="addarray.php" method="get">
                    <div class="input-group">
                        <input class="form-control" placeholder="Name" type="text" id="name" name="name">
                        </div>
                    <div class="input-group">
                        <input class="form-control" placeholder="Student ID" type="text" id="number" name="stunum">
                        </div>
                        <br>
                        <input class="btn btn-primary btn-block" type="submit" value="Click">
            </form>
        </div>
            <br>
            <div class="col">
        <h2 class="form-signin-heading">Search by ID</h2>
            <form action="">
            <div class="input-group">
                <input class="form-control" type="text" id="searcharrnum" placeholder="Array Num">
                </div>
                <div class="input-group">
                <input class="form-control" type="text" id="searchresult" placeholder="Name" readonly="true">
                </div>
                <br/>
                <input class="btn btn-info btn-block" type="button" onclick="searcharr()" value="Click">
            </form>
            </div>
</div>
<br>
<br>
        <div class="row">
    

            <div class="col">
        <h2 class="form-signin-heading">Delete Contestants</h2>
            <form action="delarray.php" method="get">
            <div class="input-group">
                <input class="form-control" type="text" id="delnum" placeholder="Student ID" name="delnum">
                </div>
                <br>
                <input class="btn btn-block btn-danger" type="submit" value="Click">
            </form>
</div>

        <div class="col">
        <h2 class="form-signin-heading">Match</h2>
            <form action="">
            <div class="input-group">
                <input class="form-control" type="text" id="result1" placeholder="Player 1" readonly="true">
                <input class="form-control" type="text" id="result2" placeholder="Player 2" readonly="true">
            </div>
            <br>
                <input class="btn btn-success btn-block" type="button" value="click" onclick="random()">
            </form>
        </div>
        </div>
        <br>
        <br>
        <a class="btn btn-warning btn-block" href="info.php">Contestants Information</a>
    </div>
    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">&copy; UIC-PANICS 2017</span>
      </div>
    </footer>

</body>
</html>