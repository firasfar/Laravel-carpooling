<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Who We Are, Who We Are, Who We Are, Who We Are, Who We Are, Try this now!, User Interface, Web Design, COMING SOON, Premium Plans, $0, $29, $59, $79">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{asset('nicepage.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('Accueil.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-6a41"><div class="u-clearfix u-sheet u-sheet-1">
    @auth
    <a href="{{ url('/dashboard') }}" class="u-border-none u-btn u-btn-round u-button-style u-hover-custom-color-2 u-palette-3-base u-radius-50 u-btn-1"> Dashboard</a>
    @else
    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="u-border-none u-btn u-btn-round u-button-style u-hover-custom-color-2 u-palette-3-base u-radius-50 u-btn-1"> registre</a>
        @endif
        <a href="{{ route('login') }}" class="u-border-none u-btn u-btn-round u-button-style u-hover-custom-color-1 u-palette-3-base u-radius-50 u-btn-2">login</a>
        @endauth
         <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{route('Accueil')}}" style="padding: 10px 50px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{route('About')}}" style="padding: 10px 50px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{route('Contact')}}" style="padding: 10px 50px;">Contact</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.html">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section id="carousel_c119" class="u-carousel u-slide u-block-2ced-1" data-u-ride="carousel" data-interval="5000">
      <ol class="u-absolute-hcenter u-carousel-indicators u-block-2ced-2">
        <li data-u-target="#carousel_c119" data-u-slide-to="0" class="u-active u-grey-30"></li>
        <li data-u-target="#carousel_c119" class="u-grey-30" data-u-slide-to="1"></li>
        <li data-u-target="#carousel_c119" class="u-grey-30" data-u-slide-to="2"></li>
        <li data-u-target="#carousel_c119" class="u-grey-30" data-u-slide-to="3"></li>
        <li data-u-target="#carousel_c119" class="u-grey-30" data-u-slide-to="4"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-align-left u-carousel-item u-clearfix u-palette-5-base u-section-1-1" src="">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
              <div class="u-layout">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                      <h1 class="u-custom-font u-font-playfair-display u-text u-title u-text-1">Who We Are</h1>
                      <p class="u-large-text u-text u-text-variant u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                      <a href="https://nicepage.one" class="u-border-2 u-border-grey-dark-1 u-btn u-btn-rectangle u-button-style u-none u-btn-1">read more</a>
                    </div>
                  </div>
                  <div class="u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-1" data-image-width="400" data-image-height="400">
                    <div class="u-container-layout u-container-layout-2"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-align-left u-carousel-item u-clearfix u-image u-section-1-2" src="" data-image-width="6240" data-image-height="4160">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
              <div class="u-layout">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                      <h1 class="u-custom-font u-font-playfair-display u-text u-title u-text-1">Who We Are</h1>
                      <p class="u-large-text u-text u-text-variant u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                      <a href="https://nicepage.one" class="u-border-2 u-border-grey-dark-1 u-btn u-btn-rectangle u-button-style u-none u-btn-1">read more</a>
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-right-cell u-shape-rectangle u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-align-left u-carousel-item u-clearfix u-image u-section-1-3" src="" data-image-width="5129" data-image-height="3424">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
              <div class="u-layout">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                      <h1 class="u-custom-font u-font-playfair-display u-text u-title u-text-1">Who We Are</h1>
                      <p class="u-large-text u-text u-text-variant u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                      <a href="https://nicepage.one" class="u-border-2 u-border-grey-dark-1 u-btn u-btn-rectangle u-button-style u-none u-btn-1">read more</a>
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-right-cell u-shape-rectangle u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-align-left u-carousel-item u-clearfix u-image u-section-1-4" src="" data-image-width="7750" data-image-height="5000">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
              <div class="u-layout">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                      <h1 class="u-custom-font u-font-playfair-display u-text u-title u-text-1">Who We Are</h1>
                      <p class="u-large-text u-text u-text-variant u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                      <a href="https://nicepage.one" class="u-border-2 u-border-grey-dark-1 u-btn u-btn-rectangle u-button-style u-none u-btn-1">read more</a>
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-right-cell u-shape-rectangle u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-align-left u-carousel-item u-clearfix u-image u-section-1-5" src="" data-image-width="7952" data-image-height="5304">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
              <div class="u-layout">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                      <h1 class="u-custom-font u-font-playfair-display u-text u-title u-text-1">Who We Are</h1>
                      <p class="u-large-text u-text u-text-variant u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                      <a href="https://nicepage.one" class="u-border-2 u-border-grey-dark-1 u-btn u-btn-rectangle u-button-style u-none u-btn-1">read more</a>
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-right-cell u-shape-rectangle u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-body-alt-color u-block-2ced-3" href="#carousel_c119" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-body-alt-color u-block-2ced-4" href="#carousel_c119" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-ce15">
      <div class="u-align-center u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Try this now!</h2>
        <p class="u-text u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        <a href="#" class="u-btn u-button-style u-grey-90 u-btn-1">Read More</a>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-1c86">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-align-center u-black u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-layout-cell-1" src="">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h2 class="u-text u-text-default u-text-1">User Interface</h2>
                  <p class="u-text u-text-2">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
                  <a href="#" class="u-btn u-button-style u-palette-1-base u-btn-1">learn more</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-white u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h2 class="u-text u-text-default u-text-3">Web Design</h2>
                  <p class="u-text u-text-4">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
                  <a href="#" class="u-btn u-button-style u-palette-1-base u-btn-2">learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-4" id="sec-1486">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1"> COMING SOON</h2>
        <p class="u-large-text u-text u-text-variant u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        <div class="u-countdown u-countdown-1" data-target-date="Mon, 31 Jan 2022 02:11:18 GMT" data-type="to-date" data-for="everyone" data-time-left="90m" data-timer-id="dfea" data-target-number="100" data-direction="down" data-start-time="Sun, 23 Jan 2022 13:41:14 GMT" data-frequency="10s" data-show-message="false">
          <div class="u-countdown-wrapper u-spacing-40">
            <div class="u-countdown-item u-countdown-years u-hidden u-spacing-15 u-countdown-item-1">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-1"><span class="u-countdown-number">0</span><span class="u-countdown-number u-hidden">0</span></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-1">Years</div>
            </div>
            <div class="u-countdown-separator u-hidden u-countdown-separator-1"></div>
            <div class="u-countdown-days u-countdown-item u-spacing-15 u-countdown-item-2">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-2"><span class="u-countdown-number">7</span><span class="u-countdown-number u-hidden">0</span><span class="u-countdown-number u-hidden">0</span></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-2">Days</div>
            </div>
            <div class="u-countdown-separator u-countdown-separator-2"></div>
            <div class="u-countdown-hours u-countdown-item u-spacing-15 u-countdown-item-3">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-3"><span class="u-countdown-number">1</span><span class="u-countdown-number">2</span></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-3">Hours</div>
            </div>
            <div class="u-countdown-separator u-countdown-separator-3"></div>
            <div class="u-countdown-item u-countdown-minutes u-spacing-15 u-countdown-item-4">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-4"><span class="u-countdown-number">3</span><span class="u-countdown-number">0</span></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-4">Minutes</div>
            </div>
            <div class="u-countdown-separator u-countdown-separator-4"></div>
            <div class="u-countdown-item u-countdown-seconds u-spacing-15 u-countdown-item-5">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-5"><span class="u-countdown-number">0</span><span class="u-countdown-number">0</span></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-5">Seconds</div>
            </div>
            <div class="u-countdown-separator u-hidden u-countdown-separator-5"></div>
            <div class="u-countdown-item u-countdown-numbers u-hidden u-spacing-15 u-countdown-item-6">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-6"><span class="u-countdown-number">0</span><span class="u-countdown-number">0</span><span class="u-countdown-number">1</span><span class="u-countdown-number">0</span><span class="u-countdown-number">0</span></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-6">Items</div>
            </div>
          </div>
          <div class="u-countdown-message u-hidden">
            <p>Sorry, the time is up.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-gradient u-section-5" id="carousel_06a8">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-body-alt-color u-text-1">Premium Plans</h1>
        <p class="u-text u-text-body-alt-color u-text-2">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
        <div class="u-clearfix u-expanded-width u-gutter-16 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-palette-1-base u-radius-15 u-shape-round u-size-15 u-size-30-md u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <div class="u-align-center u-container-style u-expanded-width u-group u-radius-15 u-shape-round u-white u-group-1">
                    <div class="u-container-layout u-container-layout-2">
                      <h5 class="u-text u-text-palette-1-base u-text-3">Free</h5>
                      <h2 class="u-custom-font u-font-arial u-text u-text-palette-1-base u-text-4">
                        <span style="font-weight: 400;">$</span>0
                      </h2>
                      <p class="u-text u-text-palette-1-base u-text-5">per mounth</p>
                    </div>
                  </div>
                  <p class="u-text u-text-palette-1-light-3 u-text-6">15 Users&nbsp;<br>Feature 2 <br>Feature 3 <br>Feature 4
                  </p>
                  <a href="https://nicepage.com/k/projects-website-templates" class="u-active-palette-1-light-2 u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-radius-50 u-text-palette-1-base u-white u-btn-1">get plan</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-palette-2-base u-radius-15 u-size-15 u-size-30-md u-layout-cell-2">
                <div class="u-container-layout u-container-layout-3">
                  <div class="u-align-center u-container-style u-expanded-width u-group u-radius-15 u-shape-round u-white u-group-2">
                    <div class="u-container-layout u-container-layout-4">
                      <h5 class="u-text u-text-palette-2-base u-text-7">Plus</h5>
                      <h2 class="u-custom-font u-font-arial u-text u-text-palette-2-base u-text-8">
                        <span style="font-weight: 400;">$</span>29
                      </h2>
                      <p class="u-text u-text-palette-2-base u-text-9">per mounth</p>
                    </div>
                  </div>
                  <p class="u-text u-text-palette-1-light-3 u-text-10">15 Users&nbsp;<br>Feature 2 <br>Feature 3 <br>Feature 4
                  </p>
                  <a href="https://nicepage.com/c/real-estate-website-templates" class="u-active-palette-2-light-2 u-btn u-btn-round u-button-style u-hover-palette-2-light-2 u-radius-50 u-text-palette-2-base u-white u-btn-2">get plan</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-palette-3-base u-radius-15 u-size-15 u-size-30-md u-layout-cell-3">
                <div class="u-container-layout u-container-layout-5">
                  <div class="u-align-center u-container-style u-expanded-width u-group u-radius-15 u-shape-round u-white u-group-3">
                    <div class="u-container-layout u-container-layout-6">
                      <h5 class="u-text u-text-palette-3-base u-text-11">Standart</h5>
                      <h2 class="u-custom-font u-font-arial u-text u-text-palette-3-base u-text-12">
                        <span style="font-weight: 400;">$</span>59
                      </h2>
                      <p class="u-text u-text-palette-3-base u-text-13">per mounth</p>
                    </div>
                  </div>
                  <p class="u-text u-text-palette-1-light-3 u-text-14">15 Users&nbsp;<br>Feature 2 <br>Feature 3 <br>Feature 4
                  </p>
                  <a href="https://nicepage.com/website-templates" class="u-active-palette-3-light-2 u-btn u-btn-round u-button-style u-hover-palette-3-light-2 u-radius-50 u-text-palette-3-base u-white u-btn-3">get plan</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-palette-4-base u-radius-15 u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
                <div class="u-container-layout u-container-layout-7">
                  <div class="u-align-center u-container-style u-expanded-width u-group u-radius-15 u-shape-round u-white u-group-4">
                    <div class="u-container-layout u-container-layout-8">
                      <h5 class="u-text u-text-palette-4-base u-text-15">Business</h5>
                      <h2 class="u-custom-font u-font-arial u-text u-text-palette-4-base u-text-16">
                        <span style="font-weight: 400;">$</span>79
                      </h2>
                      <p class="u-text u-text-palette-4-base u-text-17">per mounth</p>
                    </div>
                  </div>
                  <p class="u-text u-text-palette-1-light-3 u-text-18">15 Users&nbsp;<br>Feature 2 <br>Feature 3 <br>Feature 4
                  </p>
                  <a href="https://nicepage.com/c/technology-html-templates" class="u-active-palette-4-light-2 u-btn u-btn-round u-button-style u-hover-palette-4-light-2 u-radius-50 u-text-palette-4-base u-white u-btn-4">get plan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-c29a"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">site de covoiturage</p>
      </div></footer>
    
  </body>
</html>