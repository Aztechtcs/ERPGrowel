<html>
    <head>
<?php /*
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="AdminDesigns">
<meta name="keywords" content="Classic Admin HTML5 Bootstrap 3 Admin Template UI Theme">
<meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
<title>ClassicAdmin - A Responsive HTML5 Admin UI Framework</title>
*/ ?>
<link rel="shortcut icon" href="<?php echo site_url('theme/');?>assets/img/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('theme/');?>vendor/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('theme/');?>assets/admin-tools/admin-forms/css/admin-forms.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('theme/');?>assets/skin/default_skin/css/theme.css">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="dashboard-page sb-r-c">

<div id="main">

<header class="navbar navbar-lg navbar-fixed-top navbar-gradient navbar-gradient-btns">

<div class="navbar-branding">
<a class="navbar-brand" href="dashboard.html">
<img src="<?php echo site_url('theme/');?>assets/img/logos/logo.png" class="img-responsive-disabled" height="32" width="32" alt="logo">
<b>Classic</b>Admin
</a>
<a class="menu-toggle-btn" data-menu-toggle="sidebar_left" href="#">
<i class="ad ad-lines"></i>
</a>
</div>

<ul class="nav navbar-nav navbar-left">
<li class="navbar-link dropdown dropdown-flush">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">English
<span class="flag-xs flag-united-states ml5"></span>
<span class="caret caret-tp"></span>
</a>
<ul class="dropdown-menu list-divide-items list-text-light animated animated-shorter flipInX pv5" role="menu">
<li>
<a href="javascript:void(0);">
<span class="flag-sm flag-france mr10"></span> Français </a>
</li>
<li>
<a href="javascript:void(0);">
<span class="flag-sm flag-turkey mr10"></span> Türkiye </a>
</li>
<li>
<a href="javascript:void(0);">
<span class="flag-sm flag-india mr10"></span> India </a>
</li>
<li>
<a href="javascript:void(0);">
<span class="flag-sm flag-germany mr10"></span> Deutsch </a>
</li>
<li>
<a href="javascript:void(0);">
<span class="flag-sm flag-spain mr10"></span> Español </a>
</li>
</ul>
</li>
<li class="navbar-link hidden-xs">
<a class="request-fullscreen toggle-active" href="#">
<span class="ad ad-screen-full fs19"></span>
</a>
</li>
</ul>

 <form class="navbar-form navbar-left navbar-search hidden" role="search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search..." value="Search...">
</div>
</form>

<ul class="nav navbar-nav navbar-right">
<li class="navbar-link hidden-xs hidden-sm">
<div class="navbar-btn btn-group">
<button data-toggle="dropdown" class="topbar-menu-toggle btn btn-sm dropdown-toggle">
<span class="fa fa-level-down fs16 va-m"></span>
</button>
</div>
</li>
<li class="navbar-link hidden-xs dropdown settings-dropdown">
<div class="navbar-btn btn-group">
<button data-toggle="dropdown" class="btn btn-sm dropdown-toggle" aria-expanded="false">
<span class="fa fa-gear fs16 va-m"></span>
</button>
<div class="dropdown-menu dropdown-persist animated animated-shorter fadeIn" role="menu">
<div class="panel" id="skin-toolbox">
<div class="panel-tray">
<div class="panel-tray-left">
<ul class="nav nav-stacked nav-pills" role="tablist">
<li class="active">
<a href="#toolbox-header" role="tab" data-toggle="pill">Navbar</a>
</li>
<li>
<a href="#toolbox-sidebar" role="tab" data-toggle="pill">Sidebar</a>
</li>
<li>
<a href="#toolbox-topbar" role="tab" data-toggle="pill">Topbar</a>
</li>
<li>
<a href="#toolbox-settings" role="tab" data-toggle="pill">Misc</a>
</li>
</ul>
<div class="panel-footer">
<a href="#" id="clearLocalStorage" class="btn btn-default btn-sm btn-block pv8 fs13">Clear Settings</a>
</div>
</div>
<div class="panel-tray-right">
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="toolbox-header">
<form id="toolbox-header-skin">
<h4 class="mtn mb15">Header Skins</h4>
<div class="skin-toolbox-swatches clearfix">
<div class="checkbox-custom checkbox-disabled fill w300">
<input type="checkbox" name="headerBtnSkin" id="headerGradientBtns" value="navbar-gradient-btns">
<label for="headerGradientBtns">Gradient Buttons</label>
</div>
<div class="checkbox-custom checkbox-disabled fill w300">
<input type="checkbox" name="headerDuoTone" id="headerDuoTone" value="false">
<label for="headerDuoTone">Two Tone Nav -
 <span class="text-muted">Disabled on Light BG</span>
</label>
</div>
</div>
<hr class="mt10 mb15 dotted">
<div class="skin-toolbox-swatches">
<div class="checkbox-custom checkbox-disabled">
<input type="radio" name="headerSkin" id="headerSkin1" value="bg-light" checked="">
<label for="headerSkin1">Light</label>
</div>
<div class="checkbox-custom checkbox-disabled fill">
<input type="radio" name="headerSkin" id="headerSkin2" value="navbar-gradient">
<label for="headerSkin2">Gradient</label>
</div>
<div class="checkbox-custom fill checkbox-info">
<input type="radio" name="headerSkin" id="headerSkin4" value="bg-info">
<label for="headerSkin4">Info</label>
</div>
<div class="checkbox-custom fill checkbox-warning">
<input type="radio" name="headerSkin" id="headerSkin6" value="bg-warning">
<label for="headerSkin6">Warning</label>
</div>
<div class="checkbox-custom fill checkbox-primary">
<input type="radio" name="headerSkin" id="headerSkin3" value="bg-primary">
<label for="headerSkin3">Primary</label>
</div>
<div class="checkbox-custom fill checkbox-danger">
<input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">
<label for="headerSkin5">Danger</label>
</div>
<div class="checkbox-custom fill checkbox-system">
<input type="radio" name="headerSkin" id="headerSkin9" value="bg-system">
<label for="headerSkin9">System</label>
</div>
<div class="checkbox-custom fill checkbox-alert">
<input type="radio" name="headerSkin" id="headerSkin7" value="bg-alert">
<label for="headerSkin7">Alert</label>
</div>
<div class="checkbox-custom fill checkbox-success">
<input type="radio" name="headerSkin" id="headerSkin8" value="bg-success">
<label for="headerSkin8">Success</label>
</div>
<div class="checkbox-custom checkbox-default fill">
<input type="radio" name="headerSkin" id="headerSkin10" value="bg-dark">
<label for="headerSkin10">Dark</label>
</div>
</div>
</form>
</div>
<div role="tabpanel" class="tab-pane" id="toolbox-sidebar">
<form id="toolbox-sidebar-skin">
<div class="skin-toolbox-swatches">
<h4 class="mtn mb15">Sidebar Skins</h4>
<div class="form-group clearfix">
<div class="checkbox-custom fill checkbox-disabled">
<input type="radio" data-target="sidebarSkin" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
<label for="sidebarSkin1">Light</label>
</div>
<div class="checkbox-custom fill checkbox-light">
<input type="radio" data-target="sidebarSkin" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">
<label for="sidebarSkin2">Lighter</label>
</div>
<div class="checkbox-custom fill">
<input type="radio" data-target="sidebarSkin" name="sidebarSkin" checked="" id="sidebarSkin3" value="sidebar-dark">
<label for="sidebarSkin3">Dark</label>
</div>
</div>
<hr class="mt15 mb20 dot">
<h4 class="mtn mb15">Sidebar Misc</h4>
<div class="form-group clearfix">
<div class="checkbox-custom fill checkbox-light w300">
<input type="checkbox" data-target="searchSize" name="searchSize" id="searchSize" value="search-lg">
<label for="searchSize">Search Size</label>
</div>
<div class="checkbox-custom fill checkbox-light w300">
<input type="checkbox" data-target="searchBG" name="searchBG" id="searchBG" value="search-widget-light">
<label for="searchBG">Search Background</label>
</div>
</div>
<div class="form-group clearfix">
<div class="radio-custom fill w300">
<input type="radio" data-target="sidebarBorder" name="sidebarMenu" id="sidebarBorder" value="sidebar-menu-border">
<label for="sidebarBorder">Bordered Menu</label>
</div>
<div class="radio-custom fill w300">
<input type="radio" data-target="sidebarMaterial" name="sidebarMenu" id="sidebarMaterial" value="sidebar-menu-material">
<label for="sidebarMaterial">Pill Styled Menu</label>
</div>
</div>
</div>
</form>
</div>
<div role="tabpanel" class="tab-pane" id="toolbox-topbar">
<form id="toolbox-topbar-skin">
<h4 class="mtn mb15 mtn">Breadcrumb Styles</h4>
<div class="radio-custom fill">
<input type="radio" data-target="breadcrumbStyle" name="breadcrumbStyle" id="breadcrumbStyled" value="breadcrumb-styled">
<label for="breadcrumbStyled">Styled Breadcrumbs</label>
</div>
<div class="radio-custom fill">
<input type="radio" data-target="breadcrumbStyle" name="breadcrumbStyle" id="breadcrumbTrail" value="breadcrumb-trail">
<label for="breadcrumbTrail">Basic Breadcrumbs</label>
</div>
<hr class="mt15 mb20 dot">
<h4 class="mtn mb15 mtn">Topbar Options</h4>
<div class="checkbox-custom fill">
<input type="checkbox" data-target="topbarStyle" name="topbarStyle" id="topbarStyle" value="fill">
<label for="topbarStyle">Filled Topbar</label>
</div>
<div class="checkbox-custom fill checkbox-disabled">
<input type="checkbox" data-target="topbarState" name="topbarState" id="topbarState" value="affix" disabled="disabled">
<label for="topbarState">Fixed Topbar</label>
</div>
<div class="checkbox-custom fill">
<input type="checkbox" data-target="topbarHidden" name="topbarHidden" id="topbarHidden" value="topbar-hidden">
<label for="topbarHidden">Hidden Topbar</label>
</div>
</form>
</div>
<div role="tabpanel" class="tab-pane" id="toolbox-settings">
<form id="toolbox-settings-misc">
<h4 class="mtn mb15 mtn">Layout Options</h4>
 <div class="checkbox-custom fill">
<input data-target="headerState" type="checkbox" checked="" id="header-option">
<label for="header-option">Fixed Navbar</label>
</div>
<div class="checkbox-custom fill">
<input data-target="sidebarState" type="checkbox" checked="" id="sidebar-option">
<label for="sidebar-option">Fixed Sidebar</label>
</div>
<div class="checkbox-custom fill checkbox-light w300">
<input type="checkbox" data-target="authorToggle" name="authorToggle" id="authorToggle" value="author-widget-hidden">
<label for="authorToggle">Toggle Author Widget</label>
</div>
<div class="checkbox-custom fill checkbox-light w300">
<input type="checkbox" data-target="searchToggle" name="searchToggle" id="searchToggle" value="search-widget-hidden">
<label for="searchToggle">Toggle Search Widget</label>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="navbar-link dropdown">
<div class="navbar-btn btn-group">
<button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
<span class="fa fa-bell-o fs14 va-m"></span>
<span class="badge badge-danger">2</span>
</button>
<div class="dropdown-menu dropdown-persist animated animated-shorter fadeIn" role="menu">
<div class="panel panel-inverse mbn">
<div class="panel-menu">
<span class="panel-icon">
<i class="fa fa-clock-o"></i>
</span>
<span class="panel-title fw600"> Recent Activity</span>
<button class="btn btn-default light btn-xs ph10 pull-right" type="button">
<i class="fa fa-refresh"></i>
</button>
</div>
<div class="panel-scroller scroller-overlay bg-light dark">
<ol class="timeline-list timeline-item-hover">
<li class="timeline-item new-item">
<div class="timeline-icon bg-dark light">
<span class="fa fa-tags"></span>
</div>
<div class="timeline-desc">
<a class="fw600" href="#">Michael</a> Added to his store:
<a href="#">Ipod</a>
</div>
<div class="timeline-date">1:25am</div>
</li>
<li class="timeline-item new-item">
<div class="timeline-icon bg-dark light">
<span class="fa fa-tags"></span>
</div>
<div class="timeline-desc">
<a class="fw600 text-dark" href="#">Sara</a> Added his store:
<a href="#">Notebook</a>
</div>
<div class="timeline-date">3:05am</div>
</li>
<li class="timeline-item">
<div class="timeline-icon bg-success">
<span class="fa fa-usd"></span>
</div>
<div class="timeline-desc">
<a class="fw600" href="#">Admin</a> created invoice for:
<a href="#">Software</a>
</div>
<div class="timeline-date">4:15am</div>
</li>
<li class="timeline-item">
<div class="timeline-icon bg-success">
<span class="fa fa-usd"></span>
</div>
<div class="timeline-desc">
<a class="fw600" href="#">Admin</a> created invoice for:
<a href="#">Apple</a>
</div>
<div class="timeline-date">7:45am</div>
</li>
<li class="timeline-item">
<div class="timeline-icon bg-success">
<span class="fa fa-usd"></span>
</div>
<div class="timeline-desc">
<a class="fw600" href="#">Admin</a> created invoice for:
<a href="#">Software</a>
</div>
<div class="timeline-date">4:15am</div>
</li>
<li class="timeline-item">
<div class="timeline-icon bg-success">
<span class="fa fa-usd"></span>
</div>
<div class="timeline-desc">
<a class="fw600" href="#">Admin</a> created invoice for:
<a href="#">Apple</a>
</div>
<div class="timeline-date">7:45am</div>
</li>
<li class="timeline-item">
<div class="timeline-icon bg-dark light">
<span class="fa fa-tags"></span>
</div>
<div class="timeline-desc">
<a class="fw600" href="#">Michael</a> Added his store:
 <a href="#">Ipod</a>
</div>
<div class="timeline-date">8:25am</div>
</li>
<li class="timeline-item">
<div class="timeline-icon bg-system">
<span class="fa fa-fire"></span>
</div>
<div class="timeline-desc">
<a class="fw600" href="#">Admin</a> created invoice for:
<a href="#">Software</a>
</div>
<div class="timeline-date">4:15am</div>
</li>
<li class="timeline-item">
<div class="timeline-icon bg-dark light">
<span class="fa fa-tags"></span>
</div>
<div class="timeline-desc">
<a class="fw600" href="#">Sara</a> Added to his store:
<a href="#">Notebook</a>
</div>
<div class="timeline-date">3:05am</div>
</li>
</ol>
</div>
<div class="panel-footer text-center">
<a href="#" class="link-unstyled"> View All </a>
</div>
</div>
</div>
</div>
</li>
<li class="navbar-link dropdown">
<div class="navbar-btn btn-group">
<button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
<span class="ad ad-radio-tower fs14 va-m"></span>
<span class="badge">5</span>
</button>
<div class="dropdown-menu dropdown-persist animated animated-shorter fadeIn" role="menu">
<div class="panel panel-inverse mbn">
<div class="panel-menu">
<div class="btn-group btn-group-justified btn-group-nav" role="group" aria-label="menu nav">
<div class="btn-group" role="group">
<button data-target="#nav-tab1" class="btn btn-default btn-gradient active" data-toggle="tab" type="button">Messages</button>
</div>
<div class="btn-group" role="group">
<button data-target="#nav-tab2" class="btn btn-default btn-gradient br-l-n br-r-n" data-toggle="tab" type="button">Notifications</button>
</div>
<div class="btn-group" role="group">
<button data-target="#nav-tab3" class="btn btn-default btn-gradient" data-toggle="tab" type="button">Projects</button>
</div>
</div>
</div>
<div class="panel-scroller bg-light dark">
<div class="tab-content br-n pn">
<div id="nav-tab1" class="tab-pane chat-widget-alt active" role="tabpanel">
 <div class="media media-status-avatar media-online">
<div class="media-left">
<a href="#">
<img class="media-object" alt="author" src="<?php echo site_url('theme/');?>assets/img/avatars/3.jpg">
</a>
</div>
<div class="media-body">
<span class="media-status online"></span>
<h5 class="media-heading">
<a href="#">Todd Nelson</a>
<span class="media-timestamp">4 hours ago</span>
</h5>
<p>Deletory agree starch ness stink woodsd is credn erite gonos phere wash brewster....</p>
</div>
</div>
<div class="media media-status-avatar media-online">
<div class="media-left">
<a href="#">
<img class="media-object" alt="author" src="assets/img/avatars/2.jpg">
</a>
</div>
<div class="media-body">
<span class="media-status online"></span>
<h5 class="media-heading">
<a href="#">Sarah Turtle</a>
<span class="media-timestamp">4 hours ago</span>
</h5>
<p>Deletory agree starch ness stink woodsd is credn erite gonos phere wash brewster....</p>
</div>
</div>
<div class="media media-status-avatar media-online">
<div class="media-left">
<a href="#">
<img class="media-object" alt="author" src="assets/img/avatars/1.jpg">
</a>
</div>
<div class="media-body">
<span class="media-status online"></span>
<h5 class="media-heading">
<a href="#">Dan Rubio</a>
<span class="media-timestamp">4 hours ago</span>
</h5>
<p>Deletory agree starch ness stink woodsd is credn erite gonos phere wash brewster....</p>
</div>
</div>
<div class="media media-status-avatar media-online">
<div class="media-left">
<a href="#">
<img class="media-object" alt="author" src="assets/img/avatars/2.jpg">
 </a>
</div>
<div class="media-body">
<span class="media-status away"></span>
<h5 class="media-heading">
<a href="#">Issac Jones</a>
<span class="media-timestamp">4 hours ago</span>
</h5>
<p>Deletory agree starch ness stink woodsd is credn erite gonos phere wash brewster....</p>
</div>
</div>
<div class="media media-status-avatar">
<div class="media-left">
<a href="#">
<img class="media-object" alt="author" src="assets/img/avatars/4.jpg">
</a>
</div>
<div class="media-body">
<h5 class="media-heading"><a href="#">Annemarie Gehl</a></h5>
<p>Deletory agree starch ness stink woodsd is credn erite gonos phere wash brewster....</p>
<div class="media-timestamp">
<span class="fa fa-calendar-minus-o"></span>2 hours ago</div>
</div>
</div>
<div class="media media-status-avatar">
<div class="media-left">
<a href="#">
<img class="media-object" alt="author" src="assets/img/avatars/3.jpg">
</a>
</div>
<div class="media-body">
<span class="media-status online"></span>
<h5 class="media-heading"><a href="#">Vikki Cones</a></h5>
<p>Deletory agree starch ness stink woodsd is credn erite gonos phere wash brewster....</p>
<div class="media-timestamp">
<span class="fa fa-calendar-minus-o"></span>7 hours ago</div>
</div>
</div>
<div class="media media-status-avatar media-away">
<div class="media-left">
<a href="#">
<img class="media-object" alt="author" src="assets/img/avatars/4.jpg">
</a>
</div>
<div class="media-body">
<span class="media-status online"></span>
<h5 class="media-heading"><a href="#">Latarsha Duggins</a></h5>
<p>Deletory agree starch ness stink woodsd is credn erite gonos phere wash brewster....</p>
<div class="media-timestamp">
<span class="fa fa-calendar-minus-o"></span>8 hours ago</div>
</div>
</div>
<div class="media media-status-avatar media-dnd">
<div class="media-left">
<a href="#">
<img class="media-object" alt="author" src="assets/img/avatars/5.jpg">
</a>
</div>
<div class="media-body">
<span class="media-status online"></span>
<h5 class="media-heading"><a href="#">Sandie Bynum</a></h5>
<p>Deletory agree starch ness stink woodsd is credn erite gonos phere wash brewster....</p>
<div class="media-timestamp">
<span class="fa fa-calendar-minus-o"></span>1 day ago</div>
</div>
</div>
<div class="media media-status-avatar">
<div class="media-left">
<a href="#">
<img class="media-object" alt="author" src="assets/img/avatars/6.jpg">
</a>
</div>
<div class="media-body">
<span class="media-status online"></span>
<h5 class="media-heading"><a href="#">Felecia Mccullors</a></h5>
<p>Deletory agree starch ness stink woodsd is credn erite gonos phere wash brewster....</p>
<div class="media-timestamp">
<span class="fa fa-calendar-minus-o"></span>3 days ago</div>
</div>
</div>
</div>
<div id="nav-tab2" class="tab-pane alerts-widget p12" role="tabpanel">
<div class="media">
<a class="media-left" href="#">
<span class="glyphicon glyphicon-user"></span>
</a>
<div class="media-body">
<p><b>Thomas</b> has started following you</p>
<div class="media-timestamp">3 hours ago</div>
</div>
<div class="media-right hidden">
<div class="media-response"> Approve?</div>
<div class="btn-group">
<button type="button" class="btn btn-default btn-xs light">
<i class="fa fa-check text-success"></i>
</button>
<button type="button" class="btn btn-default btn-xs light">
<i class="fa fa-remove"></i>
</button>
</div>
</div>
</div>
<div class="media">
<a class="media-left" href="#">
<span class="glyphicon glyphicon-bell bg-warning"></span>
</a>
<div class="media-body">
<p><b>Ashlee</b> has marked you as a coworker</p>
<div class="media-timestamp">4 hours ago</div>
</div>
</div>
<div class="media">
<a class="media-left" href="#">
<span class="glyphicon glyphicon-pencil bg-danger"></span>
</a>
<div class="media-body">
<p><b>Angelica</b> added you to friends</p>
<div class="media-timestamp">7 hours ago</div>
</div>
</div>
<div class="media">
<a class="media-left" href="#">
<span class="glyphicon glyphicon-bookmark bg-info"></span>
</a>
<div class="media-body">
<p><b>Isreal</b> has wrote on your wall</p>
<div class="media-timestamp">11 hours ago</div>
</div>
</div>
<div class="media">
<a class="media-left" href="#">
<span class="glyphicon glyphicon-fire bg-primary"></span>
</a>
<div class="media-body">
<p><b>Bernadine</b> has started following you</p>
<div class="media-timestamp">1 day ago</div>
</div>
</div>
<div class="media">
<a class="media-left" href="#">
<span class="glyphicon glyphicon-star bg-success"></span>
</a>
<div class="media-body">
<p><b>Denny</b> marked you as project leader</p>
<div class="media-timestamp">1 day ago</div>
</div>
</div>
<div class="media">
<a class="media-left" href="#">
<span class="glyphicon glyphicon-cloud-upload bg-alert"></span>
 </a>
<div class="media-body">
<p><b>Ricarda</b> has added you to a group</p>
<div class="media-timestamp">2 days ago</div>
</div>
</div>
</div>
<div id="nav-tab3" class="tab-pane task-widget task-minimal sort-disabled" role="tabpanel">
<ul class="task-list task-current">
<li class="task-item success">
<div class="task-handle">
<div class="checkbox-custom">
<input type="checkbox" id="nav-task1">
<label for="nav-task1"></label>
</div>
</div>
<div class="task-desc">
<a href="#">Create documentation for launch</a>
</div>
<div class="task-menu"></div>
</li>
<li class="task-item primary">
<div class="task-handle">
<div class="checkbox-custom">
<input type="checkbox" id="nav-task2">
<label for="nav-task2"></label>
</div>
</div>
<div class="task-desc">
<a href="#">Add new servers to design board</a>
</div>
<div class="task-menu"></div>
</li>
<li class="task-item info">
<div class="task-handle">
<div class="checkbox-custom">
<input type="checkbox" id="nav-task3">
<label for="nav-task3"></label>
</div>
</div>
<div class="task-desc">
<a href="#">Finish building prototype for Sony</a>
</div>
<div class="task-menu"></div>
</li>
<li class="task-item warning">
<div class="task-handle">
<div class="checkbox-custom">
<input type="checkbox" id="nav-task4">
<label for="nav-task4"></label>
</div>
</div>
 <div class="task-desc">
<a href="#">Order new supplies for Microsoft</a>
</div>
<div class="task-menu"></div>
</li>
</ul>
<ul class="task-list task-completed">
<li class="task-item primary item-checked">
<div class="task-handle">
<div class="checkbox-custom">
<input type="checkbox" checked="" id="nav-task7">
<label for="nav-task7"></label>
</div>
</div>
<div class="task-desc">
<a href="#">Migrate servers to design board</a>
</div>
<div class="task-menu"></div>
</li>
<li class="task-item danger item-checked">
<div class="task-handle">
<div class="checkbox-custom">
<input type="checkbox" checked="" id="nav-task8">
<label for="nav-task8"></label>
</div>
</div>
<div class="task-desc">
<a href="#">Finish building prototype for Sony</a>
</div>
<div class="task-menu"></div>
</li>
<li class="task-item info item-checked">
<div class="task-handle">
<div class="checkbox-custom">
<input type="checkbox" checked="" id="nav-task9">
<label for="nav-task9"></label>
</div>
</div>
<div class="task-desc">
<a href="#">Order new supplies for Microsoft</a>
</div>
<div class="task-menu"></div>
</li>
<li class="task-item info item-checked">
<div class="task-handle">
<div class="checkbox-custom">
<input type="checkbox" checked="" id="nav-task10">
<label for="nav-task10"></label>
</div>
</div>
<div class="task-desc">
 <a href="#">Order new supplies for Microsoft</a>
</div>
<div class="task-menu"></div>
</li>
</ul>
</div>
<div id="nav-tab4" class="tab-pane" role="tabpanel">
<ul class="media-list" role="menu">
<li class="media">
<a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="avatar"> </a>
<div class="media-body">
<h5 class="media-heading">Article
<small class="text-muted">- 08/16/22</small>
</h5> Last Updated 36 days ago by
<a class="text-system" href="#"> Max </a>
</div>
</li>
<li class="media">
<a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="avatar"> </a>
<div class="media-body">
<h5 class="media-heading mv5">Article
<small> - 08/16/22</small>
</h5> Last Updated 36 days ago by
<a class="text-system" href="#"> Max </a>
</div>
</li>
<li class="media">
<a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="avatar"> </a>
<div class="media-body">
<h5 class="media-heading">Article
<small class="text-muted">- 08/16/22</small>
</h5> Last Updated 36 days ago by
<a class="text-system" href="#"> Max </a>
</div>
</li>
<li class="media">
<a class="media-left" href="#"> <img src="assets/img/avatars/4.jpg" class="mw40" alt="avatar"> </a>
<div class="media-body">
<h5 class="media-heading mv5">Article
<small class="text-muted">- 08/16/22</small>
</h5> Last Updated 36 days ago by
<a class="text-system" href="#"> Max </a>
</div>
</li>
<li class="media">
<a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="avatar"> </a>
<div class="media-body">
 <h5 class="media-heading">Article
<small class="text-muted">- 08/16/22</small>
</h5> Last Updated 36 days ago by
<a class="text-system" href="#"> Max </a>
</div>
</li>
<li class="media">
<a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="avatar"> </a>
<div class="media-body">
<h5 class="media-heading mv5">Article
<small> - 08/16/22</small>
</h5> Last Updated 36 days ago by
<a class="text-system" href="#"> Max </a>
</div>
</li>
<li class="media">
<a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="avatar"> </a>
<div class="media-body">
<h5 class="media-heading">Article
<small class="text-muted">- 08/16/22</small>
</h5> Last Updated 36 days ago by
<a class="text-system" href="#"> Max </a>
</div>
</li>
</ul>
<table class="table table-striped hidden">
<thead>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
</tr>
</thead>
<tbody>
<tr>
<td>Mark</td>
<td>Otto</td>
<td>@mdo</td>
</tr>
<tr>
<td>Jacob</td>
<td>Thornton</td>
<td>@fat</td>
</tr>
<tr>
<td>Larry</td>
<td>the Bird</td>
<td>@twitter</td>
</tr>
<tr>
<td>Sussy</td>
<td>Watcher</td>
<td>@thehawk</td>
</tr>
<tr>
 <td>Mark</td>
<td>Otto</td>
<td>@mdo</td>
</tr>
<tr>
<td>Sussy</td>
<td>Watcher</td>
<td>@thehawk</td>
</tr>
<tr>
<td>Jacob</td>
<td>Thornton</td>
<td>@fat</td>
</tr>
<tr>
<td>Larry</td>
<td>the Bird</td>
<td>@twitter</td>
</tr>
<tr>
<td>Sussy</td>
<td>Watcher</td>
<td>@thehawk</td>
</tr>
<tr>
<td>Mark</td>
<td>Otto</td>
<td>@mdo</td>
</tr>
<tr>
<td>Jacob</td>
<td>Thornton</td>
<td>@fat</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="panel-footer text-center">
<a href="#" class="link-unstyled"> View All </a>
</div>
</div>
</div>
</div>
</li>
<li class="navbar-link dropdown">
<div class="navbar-btn btn-group user-menu">
<button class="btn btn-sm dropdown-toggle" data-toggle="dropdown" type="button">
<span class="caret caret-lg mr5"></span>
<span class="glyphicon glyphicon-user"></span>
</button>
<ul class="dropdown-menu list-group dropdown-persist animated animated-shorter fadeIn" role="menu">
<li class="dropdown-header clearfix hiddn">
<img src="assets/img/avatars/1.jpg" class="avatar hidden" alt="avatar" height="30" width="30">
<h4> David Mossberg </h4>
<a class="user-menu-link" href="pages_profile.html">View your account
<span class="fa fa-caret-down text-muted ml5"></span>
</a>
<a class="user-menu-icon fa fa-gear" href="pages_profile.html"></a>
</li>
<li class="list-group-item">
 <a href="#" class="">
<span class="fa fa-envelope"></span> Messages
<span class="label label-danger">8</span>
</a>
</li>
<li class="list-group-item">
<a href="#" class="">
<span class="fa fa-bell"></span> Notifications
<span class="label label-warning">6</span>
</a>
</li>
<li class="list-group-item">
<a href="#" class="">
<span class="fa fa-user fs15"></span> Friends
<span class="label label-success">16</span>
</a>
</li>
<li class="list-group-item">
<a href="#" class="">
<span class="fa fa-gear fs15"></span> Settings </a>
</li>
<li class="dropdown-footer">
<a href="#" class="">
<span class="fa fa-power-off"></span> Logout </a>
</li>
</ul>
</div>
</li>
</ul>
</header>


<aside id="sidebar_left" class="sidebar sidebar-light has-scrollbar">

<div class="sidebar-content" tabindex="0" style="right: -17px;">

<header class="sidebar-header">

<div class="sidebar-widget author-widget author-widget-square author-widget-fill">
<div class="media">
<a class="media-left pt8" href="#">
<img src="assets/img/avatars/3.jpg" class="" alt="avatar" width="36" height="36">
</a>
<div class="media-body">
<div class="media-links">
<a href="#" class="sidebar-menu-toggle">User Menu -</a>
<a href="pages_login(alt).html">Logout</a>
</div>
<div class="media-author">Michael Richards</div>
</div>
</div>
</div>

<div class="sidebar-widget menu-widget">
<div class="row text-center mbn">
<div class="col-xs-4">
<a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dashboard">
<span class="glyphicon glyphicon-home"></span>
</a>
</div>
<div class="col-xs-4">
<a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Messages">
<span class="glyphicon glyphicon-inbox"></span>
</a>
</div>
<div class="col-xs-4">
<a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tasks">
<span class="glyphicon glyphicon-bell"></span>
</a>
</div>
<div class="col-xs-4">
 <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="" data-original-title="Activity">
<span class="fa fa-desktop"></span>
</a>
</div>
<div class="col-xs-4">
<a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
<span class="fa fa-gears"></span>
</a>
</div>
<div class="col-xs-4">
<a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cron Jobs">
<span class="fa fa-flask"></span>
</a>
</div>
</div>
</div>

<div class="sidebar-widget search-widget search-widget-light">
<div class="form-group mbn">
<span class="append-icon left">
<i class="fa fa-search"></i>
</span>
<input type="text" class="form-control" id="sidebarSearch" placeholder="Search...">
</div>
</div>
</header>


<ul class="nav sidebar-menu sidebar-menu-border">
<li class="sidebar-label pt20 hidden">Menu</li>
<li class="active">
<a href="dashboard.html">
<span class="glyphicon glyphicon-home"></span>
<span class="sidebar-title">Dashboard</span>
</a>
</li>
<li>
<a href="pages_calendar.html">
<span class="fa fa-calendar"></span>
<span class="sidebar-title">Calendar</span>
<span class="sidebar-title-tray">
<span class="label label-xs bg-default hidden">New</span>
</span>
</a>
</li>
<li class="sidebar-label pt15">Exclusive Tools</li>
<li>
<a class="accordion-toggle" href="#">
<span class="glyphicon glyphicon-fire"></span>
<span class="sidebar-title">Exclusive Plugins</span>
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="classic_plugins-panels.html">
<span class="glyphicon glyphicon-book"></span> Data Panels </a>
</li>
<li>
<a href="classic_plugins-modals.html">
<span class="glyphicon glyphicon-modal-window"></span> Advanced Modals </a>
</li>
<li>
<a href="classic_plugins-dock.html">
<span class="glyphicon glyphicon-equalizer"></span> Content Dock </a>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="glyphicon glyphicon-check"></span>
<span class="sidebar-title">Form Framework</span>
 <span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="classic_forms-widgets.html">
<span class="glyphicon glyphicon-calendar"></span> Widgets </a>
</li>
<li>
<a href="classic_forms-elements.html">
<span class="glyphicon glyphicon-edit"></span> Elements </a>
</li>
<li>
<a href="classic_forms-validation.html">
<span class="glyphicon glyphicon-check"></span> Validation </a>
</li>
<li>
<a href="classic_forms-layouts.html">
<span class="fa fa-desktop"></span> Premade Forms </a>
</li>
<li>
<a href="classic_forms-wizard.html">
<span class="fa fa-clipboard"></span> Classic Wizard </a>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-columns"></span>
<span class="sidebar-title">Layout Framework</span>
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-arrows-v"></span>
Content Body
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="layout_content-blank.html">
Blank Starter </a>
</li>
<li>
<a href="layout_content-fixed.html">
Fixed Window </a>
</li>
<li>
<a href="layout_content-heading.html">
Content Heading </a>
</li>
<li>
<a href="layout_content-tabs.html">
Content Tabs </a>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-pause"></span>
Content Trays
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="layout_tray-left.html">
Left Tray - Static </a>
</li>
<li>
<a href="layout_tray-left-fixed.html">
Left Tray - Fixed </a>
</li>
<li>
<a href="layout_tray-right.html">
 Right Tray - Static </a>
</li>
<li>
<a href="layout_tray-right-fixed.html">
Right Tray - Fixed </a>
</li>
<li>
<a href="layout_tray-both.html">
Left + Right - Static </a>
</li>
<li>
<a href="layout_tray-both-fixed.html">
Left + Right - Fixed </a>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-hand-o-up"></span>
Topbar
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="layout_topbar-crumb.html">
Breadcrumb 1 </a>
</li>
<li>
<a href="layout_topbar-crumb-alt.html">
Breadcrumb 2 </a>
</li>
<li>
<a href="layout_topbar-crumb-fill.html">
Filled - Breadcrumb </a>
</li>
<li>
<a href="layout_topbar-crumb-alt-fill.html">
Filled - Breadcrumb 2 </a>
</li>
<li>
<a href="layout_topbar-navlist.html">
Filled - Nav List </a>
</li>
<li>
<a href="layout_topbar-navtabs.html">
Filled - Nav Tabs </a>
</li>
<li>
<a href="layout_topbar-navbtns.html">
Filled - Nav Btns </a>
</li>
<li>
<a href="layout_topbar-fixed.html">
Filled - Fixed </a>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-arrows-v"></span>
Navbar
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="layout_navbar-static.html">
Navbar Static </a>
</li>
<li>
<a href="layout_navbar-fixed.html">
Navbar Fixed </a>
</li>
<li>
 <a href="layout_navbar-contextual.html">
Contextual Example </a>
</li>
<li>
<a href="layout_navbar-search-alt.html">
Search Alt Style </a>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa fa-arrows-h"></span>
Sidebars
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="layout_sidebar-left-static.html">
Left Static </a>
</li>
<li>
<a href="layout_sidebar-left-fixed.html">
Left Fixed </a>
</li>
<li>
<a href="layout_sidebar-left-minified.html">
Left Minified </a>
</li>
<li>
<a href="layout_sidebar-left-dark.html">
Left Dark </a>
</li>
<li>
<a href="layout_sidebar-right-static.html">
Right Static </a>
</li>
<li>
<a href="layout_sidebar-right-fixed.html">
Right Fixed </a>
</li>
<li>
<a href="layout_sidebar-right-menu.html">
Right w/Menu </a>
</li>
</ul>
</li>
<li>
<a href="layout_boxed.html">
<span class="glyphicon glyphicon-book"></span> Boxed Layout </a>
</li>
<li class="hidden">
<a class="accordion-toggle" href="#">
<span class="fa fa-arrow-circle-o-up"></span>
Horizontal Menu
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="layout_horizontal-sm.html">
Small Size</a>
</li>
<li>
<a href="layout_horizontal-md.html">
Medium Size</a>
</li>
<li>
<a href="layout_horizontal-lg.html">
Large Size</a>
</li>
<li>
<a href="layout_horizontal-light.html">
Light Skin</a>
</li>
<li>
<a href="layout_horizontal-topbar.html">
With Topbar</a>
</li>
<li>
<a href="layout_horizontal-topbar-alt.html">
With Alt Topbar</a>
</li>
<li>
<a href="layout_horizontal-collapsed.html">
Collapsed onLoad</a>
</li>
<li>
<a href="layout_horizontal-boxed.html">
In Boxed Layout</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="sidebar-label pt20">Systems</li>
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-diamond"></span>
<span class="sidebar-title">Widget Packages</span>
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="widgets_tile.html">
<span class="fa fa-cube"></span> Tile Widgets</a>
</li>
<li>
<a href="widgets_panel.html">
<span class="fa fa-desktop"></span> Panel Widgets </a>
</li>
<li>
<a href="widgets_scroller.html">
<span class="fa fa-columns"></span> Scroller Widgets </a>
</li>
<li class="hidden">
<a href="widgets_data.html">
<span class="fa fa-dot-circle-o"></span> Admin Widgets </a>
</li>
</ul>
</li>
<li class="sidebar-label pt20">Elements</li>
<li>
<a class="accordion-toggle" href="#">
<span class="glyphicon glyphicon-bell"></span>
<span class="sidebar-title">UI Elements</span>
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="ui_alerts.html">
<span class="fa fa-warning"></span> Alerts </a>
</li>
<li class="hidden">
<a href="ui_animations.html">
<span class="fa fa-spinner"></span> Animations </a>
</li>
<li>
<a href="ui_buttons.html">
<span class="fa fa-plus-square-o"></span> Buttons </a>
</li>
<li>
<a href="ui_typography.html">
<span class="fa fa-text-width"></span> Typography </a>
</li>
<li>
<a href="ui_portlets.html">
<span class="fa fa-archive"></span> Portlets </a>
</li>
<li>
 <a href="ui_progress-bars.html">
<span class="fa fa-bars"></span> Progress Bars </a>
</li>
<li>
<a href="ui_tabs.html">
<span class="fa fa-toggle-off"></span> Tabs </a>
</li>
<li>
<a href="ui_icons.html">
<span class="fa fa-hand-o-right"></span> Icons </a>
</li>
<li>
<a href="ui_grid.html">
<span class="fa fa-th-large"></span> Grid </a>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="glyphicon glyphicon-hdd"></span>
<span class="sidebar-title">Form Elements</span>
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="form_inputs.html">
<span class="fa fa-magic"></span> Basic Inputs </a>
</li>
<li>
<a href="form_plugins.html">
<span class="fa fa-bell-o"></span> Plugin Inputs
<span class="label label-xs bg-primary">New</span>
</a>
</li>
<li>
<a href="form_editors.html">
<span class="fa fa-clipboard"></span> Editors </a>
</li>
<li>
<a href="form_treeview.html">
<span class="fa fa-tree"></span> Treeview </a>
</li>
<li>
<a href="form_nestable.html">
<span class="fa fa-tasks"></span> Nestable </a>
</li>
<li>
<a href="form_image-tools.html">
<span class="fa fa-cloud-upload"></span> Image Tools
<span class="label label-xs bg-primary">New</span>
</a>
</li>
<li class="hidden">
<a href="form_uploaders.html">
<span class="fa fa-cloud-upload"></span> Uploaders </a>
</li>
<li>
<a href="form_notifications.html">
<span class="fa fa-bell-o"></span> Notifications </a>
</li>
<li>
<a href="form_content-sliders.html">
<span class="fa fa-exchange"></span> Content Sliders </a>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="glyphicon glyphicon-tower"></span>
<span class="sidebar-title">Plugins</span>
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-globe"></span> Maps
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="maps_advanced.html">Admin Maps</a>
</li>
<li>
<a href="maps_basic.html">Basic Maps</a>
</li>
<li>
<a href="maps_vector.html">Vector Maps</a>
</li>
<li>
<a href="maps_full.html">Full Map</a>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-line-chart"></span> Charts
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="charts_highcharts.html">Highcharts</a>
</li>
<li>
<a href="charts_d3.html">D3 Charts</a>
</li>
<li>
<a href="charts_flot.html">Flot Charts</a>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-table"></span> Tables
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="tables_basic.html"> Basic Tables</a>
</li>
<li>
<a href="tables_datatables.html"> DataTables </a>
</li>
<li>
<a href="tables_datatables-editor.html"> Editable Tables </a>
</li>
<li>
<a href="tables_footable.html"> FooTables </a>
</li>
<li>
<a href="tables_pricing.html"> Pricing Tables </a>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-flask"></span> Misc
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="misc_tour.html"> Site Tour</a>
</li>
<li>
<a href="misc_timeout.html"> Session Timeout</a>
</li>
<li>
<a href="misc_nprogress.html"> Page Progress Loader </a>
</li>
</ul>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="glyphicon glyphicon-duplicate"></span>
<span class="sidebar-title">Pages</span>
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-gears"></span> Utility
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="landing-page/landing1/index.html" target="_blank"> Landing Page </a>
</li>
<li>
<a href="pages_confirmation.html" target="_blank"> Confirmation
<span class="label label-xs bg-primary">New</span>
</a>
</li>
<li>
<a href="pages_login.html" target="_blank"> Login </a>
</li>
<li>
<a href="pages_login(alt).html" target="_blank"> Login Alt
<span class="label label-xs bg-primary">New</span>
</a>
</li>
<li>
<a href="pages_register.html" target="_blank"> Register </a>
</li>
<li>
<a href="pages_register(alt).html" target="_blank"> Register Alt
<span class="label label-xs bg-primary">New</span>
</a>
</li>
<li>
<a href="pages_screenlock.html" target="_blank"> Screenlock </a>
</li>
<li>
<a href="pages_screenlock(alt).html" target="_blank"> Screenlock Alt
<span class="label label-xs bg-primary">New</span>
</a>
</li>
<li>
<a href="pages_forgotpw.html" target="_blank"> Forgot Password </a>
</li>
<li>
<a href="pages_forgotpw(alt).html" target="_blank"> Forgot Password Alt
<span class="label label-xs bg-primary">New</span>
</a>
</li>
<li>
<a href="pages_coming-soon.html" target="_blank"> Coming Soon
</a>
</li>
<li>
<a href="pages_404.html"> 404 Error </a>
</li>
<li>
<a href="pages_500.html"> 500 Error </a>
</li>
<li>
<a href="pages_404(alt).html"> 404 Error Alt </a>
</li>
<li>
<a href="pages_500(alt).html"> 500 Error Alt </a>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-desktop"></span> Basic
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="pages_search-results.html">Search Results
<span class="label label-xs bg-primary">New</span>
</a>
</li>
<li>
<a href="pages_profile.html"> Profile </a>
</li>
<li>
<a href="pages_timeline.html"> Timeline Split </a>
</li>
<li>
<a href="pages_timeline-single.html"> Timeline Single </a>
</li>
<li>
<a href="pages_faq.html"> FAQ Page </a>
</li>
<li>
<a href="pages_calendar.html"> Calendar </a>
</li>
<li>
<a href="pages_messages.html"> Messages </a>
</li>
<li>
<a href="pages_messages(alt).html"> Messages Alt </a>
</li>
<li>
<a href="pages_gallery.html"> Gallery </a>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-usd"></span> Misc
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="pages_invoice.html"> Printable Invoice </a>
</li>
<li>
<a href="pages_blank.html"> Blank </a>
</li>
</ul>
</li>
</ul>
</li>
<li>
<a class="accordion-toggle" href="#">
<span class="glyphicon glyphicon-shopping-cart"></span>
<span class="sidebar-title">Ecommerce</span>
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="ecommerce_dashboard.html">
<span class="glyphicon glyphicon-shopping-cart"></span> Dashboard
<span class="label label-xs bg-primary">New</span>
</a>
</li>
<li>
<a href="ecommerce_products.html">
<span class="glyphicon glyphicon-tags"></span> Products </a>
</li>
<li>
<a href="ecommerce_orders.html">
<span class="fa fa-money"></span> Orders </a>
</li>
<li>
<a href="ecommerce_customers.html">
<span class="fa fa-users"></span> Customers </a>
</li>
<li>
<a href="ecommerce_settings.html">
<span class="fa fa-gears"></span> Store Settings </a>
</li>
</ul>
</li>
<li>
<a href="email_templates.html">
<span class="fa fa-envelope-o"></span>
<span class="sidebar-title">Email Templates</span>
</a>
</li>
<li class="menu-item-bottom">
<a href="http://admindesigns.com/demos/classic/README/index.html">
<span class="glyphicon glyphicon-book"></span>
<span class="sidebar-title">Documentation</span>
</a>
</li>
</ul>


<div class="sidebar-widget sidebar-bullets hidden">
<ul class="list-unstyled">
<li class="sidebar-label pt20">Projects</li>
<li class="sidebar-proj">
<a href="#projectOne">
<span class="fa fa-dot-circle-o text-primary"></span>
<span class="sidebar-title">Website Redesign</span>
</a>
</li>
<li class="sidebar-proj">
<a href="#projectTwo">
<span class="fa fa-dot-circle-o text-info"></span>
<span class="sidebar-title">Ecommerce Panel</span>
</a>
</li>
<li class="sidebar-proj">
<a href="#projectTwo">
<span class="fa fa-dot-circle-o text-danger"></span>
<span class="sidebar-title">Adobe Mockup</span>
</a>
</li>
<li class="sidebar-proj">
<a href="#projectThree">
<span class="fa fa-dot-circle-o text-warning"></span>
<span class="sidebar-title">SSD Upgrades</span>
</a>
</li>

<li class="sidebar-label pt25 pb10">User Stats</li>
<li class="sidebar-stat">
<a href="#projectOne" class="fs11">
<span class="fa fa-inbox text-info"></span>
<span class="sidebar-title text-muted">Email Storage</span>
<span class="pull-right mr20 text-muted">35%</span>
<div class="progress progress-bar-xs mh20 mb10">
<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
<span class="sr-only">35% Complete</span>
</div>
</div>
 </a>
</li>
<li class="sidebar-stat">
<a href="#projectOne" class="fs11">
<span class="fa fa-dropbox text-warning"></span>
<span class="sidebar-title text-muted">Bandwidth</span>
<span class="pull-right mr20 text-muted">58%</span>
<div class="progress progress-bar-xs mh20">
<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 58%">
<span class="sr-only">58% Complete</span>
</div>
</div>
</a>
</li>
</ul>
</div>


<a class="menu-toggle-btn" data-menu-toggle="sidebar_left_mini" href="#">
<span class="fa fa-sign-out icon-rotate-180"></span>
</a>

</div>

<div class="sidebar-pane" style="display: none;"><div class="sidebar-slider" style="height: 600px; transform: translate(0px, 0px);"></div></div></aside>


<section id="content_wrapper">

<header class="content-topbar">
<div class="topbar-left">
<ol id="breadcrumb" class="breadcrumb-styled">
<li class="crumb-icon">
<a href="dashboard.html">
<span class="glyphicon glyphicon-home"></span>
</a>
</li>
<li class="crumb-link">
<a href="dashboard.html">Home</a>
</li>
<li class="crumb-trail active">
<a href="dashboard.html">

Dashboard
</a>
</li>
</ol>
</div>
<div class="topbar-right">
<div class="topbar-nav-btns pull-right hidden">
<div class="btn btn-default btn-sm btn-gradient dark">
<i class="fa fa-home pr5"></i> Dashboard
</div>
<div class="btn btn-default btn-sm btn-gradient dark">
<i class="fa fa-cog pr5"></i> Settings
</div>
<div class="btn btn-default btn-sm btn-gradient dark">
<i class="fa fa-envelope-o pr5"></i> Inbox
</div>
</div>
<ul class="topbar-nav-tabs pull-right hidden">
<li class="active">
<a href="ecommerce_dashboard.html">Dashboard</a>
</li>
<li>
<a href="ecommerce_products.html">Products</a>
</li>
<li>
<a href="ecommerce_orders.html">Orders</a>
</li>
<li>
<a href="ecommerce_customers.html">Customers</a>
</li>
<li>
<a href="ecommerce_settings.html">Settings</a>
</li>
</ul>
<ul class="topbar-nav-list pull-right hidden">
<li class="active">
<a href="ecommerce_dashboard.html">Dashboard</a>
</li>
<li>
<a href="ecommerce_products.html">Products</a>
</li>
<li>
<a href="ecommerce_orders.html">Orders</a>
</li>
<li>
<a href="ecommerce_customers.html">Customers</a>
</li>
<li>
<a href="ecommerce_settings.html">Settings</a>
</li>
</ul>
<div class="sidebar-action ml15 va-m hidden" data-sidebar="#sidebar_left" data-sidebar-action="toggle" id="toggle_sidemenu_r">
<a href="#" class="pl5">
<i class="fa fa-sign-in fs22 text-primary"></i>
<span class="badge badge-primary badge-hero">3</span>
</a>
</div>
</div>
</header>


<section id="content" class="">





</section>


<footer id="content-footer">
<div class="row">
<div class="col-xs-6">
<span class="footer-legal">© 2018 AdminDesigns</span>
</div>
<div class="col-xs-6 text-right">
<span class="footer-meta">10GB of
<b>250GB</b> Free</span>
<a href="#content" class="footer-return-top">
<span class="fa fa-arrow-up"></span>
</a>
</div>
</div>
</footer>

</section>


<aside id="sidebar_right" class="sidebar affix has-scrollbar">

<div class="sidebar-content" tabindex="0" style="right: -17px;">
<div class="tab-block sidebar-block br-n">
<ul class="nav nav-tabs tabs-border nav-justified hidden">
<li class="active">
<a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
</li>
<li>
<a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
</li>
<li>
<a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
</li>
</ul>
<div class="tab-content br-n">
<div id="sidebar-right-tab1" class="tab-pane active">
<h5 class="title-divider text-muted mb20"> Server Statistics
<span class="pull-right"> 2013
<i class="fa fa-caret-down ml5"></i>
</span>
</h5>
<div class="progress mh5">
<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
<span class="fs11">DB Request</span>
</div>
</div>
<div class="progress mh5">
<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
<span class="fs11 text-left">Server Load</span>
 </div>
</div>
<div class="progress mh5">
<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
<span class="fs11 text-left">Server Connections</span>
</div>
</div>
<h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
<div class="row">
<div class="col-xs-5">
<h3 class="text-primary mn pl5">132</h3>
</div>
<div class="col-xs-7 text-right">
<h3 class="text-success-dark mn">
<i class="fa fa-caret-up"></i> 13.2% </h3>
</div>
</div>
<h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
<div class="row">
<div class="col-xs-5">
<h3 class="text-primary mn pl5">212</h3>
</div>
<div class="col-xs-7 text-right">
<h3 class="text-success-dark mn">
<i class="fa fa-caret-up"></i> 25.6% </h3>
</div>
</div>
<h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
<div class="row">
<div class="col-xs-5">
<h3 class="text-primary mn pl5">82.5</h3>
</div>
<div class="col-xs-7 text-right">
<h3 class="text-danger mn">
<i class="fa fa-caret-down"></i> 17.9% </h3>
</div>
</div>
<h5 class="title-divider text-muted mt40 mb20"> User Activity
<span class="pull-right text-primary fw600">1 Hour</span>
</h5>
<div class="media">
<a class="media-left" href="#">
<img src="assets/img/avatars/6.jpg" class="mw40 br64" alt="holder-img">
</a>
<div class="media-body">
<h5 class="media-heading">Article
<small class="text-muted">- 08/16/22</small>
</h5>Updated 36 days ago by
<a class="text-system" href="#"> Max </a>
</div>
</div>
<div class="media">
<a class="media-left" href="#">
<img src="assets/img/avatars/4.jpg" class="mw40 br64" alt="holder-img">
</a>
<div class="media-body">
<h5 class="media-heading">Richard
<small class="text-muted">@cloudesigns</small>
<small class="pull-right text-muted">6h</small>
</h5>Updated 36 days ago by
<a class="text-system" href="#"> Max </a>
</div>
</div>
<div class="media">
<a class="media-left" href="#">
<img src="assets/img/avatars/3.jpg" class="mw40 br64" alt="holder-img">
</a>
<div class="media-body">
<h5 class="media-heading">1,610 kcal
<span class="fa fa-caret-down text-primary pl5"></span>
</h5>Updated 36 days ago by
<a class="text-system" href="#"> Max </a>
</div>
</div>
<div class="media">
<a class="media-left" href="#">
<img src="assets/img/avatars/2.jpg" class="mw40 br64" alt="holder-img">
</a>
<div class="media-body">
<h5 class="media-heading">1,610 kcal
<span class="label label-xs label-system ml5">Featured</span>
</h5>Updated 36 days ago by
<a class="text-system" href="#"> Max </a>
</div>
</div>
<div class="media">
<a class="media-left" href="#">
<img src="assets/img/avatars/5.jpg" class="mw40 br64" alt="holder-img">
</a>
<div class="media-body">
<h5 class="media-heading">1,610 kcal</h5> Updated ago by
<a class="text-system" href="#"> Max </a>
</div>
<a class="media-right pl30" href="#">
<span class="fa fa-pencil text-muted mb5"></span>
<br>
<span class="fa fa-remove text-danger-light"></span>
</a>
</div>
</div>
<div id="sidebar-right-tab2" class="tab-pane"></div>
<div id="sidebar-right-tab3" class="tab-pane"></div>
</div>

</div>
</div>
<div class="sidebar-pane" style="display: none;"><div class="sidebar-slider" style="height: 600px; transform: translate(0px, 0px);"></div></div></aside>


<div id="dropmenu" class="">
<div class="topbar-menu row">
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-danger" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-inbox"></span>
</div>
<span class="tile-title">Messages</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-warning" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-cog"></span>
</div>
<span class="tile-title">User Settings</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-success" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-user"></span>
</div>
<span class="tile-title">Profile</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-primary" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-book"></span>
</div>
<span class="tile-title">Directory</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-alert" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-pencil"></span>
</div>
<span class="tile-title">Projects</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-system" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-home"></span>
</div>
<span class="tile-title">Settings</span>
</div>
</a>
</div>
</div>
</div>

</div>



<script src="<?php echo site_url('theme/');?>vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?php echo site_url('theme/');?>vendor/jquery/jquery_ui/jquery-ui.min.js"></script>


<script src="<?php echo site_url('theme/');?>vendor/plugins/highcharts/highcharts.js"></script>

<script src="<?php echo site_url('theme/');?>vendor/plugins/moment/moment.min.js"></script>
<script src="<?php echo site_url('theme/');?>vendor/plugins/fullcalendar/fullcalendar.min.js"></script>

<script src="<?php echo site_url('theme/');?>vendor/plugins/jvectormap/jquery.jvectormap.min.js"></script>
<script src="<?php echo site_url('theme/');?>vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script>

<script src="<?php echo site_url('theme/');?>assets/js/utility/utility.js"></script>
<script src="<?php echo site_url('theme/');?>assets/js/demo/demo.js"></script>
<script src="<?php echo site_url('theme/');?>assets/js/main.js"></script>

<script src="<?php echo site_url('theme/');?>assets/js/demo/pages/widgets.js"></script>
<script type="text/javascript">
    domready(function() {

        // Init Demo JS
        Demo.init({ assignActiveSidebar: false });

        // Init Theme Core
        Core.init();

        // Because we are using Admin Panels we use the OnFinish
        // callback to activate the demoWidgets. It's smoother if
        // we let the panels be moved and organized before
        // filling them with content from various plugins

        // Init plugins used on this page
        // HighCharts, JvectorMap, Admin Panels

        // Init Admin Panels on widgets inside the ".admin-panels" container
        var adminPanels = $('.admin-panels');
        adminPanels.adminpanel({
            grid: '.admin-grid',
            draggable: true,
            preserveGrid: true,
            mobile: true, // Always use mobile menus, cleaner for this theme style
            onStart: function() {
                // Do something before AdminPanels runs
            },
            onFinish: function() {
                // Remove fade-onload class to fade admin panels in
                requestAnimationFrame(loadContent);

                // Init the rest of the plugins now that the panels
                // have had a chance to be moved and organized.
                // It's less taxing to organize empty panels
                var timer = setTimeout(function() {
                    calendarWidget();
                    todoListWidget();
                }, 0);
            },
            onSave: function() {
                // $(window).trigger('resize');
            },
            onDrop: function() {
                // $(window).trigger('resize');
            }
        });

        function loadContent() {
            adminPanels.removeClass('fade-onload');
        }

        // Init plugins for "#calendar-widget"
        // plugins: FullCalendar
        //
        // Calendar Widget Init Wrapper
        function calendarWidget() {
            $('#calendar-widget').fullCalendar({
                contentHeight: 461,
                editable: false,
                events: [{
                    title: 'Sony Meeting',
                    start: '2017-11-02',
                    end: '2017-11-04',
                    className: 'fc-event-success',
                }, {
                    title: 'Sales Pitch Intro',
                    start: '2017-11-05',
                    end: '2017-11-07',
                    className: 'fc-event-info'
                }, {
                    title: 'Conference',
                    start: '2017-11-11',
                    end: '2017-11-15',
                    className: 'fc-event-success'
                }, {
                    title: 'System Testing',
                    start: '2017-11-20',
                    end: '2017-11-22',
                    className: 'fc-event-primary'
                }, ],
                eventRender: function(event, element) {
                    // create event tooltip using bootstrap tooltips
                    $(element).attr("data-original-title", event.title);
                    $(element).tooltip({
                        container: 'body',
                        delay: {
                            "show": 100,
                            "hide": 200
                        }
                    });
                    // create a tooltip auto close timer
                    $(element).on('show.bs.tooltip', function() {
                        var autoClose = setTimeout(function() {
                            $('.tooltip').fadeOut();
                        }, 3500);
                    });
                }
            });
        }

        // Init plugins for ".task-widget"
        // plugins: Custom Functions + jQuery Sortable
        //
        // Todo List Widget Init Wrapper
        function todoListWidget() {

            var taskWidget = $('.task-widget:not(".sort-disabled")');
            var taskItems = taskWidget.find('li.task-item');
            var currentItems = taskWidget.find('ul.task-current');
            var completedItems = taskWidget.find('ul.task-completed');

            // Init jQuery Sortable on Task Widget
            taskWidget.sortable({
                items: taskItems, // only init sortable on list items (not labels)
                handle: '.task-menu',
                connectWith: ".task-list",
                axis: 'y',
                update: function(event, ui) {
                    var Item = ui.item;
                    var ParentList = Item.parent();

                    // If item is already checked move it to "current items list"
                    if (ParentList.hasClass('task-current')) {
                        Item.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
                    }
                    if (ParentList.hasClass('task-completed')) {
                        Item.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
                    }

                }
            });

            // Custom Functions to handle/assign list filter behavior
            taskItems.on('click', function(e) {
                e.preventDefault();
                var This = $(this);
                var Target = $(e.target);

                if (Target.is('.task-menu') && Target.parents('.task-completed').length) {
                    This.remove();
                    return;
                }

                if (Target.parents('.task-handle').length) {
                    // If item is already checked move it to "current items list"
                    if (This.hasClass('item-checked')) {
                        This.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
                    }
                    // Otherwise move it to the "completed items list"
                    else {
                        This.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
                    }
                }

            });
        }

        // Widget VectorMap
        // plugins: vectormap.js
        //
        function runVectorMaps() {

            // Jvector Map Plugin
            var runJvectorMap = function() {
                // Data set
                var mapData = [900, 700, 350, 500];
                // Init Jvector Map
                $('#WidgetMap').vectorMap({
                    map: 'us_lcc_en',
                    //regionsSelectable: true,
                    backgroundColor: 'transparent',
                    series: {
                        markers: [{
                            attribute: 'r',
                            scale: [3, 7],
                            values: mapData
                        }]
                    },
                    regionStyle: {
                        initial: {
                            fill: '#E5E5E5'
                        },
                        hover: {
                            "fill-opacity": 0.3
                        }
                    },
                    markers: [{
                        latLng: [37.78, -122.41],
                        name: 'San Francisco,CA'
                    }, {
                        latLng: [36.73, -103.98],
                        name: 'Texas,TX'
                    }, {
                        latLng: [38.62, -90.19],
                        name: 'St. Louis,MO'
                    }, {
                        latLng: [40.67, -73.94],
                        name: 'New York City,NY'
                    }],
                    markerStyle: {
                        initial: {
                            fill: '#a288d5',
                            stroke: '#b49ae0',
                            "fill-opacity": 1,
                            "stroke-width": 10,
                            "stroke-opacity": 0.3,
                            r: 3
                        },
                        hover: {
                            stroke: 'black',
                            "stroke-width": 2
                        },
                        selected: {
                            fill: 'blue'
                        },
                        selectedHover: {}
                    },
                });
                // Manual code to alter the Vector map plugin to
                // allow for individual coloring of countries
                var states = ['US-CA', 'US-TX', 'US-MO',
                    'US-NY'
                ];
                var colors = [adColors.bgWarningLr, adColors.bgPrimaryLr, adColors.bgInfoLr, adColors.bgAlertLr];
                var colors2 = [adColors.bgWarning, adColors.bgPrimary, adColors.bgInfo, adColors.bgAlert];
                $.each(states, function(i, e) {
                    $("#WidgetMap path[data-code=" + e + "]").css({
                        fill: colors[i]
                    });
                });
                $('#WidgetMap').find('.jvectormap-marker')
                    .each(function(i, e) {
                        $(e).css({
                            fill: colors2[i],
                            stroke: colors2[i]
                        });
                    });
            }

            if ($('#WidgetMap').length) {
                runJvectorMap();
            }
        };

        // Chart data
        // Init plugins for '#ecommerce_chart1'
        // plugins: Custom Functions + Highcharts
        //
        // Chart Widget Init Wrapper
        var highColors = [adColors.bgSystem, adColors.bgSuccess, adColors.bgWarning, adColors.bgPrimary];
        var seriesData = [{
            name: 'Phones',
            data: [5.0, 9, 17, 22, 19, 11.5, 5.2, 9.5, 11.3, 15.3, 19.9, 24.6]
        }, {
            name: 'Notebooks',
            data: [2.9, 3.2, 4.7, 5.5, 8.9, 12.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }, {
            name: 'Desktops',
            data: [15, 19, 22.7, 29.3, 22.0, 17.0, 23.8, 19.1, 22.1, 14.1, 11.6, 7.5]
        }, {
            name: 'Music Players',
            data: [11, 6, 5, 15, 17.0, 22.0, 30.8, 24.1, 14.1, 11.1, 9.6, 6.5]
        }];

        var ecomChart = $('#ecommerce_chart1');
        if (ecomChart.length) {
            ecomChart.highcharts({
                credits: false,
                colors: highColors,
                chart: {
                    backgroundColor: 'transparent',
                    className: '',
                    type: 'line',
                    zoomType: 'x',
                    panning: true,
                    panKey: 'shift',
                    marginTop: 45,
                    marginRight: 1,
                },
                title: {
                    text: null
                },
                xAxis: {
                    gridLineColor: '#EEE',
                    lineColor: '#EEE',
                    tickColor: '#EEE',
                    categories: ['Jan', 'Feb', 'Mar', 'Apr',
                        'May', 'Jun', 'Jul', 'Aug',
                        'Sep', 'Oct', 'Nov', 'Dec'
                    ]
                },
                yAxis: {
                    min: 0,
                    tickInterval: 5,
                    gridLineColor: '#EEE',
                    title: {
                        text: null,
                    }
                },
                plotOptions: {
                    spline: {
                        lineWidth: 3,
                    },
                    area: {
                        fillOpacity: 0.2
                    }
                },
                legend: {
                    enabled: true,
                    floating: false,
                    align: 'right',
                    verticalAlign: 'top',
                    x: -15
                },
                series: seriesData
            });
        }

    });
    </script>




</body>

</html>