(function( $ ) {
	"use strict";

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})( jQuery );

/**
 * jQuery Star Rating
 * 
 * source: https://github.com/antennaio/jquery-bar-rating/
 */
!function(t){"function"==typeof define&&define.amd?define(["jquery"],t):"object"==typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){var e=function(){function e(){var e=this,n=function(){var n=["br-wrapper"];""!==e.options.theme&&n.push("br-theme-"+e.options.theme),e.$elem.wrap(t("<div />",{"class":n.join(" ")}))},i=function(){e.$elem.unwrap()},a=function(n){return t.isNumeric(n)&&(n=Math.floor(n)),t('option[value="'+n+'"]',e.$elem)},r=function(){var n=e.options.initialRating;return n?a(n):t("option:selected",e.$elem)},o=function(){var n=e.$elem.find('option[value="'+e.options.emptyValue+'"]');return!n.length&&e.options.allowEmpty?(n=t("<option />",{value:e.options.emptyValue}),n.prependTo(e.$elem)):n},l=function(t){var n=e.$elem.data("barrating");return"undefined"!=typeof t?n[t]:n},s=function(t,n){null!==n&&"object"==typeof n?e.$elem.data("barrating",n):e.$elem.data("barrating")[t]=n},u=function(){var t=r(),n=o(),i=t.val(),a=t.data("html")?t.data("html"):t.text(),l=null!==e.options.allowEmpty?e.options.allowEmpty:!!n.length,u=n.length?n.val():null,d=n.length?n.text():null;s(null,{userOptions:e.options,ratingValue:i,ratingText:a,originalRatingValue:i,originalRatingText:a,allowEmpty:l,emptyRatingValue:u,emptyRatingText:d,readOnly:e.options.readonly,ratingMade:!1})},d=function(){e.$elem.removeData("barrating")},c=function(){return l("ratingText")},f=function(){return l("ratingValue")},g=function(){var n=t("<div />",{"class":"br-widget"});return e.$elem.find("option").each(function(){var i,a,r,o;i=t(this).val(),i!==l("emptyRatingValue")&&(a=t(this).text(),r=t(this).data("html"),r&&(a=r),o=t("<a />",{href:"#","data-rating-value":i,"data-rating-text":a,html:e.options.showValues?a:""}),n.append(o))}),e.options.showSelectedRating&&n.append(t("<div />",{text:"","class":"br-current-rating"})),e.options.reverse&&n.addClass("br-reverse"),e.options.readonly&&n.addClass("br-readonly"),n},p=function(){return l("userOptions").reverse?"nextAll":"prevAll"},h=function(t){a(t).prop("selected",!0),l("userOptions").triggerChange&&e.$elem.change()},m=function(){t("option",e.$elem).prop("selected",function(){return this.defaultSelected}),l("userOptions").triggerChange&&e.$elem.change()},v=function(t){t=t?t:c(),t==l("emptyRatingText")&&(t=""),e.options.showSelectedRating&&e.$elem.parent().find(".br-current-rating").text(t)},y=function(t){return Math.round(Math.floor(10*t)/10%1*100)},b=function(){e.$widget.find("a").removeClass(function(t,e){return(e.match(/(^|\s)br-\S+/g)||[]).join(" ")})},w=function(){var n,i,a=e.$widget.find('a[data-rating-value="'+f()+'"]'),r=l("userOptions").initialRating,o=t.isNumeric(f())?f():0,s=y(r);if(b(),a.addClass("br-selected br-current")[p()]().addClass("br-selected"),!l("ratingMade")&&t.isNumeric(r)){if(o>=r||!s)return;n=e.$widget.find("a"),i=a.length?a[l("userOptions").reverse?"prev":"next"]():n[l("userOptions").reverse?"last":"first"](),i.addClass("br-fractional"),i.addClass("br-fractional-"+s)}},$=function(t){return l("allowEmpty")&&l("userOptions").deselectable?f()==t.attr("data-rating-value"):!1},x=function(n){n.on("click.barrating",function(n){var i,a,r=t(this),o=l("userOptions");return n.preventDefault(),i=r.attr("data-rating-value"),a=r.attr("data-rating-text"),$(r)&&(i=l("emptyRatingValue"),a=l("emptyRatingText")),s("ratingValue",i),s("ratingText",a),s("ratingMade",!0),h(i),v(a),w(),o.onSelect.call(e,f(),c(),n),!1})},C=function(e){e.on("mouseenter.barrating",function(){var e=t(this);b(),e.addClass("br-active")[p()]().addClass("br-active"),v(e.attr("data-rating-text"))})},O=function(t){e.$widget.on("mouseleave.barrating blur.barrating",function(){v(),w()})},R=function(e){e.on("touchstart.barrating",function(e){e.preventDefault(),e.stopPropagation(),t(this).click()})},V=function(t){t.on("click.barrating",function(t){t.preventDefault()})},S=function(t){x(t),e.options.hoverState&&(C(t),O(t))},T=function(t){t.off(".barrating")},j=function(t){var n=e.$widget.find("a");l("userOptions").fastClicks&&R(n),t?(T(n),V(n)):S(n)};this.show=function(){l()||(n(),u(),e.$widget=g(),e.$widget.insertAfter(e.$elem),w(),v(),j(e.options.readonly),e.$elem.hide())},this.readonly=function(t){"boolean"==typeof t&&l("readOnly")!=t&&(j(t),s("readOnly",t),e.$widget.toggleClass("br-readonly"))},this.set=function(t){var n=l("userOptions");0!==e.$elem.find('option[value="'+t+'"]').length&&(s("ratingValue",t),s("ratingText",e.$elem.find('option[value="'+t+'"]').text()),s("ratingMade",!0),h(f()),v(c()),w(),n.silent||n.onSelect.call(this,f(),c()))},this.clear=function(){var t=l("userOptions");s("ratingValue",l("originalRatingValue")),s("ratingText",l("originalRatingText")),s("ratingMade",!1),m(),v(c()),w(),t.onClear.call(this,f(),c())},this.destroy=function(){var t=f(),n=c(),a=l("userOptions");T(e.$widget.find("a")),e.$widget.remove(),d(),i(),e.$elem.show(),a.onDestroy.call(this,t,n)}}return e.prototype.init=function(e,n){return this.$elem=t(n),this.options=t.extend({},t.fn.barrating.defaults,e),this.options},e}();t.fn.barrating=function(n,i){return this.each(function(){var a=new e;if(t(this).is("select")||t.error("Sorry, this plugin only works with select fields."),a.hasOwnProperty(n)){if(a.init(i,this),"show"===n)return a.show(i);if(a.$elem.data("barrating"))return a.$widget=t(this).next(".br-widget"),a[n](i)}else{if("object"==typeof n||!n)return i=n,a.init(i,this),a.show();t.error("Method "+n+" does not exist on jQuery.barrating")}})},t.fn.barrating.defaults={theme:"",initialRating:null,allowEmpty:null,emptyValue:"",showValues:!1,showSelectedRating:!0,deselectable:!0,reverse:!1,readonly:!1,fastClicks:!0,hoverState:!0,silent:!1,triggerChange:!0,onSelect:function(t,e,n){},onClear:function(t,e){},onDestroy:function(t,e){}},t.fn.barrating.BarRating=e});
//# sourceMappingURL=jquery.barrating.min.js.map

/**
 * Driver availability updates
 *
 * @since 2.3
 */
jQuery(document).ready(function ($) {
    jQuery(".ddwc-availability label.switch input[type=checkbox]").change(function(e) {
        var userID = $(this).attr("id");
		var metaKey = "ddwc_driver_availability";
		var isChecked = $(this).prop("checked");

		// Checked.
		if ( true === isChecked ) {
			var metaValue = "on";
		}
		// Unchecked.
		if ( false === isChecked ) {
			var metaValue = "";
		}

		// Post the data.
		$.post(WPaAjax.ajaxurl,{
            action : "ddwc_driver_availability_update",
            user_id : userID,
            metakey : metaKey,
            metavalue : metaValue
		},
		// Post logging.
        function(data, status) {
			// Log the $.post() results.
			// console.log("metavalue: " + metavalue + " - Data: " + data + "\nStatus: " + status);
        });
	});
});