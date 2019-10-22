 <!DOCTYPE html>
    <html>
          <head>
              <!--Import Google Icon Font-->
              <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
              <!--Import materialize.css-->
              <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen,projection"/>      
              <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          </head>
          <body>
            <section id="nav-bar">
              <ul id="dropdown1" class="dropdown-content" stlye="top:100px">
                <li><a href="#!">one</a></li>
                <li class="divider"></li>
                <li><a href="#!">two</a></li>
                <li class="divider"></li>
                <li><a href="#!">three</a></li>
              </ul>
              <nav>
                <div class="nav-wrapper red darken-4">
                  <a href="#!" class="brand-logo">Logo</a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Beranda</a></li>
                    <li><a href="sass.html">Tentang</a></li>
                    <li><a href="badges.html">Akademik</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
                  </ul>
                </div>
              </nav>
            </section>
            <section id="first">
              
              <div class="slider fullscreen" style="position:absolute;">
                <ul class="slides" >
                  <li>
                    <img src="sttsfirst.jpg"> <!-- random image -->
                    <div class="caption center-align">
                      <h3>This is our big Tagline!</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="sttsfirst.jpg"> <!-- random image -->
                    <div class="caption left-align">
                      <h3>Left Aligned Caption</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="sttsfirst.jpg"> <!-- random image -->
                    <div class="caption right-align">
                      <h3>Right Aligned Caption</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  
                </ul>
              </div>
                <nav>
                  <div class="nav-wrapper none" style="z-index:2">
                    <a href="#!" class="brand-logo">STTS</a>
                    <ul class="right hide-on-med-and-down" style="font-weight:bold;padding-right:100px;padding-top:30px">
                      <li><a href="sass.html"   style="font-size:15pt">Beranda</a></li>
                      <li><a href="sass.html"   style="font-size:15pt">Tentang</a></li>
                      <li><a href="badges.html" style="font-size:15pt">Akademik</a></li>
                      </ul>
                  </div>
                </nav>
              </section>
            </section>
            <script src="jq.js"></script>
            <script src="../materialize/js/materialize.js"></script>
            <script src="script.js"></script>
        </body>
    </html>
