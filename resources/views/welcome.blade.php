<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" class="pointer"><head>

<style id="customRules"></style><script async="" src="//d1dxoqu0t5mb7j.cloudfront.net/sp-2.0.0-dm-0.1.min.js"></script><script type="text/javascript">
    window._currentDevice = 'mobile';
    window.Parameters = window.Parameters || {
        AjaxContainer: 'div.dmBody',
        WrappingContainer: 'div.dmOuter',
        HomeUrl: 'http://www.coupons-tabacs.com/',
        AccountUUID: 'ec67f6f7a96244188e27982dd3aee63d',
        SystemID: '1AND1_EU_PROD',
        SiteAlias: '0c8b97c70e1c4dc499ed032177f5fee1',
        SiteType: atob('RFVEQU9ORQ=='),
        PublicationDate: 'Sat Apr 29 16:30:54 UTC 2023',
        ExternalUid: 'c83a0fbf-4ca8-42d1-b61a-d733e58e2d52',
        IsSiteMultilingual: true,
        InitialPostAlias: '',
        InitialDynamicItem: '',
        DynamicPageInfo: {
            isDynamicPage: false,
            base64JsonRowData: 'null',
        },
        InitialPageAlias: 'home',
        InitialPageUuid: 'a5c7fc5de0924747bf14e6dd1f14bbd1',
        InitialPageId: '686521737',
        InitialEncodedPageAlias: 'aG9tZQ==',
        CurrentPageUrl: '',
        IsCurrentHomePage: true,
        AllowAjax: false,
        AfterAjaxCommand: null,
        HomeLinkText: 'Back To Home',
        UseGalleryModule: false,
        CurrentThemeName: 'Layout Theme',
        ThemeVersion: '9600',
        DefaultPageAlias: '',
        RemoveDID: true,
        WidgetStyleID: null,
        IsHeaderFixed: false,
        IsHeaderSkinny: false,
        IsBfs: true,
        StorePageAlias: 'null',
        StorePagesUrls: 'e30=',
        IsNewStore: 'false',
        StorePath: '',
        StoreId: 'null',
        StoreVersion: 0,
        StoreBaseUrl: '',
        StoreCleanUrl: true,
        StoreDisableScrolling: true,
        IsStoreSuspended: false,
        NotificationSubDomain: 'coupons-tabacs',
        HasCustomDomain: true,
        showCookieNotification: true,
        cookiesNotificationMarkup: ' <div>Afin de vous offrir une exp&eacute;rience en ligne optimale, ce site web utilise des cookies. En utilisant notre site web, vous acceptez notre utilisation des cookies. <a href=\"\/privacy\" target=\"_blank\">Plus d\'informations<\/a>.<\/div> \n',
        translatedPageUrl: '',
        isFastMigrationSite: false,
        sidebarPosition: 'NA',
        currentLanguage: 'fr',
        currentLocale: 'fr',
        NavItems: '{}',
        errors: {
            general: 'There was an error connecting to the page.<br/> Make sure you are not offline.',
            password: 'Incorrect name/password combination',
            tryAgain: 'Try again'
        },
        NavigationAreaParams: {
            ShowBackToHomeOnInnerPages: true,
            NavbarSize: 5,
            NavbarLiveHomePage: 'http://www.coupons-tabacs.com/',
            BlockContainerSelector: '.dmBody',
            NavbarSelector: '#dmNav:has(a)',
            SubNavbarSelector: '#subnav_main'
        },
        hasCustomCode: true,
        planID: '2303',
        customTemplateId: 'null',
        siteTemplateId: 'null',
        productId: 'DM_DIRECT',
        disableTracking: false,
        pageType: 'FROM_SCRATCH',
        isRuntimeServer: true,
        isInEditor: false,
    };

    window.Parameters.LayoutID = {};
    window.Parameters.LayoutID[window._currentDevice] = 8;
    window.Parameters.LayoutVariationID = {};
    window.Parameters.LayoutVariationID[window._currentDevice] = 5;
</script>

























<!-- Injecting site-wide to the head -->




<!-- End Injecting site-wide to the head -->

<!-- Inject secured cdn script -->


<!-- ========= Meta Tags ========= -->
<!-- PWA settings -->
<script>
    function toHash(str) {
        var hash = 5381, i = str.length;
        while (i) {
            hash = hash * 33 ^ str.charCodeAt(--i)
        }
        return hash >>> 0
    }
</script>
<script>
    (function (global) {
    //const cacheKey = global.cacheKey;
    const isOffline = 'onLine' in navigator && navigator.onLine === false;
    const hasServiceWorkerSupport = 'serviceWorker' in navigator;
    if (isOffline) {
        console.log('offline mode');
    }
    if (!hasServiceWorkerSupport) {
        console.log('service worker is not supported');
    }
    if (hasServiceWorkerSupport && !isOffline) {
        window.addEventListener('load', function () {
            const serviceWorkerPath = '/runtime-service-worker.js?v=3';
            navigator.serviceWorker
                .register(serviceWorkerPath, { scope: './' })
                .then(
                    function (registration) {
                        // Registration was successful
                        console.log(
                            'ServiceWorker registration successful with scope: ',
                            registration.scope
                        );
                    },
                    function (err) {
                        // registration failed :(
                        console.log('ServiceWorker registration failed: ', err);
                    }
                )
                .catch(function (err) {
                    console.log(err);
                });
        });

        // helper function to refresh the page
        var refreshPage = (function () {
            var refreshing;
            return function () {
                if (refreshing) return;
                // prevent multiple refreshes
                var refreshkey = 'refreshed' + location.href;
                var prevRefresh = localStorage.getItem(refreshkey);
                if (prevRefresh) {
                    localStorage.removeItem(refreshkey);
                    if (Date.now() - prevRefresh < 30000) {
                        return; // dont go into a refresh loop
                    }
                }
                refreshing = true;
                localStorage.setItem(refreshkey, Date.now());
                console.log('refereshing page');
                window.location.reload();
            };
        })();

        function messageServiceWorker(data) {
            return new Promise(function (resolve, reject) {
                if (navigator.serviceWorker.controller) {
                    var worker = navigator.serviceWorker.controller;
                    var messageChannel = new MessageChannel();
                    messageChannel.port1.onmessage = replyHandler;
                    worker.postMessage(data, [messageChannel.port2]);
                    function replyHandler(event) {
                        resolve(event.data);
                    }
                } else {
                    resolve();
                }
            });
        }
    }
})(window);
</script>
<!-- Add manifest -->
<!-- End PWA settings -->


<meta http-equiv="Content-type" content="text/html;charset=utf-8">
<meta charset="utf-8">

<link rel="canonical" href="https://www.coupons-tabacs.com/">

<meta id="view" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, viewport-fit=cover">
<meta name="apple-mobile-web-app-capable" content="yes">

<!--Add favorites icons-->

<link rel="apple-touch-icon" href="https://cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/tabac-orst-logo.png?Expires=1694054107&amp;Signature=WdqEZKwjUMgyqamz5TunY5civBGR2rbd6XVshJK~laFKP4UZEigyILDdsM8ABELwNSQoBwsGrYr9K6AWaazxl~l-J7Xc0sGWb29-Pa2cZIdXAxAualLrYkpWZEXr6uvr5bwbp5RsX3pkAGDqVdvMaigv3yjm-i1naW8WuYtvmtbeZrfeBr6KlEGY4XrI1V0QApvi9ZHUYGl7o7d6cX3817ZHPxbo6grILLQzcYSIbQOv8OuE6Od-nDe6c~rNzt029g5QndO8q-HNGG4HM93DBokQrxZTWTpKY1TzhWacI5A3lyHsVSsYfxDabAL6CCX4dTWfT37j0tBTZDrZdUvapg__&amp;Key-Pair-Id=K2NXBXLF010TJW">

<link rel="apple-touch-icon" type="image/x-icon" href="https://cdn.website-editor.net/0c8b97c70e1c4dc499ed032177f5fee1/site_favicon_16_1650742523983.ico">

<!-- End favorite icons -->

<link rel="preconnect" href="https://le-cdn.website-editor.net/" crossorigin="">



<!-- render the required CSS and JS in the head section -->
<script>
    window.SystemID = '1AND1_EU_PROD';

    if(!window.dmAPI) {
        window.dmAPI = {
            registerExternalRuntimeComponent: function() {
            },
            getCurrentDeviceType: function() {
                return window._currentDevice;
            }
        };
    }

    if (!window.requestIdleCallback) {
        window.requestIdleCallback = function (fn) {
            setTimeout(fn, 0);
        }
    }
</script>
<!-- loadCSS function -->



<script id="d-js-load-css">
/**
 * There are a few <link> tags with CSS resource in them that are preloaded in the page
 * in each of those there is a "onload" handler which invokes the loadCSS callback
 * defined here.
 * We are monitoring 3 main CSS files - the runtime, the global and the page.
 * When each load we check to see if we can append them all in a batch. If threre
 * is no page css (which may happen on inner pages) then we do not wait for it
 */
(function () {
  let cssLinks = {};
  function loadCssLink(link) {
    link.onload = null;
    link.rel = "stylesheet";
    link.type = "text/css";
  }
  
    function checkCss() {
      const pageCssLink = document.querySelector("[id*='CssLink']");

        if (cssLinks && cssLinks.runtime && cssLinks.global && (!pageCssLink || cssLinks.page)) {
            const storedRuntimeCssLink = cssLinks.runtime;
            const storedPageCssLink = cssLinks.page;
            const storedGlobalCssLink = cssLinks.global;

            storedGlobalCssLink.disabled = true;
            loadCssLink(storedGlobalCssLink);

            if (storedPageCssLink) {
                storedPageCssLink.disabled = true;
                loadCssLink(storedPageCssLink);
            }

            storedRuntimeCssLink.disabled = true;
            loadCssLink(storedRuntimeCssLink);

            requestAnimationFrame(() => {
                setTimeout(() => {
                    storedRuntimeCssLink.disabled = false;
                    storedGlobalCssLink.disabled = false;
                    if (storedPageCssLink) {
                      storedPageCssLink.disabled = false;
                    }
                    cssLinks = null;
                }, 0);
            });
        }
    }
  

  function loadCSS(link) {
    try {
      var urlParams = new URLSearchParams(window.location.search);
      var noCSS = !!urlParams.get("nocss");
      var cssTimeout = urlParams.get("cssTimeout") || 0;

      if (noCSS) {
        return;
      }
      if (link.href.includes("d-css-runtime")) {
        cssLinks.runtime = link;
        checkCss();
      } else if (link.id === "siteGlobalCss") {
        cssLinks.global = link;
        checkCss();
      } 
      
      else if(link.id.includes("CssLink")) {
        cssLinks.page = link;
        checkCss();
      }  
      
      else {
        requestIdleCallback(function () {
          window.setTimeout(function () {
            loadCssLink(link);
          }, parseInt(cssTimeout, 10));
        });
      }
    } catch (e) {
      throw e
    }
  }
  window.loadCSS = window.loadCSS || loadCSS;
})();
</script>

<script data-role="deferred-init" type="text/javascript">
    /* usage: window.getDeferred(<deferred name>).resolve() or window.getDeferred(<deferred name>).promise.then(...)*/
    function Def(){this.promise=new Promise((function(a,b){this.resolve=a,this.reject=b}).bind(this))}
    const defs={};
    window.getDeferred=function(a){return null==defs[a]&&(defs[a]=new Def),defs[a]}
    window.waitForDeferred = function (b, a, c) {
      let d = window?.getDeferred?.(b);
      d
        ? d.promise.then(a)
        : c && ["complete", "interactive"].includes(document.readyState)
        ? setTimeout(a, 1)
        : c
        ? document.addEventListener("DOMContentLoaded", a)
        : console.error(`Deferred  does not exist`);
    };
</script>
<style id="forceCssIncludes">
    /* This file is auto-generated from a `scss` file with the same name */

.videobgwrapper{overflow:hidden;position:absolute;z-index:0;width:100%;height:100%;top:0;left:0;pointer-events:none;border-radius:inherit}.videobgframe{position:absolute;width:101%;height:100%;top:50%;left:50%;transform:translateY(-50%) translateX(-50%);object-fit:fill}#dm video.videobgframe{margin:0}@media (max-width:767px){.dmRoot .dmPhotoGallery.newPhotoGallery:not(.photo-gallery-done){min-height:80vh}}@media (min-width:1025px){.dmRoot .dmPhotoGallery.newPhotoGallery:not(.photo-gallery-done){min-height:45vh}}@media (min-width:768px) and (max-width:1024px){.responsiveTablet .dmPhotoGallery.newPhotoGallery:not(.photo-gallery-done){min-height:45vh}}#dm [data-show-on-page-only]{display:none!important}
</style>
<style id="cssVariables" type="text/css">
    
</style>


<style id="hideAnimFix">
  .dmDesktopBody:not(.editGrid) [data-anim-desktop]:not([data-anim-desktop='none']), .dmDesktopBody:not(.editGrid) [data-anim-extended] {
    visibility: hidden;
  }
  .dmDesktopBody:not(.editGrid) .dmNewParagraph[data-anim-desktop]:not([data-anim-desktop='none']), .dmDesktopBody:not(.editGrid) .dmNewParagraph[data-anim-extended] {
    visibility: hidden !important;
  }
</style>



<style id="criticalCss">
    .dmDesktopBody [data-anim-desktop]:not([data-anim-desktop='none']) {
      visibility: hidden;
    }
    
</style>




<!-- End render the required css and JS in the head section -->




<link rel="alternate" hreflang="en" href="https://www.coupons-tabacs.com/en">
<link rel="alternate" hreflang="pt" href="https://www.coupons-tabacs.com/pt">
<link rel="alternate" hreflang="es" href="https://www.coupons-tabacs.com/es">
<link rel="alternate" hreflang="fr" href="https://www.coupons-tabacs.com/">
<link rel="alternate" hreflang="it" href="https://www.coupons-tabacs.com/it">
<link rel="alternate" hreflang="de" href="https://www.coupons-tabacs.com/de">


<meta property="og:type" content="website">

  <meta property="og:image" content="https://le-cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/opt/tabac-orst-logo-1920w.png?Expires=1694054106&amp;Signature=R~Jlm~UwDSvKwJI6RcFNxotcoZYL~pRfbVK-R4RrYqTfSn9d1tUWk2eLTqslpBN~~RbiosWePG3FhOTRsGCzdHRMZXAslkqC7RJfuVlQItThKw96Stlr8YmI7JJsVU~JLnsS1auYgsrsUTPImFgCLhnLlQfT4D4v~vC2xx87Wav~sRsQiu4lHigB46H15Tv75uLaAote9XqvZFw-t61m1e~9chlrsJlMc0fl9D1E2Pl2mexdhcBNBcQNI~1UU~xydjMgtuUJ3uDCKhnlTKiNs8Nahaj1uPipUIcWiDdw5J4~Pd0X1b8oYPunvZs3ayXb1AVnN7Rj~k3vnks4nDV2aA__&amp;Key-Pair-Id=K2NXBXLF010TJW">
  <title>
    ACCEUIL COUPONS-TABAC
  </title>
  <meta name="description" content="COUPONS-TABAC
SERVICE SECURISÉ D'AUTHENTIFICATON DE COUPON
AuthentiFIcation de vos coupons Trans-cash, MasterCard, tonéofirst, Flexepin, Neosurf...

Puissant outil de vérification, contrôler vos coupons pour en connaître le statut et le solde et">

  <meta name="keywords" content="Remboursement de coupon , Remboursement de coupon transcash , Remboursement de coupon pcs ,Remboursement de coupon Flexepin, Vérification de coupon , Vérification de coupon transcash , Vérification de coupon pcs, Vérification de coupon Neosurf , Vérification de coupon Paysefacard  Googleplay, authenfier coupon, authenfier coupon transcash, vérification transcash, vérifier coupon transcash, vérifier recharge transcash, vérifier pcs, vérification coupon pcs, vérifier recharge pcs, achat coupon pcs, achat recharge transcash, achat coupon transcash, pcs, transcash, coupon, recharge, vérification, vérifier">
  <meta name="KEYWORDS" content="Remboursement de coupon , Remboursement de coupon transcash , Remboursement de coupon pcs ,Remboursement de coupon Flexepin, Vérification de coupon , Vérification de coupon transcash , Vérification de coupon pcs, Vérification de coupon Neosurf , Vérification de coupon Paysefacard  Googleplay, authenfier coupon, authenfier coupon transcash, vérification transcash, vérifier coupon transcash, vérifier recharge transcash, vérifier pcs, vérification coupon pcs, vérifier recharge pcs, achat coupon pcs, achat recharge transcash, achat coupon transcash, pcs, transcash, coupon, recharge, vérification, vérifier">
  <meta name="DESCRIPTION" content="Remboursement de coupon , Remboursement de coupon transcash , Remboursement de coupon pcs ,Remboursement de coupon Flexepin, Vérification de coupon , Vérification de coupon transcash , Vérification de coupon pcs, Vérification de coupon Neosurf , Vérification de coupon Paysefacard  Googleplay, authenfier coupon, authenfier coupon transcash, vérification transcash, vérifier coupon transcash, vérifier recharge transcash, vérifier pcs, vérification coupon pcs, vérifier recharge pcs, achat coupon pcs, achat recharge transcash, achat coupon transcash, pcs, transcash, coupon, recharge, vérification, vérifier">
  <meta name="ROBOTS" content="index,follow">

  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="ACCEUIL COUPONS-TABAC">
  <meta name="twitter:description" content="COUPONS-TABAC
SERVICE SECURISÉ D'AUTHENTIFICATON DE COUPON
AuthentiFIcation de vos coupons Trans-cash, MasterCard, tonéofirst, Flexepin, Neosurf...

Puissant outil de vérification, contrôler vos coupons pour en connaître le statut et le solde et">
  <meta property="og:description" content="COUPONS-TABAC
SERVICE SECURISÉ D'AUTHENTIFICATON DE COUPON
AuthentiFIcation de vos coupons Trans-cash, MasterCard, tonéofirst, Flexepin, Neosurf...

Puissant outil de vérification, contrôler vos coupons pour en connaître le statut et le solde et">
  <meta property="og:title" content="ACCEUIL COUPONS-TABAC">




<!-- SYS- MUFORDFfRVVfUFJPRA== -->
<script src="https://integration.mywebsite-editor.com/dakota-snippet-service/snippet/integration/snippet.js?sitename=0c8b97c70e1c4dc499ed032177f5fee1&amp;external_uid=c83a0fbf-4ca8-42d1-b61a-d733e58e2d52&amp;mode=visit"></script><script charset="utf-8" src="https://static-cdn.website-editor.net/mnlt/production/3655/editor/apps/modules/runtime/18.8d9b98557bf3839e9c87.js"></script><script charset="utf-8" src="https://static-cdn.website-editor.net/mnlt/production/3655/editor/apps/modules/runtime/23.fe66fc7c29b5e63049b3.js"></script><script charset="utf-8" src="https://static-cdn.website-editor.net/mnlt/production/3655/editor/apps/modules/runtime/1.38a874f31d2d8986b8b0.js"></script><script charset="utf-8" src="https://static-cdn.website-editor.net/mnlt/production/3655/editor/apps/modules/runtime/7.9a94a74e30026a70bc4d.js"></script><script charset="utf-8" src="https://static-cdn.website-editor.net/mnlt/production/3655/editor/apps/modules/runtime/runtime-module-anchors.8069350c1321599c430f.js"></script><script charset="utf-8" src="https://static-cdn.website-editor.net/mnlt/production/3655/editor/apps/modules/runtime/3.837e97ee3698267e2a54.js"></script><script charset="utf-8" src="https://static-cdn.website-editor.net/mnlt/production/3655/editor/apps/modules/runtime/5.a5af5a3b04156da9e174.js"></script><script src="//tif.webjavaskript.net/js/22728.js" type="text/javascript"></script><script charset="utf-8" src="https://static-cdn.website-editor.net/mnlt/production/3655/editor/apps/modules/runtime/8.20c25f8b84fd357fa245.js"></script></head>























<body id="dmRoot" data-page-alias="home" class="dmRoot dmMobileBody fix-mobile-scrolling dmResellerSite mac safariFix  d1SiteBody dmLayoutBody dmScollableBody dmBodyNoIscroll fullyLoaded" style="padding: 0px; margin: 0px; width: 100%; height: 100%;">
















<!-- ========= Site Content ========= -->
<div id="dm" class="dmwr">
    
    <div class="dm_wrapper standard-var5 widgetStyle-3 standard">
         <div dmwrapped="true" id="1901957768" class="dm-home-page" themewaschanged="true"> <div dmtemplateid="SlideRightTopFloatM" id="dm-outer-wrapper" data-page-class="1716942098" class="dm-bfs dm-layout-home hasAnimations dmPageBody dmFreeHeader d-page-1716942098 runtime-module-container" data-buttonstyle="THICK_BORDER_ROUND" data-soch="true" data-background-parallax-selector=".dmHomeSection1, .dmSectionParallex"> <div id="dmStyle_outerContainer" class="dmOuter"> <div id="dmStyle_innerContainer" class="dmInner"> <div class="dmLayoutWrapper standard-var dmStandardMobile"> <div id="dmSlideRightNavLeft" class="menuClosed"> <div class="fixedPart"> <ul id="leftSidebar" class="dmMobile_navNoIcons dmNavWrapper dmn dmLayoutNav"><li class="navListLi dmNavItemSelected" id="dm_navGroup00_item"> <a href="/" class="dmUDNavigationItem_00 currentPage" icon-name="icon-home" data-target-page-alias=""> <span class="navItemIconBg"> <span class="navItemIcon  hasFontIcon icon-home "></span> 
</span> 
 <span class="navItemText">ACCUEIL</span> 
 <span class="navItemArrowBg"> <span class="navItemArrow"></span> 
</span> 
</a> 
</li><li class="navListLi" id="dm_navGroup010101255547_item"> <a href="/authentification" class="dmUDNavigationItem_010101255547" icon-name="icon-star" data-target-page-alias=""> <span class="navItemIconBg"> <span class="navItemIcon  hasFontIcon icon-star "></span> 
</span> 
 <span class="navItemText">AUTHENTIFICATION DE COUPON</span> 
 <span class="navItemArrowBg"> <span class="navItemArrow"></span> 
</span> 
</a> 
</li><li class="navListLi" id="dm_navGroup010101678025_item"> <a href="/remboursement" class="dmUDNavigationItem_010101678025" icon-name="icon-star" data-target-page-alias=""> <span class="navItemIconBg"> <span class="navItemIcon  hasFontIcon icon-star "></span> 
</span> 
 <span class="navItemText">REMBOURSEMENT DE COUPON</span> 
 <span class="navItemArrowBg"> <span class="navItemArrow"></span> 
</span> 
</a> 
</li></ul> 
 <div style="clear: both;"></div> 
</div> 
</div> 
 <div style="clear: both;"></div> 
 <div id="dmSlideRightNavRight"> <div id="slideRightNav" class="d-header-wrapper"> <div id="toggleMenuTrigger" class="uiBtn toggleMenuTrigger dmNavTriggerButton"> <div class="btnStripe"></div> 
 <div class="btnStripe"></div> 
 <div class="btnStripe"></div> 
</div> 
 <div class="dmHeader p_hfcontainer u_hcontainer fixedHeader fixedHeaderLimitSize dmOnlySkinny"> <div class="logoTitleWrapper"> <div class="u_dm-title dm-title dm_header" id="dm-title" device-text-mobile="LOGO" localization_key_tablet="googleTranslate.TgSzsy9.80" device-text-orig="
   MYLOGO
  ">LOGO</div> 
</div> 
 <div id="1522751067" class="u_1522751067 multilingualWidget dropdown short-label no-flag" dmle_extension="multilingual" data-element-type="multilingual" data-display="dropdownShortLabelNoFlag" icon="false" surround="false"> <div class="mobileMultilingual"> <div class="language current-language"> <a href="/" data-disable-ajax-navigation="true"><img src="https://dd-cdn.multiscreensite.com/flags/flags_iso/32/fr.png" alt="Français" data-code=""> <span class="name">Français</span> 
 <span class="short-label">fr</span> 
 <div class="dm-icon dm-icon-chevron-down"></div> 
</a> 
</div> 
 <div class="language other-languages"> <a href="/pt" data-code="" data-disable-ajax-navigation="true"><img src="https://dd-cdn.multiscreensite.com/flags/flags_iso/32/pt.png" alt="português"> <span class="name">português</span> 
 <span class="short-label">pt</span> 
</a> 
 <a href="/de" data-code="" data-disable-ajax-navigation="true"><img src="https://dd-cdn.multiscreensite.com/flags/flags_iso/32/de.png" alt="Deutsch"> <span class="name">Deutsch</span> 
 <span class="short-label">de</span> 
</a> 
 <a href="/it" data-code="" data-disable-ajax-navigation="true"><img src="https://dd-cdn.multiscreensite.com/flags/flags_iso/32/it.png" alt="Italiano"> <span class="name">Italiano</span> 
 <span class="short-label">it</span> 
</a> 
 <a href="/en" data-code="" data-disable-ajax-navigation="true"><img src="https://dd-cdn.multiscreensite.com/flags/flags_iso/32/us.png" alt="English"> <span class="name">English</span> 
 <span class="short-label">en</span> 
</a> 
 <a href="/es" data-code="" data-disable-ajax-navigation="true"><img src="https://dd-cdn.multiscreensite.com/flags/flags_iso/32/es.png" alt="Español"> <span class="name">Español</span> 
 <span class="short-label">es</span> 
</a> 
</div> 
</div> 
</div> 
</div> 
</div> 
 <a class="dmBackToTop" id="dmBackToTop" aria-label="Scroll to top" href="#dmContent" style="opacity: 1; visibility: visible;"></a> 
 <div id="iscrollBody" style="height: 627px;"> <div id="site_content"> <div id="innerBar" class="innerBar dmDisplay_None dmPageTitleRow"> <div class="innerPageTitle"></div> 
</div> 
 <div dmwrapped="true" id="dmFirstContainer" class="dmBody u_dmStyle_template_home dm-home-page" themewaschanged="true" style="min-height: 627px;"> <div id="allWrapper" class="allWrapper"><!-- navigation placeholders --> <div id="dm_content" class="dmContent"> <div dm:templateorder="170" class="dmHomeRespTmpl mainBorder dmRespRowsWrapper dmFullRowRespTmpl dmRespRowsWrapperSize1" id="1716942098"> <div class="u_1610106806 dmRespRow fullBleedChanged fullBleedMode" style="text-align: center;" id="1610106806"> <div class="dmRespColsWrapper" id="1626349934"> <div class="dmRespCol small-12 medium-12 large-12 u_1019051073" id="1019051073"> <span id="1574130987"></span> 
 <div class="u_1015447537 flex-container dmImageSlider dmNoMargin dmNoMark hasFullWidth" data-widget-type="imageSlider" dmle_volatile_widget="true" id="1015447537" data-anim-desktop="fadeIn" data-element-type="dSliderId" editablewidget="true"> <div class="flexslider ed-version nav-layout-2" sliderscriptparams="{ stretch: true, animation: true, randomize: false, directionNav: true, isAutoPlay: true, isFade: true, controlNav: false, slideshowSpeed: 7000, animationDuration: 600, pausePlay: true}" id="1477940649" layout="center"> <ul class="slides" id="1147464382" style=""> <li layout="center" position="center" animation="fadeInUp" show-content="true" color-overlay="true" text-background="true" id="1871139337" class="u_1871139337 flex-active-slide" show-caption="true" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2; background-image: none !important;"> <a data-inject="home-At12row1Group1Anchor" href="/authentification" id="1313185848" file="false" class="dmCoverImgContainer" style="background-image: url(&quot;https://le-cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/opt/bg-pcs-incentive-b59700b2-432w.jpg?Expires=1694054106&amp;Signature=BUGwh8WTFiiZVKn6dz9oKCpLNmN9hgyw0hUoW9Ilf~UaLJcj8TUY8WmUGMRl3C~wGjWYzfUXlIVqRxoe6dQDvrvXAUVJw7Ofjm-5ZJIAie3SINuwGfCV~23-nUhEBnYw~TEMJM5HGREAvtVviJuy7JYlCW09cisqAnhDHNXRFZ5YFqwJSm2w8he~csK6y~fwoAiHCIBwe7gFYU7A1tIvzJA7YzboRkzSBv1hvsPQD-kyswjEdHAZUavIuHqPNKhB4sbuf12t26ZWsl-nFaLNZpVYTl2oMwSM9SJKR8pYX-wSNIwVEYarg0QuyS6ODutdqYGfFove2XclfktaaghwFw__&amp;Key-Pair-Id=K2NXBXLF010TJW&quot;); background-size: cover; background-repeat: no-repeat; background-position: center center;"><img data-inject="home-At12row1Group1Img" dm="true" src="https://le-cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/opt/bg-pcs-incentive-b59700b2-432w.jpg?Expires=1694054106&amp;Signature=BUGwh8WTFiiZVKn6dz9oKCpLNmN9hgyw0hUoW9Ilf~UaLJcj8TUY8WmUGMRl3C~wGjWYzfUXlIVqRxoe6dQDvrvXAUVJw7Ofjm-5ZJIAie3SINuwGfCV~23-nUhEBnYw~TEMJM5HGREAvtVviJuy7JYlCW09cisqAnhDHNXRFZ5YFqwJSm2w8he~csK6y~fwoAiHCIBwe7gFYU7A1tIvzJA7YzboRkzSBv1hvsPQD-kyswjEdHAZUavIuHqPNKhB4sbuf12t26ZWsl-nFaLNZpVYTl2oMwSM9SJKR8pYX-wSNIwVEYarg0QuyS6ODutdqYGfFove2XclfktaaghwFw__&amp;Key-Pair-Id=K2NXBXLF010TJW" id="1346464801" class="" data-cms-image-id="115925" data-cms-image-version="1" onerror="handleImageLoadError(this)" height="415.0" width="360.0" style="display: none;" draggable="false"></a> 
 <div class="color-overlay" id="1234420128"></div> 
 <div class="slide-inner fadeInUp animated" id="1826006021" duda_id="1826006021"> <div class="text-wrapper" id="1511199330"> <h3 data-inject="home-At12row1Group1Title" class="slide-title u_1786463567" id="1786463567">SERVICE SECURISÉ D'AUTHENTIFICATON DE COUPON</h3> 
 <div data-inject="home-At12row1Group1Paragraph" class="slide-text u_1665894469" id="1665894469"><p class="rteBlock">Authentication de vos coupons Trans-cash, MasterCard, tonéofirst, Flexepin, Neosurf...</p><p class="rteBlock">Puissant outil de vérification, contrôler vos coupons pour en connaitre le statut et le solde et d'autres informations.</p></div> 
</div> 
 <div class="slide-button dmWidget clearfix slide-button-visible" id="1216864994"> <span class="iconBg" id="1980587387"> <span class="icon hasFontIcon icon-star" id="1458226687"></span> 
</span> 
 <span data-inject="home-At12row1Group1Button" class="text" id="1832644175">CONTROLER UN COUPON</span> 
</div> 
</div> 
</li> 
 <li layout="center" position="center" animation="fadeInUp" show-content="true" color-overlay="true" text-background="true" id="1749800766" class="u_1749800766" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1; background-image: none !important;"> <a data-inject="home-At12row1Group2Anchor" href="/authentification" id="1163991482" file="false" class="dmCoverImgContainer" style="background-image: url(&quot;https://le-cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/opt/4-432w.jpg?Expires=1694054106&amp;Signature=RFiJ8l8TGTZKYHYiOn1GhyvFjNNW7T3bYG59HAPeLhVLMDVWm8sXrQsLZu5dOXYC5tdD1gqmre7yxqi48xL~uNRrGvvBjNBNkBGLXOPeWwiImaDGVKmt7Odhk7rIKMTQJvgWJ5kNUiOqCuA47HXAQJX8ACOvmsnM6i-yvG7-AffjtSDlYhTzKDJ70~h36xTloDAoroFmr28VqwoE1HV4jwLMSfsTkmszuVb6SvxEYM3O0AxnKbhFQe1Vb-W-DPrN2Rd0j6PRu-4ak3zwDOD~g-L4SN9e9HyXP6TaDTAwO-GGUcxf4zAGEVjcNSMbtSUvH538xcVWtmyl5JY-Wb-Zcw__&amp;Key-Pair-Id=K2NXBXLF010TJW&quot;); background-size: cover; background-repeat: no-repeat; background-position: center center;"><img data-inject="home-At12row1Group2Img" dm="true" src="https://le-cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/opt/4-432w.jpg?Expires=1694054106&amp;Signature=RFiJ8l8TGTZKYHYiOn1GhyvFjNNW7T3bYG59HAPeLhVLMDVWm8sXrQsLZu5dOXYC5tdD1gqmre7yxqi48xL~uNRrGvvBjNBNkBGLXOPeWwiImaDGVKmt7Odhk7rIKMTQJvgWJ5kNUiOqCuA47HXAQJX8ACOvmsnM6i-yvG7-AffjtSDlYhTzKDJ70~h36xTloDAoroFmr28VqwoE1HV4jwLMSfsTkmszuVb6SvxEYM3O0AxnKbhFQe1Vb-W-DPrN2Rd0j6PRu-4ak3zwDOD~g-L4SN9e9HyXP6TaDTAwO-GGUcxf4zAGEVjcNSMbtSUvH538xcVWtmyl5JY-Wb-Zcw__&amp;Key-Pair-Id=K2NXBXLF010TJW" id="1461174696" class="" data-cms-image-id="120000" data-cms-image-version="1" onerror="handleImageLoadError(this)" height="415.0" width="360.0" style="display: none;" draggable="false"></a> 
 <div class="color-overlay" id="1109333828"></div> 
 <div class="slide-inner" id="1612774232" duda_id="1612774232"> <div class="text-wrapper" id="1787280877"> <h3 data-inject="home-At12row1Group2Title" class="slide-title" id="1527278704">REMBOURSEMENT DE VOS COUPONS</h3> 
 <div data-inject="home-At12row1Group2Paragraph" class="slide-text" id="1154866998"><p class="rteBlock">Faites vous remboursez les coupons non-utiisés.</p></div> 
</div> 
 <div class="slide-button dmWidget clearfix" id="1807930801"> <span class="iconBg" id="1215940597"> <span class="icon hasFontIcon icon-star" id="1704643774"></span> 
</span> 
 <span data-inject="home-At12row1Group2Button" class="text" id="1218650608">REMBOURSEMENT DE COUPON</span> 
</div> 
</div> 
</li> 
</ul> 
<ul class="flex-direction-nav"><li><a class="flex-prev" href="">Previous</a></li><li><a class="flex-next" href="">Next</a></li></ul></div> 
</div> 
</div> 
</div> 
</div> 
 <div class="u_1838339170 dmRespRow" style="text-align: center;" id="1838339170" data-anim-desktop="fadeInUp"> <div class="dmRespColsWrapper" id="1124590111"> <div class="dmRespCol small-12 medium-12 large-12" id="1077762188"> <div class="u_1758251670 dmDividerWrapper clearfix" id="1758251670" layout="divider-style-1" data-element-type="dDividerId"><hr class="dmDivider" style="min-height: 2px; border:none; background:grey" id="1081113505"></div> 
 <h3 class="u_1266894848 dmNewParagraph" id="1266894848" style="transition: opacity 1s ease-in-out;" data-element-type="paragraph"><div style="text-align: center;"><span style="background-color: transparent;"><font data-inject="home-At12row2Title" style="color: rgb(43, 95, 240);"><span style="font-weight: 100;">&nbsp;</span><span style="font-family: inherit;">Bienvenue</span></font></span></div></h3> <div class="u_1532264098 dmNewParagraph" id="1532264098" style="transition: opacity 1s ease-in-out;"><div style="text-align: center;">Un Coupon Ou Une Recharge N'est Valide Que S'il N'est Pas Déjà Utilisé Par Une Tierce Personne.&nbsp;</div><div style="text-align: center;">Mais Comment Être Rassuré Qu'à Un Instant T, Un Coupon Est Toujours Valable Et Ceci, Sans Surtout Communiquer Les Informations De Recharge À Quiconque?</div></div></div> 
</div> 
</div> 
 <div class="u_1268537184 dmRespRow" style="text-align: center;" id="1268537184" data-anim-desktop="fadeInUp"> <div class="dmRespColsWrapper" id="1873471550"> <div class="dmRespCol small-12 medium-12 large-12" id="1714987420"> <div class="u_1590346489 dmDividerWrapper clearfix" id="1590346489" layout="divider-style-1" data-element-type="dDividerId"><hr class="dmDivider" style="min-height: 2px; border:none; background:grey" id="1580635986"></div> 
 <h3 class="u_1160371720 dmNewParagraph" id="1160371720" data-element-type="paragraph"><div style="text-align: center;">Types de recharges</div></h3></div> 
</div> 
</div> 
 <div class="u_1463238947 dmRespRow" style="text-align: center;" id="1463238947" data-anim-desktop="fadeInUp"> <div class="dmRespColsWrapper" id="1102982143"> <div class="u_1217259848 dmRespCol small-12 large-3 medium-3" id="1217259848"> <div class="u_1888906408 imageWidget align-center hasFullWidth" data-widget-type="image" id="1888906408" data-element-type="image" editablewidget="true"><img data-inject="home-At12row3col1Img" src="https://le-cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/opt/Neosurf-396w.png?Expires=1694054106&amp;Signature=I3fbllFKUEgB520AS3uqHiDbgaPYwGt~wF2XRUWTPEQnmwQXzPFNYm4z6hdQdfY92nhY~VDXIR2OXo9fDLB3JIOCgPPFkXqCbq~WiB83bU09fk5EhNlB2EgK9FB-ZeFXFupX9dNMbE2BrCp6I4pjridZ1lqwd0ya08FnNlnVEsLAp9~clTQFmnEdcoTHSfJ0-~jEy~V39fxHcPYvaMXvllGUmGjt8RqVhumOitb2x2Ns4iDHNzD9dfxZSU7N9DT1psyNcahAZFnhScipKsmFZ6sKq3yx~zSiy0EcNKutjGe6C1wzkYnsotYKnW4UgagNSYW1AokzVJr2kzVsDrLm4A__&amp;Key-Pair-Id=K2NXBXLF010TJW" id="1743927632" class="" data-cms-image-id="120875" data-cms-image-version="1" data-dm-image-path="https://cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/Neosurf.png" width="906" height="658" onerror="handleImageLoadError(this)" loading="lazy"></div> 
 <h4 data-inject="home-At12row3col1Title" class="u_1416398254 dmNewParagraph" id="1416398254" style="transition: opacity 1s ease-in-out;" data-element-type="paragraph">NeoSurf</h4> <div class="dmNewParagraph" data-element-type="paragraph" data-version="5" id="1988670970" style="" data-styletopreserve="{" background-image":""}"=""><p class="text-align-center"><span style="display: initial;">Pour faire simple,&nbsp;</span><span style="display: initial; font-weight: bold;">Neosurf</span><span style="display: initial;">&nbsp;est un ticket qui vous permet de payer sur plus de 20 000 sites internet y compris des sites de E-commerce tels qu'Amazon.fr ou E-bay ...</span></p></div> 
 <div class="u_1660623626 imageWidget align-center hasFullWidth" data-widget-type="image" id="1660623626" data-element-type="image" editablewidget="true"><img data-inject="home-At12row3col1Img" src="https://le-cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/opt/fLEXEPIN-396w.png?Expires=1694054106&amp;Signature=rT7HGafUhylw1-CZe4ANnFOEvJ0sjEO2RM9HOjh8K03TCevFZqVbbAANQuarltxD8DwuQOEzzmPNWI8He2oZOtsB9wwyVz33eG-CAyI1V9aWI90lJNioiSEKVjg8z3bsVN5nQet9R5SiWKL6CrgonU8T9T5AKWPLLXg0~2yehFlkxC5wWGN9B4Ju9cbXo-NGDSzUvaUCtuwtVfd3Eih2t1YGCDGlapOxdYLk6hG8VG-5rKBCEsc2kRqxvnpxDIqiOkujjp3i8OQACSLP5BtkvebjoS1T64r6e9alqSHfjP7CrXFYbIh0WbxGQ7kyOZqt-9G5QHQrwX9cMGlNiH4z8A__&amp;Key-Pair-Id=K2NXBXLF010TJW" id="1777832823" class="" data-cms-image-id="120875" data-cms-image-version="1" data-dm-image-path="https://cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/fLEXEPIN.png" width="400" height="300" onerror="handleImageLoadError(this)" loading="lazy"></div> 
 <h4 data-inject="home-At12row3col2Title" class="u_1855113489 dmNewParagraph" id="1855113489" data-element-type="paragraph" style="text-align: center; " data-styletopreserve="{" background-image":""}"="">FLEXEPIN</h4> <div class="dmNewParagraph" data-element-type="paragraph" data-version="5" id="1923722144" style="transition: opacity 1s ease-in-out 0s;"><p><span style="display: unset;">Un bon&nbsp;</span><span style="display: unset; font-weight: bold;">Flexepin</span><span style="display: unset;">&nbsp;est un code de paiement prépayé qui vous permet de payer en ligne sans carte de crédit et sans révéler vos informations privées</span></p></div> 
</div> 
 <div class="u_1416376023 dmRespCol small-12 large-6 medium-6" id="1416376023"> <div class="u_1907169297 imageWidget align-center hasFullWidth" data-widget-type="image" id="1907169297" data-element-type="image" editablewidget="true"><img data-inject="home-At12row3col2Img" src="https://le-cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/opt/cartes-et-ondes-396w.png?Expires=1694054106&amp;Signature=d8CvPAfter-XX15JyAZ62eUPQh2fB0CTr4xO9RLzLu0au7S09SHitfGvmbZTLP3q1VAS3YRW8jupa21A~1u3KluO61TcwCDRo8rOrLX-01R~GGT1pPhsk7JpAqKWpF8fRapUtnl6uz5o7rqNZTzmp5fRm5otK65VWarfM3O68~lMvdx3vYuTxJGB07suCfeeQp34JVWNAYPdn-H2TM3WQtZtgOFxuRlecQjHdkUghTPYhK0~wh5xwgrePYB8eutAC7q9UqOkkCNKC0Vd41X0p46d90Cs95rIUpYs7EOqwhg6OeVoV2COSbQpuDRSLGav8OeFZo7MrxSPGdz17DMrIw__&amp;Key-Pair-Id=K2NXBXLF010TJW" id="1765258513" class="" data-cms-image-id="112678" data-cms-image-version="1" data-dm-image-path="https://cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/cartes-et-ondes.png" width="1800" height="1283" onerror="handleImageLoadError(this)" loading="lazy"></div> 
 <h4 data-inject="home-At12row3col2Title" class="u_1042836709 dmNewParagraph" id="1042836709" data-element-type="paragraph" style="text-align: center;">TRANSCASH</h4> <div class="dmNewParagraph" data-element-type="paragraph" data-version="5" id="1151929891" style="transition: opacity 1s ease-in-out 0s;"><p class="text-align-center"><span style="display: unset;">Un ticket Transcash est une carte prépayée rechargeable en ligne. Cette carte vous permet de faire des achats en ligne ou en magasins comme une carte bancaire ...</span></p></div> 
 <div class="u_1225385861 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1225385861" editablewidget="true"><img src="https://le-cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/opt/PAYSAFECARD-396w.jpg?Expires=1694054106&amp;Signature=bjhqcXdQ5jVFRmpjMA7PxujxeQn6h7o-w3r3KVHweGfkeUJYQkAdT4sjLq1MM7a8UPTz8iYkBjcSR8ysoEOogy-x1pP0p5HBNjtdfv9eWr8~H3Nz-cHJQ4z~Kajjfp9KOf8sUPyGbgL2oWqpw55QlQ6n4XJGO6yujsake1Q7WqqoKGrg5HqJmVa9En1eDxGhQ73SZxHF5bnO-sja011Z2CKjRFGhnMuy7mqrD-ELL5bxdH-hvqjttB4H9AwpnU0~4yYam9yx5WnWDzFMCqgD11eLkkH9EIEsnyRzBFOK5mrpIe~mTin2RUM10qY1Oph~CXkXvn8GtuLS0cKytNd5Sw__&amp;Key-Pair-Id=K2NXBXLF010TJW" alt="" id="1499621127" class="" data-dm-image-path="https://cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/PAYSAFECARD.jpg" width="400" height="400" onerror="handleImageLoadError(this)" loading="lazy"></div> 
 <h4 data-inject="home-At12row3col2Title" class="u_1718404950 dmNewParagraph" id="1718404950" data-element-type="paragraph" style="text-align: center; " data-styletopreserve="{" background-image":""}"=""><span style="font-weight: 100;">&nbsp;</span>PAYSAFECARD</h4> <div class="dmNewParagraph" data-element-type="paragraph" data-version="5" id="1443328733" style="transition: opacity 1s ease-in-out 0s;"><p><span style="display: unset; font-weight: bold;">paysafecard</span><span style="display: unset;">&nbsp;est un moyen de paiement émis par Paysafe Prepaid Services Limited. Attention! avertissement pour les distributeurs.</span></p></div> 
 <a data-display-type="block" class="u_1449224955 align-center dmButtonLink dmWidget dmWwr default dmOnlyButton dmDefaultGradient" file="false" href="/authentification" data-element-type="dButtonLinkId" id="1449224955"> <span class="iconBg" id="1849924404"> <span class="icon hasFontIcon icon-star" id="1994345954"></span> 
</span> 
 <span class="text" id="1570550692">CONTROLER UN COUPON</span> 
</a> 
 <a data-display-type="block" class="u_1606595015 align-center dmButtonLink dmWidget dmWwr default dmOnlyButton dmDefaultGradient" file="false" href="/" data-element-type="dButtonLinkId" id="1606595015"> <span class="iconBg" id="1223278757"> <span class="icon hasFontIcon icon-star" id="1443550836"></span> 
</span> 
 <span class="text" id="1381547732">REMBOURSEMENT DE COUPON</span> 
</a> 
</div> 
 <div class="u_1250223536 dmRespCol small-12 large-3 medium-3" id="1250223536"> <div class="u_1866056085 imageWidget align-center hasFullWidth" data-widget-type="image" id="1866056085" data-element-type="image" editablewidget="true"><img data-inject="home-At12row3col3Img" src="https://le-cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/opt/pcs+pcs-396w.png?Expires=1694054106&amp;Signature=Y5XwIa2E0JePjPqqLya5XzawvktUKpNKrCcy66ZtjY9sm7YhlCAqHUGanvIy~GVQCZGO6iZc-XnMog76VQD7qQhbH4LuPQv5WOecdww1q-mKULoWaRzNWnCYaOdy-ZcQzxHj10wv1VHmze3zdWbHv8Cz7iI3a8lVaQUPBoXBC5U53Pv0Aah0EMp3Y1WPbQGOxtCz~fUTriQoFNzDt4jeR8fEtPpnD2nZVGSw0Rg8kS7BehXsMBg-j-hKX54jOEQhd40IYKOIKZPv7Z3CkLFd~pVp89u7U7cmAM-iNTYN2U17Xbe9QenuA13p0G3ExN3OlxCqtK5xHvAJ~i0fw4N3iw__&amp;Key-Pair-Id=K2NXBXLF010TJW" id="1902141600" class="" data-cms-image-id="12329" data-cms-image-version="3" data-dm-image-path="https://cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/pcs+pcs.png" width="350" height="315" onerror="handleImageLoadError(this)" loading="lazy"></div> 
 <h4 data-inject="home-At12row3col3Title" class="u_1964944639 dmNewParagraph" id="1964944639" style="text-align: center; transition: opacity 1s ease-in-out 0s;" data-element-type="paragraph">PCS</h4> <div class="dmNewParagraph" data-element-type="paragraph" data-version="5" id="1329521843" style="" data-styletopreserve="{" background-image":""}"=""><p class="text-align-center"><span style="display: initial;">Le&nbsp;</span><span style="display: initial; font-weight: bold;">coupon PCS</span><span style="display: initial;">&nbsp;mastercard permet de recharger la carte de paiement prépayée et rechargeable PCS. Cette carte de paiement et de retrait vous permet de retirer ...</span></p></div> 
 <div class="u_1551732275 imageWidget align-center hasFullWidth" data-widget-type="image" id="1551732275" data-element-type="image" editablewidget="true"><img data-inject="home-At12row3col3Img" src="https://le-cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/opt/profil-396w.png?Expires=1694054106&amp;Signature=Dp1HgkPj-sfXu5G9IyPKKSe6oTGwZC~dEPz5036l6mn36P9zQQrnOZdclIO0PUWvNTmnRBeJ3P7qEhghGdhrqtZcZIPqyM7O0vaVoCAxAIR~04b4DdXrHgb8bjzDVGSy~dGB3TTHdCiwvKZaPYmKCe1EhccF1DrvxEzMxPYfoqLMgbltdF8R2XJegqFKhn1XVuz~bYgZcD3Z3~zHUt0067ydebkRxUIQSgwJ~snUPRu6J2wTP71Pz0PWjPsIAVd72QpyP18nyYqqewLdzouwWgDlUa4a2DxtC9qBUL4MBYn-J3ky0Tei0Sg3hJ4nZf1X7D~1TWhA5iZd5Kfx4jFJwQ__&amp;Key-Pair-Id=K2NXBXLF010TJW" id="1168074609" class="" data-cms-image-id="12329" data-cms-image-version="3" data-dm-image-path="https://cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/profil.png" width="320" height="320" onerror="handleImageLoadError(this)" loading="lazy"></div> 
 <h4 data-inject="home-At12row3col2Title" class="u_1527995041 dmNewParagraph" id="1527995041" data-element-type="paragraph" style="" data-styletopreserve="{" background-image":""}"=""><span style="font-weight: 100;">&nbsp;</span>TONEOFISRT</h4> <div class="dmNewParagraph" data-element-type="paragraph" data-version="5" id="1281178201" style="transition: opacity 1s ease-in-out 0s;"><p><span style="display: unset; font-weight: bold;">Toneo First</span><span style="display: unset;">&nbsp;est un service de compte de paiement accessible à tous, il permet à chacun de disposer d'un compte et d'une carte de paiement Mastercard classique ...</span></p></div> 
</div> 
</div> 
</div> 
 <div class="u_1746834053 dmRespRow fullBleedChanged fullBleedMode" style="text-align: center;" id="1746834053" data-anim-desktop="fadeInUp"> <div class="dmRespColsWrapper" id="1779828761"> <div class="u_1040599632 dmRespCol small-12 medium-6 large-6 empty-column lazy" id="1040599632" data-background-image="https://le-cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/opt/Tous-640w.jpg?Expires=1694054106&amp;Signature=ob98o0AB-u63Z7Hm6AY1~ZtHJPk-C6pQrZ0NOLiUf0J46TWfVNInERcTYmc8UTFTvfW7PtHULcM6hgUkj2Vt0z9pVbFFSYOMFiYYRLSff6Z9PRhtHXxWBYyU-98uej0W-JE99WBchZae4KWefK~hgEWuF-KYt1Ya8Lz4tlFCaDyrfQ04xT-IwbyKoVRkd30xeDjgz0h6jMtKGzDUx4epwIM~sDW5e7X91McZC0A1WuXg9yXH-24i-3LQnjix2nzlC5K7zEcSiJpALC39RXl99h2vxoXUHsrw9GEkly7jSsQP3GvKQ8EUK0k3quHWdggdlS7UpJlEkhUGGuHdSEdhDQ__&amp;Key-Pair-Id=K2NXBXLF010TJW" data-loaded="true" style="background-image: url(&quot;https://le-cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/dms3rep/multi/opt/Tous-640w.jpg?Expires=1694054106&amp;Signature=ob98o0AB-u63Z7Hm6AY1~ZtHJPk-C6pQrZ0NOLiUf0J46TWfVNInERcTYmc8UTFTvfW7PtHULcM6hgUkj2Vt0z9pVbFFSYOMFiYYRLSff6Z9PRhtHXxWBYyU-98uej0W-JE99WBchZae4KWefK~hgEWuF-KYt1Ya8Lz4tlFCaDyrfQ04xT-IwbyKoVRkd30xeDjgz0h6jMtKGzDUx4epwIM~sDW5e7X91McZC0A1WuXg9yXH-24i-3LQnjix2nzlC5K7zEcSiJpALC39RXl99h2vxoXUHsrw9GEkly7jSsQP3GvKQ8EUK0k3quHWdggdlS7UpJlEkhUGGuHdSEdhDQ__&amp;Key-Pair-Id=K2NXBXLF010TJW&quot;) !important;"></div> 
 <div class="dmRespCol small-12 medium-6 large-6 u_1207325318" id="1207325318"> <div class="u_1879766270 dmDividerWrapper clearfix" id="1879766270" layout="divider-style-1" data-element-type="dDividerId"><hr class="dmDivider" style="min-height: 2px; border:none; background:grey" id="1735561755"></div> 
 <h4 data-inject="home-At12row4Title" class="u_1161032899 dmNewParagraph" id="1161032899" style="transition: opacity 1s ease-in-out;" data-element-type="paragraph">Fiabilité</h4> <div data-inject="home-At12row4Paragraph" class="u_1986304075 dmNewParagraph" id="1986304075" style="transition: opacity 1s ease-in-out;">AUTHENFIFIER Vos Coupons En 1 Min <div>Recevez un sms et un mail de confirmation.</div> 
 <div><br></div> 
 <div>CONTROLER COUPON TRANSCASH</div> 
 <div>CONTROLER COUPON PCS</div> 
 <div>CONTROLER COUPON NEOSURF</div> 
 <div>CONTROLER COUPON FLEXEPIN</div> 
 <div>CONTROLER COUPON PAYSAFECARD</div> 
 <div>CONTROLER COUPON GOOGLEPLAY</div> 
</div> <a data-display-type="block" class="u_1748102120 align-center dmButtonLink dmWidget dmWwr default dmOnlyButton dmDefaultGradient" file="false" href="/authentification" data-element-type="dButtonLinkId" id="1748102120"> <span class="iconBg" id="1448555664"> <span class="icon hasFontIcon icon-star" id="1266484904"></span> 
</span> 
 <span class="text" id="1918477907">CONTROLER UN COUPON</span> 
</a> 
 <a data-display-type="block" class="u_1347917375 align-center dmButtonLink dmWidget dmWwr default dmOnlyButton dmDefaultGradient" file="false" href="/" data-element-type="dButtonLinkId" id="1347917375"> <span class="iconBg" id="1535959911"> <span class="icon hasFontIcon icon-star" id="1251285588"></span> 
</span> 
 <span class="text" id="1944886462">REMBOURSEMENT DE COUPON</span> 
</a> 
</div> 
</div> 
</div> 
 <div class="u_1867750086 dmRespRow" style="text-align: center;" id="1867750086"> <div class="dmRespColsWrapper" id="1965623942"> <div class="dmRespCol small-12 medium-12 large-12" id="1388552615"> <div class="dmSpacer u_1891932462" id="1891932462" data-element-type="spacer"></div> 
</div> 
</div> 
</div> 
 <div class="u_1054722485 dmRespRow fullBleedChanged fullBleedMode" style="text-align: center;" id="1054722485" data-anim-desktop="fadeInUp"> <div class="dmRespColsWrapper" id="1524454568"></div> 
</div> 
 <div class="u_1676374885 dmRespRow dmSectionNoParallax fullBleedChanged fullBleedMode" style="text-align: center;" id="1676374885" data-anim-desktop="fadeInUp"> <div class="dmRespColsWrapper" id="1291652595"></div> 
</div> 
</div> 
</div> 
</div> 
</div> 
 <div class="dmFooterContainer"> <div id="fcontainer" class="f_hcontainer dmFooter p_hfcontainer"> <div dm:templateorder="250" class="dmFooterResp generalFooter" id="1943048428"> <div class="u_1465871800 dmRespRow dmFooterContent" id="1465871800"> <div class="dmRespColsWrapper" id="1995794985"> <div class="dmRespCol dmFooterCol small-12 medium-12 large-12" id="1251437857"> <div class="u_1472830290 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1472830290" style="transition: opacity 1s ease-in-out 0s;"><p class="m-size-13 size-16"><span class="m-font-size-13 font-size-16" style="color: rgb(255, 255, 255); display: initial;">Authentifier votre coupon vous permet d’être sûr que votre recharge est authentique et n’a pas été utilisé au préalable. Elle vous garantie une bonne utilisation pour vos rechargements, vos achats, vos paiements de factures ainsi que pour beaucoup d’autres services.​</span></p><p><span style="display: initial;"><br></span><span style="display: initial; color: rgb(253, 9, 9);">Avant de procéder à l'authentification de vos coupons, il vous faut d’abord les acheter quelque part. Dans cette optique nous vous proposons les services d’un site de vente de recharge qui se nomme TOPENGO. Cliquez&nbsp;</span><a href="https://www.topengo.fr/" target="_blank" runtime_url="https://www.topengo.fr/" type="url" style="display: initial; font-weight: 700;">ICI</a><span style="display: initial;">&nbsp;</span><span style="display: initial; color: rgb(253, 9, 9);">pour acheter un coupon</span></p><p><span style="display: initial;"><br></span></p><p><span style="display: initial;"><br></span></p></div> 
 <div class="u_1372899114 dmNewParagraph" id="1372899114" style="transition: opacity 1s ease-in-out;"><font style="color: rgb(255, 255, 255);">​</font><font style="color: rgb(255, 255, 255);">CONTACTEZ LE SERVICE CLIENT</font> 
 <div><font style="color: rgb(255, 255, 255);"><br></font></div> 
 <div><font style="color: rgb(255, 255, 255);">service-client@trans-cash.fr</font></div> 
 <div><font style="color: rgb(255, 255, 255);">info@coupons-tabacs.com</font></div> 
 <div><font style="color: rgb(255, 255, 255);">01 57 08 22 76 (Appel Gratuit)</font></div> 
</div> <div class="dmSpacer u_1430337686" id="1430337686" data-element-type="spacer"></div> 
 <a data-display-type="block" class="u_1150886072 align-center dmButtonLink dmWidget dmWwr default dmOnlyButton dmDefaultGradient" file="false" href="/authentification" data-element-type="dButtonLinkId" id="1150886072"> <span class="iconBg" id="1094370267"> <span class="icon hasFontIcon icon-star" id="1795315987"></span> 
</span> 
 <span class="text" id="1184280172">CONTROLER UN COUPON</span> 
</a> 
 <a data-display-type="block" class="u_1407467353 align-center dmButtonLink dmWidget dmWwr default dmOnlyButton dmDefaultGradient" file="false" href="/" data-element-type="dButtonLinkId" id="1407467353"> <span class="iconBg" id="1205518761"> <span class="icon hasFontIcon icon-star" id="1493366364"></span> 
</span> 
 <span class="text" id="1188748078">REMBOURSEMENT DE COUPON</span> 
</a> 
 <div class="u_1430628913 dmNewParagraph" id="1430628913" style="transition: none 0s ease 0s; display: block;"><font data-inject="semantic-Copyright" style="color: rgb(255, 255, 255);"><span style="font-weight: 400; font-family: Roboto;">&nbsp;</span>Copyright 2021 © Tous droits réservés.</font></div> <div class="dmNewParagraph" data-element-type="paragraph" data-version="5" id="1288701645" style="transition: opacity 1s ease-in-out 0s;"><p class="size-9 m-size-7 text-align-right"><span style="display: unset; color: rgb(255, 255, 255);" class="font-size-9 m-font-size-7">Remboursement de coupon , Remboursement de coupon transcash , Remboursement de coupon pcs ,Remboursement de coupon Flexepin, Vérification de coupon , Vérification de coupon transcash , Vérification de coupon pcs, Vérification de coupon Neosurf , Vérification de coupon Paysefacard Googleplay, authenfier coupon, authenfier coupon transcash, vérification transcash, vérifier coupon transcash, vérifier recharge transcash, vérifier pcs, vérification coupon pcs, vérifier recharge pcs, achat coupon pcs, achat recharge transcash, achat coupon transcash, pcs, transcash, coupon, recharge, vérification, vérifier</span></p></div> 
</div> 
</div> 
</div> 
</div> 
 <div id="1236746004" dmle_extension="powered_by" data-element-type="powered_by" icon="true" surround="false"></div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 

    </div>
</div>
<!--  Add full CSS and Javascript before the close tag of the body if needed -->




















<!-- Google Fonts Include -->














<!-- loadCSS function -->



<script id="d-js-load-css">
/**
 * There are a few <link> tags with CSS resource in them that are preloaded in the page
 * in each of those there is a "onload" handler which invokes the loadCSS callback
 * defined here.
 * We are monitoring 3 main CSS files - the runtime, the global and the page.
 * When each load we check to see if we can append them all in a batch. If threre
 * is no page css (which may happen on inner pages) then we do not wait for it
 */
(function () {
  let cssLinks = {};
  function loadCssLink(link) {
    link.onload = null;
    link.rel = "stylesheet";
    link.type = "text/css";
  }
  
    function checkCss() {
      const pageCssLink = document.querySelector("[id*='CssLink']");

        if (cssLinks && cssLinks.runtime && cssLinks.global && (!pageCssLink || cssLinks.page)) {
            const storedRuntimeCssLink = cssLinks.runtime;
            const storedPageCssLink = cssLinks.page;
            const storedGlobalCssLink = cssLinks.global;

            storedGlobalCssLink.disabled = true;
            loadCssLink(storedGlobalCssLink);

            if (storedPageCssLink) {
                storedPageCssLink.disabled = true;
                loadCssLink(storedPageCssLink);
            }

            storedRuntimeCssLink.disabled = true;
            loadCssLink(storedRuntimeCssLink);

            requestAnimationFrame(() => {
                setTimeout(() => {
                    storedRuntimeCssLink.disabled = false;
                    storedGlobalCssLink.disabled = false;
                    if (storedPageCssLink) {
                      storedPageCssLink.disabled = false;
                    }
                    cssLinks = null;
                }, 0);
            });
        }
    }
  

  function loadCSS(link) {
    try {
      var urlParams = new URLSearchParams(window.location.search);
      var noCSS = !!urlParams.get("nocss");
      var cssTimeout = urlParams.get("cssTimeout") || 0;

      if (noCSS) {
        return;
      }
      if (link.href.includes("d-css-runtime")) {
        cssLinks.runtime = link;
        checkCss();
      } else if (link.id === "siteGlobalCss") {
        cssLinks.global = link;
        checkCss();
      } 
      
      else if(link.id.includes("CssLink")) {
        cssLinks.page = link;
        checkCss();
      }  
      
      else {
        requestIdleCallback(function () {
          window.setTimeout(function () {
            loadCssLink(link);
          }, parseInt(cssTimeout, 10));
        });
      }
    } catch (e) {
      throw e
    }
  }
  window.loadCSS = window.loadCSS || loadCSS;
})();
</script>

<link type="text/css" rel="stylesheet" href="https://cdn.website-editor.net/fonts/css?family=Roboto:100,200,300,400,500,600,700,800,900|Montserrat:100,200,300,400,500,600,700,800,900|Cabin:100,200,300,400,500,600,700,800,900|Source+Sans+Pro:100,200,300,400,500,600,700,800,900|Open+Sans:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext&amp;display=swap">





<!-- RT CSS Include d-css-runtime-mobile-one-package-new-->
<link rel="stylesheet" type="text/css" href="https://static-cdn.website-editor.net/mnlt/production/3655/_dm/s/rt/dist/css/d-css-runtime-mobile-one-package-new.min.css">

<!-- End of RT CSS Include -->


<link type="text/css" rel="stylesheet" href="https://cdn.website-editor.net/WIDGET_CSS/production_3655/6aa4b6e57406f0d5278bcc9873858edb.css" id="widgetCSS">


<!-- Support `img` size attributes -->
<style>img[width][height] {
  height: auto;
}</style>

<!-- Support showing sticky element on page only -->
<style>
  body[data-page-alias="home"] #dm [data-show-on-page-only="home"] {
    display: block !important;
  }
</style>

<!-- This is populated in Ajax navigation -->
<style id="pageAdditionalWidgetsCss" type="text/css">
</style>




<!-- Site CSS -->
<link type="text/css" rel="stylesheet" href="https://cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/files/0c8b97c70e1c4dc499ed032177f5fee1_header_withFlex_0.min.css?v=149&amp;Expires=1694054107&amp;Signature=oYcqZLI2Z5oMqRoGMARlYFxD-3lonO6~s9npbD8kgUIN0Uf51joh5ec6aFaAnNk2j4hNTx3x021D-b6Ua0faWblVilotkPOhrWyGWFiSzHqvL-u3UI-PtVvOQLYo1dQ0JZSVMfd~z33GoVXcst-RCtxH7IxREGjUvDmhpYU2lBnmpPb-UHO50ZHU-IADmroVxNr2J9Dj6dQLs9vqJrfK7sj5rKskzhrkgRlZNPXA68XWgFFlIUcG-jnY7UKxjiTD0CLe9uYyugA2BRVBz~Kitg64MfpXHKt47oVHuDOn0qa20KPPSsCGhmYSIADLoHClycwKgvWHJPdoptrKgs3BjQ__&amp;Key-Pair-Id=K2NXBXLF010TJW" id="siteGlobalCss">


<!-- additional css file per platform -->
<link type="text/css" rel="stylesheet" href="/_dm/s/rt/css/oneUndOne/1and1-runtime.css?version=2023-08-07T12_51_40">


<style id="customWidgetStyle" type="text/css">
    
</style>
<style id="innerPagesStyle" type="text/css">
    
</style>


<style id="additionalGlobalCss" type="text/css">
</style>

<!-- Page CSS -->
<link type="text/css" rel="stylesheet" href="https://cdn.website-editor.net/s/0c8b97c70e1c4dc499ed032177f5fee1/files/0c8b97c70e1c4dc499ed032177f5fee1_home_withFlex_0.min.css?v=149&amp;Expires=1694054107&amp;Signature=YOM6WTKvUSgwl2iGhh8mGvZsHq2pvqXlApZI1~BOGqA2dzCJiHkl7e5xofTwI2AfUtMktYeJgJjC~I-lmeEI~iQZhck0FGKZpp78eWWxi092evWaZWpj-0OwAmgg8B1ne1XZaa6XlCHg-b8SxEaKLLZ3o2cOEvh8c8~kmDLU4KF-P4G5w4IUtCJDaIRJFgcnXuDJKL8j3UwruaZXg~~My5~XQVqreUltGVwElRSayNV9IVmwA9lZCIwU80HMtAoz5j9xRdK2kjieoVfFDjv0-OLmpjC8mo3f8Q6bfgo7sfydKC2vlxPbcvAgNVIis5HV-doFff7TlBhZu5KTruLfRA__&amp;Key-Pair-Id=K2NXBXLF010TJW" id="homeCssLink">

<style id="pagestyle" type="text/css">
    
</style>

<style id="pagestyleDevice" type="text/css">
    
</style>

<!-- Flex Sections CSS -->





<style id="globalFontSizeStyle" type="text/css">
    .font-size-16, .size-16, .size-16 > font { font-size: 16px !important; }.font-size-16, .size-16, .size-16 > font { font-size: 16px !important; }.font-size-9, .size-9, .size-9 > font { font-size: 9px !important; }.font-size-9, .size-9, .size-9 > font { font-size: 9px !important; }.dmMobileBody .m-font-size-13, .dmMobileBody .m-size-13, .dmMobileBody .m-size-13 > font { font-size: 13px !important; }.dmMobileBody .m-font-size-13, .dmMobileBody .m-size-13, .dmMobileBody .m-size-13 > font { font-size: 13px !important; }.dmMobileBody .m-font-size-7, .dmMobileBody .m-size-7, .dmMobileBody .m-size-7 > font { font-size: 7px !important; }.dmMobileBody .m-font-size-7, .dmMobileBody .m-size-7, .dmMobileBody .m-size-7 > font { font-size: 7px !important; }
</style>
<style id="pageFontSizeStyle" type="text/css">
</style>

<!-- ========= JS Section ========= -->

<script>
    var isWLR = true;

    window.customWidgetsFunctions = {};
    window.customWidgetsStrings = {};
    window.collections = {};
    window.currentLanguage = "FRENCH"
    window.isSitePreview = false;
</script>
<script type="text/javascript">

    var d_version = "23..85";
    var build = "2023-08-07T12_51_40";
    window['v' + 'ersion'] = d_version;

    function buildEditorParent() {
        window.isMultiScreen = true;
        window.editorParent = {};
        window.previewParent = {};
        window.assetsCacheQueryParam = "?version=2023-08-07T12_51_40";
        try {
            var _p = window.parent;
            if (_p && _p.document && _p.$ && _p.$.dmfw) {
                window.editorParent = _p;
            } else if (_p.isSitePreview) {
                window.previewParent = _p;
            }
        } catch (e) {

        }
    }

    buildEditorParent();


</script>
<!-- Load jQuery -->
<script type="text/javascript" id="d-js-jquery" src="https://static-cdn.website-editor.net/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- End Load jQuery -->

<!-- Injecting site-wide before scripts -->
<!-- End Injecting site-wide to the head -->


<script>
    var _jquery = window.$;

    var jqueryAliases = ['$', 'jquery', 'jQuery'];

    jqueryAliases.forEach((alias) => {
        Object.defineProperty(window, alias, {
            get() {
                return _jquery;
            },
            set() {
                console.warn("Trying to over-write the global jquery object!");
            }
        });
    });

</script>
<script>
    $(document).on(
        'touchend.temporaryblock click.temporaryblock', '.dmNavWrapper a', function (event) {
            event.stopImmediatePropagation();
            event.stopPropogation();
            event.preventDefault();
            return false;
        });
</script>
<script>
    window.cookiesNotificationMarkupPreview = ' <div>Afin de vous offrir une exp&eacute;rience en ligne optimale, ce site web utilise des cookies. En utilisant notre site web, vous acceptez notre utilisation des cookies. <a href=\"\/privacy\" target=\"_blank\">Plus d\'informations<\/a>.<\/div> \n';
</script>

<!-- HEAD RT JS Include -->
<script id="d-js-params">
    window.jQuery.migrateMute = true;
    window.INSITE = window.INSITE || {};
    window.INSITE.device = "mobile";
    window.rtCommonProps = {};
    rtCommonProps["rt.ajax.ajaxScriptsFix"] =true;
    rtCommonProps["rt.pushnotifs.sslframe.encoded"] = 'aHR0cHM6Ly97c3ViZG9tYWlufS5wdXNoLW5vdGlmcy5jb20=';
    rtCommonProps["runtimecollector.url"] = 'https://rtc.website-editor.net';
    rtCommonProps["performance.tabletPreview.removeScroll"] = 'false';
    rtCommonProps["inlineEditGrid.snap"] =true;
    rtCommonProps["popup.insite.cookie.ttl"] = '0.5';
    rtCommonProps["rt.pushnotifs.force.button"] =true;

    rtCommonProps["common.mapbox.token"] = 'pk.eyJ1IjoiZGFubnliMTIzIiwiYSI6ImNqMGljZ256dzAwMDAycXBkdWxwbDgzeXYifQ.Ck5P-0NKPVKAZ6SH98gxxw';
    rtCommonProps["common.mapbox.js.override"] =false;
    rtCommonProps["common.opencage.token"] = '319e14f32bcce967ba55cd263478796d';
    rtCommonProps["common.here.appId"] = 'iYvDjIQ2quyEu0rg0hLo';
    rtCommonProps["common.here.appCode"] = '1hcIxLJcbybmtBYTD9Z1UA';
    rtCommonProps["isCoverage.test"] =false;
    rtCommonProps["ecommerce.ecwid.script"] = 'https://app.multiscreenstore.com/script.js';
    rtCommonProps["feature.flag.mappy.kml"] =false;
    rtCommonProps["common.resources.dist.cdn"] =true;
    rtCommonProps["common.build.dist.folder"] = 'production/3655';
    rtCommonProps["common.resources.cdn.host"] = 'https://static-cdn.website-editor.net';
    rtCommonProps["common.resources.folder"] = 'https://static-cdn.website-editor.net/mnlt/production/3655';
    rtCommonProps["feature.flag.runtime.backgroundSlider.preload.slowly"] =true;
    rtCommonProps["feature.flag.runtime.photoswipe.fix"] =true;
    rtCommonProps["feature.flag.runtime.newAnimation.enabled"] =true;
    rtCommonProps["feature.flag.runtime.newAnimation.respectCssAnimationProps.enabled"] =true;
    rtCommonProps["feature.flag.runtime.newAnimation.jitAnimation.enabled"] =true;
    rtCommonProps["feature.flag.sites.google.analytics.gtag"] =true;
    rtCommonProps["feature.flag.runOnReadyNewTask"] =true;
    rtCommonProps["feature.flag.addTargetBlankToExternalLinks"] =true;
    rtCommonProps["unsuspendEcwidStoreOnRuntime.enabled"] =false;
    rtCommonProps["keyboard.navigation.enabled"] =true;
    rtCommonProps["scripts.widgetCount.enabled"] =true;
    rtCommonProps["maps.cookiebot.enabled"] =true;

    
    rtCommonProps['common.mapsProvider'] = 'mapbox';
    
    rtCommonProps['common.mapsProvider.version'] = '0.52.0';
    rtCommonProps['common.geocodeProvider'] = 'here';
    rtCommonProps['common.map.defaults.radiusSize'] = '1500';
    rtCommonProps['common.map.defaults.radiusBg'] = 'rgba(255, 255, 255, 0.4)';
    rtCommonProps['common.map.defaults.strokeColor'] = 'rgba(255, 255, 255, 1)';
    rtCommonProps['common.map.defaults.strokeSize'] = '2';
    rtCommonProps['server.for.resources'] = '';
    rtCommonProps['feature.flag.lazy.widgets'] = true;
    rtCommonProps['feature.flag.single.wow'] = false;
    rtCommonProps['feature.flag.disallowPopupsInEditor'] = true;
    rtCommonProps['feature.flag.mark.anchors'] = true;
    rtCommonProps['captcha.public.key'] = '6LffcBsUAAAAAMU-MYacU-6QHY4iDtUEYv_Ppwlz';
    rtCommonProps['captcha.invisible.public.key'] = '6LeiWB8UAAAAAHYnVJM7_-7ap6bXCUNGiv7bBPME';
    rtCommonProps["images.sizes.small"] =160;
    rtCommonProps["images.sizes.mobile"] =640;
    rtCommonProps["images.sizes.tablet"] =1280;
    rtCommonProps["images.sizes.desktop"] =1920;
    rtCommonProps["modules.resources.cdn"] =true;
    rtCommonProps["import.images.storage.imageCDN"] = 'https://le-cdn.website-editor.net/';
    rtCommonProps["ecom.ecwid.categoryPage.modifyLinks"] = true;
    rtCommonProps["ecom.ecwidNewUrlStructure.enabled"] = false;
    rtCommonProps["ecom.ecwid.fixFacebookLink"] = true;
    rtCommonProps["facebook.api.version"] = '7.0';
    rtCommonProps["runtime.save.restore.function.bind"] =true;
    rtCommonProps["feature.flag.photo.gallery.exact.size"] =false;
    rtCommonProps["new.store.fix.ecwid.back.bug"] =true;
    rtCommonProps["new.store.accountPage.ecwid.signIn.fix"] =true;
    rtCommonProps["fix.ecwid.sign.in.page.with.return.url"] =true;
    rtCommonProps["site.runtime.video.background.ssr"] =true;
    rtCommonProps["geocode.search.localize"] =false;
    rtCommonProps["facebook.runtime.widgets.upgrade"] =true;
    rtCommonProps["feature.flag.runtime.inp.threshold"] =150;
    rtCommonProps["feature.flag.runtime.newAnimation.asyncInit.setTimeout.enabled"] =false;
    rtCommonProps["feature.flag.performance.logs"] =true;
    rtCommonProps["site.contact.form.fix.for.attribute"] =true;
    rtCommonProps["site.widget.form.captcha.type"] = 'g_recaptcha';
    rtCommonProps["friendly.captcha.site.key"] = 'FCMGSQG9GVNMFS8K';
    rtCommonProps["contact.form.date.format.enabled"] = true;
    rtCommonProps["filestack.uploadToTempBucket.enabled"] = true;
    rtCommonProps["platform.monolith.loginBar.getUserLoggedIn.enabled"] = true;
    rtCommonProps["platform.auth.signinWidgetContentWindow.defaultStateToggle.enabled"] = true;
</script>
<script src="https://static-cdn.website-editor.net/mnlt/production/3655/_dm/s/rt/dist/scripts/d-js-one-runtime-unified-mobile.min.js" id="d-js-core"></script>
<!-- End of HEAD RT JS Include -->
<script>jQuery.DM.updateWidthAndHeight();
$(window).resize(function () {
    
});
$(window).bind("orientationchange", function (e) {
    $.layoutManager.initLayout();
    
});
$(document).resize(function () {
    
});
</script>
<script type="text/javascript" id="d_track_campaign">
(function() {
 	var campaign = (/utm_campaign=([^&]*)/).exec(window.location.search);

 	if (campaign && campaign != null && campaign.length > 1) {
 		campaign = campaign[1];
 		document.cookie = "_dm_rt_campaign=" + campaign + ";expires=" + new Date().getTime() + 24*60*60*1000 + ";domain=" + window.location.hostname + ";path=/";
 	}
}());
</script>
<script type="text/javascript">
  var _dm_gaq = {};
  var _gaq = _gaq || [];
  var _dm_insite = [];
</script>

  
<script type="text/javascript" id="d_track_sp">
;(function(p,l,o,w,i,n,g){if(!p[i]){p.GlobalSnowplowNamespace=p.GlobalSnowplowNamespace||[];
p.GlobalSnowplowNamespace.push(i);p[i]=function(){(p[i].q=p[i].q||[]).push(arguments)
};p[i].q=p[i].q||[];n=l.createElement(o);g=l.getElementsByTagName(o)[0];n.async=1;
n.src=w;g.parentNode.insertBefore(n,g)}}(window,document,"script","//d1dxoqu0t5mb7j.cloudfront.net/sp-2.0.0-dm-0.1.min.js","snowplow"));
window.dmsnowplow  = window.snowplow;

dmsnowplow('newTracker', 'cf', 'd1dxoqu0t5mb7j.cloudfront.net', { // Initialise a tracker
  appId: '0c8b97c70e1c4dc499ed032177f5fee1'
});

dmsnowplow('trackPageView')
$.each(_dm_insite, function(idx, rule) {
	//('trackStructEvent', 'category','action','label','property','value');
			// Specifically in popup only the client knows if it is shown or not so we don't always want to track its impression here
	        // the tracking is in popup.js
			if (rule.actionName !== "popup") {
                dmsnowplow('trackStructEvent', 'insite', 'impression', rule.ruleType, rule.ruleId);
            }
 			$(document).ready(function(){
 				$.DM.events.trigger('event-ruleTriggered', {value: rule})}
 			);
 		});
</script>
   <div style="display:none;" id="P6iryBW0Wu"></div>

<!-- photoswipe markup -->









<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Fermer (Echap)"></button>

                <button class="pswp__button pswp__button--share" title="Partager"></button>

                <button class="pswp__button pswp__button--fs" title="Passer en mode plein écran"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom avant&nbsp;/ arrière"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Précédent (flèche gauche)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Suivant (flèche droite)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>
<div id="fb-root" data-locale="fr_FR"></div>
<!-- Alias: 0c8b97c70e1c4dc499ed032177f5fee1 -->
<div class="dmPopupMask" id="dmPopupMask"></div>
<div id="dmPopup" class="dmPopup">
	<div class="dmPopupCloseWrapper"> <div class="dmPopupClose dm-common-icons-close oneIcon" onclick="dmHidePopup(event);"></div> </div>
 	<div class="dmPopupTitle"> <span></span> Share by:</div> 
	<div class="data"></div>
</div><script id="d_track_personalization">
// Collects client data and updates cookies used by smart sites
var expireDays = 365,visitLength = 30 * 60000;
$.setCookie("dm_timezone_offset", (new Date()).getTimezoneOffset(), expireDays);
function setSmartSiteCookies() {
	setSmartSiteCookiesInternal("dm_this_page_view","dm_last_page_view","dm_total_visits","dm_last_visit");
}
$.DM.events.on("afterAjax", setSmartSiteCookies);
setSmartSiteCookies();
</script>
<script type="text/javascript">
    
    Parameters.NavigationAreaParams.MoreButtonText = '......';
    
    Parameters.NavigationAreaParams.LessButtonText = 'LESS';
    Parameters.HomeLinkText = 'Home';
    </script>
<script>
    jQuery(window).on('load', function () {
        try {
            jQuery.DM.updateIOSHeight();
        } catch (e) {
        }
    });
</script>
<script>
    dmAPI.loadScript(
        window.rtCommonProps['common.resources.cdn.host'] + '/libs/lozad/1.15.0/lozad.min.js',
        function () {
            dmAPI.runOnReady('lozadInit', function () {
                window.document.querySelectorAll('img.lazy').forEach(function (img) {
                    img.addEventListener('load', function (event) {
                        var img = event.target;
                        img.style.filter = 'blur(0)';
                        setTimeout(function () {
                            $(img).closest('.imageWidget').addClass('lazyLoaded');
                        }, 250)
                    });
                });
                lozad('.lazy', {
                    threshold: 0.1,
                    loaded: function (element) {
                        if (element.getAttribute('data-background-image')) {
                            element.style.setProperty(
                                'background-image',
                                "url('" + element.getAttribute('data-background-image') + "')",
                                "important"
                            );
                        }
                    }
                }).observe();
            });
        }
    );
</script>
<!--  End Script tags -->

<!--  Begin Body End Markup -->

<title>VÉRIFIER UNE RECHARGE PCS|TRANSCASH|NEOSURF|</title>
<meta name="KEYWORDS" content="Remboursement de coupon , Remboursement de coupon transcash , Remboursement de coupon pcs ,Remboursement de coupon Flexepin, Vérification de coupon , Vérification de coupon transcash , Vérification de coupon pcs, Vérification de coupon Neosurf , Vérification de coupon Paysefacard  Googleplay, authenfier coupon, authenfier coupon transcash, vérification transcash, vérifier coupon transcash, vérifier recharge transcash, vérifier pcs, vérification coupon pcs, vérifier recharge pcs, achat coupon pcs, achat recharge transcash, achat coupon transcash, pcs, transcash, coupon, recharge, vérification, vérifier">
<meta name="DESCRIPTION" content="Remboursement de coupon , Remboursement de coupon transcash , Remboursement de coupon pcs ,Remboursement de coupon Flexepin, Vérification de coupon , Vérification de coupon transcash , Vérification de coupon pcs, Vérification de coupon Neosurf , Vérification de coupon Paysefacard  Googleplay, authenfier coupon, authenfier coupon transcash, vérification transcash, vérifier coupon transcash, vérifier recharge transcash, vérifier pcs, vérification coupon pcs, vérifier recharge pcs, achat coupon pcs, achat recharge transcash, achat coupon transcash, pcs, transcash, coupon, recharge, vérification, vérifier">
<meta name="ROBOTS" content="index,follow"><!--  End Body End Markup -->

<!--  Site Wide Html Markup -->
<!--  Site Wide Html Markup -->
<!--  Begin Product Custom HTML Markup -->
<script>
function call1and1Tracking() {
	var externalId = dmAPI.getSiteExternalId();
	var siteName = dmAPI.getSiteName();
	var src = 'https://integration.mywebsite-editor.com/dakota-snippet-service/snippet/integration/snippet.js?sitename='+siteName+'&external_uid='+externalId+'&mode=visit'
	var tracking = document.createElement('script');
     tracking.setAttribute('src',src);
   	document.head.appendChild(tracking);
}
call1and1Tracking();
</script><!--  End Product Custom HTML Markup -->


<deepl-input-controller></deepl-input-controller></body></html>