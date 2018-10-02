!function(a){a.fn.isInViewport=function(){var t=a(this).offset().top,s=t+a(this).outerHeight(),o=a(window).scrollTop(),e=o+a(window).height();return o<s&&t<e},a(document).ready(function(){a("body").on("click","#top-nav a",function(){var t=a(this).attr("href"),s=a(this).attr("href").split("#");
//console.log(name[1]);
return a("html,body").animate({scrollTop:a("a[name="+s[1]+"]").offset().top-150},500),!1}),a("body").on("click","button#backToTop",function(){return a("html,body").animate({scrollTop:a("a[name=pg-top]").offset().top-150},500),!1}),0<a(".carousel").length&&(a(".carousel").carousel({interval:1e4,pause:!1}),a(".carousel-loader").stop().width("0%").animate({width:"100%"},{duration:9e3,specialEasing:{width:"linear"}}),a(".carousel").on("slide.bs.carousel",function(t){
//console.log(e);
a(".carousel-loader").stop().width("0%")}),a(".carousel").on("slid.bs.carousel",function(t){a(".carousel-loader").stop().animate({width:"100%"},{duration:9e3,specialEasing:{width:"linear"}})}))}),a(window).on("load",function(t){
//Load full size images
/*
		$('div[data-src]').each(function(index, Element) {
			//console.log(Element);
			var src = $(Element).data('src');
			//console.log(src);
			if (src !== undefined) {
				$(Element).css('background-image', 'url(' +src+ ')').parent().removeClass('loading');
	  		}
		});
*/}),a(window).on("resize scroll",function(t){
//console.log($('#masthead').outerHeight());
a("#masthead").hasClass("sticky")&&a(window).scrollTop()<=a("#masthead").outerHeight()/2?a("#masthead").removeClass("sticky animated slideInDown"):a(window).scrollTop()>a("#masthead").outerHeight()&&!a("#masthead").hasClass("sticky")&&a("#masthead").addClass("sticky animated slideInDown"),a(".ticket-btns").isInViewport()&&a("#tickets-sb-btns").hasClass("open")&&a("#tickets-sb-btns").toggleClass("open closed"),!a(".ticket-btns").isInViewport()&&a("#tickets-sb-btns").hasClass("closed")&&a("#tickets-sb-btns").toggleClass("closed open")})}(window.jQuery);