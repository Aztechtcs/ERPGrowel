'use strict';/*! main.js - v1.0.0
* http://admindesigns.com/
* Copyright (c) 2018 Admin Designs;*/var Demo=function(options){var settings={}
var defaults={disableLayout:false,disableTopbar:false,disableNavbar:false,disableSidebar:false,assignActiveSidebar:true,assignActiveBreadcrumb:true,};var breadcrumbs=$('#breadcrumb');var sidebarLeft=$('#sidebar_left');var sidebarMenu=sidebarLeft.find('.sidebar-menu');var scrollerOptions={paneClass:'sidebar-pane',sliderClass:'sidebar-slider',contentClass:'sidebar-content',activeClass:'has-scroller',sliderMaxHeight:600,preventPageScrolling:true}
var runDemoMenus=function(){var urlSlug=window.location.pathname;if(urlSlug.substring(0,1)=='/'){urlSlug=urlSlug.substring(urlSlug.lastIndexOf("/")+1);}
var sidebarSlug=sidebarMenu.find('a[href="'+urlSlug+'"]');if(sidebarSlug.length&&settings.assignActiveSidebar===true){sidebarSlug.parent('li').addClass('active').parents('ul').siblings('.accordion-toggle').addClass('menu-open');}
if(sidebarSlug.length&&settings.assignActiveBreadcrumb===true){var activeCrumb=breadcrumbs.find('.crumb-trail a');activeCrumb.attr('href',sidebarSlug.attr('href')).html(sidebarSlug.text());}}
var runDemoForms=function(){$('.admin-form').on('submit',function(e){e.preventDefault();if(Body.hasClass('timeline-page')||Body.hasClass('admin-validation-page')){return;}
alert('Your form has submitted!');return false;});var fileUpload=$('.fileupload');var previewFile=fileUpload.find('.fileupload-preview');if(fileUpload.length){previewFile.on('click',function(){fileUpload.find('.btn-file > input').click()});}}
var runDemoSourceCode=function(){var bsElement=$(".bs-component");if(bsElement.length){$.ajaxSetup({cache:true});$.getScript("http://admindesigns.com/demos/admin/theme/vendor/plugins/highlight/highlight.pack.js");var modalSource='<div class="modal fade" id="source-modal" tabindex="-1" role="dialog">  '+
'<div class="modal-dialog modal-lg"> '+
'<div class="modal-content"> '+
'<div class="modal-header"> '+
'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> '+
'<h4 class="modal-title" id="myModalLabel">Source Code HTML</h4> '+
'</div> '+
'<div class="modal-body"> '+
'<div class="highlight"> '+
'<pre> '+
'<code class="language-html" data-lang="html"></code> '+
'</pre> '+
'</div> </div> '+
'<div class="modal-footer"> '+
'<button type="button" class="btn btn-primary btn-clipboard">Highlight Source</button> '+
'</div> </div> </div> </div> </div>';$(modalSource).appendTo('body');var sourceModal=$('#source-modal');var codeBtn=$("<div id='source-button' class='btn btn-primary btn-xs'>&lt; &gt;</div>")
codeBtn.on('click',function(){var html=cleanSource($(this).parent().html());var source=sourceModal.find('pre').text(html);source.end().modal();setTimeout(function(){source.each(function(i,block){hljs.highlightBlock(block);});},250);$('.btn-clipboard').on('click',function(){var selection=$(this).parents('.modal-dialog').find('pre').selectText();});$(document).keypress(function(e){if(e.which==99){$('.btn-clipboard').click();}});});bsElement.each(function(i,ele){$(this).append(codeBtn);}).hover(function(){codeBtn.appendTo($(this)).show();},function(){codeBtn.hide();});var cleanSource=function(html){var lines=html.split(/\n/);lines.shift();lines.splice(-1,1);var indentSize=lines[0].length-lines[0].trim().length,re=new RegExp(" {"+indentSize+"}");lines=lines.map(function(line){if(line.match(re)){line=line.substring(indentSize);}
return line;});lines=lines.join("\n");return lines;}
jQuery.fn.selectText=function(){var doc=document,element=this[0],range,selection;if(doc.body.createTextRange){range=document.body.createTextRange();range.moveToElementText(element);range.select();}else if(window.getSelection){selection=window.getSelection();range=document.createRange();range.selectNodeContents(element);selection.removeAllRanges();selection.addRange(range);}};}}
var runDemoSettings=function(){if(settings.disableLayout===true){return;}
var themeSettings=$('#skin-toolbox');if(themeSettings.length){var settingsToggleBtn='<div id="skin-toolbox-btn">'+
'<div role="button" class="btn btn-default btn-gradient dark br0">'+
'<i class="fa fa-gear fa-spin text-danger"></i>'+
'</divn>'+
'</div>';$(settingsToggleBtn).appendTo('body');$('#skin-toolbox-btn').on('click',function(e){setTimeout(function(){$('.settings-dropdown').find('.dropdown-toggle').dropdown('toggle');},50)});var Body=$('body');var Header=$('.navbar');var Branding=Header.children('.navbar-branding');var Logo=Branding.find('img');var Sidebar=$('#sidebar_left');var sidebarMenu=Sidebar.find('.sidebar-menu');var sidebarAuthor=Sidebar.find('.author-widget');var sidebarSearch=Sidebar.find('.search-widget');var Topbar=$('.content-topbar');var Breadcrumbs=$('#breadcrumb');var headerSkins="bg-primary bg-success bg-info bg-warning bg-danger bg-alert bg-system bg-dark bg-light navbar-gradient";var sidebarSkins="sidebar-light light dark";var sidebarMenuOpts="sidebar-menu-material sidebar-menu-border";var breadcrumbStyles="breadcrumb-styled breadcrumb-trail";var settingsObj={'settingsMenu':'open','settingsTab':'#toolbox-header','headerState':'navbar-fixed-top','headerSkin':'navbar-gradient','headerBtnSkin':'navbar-gradient-btns','headerDuoTone':false,'sidebarState':'sidebar-relative','sidebarAlign':'','sidebarSkin':'sidebar-light','sidebarMenu':'sidebar-menu-border','searchSize':'','searchBG':'search-widget-light','authorBG':'author-widget-fill','authorToggle':'','searchToggle':'','topbarStyle':'basic','topbarState':'relative','topbarHidden':'visible','breadcrumbStyle':'breadcrumb-styled',};var themeKey='admin-settings';var themeGet=localStorage.getItem(themeKey);if(themeGet===null){localStorage.setItem(themeKey,JSON.stringify(settingsObj));themeGet=localStorage.getItem(themeKey);}
(function(){var settingsParse=JSON.parse(themeGet);settingsObj=settingsParse;var settingsDropdown=$('.settings-dropdown.dropdown');settingsDropdown.on('shown.bs.dropdown',function(i,e){$(this).addClass('settings-menu-open');settingsObj['settingsMenu']='open';localStorage.setItem(themeKey,JSON.stringify(settingsObj));});settingsDropdown.on('hidden.bs.dropdown',function(i,e){$(this).removeClass('settings-menu-open');settingsObj['settingsMenu']='closed';localStorage.setItem(themeKey,JSON.stringify(settingsObj));});themeSettings.on('click','.nav-pills a',function(i,e){settingsObj['settingsTab']=i.currentTarget.hash;localStorage.setItem(themeKey,JSON.stringify(settingsObj));});if(settingsObj['settingsMenu']){$('#skin-toolbox').find('.nav-pills a[href="'+settingsObj['settingsTab']+'"]').tab('show')}
if(settingsObj['settingsMenu']==='open'){$('.settings-dropdown.dropdown .dropdown-toggle').dropdown('toggle');}
$.each(settingsParse,function(i,e){switch(i){case 'headerSkin':Header.removeClass(headerSkins).addClass(e);Branding.removeClass(headerSkins+' dark');if(e==="bg-light"||e==="navbar-gradient"){Logo.attr('src','assets/img/logos/logo.png');}
else{Logo.attr('src','assets/img/logos/logo_white.png');}
if(settingsObj['headerDuoTone']==true){if(e!='bg-light'&&e!='navbar-gradient'){Branding.addClass(e+' dark');}}
$('#toolbox-header-skin input[value="bg-light"]').prop('checked',false);$('#toolbox-header-skin input[value="'+e+'"]').prop('checked',true);break;case 'headerDuoTone':var activeSkin=settingsObj['headerSkin'];Branding.removeClass(activeSkin+' dark');if(settingsObj['headerDuoTone']==true){if(activeSkin!='bg-light'&&activeSkin!='navbar-gradient'){Branding.addClass(activeSkin+' dark');}
$('#headerDuoTone').prop('checked',true);}
else{$('#headerDuoTone').prop('checked',false);}
break;case "headerBtnSkin":Header.removeClass('navbar-gradient-btns').addClass(e);if(e==='navbar-gradient-btns'){$('#toolbox-header-skin input[value="navbar-gradient-btns"]').prop('checked',true);}else{$('#toolbox-header-skin input[value="navbar-gradient-btns"]').prop('checked',false);}
break;case 'sidebarSkin':Sidebar.removeClass(sidebarSkins).addClass(e);$('#toolbox-sidebar-skin input[value="bg-light"]').prop('checked',false);$('#toolbox-sidebar-skin input[value="'+e+'"]').prop('checked',true);break;case 'sidebarMenu':sidebarMenu.removeClass(sidebarMenuOpts).addClass(e);themeSettings.find('input[name="sidebarMenu"]').prop('checked',false);themeSettings.find('input[value="'+e+'"]').prop('checked',true);break;case 'searchSize':if(e==="search-lg"){sidebarSearch.addClass("search-lg");$('#searchSize').prop('checked',true);}else{sidebarSearch.removeClass("search-lg");$('#searchSize').prop('checked',false);}
break;case 'searchBG':if(e==="search-widget-light"){sidebarSearch.addClass("search-widget-light");$('#searchBG').prop('checked',true);}else{console.log(e);sidebarSearch.removeClass("search-widget-light");$('#searchBG').prop('checked',false);}
break;case 'authorBG':if(e==="author-widget-fill"){sidebarAuthor.addClass("author-widget-fill");$('#authorSize').prop('checked',true);}else{sidebarSearch.removeClass("author-widget-fill");$('#authorSize').prop('checked',false);}
break;case "authorToggle":if(e==="author-widget-hidden"){Body.addClass(e);$('#authorToggle').prop('checked',true);}else{Body.removeClass(e);$('#authorToggle').prop('checked',false);}
break;case "searchToggle":if(e==="search-widget-hidden"){Body.addClass(e);$('#searchToggle').prop('checked',true);}else{Body.removeClass(e);$('#searchToggle').prop('checked',false);}
break;case 'headerState':if(settings.disableNavbar===true){return;}
if(e==="navbar-fixed-top"){Header.addClass('navbar-fixed-top');$('#header-option').prop('checked',true);}else{Header.removeClass('navbar-fixed-top');$('#header-option').prop('checked',false);Sidebar.removeClass('affix');Sidebar.find('.nano').nanoScroller({destroy:true});$('#sidebar-option').prop('checked',false);}
break;case 'sidebarState':if(settings.disableSidebar===true){return;}
if(e==="affix"){Sidebar.addClass('affix');$('#sidebar-option').prop('checked',true);}else{Sidebar.removeClass('affix');Sidebar.find('.nano').nanoScroller({destroy:true});$('#sidebar-option').prop('checked',false);}
break;case 'sidebarAlign':if(e==="sb-top"){Body.addClass('sb-top');$('#sidebar-align').prop('checked',true);}else{Body.removeClass('sb-top');$('#sidebar-align').prop('checked',false);}
break;case 'topbarState':if(settings.disableTopbar===true){return;}
if(settingsObj['headerState']!="navbar-fixed-top"){Topbar.removeClass('affix');$('#topbarState').prop('checked',false).parent('.checkbox-custom').addClass('checkbox-disabled').end().prop('checked',false).attr('disabled',true);settingsObj['topbarState']="relative";localStorage.setItem(themeKey,JSON.stringify(settingsObj));return}
if(e==="affix"){Topbar.addClass('affix');$('#topbarState').prop('checked',true);}
else{Topbar.removeClass('affix');$('#topbarState').prop('checked',false);}
break;case 'topbarStyle':if(settings.disableTopbar===true){return;}
if(e==="fill"){Topbar.addClass('fill');$('#topbarStyle').prop('checked',true);$('#topbarState').prop('checked',true).parent('.checkbox-custom').removeClass('checkbox-disabled').end().attr('disabled',false);}
else{Topbar.removeClass('fill');Topbar.removeClass('affix');$('#topbarState').prop('checked',false).parent('.checkbox-custom').addClass('checkbox-disabled').end().prop('checked',false).attr('disabled',true);settingsObj['topbarState']="relative";localStorage.setItem(themeKey,JSON.stringify(settingsObj));}
break;case 'topbarHidden':if(settings.disableTopbar===true){return;}
if(Topbar.hasClass('hidden')||e==="hidden"){Topbar.addClass('hidden');$('#topbarHidden').prop('checked',true);}
else{Topbar.removeClass('hidden');$('#topbarHidden').prop('checked',false);}
break;case 'breadcrumbStyle':if(settings.disableTopbar===true){return;}
Breadcrumbs.removeClass(breadcrumbStyles).addClass(e);$('#toolbox-topbar-skin input[name="breadcrumbStyle"]').prop('checked',false);$('#toolbox-topbar-skin input[value="'+e+'"]').prop('checked',true);break;}});})();$('#toolbox-header-skin input').on('click',function(){var This=$(this);var Val=This.val();var ID=This.attr('id');var activeSkin=settingsObj['headerSkin'];if(Val==="navbar-gradient-btns"){if($('#headerGradientBtns').prop('checked')){Header.addClass(Val);settingsObj['headerBtnSkin']=Val;}
else{Header.removeClass("navbar-gradient-btns")
settingsObj['headerBtnSkin']="";}}
else if(ID==="headerDuoTone"){Branding.removeClass(headerSkins+' dark');if($('#headerDuoTone').prop('checked')){if(activeSkin!='bg-light'&&activeSkin!='navbar-gradient'){Branding.addClass(activeSkin+' dark');}
settingsObj['headerDuoTone']=true;}
else{settingsObj['headerDuoTone']=false;}}
else{Header.removeClass(headerSkins).addClass(Val);Branding.removeClass(headerSkins+' dark');if(Val==='bg-light'||Val==='navbar-gradient'){Logo.attr('src','assets/img/logos/logo.png');}
else{Logo.attr('src','assets/img/logos/logo_white.png');}
if(settingsObj['headerDuoTone']==true){if(Val!='bg-light'&&Val!='navbar-gradient'){Branding.addClass(Val+' dark');}}
settingsObj['headerSkin']=Val;}
localStorage.setItem(themeKey,JSON.stringify(settingsObj));});$('#toolbox-sidebar-skin input').on('click',function(){var Val=$(this).val();var Name=$(this).attr('name');if(Name==="sidebarMenu"){sidebarMenu.removeClass(sidebarMenuOpts).addClass(Val);themeSettings.find('input[name="sidebarMenu"]').prop('checked',false);themeSettings.find('input[value="'+Val+'"]').prop('checked',true);settingsObj['sidebarMenu']=Val;}
else if(Val==="search-lg"){if($('#searchSize').prop('checked')){sidebarSearch.addClass(Val);settingsObj['searchSize']=Val;}
else{sidebarSearch.removeClass("search-lg")
settingsObj['searchSize']="";}}
else if(Val==="search-widget-light"){if($('#searchBG').prop('checked')){sidebarSearch.addClass(Val);settingsObj['searchBG']=Val;}
else{sidebarSearch.removeClass("search-widget-light")
settingsObj['searchBG']="";}}
else if(Val==="author-widget-fill"){if($('#authorBG').prop('checked')){sidebarSearch.addClass(Val);settingsObj['authorBG']=Val;}
else{sidebarSearch.removeClass("author-widget-fill")
settingsObj['authorBG']="";}}
else{Sidebar.removeClass(sidebarSkins).addClass(Val);settingsObj['sidebarSkin']=Val;}
localStorage.setItem(themeKey,JSON.stringify(settingsObj));});$('#toolbox-topbar-skin input').on('click',function(){var Val=$(this).val();var Name=$(this).attr('name');if(Name==="breadcrumbStyle"){Breadcrumbs.removeClass(breadcrumbStyles).addClass(Val);themeSettings.find('input[name="breadcrumbStyle"]').prop('checked',false);themeSettings.find('input[value="'+Val+'"]').prop('checked',true);settingsObj['breadcrumbStyle']=Val;}
localStorage.setItem(themeKey,JSON.stringify(settingsObj));});$('#sidebar-align').on('click',function(){var sidebarAlign="";if(Body.hasClass('sb-top')){Body.removeClass('sb-top');sidebarAlign="";}else{Body.removeClass('sb-top');sidebarAlign="sb-top";}
settingsObj['sidebarAlign']=sidebarAlign;localStorage.setItem(themeKey,JSON.stringify(settingsObj));});$('#header-option').on('click',function(){var headerState="navbar-fixed-top";var Nano=Sidebar;if(Header.hasClass('navbar-fixed-top')){Header.removeClass('navbar-fixed-top');headerState="relative";Sidebar.removeClass('affix');Sidebar.find('.nano').nanoScroller({destroy:true});$('#sidebar-option').prop('checked',false);$('#sidebar-option').parent('.checkbox-custom').addClass('checkbox-disabled').end().prop('checked',false).attr('disabled',true);settingsObj['sidebarState']="";localStorage.setItem(themeKey,JSON.stringify(settingsObj));Topbar.removeClass('affix');$('#topbarState').parent('.checkbox-custom').addClass('checkbox-disabled').end().prop('checked',false).attr('disabled',true);settingsObj['topbarState']="";localStorage.setItem(themeKey,JSON.stringify(settingsObj));}else{Header.addClass('navbar-fixed-top');headerState="navbar-fixed-top";$('#sidebar-option').parent('.checkbox-custom').removeClass('checkbox-disabled').end().attr('disabled',false);$('#breadcrumb-option').parent('.checkbox-custom').removeClass('checkbox-disabled').end().attr('disabled',false);if(settingsObj['topbarStyle']==='fill'){$('#topbarState').parent('.checkbox-custom').removeClass('checkbox-disabled').end().attr('disabled',false);}}
settingsObj['headerState']=headerState;localStorage.setItem(themeKey,JSON.stringify(settingsObj));});$('#sidebar-option').on('click',function(){var sidebarState="";var Nano=Sidebar;if(Nano.hasClass('affix')){Nano.nanoScroller({destroy:true});Nano.find('.sidebar-content').attr('style','');Nano.removeClass('affix');sidebarState="static";}
else{var scrollerOptions={paneClass:'sidebar-pane',sliderClass:'sidebar-slider',contentClass:'sidebar-content',activeClass:'has-scroller',preventPageScrolling:true}
Nano.addClass('affix');if(Nano.length){Nano.nanoScroller(scrollerOptions);}
sidebarState="affix";}
settingsObj['sidebarState']=sidebarState;localStorage.setItem(themeKey,JSON.stringify(settingsObj));});$('#topbarStyle').on('click',function(){var topbarStyle="";if(Topbar.hasClass('fill')){Topbar.removeClass('fill');topbarStyle="basic";Topbar.removeClass('affix');$('#topbarState').prop('checked',false);$('#topbarState').parent('.checkbox-custom').addClass('checkbox-disabled').end().prop('checked',false).attr('disabled',true);settingsObj['topbarState']="relative";localStorage.setItem(themeKey,JSON.stringify(settingsObj));}
else{Topbar.addClass('fill');topbarStyle="fill";if(settingsObj['headerState']==='navbar-fixed-top'){$('#topbarState').parent('.checkbox-custom').removeClass('checkbox-disabled').end().attr('disabled',false);}}
settingsObj['topbarStyle']=topbarStyle;localStorage.setItem(themeKey,JSON.stringify(settingsObj));});$('#topbarState').on('click',function(){var topbarState="";if(Topbar.hasClass('affix')){Topbar.removeClass('affix');topbarState="relative";}else{Topbar.addClass('affix');topbarState="affix";}
settingsObj['topbarState']=topbarState;localStorage.setItem(themeKey,JSON.stringify(settingsObj));});$('#topbarHidden').on('click',function(){var topbarHidden="";if(Topbar.hasClass('hidden')){Topbar.removeClass('hidden');topbarHidden="";}else{Topbar.addClass('hidden');topbarHidden="hidden";}
settingsObj['topbarHidden']=topbarHidden;localStorage.setItem(themeKey,JSON.stringify(settingsObj));});$('#authorToggle').on('click',function(){var Val=$(this).val();if(Val==="author-widget-hidden"){if($('#authorToggle').prop('checked')){Body.addClass(Val);settingsObj['authorToggle']=Val;}
else{Body.removeClass("author-widget-hidden");settingsObj['authorToggle']="";}}
localStorage.setItem(themeKey,JSON.stringify(settingsObj));});$('#searchToggle').on('click',function(){var Val=$(this).val();if(Val==="search-widget-hidden"){if($('#searchToggle').prop('checked')){Body.addClass(Val);settingsObj['searchToggle']=Val;}
else{Body.removeClass("search-widget-hidden");settingsObj['searchToggle']="";}}
localStorage.setItem(themeKey,JSON.stringify(settingsObj));});bootbox.setDefaults({backdrop:true,onEscape:true});$("#clearLocalStorage").on('click',function(){if(bootbox.confirm){bootbox.confirm("Are You Sure?!",function(e){if(e){setTimeout(function(){localStorage.clear();location.reload();},200);}else{return;}});}});}}
var runDemoPreCache=function(){preload(['assets/img/logos/logo_white.png',]);function preload(arrayOfImages){$(arrayOfImages).each(function(){$('<img/>')[0].src=this;});}}
var runFullscreenDemo=function(){var selector=$('html');var ua=window.navigator.userAgent;var old_ie=ua.indexOf('MSIE ');var new_ie=ua.indexOf('Trident/');if((old_ie>-1)||(new_ie>-1)){selector=$('body');}
var screenCheck=$.fullscreen.isNativelySupported();$('.request-fullscreen').on('click',function(){if(screenCheck){if($.fullscreen.isFullScreen()){$.fullscreen.exit();}
else{selector.fullscreen({overflow:'auto'});}}
else{alert('Your browser does not support fullscreen mode.')}});}
return{init:function(options){settings=$.extend({},defaults,options);runDemoPreCache();runDemoMenus();runDemoForms();runDemoSourceCode();runDemoSettings();runFullscreenDemo();}}}();