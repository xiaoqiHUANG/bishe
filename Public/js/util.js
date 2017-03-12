~function() {
	/**
	 * 自定义jquery验证插件
	 */
	$.fn.extend({
		isEmptyString: function() {
			var reg = /^\S+$/;
			return reg.test(this.val());
		},
		isNUM: function(){
			var reg = /^\+?[1-9][0-9]*$/;
			return reg.test(this.val());
		},
		isEmail: function() {
			var reg = /^[a-z\d]+(\.[a-z\d]+)*@([\da-z](-[\da-z])?)+(\.{1,2}[a-z]+)+$/;
			return reg.test(this.val());
		},
		isTel: function() {
			var reg = /^1[34578]\d{9}$/;

			return reg.test(this.val());
		},
	    warning : function( content ){
	    	content = content || "提交失败";
	    	$(this).html(content).clearQueue().show().fadeIn("fast").delay(2000).fadeOut("slow");
		}
	});
}();