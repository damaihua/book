//下拉菜单
function menufix() {
	var sfEls=document.getElementById("jieqi_menu");
	if(sfEls) sfEls=sfEls.getElementsByTagName("li");
	if(sfEls){
		for(var i=0; i<sfEls.length; i++){
			sfEls[i].onmouseover=function(){ this.className = !this.className ? "sfhover" : this.className.replace(/(\s*nohover)|(\s*sfhover)|(^\s*)|(\s*$)/g, "") + " sfhover"; }
			sfEls[i].onmouseout=function(){ this.className = !this.className ? "sfhover" : this.className.replace(/(\s*nohover)|(\s*sfhover)|(^\s*)|(\s*$)/g, "") + " nohover"; }
			sfEls[i].onmousedown=function(){ this.className = !this.className ? "sfhover" : this.className.replace(/(\s*nohover)|(\s*sfhover)|(^\s*)|(\s*$)/g, "") + " sfhover"; }
			sfEls[i].onmouseup=function(){ this.className = !this.className ? "sfhover" : this.className.replace(/(\s*nohover)|(\s*sfhover)|(^\s*)|(\s*$)/g, "") + " sfhover"; }
		}
	}
}
if (document.all){
	window.attachEvent('onload',menufix);
}else{
	window.addEventListener('load',menufix,false);
}

//浮动菜单 menu-菜单对象id，box-浮动框对象id，参数3-right靠右对齐，默认靠左，参数4-top显示在上方，默认下方
function menubox(menu, box){
	menu = $_(menu);
	box =  $_(box);
	if(box.style.display == "none"){
		box.style.display = "";
	}else{
		box.style.display = "none";
		return;
	}
	var pos = menu.getPosition();
	if(arguments.length > 2 && arguments[2] == 'right') box.style.left = (pos.x + menu.offsetWidth - box.offsetWidth) + "px";
	else box.style.left = pos.x + "px";
	if(arguments.length > 3 && arguments[3] == 'top') box.style.top = (pos.y - box.offsetHeight + 1) + "px";
	else box.style.top = (pos.y + menu.offsetHeight - 1) + "px";
	return;
}

//浮动提示框（显示title内容）
var tipname = "tips";
var tiptag = "a,label,div,img,span"; 
var tipx = 0;
var tipy = 15;
var tipobj = null;

function tipinit() {
	var tipNameSpaceURI = "http://www.w3.org/1999/xhtml";
	if(!tipContainerID){ var tipContainerID = tipname;}
	var tipContainer = document.getElementById(tipContainerID);

	if(!tipContainer) {
	  tipContainer = document.createElementNS ? document.createElementNS(tipNameSpaceURI, "div") : document.createElement("div");
		tipContainer.setAttribute("id", tipContainerID);
	  document.getElementsByTagName("body").item(0).appendChild(tipContainer);
	}

	if (!document.getElementById) return;
	tipobj = document.getElementById(tipname);
	if(tipobj) document.onmousemove = function(evt){tipmove(evt)};

	var a, sTitle, elements;
	
	var elementList = tiptag.split(",");
	for(var j = 0; j < elementList.length; j++)
	{	
		elements = document.getElementsByTagName(elementList[j]);
		if(elements)
		{
			for (var i = 0; i < elements.length; i ++)
			{
				a = elements[i];
				sTitle = a.getAttribute("title");				
				if(sTitle && typeof(a.onmouseover) != "function" && typeof(a.onmouseout) != "function")
				{
					a.setAttribute("tiptitle", sTitle);
					a.removeAttribute("title");
					a.removeAttribute("alt");
					a.onmouseover = function() {tipshow(this.getAttribute('tiptitle'))};
					a.onmouseout = function() {tiphide()};
				}
			}
		}
	}
}

function tipmove(evt) {
	if(tipobj.style.display == "block"){
		var x=0, y=0;
		if (document.all) {
			x = (document.documentElement && document.documentElement.scrollLeft) ? document.documentElement.scrollLeft : document.body.scrollLeft;
			y = (document.documentElement && document.documentElement.scrollTop) ? document.documentElement.scrollTop : document.body.scrollTop;
			x += window.event.clientX;
			y += window.event.clientY;
		} else {
			x = evt.pageX;
			y = evt.pageY;
		}
		tipobj.style.left = (x + tipx) + "px";
		tipobj.style.top = (y + tipy) + "px";
	}
}

function tipshow(text) {
	if (!tipobj) return;
	tipobj.innerHTML = text;
	tipobj.style.display = "block";
}

function tiphide() {
	if (!tipobj) return;
	tipobj.innerHTML = "";
	tipobj.style.display = "none";
}

if (document.all){
	window.attachEvent('onload',tipinit);
}else{
	window.addEventListener('load',tipinit,false);
} 

//tab效果
function selecttab(obj){
	var i = 0;
	var n = 0;
	var tabs = obj.parentNode.parentNode.getElementsByTagName("li"); 
	for(i=0; i<tabs.length; i++){
		tmp = tabs[i].getElementsByTagName("a")[0];
		if(tmp == obj){
			tmp.className="selected";
			n=i;
		}else{
			tmp.className="";
		}
 	}
	var tabchilds = obj.parentNode.parentNode.parentNode.parentNode.childNodes;
	var tabcontent;
	for(i=tabchilds.length-1; i>=0; i--){
		if(typeof tabchilds[i].tagName != "undefined" && tabchilds[i].tagName.toLowerCase() == "div"){
			tabcontent = tabchilds[i];
			break;
		}
	}
	var contents = tabcontent.childNodes;
	var k = 0;
	for(i=0; i<contents.length; i++){
		if(typeof contents[i].tagName != "undefined" && contents[i].tagName.toLowerCase() == "div"){
			contents[i].style.display = k==n ? "block" : "none";
			k++;
		}
 	}
}

//MSClass (Class Of Marquee Scroll - General Uninterrupted Scrolling(JS)) Ver 2.8
//Code By : Yongxiang Cui(333) E-Mail:zhadan007@21cn.com http://www.popub.net
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('13 2s(){18 b=1i,a=1I;b.$=13(c){16 1g.3C(c)};b.t=(b.F=["3E 2.8.6U","6T 6S 2s 2t","6R 6Q 6P(6O)","6N://6M.6L.6K/6J/3E.6I","6H 6G(6F) 6E@6D.6C"]).4r("\\n");b.a=a[0]["3E"]||a[0]||a[0][0];b.b=(b.c=1H b.a=="3d"?b.$(b.a[0])||b.$(b.a.4E):b.$(b.a))&&b.6B.1T().2L(4H>>>4G,14>>4F)==b.F[1].2L(4H>>>4G,14>>4F);11(!b.c||!b.b){16 2v("4d ["+(b.a.4E||b.a[0]||b.a)+"] 6A 6z!")||(b.c=-1)}b.2R=1+(b.i=b.2e=-1);b.f=b.q=b.r=b.s=b.B=b.u=b.k=b.e=b.d=b.j=0;b.15=a[1]||a[0]["15"]||0;b.1a=a[2]||a[0]["1a"]||1;b.1B=a[3]||a[0]["1B"]||0;b.1J=a[4]||a[0]["1J"]||0;b.1S=a[5]||a[0]["1S"]||30;b.1k=a[6]||a[0]["1k"]||0;b.1R=a[7]||a[0]["1R"]||2F;b.1c=a[8]||a[0]["1c"]||-10;b.1m=a[9]||a[0]["1m"]||0;b.2j=a[10]||a[0]["2j"];b.2Z=b.$(a[0]["6y"])||0;b.2Y=b.$(a[0]["6x"])||0;b.1N=a[0]["1N"]||[];b.c.12.37=b.c.12.48=b.c.12.47="2J";b.3G=(6w.6v.2w().6u("6t")==-1);b.m=(1g.3t)?1:0;11(a.1n>=7||a[0]["6s"]==1){b.4D()}}2s.3Q.4D=13(){11(1i.c==-1||1i.i>=0){11(1i.i==2){1i.2B()}16 1f}18 e=1i,D,p,L,H,s,K,d="6r",J=2s,B=0,n=[],A=0,y=0,j,a=0,I={6q:-1,6p:-1,1r:0,6o:0,2o:1,6n:1,1u:2,3y:3,6m:4},g=0,x=0,M=0,u=0,q=0,o=0,C=0;18 f=13(O,N,m){m?0:m=0;16 e.m?(O.2a[N]!="4C"&&O.2a[N]!="4B"&&O.2a[N]!="3A"&&O.2a[N]!="6l"&&O.2a[N]!="6k"&&O.2a[N]!="3n")?O.2a[N]:m:(1h.2p(O,1A)[N]!="4C"&&1h.2p(O,1A)[N]!="4B"&&1h.2p(O,1A)[N]!="3A"&&1h.2p(O,1A)[N]!="2z"&&1h.2p(O,1A)[N]!="3n")?1h.2p(O,1A)[N]:m};18 t=13(N){18 m=N||1h.1s;3D=m.3D||m.6j;11(3D==6i){2v(e.t)}};e.c.12.1C=f(e.c,"1C","4A");18 E={b:13(){16\'<1q><1o 1y="8"><1z 12="1l:0;1l-1r:1w 1F #2Q;1l-2o:1w 1F #29;1L:0;21:0;1L-2o:-4z;"></1z></1o></1q>\'},c:13(m,N){16 6h(N)?\'<1q><1o 6g="2o" 1y="17" 1O="1i.12.2n=\\\'#3w\\\';1i.12.1M=\\\'#29\\\';" 1V="1i.12.2n=\\\'\\\';1i.12.1M=\\\'#3v\\\';" 2U="\'+N+\'">\'+m+"</1o></1q>":"<1q><1o 1y=\\"17\\" 1O=\\"1i.12.2n=\'#3w\';1i.12.1M=\'#29\';1g.3C(\'"+j+"3B"+i+"\').12.1t=\'1x\';\\" 1V=\\"1i.12.2n=\'\';1i.12.1M=\'#3v\';1g.3C(\'"+j+"3B"+i+\'\\\').12.1t=\\\'\\\';" ><1z 12="1y:6f;1C:4A;"><1z 2r="\'+j+"3B"+i+\'" 12="1C:2y;1u:1w;1r:6e;1M:#29;z-4x:0;2P-3x:2z;1v:2x%;1l:0;1L:0;21:0;">\'+m+\'</1z><1z 12="1C:2y;1u:3A;1r:4z;1M:#2Q;-4u-4t-4s:1x;2P-3x:2z;1v:2x%;1l:0;1L:0;21:0;">\'+m+"</1z></1z></1o></1q>"},f:13(){18 m=e.$(j);11(!m){16 1f}m.12.1t="1x"},d:13(N){18 O=e.$(j);11(!O){16 1f}18 m=N||1h.1s;O.12.1r=(m.2E+(1g.6d.3r||1g.2O.3r))+"1e";O.12.1u=1g.2O.6c-m.2c<=4y?(m.2c-4y)+"1e":m.2c+"1e";O.12.1t="";16 1f},a:13(){11(!J.c){J.c=1;e.m?1g.1X("6b",t):1g.1W("6a",t,1P)}11(!e.1N[0]){16 1f}e.c.3u=13(){16 1f};18 N=1g.49("69");j=N.2r="M"+(19.34().1T().68(-6));N.12.67="1t:1x;z-4x:2x;1C:2y;1u:0;1r:-4h;1v:66;1l-1u:1w 1F #3z;1l-1r:1w 1F #3z;1l-3y:1w 1F #4w;1l-2o:1w 1F #4w;1L:0;21:0;";18 m=\'<1z 12="2P-65:\\\'\\64\\63\\\',62;2D:61;60-1M:#3z;1v:5Z;1l-1u:1w 1F #29;1l-1r:1w 1F #29;1l-3y:1w 1F #2Q;1l-2o:1w 1F #2Q;1L:0;21:0;"><2l 1l="0" 3s="0" 12="2P-3x:2z;4v-5Y:5X;1L:1w;1v:5W;4v-5V:1u;-4u-4t-4s:1x; 1l-2m:2m" 5U="16 1f;" 3u="16 1f">\';1D(i=1;i<e.1N.1n;i++){m+=(!e.1N[i]||!e.1N[i][0]||e.1N[i][0]=="")?E.b():E.c(e.1N[i][0],e.1N[i][1]||i)}m+=E.b();m+="<1q><1o 1y=\\"17\\" 1O=\\"1i.12.2n=\'#3w\';1i.12.1M=\'#29\';\\" 1V=\\"1i.12.2n=\'\';1i.12.1M=\'#3v\';\\" 2U=\\"2v(\'"+e.F.4r("\\\\n")+"\')\\">5T "+e.F[0]+"</1o></1q></2l></1z>";N.1p=m;11(e.m){1h.1X("5S",13(){1g.2O.36(N)});e.c.1X("3u",E.d);1g.1X("2G",E.f)}1d{1h.1W("5R",13(){1g.2O.36(N)},1P);e.c.1W("5Q",E.d,1P);1g.1W("5P",E.f,1P)}}};E.a();11(e.1S<20){e.1S=20}11(e.1R<2F){e.1R=2F}11(e.1B==0){e.1B=1j(e.c.12.1v)}11(e.1J==0){e.1J=1j(e.c.12.1y)}e.c.12.1v=e.1B+"1e";e.c.12.1y=e.1J+"1e";11(1H e.15=="2u"){e.15=I[e.15.1T().2w()]}D=e.15>1?"<2l 4m=\'0\' 3s=\'0\' 12=\'1l-2m:2m;1t:3m;\'><1q><1o 3a=1P 12=\'4q-4p: 39;4o-2d:4n-3t;\'>2i</1o><1o 3a=1P 12=\'4q-4p: 39;4o-2d:4n-3t;\'>2i</1o></1q></2l>":"<2l 4m=\'0\' 3s=\'0\' 12=\'1l-2m:2m;\'><1q><1o>2i</1o></1q><1q><1o>2i</1o></1q></2l>";p=e.15>1?e.1B:e.1J;L=e.15>1?"5O":"5N";e.d=e.15>1?"5M":"3r";e.w=e.15>1?"1u":"1r";11(e.15>4){e.15=2}11(e.15<-1){e.15=0}e.n=e.c.1p;18 b={0:13(){16 0},5L:13(m,O,N){16 O*(m/=N)*m},5K:13(m,O,N){16-O*(m/=N)*(m-2)},5J:13(m,O,N){11((m/=N/2)<1){16 O/2*m*m}16-O/2*((--m)*(m-2)-1)},5I:13(m,O,N){16 O*(m/=N)*m*m},5H:13(m,O,N){16 O*((m=m/N-1)*m*m+1)},5G:13(m,O,N){11((m/=N/2)<1){16 O/2*m*m*m}16 O/2*((m-=2)*m*m+2)},5F:13(m,O,N){16 O*(m/=N)*m*m*m},5E:13(m,O,N){16-O*((m=m/N-1)*m*m*m-1)},5D:13(m,O,N){11((m/=N/2)<1){16 O/2*m*m*m*m}16-O/2*((m-=2)*m*m*m-2)},5C:13(m,O,N){16 O*(m/=N)*m*m*m*m},5B:13(m,O,N){16 O*((m=m/N-1)*m*m*m*m+1)},5A:13(m,O,N){11((m/=N/2)<1){16 O/2*m*m*m*m*m}16 O/2*((m-=2)*m*m*m*m+2)},5z:13(m,O,N){16-O*19.4l(m/N*(19.1E/2))+O},5y:13(m,O,N){16 O*19.2A(m/N*(19.1E/2))},5x:13(m,O,N){16-O/2*(19.4l(19.1E*m/N)-1)},5w:13(m,O,N){16(m==0)?0:O*19.1U(2,10*(m/N-1))},5v:13(m,O,N){16(m==N)?O:O*(-19.1U(2,-10*m/N)+1)},5u:13(m,O,N){11(m==0){16 0}11(m==N){16 O}11((m/=N/2)<1){16 O/2*19.1U(2,10*(m-1))}16 O/2*(-19.1U(2,-10*--m)+2)},5t:13(m,O,N){16-O*(19.2N(1-(m/=N)*m)-1)},5s:13(m,O,N){16 O*19.2N(1-(m=m/N-1)*m)},5r:13(m,O,N){11((m/=N/2)<1){16-O/2*(19.2N(1-m*m)-1)}16 O/2*(19.2N(1-(m-=2)*m)+1)},2I:13(N,R,Q){18 O=1.2k;18 P=0;18 m=R;11(N==0){16 0}11((N/=Q)==1){16 R}11(!P){P=Q*0.3}11(m<19.2C(R)){m=R;18 O=P/4}1d{18 O=P/(2*19.1E)*19.3q(R/m)}16-(m*19.1U(2,10*(N-=1))*19.2A((N*Q-O)*(2*19.1E)/P))},42:13(N,R,Q){18 O=1.2k;18 P=0;18 m=R;11(N==0){16 0}11((N/=Q)==1){16 R}11(!P){P=Q*0.3}11(m<19.2C(R)){m=R;18 O=P/4}1d{18 O=P/(2*19.1E)*19.3q(R/m)}16 m*19.1U(2,-10*N)*19.2A((N*Q-O)*(2*19.1E)/P)+R},5q:13(N,R,Q){18 O=1.2k;18 P=0;18 m=R;11(N==0){16 0}11((N/=Q/2)==2){16 R}11(!P){P=Q*(0.3*1.5)}11(m<19.2C(R)){m=R;18 O=P/4}1d{18 O=P/(2*19.1E)*19.3q(R/m)}11(N<1){16-0.5*(m*19.1U(2,10*(N-=1))*19.2A((N*Q-O)*(2*19.1E)/P))}16 m*19.1U(2,-10*(N-=1))*19.2A((N*Q-O)*(2*19.1E)/P)*0.5+R},32:13(m,P,O,N){11(N==3p){N=1.2k}16 P*(m/=O)*m*((N+1)*m-N)},41:13(m,P,O,N){11(N==3p){N=1.2k}16 P*((m=m/O-1)*m*((N+1)*m+N)+1)},5p:13(m,P,O,N){11(N==3p){N=1.2k}11((m/=O/2)<1){16 P/2*(m*m*(((N*=(1.4k))+1)*m-N))}16 P/2*((m-=2)*m*(((N*=(1.4k))+1)*m+N)+2)},4j:13(m,O,N){16 O-b.3o(N-m,O,N)},3o:13(m,O,N){11((m/=N)<(1/2.28)){16 O*(7.2M*m*m)}1d{11(m<(2/2.28)){16 O*(7.2M*(m-=(1.5/2.28))*m+0.28)}1d{11(m<(2.5/2.28)){16 O*(7.2M*(m-=(2.25/2.28))*m+0.5o)}1d{16 O*(7.2M*(m-=(2.5n/2.28))*m+0.5m)}}}},5l:13(m,O,N){11(m<N/2){16 b.4j(m*2,O,N)*0.5}16 b.3o(m*2-N,O,N)*0.5+O*0.5}};11(e.1a.1n){e.k=(13(m){e.1a=e.1a[0]<1?4i(e.1a[0].1T().38("0.","")):4i(e.1a[0]);1D(i 5k b){18 N=++N||0;11((i.2L(4)==m||m.2L(4)==i||i==m||m==N)&&N>0){B=N;16 i}}})(e.1a[1].1T().2w()).1T()}11(e.1a<1){e.k=e.1a}11(e.1m>0||(e.1k>0&&e.1c==-10)){e.1c=p}11(e.1c==-10){e.1c=1A}e.2R=e.1a;11(e.1m>1){e.1m==2?A=1:e.q=e.m?e.1m:1-(A=1);11(e.m&&e.q>0){e.c.12.46="1Z(5j="+(e.1k/5i*0.2)+",35="+(e.q-10)+")";11(e.q>=33||e.q<10){e.c.2h.1Z.35=19.2b(19.34()*22)}e.c.2h.1Z.44();e.c.2h.1Z.43()}e.1a=p;e.k=1-(e.1m=1)}11(e.2j){18 G=(1H e.2j)=="2u"?[e.2j]:e.2j;1D(i=0;i<G.1n;i++){18 v=e.$(G[i]);11(v&&v.12.1t=="1x"){e.f=1;n[i]=[v,f(v,"1C","3n"),f(v,"1r")];v.12.1C="2y";v.12.3T="2J";v.12.1r="-4h";v.12.1t="4g"}}}e.G=13(){11(1H e.a=="3d"&&(!e.a.1n||e.a.1n>0)){e.D=e.$(e.a[1])||e.$(e.a.5h);11(e.D){18 U=0;18 m=0;11(e.D.3b=="4f"){e.D.12.2K="0"}e.D.12.1t="3m-4g";e.D.12.1L=e.D.12.21=0;e.D.12.3c="1x";1D(18 P=0,O=e.D.1K.1n;P<O;P++){18 X=e.D.1K[P];11(X.4e==1){m++;X.12.3c="1x";X.12.4b=X.12.4a="1u";X.12.1t="3m";11(e.15>1){X.12.3l=f(X,"3l");X.12.3k=f(X,"3k");X.12.3j=f(X,"3j");X.12.3i=f(X,"3i");U+=X[L]+1j(X.12.3l)+1j(X.12.3k)+1j(X.12.3j)+1j(X.12.3i)}1d{X.12.3h=f(X,"3h");X.12.3g=f(X,"3g");X.12.3f=f(X,"3f");X.12.3e=f(X,"3e");U+=X[L]+1j(X.12.3h)+1j(X.12.3g)+1j(X.12.3f)+1j(X.12.3e)}}}e.15>1?(e.D.12.1v=U+"1e")||(e.D.12.1y=e.1J+"1e"):(e.D.12.1y=U+"1e")||(e.D.12.1v=e.1B+"1e");e.C=1j(e.c[L]/e.1c);e.B=e.1b=1;e.v=[];11(1H e.a=="3d"&&(!e.a.1n||e.a.1n>1)){18 S=e.$(e.a[2])||e.a[2]||e.$(e.a.5g);11(S&&(S.1n||S.3b)){18 R=(e.a[3]||e.a.5f||"1O").1T().2w();(R=="1O"||R=="2G")?0:R="1O";18 N=(e.a[4]||e.a.5e||0);e.1c=p;11(e.1a>=e.1c){e.1a=p-1}18 V=1j(e.c[L]/e.1c);l=S.1n||1;18 Q=0,W=S;1D(18 T=0;T<l;T++){11(l>1){W=e.$(S[T])}W.12.1L=W.12.21=0;W.12.3c="1x";11(W.3b=="4f"){W.12.2K="0"}e.C=W.1K.1n;1D(18 P=0;P<e.C;P++){11(W.1K[P].4e==1){11(V==Q){W.1K[P].12.1t="1x";5d}W.1K[P].12.2K=f(W.1K[P],"2K","2z");W.1K[P].12.37="2J";e.v[Q]=W.1K[P];e.v[Q][R]=(13(Y){16 13(){C=1G(13(){e.u=1;1D(18 Z=0;Z<e.v.1n;Z++){e.v[Z].2g=""}e.v[Y].2g=d;r(Y)},N)}})(Q);e.v[Q].1V=(13(Y){16 13(){1Y(C);11(e.u==1){e.u=0;11(e.i==0){2f(q);q=2H(u,e.1S)}1d{1Y(o);o=1G(h,e.1k)}z(Y)}}})(Q);Q+=1}}}e.C=Q;e.r=e.C>1?1:0;11(e.v.1n>0){e.v[0].2g=d}11(V>e.C){e.s=V-e.C;1D(18 O=0;O<e.v.1n;O++){e.v[O].1O=e.v[O].1V=13(){}}e.C=V;2v("4d ["+e.c.2r+"] 4c 5c 5b 5a 59 ["+e.s+"] 58 57 4c!")||0}}}11(e.1m==0&&A==0&&e.q==0&&e.15>=0&&e.15<=3){11(e.15>1){e.D.12.1v=U*2+"1e";e.D.12.1y=e.1J+"1e";e.D.1p+=e.D.1p}1d{e.D.12.4b=e.D.12.4a="1u";e.D.12.1v=e.1B+"1e";e.c.1p+=e.c.1p}}}}};e.G();11(e.B==0&&(e.15==0||e.15==1)){e.c.1p=D.38(/2i/g,e.c.1p)}1d{11(e.B==0&&(e.15==2||e.15==3)){e.c.3a=1P;e.c.12.56="39";(e.1c==0&&e.1k==0)?e.c.1p+=e.c.1p:e.c.1p=D.38(/2i/g,e.c.1p)}1d{11(e.15==4||e.15==-1){e.15=6%e.15;e.e=1}}}H=e.1c;s=e.15;K=e.k;11(e.1m>0){e.E=1g.49("1z");e.E.12.1v=e.1B+"1e";e.E.12.1y=e.1J+"1e";e.E.12.1C="2y";e.E.12[e.w]=e.15%2?-p+"1e":p+"1e";e.15>1?e.E.12.1r="0":e.E.12.1u="0";e.E.1p=e.c.1p;e.E.12.37=e.E.12.48=e.E.12.47="2J";e.c.36(e.E);e.E[e.d]=p}18 u=13(){e.k>0?e.1a=19.55((e.1c-a)*e.k):0;e.2t()};18 z=13(m){11(e.i==2){16 1f}11(e.1m>0&&(A==1||e.q>0)){m+1>=e.C?e.E[e.d]=0:e.E[e.d]=p*(m+1)}};18 r=13(m){11(e.i==2){16 1f}1Y(o);2f(q);11(e.1m==0){e.1b=1j(e.c[e.d]/H)+1;11(e.1b>e.C){e.1b-=e.C}m+=1;e.u=1;11(m<=e.1b){e.1c=H*(e.1b-m)+e.c[e.d]%H;e.15=e.15>1?3:1}1d{11(m-e.1b==e.C-1){11(B==24){e.k="2I"}11(B==27||B==26){e.k="32"}}11(e.1b<=2&&m==e.C&&B==23){e.k="2I"}e.1c=H*(m-e.1b)-e.c[e.d]%H;e.15=e.15>1?2:0}}1d{11(e.i==0&&e.e==1){e.15=e.15>1?5-e.15:1-e.15;s=e.15}e.15%2?e.E.12[e.w]=-p+e.c[e.d]+"1e":e.E.12[e.w]=p+e.c[e.d]+"1e";m==e.C?e.E[e.d]=1-(e.1b=1):e.E[e.d]=p*(m);e.1b=m+1}a=0;11(e.1c>0){h()}};18 F=13(){1Y(y);18 m=5;(13(){e.m?e.c.12.46="54(45="+m+")":e.c.12.45=(m/2x);m+=5;11(m<=2x){y=1G(1I.53,20)}})()};18 h=13(){11(A==1){F()}11(e.q>0){11(e.q>=33||e.q<10){e.c.2h.1Z.35=19.2b(19.34()*22)}e.c.2h.1Z.44();e.c.2h.1Z.43()}11(e.j==1){o=1G(h,e.1k)}1d{2f(q);g=x=a=e.i=0;11(e.e==1&&e.k>0){11((e.15==2||e.15==0)&&e.c[L]-p-e.c[e.d]<e.1c){e.1c=e.c[L]-p-e.c[e.d]}11(e.15%2&&e.c[e.d]<e.1c){e.1c=e.c[e.d]}}11(e.B==1&&e.u==0){e.1b=1j(e.c[e.d]/H)+2;11(e.e==1){11(e.1m==1){11(e.1b>e.C){e.1b=1}}1d{11(e.15%2){e.1b-=2;11(e.1b<=0){e.1b=1}}1d{11(e.1b>=e.C){e.1b=e.C}}}}1d{11(e.1b>e.C){e.1b-=e.C}}11(e.r==1&&e.s==0){1D(18 m=0;m<e.C;m++){e.v[m].2g=""}e.e==0&&A==0&&e.q==0&&e.1m==0&&e.15%2?e.v[e.1b+e.C-2>e.C?e.1b-3:e.1b+e.C-3].2g=d:e.v[e.1b-1].2g=d}}11(e.e==1&&e.C>1){11(((B==22||B==24)&&!e.15%2&&e.1b==2)||((B==22||B==24)&&e.15%2&&e.1b==e.C-1)){e.k="42"}11(((B==23||B==24)&&!e.15%2&&e.1b==e.C)||((B==23||B==24)&&e.15%2&&e.1b==1)){e.k="2I"}11(((B==25||B==27)&&!e.15%2&&e.1b==2)||((B==25||B==27)&&e.15%2&&e.1b==e.C-1)){e.k="41"}11(((B==26||B==27)&&!e.15%2&&e.1b==e.C)||((B==26||B==27)&&e.15%2&&e.1b==1)){e.k="32"}}11(e.e==1&&e.2e>=0){e.2e=-1;e.40()}q=2H(u,e.1S);e.3Z()}};e.2X=13(N){11(e.i==1){18 m=-1;11(1H 1I[0]=="52"){m=1I[0]}11(1H 1I[0]=="2u"){s=m=I[1I[0].1T().2w()]}11(m<0||m>3){2v("51 50 4Z!");16 1f}11(e.2e==m){16 1f}e.15=m;11(1H 1I[0]=="2u"||e.e==1){s=e.15}e.31()}};e.3X=e.40=e.3Z=e.3W=13(){};e.31=13(){1Y(o);o=1G(h,1I[0])};e.4Y=13(){e.3Y();e.c[e.d]=e.i=g=x=0;e.i=-1};e.2B=13(){11(e.i==2&&!1I[0]){e.i=a>1?0:1;q=2H(u,e.1S);16 1f}11(e.i==0){2f(q);q=2H(u,e.1S)}11(e.i==1){e.31(e.1k)}};e.3Y=13(){11(e.i!=2){e.2q();e.i=2}};e.2q=13(){1Y(C);2f(q);1Y(o)};e.4X=e.4W=13(){e.2q()};18 k=13(){2f(q);g=x=a=1-(e.i=1);e.1c=H;e.15=s;e.k=K;11(e.u==1){16 1f}11(e.e==1){11(e.1m==1){s=e.15=e.15>1?5-e.15:1-e.15}1d{11(e.c[e.d]==0||e.c[e.d]>=e.c[L]-p){e.2e=e.15;e.3X();s=e.15=e.15>1?5-e.15:1-e.15}}}e.3W();o=1G(h,e.1k)};18 w=13(){e.G();1G(c,0)};18 c=13(){e.y=e.c[L]/2;11(e.1m==0&&e.y<=p+e.1a&&e.e==0){11(e.B==1){18 N=e.c.4V("3V")/1+1||1;e.c.4U("3V",N);11(N<5){w()}}1d{e.c.1p=e.n;3U(e.n)}16 1f}3U(e.n);11(e.e==1){e.2e=e.15>1?5-e.15:1-e.15}11(e.f==1){1D(i=0;i<n.1n;i++){18 m=n[i][0];m.12.1C=n[i][1];m.12.1t="1x";m.12.3T="4T";m.12.1r=n[i][2]}}11(e.1k>0&&e.2Z){e.2Z.2G=13(){e.2X(e.15>1?5-e.15:1-e.15)}}11(e.1k>0&&e.2Y){e.2Y.2G=13(){e.2X(e.15)}}e.c[e.d]=e.i=g=x=0;M=19.2b(e.1c/e.1a);11(e.1R>=4S){e.i=1;11(e.1R==4R){e.1k=3S}e.1R=3S;16}1G(13(){11((e.1c>=0&&(e.B==0||(e.B==1&&(e.r==0||e.r==1)))&&e.l)||(e.1k==0&&e.1c==-2&&e.l)){e.l()}h()},e.1R)};11(e.1m==1){e.2t=13(){a+=e.1a;11(a>=e.1c&&e.1k>0){e.15%2?e.E.12[e.w]=(1j(e.E.12[e.w])-(e.1c-e.1a-a))+"1e":e.E.12[e.w]=(1j(e.E.12[e.w])+(e.1c-e.1a-a))+"1e";k();e.c[e.d]=e.E[e.d];e.15%2?e.E.12[e.w]=-p+e.c[e.d]+"1e":e.E.12[e.w]=p+e.c[e.d]+"1e";e.1b==e.C?e.1b=1-(e.E[e.d]=0):e.E[e.d]=p*(e.1b);16}3R(e.15){1Q 0:1Q 2:e.E.12[e.w]=(1j(e.E.12[e.w])-e.1a)+"1e";2d;1Q 1:1Q 3:e.E.12[e.w]=(1j(e.E.12[e.w])+e.1a)+"1e";2d}}}1d{11(1H e.k=="2u"){e.2t=13(){a+=g;11(g<=M){x+=(e.1a=19.2b(b[e.k](g++,e.1c,M))-x);11(e.c[e.d]<=e.1a&&e.e==0){e.c[e.d]+=e.y}e.15%2?e.c[e.d]-=e.1a:e.c[e.d]+=e.1a}1d{11(e.c[e.d]>e.y&&e.e==0){e.c[e.d]-=e.y}k()}}}1d{e.2t=13(){a+=e.1a;11((a>=e.1c&&e.1k>0)||(e.e==1&&a>e.1a&&(e.c[e.d]<=0||e.c[e.d]>=e.c[L]-p))){e.15%2?e.c[e.d]-=e.1c+e.1a-a:e.c[e.d]+=e.1c+e.1a-a;k();16}3R(e.15){1Q 0:1Q 2:11(e.c[e.d]>=e.y&&e.e==0){e.c[e.d]-=e.y}e.c[e.d]+=e.1a;2d;1Q 1:1Q 3:11(e.c[e.d]<=e.1a&&e.e==0){e.c[e.d]+=e.y}e.c[e.d]-=e.1a;2d}}}}1G(c,2F)};2s.3Q.l=13(){18 g=1i,f=1A,k=1A,m=0,n=0,b=0,d=0,j=0,h=19.2b(g.1B/2);18 a=13(o){18 o=o||1h.1s;11(g.1k!=0||(o.3P&&o.3P!=1)||(o.3O&&o.3O!=1)||g.i==2||g.i==-1){16 1f}11(m==0){g.i=m=1;g.2q();o.3N?o.3N():o.4Q=1P;o.3M?o.3M():o.4P=1f;b=g.c[g.d];n=g.15>1?1h.1s?o.2c:o.2W:1h.1s?o.2E:o.2V;f=o.2S||o.4O;k=f.12.2D;f.12.2D="4N";11(g.m){f.4M();1g.1X("2T",e);1g.1X("3K",c)}1d{1g.1W("3J",e,1f);1g.1W("3H",c,1f)}}};18 e=13(p){18 p=p||1h.1s;d=g.15>1?1h.1s?p.2c:p.2W:1h.1s?p.2E:p.2V;18 o=n-d+b;11(o<=0||o>=g.y){o<=0?g.c[g.d]+=g.y:g.c[g.d]=g.y-o;n=g.15>1?1h.1s?p.2c:p.2W:1h.1s?p.2E:p.2V;b=g.c[g.d];o=n-d+b}g.c[g.d]=o};18 c=13(o){11(g.m){f.4L();1g.3L("2T",e);1g.3L("3K",c)}1d{1g.3I("3J",e,1f);1g.3I("3H",c,1f)}m=g.j=0;f.12.2D=k;g.2B()};11(g.e==0){g.m?g.c.1X("2U",a):g.c.1W("4K",a,1f)}11(g.1c==-2){g.c.2T=13(o){11(g.15>1){18 o=o||1h.1s;11(1h.1s){11(g.3G){j=o.2S.2r==g.c.2r?o.3F-g.c[g.d]:o.2S.4J-g.c[g.d]+o.3F}1d{g.1c=1A;16}}1d{j=o.4I-g.c[g.d]}g.15=j>h?3:2;g.1a=19.2b(19.2C(h-j)*(g.2R*2)/h)}};g.c.1V=13(){11(g.1a==0){g.1a=1}}}1d{g.c.1O=13(){11((g.i==0&&g.1k>0)||g.i==2||g.i==-1){16 1f}g.j=1;g.2q()};g.c.1V=13(){11(g.j==1){g.j=0;g.2B()}}}};',62,429,'|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||if|style|function||Direction|return||var|Math|Step|Counter|ScrollStep|else|px|false|document|window|this|parseInt|DelayTime|border|SwitchType|length|td|innerHTML|tr|top|event|display|left|width|1px|none|height|div|null|Width|position|for|PI|solid|setTimeout|typeof|arguments|Height|childNodes|margin|color|ContextMenu|onmouseover|true|case|WaitTime|Timer|toString|pow|onmouseout|addEventListener|attachEvent|clearTimeout|revealTrans||padding|||||||75|FFF|currentStyle|round|clientX|break|Bound|clearInterval|className|filters|MSCLASS_TEMP_HTML|HiddenID|70158|table|collapse|backgroundColor|bottom|getComputedStyle|Pause|id|Marquee|Scroll|string|alert|toLowerCase|100|absolute|12px|sin|Continue|abs|cursor|clientY|800|onclick|setInterval|inelastic|hidden|fontSize|substr|5625|sqrt|body|font|808080|BakStep|srcElement|onmousemove|onmousedown|pageY|pageX|Run|NextBtn|PrevBtn||Play|inback||random|Transition|appendChild|overflow|replace|nowrap|noWrap|tagName|listStyle|object|borderBottomWidth|borderTopWidth|marginBottom|marginTop|borderRightWidth|borderLeftWidth|marginRight|marginLeft|inline|static|outbounce|undefined|asin|scrollTop|cellpadding|all|oncontextmenu|000|0A246A|size|right|D4D0C8|0px|_|getElementById|keyCode|MSClass|offsetX|IsNotOpera|mouseup|removeEventListener|mousemove|onmouseup|detachEvent|preventDefault|stopPropagation|button|which|prototype|switch|3600000|visibility|delete|fixnum|OnPause|OnBound|Stop|OnScroll|UnBound|outback|outelastic|play|apply|opacity|filter|overflowY|overflowX|createElement|cssFloat|styleFloat|pages|The|nodeType|UL|block|10000px|parseFloat|inbounce|525|cos|cellspacing|keep|word|space|white|join|select|user|moz|text|404040|index|170|2px|relative|medium|auto|Start|MSClassID|97|99|79|layerX|offsetLeft|mousedown|releaseCapture|setCapture|move|target|returnValue|cancelBuble|100000|60000|visible|setAttribute|getAttribute|Terminate|Destroy|Reset|wrong|set|Parameters|number|callee|alpha|ceil|whiteSpace|actual|than|less|numbers|tab|or|continue|TabTimeout|TabEvent|TabID|ContentID|1000|Duration|in|inoutbounce|984375|625|9375|inoutback|inoutelastic|inoutcirc|outcirc|incirc|inoutexpo|outexpo|inexpo|inoutsine|outsine|insine|inoutquint|outquint|inquint|inoutquart|outquart|inquart|inoutcubic|outcubic|incubic|inoutquad|outquad|inquad|scrollLeft|scrollHeight|scrollWidth|click|contextmenu|load|onload|About|onselectstart|align|166px|10px|indent|168px|background|default|arial|u4F53|u5B8B|family|170px|cssText|slice|DIV|keydown|onkeydown|clientWidth|documentElement|3px|17px|valign|isNaN|113|witch|1em|30pt|alterleft|down|up|alterup|altertop|active|AutoStart|opera|indexOf|userAgent|navigator|NextBtnID|PrevBtnID|error|initialization|constructor|com|21cn|zhadan007|333|Cui|Yongxiang|html|script|net|popub|www|http|JS|Scrolling|Uninterrupted|General|Of|Class|110609'.split('|'),0,{}));
