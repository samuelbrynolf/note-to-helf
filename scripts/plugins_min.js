(function(a){a.fn.fitVids=function(b){var c={customSelector:null};if(!document.getElementById("fit-vids-style")){var f=document.createElement("div"),d=document.getElementsByTagName("base")[0]||document.getElementsByTagName("script")[0],e="&shy;<style>.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>";f.className="fit-vids-style";f.id="fit-vids-style";f.style.display="none";f.innerHTML=e;d.parentNode.insertBefore(f,d)}if(b){a.extend(c,b)}return this.each(function(){var g=["iframe[src*='player.vimeo.com']","iframe[src*='youtube.com']","iframe[src*='youtube-nocookie.com']","iframe[src*='kickstarter.com'][src*='video.html']","object","embed"];if(c.customSelector){g.push(c.customSelector)}var h=a(this).find(g.join(","));h=h.not("object object");h.each(function(){var m=a(this);if(this.tagName.toLowerCase()==="embed"&&m.parent("object").length||m.parent(".fluid-width-video-wrapper").length){return}var i=(this.tagName.toLowerCase()==="object"||(m.attr("height")&&!isNaN(parseInt(m.attr("height"),10))))?parseInt(m.attr("height"),10):m.height(),j=!isNaN(parseInt(m.attr("width"),10))?parseInt(m.attr("width"),10):m.width(),k=i/j;if(!m.attr("id")){var l="fitvid"+Math.floor(Math.random()*999999);m.attr("id",l)}m.wrap('<div class="fluid-width-video-wrapper"></div>').parent(".fluid-width-video-wrapper").css("padding-top",(k*100)+"%");m.removeAttr("height").removeAttr("width")})})}})(window.jQuery);(function(aC){var aB="Close",aA="BeforeClose",az="AfterClose",ay="BeforeAppend",ax="MarkupParse",aw="Open",av="Change",au="mfp",at="."+au,ar="mfp-ready",aq="mfp-removing",ap="mfp-prevent-close",ao,an=function(){},am=!!window.jQuery,al,ak=aC(window),aj,ai,ah,ag,af,ae=function(d,c){ao.ev.on(au+d+at,c)},ad=function(a,j,i,h){var g=document.createElement("div");return g.className="mfp-"+a,i&&(g.innerHTML=i),h?j&&j.appendChild(g):(g=aC(g),j&&g.appendTo(j)),g},ac=function(a,d){ao.ev.triggerHandler(au+a,d),ao.st.callbacks&&(a=a.charAt(0).toLowerCase()+a.slice(1),ao.st.callbacks[a]&&ao.st.callbacks[a].apply(ao,aC.isArray(d)?d:[d]))},ab=function(){(ao.st.focus?ao.content.find(ao.st.focus).eq(0):ao.wrap).focus()},aa=function(a){if(a!==af||!ao.currTemplate.closeBtn){ao.currTemplate.closeBtn=aC(ao.st.closeMarkup.replace("%title%",ao.st.tClose)),af=a}return ao.currTemplate.closeBtn},Z=function(){aC.magnificPopup.instance||(ao=new an,ao.init(),aC.magnificPopup.instance=ao)},Y=function(a){if(aC(a).hasClass(ap)){return}var f=ao.st.closeOnContentClick,e=ao.st.closeOnBgClick;if(f&&e){return !0}if(!ao.content||aC(a).hasClass("mfp-close")||ao.preloader&&a===ao.preloader[0]){return !0}if(a!==ao.content[0]&&!aC.contains(ao.content[0],a)){if(e&&aC.contains(document,a)){return !0}}else{if(f){return !0}}return !1},X=function(){var d=document.createElement("p").style,c=["ms","O","Moz","Webkit"];if(d.transition!==undefined){return !0}while(c.length){if(c.pop()+"Transition" in d){return !0}}return !1};an.prototype={constructor:an,init:function(){var a=navigator.appVersion;ao.isIE7=a.indexOf("MSIE 7.")!==-1,ao.isIE8=a.indexOf("MSIE 8.")!==-1,ao.isLowIE=ao.isIE7||ao.isIE8,ao.isAndroid=/android/gi.test(a),ao.isIOS=/iphone|ipad|ipod/gi.test(a),ao.supportsTransition=X(),ao.probablyMobile=ao.isAndroid||ao.isIOS||/(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),aj=aC(document.body),ai=aC(document),ao.popupsCache={}},open:function(t){var s;if(t.isObj===!1){ao.items=t.items.toArray(),ao.index=0;var r=t.items,q;for(s=0;s<r.length;s++){q=r[s],q.parsed&&(q=q.el[0]);if(q===t.el[0]){ao.index=s;break}}}else{ao.items=aC.isArray(t.items)?t.items:[t.items],ao.index=t.index||0}if(ao.isOpen){ao.updateItemHTML();return}ao.types=[],ag="",t.mainEl&&t.mainEl.length?ao.ev=t.mainEl.eq(0):ao.ev=ai,t.key?(ao.popupsCache[t.key]||(ao.popupsCache[t.key]={}),ao.currTemplate=ao.popupsCache[t.key]):ao.currTemplate={},ao.st=aC.extend(!0,{},aC.magnificPopup.defaults,t),ao.fixedContentPos=ao.st.fixedContentPos==="auto"?!ao.probablyMobile:ao.st.fixedContentPos,ao.st.modal&&(ao.st.closeOnContentClick=!1,ao.st.closeOnBgClick=!1,ao.st.showCloseBtn=!1,ao.st.enableEscapeKey=!1),ao.bgOverlay||(ao.bgOverlay=ad("bg").on("click"+at,function(){ao.close()}),ao.wrap=ad("wrap").attr("tabindex",-1).on("click"+at,function(b){Y(b.target)&&ao.close()}),ao.container=ad("container",ao.wrap)),ao.contentContainer=ad("content"),ao.st.preloader&&(ao.preloader=ad("preloader",ao.container,ao.st.tLoading));var n=aC.magnificPopup.modules;for(s=0;s<n.length;s++){var k=n[s];k=k.charAt(0).toUpperCase()+k.slice(1),ao["init"+k].call(ao)}ac("BeforeOpen"),ao.st.showCloseBtn&&(ao.st.closeBtnInside?(ae(ax,function(h,e,l,i){l.close_replaceWith=aa(i.type)}),ag+=" mfp-close-btn-in"):ao.wrap.append(aa())),ao.st.alignTop&&(ag+=" mfp-align-top"),ao.fixedContentPos?ao.wrap.css({overflow:ao.st.overflowY,overflowX:"hidden",overflowY:ao.st.overflowY}):ao.wrap.css({top:ak.scrollTop(),position:"absolute"}),(ao.st.fixedBgPos===!1||ao.st.fixedBgPos==="auto"&&!ao.fixedContentPos)&&ao.bgOverlay.css({height:ai.height(),position:"absolute"}),ao.st.enableEscapeKey&&ai.on("keyup"+at,function(b){b.keyCode===27&&ao.close()}),ak.on("resize"+at,function(){ao.updateSize()}),ao.st.closeOnContentClick||(ag+=" mfp-auto-cursor"),ag&&ao.wrap.addClass(ag);var j=ao.wH=ak.height(),g={};if(ao.fixedContentPos&&ao._hasScrollBar(j)){var f=ao._getScrollbarSize();f&&(g.paddingRight=f)}ao.fixedContentPos&&(ao.isIE7?aC("body, html").css("overflow","hidden"):g.overflow="hidden");var a=ao.st.mainClass;ao.isIE7&&(a+=" mfp-ie7"),a&&ao._addClassToMFP(a),ao.updateItemHTML(),ac("BuildControls"),aC("html").css(g),ao.bgOverlay.add(ao.wrap).prependTo(document.body),ao._lastFocusedEl=document.activeElement,setTimeout(function(){ao.content?(ao._addClassToMFP(ar),ab()):ao.bgOverlay.addClass(ar),ai.on("focusin"+at,function(c){if(c.target!==ao.wrap[0]&&!aC.contains(ao.wrap[0],c.target)){return ab(),!1}})},16),ao.isOpen=!0,ao.updateSize(j),ac(aw)},close:function(){if(!ao.isOpen){return}ac(aA),ao.isOpen=!1,ao.st.removalDelay&&!ao.isLowIE&&ao.supportsTransition?(ao._addClassToMFP(aq),setTimeout(function(){ao._close()},ao.st.removalDelay)):ao._close()},_close:function(){ac(aB);var b=aq+" "+ar+" ";ao.bgOverlay.detach(),ao.wrap.detach(),ao.container.empty(),ao.st.mainClass&&(b+=ao.st.mainClass+" "),ao._removeClassFromMFP(b);if(ao.fixedContentPos){var a={paddingRight:""};ao.isIE7?aC("body, html").css("overflow",""):a.overflow="",aC("html").css(a)}ai.off("keyup"+at+" focusin"+at),ao.ev.off(at),ao.wrap.attr("class","mfp-wrap").removeAttr("style"),ao.bgOverlay.attr("class","mfp-bg"),ao.container.attr("class","mfp-container"),ao.st.showCloseBtn&&(!ao.st.closeBtnInside||ao.currTemplate[ao.currItem.type]===!0)&&ao.currTemplate.closeBtn&&ao.currTemplate.closeBtn.detach(),ao._lastFocusedEl&&aC(ao._lastFocusedEl).focus(),ao.currItem=null,ao.content=null,ao.currTemplate=null,ao.prevHeight=0,ac(az)},updateSize:function(e){if(ao.isIOS){var d=document.documentElement.clientWidth/window.innerWidth,f=window.innerHeight*d;ao.wrap.css("height",f),ao.wH=f}else{ao.wH=e||ak.height()}ao.fixedContentPos||ao.wrap.css("height",ao.wH),ac("Resize")},updateItemHTML:function(){var a=ao.items[ao.index];ao.contentContainer.detach(),ao.content&&ao.content.detach(),a.parsed||(a=ao.parseEl(ao.index));var h=a.type;ac("BeforeChange",[ao.currItem?ao.currItem.type:"",h]),ao.currItem=a;if(!ao.currTemplate[h]){var g=ao.st[h]?ao.st[h].markup:!1;ac("FirstMarkupParse",g),g?ao.currTemplate[h]=aC(g):ao.currTemplate[h]=!0}ah&&ah!==a.type&&ao.container.removeClass("mfp-"+ah+"-holder");var f=ao["get"+h.charAt(0).toUpperCase()+h.slice(1)](a,ao.currTemplate[h]);ao.appendContent(f,h),a.preloaded=!0,ac(av,a),ah=a.type,ao.container.prepend(ao.contentContainer),ac("AfterChange")},appendContent:function(d,c){ao.content=d,d?ao.st.showCloseBtn&&ao.st.closeBtnInside&&ao.currTemplate[c]===!0?ao.content.find(".mfp-close").length||ao.content.append(aa()):ao.content=d:ao.content="",ac(ay),ao.container.addClass("mfp-"+c+"-holder"),ao.contentContainer.append(ao.content)},parseEl:function(a){var j=ao.items[a],i=j.type;j.tagName?j={el:aC(j)}:j={data:j,src:j.src};if(j.el){var h=ao.types;for(var g=0;g<h.length;g++){if(j.el.hasClass("mfp-"+h[g])){i=h[g];break}}j.src=j.el.attr("data-mfp-src"),j.src||(j.src=j.el.attr("href"))}return j.type=i||ao.st.type||"inline",j.index=a,j.parsed=!0,ao.items[a]=j,ac("ElementParse",j),ao.items[a]},addGroup:function(f,e){var h=function(a){a.mfpEl=this,ao._openClick(a,f,e)};e||(e={});var g="click.magnificPopup";e.mainEl=f,e.items?(e.isObj=!0,f.off(g).on(g,h)):(e.isObj=!1,e.delegate?f.off(g).on(g,e.delegate,h):(e.items=f,f.off(g).on(g,h)))},_openClick:function(a,j,i){var h=i.midClick!==undefined?i.midClick:aC.magnificPopup.defaults.midClick;if(!h&&(a.which===2||a.ctrlKey||a.metaKey)){return}var g=i.disableOn!==undefined?i.disableOn:aC.magnificPopup.defaults.disableOn;if(g){if(aC.isFunction(g)){if(!g.call(ao)){return !0}}else{if(ak.width()<g){return !0}}}a.type&&(a.preventDefault(),ao.isOpen&&a.stopPropagation()),i.el=aC(a.mfpEl),i.delegate&&(i.items=j.find(i.delegate)),ao.open(i)},updateStatus:function(e,d){if(ao.preloader){al!==e&&ao.container.removeClass("mfp-s-"+al),!d&&e==="loading"&&(d=ao.st.tLoading);var f={status:e,text:d};ac("UpdateStatus",f),e=f.status,d=f.text,ao.preloader.html(d),ao.preloader.find("a").on("click",function(b){b.stopImmediatePropagation()}),ao.container.addClass("mfp-s-"+e),al=e}},_addClassToMFP:function(b){ao.bgOverlay.addClass(b),ao.wrap.addClass(b)},_removeClassFromMFP:function(b){this.bgOverlay.removeClass(b),ao.wrap.removeClass(b)},_hasScrollBar:function(b){return(ao.isIE7?ai.height():document.body.scrollHeight)>(b||ak.height())},_parseMarkup:function(a,h,g){var f;g.data&&(h=aC.extend(g.data,h)),ac(ax,[a,h,g]),aC.each(h,function(b,j){if(j===undefined||j===!1){return !0}f=b.split("_");if(f.length>1){var i=a.find(at+"-"+f[0]);if(i.length>0){var e=f[1];e==="replaceWith"?i[0]!==j[0]&&i.replaceWith(j):e==="img"?i.is("img")?i.attr("src",j):i.replaceWith('<img src="'+j+'" class="'+i.attr("class")+'" />'):i.attr(f[1],j)}}else{a.find(at+"-"+b).html(j)}})},_getScrollbarSize:function(){if(ao.scrollbarSize===undefined){var b=document.createElement("div");b.id="mfp-sbm",b.style.cssText="width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;",document.body.appendChild(b),ao.scrollbarSize=b.offsetWidth-b.clientWidth,document.body.removeChild(b)}return ao.scrollbarSize}},aC.magnificPopup={instance:null,proto:an.prototype,modules:[],open:function(d,c){return Z(),d||(d={}),d.isObj=!0,d.index=c||0,this.instance.open(d)},close:function(){return aC.magnificPopup.instance.close()},registerModule:function(a,d){d.options&&(aC.magnificPopup.defaults[a]=d.options),aC.extend(this.proto,d.proto),this.modules.push(a)},defaults:{disableOn:0,key:null,midClick:!1,mainClass:"",preloader:!0,focus:"",closeOnContentClick:!1,closeOnBgClick:!0,closeBtnInside:!0,showCloseBtn:!0,enableEscapeKey:!0,modal:!1,alignTop:!1,removalDelay:0,fixedContentPos:"auto",fixedBgPos:"auto",overflowY:"auto",closeMarkup:'<button title="%title%" type="button" class="mfp-close">&times;</button>',tClose:"Close (Esc)",tLoading:"Loading..."}},aC.fn.magnificPopup=function(a){Z();var j=aC(this);if(typeof a=="string"){if(a==="open"){var i,h=am?j.data("magnificPopup"):j[0].magnificPopup,g=parseInt(arguments[1],10)||0;h.items?i=h.items[g]:(i=j,h.delegate&&(i=i.find(h.delegate)),i=i.eq(g)),ao._openClick({mfpEl:i},j,h)}else{ao.isOpen&&ao[a].apply(ao,Array.prototype.slice.call(arguments,1))}}else{am?j.data("magnificPopup",a):j[0].magnificPopup=a,ao.addGroup(j,a)}return j};var W="inline",V,U,T,S=function(){T&&(U.after(T.addClass(V)).detach(),T=null)};aC.magnificPopup.registerModule(W,{options:{hiddenClass:"hide",markup:"",tNotFound:"Content not found"},proto:{initInline:function(){ao.types.push(W),ae(aB+"."+W,function(){S()})},getInline:function(a,j){S();if(a.src){var i=ao.st.inline,h=aC(a.src);if(h.length){var g=h[0].parentNode;g&&g.tagName&&(U||(V=i.hiddenClass,U=ad(V),V="mfp-"+V),T=h.after(U).detach().removeClass(V)),ao.updateStatus("ready")}else{ao.updateStatus("error",i.tNotFound),h=aC("<div>")}return a.inlineElement=h,h}return ao.updateStatus("ready"),ao._parseMarkup(j,{},a),j}}});var R,Q=function(a){if(a.data&&a.data.title!==undefined){return a.data.title}var d=ao.st.image.titleSrc;if(d){if(aC.isFunction(d)){return d.call(ao,a)}if(a.el){return a.el.attr(d)||""}}return""};aC.magnificPopup.registerModule("image",{options:{markup:'<div class="mfp-figure"><div class="mfp-close"></div><div class="mfp-img"></div><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></div>',cursor:"mfp-zoom-out-cur",titleSrc:"title",verticalFit:!0,tError:'<a href="%url%">The image</a> could not be loaded.'},proto:{initImage:function(){var b=ao.st.image,d=".image";ao.types.push("image"),ae(aw+d,function(){ao.currItem.type==="image"&&b.cursor&&aj.addClass(b.cursor)}),ae(aB+d,function(){b.cursor&&aj.removeClass(b.cursor),ak.off("resize"+at)}),ae("Resize"+d,ao.resizeImage),ao.isLowIE&&ae("AfterChange",ao.resizeImage)},resizeImage:function(){var d=ao.currItem;if(!d||!d.img){return}if(ao.st.image.verticalFit){var c=0;ao.isLowIE&&(c=parseInt(d.img.css("padding-top"),10)+parseInt(d.img.css("padding-bottom"),10)),d.img.css("max-height",ao.wH-c)}},_onImageHasSize:function(b){b.img&&(b.hasSize=!0,R&&clearInterval(R),b.isCheckingImgSize=!1,ac("ImageHasSize",b),b.imgHidden&&(ao.content&&ao.content.removeClass("mfp-loading"),b.imgHidden=!1))},findImageSize:function(f){var e=0,h=f.img[0],g=function(a){R&&clearInterval(R),R=setInterval(function(){if(h.naturalWidth>0){ao._onImageHasSize(f);return}e>200&&clearInterval(R),e++,e===3?g(10):e===40?g(50):e===100&&g(500)},a)};g(1)},getImage:function(a,p){var o=0,n=function(){a&&(a.img[0].complete?(a.img.off(".mfploader"),a===ao.currItem&&(ao._onImageHasSize(a),ao.updateStatus("ready")),a.hasSize=!0,a.loaded=!0,ac("ImageLoadComplete")):(o++,o<200?setTimeout(n,100):m()))},m=function(){a&&(a.img.off(".mfploader"),a===ao.currItem&&(ao._onImageHasSize(a),ao.updateStatus("error",l.tError.replace("%url%",a.src))),a.hasSize=!0,a.loaded=!0,a.loadError=!0)},l=ao.st.image,k=p.find(".mfp-img");if(k.length){var j=document.createElement("img");j.className="mfp-img",a.img=aC(j).on("load.mfploader",n).on("error.mfploader",m),j.src=a.src,k.is("img")&&(a.img=a.img.clone()),a.img[0].naturalWidth>0&&(a.hasSize=!0)}return ao._parseMarkup(p,{title:Q(a),img_replaceWith:a.img},a),ao.resizeImage(),a.hasSize?(R&&clearInterval(R),a.loadError?(p.addClass("mfp-loading"),ao.updateStatus("error",l.tError.replace("%url%",a.src))):(p.removeClass("mfp-loading"),ao.updateStatus("ready")),p):(ao.updateStatus("loading"),a.loading=!0,a.hasSize||(a.imgHidden=!0,p.addClass("mfp-loading"),ao.findImageSize(a)),p)}}});var P,O=function(){return P===undefined&&(P=document.createElement("p").style.MozTransform!==undefined),P};aC.magnificPopup.registerModule("zoom",{options:{enabled:!1,easing:"ease-in-out",duration:300,opener:function(b){return b.is("img")?b:b.find("img")}},proto:{initZoom:function(){var b=ao.st.zoom,n=".zoom";if(!b.enabled||!ao.supportsTransition){return}var m=b.duration,l=function(a){var o=a.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),i="all "+b.duration/1000+"s "+b.easing,h={position:"fixed",zIndex:9999,left:0,top:0,"-webkit-backface-visibility":"hidden"},g="transition";return h["-webkit-"+g]=h["-moz-"+g]=h["-o-"+g]=h[g]=i,o.css(h),o},k=function(){ao.content.css("visibility","visible")},j,c;ae("BuildControls"+n,function(){if(ao._allowZoom()){clearTimeout(j),ao.content.css("visibility","hidden"),image=ao._getItemToZoom();if(!image){k();return}c=l(image),c.css(ao._getOffset()),ao.wrap.append(c),j=setTimeout(function(){c.css(ao._getOffset(!0)),j=setTimeout(function(){k(),setTimeout(function(){c.remove(),image=c=null,ac("ZoomAnimationEnded")},16)},m)},16)}}),ae(aA+n,function(){if(ao._allowZoom()){clearTimeout(j),ao.st.removalDelay=m;if(!image){image=ao._getItemToZoom();if(!image){return}c=l(image)}c.css(ao._getOffset(!0)),ao.wrap.append(c),ao.content.css("visibility","hidden"),setTimeout(function(){c.css(ao._getOffset())},16)}}),ae(aB+n,function(){ao._allowZoom()&&(k(),c&&c.remove())})},_allowZoom:function(){return ao.currItem.type==="image"},_getItemToZoom:function(){return ao.currItem.hasSize?ao.currItem.img:!1},_getOffset:function(a){var l;a?l=ao.currItem.img:l=ao.st.zoom.opener(ao.currItem.el||ao.currItem);var k=l.offset(),j=parseInt(l.css("padding-top"),10),i=parseInt(l.css("padding-bottom"),10);k.top-=aC(window).scrollTop()-j;var h={width:l.width(),height:(am?l.innerHeight():l[0].offsetHeight)-i-j};return O()?h["-moz-transform"]=h.transform="translate("+k.left+"px,"+k.top+"px)":(h.left=k.left,h.top=k.top),h}}})})(window.jQuery||window.Zepto);$(document).ready(function(){$("#article-embed").fitVids();$(".gallery").magnificPopup({type:"image"})});