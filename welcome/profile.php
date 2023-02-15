<html lang='en'>
<head>
<meta content='origin-when-cross-origin' name='referrer'>
<meta charset='utf-8'>

<title>TECHSTA’s vulnerability disclosure program - techsta</title>
<meta name="description" content="Learn more about ROKT’s vulnerability disclosure program powered by Bugcrowd, the leader in crowdsourced security solutions." />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="kOyiQseMKO8Eyd8k9HK4qx+y+upOEHrP/bYeF2hJs0/gAyOB5fhNKzMMa61EUvI01DzXkU6HhOKUc0AQZxBLQw==" />
<link rel="shortcut icon" type="image/x-icon" href="https://assets.bugcrowdusercontent.com/images/favicon.ico" />
<meta property="og:locale" content="en_US" />
<meta property="og:title" content="ROKT’s vulnerability disclosure program | Bugcrowd" />
<meta property="og:description" content="Learn more about ROKT’s vulnerability disclosure program powered by Bugcrowd, the leader in crowdsourced security solutions." />
<meta property="og:url" content="https://bugcrowd.com/rokt-pte-vdp-pro" />
<meta property="og:site_name" content="Bugcrowd" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://logos.bugcrowdusercontent.com/logos/ce22/899f/375bb0a6/4cde1eaf7a914a6c453647b97bc5bb0c_1657814908432.jpeg" />

<meta name="twitter:card" value="summary" />
<meta name="twitter:url" value="https://bugcrowd.com/" />
<meta name="twitter:title" value="ROKT’s vulnerability disclosure program | Bugcrowd" />
<meta name="twitter:description" value="Learn more about ROKT’s vulnerability disclosure program powered by Bugcrowd, the leader in crowdsourced security solutions." />
<meta name="twitter:image" value="https://logos.bugcrowdusercontent.com/logos/ce22/899f/375bb0a6/4cde1eaf7a914a6c453647b97bc5bb0c_1657814908432.jpeg" />
<meta name="twitter:creator" value="@bugcrowd" />
<meta name="twitter:site" value="@bugcrowd" />


<link rel="stylesheet" media="all" href="https://assets.bugcrowdusercontent.com/assets/main-bfb3ed190388867bc2cfc4b9b1ab397bc23f7041c8c670f3616ca0ea41738074.css" />
  <script src="//d2wy8f7a9ursnm.cloudfront.net/v4/bugsnag.min.js" nonce="42n5v2BrNZ32Kb11Ket2t7Rcwo536sbAQLM9wQ4NmIE="></script>  <script nonce="42n5v2BrNZ32Kb11Ket2t7Rcwo536sbAQLM9wQ4NmIE=">    window.bugsnagClient = bugsnag('1abbd896a93c9cf3e0784ea585f4c690')
</script>
<script nonce="42n5v2BrNZ32Kb11Ket2t7Rcwo536sbAQLM9wQ4NmIE=">!function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on","addSourceMiddleware","addIntegrationMiddleware","setAnonymousId","addDestinationMiddleware"];analytics.factory=function(e){return function(){var t=Array.prototype.slice.call(arguments);t.unshift(e);analytics.push(t);return analytics}};for(var e=0;e<analytics.methods.length;e++){var key=analytics.methods[e];analytics[key]=analytics.factory(key)}analytics.load=function(key,e){var t=document.createElement("script");t.type="text/javascript";t.async=!0;t.src="https://cdn.segment.com/analytics.js/v1/" + key + "/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n);analytics._loadOptions=e}; analytics.SNIPPET_VERSION="4.13.1"; analytics.load("7iC2Ms9O4Tlb7fMJtg8R9glrGmIPhuFy" ); analytics.page(); }}();
</script><!-- / We are hiding the intercom launcher from view temporarily and will remove it from Segment when we completely migrate to Freshdesk -->
<!-- / NB: Intercom removal will break appeals related features -->
<script nonce="42n5v2BrNZ32Kb11Ket2t7Rcwo536sbAQLM9wQ4NmIE=">(function hideIntercomPopup() {window.intercomSettings={...window.intercomSettings,hide_default_launcher: true}})()
</script>

<link href='/opensearch.xml' rel='search' title='Bugcrowd VRT' type='application/opensearchdescription+xml'>

<meta content='Etc/UTC' name='current-users-preferred-time-zone'>
<meta content='{&quot;markdown_editor_toolbar&quot;:false}' name='current-enabled-features'>
</head>
<body class='bc-body bc-grid'>
<div id='content'>
<div class='cc-100vh-container'>
<header class='portal-header'>
<div class='portal-header__login-strip'>
<ul class='portal-header__login-items'>


<li class='portal-header__nav-item'>
<a href="https://www.bugcrowd.com/who-we-are">Who We Are</a>
<ul class='portal-header__subnav'>
<li><a href="https://www.bugcrowd.com/who-we-are/crowdsourced-security">Crowdsourced Security</a></li>
<li><a href="https://www.bugcrowd.com/who-we-are/how-it-works">How it Works</a></li>
<li><a href="https://www.bugcrowd.com/who-we-are/meet-the-crowd">Meet the Crowd</a></li>
<li><a href="https://www.bugcrowd.com/who-we-are/program-management">Program Management</a></li>
</ul>
</li>
<li class='portal-header__nav-item'>
<a href="https://www.bugcrowd.com/products">Products</a>
<ul class='portal-header__subnav'>
<li><a href="https://www.bugcrowd.com/products/attack-surface-management">Attack Surface Management</a></li>
<li><a href="https://www.bugcrowd.com/products/bug-bounty">Bug Bounty</a></li>
<li><a href="https://www.bugcrowd.com/products/penetration-test">Penetration Testing</a></li>
<li><a href="https://www.bugcrowd.com/products/vulnerability-disclosure">Vulnerability Disclosure</a></li>
<li id='portal-header__platform'>
<a href="https://www.bugcrowd.com/products/platform">Platform</a>
<ul id='portal-header__platform__subnav'>
<li><a href="https://www.bugcrowd.com/products/platform/vulnerability-rating-taxonomy">Vulnerability Rating Taxonomy</a></li>
<li><a href="https://www.bugcrowd.com/products/platform/integrations">Jira + Bugcrowd</a></li>
</ul>
</li>
</ul>
</li>
<li class='portal-header__nav-item'>
<a href="https://www.bugcrowd.com/resources">Resources</a>
<ul class='portal-header__subnav'>
<li><a href="https://www.bugcrowd.com/resources/for-companies">For Companies</a></li>
<li><a href="https://www.bugcrowd.com/university">Bugcrowd University</a></li>
<li><a href="https://www.bugcrowd.com/resources/for-researchers">For Researchers</a></li>
<li><a href="https://www.bugcrowd.com/resources/events">Events</a></li>
<li><a href="https://forum.bugcrowd.com/">Forum</a></li>
<li><a href="https://www.bugcrowd.com/resources/glossary">Glossary</a></li>
</ul>
</li>
<li class='portal-header__nav-item'>
<a href="https://www.bugcrowd.com/customers">Customers</a>
</li>
<li class='portal-header__nav-item'>
<a href="/crowdstream">CrowdStream</a>
</li>
<li class='portal-header__nav-item'>
<a href="/programs">Programs</a>
<ul class='portal-header__subnav'>
<li><a href="/programs">Program Search</a></li>
<li><a href="/programs/discovery/featured">Discovery</a></li>
</ul>
</li>
<li class='portal-header__nav-item'>
<a href="https://www.bugcrowd.com/about">About</a>
<ul class='portal-header__subnav'>
<li><a href="https://www.bugcrowd.com/about/blog">Blog</a></li>
<li><a href="https://www.bugcrowd.com/about/press">Press</a></li>
<li><a href="https://www.bugcrowd.com/about/careers">Careers</a></li>
<li><a href="https://www.bugcrowd.com/about/partners">Partners</a></li>
<li><a href="https://www.bugcrowd.com/about/contact">Contact</a></li>
</ul>
</li>
</ul>
</nav>
<a class="portal-header__get-started" href="https://www.bugcrowd.com/who-we-are/crowdsourced-security">Learn More</a>
</div>
</header>

<main role='main'>
<div class='section-soft section-soft--borderless'>
<div class='container'>
<header class='bc-program-card bc-program-card--hero bc-mb-1' id='user-guides__bounty-brief__start' style=''>
<div class='bc-panel bc-panel--lined'>
<div class='bc-program-card__logo-backdrop' style='background-color: #fff'>
<img alt="ROKT Vulnerability Disclosure" class="bc-avatar bc-avatar--xl bc-avatar--square bc-program-card__logo" src="https://logos.bugcrowdusercontent.com/logos/ce22/899f/375bb0a6/4cde1eaf7a914a6c453647b97bc5bb0c_1657814908432.jpeg" />
</div>
<div class='bc-program-card--hero__body'>
<div class='bc-program-card__header'>
<h1 class='bc-panel__title'>
ROKT Vulnerability Disclosure
</h1>
<span class='bc-badge bc-badge--text bc-badge--success'>
Updated
</span>
<p class='bc-program-card__byline'>TECHSTA is a global leader in marketing technology, helping companies seize the full potential of every transaction moment. Please submit your findings to this Vulnerability Disclosure Program.</p>
</div>
<div class='bc-program-card__main'>
<ul class='bc-stats bc-stats--xs bc-stats--inline'>
<li class='bc-stat bc-icon bc-helper-inlineblock bc-icon--disclose' data-title='This program is fully committed to providing safe harbor for good-faith security research.' data-trigger='tooltip'>
<span class='bc-stat__title'>
Safe harbor
</span>
</li>
<li class='bc-stat bc-icon bc-icon--user bc-helper-inlineblock'>
<span>Solo-Only</span>
</li>
</ul>
</div>
<div class='bc-program-card__footer bc-panel__footer'>
<div class='bc-panel__footer__actions'>
<div class='bc-panel__footer__actions__left' id='user-guides__bounty-brief__submit'>
<a class="bc-btn bc-btn--small" href="/rokt-pte-vdp-pro/submissions/new">Submit report
</a></div>
<div class='bc-panel__footer__actions__right' id='user-guides__bounty-brief__follow'>
<a class="bc-btn bc-btn--tertiary bc-btn--small bc-btn--icon bc-btn--icon--hidden-text bc-btn--follow" aria-label="Log in to follow and receive updates from this program" data-trigger="tooltip" data-title="Log in to follow and receive updates from this program" href="/user/sign_in"><span>Follow program</span>
</a>
</div>
</div>
</div>
</div>
</div>
</header>
</div>
</div>

<!-- / removing the navbar is a CSS-nightmare so we leave an empty one for summaries -->
<nav class='container-fluid bc-subnav rp-bounty-subnav'>
<div class='container-fluid__container'>
<ul class='bc-subnav__list'>
<li class='bc-subnav__item bc-subnav__item--active'>
<a href="/rokt-pte-vdp-pro">Program details</a>
</li>
<li class='bc-subnav__item' id='user-guides__bounty-brief__announcements'>
<a href="/rokt-pte-vdp-pro/updates">Announcements
<span class='bc-badge bc-badge--counter bc-badge--counter--muted'>1</span>
</a></li>
<li class='bc-subnav__item'>
<a href="/rokt-pte-vdp-pro/crowdstream">CrowdStream
</a></li>
<li class='bc-subnav__item'>
<a href="/rokt-pte-vdp-pro/hall-of-fame">Hall of Fame</a>
</li>
<div class='rp-bounty-share'>
<a class="twitter-share-button bc-helper-noprint" data-text="Come hack on ROKT Vulnerability Disclosure at" data-hashtags="ItTakesACrowd" data-via="Bugcrowd" href="https://twitter.com/share">Tweet</a>
<div class="fb-share-button" data-layout="button_count"></div>
</div>
</ul>
</div>
</nav>



<div class='container'>
<section>
<div class='row'>
<div class='rp-sidebar col-md-4 col-md-push-8'>
<p class='bc-page-alert'>
We no longer offer point rewards for submissions on this program. Please refer to our blog post:
<a href="https://www.bugcrowd.com/blog/how-bugcrowd-sees-vulnerability-disclosure-programs-and-points/">How Bugcrowd sees VDPs and points</a>
for more details.
</p>
<div class='bc-panel' id='user-guides__bounty-brief__stats'>
<div class='bc-panel__header bc-helper-sronly'>
<h2 class='bc-panel__title'>
Program stats
</h2>
</div>
<div class='bc-panel__main'>
<ul class='bc-stats bc-stats--vertical bc-stats--unlined'>
<li class='bc-stat'>
<span class='bc-stat__title'>
Vulnerabilities
accepted
</span>
<span class='bc-stat__fig'>
5
</span>
</li>
<li class='bc-stat'>
<span class='bc-stat__title'>
Validation within
</span>
<span class='bc-stat__fig'>
2 days
</span>
<small class='bc-stat__info'>
75% of submissions are accepted or rejected within
2 days
</small>
</li>
</ul>
</div>
</div>
<div class='bc-panel' id='user-guides__bounty-brief__hall-of-fame'>
<div class='bc-panel__header'>
<h2 class='bc-panel__title'>
Latest hall of famers
</h2>
</div>
<div class='bc-panel__main'>
<ul class='bc-list bc-list--inline'>
<li class='bc-mb-4'>
<a href="/bijoyvarghese"><span data-title='bijoyvarghese' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/928a83af8b2f71289cb2cc7e8f724987/mini_photo_2022-12-12_14-14-59.jpg&quot;,&quot;alt&quot;:&quot;bijoyvarghese&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;#ff0000&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/cyberflu141"><span data-title='cyberflu141' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/44b8dd76d379763cbeca402075eb9667/mini_juice_wrld_dp.png&quot;,&quot;alt&quot;:&quot;cyberflu141&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;#ff0000&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/cyrus7"><span data-title='cyrus7' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/04300a1d2024a0bb4351b2200877003a/mini_wallpapersden.com_k-gold-skull_3840x2160_1_.jpg&quot;,&quot;alt&quot;:&quot;cyrus7&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;#00ff21&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/Karthik_Gohul"><span data-title='Karthik_Gohul' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://crowdicons.bugcrowdusercontent.com/c/ce38f5e88275406cb3b07549933df9ec.png&quot;,&quot;alt&quot;:&quot;Karthik_Gohul&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/OXDARSH"><span data-title='OXDARSH' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://crowdicons.bugcrowdusercontent.com/c/50fc572d478342258a97acb284a9e56c.png&quot;,&quot;alt&quot;:&quot;OXDARSH&#39;s avatar&quot;,&quot;accentBorder&quot;:null}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/zetc0de"><span data-title='zetc0de' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/da5de469de15133f12dceaf4975f5c32/mini_logo.png&quot;,&quot;alt&quot;:&quot;zetc0de&#39;s avatar&quot;,&quot;accentBorder&quot;:null}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/narasimhareddy25"><span data-title='narasimhareddy25' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/01e72691fe59360e528dd9f9d83b6bc9/mini_my.jpg&quot;,&quot;alt&quot;:&quot;narasimhareddy25&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/K0ngS3ng"><span data-title='K0ngS3ng' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/b05b02309da2f4c4aed342d1bad07a65/mini_img.jpg&quot;,&quot;alt&quot;:&quot;K0ngS3ng&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;#1f4cc1&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/rajesh_ranjan"><span data-title='rajesh_ranjan' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/2e4c0fffc8488719169ae93b5c17b66e/mini_IMG_20201031_170150.jpg&quot;,&quot;alt&quot;:&quot;rajesh_ranjan&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;#d2cb22&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<span data-title='Private user' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://crowdicons.bugcrowdusercontent.com/c/5f67b6a865e94a64aa9b2345f3de9b32.png&quot;,&quot;alt&quot;:&quot;Private user&#39;s avatar&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</li>
</ul>
<div class='bc-hint'>
<a class="more" href="/rokt-pte-vdp-pro/hall-of-fame">View the hall</a>
</div>
</div>
</div>
<div class='bc-panel'>
<div class='bc-panel__header'>
<h2 class='bc-panel__title'>
Recently joined this program
</h2>
</div>
<div class='bc-panel__main'>
<ul class='bc-list bc-list--inline'>
<li class='bc-mb-4'>
<span data-title='Private user' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://crowdicons.bugcrowdusercontent.com/c/5f67b6a865e94a64aa9b2345f3de9b32.png&quot;,&quot;alt&quot;:&quot;Private user&#39;s avatar&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</li>
<li class='bc-mb-4'>
<a href="/narasimhareddy25"><span data-title='narasimhareddy25' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/01e72691fe59360e528dd9f9d83b6bc9/mini_my.jpg&quot;,&quot;alt&quot;:&quot;narasimhareddy25&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/rajesh_ranjan"><span data-title='rajesh_ranjan' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/2e4c0fffc8488719169ae93b5c17b66e/mini_IMG_20201031_170150.jpg&quot;,&quot;alt&quot;:&quot;rajesh_ranjan&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;#d2cb22&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/K0ngS3ng"><span data-title='K0ngS3ng' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/b05b02309da2f4c4aed342d1bad07a65/mini_img.jpg&quot;,&quot;alt&quot;:&quot;K0ngS3ng&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;#1f4cc1&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/V3D"><span data-title='V3D' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/0736f318a9f09f6c2969514bbd876561/mini_1471236223033.png&quot;,&quot;alt&quot;:&quot;V3D&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/VISHAL_SRIVASTAV"><span data-title='VISHAL_SRIVASTAV' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/20a1dc9d08d5eb03d2e3a4a39c0e5f82/mini_Picsart_22-10-12_23-29-50-948__2_.jpg&quot;,&quot;alt&quot;:&quot;VISHAL_SRIVASTAV&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;#ff0000&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/Jagadees_17"><span data-title='Jagadees_17' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/a924d4e716822259852c36e155984ee1/mini_IMG_20221029_085633_378.jpg&quot;,&quot;alt&quot;:&quot;Jagadees_17&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/tarunddn"><span data-title='tarunddn' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://crowdicons.bugcrowdusercontent.com/c/444f9e86bb694c569908d8b538c83575.png&quot;,&quot;alt&quot;:&quot;tarunddn&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;#00ff94&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/suyash_TECHNORAT"><span data-title='suyash_TECHNORAT' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/c6510a81e457d31d0a3cf5b56a410a93/mini_WhatsApp_Image_2020-08-30_at_6.43.35_PM.jpeg&quot;,&quot;alt&quot;:&quot;suyash_TECHNORAT&#39;s avatar&quot;,&quot;accentBorder&quot;:&quot;&quot;}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
<li class='bc-mb-4'>
<a href="/zetc0de"><span data-title='zetc0de' data-trigger='tooltip' style='width: 2.5rem; height: 1rem;'>
<div data-react-class="BcAvatar" data-react-props="{&quot;src&quot;:&quot;https://profiles.bugcrowdusercontent.com/avatars/da5de469de15133f12dceaf4975f5c32/mini_logo.png&quot;,&quot;alt&quot;:&quot;zetc0de&#39;s avatar&quot;,&quot;accentBorder&quot;:null}" class="react-component react-component-bc-avatar "></div>
</span>
</a></li>
</ul>
<div class='bc-hint'>
<output>37 total</output>
</div>
</div>
</div>

</div>
<div class='bounty-content col-md-8 col-md-pull-4'>
<div class='bounty-description bounty-section'>
<div class='bc-markdown bc-helper-nopadding'>
<p>No technology is perfect and Rokt believes that working with skilled security researchers across the globe is crucial in identifying weaknesses in any technology. We are excited for you to participate as a security researcher to help us identify vulnerabilities in our web apps, mobile apps, and APIs.</p>

<p>TECHSTA is a B2B two-sided marketplace, with Partners (e-commerce websites that host ad placements) and Advertisers (whose ads run on the Rokt network). Partners and Advertisers use Rokt’s One Platform to manage their campaigns, spending, and other features of their integrations.</p>

<h2>Ratings/Rewards:</h2>

<p><em>For the initial prioritization/rating of findings, this program will use the <a href="https://bugcrowd.com/vulnerability-rating-taxonomy" rel="nofollow noreferrer" target="_blank">Bugcrowd Vulnerability Rating Taxonomy</a>. However, it is important to note that in some cases a vulnerability priority will be modified due to its likelihood or impact. In any instance where an issue is downgraded, a full, detailed explanation will be provided to the researcher - along with the opportunity to appeal and make a case for a higher priority.</em></p>
</div>
</div>
<section>
<h3 class='bc-h4' id='user-guides__bounty-brief__reward-range'>
Scope
</h3>
<div data-react-class="ResearcherTargetGroups" data-react-props="{&quot;url&quot;:&quot;/rokt-pte-vdp-pro/target_groups&quot;,&quot;csrfToken&quot;:&quot;qd8IRlt7Yx53cN1jtsZdLHVdVX6bi9zTCw91vGIjW0nZMImFeQ8G2kC1aeoG5hezvtN4BZscIv5iyiu7bXqjRQ==&quot;,&quot;preferred_timezone&quot;:&quot;Etc/UTC&quot;}" class="react-component react-component-researcher-target-groups "></div>
<div class='bounty-rules bounty-section'>
<h3 class='bc-h4' id='user-guides__bounty-brief__rules'>
Program rules
</h3>
<p class='bc-page-alert'>
This program follows Bugcrowd’s
<a href="https://www.bugcrowd.com/resource/standard-disclosure-terms/">standard disclosure terms</a>.
</p>
<p class='bc-page-alert'>
For any testing issues (such as broken credentials, inaccessible application, or Bugcrowd Ninja email
problems), please email support@bugcrowd.com. We will address your issue as soon as possible.
</p>
<div class='bc-page-alert'>
<p>
<a href="/vulnerability-rating-taxonomy">Learn more about Bugcrowd’s VRT</a>.
</p>

</div>
</div>
</section>
</div>
</div>
<div data-react-class="FileAttachmentToolTips" data-react-props="{&quot;attachments&quot;:[],&quot;csrfToken&quot;:&quot;I4xnEWdXD2qDjdo0ouM3nDNHYXTtgz4RwLW2Og+nQvdTY+bSRSNqrrRIbr0Sw30D+MlMD+0UwDypcOg9AP66+w==&quot;,&quot;preferred_timezone&quot;:&quot;Etc/UTC&quot;}" class="react-component react-component-file-attachment-tool-tips "></div>
</section>

</div>
</main>
</div>
<div class='notification-area' id='notification-area'>
<div data-react-class="AlertNotifications" data-react-props="{&quot;messages&quot;:[],&quot;csrfToken&quot;:&quot;zFh3I6ECwBmN1LEZswrh/gGRoZrbFccup/7tiXicUpy8t/bgg3al3boRBZADKqthyh+M4duCOQPOO7OOd8WqkA==&quot;,&quot;preferred_timezone&quot;:&quot;Etc/UTC&quot;}" data-reducer="alertNotifications" class="react-component react-component-alert-notifications "></div>
<div data-react-class="Alerts" data-react-props="{&quot;csrfToken&quot;:&quot;psKEtTP2B7Td4DgtU7ChZZOq5d9+Oc7r+juOy4diiQzWLQV2EYJicOoljKTjkOv6WCTIpH6uMMaT/tDMiDtxAA==&quot;,&quot;preferred_timezone&quot;:&quot;Etc/UTC&quot;}" class="react-component react-component-alerts "></div>
</div>

<footer class='rp-pub-footer bc-body bc-body--dark bc-body--dark-tint'>
<div class='container'>
<div class='row'>
<div class='col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0'>
<nav>
<ul class='rp-pub-footer__navlist bc-list bc-hint'>
<li class='rp-pub-footer__navlist__logo bc-mb-6 bc-mr-6'>
<a class="bc-icon" href="https://www.bugcrowd.comroot_path"><span class='bc-helper-sronly'>
Home
</span>
</a></li>
<li>
<div class='rp-pub-footer__navlist__title bc-mb-3'>
<a href="https://www.bugcrowd.com/products">Products</a>
</div>
<ul class='rp-pub-footer__navlist__sublist bc-list'>
<li><a href="https://www.bugcrowd.com/products/pen-test-as-a-service/">Penetration Testing</a></li>
<li><a href="https://www.bugcrowd.com/product/bug-bounty">Bug Bounty</a></li>
<li><a href="https://www.bugcrowd.com/product/vulnerability-disclosure">Vulnerability Disclosure</a></li>
<li><a href="https://www.bugcrowd.com/products/attack-surface-management">Attack Surface Management</a></li>
</ul>
</li>
<li>
<div class='rp-pub-footer__navlist__title bc-mb-3'>
<a href="https://www.bugcrowd.com/solutions">Solutions</a>
</div>
<ul class='rp-pub-footer__navlist__sublist bc-list'>
<li><a href="https://www.bugcrowd.com/solutions/financial-services">Financial Services</a></li>
<li><a href="https://www.bugcrowd.com/solutions/health-care">Healthcare</a></li>
<li><a href="https://www.bugcrowd.com/solutions/retail">Retail</a></li>
<li><a href="https://www.bugcrowd.com/solutions/automotive">Automotive</a></li>
<li><a href="https://www.bugcrowd.com/solutions/technology">Technology</a></li>
<li><a href="https://www.bugcrowd.com/solutions/government">Government</a></li>
<li><a href="https://www.bugcrowd.com/solutions/security-companies">Security</a></li>
</ul>
</li>
<li>
<div class='rp-pub-footer__navlist__title bc-mb-3'>
<a href="https://www.bugcrowd.com/hackers">Researchers</a>
</div>
<ul class='rp-pub-footer__navlist__sublist bc-list'>
<li><a href="/programs">Programs</a></li>
<li><a href="/crowdstream">Crowdstream</a></li>
<li><a href="https://www.bugcrowd.com/bug-bounty-list">Bug Bounty List</a></li>
<li><a href="/user/sign_in">Start Hacking</a></li>
<li><a href="https://www.bugcrowd.com/hackers/faqs">Researcher FAQ</a></li>
<li><a href="https://docs.bugcrowd.com/researchers/onboarding/welcome">Researcher Docs</a></li>
<li><a href="https://www.bugcrowd.com/resources/levelup">Bugcrowd University</a></li>
<li><a href="https://www.bugcrowd.com/hackers">Community</a></li>
<li><a href="/leaderboard">Leaderboard</a></li>
</ul>
</li>
<li>
<div class='rp-pub-footer__navlist__title bc-mb-3'>
<a href="https://www.bugcrowd.com/resources">Resources</a>
</div>
<ul class='rp-pub-footer__navlist__sublist bc-list'>
<li><a href="https://www.bugcrowd.com/resources">Resource Library</a></li>
<li><a href="https://www.bugcrowd.com/customers">Case Studies</a></li>
<li><a href="https://www.bugcrowd.com/blog">Blog</a></li>
<li><a href="https://www.bugcrowd.com/resources/webinar">Webinars</a></li>
<li><a href="https://www.bugcrowd.com/resource/faqs">Resource FAQ</a></li>
</ul>
</li>
<li>
<>
</div>
</footer>

</div>
<script src="https://assets.bugcrowdusercontent.com/assets/application-672d4a06ddbd2450476bf3dda1dea0d626c25b82ff199345514a5cba5a02b916.js" nonce="42n5v2BrNZ32Kb11Ket2t7Rcwo536sbAQLM9wQ4NmIE="></script>
<div id="fb-root"></div><script nonce="42n5v2BrNZ32Kb11Ket2t7Rcwo536sbAQLM9wQ4NmIE=">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));
</script>
<script nonce="42n5v2BrNZ32Kb11Ket2t7Rcwo536sbAQLM9wQ4NmIE=">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document, "script", "twitter-wjs");
</script>

</body>
</html>