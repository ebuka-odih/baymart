"use strict";!function(s,i){if("function"==typeof fitVids&&s("body").fitVids({ignore:".vimeo-video, .youtube-simple-wrap iframe, .iframe-video.for-btn iframe, .post-media.video-container iframe"}),"function"!=typeof e){var e,t=i.addEventListener;(e=function(e){i.innerWidth,i.innerHeight,e&&(t("load",e,!0),t("resize",e,!0),t("orientationchange",e,!1))})(function(){e()})}s(i).on("load",function(){s(".industryo-preloader").length&&s(".industryo-preloader").fadeOut(400),function(e,t){if(!e)return;var o,i,n;s(e).each(function(){n=s(this),i=n.data("s-hidden"),(o=(o=n.closest(t)).length?o:n.parent()).css("background-image","url("+this.src+")").addClass("s-back-switch"),i?(n.css("visibility","hidden"),n.show()):n.hide()})}(".js-bg")}),s(i).on("load resize orientationchange",function(){!function(){if(s(".industryo-footer").length){var e=s(".industryo-footer"),t=e.outerHeight();e.bind("heightChange",function(){s("body").css("padding-bottom",t)}),e.trigger("heightChange")}}(),s(".industryo-blog--isotope").length&&s(".industryo-blog--isotope").each(function(){s(this).isotope({itemSelector:".industryo-blog--post",layoutMode:"masonry",masonry:{columnWidth:".industryo-blog--post"}})}),s("#wpadminbar").length&&s("#wpadminbar").css("position","fixed"),function(){if(s(".industryo-error--wrap").length){var e=s(".industryo-footer").length?s(".industryo-footer").outerHeight():0,t=s(".industryo-header--wrap").length?s(".industryo-header--wrap").outerHeight():0,o=s(i).height()-e-t;s(".industryo-error--wrap").outerHeight(o)}}(),s(".menu-item-has-children a").focus(function(){s(this).siblings(".sub-menu").addClass("focused")}).blur(function(){s(this).siblings(".sub-menu").removeClass("focused")}),s(".sub-menu a").focus(function(){s(this).parents(".sub-menu").addClass("focused")}).blur(function(){s(this).parents(".sub-menu").removeClass("focused")})}),setTimeout(function(){s(".elementor-editor-active").length&&s(".main-header").addClass("main-header--desktop")},3e3),s(i).on("load resize",function(){setTimeout(function(){if(s(".elementor-editor-active").length&&s(".main-header--classic--mooseoom.main-header.main-header--mobile").length){var e=s("body.page-template .container .elementor-section"),t=s("body.page-template header .container .elementor-section");e.css({left:"-15px"}),t.css({left:"0"})}},3e3)})}(jQuery,window,document);
