function getuhchatCookie(c_name){var c_value=document.cookie;var c_start=c_value.indexOf(" "+c_name + "=");if(c_start==-1){c_start=c_value.indexOf(c_name+"=");}if(c_start==-1){c_value=null;}else{c_start=c_value.indexOf("=", c_start)+1;var c_end=c_value.indexOf(";",c_start);if(c_end==-1){c_end=c_value.length;}c_value=unescape(c_value.substring(c_start,c_end));} return c_value;}function setuhchatCookie(c_name,value,exdays){var exdate=new Date();exdate.setDate(exdate.getDate()+exdays);var c_value=escape(value)+((exdays==null)?"":";expires="+exdate.toUTCString()+";path=/");document.cookie=c_name+"="+c_value;} var vitridau=-320; if(getuhchatCookie("uhchatrelock")=="0"){vitridau=0;}else{if(getuhchatCookie("uhchatrelock")!="1"){setuhchatCookie("uhchatrelock","0",1);setTimeout('document.getElementById("uhchatboz").style.bottom="0px";',5000);}} function uhchatClick(){if(getuhchatCookie("uhchatrelock")=="0"){document.getElementById("uhchatboz").style.bottom="-320px";setuhchatCookie("uhchatrelock","1",1);}else{document.getElementById("uhchatboz").style.bottom="0px";setuhchatCookie("uhchatrelock","0",1);}} if(typeof(uhchatduplicate)=="undefined"){document.write('<style>#uhchatboz {width: 320px;height: 305px;display: block;background: url("https://uhchat.net/themes/chat-11.png") no-repeat;text-align: center;padding-top: 45px;position: fixed;bottom:'+vitridau+'px;right: 20px;z-index: 99999999999999; box-sizing: content-box;} #uhchatboz iframe{border:none;width:304px !important;height:305px !important;margin:0px !important;position:relative !important;display: inline !important;} #uhchatboz:hover {cursor: pointer;} @media screen and (max-width: 320px){#uhchatboz{right: 0px !important;}} #panel_chat_vatgia{display:none !important;} .zopim{display:none !important;} .zchat{display:none !important;} .copyrightin{display:none !important;} #tawkchat-minified-box{display:none !important;} .embed-responsive{padding-bottom:100% !important;} .sbzoff{display:none !important;} .sbzon{display:none !important;} </style><div id="uhchatboz" onClick="uhchatClick()"><iframe id="uhchatframe" src="https://uhchat.net/chat/?f=45f902&title='+encodeURIComponent(document.title)+'&parent='+encodeURIComponent(top.location)+'&ref='+encodeURIComponent(document.referrer)+'" width="304px" height="305px" frameborder="0px" style="padding:0px;" allow="autoplay"></iframe></div>');} var uhchatduplicate=true; 