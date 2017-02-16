<!DOCTYPE HTML>

<html>
	<head>
		<title>Noisy_Parrot</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/png" href="images/favicon.png">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-database"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Noisy_Parrot</h1>
								<p>Website to connect to and explore Noisy_Parrot database.</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#search">Search</a></li>
								<li><a href="#insert">Send A Message</a></li>
								<li><a href="#update">Modify Account</a></li>
								<li><a href="#delete">Delete Account</a></li>
								<li><a href="#admin"><b>SQL Query</b></a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Search -->
							<article id="search">
								<h2 class="major">Search</h2>
							</article>

						<!-- Insert -->
							<article id="insert">
								<h2 class="major">Send A Message</h2>
                                <form method="post" action="message.php">
                                    <div class="field half first">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" value="" placeholder="optional" />
                                    </div>
                                    <div class="field half">
                                        <label for="number">Phone number</label>
                                        <input type="text" name="number" id="number" required value="" placeholder="required" />
                                    </div>
									<div class="field">
										<label for="show">Show</label>
										<div class="select-wrapper">
                                            <select name="show" id="show">
                                                <option value="default">-</option>
                                                <?php require_once "shows.php"; getShows() ?>
                                            </select>
										</div>
									</div>
                                    <div class="field">
                                        <label for="message">Message</label>
                                        <textarea name="message" required id="message" placeholder="Enter your message" rows="6"></textarea>
                                    </div>
                                    <ul class="actions">
                                        <li><input type="submit" name="submit" value="Send Message"/></li>
                                        <li><input type="reset" value="Reset" /></li>
                                    </ul>
                                </form>
							</article>

						<!-- Update -->
							<article id="update">
								<h2 class="major">Modify Account</h2>
							</article>

						<!-- Delete -->
							<article id="delete">
								<h2 class="major">Delete Account</h2>

							</article>

						<!-- SQL Query -->
							<article id="admin">
								<h2 class="major">SQL Query</h2>
								<pre><code>i = 0;

                                           while (!deck.isInOrder()) {
                                               print 'Iteration ' + i;
                                               deck.shuffle();
                                               i++;
                                           }

                                           print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">Noisy_Parrot 2017. All rights reserved. &copy;</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
