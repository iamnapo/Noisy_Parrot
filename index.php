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
								<li><a href="#participate">Register To Contest</a></li>
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
								<p><strong>You can search for <a href="#songs">Songs</a>, <a href="#producers">Radio Producers</a>, <a href="#shows">Shows</a> or open <a href="#contests">Contests</a>!</p></strong>
								<p><strong>Or check upcoming <a href="#events">Events</a>!</p></strong>
								<p><strong>You can also <a href="#producershow">check</a> who presents a Radio Show and vise versa!</p></strong>
							</article>


                            <article id="songs">
							    <h2 class="major">Songs</h2>
							    <form method="get">
                                    <div class="field">
                                        <label for="songinput">Search Input</label>
                                        <input type="text" name="songinput" id="songinput" required value="" placeholder="Name or Artist or Album etc." />
                                    </div>
                                    <ul class="actions">
                                        <li><input type="submit" id="dosongsearch" name="dosongsearch" value="Search"/></li>
                                        <li><input type="reset" value="Reset" /></li>
                                    </ul>
                                </form>
                                <div class="table-wrapper">
    							    <table>
    								    <thead>
    									    <tr>
    										    <th>Title</th>
    											<th>Album</th>
    											<th>Artist</th>
    											<th>Release Year</th>
    											<th>Genre</th>
    										</tr>
    									</thead>
    									<tbody>
    									    <?php
                                            if(isset($_GET['dosongsearch'])){
                                                $link = mysql_connect("webpagesdb.it.auth.gr:3306","Administrator","Administrator");
                                                if (!$link) {
                                                    die("Can not connect: " . mysql_error());
                                                }
                                                mysql_query("SET NAMES 'utf8'");
                                                mysql_query("SET CHARACTER SET 'utf8'");
                                                mysql_query("set character_set_client=utf8");
                                                mysql_query("set character_set_connection=utf8");
                                                mysql_query("set collation_connection=utf8");
                                                mysql_query("set character_set_results=utf8");
                                                mysql_query("set time_zone='+02:00'");

                                                $select = mysql_select_db("Noisy_Parrot",$link);
                                                if (!select) {
                                                    echo "Error: " . mysql_error();
                                                }
                                                $songdata = $_GET['songinput'];
                                                $songdata = mysql_real_escape_string($songdata);
                                                utf8_encode($songdata);
                                                mysql_select_db("Noisy_Parrot",$link);
                                                $query = "SELECT *  FROM Song WHERE title = '" . $songdata . "' OR genre = '" . $songdata . "' OR album = '" . $songdata . "' OR release_year = '" . $songdata . "' OR artist = '" . $songdata . "'";
                                                $result = mysql_query($query);
                                                while($row = mysql_fetch_array($result)){
                                                    $title = $row['title'];
                                                    $genre = $row['genre'];
                                                    $album = $row['album'];
                                                    $release_year = $row['release_year'];
                                                    $artist = $row['artist'];
                                                    echo "<tr>";
                                                    echo "<td>" . $title . "</td>";
                                                    echo "<td>" . $album . "</td>";
                                                    echo "<td>" . $artist . "</td>";
                                                    echo "<td>" . $release_year . "</td>";
                                                    echo "<td>" . $genre . "</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            ?>
    									</tbody>
    									<tfoot>
    									</tfoot>
    								</table>
    							</div>
						    </article>
						    <article id="producers">
                                <h2 class="major">Radio Producers</h2>
                                <form method="get">
                                    <div class="field">
                                        <label for="producerinput">Search Input</label>
                                        <input type="text" name="producerinput" id="producerinput" required value="" placeholder="Name or NickName." />
                                    </div>
                                    <ul class="actions">
                                        <li><input type="submit" id="doproducersearch" name="doproducersearch" value="Search"/></li>
                                        <li><input type="reset" value="Reset" /></li>
                                    </ul>
                                </form>
                                <div class="table-wrapper">
                                	    <table>
                                		    <thead>
                                			    <tr>
                                				    <th>Name</th>
                                					<th>NickName</th>
                                					<th>Phone Number</th>
                                					<th>Email Address</th>
                                				</tr>
                                			</thead>
                                			<tbody>
                                			    <?php
                                            if(isset($_GET['doproducersearch'])){
                                                $link = mysql_connect("webpagesdb.it.auth.gr:3306","Administrator","Administrator");
                                                if (!$link) {
                                                    die("Can not connect: " . mysql_error());
                                                }
                                                mysql_query("SET NAMES 'utf8'");
                                                mysql_query("SET CHARACTER SET 'utf8'");
                                                mysql_query("set character_set_client=utf8");
                                                mysql_query("set character_set_connection=utf8");
                                                mysql_query("set collation_connection=utf8");
                                                mysql_query("set character_set_results=utf8");
                                                mysql_query("set time_zone='+02:00'");

                                                $select = mysql_select_db("Noisy_Parrot",$link);
                                                if (!select) {
                                                    echo "Error: " . mysql_error();
                                                }
                                                $producerdata = $_GET['producerinput'];
                                                $producerdata = mysql_real_escape_string($producerdata);
                                                utf8_encode($producerdata);
                                                mysql_select_db("Noisy_Parrot",$link);
                                                $query = "SELECT *  FROM RadioShowProducer WHERE name = '" . $producerdata . "' OR nickname = '" . $producerdata . "'";
                                                $result = mysql_query($query);
                                                while($row = mysql_fetch_array($result)){
                                                    $name = $row['name'];
                                                    $nickname = $row['nickname'];
                                                    $phone = $row['phone_number'];
                                                    $email = $row['email_address'];
                                                    echo "<tr>";
                                                    echo "<td>" . $name . "</td>";
                                                    echo "<td>" . $nickname . "</td>";
                                                    echo "<td>" . $phone . "</td>";
                                                    echo "<td>" . $email . "</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            ?>
                                			</tbody>
                                			<tfoot>
                                			</tfoot>
                                		</table>
                                </div>
                            </article>
                            <article id="shows">
                                <h2 class="major">Radio Shows</h2>
                                <form method="get">
                                    <div class="field">
                                        <label for="radioshowinput">Search Input</label>
                                        <input type="text" name="radioshowinput" id="radioshowinput" required value="" placeholder="Name or theme etc." />
                                    </div>
                                    <ul class="actions">
                                        <li><input type="submit" id="doradioshowsearch" name="doradioshowsearch" value="Search"/></li>
                                        <li><input type="reset" value="Reset" /></li>
                                    </ul>
                                </form>
                                <div class="table-wrapper">
                                	    <table>
                                		    <thead>
                                			    <tr>
                                				    <th>Name</th>
                                					<th>Starting Time</th>
                                					<th>Ending Time</th>
                                					<th>Theme</th>
                                					<th>Duration</th>
                                				</tr>
                                			</thead>
                                			<tbody>
                                			    <?php
                                            if(isset($_GET['doradioshowsearch'])){
                                                $link = mysql_connect("webpagesdb.it.auth.gr:3306","Administrator","Administrator");
                                                if (!$link) {
                                                    die("Can not connect: " . mysql_error());
                                                }
                                                mysql_query("SET NAMES 'utf8'");
                                                mysql_query("SET CHARACTER SET 'utf8'");
                                                mysql_query("set character_set_client=utf8");
                                                mysql_query("set character_set_connection=utf8");
                                                mysql_query("set collation_connection=utf8");
                                                mysql_query("set character_set_results=utf8");
                                                mysql_query("set time_zone='+02:00'");

                                                $select = mysql_select_db("Noisy_Parrot",$link);
                                                if (!select) {
                                                    echo "Error: " . mysql_error();
                                                }
                                                $radioshowdata = $_GET['radioshowinput'];
                                                $radioshowdata = mysql_real_escape_string($radioshowdata);
                                                utf8_encode($radioshowdata);
                                                mysql_select_db("Noisy_Parrot",$link);
                                                $query = "SELECT *  FROM RadioShow WHERE name = '" . $radioshowdata . "' OR start_time = '" . $radioshowdata . "' OR end_time = '" . $radioshowdata . "' OR theme = '" . $radioshowdata . "' OR duration = '" . $radioshowdata . "'";
                                                $result = mysql_query($query);
                                                while($row = mysql_fetch_array($result)){
                                                    $name = $row['name'];
                                                    $starttime = $row['start_time'];
                                                    $endtime = $row['end_time'];
                                                    $theme = $row['theme'];
                                                    $duration = $row['duration'];
                                                    echo "<tr>";
                                                    echo "<td>" . $name . "</td>";
                                                    echo "<td>" . $starttime . "</td>";
                                                    echo "<td>" . $endtime . "</td>";
                                                    echo "<td>" . $theme . "</td>";
                                                    echo "<td>" . $duration . "</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            ?>
                                			</tbody>
                                			<tfoot>
                                			</tfoot>
                                		</table>
                                </div>
                            </article>
                            <article id="contests">
                                <h2 class="major">Open Contests</h2>
                                <div class="table-wrapper">
                                	    <table>
                                		    <thead>
                                			    <tr>
                                				    <th>Name</th>
                                					<th>Ending Date</th>
                                					<th>Ending Time</th>
                                					<th>Gifts</th>
                                				</tr>
                                			</thead>
                                			<tbody>
                                			    <?php
                                                $link = mysql_connect("webpagesdb.it.auth.gr:3306","Administrator","Administrator");
                                                if (!$link) {
                                                    die("Can not connect: " . mysql_error());
                                                }
                                                mysql_query("SET NAMES 'utf8'");
                                                mysql_query("SET CHARACTER SET 'utf8'");
                                                mysql_query("set character_set_client=utf8");
                                                mysql_query("set character_set_connection=utf8");
                                                mysql_query("set collation_connection=utf8");
                                                mysql_query("set character_set_results=utf8");
                                                mysql_query("set time_zone='+02:00'");

                                                $select = mysql_select_db("Noisy_Parrot",$link);
                                                if (!select) {
                                                    echo "Error: " . mysql_error();
                                                }
                                                $contestdate = date("Y-m-d");
                                                $contestdate = mysql_real_escape_string($contestdate);
                                                utf8_encode($contestdate);
                                                mysql_select_db("Noisy_Parrot",$link);
                                                $query = "SELECT *  FROM Contest WHERE ending_date >= '" . $contestdate . "'";
                                                $result = mysql_query($query);
                                                while($row = mysql_fetch_array($result)){
                                                    $name = $row['name'];
                                                    $endingdate = $row['ending_date'];
                                                    $endingtime = $row['ending_time'];
                                                    $gifts = $row['gift'];
                                                    echo "<tr>";
                                                    echo "<td>" . $name . "</td>";
                                                    echo "<td>" . $endingdate . "</td>";
                                                    echo "<td>" . $endingtime . "</td>";
                                                    echo "<td>" . $gifts . "</td>";
                                                    echo "</tr>";
                                                }
                                                ?>
                                			</tbody>
                                			<tfoot>
                                			</tfoot>
                                		</table>
                                </div>
                            </article>
                            <article id="events">
                                <h2 class="major">Upcoming Events</h2>
                                <div class="table-wrapper">
                                	    <table>
                                		    <thead>
                                			    <tr>
                                				    <th>Name</th>
                                					<th>Presenter</th>
                                					<th>Location</th>
                                					<th>Date</th>
                                					<th>Time</th>
                                					<th>Info</th>
                                				</tr>
                                			</thead>
                                			<tbody>
                                			    <?php
                                                $link = mysql_connect("webpagesdb.it.auth.gr:3306","Administrator","Administrator");
                                                if (!$link) {
                                                    die("Can not connect: " . mysql_error());
                                                }
                                                mysql_query("SET NAMES 'utf8'");
                                                mysql_query("SET CHARACTER SET 'utf8'");
                                                mysql_query("set character_set_client=utf8");
                                                mysql_query("set character_set_connection=utf8");
                                                mysql_query("set collation_connection=utf8");
                                                mysql_query("set character_set_results=utf8");
                                                mysql_query("set time_zone='+02:00'");

                                                $select = mysql_select_db("Noisy_Parrot",$link);
                                                if (!select) {
                                                    echo "Error: " . mysql_error();
                                                }
                                                $eventdate = date("Y-m-d");
                                                $eventdate = mysql_real_escape_string($eventdate);
                                                utf8_encode($eventdate);
                                                mysql_select_db("Noisy_Parrot",$link);
                                                $query = "SELECT *  FROM Event WHERE date >= '" . $eventdate . "'";
                                                $result = mysql_query($query);
                                                while($row = mysql_fetch_array($result)){
                                                    $name = $row['name'];
                                                    $presenter = $row['nickname'];
                                                    $location = $row['location'];
                                                    $date = $row['date'];
                                                    $time = $row['time'];
                                                    $info = $row['info'];
                                                    echo "<tr>";
                                                    echo "<td>" . $name . "</td>";
                                                    echo "<td>" . $presenter . "</td>";
                                                    echo "<td>" . $location . "</td>";
                                                    echo "<td>" . $date . "</td>";
                                                    echo "<td>" . $time . "</td>";
                                                    echo "<td>" . $info . "</td>";
                                                    echo "</tr>";
                                                }
                                                ?>
                                			</tbody>
                                			<tfoot>
                                			</tfoot>
                                		</table>
                                </div>
                            </article>
                            <article id="producershow">
                                <h2 class="major">Radio Shows And Producers</h2>
                                <form method="get">
                                    <div class="field">
                                        <label for="producershowinput">Search Input</label>
                                        <input type="text" name="producershowinput" id="producershowinput" required value="" placeholder="Show name or Producer nickname." />
                                    </div>
                                    <ul class="actions">
                                        <li><input type="submit" id="doproducershowsearch" name="doproducershowsearch" value="Search"/></li>
                                        <li><input type="reset" value="Reset" /></li>
                                    </ul>
                                </form>
                                <div class="table-wrapper">
                                	    <table>
                                		    <thead>
                                			    <tr>
                                				    <th>Name</th>
                                					<th>NickName</th>
                                				</tr>
                                			</thead>
                                			<tbody>
                                			    <?php
                                            if(isset($_GET['doproducershowsearch'])){
                                                $link = mysql_connect("webpagesdb.it.auth.gr:3306","Administrator","Administrator");
                                                if (!$link) {
                                                    die("Can not connect: " . mysql_error());
                                                }
                                                mysql_query("SET NAMES 'utf8'");
                                                mysql_query("SET CHARACTER SET 'utf8'");
                                                mysql_query("set character_set_client=utf8");
                                                mysql_query("set character_set_connection=utf8");
                                                mysql_query("set collation_connection=utf8");
                                                mysql_query("set character_set_results=utf8");
                                                mysql_query("set time_zone='+02:00'");

                                                $select = mysql_select_db("Noisy_Parrot",$link);
                                                if (!select) {
                                                    echo "Error: " . mysql_error();
                                                }
                                                $producershowdata = $_GET['producershowinput'];
                                                $producershowdata = mysql_real_escape_string($producershowdata);
                                                utf8_encode($producershowdata);
                                                mysql_select_db("Noisy_Parrot",$link);
                                                $query = "SELECT *  FROM RadioShow_RadioShowProducer WHERE name = '" . $producershowdata . "' OR nickname = '" . $producershowdata . "'";
                                                $result = mysql_query($query);
                                                while($row = mysql_fetch_array($result)){
                                                    $name = $row['name'];
                                                    $nickname = $row['nickname'];
                                                    echo "<tr>";
                                                    echo "<td>" . $name . "</td>";
                                                    echo "<td>" . $nickname . "</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            ?>
                                			</tbody>
                                			<tfoot>
                                			</tfoot>
                                		</table>
                                </div>
                            </article>

						<!-- Insert -->
							<article id="insert">
								<h2 class="major">Send A Message</h2>
                                <form method="post" action="message.php" accept-charset="UTF-8">
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

						<!-- Participate To A Contest -->
                        <article id="participate">
                        	<h2 class="major">Participate To A Contest</h2>
                            <form method="post" action="participate.php" accept-charset="UTF-8">
                                <div class="field">
                                    <label for="number">Phone number</label>
                                    <input type="text" name="number" id="number" required value="" placeholder="required" />
                                </div>
                                <div class="field">
                                	<label for="show">Show</label>
                                	<div class="select-wrapper">
                                        <select name="contest" id="contest">
                                            <option value="default">-</option>
                                            <?php require_once "contests.php"; getContests() ?>
                                        </select>
                                	</div>
                                </div>
                                <ul class="actions">
                                    <li><input type="submit" name="submit" value="Submit"/></li>
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
                                        <li><input type="submit" name="isSure" id="isSure" value="Update" class="button disabled" /></li>
                                    	<li><input type="reset" value="Reset" /></li>
                                  	</ul>
                                  	<script type="text/javascript">
                                  	    var checker1 = document.getElementById('sure');
                                        var sendbtn1 = document.getElementById('isSure');
                                        // when unchecked or checked, run the function
                                        checker1.onchange = function(){
                                            if(this.checked){
                                                sendbtn1.className = "button special";
                                            } else {
                                                sendbtn1.className = "button disabled";
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
                                        <li><input type="submit" id="isSure2" name="isSure2" value="Delete" class="button disabled" /></li>
                                    	<li><input type="reset" value="Reset" /></li>
                                  	</ul>
                                  	<script type="text/javascript">
                                  	    var checker2 = document.getElementById('sure2');
                                        var sendbtn2 = document.getElementById('isSure2');
                                        // when unchecked or checked, run the function
                                        checker2.onchange = function(){
                                            if(this.checked){
                                                sendbtn2.className = "button special";
                                            } else {
                                                sendbtn2.className = "button disabled";
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
