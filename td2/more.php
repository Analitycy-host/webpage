<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>API</title>
  </head>
	<style>
		* { margin:0; padding:0; }
body, div, span, p, a, img, ul, ol, li, table, th, tr, td, form, fieldset, legend, dl, dt, dd, blockquote, applet, object { border:0; }
body { 
  padding: 0 0; 
  background-color: #283339;
  font-family: "arial",sans-serif; 
  font-size: 13px;
  line-height:24px;
  color: #e8eaeb; 
  text-align: center; 
}

/* links --------------------------------------------------------------- */
a {color:#fff;}
a:link {color:#fff;}
a:hover {color:#fff; text-decoration: none;}

/* headings --------------------------------------------------------------------- */
h1, h2, h3, h4, h5, h6 { margin:15px 0 10px 0; }
h1 { font-size:200%; }
h2 { font-size:160%; font-family: 'Trebuchet MS', 'Geneva CE', lucida, sans-serif; font-weight: normal; }
h3 { font-size:120%; margin-top: 25px; font-family: 'Trebuchet MS', 'Geneva CE', lucida, sans-serif;}
h4 { font-size:120%; }
h5 { font-size:100%; }

/* layout ---------------------------------------------------------------------- */
#layout { 
  width:790px; 
  margin:0 auto; 
  text-align:left; 
}
  #container { 
  padding-top: 12px;
  }

  	/* header ------------------------------------------------------------------ */
  	#header { position:relative; padding-left: 7px;}
  
      #logo {
        font-family: Impact, 'Techno CE', sans-serif;
        font-weight: normal;
        color: #fff;
        position: relative; 
        overflow: hidden; 
        height: 110px;
        font-size:260%;
        margin: 0;
        line-height: 130px;
      }
      #logo a{
        color: #fff;
        text-decoration: none;
      }
      
      #logo .leaf {
        position: absolute; 
        left: 0; top: 20px; 
        z-index: 1; 
        width: 120px; height: 80px;
        background: url('../img/leaf.gif') 45px 5px no-repeat; 
        cursor: pointer;
      }
      
      #logo .light {
        color: #3f576e;
      }
        
    /* navigation --------------------------------------------------- */
    #nav {position:relative; z-index:2; border: 1px solid #1a2735; border-right: none; border-left: none; padding: 7px 0;}
      #nav ul {margin:0; padding:0; list-style:none;}
      	#nav ul li {float:left; display:inline; margin:0; padding:0;}
      	#nav ul li a {
      	  font-size: 19px;
      	  font-weight: bold;
          display: block; 
          color: #fff;
          text-decoration: none;
          float: left; /*\*/ float:none; 
          padding: 7px 25px 7px 7px;
          line-height: 18px;
        }
        
        #nav ul li a span {
      	  font-size: 11px;
      	  font-weight: normal;
      	  color: #67707a;
        }
        
        #nav ul li a:hover {
          background: #0a151f;
        }
      	#nav ul li#active a {
        }
  
  
  
    .content {
      float: right; 
      padding: 0 0 0 0;
      width:570px;
      z-index: 10;
    }
    .content .in{
      padding: 0 0 0 10px;
    }
  
  	/* columns ----------------------------------------------------------------- */
  	#panel-left { float:left; width:200px; }
  	.panel .in { padding: 10px; }
    
    #panel-left span  { color: #515f6a; }
    
    #panel-left p  { margin-top: 5px; }
  
  	/* footer ----------------------------------------------------------------- */
  	#footer {
      clear:both;
      height: 77px;
      margin-top: 20px;
      border-top: 1px solid #324455;
      padding:10px 3px;
      color: #a0a9b0;
      font-size: 90%;
    }
    
    #footer a {
      color: #a0a9b0;
    }
    
      #footer p { margin:0; padding-top:10px; }




/* paragraphs -------------------------------------------------------------------- */
p { margin:15px 0; }

/* tables --------------------------------------------------------------------- */
table { margin:15px 0; border: 1px solid #324455; border-collapse:collapse; border-spacing:0; font-size:100%; width: 100%;}
th { text-align:center; font-weight:bold; border: 1px solid #324455;}
th, td { padding:4px 6px; border: 1px solid #324455;}
tr.table-top {background: #425364; font-weight: bold;}

/* lists --------------------------------------------------------------------- */
ul, ol { display:block; margin:15px 0 15px 40px; }
ul ul, ul ul ul, ol ol, ol ol ol { margin:0; margin-left:20px; }
ol { list-style-type:decimal; }
ol ol { list-style-type:upper-alpha; }
ol ol ol {list-style-type:lower-alpha; }
li { display:list-item; }
ul li a { text-decoration:underline; }

/* definitions -------------------------------------------------------------------- */
dl { margin:15px 0; }
dt { font-weight:bold; }
dd { margin-left:30px; }

/* universal --------------------------------------------------------------------- */
fieldset { margin:15px 0; padding:10px; border:1px solid #CCC; }
legend { margin-left:10px; font-size:100%; font-weight:bold; color:#000; }
abbr, acronym, .help { border-bottom:1px dotted #CCC; cursor:help; }
blockquote { margin:15px 20px; font-style:italic; }
del, .del { text-decoration:line-through; }
strong, .strong { font-weight:bold; }
cite, em, q, var { font-style:italic; }
code, kbd, samp  {font-family:monospace; font-size:110%; }
hr { display:block; height:1px; margin:10px 0; padding:0; border:0 solid #CCC; background:#CCC; color:#CCC;} 
.f-left {float:left;}
.f-right {float:right;}
.a-left, tr.a-left td {text-align:left;}
.a-center, tr.a-center td {text-align:center;}
.a-right, tr.a-right td {text-align:right;}
.a-justify {text-align:justify;}
.va-top {vertical-align:top;}
.va-middle {vertical-align:middle;}
.va-bottom {vertical-align:bottom;}
.clear { clear:both; }
.box { min-height:1px; }
.box:after { display:block; visibility:hidden; clear:both; line-height:0; font-size:0; content:"."; }
.noscreen { display:none; }

.foto{  display: block;}
		</style>
  <body>
    <?php
      $json = file_get_contents('https://web.td2.info.pl/stats.json');

      $data = json_decode($json,true);
	if ($data['success'] == 'true'){
		$status = "OK";
	  echo "<center><h2>TD2 API STATS<h2></center>";
	  echo "<center>Driven: ".$data['message']['driven']." km</center>";
	  echo "<center>Routed: ".$data['message']['routed']." </center>";
	  echo "<center>rippedSwitches: ".$data['message']['rippedSwitches']."</center>";
	  echo "<center>derailments: ".$data['message']['derailments']."</center>";
	  echo "<center>skippedStopSignals: ".$data['message']['skippedStopSignals']."</center>";
	  echo "<center>radioStops: ".$data['message']['radioStops']."</center>";
	  echo "<center>kills: ".$data['message']['kills']."</center>";
	  echo "<center><h3>EU</h3></center>";
      echo "<center>TrainsOnline: ".$data['message']['onlineStats']['eu']['trainsOnline']."</center>";
	  echo "<center>sceneriesOnline: ".$data['message']['onlineStats']['eu']['sceneriesOnline']."</center>";
	  echo "<center>combined: ".$data['message']['onlineStats']['eu']['combined']."</center>";
	  echo "<center>avgSpeed: ".$data['message']['onlineStats']['eu']['avgSpeed']."</center>";
	  echo "<center><h3>CAE</h3></center>";
      echo "<center>TrainsOnline: ".$data['message']['onlineStats']['cae']['trainsOnline']."</center>";
	  echo "<center>sceneriesOnline: ".$data['message']['onlineStats']['cae']['sceneriesOnline']."</center>";
	  echo "<center>combined: ".$data['message']['onlineStats']['cae']['combined']."</center>";
	  echo "<center>avgSpeed: ".$data['message']['onlineStats']['cae']['avgSpeed']."</center>";
	  echo "<div id='usv'><center><h3>USW</h3></center></div>";
      echo "<center>TrainsOnline: ".$data['message']['onlineStats']['usw']['trainsOnline']."</center>";
	  echo "<center>sceneriesOnline: ".$data['message']['onlineStats']['usw']['sceneriesOnline']."</center>";
	  echo "<center>combined: ".$data['message']['onlineStats']['usw']['combined']."</center>";
	  echo "<center>avgSpeed: ".$data['message']['onlineStats']['usw']['avgSpeed']."</center>";
	  echo "<center><h3>US</h3></center>";
      echo "<center>TrainsOnline: ".$data['message']['onlineStats']['us']['trainsOnline']."</center>";
	  echo "<center>sceneriesOnline: ".$data['message']['onlineStats']['us']['sceneriesOnline']."</center>";
	  echo "<center>combined: ".$data['message']['onlineStats']['us']['combined']."</center>";
	  echo "<center>avgSpeed: ".$data['message']['onlineStats']['us']['avgSpeed']."</center>";
	  echo "<center><h3>RU</h3></center>";
      echo "<center>TrainsOnline: ".$data['message']['onlineStats']['ru']['trainsOnline']."</center>";
	  echo "<center>sceneriesOnline: ".$data['message']['onlineStats']['ru']['sceneriesOnline']."</center>";
	  echo "<center>combined: ".$data['message']['onlineStats']['ru']['combined']."</center>";
	  echo "<center>avgSpeed: ".$data['message']['onlineStats']['ru']['avgSpeed']."</center>";
	  echo "<center><h3>Uptime</h3></center>";
	  echo "<center>Uptime In Seconds: ".$data['message']['apiInfo']['processUptimeInSeconds']."</center>";
	  echo "<center><h3>ProcessedRequest</h3></center>";
	  echo "<center>getStationsOnline: ".$data['message']['apiInfo']['processedRequests']['http']['getStationsOnline']."</center>";
	  echo "<center>getTrainsOnline: ".$data['message']['apiInfo']['processedRequests']['http']['getTrainsOnline']."</center>";
	  echo "<center>getTimestamp: ".$data['message']['apiInfo']['processedRequests']['http']['getTimestamp']."</center>";
	  echo "<center>getGrafanaStats: ".$data['message']['apiInfo']['processedRequests']['http']['getGrafanaStats']."</center>";
	  echo "<center>getLauncherBackgrounds: ".$data['message']['apiInfo']['processedRequests']['http']['getLauncherBackgrounds']."</center>";
	  echo "<center>getLauncherReleases: ".$data['message']['apiInfo']['processedRequests']['http']['getLauncherReleases']."</center>";
	  echo "<center>readFromSWDR: ".$data['message']['apiInfo']['processedRequests']['http']['readFromSWDR']."</center>";
	  echo "<center>auth: ".$data['message']['apiInfo']['processedRequests']['http']['auth']."</center>";
	  echo "<center>getUserGroupsList: ".$data['message']['apiInfo']['processedRequests']['http']['getUserGroupsList']."</center>";
	  echo "<center>getTokenStatus: ".$data['message']['apiInfo']['processedRequests']['http']['getTokenStatus']."</center>";
	  echo "<center>getFreeDispatchers: ".$data['message']['apiInfo']['processedRequests']['http']['getFreeDispatchers']."</center>";
	  echo "<center>getFreeDrivers: ".$data['message']['apiInfo']['processedRequests']['http']['getFreeDrivers']."</center>";
	  echo "<center>getUserInfo: ".$data['message']['apiInfo']['processedRequests']['http']['getUserInfo']."</center>";
	  echo "<center>pushTD2: ".$data['message']['apiInfo']['processedRequests']['http']['pushTD2']."</center>";
	  echo "<center>setUserStats: ".$data['message']['apiInfo']['processedRequests']['http']['setUserStats']."</center>";
	  echo "<center>getDestinationDisplay: ".$data['message']['apiInfo']['processedRequests']['http']['getDestinationDisplay']."</center>";
	  echo "<center>getApiInfo: ".$data['message']['apiInfo']['processedRequests']['http']['getApiInfo']."</center>";
	  echo "<center>getTeamMembers: ".$data['message']['apiInfo']['processedRequests']['http']['getTeamMembers']."</center>";
	  echo "<center>getGameRules: ".$data['message']['apiInfo']['processedRequests']['http']['getGameRules']."</center>";
	  echo "<center><h3>mainVersion</h3></center>";
	  echo "<center>MainVersion: ".$data['message']['apiInfo']['mainVersion']."</center>";
	  echo "<br><center><a href='index.php#usv'>Mniej</a></center>";
	} else {
		echo "<center>Nie udało się pobrać informacji z API.<br>Success=False</center>";
		}

     
    ?>
	<br><br>
	<center><br>Made by wojtasss298 &copy; 2020 - <script>document.write(new Date().getFullYear())</script> <a href="https://analitycy.host">Analitycy.host</a><br><a href="https://github.com/analitycy-host">Github</a> <a href="https://discord.gg/6j8f7uwdQv">Discord</a><br>Proudly powered by <a href="https://analitycy.net">Analitycy.net</a></center>
  </body>
</html>