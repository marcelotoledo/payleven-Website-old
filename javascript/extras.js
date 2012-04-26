/*!
 * CSS Browser Selector v0.4.0 (Nov 02, 2010)
 * http://rafael.adm.br/css_browser_selector
 */
function css_browser_selector(u){var ua=u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1},g='gecko',w='webkit',s='safari',o='opera',m='mobile',h=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')?g+' ff3':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; css_browser_selector(navigator.userAgent);

/*!
 * (v) Compact labels plugin (v20110124)
 * Takes one option: labelOpacity [default: true] set to false to disable label opacity change on empty input focus
 */
(function($){$.fn.compactize=function(options){var defaults={labelOpacity:true};options=$.extend(defaults,options);return this.each(function(){var label=$(this),input=$('#'+label.attr('for'));input.focus(function(){if(options.labelOpacity){if(input.val()===''){label.css('opacity','0.5');}}else{label.hide();}});input.keydown(function(){label.hide();});input.blur(function(){if(input.val()===''){label.show();if(options.labelOpacity){label.css('opacity',1);}}});window.setInterval(function(){if(input.val()!==''){label.hide();}},50);});};})(jQuery);
