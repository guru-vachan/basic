<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Sequence diagrams</title>
</head>
<body>

<h1 style="text-align:centre; margin-left:40%; ">SoftDesign</h1>
<br>
<h2 style="text-align:centre;">Your Automated Generated Sequence Diagram</h2>


 <div class="diagram">
  <?php
session_start();

echo $_SESSION['data'];

?> 
</div>
    
<div style="margin-left:40%;">
Return <a style="" href="../index.html">HOME</a>
<br>
OR
<br>
Go <a href="s.php">Back And Edit</a>
</div>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js'></script>
<script src='js/diagram.js'></script>

        <script src="js/index2.js"></script>

</body>
</html>