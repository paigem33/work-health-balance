<style>
   body {
	 background-color: #fff;
	 font-family: Arial, sans-serif;
	 font-size: 14px;
	 letter-spacing: 0.01em;
	 color: #39464e;
}
 .navbar-default {
	 background-color: #fff;
	 margin-left: 200px;
}
/*main side bar*/
 .msb {
	 width: 200px;
	 background-color: #f5f7f9;
	 position: fixed;
	 left: 0;
	 top: 0;
	 right: auto;
	 min-height: 100%;
	 overflow-y: auto;
	 white-space: nowrap;
	 height: 100%;
	 z-index: 1;
	 border-right: 1px solid #ddd;
}
 .msb .navbar {
	 border: none;
	 margin-left: 0;
	 background-color: inherit;
}
 .msb .navbar-header {
	 width: 100%;
	 border-bottom: 1px solid #e7e7e7;
	 margin-bottom: 20px;
	 background: #fff;
}
 .msb .navbar-nav .panel {
	 border: 0 none;
	 box-shadow: none;
	 margin: 0;
	 background: inherit;
}
 .msb .navbar-nav li {
	 display: block;
	 width: 100%;
}
 .msb .navbar-nav li a {
	 padding: 15px;
	 color: #5f5f5f;
}
 .msb .navbar-nav li a .glyphicon, .msb .navbar-nav li a .fa {
	 margin-right: 8px;
}
 .msb .nb {
	 padding-top: 5px;
	 padding-left: 10px;
	 margin-bottom: 30px;
	 overflow: hidden;
}
 ul.nv, ul.ns {
	 position: relative;
	 padding: 0;
	 list-style: none;
}
 .nv {
	/*ns: nav-sub*/
}
 .nv li {
	 display: block;
	 position: relative;
}
 .nv li::before {
	 clear: both;
	 content: "";
	 display: table;
}
 .nv li a {
	 color: #444;
	 padding: 10px 25px;
	 display: block;
	 vertical-align: middle;
}
 .nv li a .ic {
	 font-size: 16px;
	 margin-right: 5px;
	 font-weight: 300;
	 display: inline-block;
}
 .nv .ns li a {
	 padding: 10px 50px;
}
/*main content wrapper*/
 .mcw {
	 margin-left: 200px;
	 position: relative;
	 min-height: 100%;
	/*content view*/
}
/*globals*/
 a, a:focus, a:hover {
	 text-decoration: none;
}
 .inbox .container-fluid {
	 padding-left: 0;
	 padding-right: 0;
}
 .inbox ul, .inbox li {
	 margin: 0;
	 padding: 0;
}
 .inbox ul li {
	 list-style: none;
}
 .inbox ul li a {
	 display: block;
	 padding: 10px 20px;
}
 .msb, .mnb {
	 -moz-animation: slidein 300ms forwards;
	 -o-animation: slidein 300ms forwards;
	 -webkit-animation: slidein 300ms forwards;
	 animation: slidein 300ms forwards;
	 -webkit-transform-style: preserve-3d;
	 transform-style: preserve-3d;
}
 .mcw {
	 -moz-animation: bodyslidein 300ms forwards;
	 -o-animation: bodyslidein 300ms forwards;
	 -webkit-animation: bodyslidein 300ms forwards;
	 animation: bodyslidein 300ms forwards;
	 -webkit-transform-style: preserve-3d;
	 transform-style: preserve-3d;
}
 body.msb-x .mcw, body.msb-x .mnb {
	 margin-left: 0;
	 -moz-animation: bodyslideout 300ms forwards;
	 -o-animation: bodyslideout 300ms forwards;
	 -webkit-animation: bodyslideout 300ms forwards;
	 animation: bodyslideout 300ms forwards;
	 -webkit-transform-style: preserve-3d;
	 transform-style: preserve-3d;
}
 body.msb-x .msb {
	 -moz-animation: slideout 300ms forwards;
	 -o-animation: slideout 300ms forwards;
	 -webkit-animation: slideout 300ms forwards;
	 animation: slideout 300ms forwards;
	 -webkit-transform-style: preserve-3d;
	 transform-style: preserve-3d;
}
/* Slide in animation */
 @-moz-keyframes slidein {
	 0% {
		 left: -200px;
	}
	 100% {
		 left: 0;
	}
}
 @-webkit-keyframes slidein {
	 0% {
		 left: -200px;
	}
	 100% {
		 left: 0;
	}
}
 @keyframes slidein {
	 0% {
		 left: -200px;
	}
	 100% {
		 left: 0;
	}
}
 @-moz-keyframes slideout {
	 0% {
		 left: 0;
	}
	 100% {
		 left: -200px;
	}
}
 @-webkit-keyframes slideout {
	 0% {
		 left: 0;
	}
	 100% {
		 left: -200px;
	}
}
 @keyframes slideout {
	 0% {
		 left: 0;
	}
	 100% {
		 left: -200px;
	}
}
 @-moz-keyframes bodyslidein {
	 0% {
		 left: 0;
	}
	 100% {
		 margin-left: 200px;
	}
}
 @-webkit-keyframes bodyslidein {
	 0% {
		 left: 0;
	}
	 100% {
		 left: 0;
	}
}
 @keyframes bodyslidein {
	 0% {
		 margin-left: 0;
	}
	 100% {
		 margin-left: 200px;
	}
}
 @-moz-keyframes bodyslideout {
	 0% {
		 margin-left: 200px;
	}
	 100% {
		 margin-right: 0;
	}
}
 @-webkit-keyframes bodyslideout {
	 0% {
		 margin-left: 200px;
	}
	 100% {
		 margin-left: 0;
	}
}
 @keyframes bodyslideout {
	 0% {
		 margin-left: 200px;
	}
	 100% {
		 margin-left: 0;
	}
}
 
 
    </style>
<!--msb: main sidebar-->
<div class="msb" id="msb">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<div class="brand-wrapper">
					<!-- Brand -->
					<div class="brand-name-wrapper">
						<a class="navbar-brand" href="#">
							SAITAMA
						</a>
					</div>

				</div>

			</div>

			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">

					<li><a href="#">Dashboard</a></li>
					<li class="active"><a href="#"> Components</a></li>
					<li><a href="#"> Extras</a></li>

					<!-- Dropdown-->
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl1">
							Apps
						  <span class="caret"></span>
            </a>
						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl1" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="#">Mail</a></li>
									<li><a href="#">Calendar</a></li>
									<li><a href="#">Ecommerce</a></li>
									<li><a href="#">User</a></li>
									<li><a href="#">Social</a></li>

									<!-- Dropdown level 2 -->
									<li class="panel panel-default" id="dropdown">
										<a data-toggle="collapse" href="#dropdown-lvl2">
											<i class="glyphicon glyphicon-off"></i> Sub Level <span class="caret"></span>
										</a>
										<div id="dropdown-lvl2" class="panel-collapse collapse">
											<div class="panel-body">
												<ul class="nav navbar-nav">
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>  
</div>