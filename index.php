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
							<span class="icon fa-music"></span>
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
								<p><strong>You can search for <a href="#songs">Songs</a>, <a href="#producers">Radio Producers</a> or <a href="#shows">Shows</a>!</p></strong>
							</article>


                            <article id="songs">
							    <h2 class="major">Songs</h2>
						    </article>
						    <article id="producers">
                                <h2 class="major">Radio Producers</h2>
                            </article>
                            <article id="shows">
                                <h2 class="major">Radio Shows</h2>
                            </article>



						<!-- Insert -->
							<article id="insert">
								<h2 class="major">Send A Message</h2>
                                <form method="post" action="message.php">
                                    <div class="field half first">
                                        <label for="number">Phone number</label>
                                        <input type="text" name="number" id="number" required value="" placeholder="required" />
                                    </div>
                                    <div class="field half">
                                        <label for="name">Name</label>
                                            <input type="text" name="name" id="name" value="" placeholder="Anonymous" />
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
								<form method="post" action="modify.php">
								    <div class="field half first">
                                        <label for="numberold">Old Number</label>
                                            <input type="text" name="numberold" id="numberold" value="" placeholder="required" />
                                    </div>
                                    <div class="field half">
                                        <label for="nameold">Old Name</label>
                                            <input type="text" name="nameold" id="nameold" value="" placeholder="Anonymous" />
                                    </div>
                                    <div class="field half first">
                                        <label for="numbernew">New Number</label>
                                            <input type="text" name="numbernew" id="numbernew" value="" placeholder="required" />
                                    </div>
                                    <div class="field half">
                                        <label for="namenew">New Name</label>
                                            <input type="text" name="namenew" id="namenew" value="" placeholder="Anonymous" />
                                    </div>
                                    <input type="checkbox" id="sure" name="sure" unchecked>
                                    <label for="sure">Are you sure?</label>
                                    <ul class="actions">
                                        <li><input type="submit" id="isSure" value="Submit" class="button disabled" /></li>
                                    	<li><input type="reset" value="Reset" /></li>
                                  	</ul>
                                  	<script type="text/javascript">
                                  	    var checker = document.getElementById('sure');
                                        var sendbtn = document.getElementById('isSure');
                                        // when unchecked or checked, run the function
                                        checker.onchange = function(){
                                            if(this.checked){
                                                sendbtn.className = "button special";
                                            } else {
                                                sendbtn.className = "button disabled";
                                            }
                                        }
                                    </script>
                                </form>
							</article>

						<!-- Delete -->
							<article id="delete">
								<h2 class="major">Delete Account</h2>
								<form method="post" action="delete.php">
								    <div class="field half first">
                                        <label for="numberdelete">Phone Number</label>
                                            <input type="text" name="numberdelete" id="numberdelete" value="" placeholder="required" />
                                    </div>
                                    <div class="field half">
                                        <label for="namedelete">Old Name</label>
                                            <input type="text" name="namedelete" id="namedelete" value="" placeholder="Anonymous" />
                                    </div>
                                    <input type="checkbox" id="sure2" name="sure2" unchecked>
                                    <label for="sure2">Are you sure you want to delete your account and messages?</label>
                                    <ul class="actions">
                                        <li><input type="submit" id="isSure2" value="Submit" class="button disabled" /></li>
                                    	<li><input type="reset" value="Reset" /></li>
                                  	</ul>
                                  	<script type="text/javascript">
                                  	    var checker = document.getElementById('sure2');
                                        var sendbtn = document.getElementById('isSure2');
                                        // when unchecked or checked, run the function
                                        checker.onchange = function(){
                                            if(this.checked){
                                                sendbtn.className = "button special";
                                            } else {
                                                sendbtn.className = "button disabled";
                                            }
                                        }
                                    </script>
                                </form>
							</article>

						<!-- SQL Query -->
							<article id="admin">
								<form method="post" action="admin.php">
								<div class="field half first">
								    <h2 class="major">SQL Query</h2>
								</div>
								<div class="field half">
                                    <label for="admincode">Password</label>
                                	<input type="password" name="admincode" id="admincode" required value="" placeholder="Admin Password" />
                                </div>
								    <div class="field">
									    <label for="sqlquery">Query</label>
									    <textarea name="sqlquery" id="sqlquery" required placeholder="Enter your code" rows="6"></textarea>
									</div>
								    <ul class="actions">
                                        <li><input type="submit" id="exec" value="Execute" class="special" /></li>
                                	    <li><input type="reset" value="Reset" /></li>
                                    </ul>
                                </form>
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
