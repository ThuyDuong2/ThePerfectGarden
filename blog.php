<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Garden - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/perfect-garden.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div class="brand">The Perfect Garden</div>
  <div class="address-bar">Sacramento, CA 95824 | (916)812-5912</div>



    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">

			          	<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>

                    <hr>
                    <h2 class="intro-text text-center">The Perfect Garden
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>Gaden of Vegetable
                        <br>
                        <small>November 20, 2022</small>
                    </h2>
                    <p>The small vegetable garden in your house would give refeshing and relaxing environment.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>Animals
                        <br>
                        <small>November 20, 2022</small>
                    </h2>
                    <p>Take step to make the small area for chicken, so you can have organic chicken eggs every morning.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>Planting Fruit
                        <br>
                        <small>Noverber 29, 2022</small>
                    </h2>
                    <p>Planting fruit trees will take time, but it will give you a lot of fuit to enjoy</p>
                      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

	<!-- Modal 1 -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Gaden of Vegetable</h4>
		  </div>
		  <div class="modal-body">
			<p>Why garden, you ask? How about enjoying the best
        vegetables and fruit you’ve ever eaten?
        If you’ve never tasted garden-fresh food,
        you will be amazed by the sweet, juicy flavors
        and vibrant textures. There’s absolutely nothing
        quite like fresh veggies, especially if you grow
        them yourself—which you can!
        </p>
        <br>
        <p>
       It may seem daunting at first,
       but gardening is a very rewarding hobby.
       On this page, we’ll highlight the basics of vegetable
       gardening and planning: how to pick the right site for
        your garden, how to create the right-size garden,
        and how to select which vegetables to grow. </p>
        <h6>Size of Garden</h6>
        <p>If planting in the ground, a 10’ x 10’ garden (100 square feet) is a managable size. Pick 3 to 5 of your favorite vegetables and buy 3 to 5 plants of each one.
If planting in a raised bed, a 4’ x 4’ or 4’ x 8’ is a good beginner size. See our Raised Garden Bed Guide which covers the benefits of raised beds, how to build a raised bed, and what type of soil to fill a raised bed with.
If you want to go bigger, a 12’ x 24’ garden in the ground is probably the biggest a first-timer should go. For example, a garden that feeds a family of four could include: 3 hills of yellow squash; 1 mound of zucchini; 10 assorted peppers; 6 tomato plants; 12 okra plants; a 12-foot row of bush beans; 2 cucumbers on a cage; 2 eggplant; 6 basil; 1 rosemary, and a few low-growing herbs such as oregano, thyme, and marjoram.
Whatever the size of your garden: Every four feet or so, make sure that you have paths that allow you to access your plants to weed and harvest. Just make sure that you can reach the center of the row or bed easily without stepping on the soil.</p>

      </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>

	<!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Animals</h4>
		  </div>
		  <div class="modal-body">
			<p>Sample Text.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>

	<!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Planting Fruit</h4>
		  </div>
		  <div class="modal-body">
			<p>Sample Text.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Garden 2022</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php

} else {
    header("location:login.php ");
}
?>
