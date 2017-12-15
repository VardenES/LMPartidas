
		
	if(navigator.userAgent.match("IE 6")) {
		 document.write('<link href="/sitecarret/styles/navegadores/ie6.css" rel="stylesheet" type="text/css" media="all" charset="utf-8"/>');
	}
	
	if(navigator.userAgent.match("IE 7")) {
		 document.write('<link href="/sitecarret/styles/navegadores/ie7.css" rel="stylesheet" type="text/css" media="all" charset="utf-8"/>');
	}
	
	if(navigator.userAgent.match("IE 8")) {
		 document.write('<link href="/sitecarret/styles/navegadores/ie8.css" rel="stylesheet" type="text/css" media="all" charset="utf-8"/>');
	}
	
	if(navigator.userAgent.match("IE 9")) {
		 document.write('<link href="/sitecarret/styles/navegadores/ie9.css" rel="stylesheet" type="text/css" media="all" charset="utf-8"/>');
	}
	
	if(navigator.userAgent.match("Firefox")) {
		 document.write('<link href="/sitecarret/styles/navegadores/ffx.css" rel="stylesheet" type="text/css" media="all" charset="utf-8"/>');
	}
	
	if(navigator.userAgent.match("Chrome")) {
		 document.write('<link href="/sitecarret/styles/navegadores/chr.css" rel="stylesheet" type="text/css" media="all" charset="utf-8"/>');
	}
	
	if(navigator.userAgent.match("Safari") && !navigator.userAgent.match("Chrome")) {
		 document.write('<link href="/sitecarret/styles/navegadores/saf.css" rel="stylesheet" type="text/css" media="all" charset="utf-8"/>');
	}
	
	var navInfo = window.navigator.appVersion.toLowerCase();
	if (navInfo.indexOf('mac') != -1) { document.write('<link href="/sitecarret/styles/navegadores/mac.css" rel="stylesheet" type="text/css" media="all" charset="utf-8"/>'); }
		

