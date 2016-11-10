/**
 * @license
 *
 * Copyright 2006 - 2016 TubePress LLC (http://tubepress.com).
 * This file is part of TubePress (http://tubepress.com).
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */
var tubePressDomInjector,tubePressBeacon,TubePress=function(e,n){"use strict";var r="tubepress",t="ajax",i="base",o="css",s="gallery",a="head",u="http",c="js",f="php",l="script",p="src",d="sys",g="text",y="urls",h="web",v=".",m="/",b="",P=n.location,w=n.document,j=!0,x=!1,O=function(){var e=function(e){return"undefined"!=typeof e},n=function(e){e=e.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var n="[\\?&]"+e+"=([^&#]*)",r=new RegExp(n),t=r.exec(P.search);return null===t?b:decodeURIComponent(t[1].replace(/\+/g," "))},r=function(e){var n=parseInt(e,10);return isNaN(n)?0:n},t=function(e,n,r){if(n()===j)return void e();var i=function(){t(e,n,r)};setTimeout(i,r)},i=function(e){if(!e)return x;var n,r=Array.prototype.slice.call(arguments),t=r.shift();for(n=0;n<r.length;n+=1){if(!t.hasOwnProperty(r[n]))return x;t=t[r[n]]}return!0},o=function(e,n){var r;return r=n?/^\/+/:/\/+$/,e.replace(r,b)};return{isDefined:e,getParameterByName:n,parseIntOrZero:r,callWhenTrue:t,hasOwnNestedProperty:i,trimSlashes:o}}(),C=function(){var e=P.search.indexOf(r+"_debug=true")!==-1,t=n.console,i=O.isDefined(t),o=function(){return e&&i},s=function(e){t.log(r+": "+e)},a=function(e){t.dir(e)};return{on:o,log:s,dir:a}}(),N=function(){var e,o=x,s="usr",a=function(){return n.TubePressJsConfig},u=function(){var n,t,s,u=a();if(!o){if(O.hasOwnNestedProperty(u,y,i))e=O.trimSlashes(u[y][i],x);else for(n=w.getElementsByTagName(l),t=0;t<n.length;t+=1)if(s=n[t][p],s.indexOf(m+r+v+c)!==-1){e=O.trimSlashes(s.substr(0,s.lastIndexOf(m)).split("?")[0].replace(h+m+c,b),x);break}o=j}return e},d=function(){var e=t+"Endpoint",n=a();return O.hasOwnNestedProperty(n,y,t)?n[y][t]:u()+m+h+m+f+m+e+v+f},g=function(){var e=a();return O.hasOwnNestedProperty(e,y,s)?e[y][s]:u()+m+r+"-content"};return{getBaseUrl:u,getAjaxEndpointUrl:d,getUserContentUrl:g}}(),T=function(){var n=e({}),r=function(){n.on.apply(n,arguments)},t=function(){n.off.apply(n,arguments)},i=function(){if(C.on()){var e=arguments;C.log("firing event "+e[0]),e.length>1&&C.dir(e[1])}n.trigger.apply(n,arguments)};return{subscribe:r,unsubscribe:t,publish:i}}(),U=function(){var e=[],r=function(n){return e[n]===j},i=function(e,n){if(0===e.indexOf(m)||0===e.indexOf(u))return e;var r;return r=n?N.getBaseUrl():N.getUserContentUrl(),r+m+O.trimSlashes(e,j)},f=function(e,n){C.on()&&C.log("Injecting "+n+": "+e)},b=function(e){w.getElementsByTagName(a)[0].appendChild(e)},P=function(n,t){if(t=O.isDefined(t)?t:j,n=i(n,t),!r(n)){e[n]=j;var s=w.createElement("link");s.rel="stylesheet",s.type=g+m+o,s.href=n,f(n,o),b(s)}},x=function(n,t){if(t=O.isDefined(t)?t:j,n=i(n,t),!r(n)){e[n]=j,f(n,c);var o=w.createElement(l);o.type=g+"/java"+l,o[p]=n,o.async=j,w.getElementsByTagName(a)[0].appendChild(o)}},T=function(e){var r=n.TubePressJsConfig;x(O.hasOwnNestedProperty(r,y,c,d,e)?r[y][c][d][e]:h+m+c+m+e+v+c)},U=function(){T(s)},B=function(){T("playerApi")},E=function(){T(t+"Search")};return{loadJs:x,loadCss:P,loadGalleryJs:U,loadPlayerApiJs:B,loadAjaxSearchJs:E}}(),B=function(){var r=function(r,t){var i,o=C.on(),s=n[r],a=function(e){var n=e[0],r=e.slice(1);t[n].apply(this,r)};if(O.isDefined(s)&&e.isArray(s))for(i=s.length,o&&C.log("Running "+i+" queue items for "+r),s.reverse();s.length;)a(s.pop());o&&C.log(r+" is now connected"),n[r]={push:a}};return{processQueueCalls:r}}(),E=function(){var n=function(n,r){e(n).fadeTo(0,r)},r=function(e){n(e,.3)},t=function(e){n(e,1)};return{applyLoadingStyle:r,removeLoadingStyle:t}}();return function(){var t,i=function(){T.publish(r+".window.resize")},o=function(){clearTimeout(t),t=setTimeout(i,150)},s=function(){e(n).resize(o)};e(s)}(),function(){var e="tubePress";B.processQueueCalls(e+"DomInjector",U),B.processQueueCalls(e+"Beacon",T)}(),{Ajax:{LoadStyler:E},AsyncUtil:B,Beacon:T,DomInjector:U,Environment:N,Lang:{Utils:O},Logger:C,Vendors:{jQuery:e}}}(jQuery,window);