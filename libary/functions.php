<?php

function getData($genres)
{
    
    $sql    = "SELECT content  FROM musicgenres WHERE genres ='$genres'";
    $result = mysql_query($sql);
    while ($row = mysql_fetch_assoc($result)) {
        echo $row['content'];
        
        
    }
    
}

function getImagePath($genres)
{
    
    $sql    = "SELECT image_path FROM musicgenres WHERE genres ='$genres'";
    $result = mysql_query($sql);
    
    while ($row = mysql_fetch_assoc($result)) {
        echo '<img src="' . $row['image_path'] . '"/>';
        
    }
}

function getMore($genres)
{
    $sql    = "SELECT more FROM musicgenres WHERE genres ='$genres'";
    $result = mysql_query($sql);
    while ($row = mysql_fetch_assoc($result)) {
        echo '<div class="verplaatsing">';
        echo $row['more'];
        echo '</div>';
        
    }
}
function getDialog($genres){
    $sql ="SELECT dialognumber FROM musicgenres WHERE genres ='$genres'";
     $result = mysql_query($sql);
    while ($row = mysql_fetch_assoc($result)) {
      echo"<div data-role='page' id='dialogPage_".$row['dialognumber']."'  data-transition='slidedown' data-rel='dialog'>";
        
    }
}