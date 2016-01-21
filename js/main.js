(function (doc, win) {
  var docEl = doc.documentElement,
	resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
	recalc = function () {
	  var clientHeight = docEl.clientHeight;
	  if (!clientHeight) return;
		$('.banner').height(clientHeight-60+'px');
		$('.banner ul li').height(clientHeight-60+'px');
	};

  if (!doc.addEventListener) return;
  win.addEventListener(resizeEvt, recalc, false);
  doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);

$(document).ready(function() {
	jQuery(".banner").slide({mainCell:".bd",effect:"fold",autoPlay:true,mouseOverStop:false,startFun:function( i,c,s ){ $('.inner').hide() }, endFun:function( i,c,s ){ $('.inner').fadeIn() } });


					
	
});