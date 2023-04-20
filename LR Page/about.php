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
		<a href="contact.php">Contact</a>
        <a href="about.php" class="active">About</a>
	</div>

    <div class="contents">
        
	    <p>Welcome to our web-based civil service exam reviewer, designed to help aspiring civil servants prepare for their exams and achieve their goals. Our platform is the result of our passion for creating accessible and effective study resources for all. Our team is made spent countless hours researching, analyzing, and organizing the most essential topics and concepts that you need to know to succeed in your exams.</p> <br>
		<p>We pride ourselves on creating a platform that is easy to use, interactive, and customizable to your specific needs. With our review materials, you can hone your skills, improve your knowledge, and feel confident in your abilities when you sit down to take your civil service exam.</p>

    </div>

	<script src="script.js"></script>
</body>
</html>