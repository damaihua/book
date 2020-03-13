
(function(window){
	var document = window.document,
		alert = window.alert,
		confirm = window.confirm,
		$ = window.jQuery;
	var HQ = {
		Config: {},
		Widget: {},
		App: {},
		Static: {}
	};
	HQ.Widget = {
		addStyle:function(configCss){
			if ((/msie (\d+)/i.test(navigator.userAgent) && !window.opera) ? parseInt(RegExp.jQuery1) : 0) {
				var t = document.createStyleSheet();
				t.cssText = configCss;
			}else{
				var r = document.createElement("style");
				r.setAttribute("type", "text/css");
				document.getElementsByTagName('head')[0].appendChild(r);
				if(r.styleSheet){
					r.styleSheet.cssText = configCss;
				}else{
				r.appendChild(document.createTextNode(configCss));
				}
			}
		},
		createHTML:function(configHTML,configClass,configId){
			if(!this.box){
				this.box = document.createElement("div");
				this.box.innerHTML = configHTML;
				document.body.appendChild(this.box);
				if(configId){this.box.id = configId;};
				if(configClass){this.box.className = configClass;};
			}else {
				this.box.style.display = "block";
			}
			return this;
		},
		gotoTop:function(btmValue,scrollHeight,bottom){
			var gotoCss = '.gotoTop{position:fixed;left:50%;margin-left:485px;width:50px;height:50px;line-height:50px;cursor:pointer;_position: absolute;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight - this.offsetHeight));}.gotoTop a{width:50px;height:50px;text-indent:-9999px;display:block;background:url("images/goTopBtnNormal.png");_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="images/goTopBtnNormal.png",sizingMethod="image");_background:none;cursor:pointer;}.gotoTop a:hover{background:url(images/goTopBtn.png);_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="images/goTopBtn.png",sizingMethod="image");_background:none;}#HQgotoTop .wxIcon{width:60px;height:60px;display:block;overflow:hidden;background:url(images/weixinShow01.png);_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="images/weixinShow01.png",sizingMethod="image");_background:none;cursor:pointer;}#HQgotoTop .wxIconHover{background:url(images/weixinShow02.png);_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="images/weixinShow02.png",sizingMethod="image");_background:none;}#HQgotoTop .wxBox{position:absolute;left:-209px;bottom:0;width:204px;height:220px;display:none;background:url(images/weixinShow03.png);_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="images/weixinShow03.png",sizingMethod="image");_background:none;}#HQgotoTop .wxGif{position:absolute;left:7px;bottom:50px;width:56px;height:70px;backrgounr:url(images/wxKiss.gif) no-repeat;}';
			var gotoHtml = '<a href="javascript:void(0);" class="blue" title="回到顶部">回到顶部</a>';
			this.createHTML(gotoHtml,'gotoTop','HQgotoTop');
			this.addStyle(gotoCss);
			scrollHeight = scrollHeight || 100;
			bottom = bottom || 0;
			btmValue = btmValue || 300;
            if(btmValue == 298){
                btmValue = 275;
            }
			var iconSrc = 'statics/images/weixinShow01.png';
			var codeSrc = 'statics/images/weixinShow02.png';
			var kissSrc = 'statics/images/wxKiss.gif';
			var $wxShow = $('<div id="wxShow" style="position:relative;width:60px;height:60px;margin-left:6px;z-index:9999;">');
			var $wxIcon = $('<div class="wxIcon">');
			var $wxCode = $('<div class="wxBox">');
			var $wxKiss = $('<div class="wxGif">');
			$wxShow.append($wxIcon,$wxCode,$wxKiss);
			$('#HQgotoTop').css('height','108px').prepend($wxShow);
			$wxIcon.mouseover(function(){
				$(this).addClass('wxIconHover');
				$wxCode.show();
				$wxKiss.show();
				$wxKiss[0].style.background ='url('+kissSrc+'?random='+Math.random()+')';
			}).mouseout(function(){
				$wxCode.hide();
				$wxKiss.hide();
				$(this).removeClass('wxIconHover');
				$wxKiss[0].style.background ='';
			});
			$('#HQgotoTop').hide();
			$(window).scroll(function(){
				if($(document).scrollTop()>scrollHeight){
					var btmHeight = $(document).scrollTop() + document.documentElement.clientHeight + btmValue - document.documentElement.scrollHeight;
					if(btmHeight > 0){
						$('#HQgotoTop').css({"bottom":btmHeight}).show();
					}else{
						$('#HQgotoTop').css({"bottom":bottom}).show();
					}
				}else{
					$('#HQgotoTop').hide();
				}
			});
			$('#HQgotoTop').live('click',function(event){
					$("html,body").animate({scrollTop:0},200);
			});
		}
	};
	window.HQ = HQ;
}(window));
