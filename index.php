<!DOCTYPE html>
<html lang="en">
<head>
	<title> NHL Fanclub form </title>
    <link rel="stylesheet" href="Style.css"/>
    <link rel="shortcut icon" href="images/image.ico" type="image/ico"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>
 	<script src='jquery-ui.min.js' type='text/javascript'></script>
    <script type="text/javascript">
		function about() {
            const href = $(this).attr('href')
            Swal.fire({
                title: "About this form",
                text: "This is a form to registrate to a discord NHL fanclub server. It sends the owner of the server an email with the content of the form, so he will know what roles to give you.",
                button: "OK",
            }).then((result) => {
                window.location.href = "index.php";
            })
            return false;
        }
	</script>
	<style>
		#about{
    width: 100px;
    min-height: 30px;
    display: inline-block;
    font-size: 17px;
    transition: 0.5s;
	border-radius: 5px;
	margin-top: 20px;
    border: blue solid 2px;
    background: lightcyan;
	font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
		#fifth{
	padding-left: 10px;
    padding-right: 10px;
    text-align: center;
    color: darkblue;
    font-size: 17px;
}
		#about:hover {
    background-color: darkblue;
    color: whitesmoke;
    cursor: pointer;
    border: none;
}
	</style>
	<script type="text/javascript">
		Swal.about({
  		title: 'Error!',
  		text: 'Do you want to continue',
  		icon: 'error',
  		confirmButtonText: 'Cool'
})
	</script>
</head>
<body>
	<div id="content">
	<form name="Form" method="post" action="form.php">
		<div id="header">
		<h2>NHL FANCLUB SERVER REGISTRATION</h2>
		</div>
		<hr class="red">
		
	<div id="first">
		<input type="text" placeholder="First name:" class="text" name="FirstName" pattern="[a-zA-Z]*" required> <br><br>
		<input type="text" placeholder="Last name:" class="text" name="LastName" pattern="[a-zA-Z]*" required> <br><br>
		<input type="text" placeholder="Discord username:" class="text" name="DisUsername" required>
	</div>
	<hr class="blu">
	<div id="second">	
	Date of birth:
	<br>
		<input type="date" class="date" name="dateOfBirth" min="1900-01-01" max="2014-12-31" required>
	
		<br>	
		<br>
		Gender:<br>
		<label class="radiocus">
		<input type="radio" name="Gender" value="Male" class="radioin" required>
		<div class="radio__radio"></div>
		<p>Male</p>
		</label>
		<label class="radiocus">
		<input type="radio" name="Gender" value="Female" class="radioin" required>
		<div class="radio__radio"></div>
		<p>Female</p>
		</label>
		<label class="radiocus">
		<input type="radio" name="Gender" value="Other" class="radioin" required>
		<div class="radio__radio"></div>
		<p>Other</p>
		</label>
		<br>
		<input type="text" placeholder="Home town:" class="text" name="HomeTown" pattern="[\D]*" required>
	<br>
	<br>
	<div class="top"></div>
	<hr class="center">
	<div class="bottom"></div>
</div>
<br>
<div id="third">	
	

	Favourite team:
	<br>
	<select required class="select" name="FavTeam">
		<option value="Anaheim Ducks">Anaheim Ducks</option>
		<option value="Arizona Coyotes">Arizona Coyotes</option>
		<option value="Boston Bruins">Boston Bruins</option>
		<option value="Buffalo Sabres">Buffalo Sabres</option>
		<option value="Calgary Flames">Calgary Flames</option>
		<option value="Carolina Hurricanes">Carolina Hurricanes</option>
		<option value="Chicago Blackhawks">Chicago Blackhawks</option>
		<option value="Colorado Avalanche">Colorado Avalanche</option>
		<option value="Columbus Blue Jackets">Columbus Blue Jackets</option>
		<option value="Dallas Stars">Dallas Stars</option>
		<option value="Detroit Red Wings">Detroit Red Wings</option>
		<option value="Edmonton Oilers">Edmonton Oilers</option>
		<option value="Florida Panthers">Florida Panthers</option>
		<option value="Los Angeles Kings">Los Angeles Kings</option>
		<option value="Minnesota Wild">Minnesota Wild</option>
		<option value="Montreal Canadiens">Montreal Canadiens</option>
		<option value="Nashville Predators">Nashville Predators</option>
		<option value="New Jersey Devils">New Jersey Devils</option>
		<option value="New York Islanders">New York Islanders</option>
		<option value="New York Rangers">New York Rangers</option>
		<option value="Ottawa Senators">Ottawa Senators</option>
		<option value="Philadelphia Flyers">Philadelphia Flyers</option>
		<option value="Pittsburgh Penguins">Pittsburgh Penguins</option>
		<option value="San Jose Sharks">San Jose Sharks</option>
		<option value="Seattle Kraken">Seattle Kraken</option>
		<option value="St Louis Blues">St Louis Blues</option>
		<option value="Tampa Bay Lightning">Tampa Bay Lightning</option>
		<option value="Toronto Maple Leafs">Toronto Maple Leafs</option>
		<option value="Vancouver Canucks">Vancouver Canucks</option>
		<option value="Vegas Golden Knights">Vegas Golden Knights</option>
		<option value="Washington Capitals">Washington Capitals</option>
		<option value="Winnipeg Jets">Winnipeg Jets</option>
	</select>
	<br>
	<br>
	Special requests/message:
	
	<br>
	<textarea style="resize:none;" rows="4" cols="50" class="textarea" name="Message"></textarea>
	<br>
</div>	
	<hr class="blu">
	
	<div id="forth">
		<input type="submit" value="SUBMIT" id="submit" name="submit">
</div>

<hr class="red">
</form>
<div id="fifth">	
	<button id="about" onclick="javascript:about()" method="post">ABOUT</button>
</div>
</div>
</body>
</html>