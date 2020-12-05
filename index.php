<html>
  <head>
    <title>Portal - Radio Puno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      *{margin:0px; padding:0px;}
      body {
        background-image:url(img/header.jpg);
        background-repeat:repeat-x;
      }
      .box {
	box-sizing: border-box;
	width:100%;
	margin:0px auto;
	text-align:center;
	//border:3px solid green;
	font-family:Arial,Helvetica,sans-serif;
	
      }
      .butt {
	//border:2px solid blue; 
	width:100%;
	padding-top:25px;
	padding-bottom:25px;
      }
      .but1 {
	  height:55px;
	  width:105px;
	  background-image:url("./img/play.jpg");
	  border-radius:15%;
      }
      .but2 {
	  height:55px;
	  width:105px;
	  background-image:url("./img/pause.jpg");
	  border-radius:15%;
      }
      nav{
	  background:#292b2c;
	  width:100%;
	  height:100px;
	  color:white;
	  margin-top:25px;
	  //padding-top:20px;
	  //padding-bottom:-10px;
      }
    </style>
  </head>
  <body>
    <div class="box">
      <img src="img/logo.png" style="padding-top:20px;">
      <audio autoplay id="radio">
	<source src="https://sonicpanel.cloudstreaming.eu/8004/stream">
      </audio>
      <div class="butt">
        <button class="but1" onclick="document.getElementById('radio').play()">
	</button>
	&nbsp;
        <button class="but2" onclick="document.getElementById('radio').pause()">
	</button>
      </div>
      <div class="slidecontainer">
        <input type="range" min="1" max="100" value="100" class="slider" id="myRange">
	<p style="color:white;">Volume: <span id="demo"></span></p>
      </div>

      <nav><h3 style="font-size:6vw; line-height:75px;">Bienvenidos a Radio Puno</h3><p style="font-size:3vw; margin-top:-20px;">Programador general: Andres Medina</p></nav>
    </div>

	<?php include 'examples.html';?>    

    <script>
      var slider = document.getElementById('myRange');
      var output = document.getElementById('demo');
      var radio = document.getElementById('radio');
      output.innerHTML = slider.value;
      slider.oninput = function() {
	output.innerHTML = this.value;
	radio.volume = this.value / 100;
      }
      function myFun(){
	var auto = document.getElementById('radio').autoplay;
      }
    </script>
  </body>
</html>
