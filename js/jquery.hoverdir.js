(function(e,t,n){"use strict";e.HoverDir=function(t,n){this.$el=e(n);this._0(t)};e.HoverDir.defaults={speed:300,easing:"ease",hoverDelay:0,inverse:false};e.HoverDir.prototype={_0:function(t){this.options=e.extend(true,{},e.HoverDir.defaults,t);this.transitionProp="all "+this.options.speed+"ms "+this.options.easing;this.support=1;this._2()},_2:function(){var t=this;this.$el.on("mouseenter.hoverdir, mouseleave.hoverdir",function(n){var r=e(this),i=r.find("div"),s=t._3(r,{x:n.pageX,y:n.pageY}),o=t._4(s);if(n.type==="mouseenter"){i.hide().css(o.from);clearTimeout(t.tmhover);t.tmhover=setTimeout(function(){i.show(0,function(){var n=e(this);if(t.support){n.css("transition",t.transitionProp)}t._1(n,o.to,t.options.speed)})},t.options.hoverDelay)}else{if(t.support){i.css("transition",t.transitionProp)}clearTimeout(t.tmhover);t._1(i,o.from,t.options.speed)}})},_3:function(e,t){var n=e.width(),r=e.height(),i=(t.x-e.offset().left-n/2)*(n>r?r/n:1),s=(t.y-e.offset().top-r/2)*(r>n?n/r:1),o=Math.round((Math.atan2(s,i)*(180/Math.PI)+180)/90+3)%4;return o},_4:function(e){var t,n,r={left:"0px",top:"-100%"},i={left:"0px",top:"100%"},s={left:"-100%",top:"0px"},o={left:"100%",top:"0px"},u={top:"0px"},a={left:"0px"};switch(e){case 0:t=!this.options.inverse?r:i;n=u;break;case 1:t=!this.options.inverse?o:s;n=a;break;case 2:t=!this.options.inverse?i:r;n=u;break;case 3:t=!this.options.inverse?s:o;n=a;break}return{from:t,to:n}},_1:function(t,n,r){e.fn.applyStyle=this.support?e.fn.css:e.fn.animate;t.stop().applyStyle(n,e.extend(true,[],{duration:r+"ms"}))}};var r=function(e){if(t.console){t.console.error(e)}};e.fn.hoverdir=function(t){var n=e.data(this,"hoverdir");if(typeof t==="string"){var i=Array.prototype.slice.call(arguments,1);this.each(function(){if(!n){r("cannot call methods on hoverdir prior to initialization; attempted to call method '"+t+"'");return}if(!e.isFunction(n[t])||t.charAt(0)==="_"){r("no such method '"+t+"' for hoverdir instance");return}n[t].apply(n,i)})}else{this.each(function(){if(n){n._0()}else{n=e.data(this,"hoverdir",new e.HoverDir(t,this))}})}return n}})(jQuery,window)