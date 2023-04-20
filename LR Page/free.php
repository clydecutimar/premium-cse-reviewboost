<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<header>
		<div id="header-title">CSE Prof and Sub-Prof ReviewBoost</div>
	</header>

	<div class="homepage">
        <h1><?php echo $_SESSION['username']; ?></h1>
        <button onclick="logout()">Logout</button>
    </div>
    
    <script type="text/javascript">
        function logout() {
            window.location.href = 'logout.php';
        }
    </script>
	
	<div class="sidebar">
		<img class="logo" src="image-14.png" alt="Image 14">
		<a href="free.php" class="active">Free Plan</a>
		<a href="premium.php">Premium Plan</a>
		<a href="faqs.php">FAQs</a>
		<a href="contact.php"></i>Contact</a>
		<a href="about.php"></i>About</a>
	</div>

	<div class="content"> 

		<div id="topics">
			<img class="vocabulary" src="vocabulary.png" alt="Vocabulary">
			<img class="grammar" src="grammar.png" alt="Grammar">
			<img class="paragraph" src="paragraph.png" alt="Paragraph">
			<img class="numerical" src="numerical.png" alt="Numerical">
			<img class="general" src="general.png" alt="General">
			<img class="logic" src="logic.png" alt="Logic">
			<img class="analogy" src="analogy.png" alt="Analogy">
			<img class="spelling" src="spelling.png" alt="Spelling">
			<img class="clerical" src="clerical.png" alt="Clerical">
		</div>
			
	</div>	  

	<script src="script.js"></script>
</body>
</html>