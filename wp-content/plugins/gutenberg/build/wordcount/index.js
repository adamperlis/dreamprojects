this.wp=this.wp||{},this.wp.wordcount=function(e){var t={};function n(r){if(t[r])return t[r].exports;var c=t[r]={i:r,l:!1,exports:{}};return e[r].call(c.exports,c,c.exports,n),c.l=!0,c.exports}return n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:r})},n.r=function(e){Object.defineProperty(e,"__esModule",{value:!0})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=211)}({2:function(e,t){!function(){e.exports=this.lodash}()},211:function(e,t,n){"use strict";n.r(t);var r=n(2),c={HTMLRegExp:/<\/?[a-z][^>]*?>/gi,HTMLcommentRegExp:/<!--[\s\S]*?-->/g,spaceRegExp:/&nbsp;|&#160;/gi,HTMLEntityRegExp:/&\S+?;/g,connectorRegExp:/--|\u2014/g,removeRegExp:new RegExp(["[","!-@[-`{-~","-¿×÷"," -⯿","⸀-⹿","]"].join(""),"g"),astralRegExp:/[\uD800-\uDBFF][\uDC00-\uDFFF]/g,wordsRegExp:/\S\s+/g,characters_excluding_spacesRegExp:/\S/g,characters_including_spacesRegExp:/[^\f\n\r\t\v\u00AD\u2028\u2029]/g,l10n:{type:"words"}},o=function(e,t){if(e.HTMLRegExp)return t.replace(e.HTMLRegExp,"\n")},i=function(e,t){return e.astralRegExp?t.replace(e.astralRegExp,"a"):t},p=function(e,t){return e.HTMLEntityRegExp?t.replace(e.HTMLEntityRegExp,""):t},s=function(e,t){return e.connectorRegExp?t.replace(e.connectorRegExp," "):t},u=function(e,t){return e.removeRegExp?t.replace(e.removeRegExp,""):t},g=function(e,t){return e.HTMLcommentRegExp?t.replace(e.HTMLcommentRegExp,""):t},a=function(e,t){return e.shortcodesRegExp?t.replace(e.shortcodesRegExp,"\n"):t},x=function(e,t){if(e.spaceRegExp)return t.replace(e.spaceRegExp," ")},d=function(e,t){return e.HTMLEntityRegExp?t.replace(e.HTMLEntityRegExp,"a"):t};function f(e,t,n){if(""===e)return 0;if(e){var f=function(e,t){var n=Object(r.extend)(c,t);return n.shortcodes=n.l10n.shortcodes||{},n.shortcodes&&n.shortcodes.length&&(n.shortcodesRegExp=new RegExp("\\[\\/?(?:"+n.shortcodes.join("|")+")[^\\]]*?\\]","g")),n.type=e||n.l10n.type,"characters_excluding_spaces"!==n.type&&"characters_including_spaces"!==n.type&&(n.type="words"),n}(t,n),E=f[t+"RegExp"],l="words"===f.type?function(e,t,n){return e=Object(r.flow)(o.bind(this,n),g.bind(this,n),a.bind(this,n),x.bind(this,n),p.bind(this,n),s.bind(this,n),u.bind(this,n))(e),(e+="\n").match(t)}(e,E,f):function(e,t,n){return e=Object(r.flow)(o.bind(this,n),g.bind(this,n),a.bind(this,n),x.bind(this,n),i.bind(this,n),d.bind(this,n))(e),(e+="\n").match(t)}(e,E,f);return l?l.length:0}}n.d(t,"count",function(){return f})}});