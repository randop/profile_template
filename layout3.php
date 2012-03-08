<!DOCTYPE html>
<html>
<body>
<style type="text/css">
html, body {
	margin : 0;
}

#header {
	height : 58px;
	/* background-color : darkblue; */
	position:relative;
    padding-left:188px;
}

.container {
    position:relative;
    padding-left:150px;
    padding-right:150px;
}

.container .left-panel {
    width: 150px;
    position:absolute;
    left:0px;
    top:0px;
	background-color : red;
}

.container .right-panel {
    width: 150px;
    position:absolute;
    right:0px;
    top:0px;
	background-color : yellow;
}

.container .center-panel {
    background-color : blue;
}

#logo_bar {
	width : 188px;
	background-color : white;
	position:absolute;
    left:0px;
    top:0px;	
}

.nav {
	margin-left: 5px;
	list-style-type: none;
	display : inline;
}

.nav li {
	list-style-type: none;
	display : inline;
}

	#nav_account {
		float : right;
	}
	
	#nav_account img {
		height : 50px;
		width : 50px;
		border : solid 1px gray;
	}
	
#logo {
	padding : 8px;
}

#logout {
	padding : 4px;
}

#menus {

}

</style>
<div id="header">
	<div id="logo_bar">
		<div id="logo">
			Logo
		</div>
	</div>
	<div id="nav_bar" style="margin : 0;">
		<ul class="nav">
			<li id="menus">Menus</li>	
			<li>
				<table id="nav_account">
					<tr>
						<td>
							<img />
						</td>
						<td>
							Randolph Ledesma
						</td>
						<td>
							<input type="button" class="btn2" value="Logout" />
						</td>
					</tr>
				</table>
			</li>
		</ul>
	</div>
</div>
<div class="container">
    <div class="left-panel">&nbsp;</div>
    <div class="center-panel">Content goes here...</div>
    <div class="right-panel">&nbsp;</div>
</div>
</body>
</html>