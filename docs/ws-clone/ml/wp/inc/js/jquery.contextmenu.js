(function(jQuery){var menu,shadow,trigger,content,hash,currentTarget;var defaults={menuStyle:{listStyle:'none',padding:'1px',margin:'0px',backgroundColor:'#fff',border:'1px solid #999',width:'160px'},itemStyle:{margin:'0px',fontFamily:'Tahoma, Arial, Helvetica, sans-serif',fontSize:'11px',color:'#000',display:'block',cursor:'default',padding:'3px',border:'1px solid #fff',backgroundColor:'transparent'},itemHoverStyle:{border:'1px solid #000'},eventPosX:'pageX',eventPosY:'pageY',shadow:true,onContextMenu:null,onShowMenu:null};jQuery.fn.contextMenu=function(id,options){if(!menu){menu=jQuery('<div id="jqContextMenu"></div>').hide().css({position:'absolute',zIndex:'500'}).appendTo('body').bind('click',function(e){e.stopPropagation()})}if(!shadow){shadow=jQuery('<div></div>').css({backgroundColor:'#000',position:'absolute',opacity:0.2,zIndex:499}).appendTo('body').hide()}hash=hash||[];hash.push({id:id,menuStyle:jQuery.extend({},defaults.menuStyle,options.menuStyle||{}),itemStyle:jQuery.extend({},defaults.itemStyle,options.itemStyle||{}),itemHoverStyle:jQuery.extend({},defaults.itemHoverStyle,options.itemHoverStyle||{}),bindings:options.bindings||{},shadow:options.shadow||options.shadow===false?options.shadow:defaults.shadow,onContextMenu:options.onContextMenu||defaults.onContextMenu,onShowMenu:options.onShowMenu||defaults.onShowMenu,eventPosX:options.eventPosX||defaults.eventPosX,eventPosY:options.eventPosY||defaults.eventPosY});var index=hash.length-1;jQuery(this).bind('contextmenu',function(e){var bShowContext=(!!hash[index].onContextMenu)?hash[index].onContextMenu(e):true;if(bShowContext)display(index,this,e,options);return false});return this};function display(index,trigger,e,options){var cur=hash[index];content=jQuery('#'+cur.id).find('ul:first').clone(true);content.css(cur.menuStyle).find('li').css(cur.itemStyle).hover(function(){jQuery(this).css(cur.itemHoverStyle)},function(){jQuery(this).css(cur.itemStyle)}).find('img').css({verticalAlign:'middle',paddingRight:'2px'});menu.html(content);if(!!cur.onShowMenu)menu=cur.onShowMenu(e,menu);jQuery.each(cur.bindings,function(id,func){jQuery('#'+id,menu).bind('click',function(e){hide();func(trigger,currentTarget)})});menu.css({'left':e[cur.eventPosX],'top':e[cur.eventPosY]}).show();if(cur.shadow)shadow.css({width:menu.width(),height:menu.height(),left:e.pageX+2,top:e.pageY+2}).show();jQuery(document).one('click',hide)}function hide(){menu.hide();shadow.hide()}jQuery.contextMenu={defaults:function(userDefaults){jQuery.each(userDefaults,function(i,val){if(typeof val=='object'&&defaults[i]){jQuery.extend(defaults[i],val)}else defaults[i]=val})}}})(jQuery);jQuery(function(){jQuery('div.contextMenu').hide()});