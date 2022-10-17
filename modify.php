<?php
	require_once('csv_util.php');
	$authorarray = csvFileToArray('authors.csv');
	$quotearray = csvFileToArray('quotes.csv');
if ($_GET==NULL){
	$quote = random_int(1, count($quotearray));

}
else{$quote = $_GET['quote'];}

#the page shows a specific quote (selected by the user) written using a bigger font, with its author
#a "delete" button enables you to delete the quote
#a "modify" button enables you to go to the modify page described below
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?='Great Quotes - ASE 230 Project'?></title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top"></a>

                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Quotes</a></li>
                        <li class="nav-item"><a class="nav-link" href="create.php">Create</a></li>
                        <li class="nav-item"><a class="nav-link" href="modify.php">Modify</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                    	<h3 style="background: black;color: snow;">Do you want to modify this quote?</h3>
                        <h2 class="mx-auto my-1 text-uppercase" style="font-weight: bolder;font-size: 40px;color: lightcyan;"><?= $quotearray[$quote][0]?></h2>
                        <br></br>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5"><?= $authorarray[$quotearray[$quote][1]][0].' '.$authorarray[$quotearray[$quote][1]][1] ?></h2>
                        <a class="btn btn-primary" href="delete.php?quote=<?=$quote?>">Yes</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Andrew Keller</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>



#the page shows a form with the information about the quote (text, author)
#as the form gets submitted, the quote is saved into quotes.csv (overwritten)
#a message confirms that the quote has been modified and shows the link to the detail page