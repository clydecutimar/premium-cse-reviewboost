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
    <?php session_start(); ?>

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
		<a href="free.php">Free Plan</a>
		<a href="premium.php">Premium Plan</a>
        <a href="faqs.php">FAQs</a>
		<a href="contact.php" class="active">Contact</a>
        <a href="about.php">About</a>
	</div>

	<div class="contents">

	    <p>If you have any questions or concerns about our web-based civil service exam reviewer, please don't hesitate to contact us. We're here to help and want to ensure that you have the best experience possible. Here's how you can reach us:</p> <br>
		<img class="contacts-img" src="contacts.png" alt="Contacts"> <br>
		<p>We aim to respond to all inquiries and we appreciate your feedback and suggestions as we continue to improve our platform. Thank you for choosing our web-based civil service exam reviewer, and we wish you the best of luck in your exams!</p>
			

    </div>

	<script src="script.js"></script>
</body>
</html>