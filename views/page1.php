<div data-role="page" >
   <div data-role="content">
      <section class="demo">
         <div class="containerslider">
            <div style="display: inline-block;">
               <img src="images/bvb.jpg"/>
            </div>
            <div>
               <img src="images/emo2.jpg"/>
            </div>
            <div>
               <img src="images/btf.jpg"/>
            </div>
            <div>
               <img src="images/pn.jpg"/>
            </div>
            <div>
               <img src="images/missmayi.jpg"/>
            </div>
            <div>
               <img src="images/bmth.jpg"/>
            </div>
            <div>
               <img src="images/asking.jpg"/>
            </div>
            <div>
               <img src="images/bullet.jpg"/>
            </div>
            <div>
               <img src="images/falling.jpg"/>
            </div>
            <div>
               <img src="images/atl.jpg"/>
            </div>
         </div>
      </section>
  
  
      <div class="menu">
         <ul>
            <li><a href="#page9"><img width="85" height="85" src="images/icon.png" class="attachment-menu-icon-size wp-post-image"  alt="icon1" />Genres</a></li>
            <li><a href="#page5"><img width="85" height="85" src="images/comment.png" class="attachment-menu-icon-size wp-post-image" alt="icon2" />Comment</a></li>
            <li><a href="#page6"><img width="85" height="85" src="images/signin.png" class="attachment-menu-icon-size wp-post-image" alt="icon3" />Sign In</a></li>
            <li><a href="#page7"><img width="85" height="85" src="images/signup.png" class="attachment-menu-icon-size wp-post-image" alt="icon4" />Sign Up</a></li>
            <li><a href="#page8"><img width="85" height="85" src="images/logout.png" class="attachment-menu-icon-size wp-post-image" alt="icon5"  />Logout</a></li>
            <li><a href="#dialogPage_playlist" ><img width="85" height="85" src="images/music.png" class="attachment-menu-icon-size wp-post-image" alt="icon6" />Playlist</a></li>
         </ul>
      </div>
   </div>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <div data-role="footer" class="footer">
      <h4>Made By Gianni Punt</h4>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_playlist">
   <div data-role="header">
      <a href="index.php" data-icon="back"></a>
      <h1>Genre Playlist</h1>
   </div>
   <div data-role="content">

      <iframe id="currentImage" src="https://www.youtube.com/embed/n5ePonnGrlY" width="100%" height="100%" data-role="none"></iframe>
      <button id="prev" class="previous blue" data-role="none"></button>
      <button  id="next"class="next blue" data-role="none"></button>
   </div>
</div>
</div>
</div>
<div data-role="page" id="page5">
   <div data-role="main" class="ui-content">
      <form method="post" action="">
         <label for="Name">First name:</label>
         <input type="text" name="name"/>
         <label for="Comment">Comment:</label>
         <textarea name="comment" rows="10" cols="50"></textarea>
         <input type="submit" name="submit" value="Comment">
      </form>
      <?php
mysql_query("SET character_set_results=utf8", $con);
mb_language('uni');
mb_internal_encoding('UTF-8');

$getquery = mysql_query("SELECT * FROM comments ORDER BY id DESC");
while ($rows = mysql_fetch_assoc($getquery)) {
    $id      = $rows['id'];
    $name    = $rows['name'];
    $comment = $rows['comment'];
    echo $name . '<br/>' . '<br/>' . $comment . '<br/>' . '<br/>' . '<hr size="1"/>';
}
?>
   </div>
</div>
<div data-role="page" id="page6">
   <div data-role="header">
      <h1>Sign In </h1>
   </div>
   <div data-role="main" class="ui-content">
      <form method="post" action="index.php">
         <div class="ui-field-contain">
            <label for="name">Username:</label>
            <input type="text" name="username" id="fullname">
            <br/>       
            <label for="password">Password:</label>
            <input type="text" name="password" > 
         </div>
         <input type="submit" name="submit" data-inline="true" value="Submit">
      </form>
   </div>
<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $query    = mysql_query("select * from user where password='$password' AND username='$username'", $con);
        $rows     = mysql_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user'] = $username;
            header("location: index.php");
        } else {
            $error = "<h2>Username or Password is invalid</h2>";
        }
        mysql_close($connection);
    }
}

?>
</div>
<div data-role="page" id="page7">
   <div data-role="header">
      <h1>Sign Up </h1>
   </div>
   <div data-role="main" class="ui-content">
      <form method="post" action="index.php">
         <div class="ui-field-contain">
            <label for="name">Username:</label>
            <input type="text" name="username2" id="fullname">
            <br/>       
            <label for="password">Password:</label>
            <input type="text" name="password2" > 
         </div>
         <input type="submit" name="submit2" data-inline="true" value="Submit">
      </form>
   </div>
<?php
if (isset($_POST['submit2'])) {
    if (empty($_POST['username2']) || empty($_POST['password2'])) {
        $error = "Username or Password is invalid";
    } else {
        $username = $_POST['username2'];
        $password = $_POST['password2'];
        
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        mysql_query("insert into user(username,password)values('$username','$password')", $con);
        if (mysql_query()) {
            alert('<h2>succes</h2>');
        }
        header("refresh:5;url=index.php");
        
        mysql_close($connection);
    }
}

?>
</div>
<div data-role="page" id="page9">
   <div data-role="header">
      <a href="index.php" data-icon="back"></a>
      <h3>Main Genres</h3>
   </div>
   <div data-role="content">
  
       <div class="ui-grid-a">
  <div id="ball-500" class="ui-block-a"><a href="#page2"><h3>Metal</h3></a></div>
   <div id="ball-600" class="ui-block-a"><a href="#page3"><h3>Core</h3></a></div>
   <div id="ball-700" class="ui-block-a"><a href="#page4"><h3>Rock</h3></a></div>
</div>
   </div>
</div>