
					<ul class="nav1">
					<?php
  
  
  if (isset($_SESSION['name'])) {
    echo '<li><a class="active" href="index.php">Home</a></li>
					   <li><a href="about.php">Profile</a></li>
					   <li><a href="video.php">Videos</a></li>
                      <li><a href="audio.php">Audios</a></li>
                      <li><a href="photo.php">Photos</a></li>
					  <li><a href="chat.php">Chat</a></li>';
  }
  else {
  
    echo '<li><a class="active" href="index.php">Home</a></li>
                      <li><a href="video.php">Videos</a></li>
                      <li><a href="audio.php">Audios</a></li>
                      <li><a href="photo.php">Photos</a></li>';
  }

?>
					 
                      
					</ul>
					<!-- script-for-menu -->
							  