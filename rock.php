

<div data-role="page" id="page4">
    <div data-role="header">
        <a href="index.php" data-icon="back"></a>
        <h3>Rock Genres</h3> 
    </div>
    <div data-role="content">
        <div class="ui-grid-a">
            <div id="ball000001" class="ui-block-a">
                <a href="#dialogPage_46" data-transition="slidedown" data-rel="dialog">
                    <h3>Acid<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball00001" class="ui-block-b">
                <a href="#dialogPage_47" data-transition="slidedown" data-rel="dialog">
                    <h3>Alternative<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball0001" class="ui-block-a">
                <a href="#dialogPage_48" data-transition="slidedown" data-rel="dialog">
                    <h3>Anatolian<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball001" class="ui-block-b">
                <a href="#dialogPage_49" data-transition="slidedown" data-rel="dialog">
                    <h3>Art<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball01" class="ui-block-a">
                <a href="#dialogPage_50" data-transition="slidedown" data-rel="dialog">
                    <h3>Blues<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball1" class="ui-block-b">
                <a href="#dialogPage_51" data-transition="slidedown" data-rel="dialog">
                    <h3>Bis<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball2" class="ui-block-a">
                <a href="#dialogPage_52" data-transition="slidedown" data-rel="dialog">
                    <h3>Cello<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball3" class="ui-block-b">
                <a href="#dialogPage_53" data-transition="slidedown" data-rel="dialog">
                    <h3>Celtic <br/>Rock</h3> 
                </a>
            </div>
            <div id="ball4" class="ui-block-a">
                <a href="#dialogPage_54" data-transition="slidedown" data-rel="dialog">
                    <h3>Chicano<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball5" class="ui-block-b">
                <a href="#dialogPage_55" data-transition="slidedown" data-rel="dialog">
                    <h3>Christian<br/> Alternative<br/> Rock</h3> 
                </a>
            </div>
            <div id="ball6" class="ui-block-a">
                <a href="#dialogPage_56" data-transition="slidedown" data-rel="dialog">
                    <h3>College<br/>Rock</h3> 
            </div>
            <div id="ball7" class="ui-block-b"><a href="#dialogPage_57" data-transition="slidedown" data-rel="dialog"><h3>Comedy<br/>Rock</h3></a>
            </div>
            <div id="ball8" class="ui-block-a">
                <a href="#dialogPage_58" data-transition="slidedown" data-rel="dialog">
                    <h3>Country<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball9" class="ui-block-b">
                <a href="#dialogPage_59" data-transition="slidedown" data-rel="dialog">
                    <h3>Dance<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball10" class="ui-block-a">
                <a href="#dialogPage_60" data-transition="slidedown" data-rel="dialog">
                    <h3>Dark<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball11" class="ui-block-b">
                <a href="#dialogPage_61" data-transition="slidedown" data-rel="dialog">
                    <h3>Death<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball12" class="ui-block-a">
                <a href="#dialogPage_62" data-transition="slidedown" data-rel="dialog">
                    <h3>Electronic<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball13" class="ui-block-b">
                <a href="#dialogPage_63" data-transition="slidedown" data-rel="dialog">
                    <h3>Garage<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball14" class="ui-block-a">
                <a href="#dialogPage_64" data-transition="slidedown" data-rel="dialog">
                    <h3>Gothic<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball15" class="ui-block-b">
                <a href="#dialogPage_65" data-transition="slidedown" data-rel="dialog">
                    <h3>Hard<br/>Rock</h3> 
                </a>
            </div>
            <div id="ball16" class="ui-block-a">
                <a href="#dialogPage_44" data-transition="slidedown" data-rel="dialog">
                    <h3>Skacore</h3> 
                </a>
            </div>
            <div id="ball17" class="ui-block-b">
                <a href="#dialogPage_45" data-transition="slidedown" data-rel="dialog">
                    <h3>Digital Hardcore</h3> 
                </a>
            </div>
        </div>
    </div>
</div>
</div>


<div data-role="page" id="dialogPage_46"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Acid Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("acidrock");
             ?>
   </div>
   <?php
      getMore("acidrock");
          ?>
</div>
</div>
<div data-role="page" id="dialogPage_47"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Alternative Rock</h1>
   <div role="main" class="ui-content">
      <?php
         getData("alternativerock");
             ?>
      <div data-role="collapsible" data-collapsed="true">
         <h4>Bands</h4>
         <ul data-role="listview">
            <li><a href="#alternativeRockBands">Bands</a></li>
         </ul>
      </div>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_48"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Anatolian Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("anatolianrock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_49"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Art Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("artrock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_50"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Blues Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("bluesrock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_51"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Bis Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("bisrock");
             ?> 
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_52"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Cello Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("cellorock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_53"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Celtic Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("celticrock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_54"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Chicano Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("chicanorock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_55"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Christian Alternative Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("christianalternativerock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_56"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">College Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("collegerock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_57"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Comedy Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("comedyrock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_58"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Country Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("countryrock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_59"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Dance Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("dancerock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_60"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Dark Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("darkrock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_46"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Genres</h1>
   <div role="main" class="ui-content">
      <ul data-role="listview">
         <li><a href="#page2">Metal</a></li>
         <li><a href="#page3">Core</a></li>
         <li><a href="#page4">Rock</a></li>
      </ul>
   </div>
   <div data-role="page" id="dialogPage_61"  data-transition="slidedown" data-rel="dialog">
      <h1 class="verplaatsing">Death Rock</h1>
      <div role="main" class="ui-content"> 
         <?php
            getData("deathrock");
                ?>
      </div>
   </div>
</div>
<div data-role="page" id="dialogPage_62"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Electronic Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("electronicrock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_63"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Garage Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("garagerock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_64"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Gothic Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("gothicrock");
         getMore("gothicrock");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_65"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Hard Rock</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("hardrock");
         
             ?>
   </div>
</div>
</div>
