

<div   data-role="page" id="page3">
    <div data-role="header">
        <a href="../maingenres.php" data-icon="back"></a>
        <h3>Core Genres</h3> 
    </div>
    <div data-role="content">
        <div class="ui-grid-a">
            <div id="ball-three2" class="ui-block-a">
               <a href="#dialogPage_24" data-transition="slidedown" data-rel="dialog">
                <h3>Trance<br/>core</h3> 
                </a>
            </div>
            <div id="ball-four2" class="ui-block-b">
                <a href="#dialogPage_25" data-transition="slidedown" data-rel="dialog" id="log24">
                    <h3>Mathcore</h3> 
                </a>

            </div>
            <div id="ball-five2" class="ui-block-a">
                <a href="#dialogPage_26" data-transition="slidedown" data-rel="dialog" id="log26" >
                    <h3>Post Hardcore</h3> 
                </a>
            </div>
            <div id="ball-six2" class="ui-block-b">
                <a href="#dialogPage_27"  data-transition="slidedown" data-prefetch="true">
                    <h3>Noisecore</h3> 
                </a>
            </div>
            <div id="ball-72" class="ui-block-a">
                <a href="#dialogPage_28" data-transition="slidedown" data-rel="dialog" data-prefetch="true">
                    <h3>Queercore</h3> 
                </a>
            </div>
            <div id="ball-82" class="ui-block-b">
                <a href="#dialogPage_29" data-transition="slidedown" data-rel="dialog" data-prefetch="true">
                    <h3>Thrashcore</h3> 
                </a>
            </div>
            <div id="ball-92" class="ui-block-a">
                <a href="#dialogPage_30" data-transition="slidedown" data-rel="dialog">
                    <h3>Frenchcore</h3> 
                </a>
            </div>
            <div id="ball-102" class="ui-block-b">
                <a href="#dialogPage_31" data-transition="slidedown" data-rel="dialog">
                    <h3>Speedcore</h3> 
                </a>
            </div>
            <div id="ball-112" class="ui-block-a">
                <a href="#dialogPage_32" data-transition="slidedown" data-rel="dialog">
                    <h3>Terrorcore</h3> 
                </a>
            </div>
            <div id="ball-122" class="ui-block-b">
                <a href="#dialogPage_33" data-transition="slidedown" data-rel="dialog">
                    <h3>Crunkcore</h3> 
                </a>
            </div>
            <div id="ball-132" class="ui-block-a">
                <a href="#dialogPage_34" data-transition="slidedown" data-rel="dialog">
                    <h3>Britcore</h3> 
            </div>
            <div id="ball-142" class="ui-block-b"><a href="#dialogPage_35" data-transition="slidedown" data-rel="dialog"><h3>Horrorcore</h3></a>
            </div>
            <div id="ball-152" class="ui-block-a">
                <a href="#dialogPage_36" data-transition="slidedown" data-rel="dialog">
                    <h3>Nerdcore</h3> 
                </a>
            </div>
            <div id="ball-162" class="ui-block-b">
                <a href="#dialogPage_37" data-transition="slidedown" data-rel="dialog">
                    <h3>Breakcore</h3> 
                </a>
            </div>
            <div id="ball-172" class="ui-block-a">
                <a href="#dialogPage_38" data-transition="slidedown" data-rel="dialog">
                    <h3>Raggacore</h3> 
                </a>
            </div>
            <div id="ball-182" class="ui-block-b">
                <a href="#dialogPage_39" data-transition="slidedown" data-rel="dialog">
                    <h3>Hatecore</h3> 
                </a>
            </div>
            <div id="ball-192" class="ui-block-a">
                <a href="#dialogPage_40" data-transition="slidedown" data-rel="dialog">
                    <h3>Rapcore</h3> 
                </a>
            </div>
            <div id="ball-202" class="ui-block-b">
                <a href="#dialogPage_41" data-transition="slidedown" data-rel="dialog">
                    <h3>Taqwacore</h3> 
                </a>
            </div>
            <div id="ball-212" class="ui-block-a">
                <a href="#dialogPage_42" data-transition="slidedown" data-rel="dialog">
                    <h3>Jazzcore</h3> 
                </a>
            </div>
            <div id="ball-222" class="ui-block-b">
                <a href="#dialogPage_43" data-transition="slidedown" data-rel="dialog">
                    <h3>Nintendocore</h3> 
                </a>
            </div>
            <div id="ball-232" class="ui-block-a">
                <a href="#dialogPage_44" data-transition="slidedown" data-rel="dialog">
                    <h3>Skacore</h3> 
                </a>
            </div>
            <div id="ball-242" class="ui-block-b">
                <a href="#dialogPage_45" data-transition="slidedown" data-rel="dialog">
                    <h3>Digital Hardcore</h3> 
                </a>
            </div>
        </div>
    </div>
</div>
</div>


<div data-role="page" id="dialogPage_27"  data-dialog="true">
   <h1 class="verplaatsing">Noisecore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("noisecore");
             ?>
   </div>
   <?php
      getMore("noisecore");
          ?>
</div>

<div data-role="page" id="dialogPage_28"  data-transition="slidedown" data-rel="dialog" data-prefetch="true" >
   <h1 class="verplaatsing">Queercore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("queercore");
             ?>
   </div>
   <div class="verplaatsing">
      <h2>Eerste Bands</h2>
      <p>Pansy Division<br />
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_29"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Thrashcore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("thrashcore");
             ?>
   </div>
   <?php
      getMore("thrashcore");
          ?>
</div>
</div>
<div data-role="page" id="dialogPage_30"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Frenchcore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("speedcore");
             ?>
   </div>
   <?php
      getMore("speedcore");
          ?>
</div>
</div>
<div data-role="page" id="dialogPage_31"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Speedcore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("speedcore");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_32"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Terrorcore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("terrorcore");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_33"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Crunkcore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("crunkcore");
             ?>
   </div>
   <div class="verplaatsing">
      <h2>Eerste Bands</h2>
      <p>3OH!3<br/>
         Breathe Carolina<br/>
         Brokencyde<br/>
         Family Force 5 <br/>Hollywood Undead <br/>Blood on the Dance Floor<br/> Millionaires<br/>
      </p>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_34"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Britcore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("britcore");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_35"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Horrorcore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("horrorcore");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_36"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Nerdcore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("nerdcore");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_37"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Breakcore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("breakcore");
             ?>
   </div>
   <?php
      getMore("breakcore");
          ?>
</div>
</div>
<div data-role="page" id="dialogPage_38"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Raggacore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("raggacore");
             ?>
   </div>
   <?php
      getMore("raggacore");
          ?>
</div>
</div>
<div data-role="page" id="dialogPage_39"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Hatecore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("hatecore");
             ?>
   </div>
   <?php
      getMore("hatecore");
          ?>
</div>
</div>
<div data-role="page" id="dialogPage_40"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Rapcore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("rapcore");
             ?>
   </div>
   <?php
      getMore("rapcore");
          ?>
</div>
</div>
<div data-role="page" id="dialogPage_41"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Taqwacore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("taqwacore");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_42"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Jazzcore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("jazzcore");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_43"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Nintendocore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("nintendocore");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_44"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Skacore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("skacore");
             ?>
   </div>
</div>
</div>
<div data-role="page" id="dialogPage_45"  data-transition="slidedown" data-rel="dialog">
   <h1 class="verplaatsing">Digital Hardcore</h1>
   <div role="main" class="ui-content"> 
      <?php
         getData("digitalhardcore");
             ?>
   </div>
</div>
</div>