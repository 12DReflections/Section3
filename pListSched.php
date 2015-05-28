<!doctype html>
<HTML>
    <head>
        <title>Main Page</title>
        <?php include './head.php'; ?>
    </head>
    <body>
        <div class="container">
            <?php include './header.php'; ?>
            <?php include './navbar.php'; ?>
            <br><br><br>
            <main>
			<div class content>
				<div class="hoverTable">					
					<h1>Movie Prices</h1>
					<table style=width:100%>
						<tr>
							<th>Price list </th>
							<th>Mon - Tue (All Day)
							<br>Mon - Fri (1pm Only)</th>
							
							<th>Wed - Fri (not 1pm)
							<br>Sat - Sun (All day)</th>
						</tr>					
						
						<tr>
							<td>Standard-Full</td>
							<td>$12</td>
							<td>$18</td>
						</tr>
							
						<tr>
							<td>Standard-Conc</td>
							<td>$10</td>
							<td>$15</td>
						</tr>

						<tr>
							<td>Standard-Child</td>
							<td>$8</td>
							<td>$12</td>
						</tr>
						<br>
						<tr>
							<td>First Class - Adult</td>
							<td>$25</td>
							<td>$30</td>
						</tr>
						<tr>
							<td>First Class - Child</td>
							<td>$20</td>
							<td>$25</td>
						</tr>
						<tr>
							<td>Beanbag</td>
							<td>$20</td>
							<td>$30</td>
						</tr>
					</table>
					<p>*The beanbag price allows up to 2 adults OR 1 adult + 1 child OR up to 3 children.
					<br>1 Price Fits all!</p>
				</div>
				<div class="hoverTable" id = "weekly_sched">					
					<h1>Weekly Schedule</h1>
					<table style=width:100%>
						<tr>
							<th>Time</th>
							<th>Mon-Tues</th>
							<th>Wed-Fri</th>
							<th>Sat-Sun</th>
						</tr>					
						
						<tr>
							<td> 12:00pm</td>
							<td></td>
							<td></td>							
							<td>Superman</td>
						</tr>
							
						<tr>
							<td>1:00pm </td>
							<td>Superman</td>
							<td>Phantom of the Opera</td>
							<td></td>
						</tr>
						<tr>
							<td>3:00pm </td>
							<td></td>
							<td></td>
							<td>Hemp for Victory</td>
						</tr>
						<tr>
							<td>6:00pm</td>
							<td>Hemp for Victory</td>
							<td>Superman</td>
							<td>Phantom of the Opera</td>
						 </tr>
						 <tr>
							<td>9:00pm</td>
							<td>Phantom of the Opera</td>
							<td>Sherlock Holmes</td>
							<td>Sherlock Holmes</td>
						</tr>
					</table>
				</div>
			</div>
            </main>
        </div>
        <footer><?php include './footer.php'; ?></footer>
    </div>  
</body>
</HTML>


