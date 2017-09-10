<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>SoftDesign</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    
        <style>
     
      @import url(http://fonts.googleapis.com/css?family=Dosis:400,500,600,700,800);
@import url(http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
*, *:before, *:after {
  box-sizing: border-box;
}

input, button {
  font-smooth: always;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
 body{
	  background-color:black;}
#trigger {
  cursor: pointer;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 125px;
  height: 125px;
  padding: 0;
  margin: auto;
  border: 0;
  outline: 0;
  background: transparent;
  font-size: 65pt;
  color: #a8e252;
  text-align: center;
  line-height: 125px;
}

#search {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #a8e252;
  opacity: 0;
  visibility: hidden;
  transform: scale(3);
  transition: all 300ms cubic-bezier(0.23, 1, 0.32, 1);
}
#search.active {
  opacity: 1;
  visibility: visible;
  transform: scale(1);
}
#search .input {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 125px;
  margin: auto;
}
#search .input .search {
  float: left;
  width: calc(100% - 125px);
  height: 125px;
  padding: 0;
  margin: 0;
  border: 0;
  outline: 0;
  background: transparent;
  font-family: 'Dosis', sans-serif;
  font-size: 65pt;
  color: #fff;
  font-weight: 800;
  line-height: 125px;
  text-indent: 50px;
}
#search .input .search::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.5);
}
#search .input .submit {
  cursor: pointer;
  float: left;
  width: 125px;
  height: 125px;
  padding: 0;
  margin: 0;
  border: 0;
  outline: 0;
  background: transparent;
  font-size: 65pt;
  color: #fff;
  text-align: center;
  line-height: 125px;
}
#search #close {
  cursor: pointer;
  position: absolute;
  top: 0;
  right: 0;
  width: 125px;
  height: 125px;
  padding: 0;
  margin: 0;
  border: 0;
  outline: 0;
  background: transparent;
  font-size: 65pt;
  color: #fff;
  text-align: center;
  line-height: 125px;
}
.button1 {
  background: #3498db;
  width: 180px;
  padding: 4px 0;
  position: absolute;
  left: 45%;
  top: 10%;
  -webkit-transform: translateX(-50%) translateY(-50%);
      -ms-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
  border-radius: 3px;
}
.button1 p {
  font-family: 'Roboto';
  text-align: center;
  text-transform: uppercase;
  color: yellow;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.button1:hover {
  cursor: pointer;
}
.button2:after {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 10%;
  border-radius: 50%;
  background-color: #927608;
  opacity: 0.4;
  bottom: -30px;
}

.button2 {
  background: #3498db;
  width: 180px;
  padding: 4px 0;
  position: absolute;
  left: 90%;
  top: 30%;
  -webkit-transform: translateX(-50%) translateY(-50%);
      -ms-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
  border-radius: 3px;
}
.button2 p {
  font-family: 'Roboto';
  text-align: center;
  text-transform: uppercase;
  color: yellow;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.button2:hover {
  cursor: pointer;
}
.button2:after {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 5%;
  border-radius: 50%;
  background-color: #927608;
  opacity: 0.4;
  bottom: -30px;
}

.button3 {
  background: #3498db;
  width: 180px;
  padding: 4px 0;
  position: absolute;
  left: 90%;
  top: 60%;
  -webkit-transform: translateX(-50%) translateY(-50%);
      -ms-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
  border-radius: 3px;
}
.button3 p {
  font-family: 'Roboto';
  text-align: center;
  text-transform: uppercase;
  color: yellow;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.button3:hover {
  cursor: pointer;
}
.button3:after {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 10%;
  border-radius: 50%;
  background-color: #927608;
  opacity: 0.4;
  bottom: -30px;
}

.button4 {
  background: #3498db;
  width: 180px;
  padding: 4px 0;
  position: absolute;
  left: 90%;
  top: 90%;
  -webkit-transform: translateX(-50%) translateY(-50%);
      -ms-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
  border-radius: 3px;
}
.button4 p {
  font-family: 'Roboto';
  text-align: center;
  text-transform: uppercase;
  color: yellow;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.button4:hover {
  cursor: pointer;
}
.button4:after {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 10%;
  border-radius: 50%;
  background-color: #927608;
  opacity: 0.4;
  bottom: -30px;
}
    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>
 <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Roboto:400"/>
   
<div class="button1">
  <p><a href="s.php" style="text-decoration:none; ">Sequence Diagram</a></p>
</div>	
	
 <div class="button2">
  <p><a href="class.php" style="text-decoration:none; ">Create Class Diagram</a></p>
</div>
<div class="button3">
  <p><a href="activity.php" style="text-decoration:none; ">Create Activity Diagram</a></p>
</div>
<div class="button4">
  <p><a href="index.php" style="text-decoration:none; ">Create Usecase Diagram</a></p>
</div>

<form method='post' action="scheck.php" >
<textarea id="txtArea"  style='z-index:2; margin-top:10%; margin-left:30%; height:300px; width:400px;'placeholder="Enter text notation" name="data">
</textarea>
<input type="Submit" value="click">
</form>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.12.1/TweenMax.min.js'></script>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
		



    
    
    
  </body>
</html>