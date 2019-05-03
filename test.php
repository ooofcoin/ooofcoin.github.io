<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tabs with simple module select</title>
<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 0px solid #ccc;
    background-color: #ffffff;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: 6;
    outline: 3;
    cursor: pointer;
    padding: 20px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

/* Style the tab content */
.tabcontentr {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>

<body>

<div>
    <!--<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">-->
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

    <select name="name">
        <option value="Red">Red</option>
        <option value="Green">Green</option>
        <option value="Blue">Blue</option>
        <option value="Pink">Pink</option>
        <option value="Yellow">Yellow</option>
    </select>
    <input type="submit" name="submit" value="Load module" />
    </form>
</div>

<div style="float:left; width:50%;">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Module')">Module</button>
  <button class="tablinks" onclick="openCity(event, 'Instructions')">Instructions</button>
  <button class="tablinks" onclick="openCity(event, 'Plug')">Matrix Plug Map</button>
</div>

<div id="Module" class="tabcontent">
  <h3>Module</h3>
  <p>
  <?php
	if(isset($_POST["name"])){
		$module = $_POST["name"];
		echo $module;
	}else{
		echo "no module selected";
	}
	?>
  </p>
  
</div>

<div id="Instructions" class="tabcontent">
  <h3>Instructions</h3>
  <p>Instructions for module here.</p> 
</div>

<div id="Plug" class="tabcontent">
  <h3>Plug map</h3>
  <p>Plug map for module here.</p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</div>


<div style="float:right; width:50%;">

<div class="tab">
  <button class="tablinks" onclick="openCityr(event, 'Module-r')">Module</button>
  <button class="tablinks" onclick="openCityr(event, 'Instructions-r')">Instructions</button>
  <button class="tablinks" onclick="openCityr(event, 'Plug-r')">Matrix Plug Map</button>
</div>

<div id="Module-r" class="tabcontentr">
  <h3>Module</h3>
  <p>Description of module here.</p>
</div>

<div id="Instructions-r" class="tabcontentr">
  <h3>Instructions</h3>
  <p>Instructions for module here.</p> 
</div>

<div id="Plug-r" class="tabcontentr">
  <h3>Plug Map</h3>
  <p>Plug map for module here.</p>
</div>

<script>
function openCityr(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontentr");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</div>   
</body>
</html> 

