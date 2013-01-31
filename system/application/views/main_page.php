<!doctype html>
    <head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<meta http-equiv="expires" content="0">

    <title>Synapse 2013</title>
    <!--[if IE]>
<script src="http://rhtml5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <link rel="stylesheet" type='text/css' href="<? echo base_url(); ?>css/jpreloader.css" />
    <link rel='stylesheet' type='text/css' href='css/style.css' />
    <link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />

    <!--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
    <script type='text/javascript' src='<? echo base_url(); ?>js/jquery-1.8.3.min.js'></script>
    <script>
      var tag = document.createElement('script');
      tag.src = "http://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: 'xD5Xyzmpi18',
		  playerVars :{
			'rel' :0,
		  'showinfo':0,
		  'autohide':1,
		  'theme':'dark',
		  'color':'white'
		  }
        });
      }
      function stopVideo(){
        player.stopVideo();}
    </script>
    <script type='text/javascript' src='<? echo base_url(); ?>js/jpreloader.min.js'></script>
    <script type='text/javascript' src='<? echo base_url(); ?>js/jquery.easing.min.js'></script>
    <script type="text/javascript" src="<? echo base_url(); ?>js/jquery.hoverdir.js"></script>
    <script type='text/javascript' src='<? echo base_url(); ?>js/infogrid.js'></script>
    <script type='text/javascript' src='<? echo base_url(); ?>js/script.js'></script>
    <script src="<? echo base_url(); ?>js/jquery.skitter.min.js"></script>
    <script src="<? echo base_url(); ?>js/jquery.animate-colors-min.js"></script>
    </head>
    <body>
<audio controls id="music" loop>
  <source src="audio.mp3" type="audio/mpeg">
  <!--[if lt IE 9]><bgsound src="'+mp3snd+'" loop="1"><![endif]--></audio>
<div id="page-wrap">
  <div class="cleft">
    <dl class="cl">
      <dt id="events" class="poster">
        <div id="tag" class="at" style="top:60%;">
          <div Cid="edata" class="rsd"> Events detail comes here</div>
          <span class="clt" id="ftag" style="float:right;border-right:none;">Events
          <div class="v">View</div>
          <div class="clo"></div>
          <div id="ed" class="data">
            <ul id="eventlabels">
              <li>Cultural</li>
              <li>Technical</li>
              <li>Online</li>
              <li>Workshop</li>
            </ul>
          </div>
          </span></div>
      </dt>
      <dt id="aboutus" class="poster">
        <div id="tag" class="at" style="top:30%;">
          <div id="asd" class="rsd">
            <p>Synapse is the annual techno-cultural festival of DA-IICT. Started way back in the 2004, the festival is in its 9th edition now and has become the most awaited days of the year for the college community.</p>
            <br/>
            <p> Synapse is a celebration – a celebration of culture, technology and life. It is a medium through which the youth can showcase their talents – be it through their art, culture or their technological skills.</p>
            <br/>
            <p> The festival draws the best talents of India to its competitions, covering areas ranging from music, art and drama to literary games and quizzing. Adding to it, there are events focused on building Social Responsibility & Environmental Awareness amongst the youth. </p>
            <br/>
            <p> Artists and Bands like The Raghu Dixit Project, Agnee Band, Indian Ocean, Tochi Raina, Aditya Narayan, Dr. Kumar Vishwas, Demonic Resurrection, Mother Jane, Bhayanak Maut etc.. have already performed in Synapse, with footfall of over 12,000 in around 4-days. This year Synapse promises to be much more fun, entertaining and exuberant !!</p>
            <br/>
            <p> Theme : Synapse 2013 is all ready to mesmerize you with its “Magic and Spells” !!</p>
            <div id="yttrailer"><br>
              Trailer</div>
          </div>
          <span class="clt" id="ftag" style="float:right;border-right:none;">About
          <div class="v">View</div>
          <div class="clo"></div>
          <div id="ad" class="data"><a href="http://www.daiict.ac.in/daiict/index.html" target="_blank" title="DA-IICT"><img src="images/DA-IICT-logo.png" style="position:relative;left:37%;margin:0% auto 8% auto;" ></a>Dhirubhai Ambani Institute of Information & Communication Technology (DA-IICT), a non-profit educational society setup at Gandhinagar, the capital city of Gujarat in 2001 is the only advanced institute named after the Late Dhirubhai Ambani, the founder of Reliance group, in pursuance of a MoU entered into with the Govt. of Gujarat, to impart information and communication technology education of international standards.</div>
          </span></div>
      </dt>
    </dl>
  </div>
  <div class="crigth">
    <dl class="cr">
      <dt id="pronites" class="poster">
        <div id="tag" class="at" style="top:60%">
          <div id="pnd" class="rsd"></div>
          <span id="ftag" class="crt" style="border-left:none;">Pronites
          <div class="v">View</div>
          <div class="clo"></div>
          <div id="pd" class="data">
            <ul id="proniteslabels">
              <li id="ram">Rampage</li>
              <li id="rag">Ragnarock</li>
              <li id="cyn">Cynosure</li>
            </ul>
          </div>
          </span></div>
      </dt>
      <dt id="sponsors" class="poster">
        <div id="tag" class="at" style="top:50%"><span id="ftag" class="crt" style="border-left:none;">Sponsors
          <div class="v">View</div>
          <div class="clo"></div>
          <div id="sd" class="data">
            <!--<div class="spons">
              <h1>Title Sponsers</h1>
              <h2>Name</h2>
              <h1>Associate Sponsers</h1>
              <h2>Name</h2>
              <h1>Banking Partner</h1>
              <h2>Bank Of Baroda</h2>
              <h1>Radio Partner</h1>
              <h2>Radio Mirchi</h2>
              <h1>Tourism Partner</h1>
              <h2>Name</h2>
              <h1>NGO Partner</h1>
              <h2>Name</h2>
            </div>-->
            <label id="viewsponsor12" style="padding:0px 0 0px 20px;position:relative;top:10px;cursor:pointer;">Synapse 2012 Sponsors</label><br />
			<label id="viewsponsor13" style="padding:0px 0 0px 20px;position:relative;top:10px;cursor:pointer;">Synapse 2013 Sponsors</label>
          </div>
          </span></div>
      </dt>
      <dt id="teasar" class="poster">
        <div id="tag" class="at" style="top:15%"><span id="ftag" class="crt" style="border-left:none;">Youth Run
          <div class="v">View</div>
          <div class="clo"></div>
          <div id="yd" class="data">
            <div style="padding:5px;"><br>
              <h2>VISION</h2>
              <br>
              Youth run provides a platform for the youth to get together and do something out of thedaily routine. By making the youth change their lifestyle even for a day, we can say we bringabout a change in the positive direction. Creating energy in the process, the run provides anopportunity to quit waiting for the ‘moment of glory’ and start working hard towards theideas that one believes are right and hence realizing their true potential.</div>
            <br >
            <label id="viewyouth">Click to View Site</label>
          </div>
          </span></div>
      </dt>
    </dl>
  </div>
</div>
<div id="footer">
	<a href="index.php/accomodation" target="_blank">
  <div class="navf">ACCOMODATION</div></a>
  <div class="navf" id="conc">CONTACT</div>
  <div class="navf" id="gallc">GALLERY</div>
  <a href="http://facebook.com/SynapseDAIICT" target="_blank" title="Synapse on FB">
  <div id="fb"></div>
  </a><a href="http://youtube.com/SynapseDAIICT" target="_blank" title="Synapse on Youtube">
  <div id="yt"></div>
  </a>
  <div class="navf" id="mapc">MAPS</div>
  	<a href="index.php/alumni" target="_blank">
  <div class="navf">ALUMNI</div></a>
  <div class="navf" id="crc">CREDITS</div>
  
</div>
<div id="presents">
  <div id="topLoader" class="loader">
    <ul class="bokeh">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <div id="dp">DAIICT Presents</div>
  <div id="syn"></div>
  <div id="syn1"></div>
  <div id="dt">28th February - 3rd March</div>
</div>
<div id="content">
  <div id="eventdata" class="indata">
    <div style="position:fixed;top:0px;left:0px;width:100%;height:100%;">
      <div class="list">
        <div id="cult">
          <div class="cont">
            <div><br>
              <br>
              <div class="cat">Masquerade</div>
              <span class="item cnam">Proscenium<label class="sub">Stage Play</label></span><span class="item cnam"  style="margin-left:0">Naiv&#232;te<label class="sub">Street Play</label></span><span class="item cnam" style="margin-left:0">Instinct<label class="sub">On The Spot</label></span><span class="item cnam" style="margin-left:0">Felicity<label class="sub">Musical Play & Mime</label></span><span class="item cnam" style="margin-left:0">Vibrant<label class="sub">Mimicry</label></span>
              <div class="cat">Zing</div>
              <span class="item cnam">Rhapsody<label class="sub">Music Mantra</label></span><span class="item cnam">Hip Hop Street<label class="sub">Let's Dance</label></span><span class="item cnam">Footloose<label class="sub">Western Dance</label></span><span class="item cnam">Naach<label class="sub">Indian Dance</label></span>
              <div class="cat">Knotts N Crosses</div>
              <span class="item cnam">HeadRush<label class="sub">Quiz</label></span><!--<span class="item cnam">JAM<label class="sub">Quiz&amp;Debate</label></span><span class="item cnam">Mizmaze<label class="sub">Quiz&amp;Debate</label></span>--><span class="item cnam">Parley<label class="sub">Debate</label></span>
              <div class="cat cnam">D Lounge</div>
              <div class="cat cnam">Synapcity</div>
            </div>
          </div>
          <div class="eventpop">
            <div class="en"></div>
            <div id="epc">Close</div>
            <div class="d"></div>
          </div>
          <div class="overlay"></div>
        </div>
      </div>
      <div class="list">
        <div id="tech">
          <div class="cont">
            <div style="overflow-x:auto;height:inherit;"><br>
              <div class="cat">Odyssey</div>
              <span class="item tnam">Rekriti<label class="sub">Innovate, Ideate & Implement</label></span><span class="item tnam">Inc<label class="sub">The B-Plan Contest</label></span>
             <!-- <div class="cat">Nexus</div>
              <span class="item tnam">Catechize<label class="sub">Get Informationaized</label></span><span class="item tnam">Web Unleashed<label class="sub">Harness The Web</label></span>-->
              <div class="cat">Kernel</div>
              <!--<span class="item tnam">Algorythmus<label class="sub">Algo Contest</label></span><span class="item tnam">Code Mutants<label class="sub">Coder's Paradise</label></span><span class="item tnam">Collaborate<label class="sub">Electronics Geeks</label>--></span><span class="item tnam">Apps Dreamer<label class="sub">Build Your Own App</label></span><span class="item tnam">Blind C<label class="sub">Blindfolded Coding</label></span>
              <div class="cat">Surge</div>
              <span class="item tnam">Vista<label class="sub">Make Your Movie</label></span><span class="item tnam">Synapshot<label class="sub">Click Away!</label></span><!--<span class="item tnam">Anzeige<label class="sub">Innovate, Ideate & Implement</label></span>--><span class="item tnam">PSD<label class="sub">T-Shirt Design Contest</label></span>
              <div class="cat">Overclock</div>
              <span class="item tnam">Excogitate<label class="sub">Quiz&amp;Debate</label></span><span class="item tnam">Forage<label class="sub">Junkyard Creativity</label></span><span class="item tnam">Imagineer<label class="sub">Innovate, Ideate & Implement</label></span>
              <div class="cat">Battledrome</div>
              <span class="item tnam">Counterstrike</span><span class="item tnam">NFS</span><span class="item tnam">Age of Empires</span><span class="item tnam">FIFA</span><span class="item tnam">DOTA</span><br>
              <br>
              <br>
              <br>
            </div>
          </div>
          <div class="eventpop">
            <div class="en"></div>
            <div id="ept">Close</div>
            <div class="d"></div>
          </div>
        </div>
      </div>
      <div class="list">
        <div id="work">
          <div class="cont">
            <div style="overflow-x:auto;height:inherit;"><br>
              <br>
              <div class="cat onam">Googlock Holmes</div>
              <div class="cat onam">CSI</div>
              <div class="cat onam">Solution</div>
              <div class="cat onam">Bullz Bear</div>
              <div class="cat onam">Crazy Ganith</div>
              <div class="cat onam">Team Twister</div>
              <div class="cat onam">Cozener</div>
            </div>
          </div>
          <div class="eventpop">
            <div class="en"></div>
            <div id="epw">Close</div>
            <div class="d"></div>
          </div>
        </div>
      </div>
      <div class="list">
        <div id="online">
          <div class="cont">
            <div class="cat wnam" style="position:releative;top:30%;left:30%;font-size:3em;">TechDefence<label class="sub">Ethical Hacking</label></div>
          </div>
          <div class="eventpop">
            <div class="en"></div>
            <div id="epo">Close</div>
            <div class="d"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="sponserdata13" class="indata"><span style="font-size:5em;color:white;"> Coming Soon</span> </div>
  <div id="yrun" class="indata"></div>
  <div id="sponserdata12" class="indata">
    <ul id="da-thumbs" class="da-thumbs">
      <li><a><img src="images/sponsors/1.png"/>
        <div><span>Reliance</span></div>
        </a></li>
      <li><a href="http://www.radiomirchi.com/" target="_blank"><img src="images/sponsors/2.png"/>
        <div><span>Radio Mirchi</span></div>
        </a></li>
      <li><a href="http://www.audi.in/" target="_blank"><img src="images/sponsors/3.png"/>
        <div><span>Audi</span></div>
        </a></li>
      <li><a href="http://www.heromotocorp.com/" target="_blank"><img src="images/sponsors/4.png"/>
        <div><span>Hero</span></div>
        </a></li>
      <li><a><img src="images/sponsors/5.png"/>
        <div><span>Fortune</span></div>
        </a></li>
      <li><a href="http://www.ongcindia.com/" target="_blank"><img src="images/sponsors/6.png"/>
        <div><span>ONGC</span></div>
        </a></li>
      <li><a href="http://www.ganeshhousing.com/" target="_blank"><img src="images/sponsors/7.png"/>
        <div><span>Ganesh Housing</span></div>
        </a></li>
      <li><a href="http://time4education.com/default_afterbanner.asp" target="_blank"><img src="images/sponsors/8.png"/>
        <div><span>T.I.M.E.</span></div>
        </a></li>
      <li><a href="http://www.cafecoffeeday.com/" target="_blank"><img src="images/sponsors/9.png"/>
        <div><span>C.C.D.</span></div>
        </a></li>
      <li><a href="http://www.bankofbaroda.co.in" target="_blank"><img src="images/sponsors/10.png"/>
        <div><span>Bank of Baroda</span></div>
        </a></li>
      <li><a href="http://www.birlasunlife.com/" target="_blank"><img src="images/sponsors/11.png"/>
        <div><span>Birla Sun</span></div>
        </a></li>
      <li><a href="http://spykar.com/" target="_blank"><img src="images/sponsors/12.png"/>
        <div><span>Spykar</span></div>
        </a></li>
      <li><a href="http://www.pepsi.com/" target="_blank"><img src="images/sponsors/13.png"/>
        <div><span>Pepsi</span></div>
        </a></li>
      <li><a><img src="images/sponsors/14.png"/>
        <div><span>Peta</span></div>
        </a></li>
      <li><a href="http://www.wildcraft.in/" target="_blank"><img src="images/sponsors/15.png"/>
        <div><span>WildCraft</span></div>
        </a></li>
      <li><a href="http://www.shreebalajiconstruction.com/" target="_blank"><img src="images/sponsors/16.png"/>
        <div><span>shree balaji</span></div>
        </a></li>
      <li><a href="http://www.endeavorcareers.com/home.php" target="_blank"><img src="images/sponsors/17.png"/>
        <div><span>Endeavor</span></div>
        </a></li>
      <li><a href="http://www.clarislifesciences.com/" target="_blank"><img src="images/sponsors/18.png"/>
        <div><span>Claris</span></div>
        </a></li>
      <li><a href="https://www.tie.org/" target="_blank"><img src="images/sponsors/19.png"/>
        <div><span>T.I.E.</span></div>
        </a></li>
      <li><a href="http://www.tatasteel.com/" target="_blank"><img src="images/sponsors/20.png"/>
        <div><span>Tata Steel</span></div>
        </a></li>
      <li><a><img src="images/sponsors/21.png"/>
        <div><span>Harsha</span></div>
        </a></li>
      <li><a><img src="images/sponsors/22.png"/>
        <div><span></span></div>
        </a></li>
      <li><a href="http://www.freecharge.in" target="_blank"><img src="images/sponsors/23.png"/>
        <div><span>Freecharge</span></div>
        </a></li>
      <li><a href="http://www.studyinholland.nl/" target="_blank"><img src="images/sponsors/24.png"/>
        <div><span>Study in Holland</span></div>
        </a></li>
      <li><a href="http://travelplaza.biz" target="_blank"><img src="images/sponsors/25.png"/>
        <div><span>Travel Plaza</span></div>
        </a></li>
      <li><a href="http://www.campusfrance.org/en" target="_blank"><img src="images/sponsors/26.png"/>
        <div><span>Campus France</span></div>
        </a></li>
      <li><a href="http://www.shiamak.com/" target="_blank"><img src="images/sponsors/27.png"/>
        <div><span>Shiamak</span></div>
        </a></li>
      <li><a><img src="images/sponsors/28.png"/>
        <div><span>Sintex</span></div>
        </a></li>
      <li><a href="http://flipkart.com/" target="_blank"><img src="images/sponsors/29.png"/>
        <div><span>Flipkart</span></div>
        </a></li>
      <li><a><img src="images/sponsors/30.png"/>
        <div><span>T.G.B.</span></div>
        </a></li>
      <li><a href="http://www.open-silicon.com/" target="_blank"><img src="images/sponsors/31.png"/>
        <div><span>Open Silicon</span></div>
        </a></li>
      <li><a href="http://www.codechef.com" target="_blank"><img src="images/sponsors/32.png"/>
        <div><span>CodeChef</span></div>
        </a></li>
      <li><a href="http://www.dominos.co.in" target="_blank"><img src="images/sponsors/33.png"/>
        <div><span>Dominos</span></div>
        </a></li>
      <li><a><img src="images/sponsors/34.png"/>
        <div><span>Necked Jeans</span></div>
        </a></li>
      <li><a href="http://www.iocl.com/" target="_blank"><img src="images/sponsors/35.png"/>
        <div><span>Indian oil</span></div>
        </a></li>
    </ul>
  </div>
  <div id="trail">
    <div id="player"></div>
  </div>
  <!-- <div id="register"><iframe id="reg" src="index.php/register" width="100%" height="100%" frameborder="0" ></iframe></div>--></div>
<div id="mainclose"></div>
<div id="credit" class="pop">
  <div class="close"></div>
  CREDIT<br/>
  Anuj Kosambi<br/>
  Jay Mehta<br/>
  Nilesh Suthar<br/>
</div>
<div id="maps" class="pop">
  <div class="close"></div>
  <iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=DA-IICT,+Gujarat,+India&aq=0&oq=daiic&sll=35.101934,-95.712891&sspn=40.301301,86.572266&t=h&ie=UTF8&hq=DA-IICT,+Gujarat,+India&ll=23.190665,72.628384&spn=0.009467,0.013733&z=16&iwloc=A&output=embed"></iframe>
  <br/>
  <small><a href="https://maps.google.com/maps?f=q&source=embed&hl=en&geocode=&q=DA-IICT,+Gujarat,+India&aq=0&oq=daiic&sll=35.101934,-95.712891&sspn=40.301301,86.572266&t=h&ie=UTF8&hq=DA-IICT,+Gujarat,+India&ll=23.190665,72.628384&spn=0.009467,0.013733&z=16&iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>
<div id="gallery" class="pop">
  <div class="box_skitter box_skitter_large">
    <ul class="box_skitter_ul">
    </ul>
  </div>
</div>
<div id="contact" class="pop">
  <div class="close"></div>
  <div>
    <table id="conmenu">
      <tr>
        <td id="convener">Convener</td>
      </tr>
      <tr>
        <td id="dconvener">Deputy Convener</td>
      </tr>
      <tr>
        <td id="mentor">Mentor</td>
      </tr>
      <tr>
        <td id="prm">PR/Marketing</td>
      </tr>
      <tr>
        <td id="sponsorship">Sponsorship</td>
      </tr>
      <tr>
        <td id="hospital">Hospitality</td>
      </tr>
      <tr>
        <td id="eventm">Event Management</td>
      </tr>
    </table>
    <div id="condata"></div>
  </div>
</div>
</body>
</html>