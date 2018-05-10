
/*!
 * ui-select
 * http://github.com/angular-ui/ui-select
 * Version: 0.12.0 - 2015-05-28T07:44:11.360Z
 * License: MIT
 */
(function(){var b={TAB:9,ENTER:13,ESC:27,SPACE:32,LEFT:37,UP:38,RIGHT:39,DOWN:40,SHIFT:16,CTRL:17,ALT:18,PAGE_UP:33,PAGE_DOWN:34,HOME:36,END:35,BACKSPACE:8,DELETE:46,COMMAND:91,MAP:{91:"COMMAND",8:"BACKSPACE",9:"TAB",13:"ENTER",16:"SHIFT",17:"CTRL",18:"ALT",19:"PAUSEBREAK",20:"CAPSLOCK",27:"ESC",32:"SPACE",33:"PAGE_UP",34:"PAGE_DOWN",35:"END",36:"HOME",37:"LEFT",38:"UP",39:"RIGHT",40:"DOWN",43:"+",44:"PRINTSCREEN",45:"INSERT",46:"DELETE",48:"0",49:"1",50:"2",51:"3",52:"4",53:"5",54:"6",55:"7",56:"8",57:"9",59:";",61:"=",65:"A",66:"B",67:"C",68:"D",69:"E",70:"F",71:"G",72:"H",73:"I",74:"J",75:"K",76:"L",77:"M",78:"N",79:"O",80:"P",81:"Q",82:"R",83:"S",84:"T",85:"U",86:"V",87:"W",88:"X",89:"Y",90:"Z",96:"0",97:"1",98:"2",99:"3",100:"4",101:"5",102:"6",103:"7",104:"8",105:"9",106:"*",107:"+",109:"-",110:".",111:"/",112:"F1",113:"F2",114:"F3",115:"F4",116:"F5",117:"F6",118:"F7",119:"F8",120:"F9",121:"F10",122:"F11",123:"F12",144:"NUMLOCK",145:"SCROLLLOCK",186:";",187:"=",188:",",189:"-",190:".",191:"/",192:"`",219:"[",220:"\\",221:"]",222:"'"},isControl:function(f){var d=f.which;switch(d){case b.COMMAND:case b.SHIFT:case b.CTRL:case b.ALT:return true}if(f.metaKey){return true}return false},isFunctionKey:function(d){d=d.which?d.which:d;return d>=112&&d<=123},isVerticalMovement:function(d){return ~[b.UP,b.DOWN].indexOf(d)},isHorizontalMovement:function(d){return ~[b.LEFT,b.RIGHT,b.BACKSPACE,b.DELETE].indexOf(d)}};if(angular.element.prototype.querySelectorAll===undefined){angular.element.prototype.querySelectorAll=function(d){return angular.element(this[0].querySelectorAll(d))}}if(angular.element.prototype.closest===undefined){angular.element.prototype.closest=function(d){var f=this[0];var e=f.matches||f.webkitMatchesSelector||f.mozMatchesSelector||f.msMatchesSelector;while(f){if(e.bind(f)(d)){return f}else{f=f.parentElement}}return false}}var c=0;var a=angular.module("ui.select",[]).constant("uiSelectConfig",{theme:"bootstrap",searchEnabled:true,sortable:false,placeholder:"",refreshDelay:1000,closeOnSelect:true,generateId:function(){return c++},appendToBody:false}).service("uiSelectMinErr",function(){var d=angular.$$minErr("angular-ui");return function(){var e=d.apply(this,arguments);var f=e.message.replace(new RegExp("\nhttp://errors.angularjs.org/.*"),"");return new Error(f)}}).directive("uisTranscludeAppend",function(){return{link:function(g,f,e,h,d){d(g,function(i){f.append(i)})}}}).filter("highlight",function(){function d(e){return e.replace(/([.?*+^$[\]\\(){}|-])/g,"\\$1")}return function(f,e){return e&&f?f.replace(new RegExp(d(e),"gi"),'<span class="ui-select-highlight">$&</span>'):f}}).factory("uisOffset",["$document","$window",function(e,d){return function(f){var g=f[0].getBoundingClientRect();return{width:g.width||f.prop("offsetWidth"),height:g.height||f.prop("offsetHeight"),top:g.top+(d.pageYOffset||e[0].documentElement.scrollTop),left:g.left+(d.pageXOffset||e[0].documentElement.scrollLeft)}}}]);a.directive("uiSelectChoices",["uiSelectConfig","uisRepeatParser","uiSelectMinErr","$compile",function(d,f,g,e){return{restrict:"EA",require:"^uiSelect",replace:true,transclude:true,templateUrl:function(h){var i=h.parent().attr("theme")||d.theme;return i+"/choices.tpl.html"},compile:function(h,i){if(!i.repeat){throw g("repeat","Expected 'repeat' expression.")}return function j(s,m,o,l,q){var n=o.groupBy;var r=o.groupFilter;l.parseRepeatAttr(o.repeat,n,r);l.disableChoiceExpression=o.uiDisableChoice;l.onHighlightCallback=o.onHighlight;if(n){var k=m.querySelectorAll(".ui-select-choices-group");if(k.length!==1){throw g("rows","Expected 1 .ui-select-choices-group but got '{0}'.",k.length)}k.attr("ng-repeat",f.getGroupNgRepeatExpression())}var t=m.querySelectorAll(".ui-select-choices-row");if(t.length!==1){throw g("rows","Expected 1 .ui-select-choices-row but got '{0}'.",t.length)}t.attr("ng-repeat",f.getNgRepeatExpression(l.parserResult.itemName,"$select.items",l.parserResult.trackByExp,n)).attr("ng-if","$select.open").attr("ng-mouseenter","$select.setActiveItem("+l.parserResult.itemName+")").attr("ng-click","$select.select("+l.parserResult.itemName+",false,$event)");var p=m.querySelectorAll(".ui-select-choices-row-inner");if(p.length!==1){throw g("rows","Expected 1 .ui-select-choices-row-inner but got '{0}'.",p.length)}p.attr("uis-transclude-append","");e(m,q)(s);s.$watch("$select.search",function(u){if(u&&!l.open&&l.multiple){l.activate(false,true)}l.activeIndex=l.tagging.isActivated?-1:0;l.refresh(o.refresh)});o.$observe("refreshDelay",function(){var u=s.$eval(o.refreshDelay);l.refreshDelay=u!==undefined?u:d.refreshDelay})}}}}]);a.controller("uiSelectCtrl",["$scope","$element","$timeout","$filter","uisRepeatParser","uiSelectMinErr","uiSelectConfig",function(p,q,g,n,l,j,i){var d=this;var m="";d.placeholder=i.placeholder;d.searchEnabled=i.searchEnabled;d.sortable=i.sortable;d.refreshDelay=i.refreshDelay;d.removeSelected=false;d.closeOnSelect=true;d.search=m;d.activeIndex=0;d.items=[];d.open=false;d.focus=false;d.disabled=false;d.selected=undefined;d.focusser=undefined;d.resetSearchInput=true;d.multiple=undefined;d.disableChoiceExpression=undefined;d.tagging={isActivated:false,fct:undefined};d.taggingTokens={isActivated:false,tokens:undefined};d.lockChoiceExpression=undefined;d.clickTriggeredSelect=false;d.$filter=n;d.searchInput=q.querySelectorAll("input.ui-select-search");if(d.searchInput.length!==1){throw j("searchInput","Expected 1 input.ui-select-search but got '{0}'.",d.searchInput.length)}d.isEmpty=function(){return angular.isUndefined(d.selected)||d.selected===null||d.selected===""};function f(){if(d.resetSearchInput||(d.resetSearchInput===undefined&&i.resetSearchInput)){d.search=m;if(d.selected&&d.items.length&&!d.multiple){d.activeIndex=d.items.indexOf(d.selected)}}}function e(t,u){var w,v,s=[];for(w=0;w<u.length;w++){for(v=0;v<t.length;v++){if(t[v].name==[u[w]]){s.push(t[v])}}}return s}d.activate=function(t,s){if(!d.disabled&&!d.open){if(!s){f()}p.$broadcast("uis:activate");d.open=true;d.activeIndex=d.activeIndex>=d.items.length?0:d.activeIndex;if(d.activeIndex===-1&&d.taggingLabel!==false){d.activeIndex=0}g(function(){d.search=t||d.search;d.searchInput[0].focus()})}};d.findGroupByName=function(s){return d.groups&&d.groups.filter(function(t){return t.name===s})[0]};d.parseRepeatAttr=function(v,t,u){function w(x){var z=p.$eval(t);d.groups=[];angular.forEach(x,function(A){var C=angular.isFunction(z)?z(A):A[z];var B=d.findGroupByName(C);if(B){B.items.push(A)}else{d.groups.push({name:C,items:[A]})}});if(u){var y=p.$eval(u);if(angular.isFunction(y)){d.groups=y(d.groups)}else{if(angular.isArray(y)){d.groups=e(d.groups,y)}}}d.items=[];d.groups.forEach(function(A){d.items=d.items.concat(A.items)})}function s(x){d.items=x}d.setItemsFn=t?w:s;d.parserResult=l.parse(v);d.isGrouped=!!t;d.itemProperty=d.parserResult.itemName;d.refreshItems=function(y){y=y||d.parserResult.source(p);var z=d.selected;if((angular.isArray(z)&&!z.length)||!d.removeSelected){d.setItemsFn(y)}else{if(y!==undefined){var x=y.filter(function(A){return z.indexOf(A)<0});d.setItemsFn(x)}}};p.$watchCollection(d.parserResult.source,function(x){if(x===undefined||x===null){d.items=[]}else{if(!angular.isArray(x)){throw j("items","Expected an array but got '{0}'.",x)}else{d.refreshItems(x);d.ngModel.$modelValue=null}}})};var r;d.refresh=function(s){if(s!==undefined){if(r){g.cancel(r)}r=g(function(){p.$eval(s)},d.refreshDelay)}};d.setActiveItem=function(s){d.activeIndex=d.items.indexOf(s)};d.isActive=function(u){if(!d.open){return false}var t=d.items.indexOf(u[d.itemProperty]);var s=t===d.activeIndex;if(!s||(t<0&&d.taggingLabel!==false)||(t<0&&d.taggingLabel===false)){return false}if(s&&!angular.isUndefined(d.onHighlightCallback)){u.$eval(d.onHighlightCallback)}return s};d.isDisabled=function(v){if(!d.open){return}var t=d.items.indexOf(v[d.itemProperty]);var s=false;var u;if(t>=0&&!angular.isUndefined(d.disableChoiceExpression)){u=d.items[t];s=!!(v.$eval(d.disableChoiceExpression));u._uiSelectChoiceDisabled=s}return s};d.select=function(u,s,t){if(u===undefined||!u._uiSelectChoiceDisabled){if(!d.items&&!d.search){return}if(!u||!u._uiSelectChoiceDisabled){if(d.tagging.isActivated){if(d.taggingLabel===false){if(d.activeIndex<0){u=d.tagging.fct!==undefined?d.tagging.fct(d.search):d.search;if(!u||angular.equals(d.items[0],u)){return}}else{u=d.items[d.activeIndex]}}else{if(d.activeIndex===0){if(u===undefined){return}if(d.tagging.fct!==undefined&&typeof u==="string"){u=d.tagging.fct(d.search);if(!u){return}}else{if(typeof u==="string"){u=u.replace(d.taggingLabel,"").trim()}}}}if(d.selected&&angular.isArray(d.selected)&&d.selected.filter(function(w){return angular.equals(w,u)}).length>0){d.close(s);return}}p.$broadcast("uis:select",u);var v={};v[d.parserResult.itemName]=u;g(function(){d.onSelectCallback(p,{$item:u,$model:d.parserResult.modelMapper(p,v)})});if(d.closeOnSelect){d.close(s)}if(t&&t.type==="click"){d.clickTriggeredSelect=true}}}};d.close=function(s){if(!d.open){return}if(d.ngModel&&d.ngModel.$setTouched){d.ngModel.$setTouched()}f();d.open=false;p.$broadcast("uis:close",s)};d.setFocus=function(){if(!d.focus){d.focusInput[0].focus()}};d.clear=function(s){d.select(undefined);s.stopPropagation();g(function(){d.focusser[0].focus()},0,false)};d.toggle=function(s){if(d.open){d.close();s.preventDefault();s.stopPropagation()}else{d.activate()}};d.isLocked=function(u,s){var v,t=d.selected[s];if(t&&!angular.isUndefined(d.lockChoiceExpression)){v=!!(u.$eval(d.lockChoiceExpression));t._uiSelectChoiceLocked=v}return v};var k=null;d.sizeSearchInput=function(){var t=d.searchInput[0],s=d.searchInput.parent().parent()[0],v=function(){return s.clientWidth*!!t.offsetParent},u=function(w){if(w===0){return false}var x=w-t.offsetLeft-10;if(x<50){x=w}d.searchInput.css("width",x+"px");return true};d.searchInput.css("width","10px");g(function(){if(k===null&&!u(v())){k=p.$watch(v,function(w){if(u(w)){k();k=null}})}})};function h(s){var t=true;switch(s){case b.DOWN:if(!d.open&&d.multiple){d.activate(false,true)}else{if(d.activeIndex<d.items.length-1){d.activeIndex++}}break;case b.UP:if(!d.open&&d.multiple){d.activate(false,true)}else{if(d.activeIndex>0||(d.search.length===0&&d.tagging.isActivated&&d.activeIndex>-1)){d.activeIndex--}}break;case b.TAB:if(!d.multiple||d.open){d.select(d.items[d.activeIndex],true)}break;case b.ENTER:if(d.open&&(d.tagging.isActivated||d.activeIndex>=0)){d.select(d.items[d.activeIndex])}else{d.activate(false,true)}break;case b.ESC:d.close();break;default:t=false}return t}d.searchInput.on("keydown",function(t){var s=t.which;p.$apply(function(){var u=false;if(d.items.length>0||d.tagging.isActivated){h(s);if(d.taggingTokens.isActivated){for(var v=0;v<d.taggingTokens.tokens.length;v++){if(d.taggingTokens.tokens[v]===b.MAP[t.keyCode]){if(d.search.length>0){u=true}}}if(u){g(function(){d.searchInput.triggerHandler("tagged");var w=d.search.replace(b.MAP[t.keyCode],"").trim();if(d.tagging.fct){w=d.tagging.fct(w)}if(w){d.select(w,true)}})}}}});if(b.isVerticalMovement(s)&&d.items.length>0){o()}if(s===b.ENTER||s===b.ESC){t.preventDefault();t.stopPropagation()}});d.searchInput.on("paste",function(u){var t=u.originalEvent.clipboardData.getData("text/plain");if(t&&t.length>0&&d.taggingTokens.isActivated&&d.tagging.fct){var s=t.split(d.taggingTokens.tokens[0]);if(s&&s.length>0){angular.forEach(s,function(w){var v=d.tagging.fct(w);if(v){d.select(v,true)}});u.preventDefault();u.stopPropagation()}}});d.searchInput.on("tagged",function(){g(function(){f()})});function o(){var t=q.querySelectorAll(".ui-select-choices-content");var w=t.querySelectorAll(".ui-select-choices-row");if(w.length<1){throw j("choices","Expected multiple .ui-select-choices-row but got '{0}'.",w.length)}if(d.activeIndex<0){return}var u=w[d.activeIndex];var v=u.offsetTop+u.clientHeight-t[0].scrollTop;var s=t[0].offsetHeight;if(v>s){t[0].scrollTop+=v-s}else{if(v<u.clientHeight){if(d.isGrouped&&d.activeIndex===0){t[0].scrollTop=0}else{t[0].scrollTop-=u.clientHeight-v}}}}p.$on("$destroy",function(){d.searchInput.off("keyup keydown tagged blur paste")})}]);a.directive("uiSelect",["$document","uiSelectConfig","uiSelectMinErr","uisOffset","$compile","$parse","$timeout",function(j,d,i,g,f,h,e){return{restrict:"EA",templateUrl:function(k,l){var m=l.theme||d.theme;return m+(angular.isDefined(l.multiple)?"/select-multiple.tpl.html":"/select.tpl.html")},replace:true,transclude:true,require:["uiSelect","^ngModel"],scope:true,controller:"uiSelectCtrl",controllerAs:"$select",compile:function(k,l){if(angular.isDefined(l.multiple)){k.append("<ui-select-multiple/>").removeAttr("multiple")}else{k.append("<ui-select-single/>")}return function(z,t,x,r,y){var q=r[0];var s=r[1];q.generatedId=d.generateId();q.baseTitle=x.title||"Select box";q.focusserTitle=q.baseTitle+" focus";q.focusserId="focusser-"+q.generatedId;q.closeOnSelect=function(){if(angular.isDefined(x.closeOnSelect)){return h(x.closeOnSelect)()}else{return d.closeOnSelect}}();q.onSelectCallback=h(x.onSelect);q.onRemoveCallback=h(x.onRemove);q.ngModel=s;q.choiceGrouped=function(B){return q.isGrouped&&B&&B.name};if(x.tabindex){x.$observe("tabindex",function(B){q.focusInput.attr("tabindex",B);t.removeAttr("tabindex")})}z.$watch("searchEnabled",function(){var B=z.$eval(x.searchEnabled);q.searchEnabled=B!==undefined?B:d.searchEnabled});z.$watch("sortable",function(){var B=z.$eval(x.sortable);q.sortable=B!==undefined?B:d.sortable});x.$observe("disabled",function(){q.disabled=x.disabled!==undefined?x.disabled:false});x.$observe("resetSearchInput",function(){var B=z.$eval(x.resetSearchInput);q.resetSearchInput=B!==undefined?B:true});x.$observe("tagging",function(){if(x.tagging!==undefined){var B=z.$eval(x.tagging);q.tagging={isActivated:true,fct:B!==true?B:undefined}}else{q.tagging={isActivated:false,fct:undefined}}});x.$observe("taggingLabel",function(){if(x.tagging!==undefined){if(x.taggingLabel==="false"){q.taggingLabel=false}else{q.taggingLabel=x.taggingLabel!==undefined?x.taggingLabel:"(new)"}}});x.$observe("taggingTokens",function(){if(x.tagging!==undefined){var B=x.taggingTokens!==undefined?x.taggingTokens.split("|"):[",","ENTER"];q.taggingTokens={isActivated:true,tokens:B}}});if(angular.isDefined(x.autofocus)){e(function(){q.setFocus()})}if(angular.isDefined(x.focusOn)){z.$on(x.focusOn,function(){e(function(){q.setFocus()})})}function u(E){if(!q.open){return}var D=false;if(window.jQuery){D=window.jQuery.contains(t[0],E.target)}else{D=t[0].contains(E.target)}if(!D&&!q.clickTriggeredSelect){var F=["input","button","textarea"];var C=angular.element(E.target).scope();var B=C&&C.$select&&C.$select!==q;if(!B){B=~F.indexOf(E.target.tagName.toLowerCase())}q.close(B);z.$digest()}q.clickTriggeredSelect=false}j.on("click",u);z.$on("$destroy",function(){j.off("click",u)});y(z,function(E){var C=angular.element("<div>").append(E);var D=C.querySelectorAll(".ui-select-match");D.removeAttr("ui-select-match");D.removeAttr("data-ui-select-match");if(D.length!==1){throw i("transcluded","Expected 1 .ui-select-match but got '{0}'.",D.length)}t.querySelectorAll(".ui-select-match").replaceWith(D);var B=C.querySelectorAll(".ui-select-choices");B.removeAttr("ui-select-choices");B.removeAttr("data-ui-select-choices");if(B.length!==1){throw i("transcluded","Expected 1 .ui-select-choices but got '{0}'.",B.length)}t.querySelectorAll(".ui-select-choices").replaceWith(B)});var v=z.$eval(x.appendToBody);if(v!==undefined?v:d.appendToBody){z.$watch("$select.open",function(B){if(B){m()}else{p()}});z.$on("$destroy",function(){p()})}var w=null,n="";function m(){var B=g(t);w=angular.element('<div class="ui-select-placeholder"></div>');w[0].style.width=B.width+"px";w[0].style.height=B.height+"px";t.after(w);n=t[0].style.width;j.find("body").append(t);t[0].style.position="absolute";t[0].style.left=B.left+"px";t[0].style.top=B.top+"px";t[0].style.width=B.width+"px"}function p(){if(w===null){return}w.replaceWith(t);w=null;t[0].style.position="";t[0].style.left="";t[0].style.top="";t[0].style.width=n}var A=null,o="direction-up";z.$watch("$select.open",function(B){if(B){A=angular.element(t).querySelectorAll(".ui-select-dropdown");if(A===null){return}A[0].style.visibility="hidden";e(function(){var C=g(t);var D=g(A);if(C.top+C.height+D.height>j[0].documentElement.scrollTop+j[0].documentElement.clientHeight){A[0].style.position="absolute";A[0].style.top=(D.height*-1)+"px";t.addClass(o)}A[0].style.visibility=""})}else{if(A===null){return}A[0].style.position="";A[0].style.top="";t.removeClass(o)}})}}}}]);a.directive("uiSelectMatch",["uiSelectConfig",function(d){return{restrict:"EA",require:"^uiSelect",replace:true,transclude:true,templateUrl:function(e){var g=e.parent().attr("theme")||d.theme;var f=e.parent().attr("multiple");return g+(f?"/match-multiple.tpl.html":"/match.tpl.html")},link:function(i,h,g,f){f.lockChoiceExpression=g.uiLockChoice;g.$observe("placeholder",function(j){f.placeholder=j!==undefined?j:d.placeholder});function e(j){f.allowClear=(angular.isDefined(j))?(j==="")?true:(j.toLowerCase()==="true"):false}g.$observe("allowClear",e);e(g.allowClear);if(f.multiple){f.sizeSearchInput()}}}}]);a.directive("uiSelectMultiple",["uiSelectMinErr","$timeout",function(e,d){return{restrict:"EA",require:["^uiSelect","^ngModel"],controller:["$scope","$timeout",function(f,h){var i=this,g=f.$select,j;f.$evalAsync(function(){j=f.ngModel});i.activeMatchIndex=-1;i.updateModel=function(){j.$setViewValue(Date.now());i.refreshComponent()};i.refreshComponent=function(){g.refreshItems();g.sizeSearchInput()};i.removeChoice=function(k){var m=g.selected[k];if(m._uiSelectChoiceLocked){return}var l={};l[g.parserResult.itemName]=m;g.selected.splice(k,1);i.activeMatchIndex=-1;g.sizeSearchInput();h(function(){g.onRemoveCallback(f,{$item:m,$model:g.parserResult.modelMapper(f,l)})});i.updateModel()};i.getPlaceholder=function(){if(g.selected.length){return}return g.placeholder}}],controllerAs:"$selectMultiple",link:function(o,k,n,i){var h=i[0];var j=o.ngModel=i[1];var g=o.$selectMultiple;h.multiple=true;h.removeSelected=true;h.focusInput=h.searchInput;j.$parsers.unshift(function(){var t={},q,s=[];for(var r=h.selected.length-1;r>=0;r--){t={};t[h.parserResult.itemName]=h.selected[r];q=h.parserResult.modelMapper(o,t);s.unshift(q)}return s});j.$formatters.unshift(function(r){var u=h.parserResult.source(o,{$select:{search:""}}),w={},q;if(!u){return r}var t=[];var v=function(z,y){if(!z||!z.length){return}for(var A=z.length-1;A>=0;A--){w[h.parserResult.itemName]=z[A];q=h.parserResult.modelMapper(o,w);if(h.parserResult.trackByExp){var x=/\.(.+)/.exec(h.parserResult.trackByExp);if(x.length>0&&q[x[1]]==y[x[1]]){t.unshift(z[A]);return true}}if(angular.equals(q,y)){t.unshift(z[A]);return true}}return false};if(!r){return t}for(var s=r.length-1;s>=0;s--){if(!v(h.selected,r[s])){if(!v(u,r[s])){t.unshift(r[s])}}}return t});o.$watchCollection(function(){return j.$modelValue},function(r,q){if(q!=r){j.$modelValue=null;g.refreshComponent()}});j.$render=function(){if(!angular.isArray(j.$viewValue)){if(angular.isUndefined(j.$viewValue)||j.$viewValue===null){h.selected=[]}else{throw e("multiarr","Expected model value to be array but got '{0}'",j.$viewValue)}}h.selected=j.$viewValue;o.$evalAsync()};o.$on("uis:select",function(r,q){h.selected.push(q);g.updateModel()});o.$on("uis:activate",function(){g.activeMatchIndex=-1});o.$watch("$select.disabled",function(r,q){if(q&&!r){h.sizeSearchInput()}});h.searchInput.on("keydown",function(r){var q=r.which;o.$apply(function(){var s=false;if(b.isHorizontalMovement(q)){s=l(q)}if(s&&q!=b.TAB){r.preventDefault();r.stopPropagation()}})});function m(q){if(angular.isNumber(q.selectionStart)){return q.selectionStart}else{return q.value.length}}function l(x){var u=m(h.searchInput[0]),q=h.selected.length,s=0,w=q-1,z=g.activeMatchIndex,t=g.activeMatchIndex+1,r=g.activeMatchIndex-1,v=z;if(u>0||(h.search.length&&x==b.RIGHT)){return false}h.close();function y(){switch(x){case b.LEFT:if(~g.activeMatchIndex){return r}else{return w}break;case b.RIGHT:if(!~g.activeMatchIndex||z===w){h.activate();return false}else{return t}break;case b.BACKSPACE:if(~g.activeMatchIndex){g.removeChoice(z);return r}else{return w}break;case b.DELETE:if(~g.activeMatchIndex){g.removeChoice(g.activeMatchIndex);return z}else{return false}}}v=y();if(!h.selected.length||v===false){g.activeMatchIndex=-1}else{g.activeMatchIndex=Math.min(w,Math.max(s,v))}return true}h.searchInput.on("keyup",function(v){if(!b.isVerticalMovement(v.which)){o.$evalAsync(function(){h.activeIndex=h.taggingLabel===false?-1:0})}if(h.tagging.isActivated&&h.search.length>0){if(v.which===b.TAB||b.isControl(v)||b.isFunctionKey(v)||v.which===b.ESC||b.isVerticalMovement(v.which)){return}h.activeIndex=h.taggingLabel===false?-1:0;if(h.taggingLabel===false){return}var w=angular.copy(h.items);var s=angular.copy(h.items);var u;var y;var t=false;var r=-1;var x;var q;if(h.tagging.fct!==undefined){x=h.$filter("filter")(w,{isTag:true});if(x.length>0){q=x[0]}if(w.length>0&&q){t=true;w=w.slice(1,w.length);s=s.slice(1,s.length)}u=h.tagging.fct(h.search);u.isTag=true;if(s.filter(function(z){return angular.equals(z,h.tagging.fct(h.search))}).length>0){return}u.isTag=true}else{x=h.$filter("filter")(w,function(z){return z.match(h.taggingLabel)});if(x.length>0){q=x[0]}y=w[0];if(y!==undefined&&w.length>0&&q){t=true;w=w.slice(1,w.length);s=s.slice(1,s.length)}u=h.search+" "+h.taggingLabel;if(p(h.selected,h.search)>-1){return}if(f(s.concat(h.selected))){if(t){w=s;o.$evalAsync(function(){h.activeIndex=0;h.items=w})}return}if(f(s)){if(t){h.items=s.slice(1,s.length)}return}}if(t){r=p(h.selected,u)}if(r>-1){w=w.slice(r+1,w.length-1)}else{w=[];w.push(u);w=w.concat(s)}o.$evalAsync(function(){h.activeIndex=0;h.items=w})}});function f(q){if(q===undefined||h.search===undefined){return false}var r=q.filter(function(s){if(h.search.toUpperCase()===undefined||s===undefined){return false}return s.toUpperCase()===h.search.toUpperCase()}).length>0;return r}function p(u,v){var t=-1;if(angular.isArray(u)){var s=angular.copy(u);for(var r=0;r<s.length;r++){if(h.tagging.fct===undefined){if(s[r]+" "+h.taggingLabel===v){t=r}}else{var q=s[r];q.isTag=true;if(angular.equals(q,v)){t=r}}}}return t}h.searchInput.on("blur",function(){d(function(){g.activeMatchIndex=-1})})}}}]);a.directive("uiSelectSingle",["$timeout","$compile",function(e,d){return{restrict:"EA",require:["^uiSelect","^ngModel"],link:function(j,i,h,f){var g=f[0];var l=f[1];l.$parsers.unshift(function(n){var o={},m;o[g.parserResult.itemName]=n;m=g.parserResult.modelMapper(j,o);return m});l.$formatters.unshift(function(n){var q=g.parserResult.source(j,{$select:{search:""}}),r={},m;if(q){var p=function(s){r[g.parserResult.itemName]=s;m=g.parserResult.modelMapper(j,r);return m==n};if(g.selected&&p(g.selected)){return g.selected}for(var o=q.length-1;o>=0;o--){if(p(q[o])){return q[o]}}}return n});j.$watch("$select.selected",function(m){if(l.$viewValue!==m){l.$setViewValue(m)}});l.$render=function(){g.selected=l.$viewValue};j.$on("uis:select",function(n,m){g.selected=m});j.$on("uis:close",function(n,m){e(function(){g.focusser.prop("disabled",false);if(!m){g.focusser[0].focus()}},0,false)});j.$on("uis:activate",function(){k.prop("disabled",true)});var k=angular.element("<input ng-disabled='$select.disabled' class='ui-select-focusser ui-select-offscreen' type='text' id='{{ $select.focusserId }}' aria-label='{{ $select.focusserTitle }}' aria-haspopup='true' role='button' />");d(k)(j);g.focusser=k;g.focusInput=k;i.parent().append(k);k.bind("focus",function(){j.$evalAsync(function(){g.focus=true})});k.bind("blur",function(){j.$evalAsync(function(){g.focus=false})});k.bind("keydown",function(m){if(m.which===b.BACKSPACE){m.preventDefault();m.stopPropagation();g.select(undefined);j.$apply();return}if(m.which===b.TAB||b.isControl(m)||b.isFunctionKey(m)||m.which===b.ESC){return}if(m.which==b.DOWN||m.which==b.UP||m.which==b.ENTER||m.which==b.SPACE){m.preventDefault();m.stopPropagation();g.activate()}j.$digest()});k.bind("keyup input",function(m){if(m.which===b.TAB||b.isControl(m)||b.isFunctionKey(m)||m.which===b.ESC||m.which==b.ENTER||m.which===b.BACKSPACE){return}g.activate(k.val());k.val("");j.$digest()})}}}]);a.directive("uiSelectSort",["$timeout","uiSelectConfig","uiSelectMinErr",function(e,d,f){return{require:"^uiSelect",link:function(t,o,r,n){if(t[r.uiSelectSort]===null){throw f("sort","Expected a list to sort")}var u=angular.extend({axis:"horizontal"},t.$eval(r.uiSelectSortOptions));var l=u.axis,q="dragging",i="dropping",k="dropping-before",h="dropping-after";t.$watch(function(){return n.sortable},function(v){if(v){o.attr("draggable",true)}else{o.removeAttr("draggable")}});o.on("dragstart",function(v){o.addClass(q);(v.dataTransfer||v.originalEvent.dataTransfer).setData("text/plain",t.$index)});o.on("dragend",function(){o.removeClass(q)});var j=function(w,v){this.splice(v,0,this.splice(w,1)[0])};var p=function(v){v.preventDefault();var w=l==="vertical"?v.offsetY||v.layerY||(v.originalEvent?v.originalEvent.offsetY:0):v.offsetX||v.layerX||(v.originalEvent?v.originalEvent.offsetX:0);if(w<(this[l==="vertical"?"offsetHeight":"offsetWidth"]/2)){o.removeClass(h);o.addClass(k)}else{o.removeClass(k);o.addClass(h)}};var s;var g=function(w){w.preventDefault();var v=parseInt((w.dataTransfer||w.originalEvent.dataTransfer).getData("text/plain"),10);e.cancel(s);s=e(function(){m(v)},20)};var m=function(x){var v=t.$eval(r.uiSelectSort),y=v[x],w=null;if(o.hasClass(k)){if(x<t.$index){w=t.$index-1}else{w=t.$index}}else{if(x<t.$index){w=t.$index}else{w=t.$index+1}}j.apply(v,[x,w]);t.$apply(function(){t.$emit("uiSelectSort:change",{array:v,item:y,from:x,to:w})});o.removeClass(i);o.removeClass(k);o.removeClass(h);o.off("drop",g)};o.on("dragenter",function(){if(o.hasClass(q)){return}o.addClass(i);o.on("dragover",p);o.on("drop",g)});o.on("dragleave",function(v){if(v.target!=o){return}o.removeClass(i);o.removeClass(k);o.removeClass(h);o.off("dragover",p);o.off("drop",g)})}}}]);a.service("uisRepeatParser",["uiSelectMinErr","$parse",function(f,e){var d=this;d.parse=function(h){var g=h.match(/^\s*(?:([\s\S]+?)\s+as\s+)?([\S]+?)\s+in\s+([\s\S]+?)(?:\s+track\s+by\s+([\s\S]+?))?\s*$/);if(!g){throw f("iexp","Expected expression in form of '_item_ in _collection_[ track by _id_]' but got '{0}'.",h)}return{itemName:g[2],source:e(g[3]),trackByExp:g[4],modelMapper:e(g[1]||g[2])}};d.getGroupNgRepeatExpression=function(){return"$group in $select.groups"};d.getNgRepeatExpression=function(j,i,h,g){var k=j+" in "+(g?"$group.items":i);if(h){k+=" track by "+h}return k}}])}());angular.module("ui.select").run(["$templateCache",function(a){a.put("bootstrap/choices.tpl.html",'<ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu" role="listbox" ng-show="$select.items.length > 0"><li class="ui-select-choices-group" id="ui-select-choices-{{ $select.generatedId }}"><div class="divider" ng-show="$select.isGrouped && $index > 0"></div><div ng-show="$select.isGrouped" class="ui-select-choices-group-label dropdown-header" ng-bind="$group.name"></div><div id="ui-select-choices-row-{{ $select.generatedId }}-{{$index}}" class="ui-select-choices-row" ng-class="{active: $select.isActive(this), disabled: $select.isDisabled(this)}" role="option"><a href="javascript:void(0)" class="ui-select-choices-row-inner"></a></div></li></ul>');a.put("bootstrap/match-multiple.tpl.html",'<span class="ui-select-match"><span ng-repeat="$item in $select.selected"><span class="ui-select-match-item btn btn-default btn-xs" tabindex="-1" type="button" ng-disabled="$select.disabled" ng-click="$selectMultiple.activeMatchIndex = $index;" ng-class="{\'btn-primary\':$selectMultiple.activeMatchIndex === $index, \'select-locked\':$select.isLocked(this, $index)}" ui-select-sort="$select.selected"><span class="close ui-select-match-close" ng-hide="$select.disabled" ng-click="$selectMultiple.removeChoice($index)">&nbsp;&times;</span> <span uis-transclude-append=""></span></span></span></span>');a.put("bootstrap/match.tpl.html",'<div class="ui-select-match" ng-hide="$select.open" ng-disabled="$select.disabled" ng-class="{\'btn-default-focus\':$select.focus}"><span tabindex="-1" class="btn btn-default form-control ui-select-toggle" aria-label="{{ $select.baseTitle }} activate" ng-disabled="$select.disabled" ng-click="$select.activate()" style="outline: 0;"><span ng-show="$select.isEmpty()" class="ui-select-placeholder text-muted">{{$select.placeholder}}</span> <span ng-hide="$select.isEmpty()" class="ui-select-match-text pull-left" ng-class="{\'ui-select-allow-clear\': $select.allowClear && !$select.isEmpty()}" ng-transclude=""></span> <i class="caret pull-right" ng-click="$select.toggle($event)"></i> <a ng-show="$select.allowClear && !$select.isEmpty()" aria-label="{{ $select.baseTitle }} clear" style="margin-right: 10px" ng-click="$select.clear($event)" class="btn btn-xs btn-link pull-right"><i class="glyphicon glyphicon-remove" aria-hidden="true"></i></a></span></div>');a.put("bootstrap/select-multiple.tpl.html",'<div class="ui-select-container ui-select-multiple ui-select-bootstrap dropdown form-control" ng-class="{open: $select.open}"><div><div class="ui-select-match"></div><input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="ui-select-search input-xs" placeholder="{{$selectMultiple.getPlaceholder()}}" ng-disabled="$select.disabled" ng-hide="$select.disabled" ng-click="$select.activate()" ng-model="$select.search" role="combobox" aria-label="{{ $select.baseTitle }}" ondrop="return false;"></div><div class="ui-select-choices"></div></div>');a.put("bootstrap/select.tpl.html",'<div class="ui-select-container ui-select-bootstrap dropdown" ng-class="{open: $select.open}"><div class="ui-select-match"></div><input type="text" autocomplete="off" tabindex="-1" aria-expanded="true" aria-label="{{ $select.baseTitle }}" aria-owns="ui-select-choices-{{ $select.generatedId }}" aria-activedescendant="ui-select-choices-row-{{ $select.generatedId }}-{{ $select.activeIndex }}" class="form-control ui-select-search" placeholder="{{$select.placeholder}}" ng-model="$select.search" ng-show="$select.searchEnabled && $select.open"><div class="ui-select-choices"></div></div>');a.put("select2/choices.tpl.html",'<ul class="ui-select-choices ui-select-choices-content select2-results"><li class="ui-select-choices-group" ng-class="{\'select2-result-with-children\': $select.choiceGrouped($group) }"><div ng-show="$select.choiceGrouped($group)" class="ui-select-choices-group-label select2-result-label" ng-bind="$group.name"></div><ul role="listbox" id="ui-select-choices-{{ $select.generatedId }}" ng-class="{\'select2-result-sub\': $select.choiceGrouped($group), \'select2-result-single\': !$select.choiceGrouped($group) }"><li role="option" id="ui-select-choices-row-{{ $select.generatedId }}-{{$index}}" class="ui-select-choices-row" ng-class="{\'select2-highlighted\': $select.isActive(this), \'select2-disabled\': $select.isDisabled(this)}"><div class="select2-result-label ui-select-choices-row-inner"></div></li></ul></li></ul>');a.put("select2/match-multiple.tpl.html",'<span class="ui-select-match"><li class="ui-select-match-item select2-search-choice" ng-repeat="$item in $select.selected" ng-class="{\'select2-search-choice-focus\':$selectMultiple.activeMatchIndex === $index, \'select2-locked\':$select.isLocked(this, $index)}" ui-select-sort="$select.selected"><span uis-transclude-append=""></span> <a href="javascript:;" class="ui-select-match-close select2-search-choice-close" ng-click="$selectMultiple.removeChoice($index)" tabindex="-1"></a></li></span>');a.put("select2/match.tpl.html",'<a class="select2-choice ui-select-match" ng-class="{\'select2-default\': $select.isEmpty()}" ng-click="$select.toggle($event)" aria-label="{{ $select.baseTitle }} select"><span ng-show="$select.isEmpty()" class="select2-chosen">{{$select.placeholder}}</span> <span ng-hide="$select.isEmpty()" class="select2-chosen" ng-transclude=""></span> <abbr ng-if="$select.allowClear && !$select.isEmpty()" class="select2-search-choice-close" ng-click="$select.clear($event)"></abbr> <span class="select2-arrow ui-select-toggle"><b></b></span></a>');a.put("select2/select-multiple.tpl.html",'<div class="ui-select-container ui-select-multiple select2 select2-container select2-container-multi" ng-class="{\'select2-container-active select2-dropdown-open open\': $select.open, \'select2-container-disabled\': $select.disabled}"><ul class="select2-choices"><span class="ui-select-match"></span><li class="select2-search-field"><input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="combobox" aria-expanded="true" aria-owns="ui-select-choices-{{ $select.generatedId }}" aria-label="{{ $select.baseTitle }}" aria-activedescendant="ui-select-choices-row-{{ $select.generatedId }}-{{ $select.activeIndex }}" class="select2-input ui-select-search" placeholder="{{$selectMultiple.getPlaceholder()}}" ng-disabled="$select.disabled" ng-hide="$select.disabled" ng-model="$select.search" ng-click="$select.activate()" style="width: 34px;" ondrop="return false;"></li></ul><div class="ui-select-dropdown select2-drop select2-with-searchbox select2-drop-active" ng-class="{\'select2-display-none\': !$select.open}"><div class="ui-select-choices"></div></div></div>');a.put("select2/select.tpl.html",'<div class="ui-select-container select2 select2-container" ng-class="{\'select2-container-active select2-dropdown-open open\': $select.open, \'select2-container-disabled\': $select.disabled, \'select2-container-active\': $select.focus, \'select2-allowclear\': $select.allowClear && !$select.isEmpty()}"><div class="ui-select-match"></div><div class="ui-select-dropdown select2-drop select2-with-searchbox select2-drop-active" ng-class="{\'select2-display-none\': !$select.open}"><div class="select2-search" ng-show="$select.searchEnabled"><input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="combobox" aria-expanded="true" aria-owns="ui-select-choices-{{ $select.generatedId }}" aria-label="{{ $select.baseTitle }}" aria-activedescendant="ui-select-choices-row-{{ $select.generatedId }}-{{ $select.activeIndex }}" class="ui-select-search select2-input" ng-model="$select.search"></div><div class="ui-select-choices"></div></div></div>');a.put("selectize/choices.tpl.html",'<div ng-show="$select.open" class="ui-select-choices ui-select-dropdown selectize-dropdown single"><div class="ui-select-choices-content selectize-dropdown-content"><div class="ui-select-choices-group optgroup" role="listbox"><div ng-show="$select.isGrouped" class="ui-select-choices-group-label optgroup-header" ng-bind="$group.name"></div><div role="option" class="ui-select-choices-row" ng-class="{active: $select.isActive(this), disabled: $select.isDisabled(this)}"><div class="option ui-select-choices-row-inner" data-selectable=""></div></div></div></div></div>');a.put("selectize/match.tpl.html",'<div ng-hide="($select.open || $select.isEmpty())" class="ui-select-match" ng-transclude=""></div>');a.put("selectize/select.tpl.html",'<div class="ui-select-container selectize-control single" ng-class="{\'open\': $select.open}"><div class="selectize-input" ng-class="{\'focus\': $select.open, \'disabled\': $select.disabled, \'selectize-focus\' : $select.focus}" ng-click="$select.activate()"><div class="ui-select-match"></div><input type="text" autocomplete="off" tabindex="-1" class="ui-select-search ui-select-toggle" ng-click="$select.toggle($event)" placeholder="{{$select.placeholder}}" ng-model="$select.search" ng-hide="!$select.searchEnabled || ($select.selected && !$select.open)" ng-disabled="$select.disabled" aria-label="{{ $select.baseTitle }}"></div><div class="ui-select-choices"></div></div>')}]);