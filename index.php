<?php
	session_start();
	include 'functions.php';
?>


<html>
<head>
	<title>Bridges</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="functions/functions.js"></script>
</head>

<div class = "container main_body">
	<body>
		<header>
			<div class = "col-md-2">
				<div><a href="index.php"> <img id = "logo" src="images/logo.png"></a> </div>

			</div>
			<div class = "col-md-5"> </div>
			<div class = "col-md-5">
				<ul id = "nav_bar">
					<li><a href="index.php"> Home </a></li>
					<li><a href="getstarted.php"> Get Started </a></li>
					<li><a href="others.php"> Others </a></li>

					<?php
					$log_in_page = "login.php";
					$log_in_page_name = "Log In";
						if (isset($_SESSION["username"])){
							$log_in_page = "logout.php";
							$log_in_page_name = "Log Out";
						}
					?>
					<li><a href = <?php echo $log_in_page ?> > <?php echo $log_in_page_name ?> </a>



					<li><a href="about.php"> About </a></li>
				</ul>
			</div>
		</header>
	<article>
		<div id = "part1" >
			<div class = "col-sm-2"> </div>
			<div class = "col-sm-8">
				<div id = "banner" > 
					<img class="mySlides" src="images/other/ban1.jpg">
					<img class="mySlides" src="images/other/ban2.jpg">
					<img class="mySlides" src="images/other/ban3.jpg">
					<img class="mySlides" src="images/other/ban4.jpg">
				</div> 
			</div>

			<div class = "col-sm-2"> </div>
		</div>
		<div id = "part2">
			<div class = "col-md-2"></div>
			<div class = "col-md-8 theArticle">
				<div class = "article_title"><h1 style="font-size:2vw;">Τι είναι το crowd funding?</h1></div>
				<div class = "article_content">
					<p>Οι αναφορές και συζητήσεις γύρω από το crowd funding πολλαπλασιάζονται με γοργούς ρυθμούς τα τελευταία δυο – τρία χρόνια, ιδιαίτερα στην Αμερική κυρίως σε σχέση με τις δυνατότητες που μπορεί να προσφέρει η μέθοδος αυτή σε start uppers να χρηματοδοτήσουν μια νέα επιχειρηματική ιδέα και όχι μόνο. Στις επόμενες γραμμές θα εξηγήσουμε τι είναι το crowd funding, σε ποιους απευθύνεται και πώς μπορεί να λειτουργήσει αποτελεσματικά, στην πράξη.</p>
					
					<p>Τι είναι το Crowd funding ;
					Crowdfunding πολύ απλά είναι η χρηματοδότηση από το πλήθος. Συνήθως αναφερόμαστε στη χρηματοδότηση κάποιου έργου /project ή κάποιας ιδέας από πολλούς ανθρώπους, οι οποίοι προσφέρουν μικρά ποσά ο καθένας, αλλά από τη συμβολή όλων καλύπτεται ο οικονομικός στόχος για κάθε έργο.</p>

					<p>
					Συνήθως , το crowdfunding αφορά περιπτώσεις μικρο-χρηματοδότησης από 5.000-50.000 ευρώ και δεν περιορίζεται σε επιχειρηματικές ιδέες, αλλά και στη χρηματοδότηση Life Projects για σπορ, τέχνες, ιατρικές ανάγκες, εκπαίδευση, ταξίδια, εθελοντισμό κλπ. Επίσης, το crowdfunding μπορεί να αποτελέσει πολύτιμο εργαλείο για τη χρηματοδότηση Μη Κερδοσκοπικών Οργανώσεων (ΜΚΟ).
					</p>
					<p>
					Σήμερα, υπάρχουν διάφορες πλατφόρμες στο internet που προσφέρουν τη δυνατότητα υλοποίησης κάποιας μορφής crowdfunding.
					</p>
					<p>
					Υπάρχει η μορφή του crowdfunding, που προσφέρει μετοχές σε μικροεπενδυτές, σε Venture Capitals, χρηματοδότηση με τη μορφή δανεισμού και όλα τα παραπάνω σε επίδοξους start uppers. Για τις προηγούμενες μορφές crowdfunding αναπτύσσεται αυτή την περίοδο ένα ιδιαίτερο κανονιστικό πλαίσιο, με στόχο να προστατεύει αμφότερους μικροεπενδυτές, χρηματοδότες αλλά και δημιουργούς project.
					</p>
					<p>
					Η πιο απλή μορφή του crowdfunding παραμένει, ωστόσο, η απευθείας αξιοποίηση μιας ηλεκτρονικής πλατφόρμας και των εργαλείων που προσφέρει στο χρήστη για την παρουσίαση της ιδέας του και τη δικτύωση μέσω των social media.
					</p>
					<div id = "article_image"></div>
				</div>
			</div>
			<div class = "col-md-2"></div>
		</div>

	</article>

	<footer>
			<div class = "footer">
				<p id = "footer_paragraph"></p>
			</div>
	</footer>

	</body>
</div>

<?php


	if (isset($_SESSION["username"])){
		echo "Name : " . $_SESSION["username"];
	}

?>

</html>