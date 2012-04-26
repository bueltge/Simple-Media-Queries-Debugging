	( function() {
		var rx = /(&|\?)(\w+)=true/gi,
			str = window.location.href,
			m,
			s = '',
			gup = {};
		
		while ( m = rx.exec(str) ) {
			s += ' ' + m[2];
			gup[m[2]] = true;
		}
		
		if ( typeof( window.innerWidth ) != 'undefined' ) {
			var head  = document.head,
				style = document.createElement('style'),
				rules = document.createTextNode('body[data-mqd]:before {content:attr(data-mqd);}');
			
			style.type = 'text/css';
			
			if (style.styleSheet)
				style.styleSheet.cssText = rules.nodeValue;
			else
				style.appendChild(rules);
			
			head.appendChild(style);
			
			document.body.setAttribute( 'data-mqd', window.innerWidth + ' x ' + window.innerHeight );
			window.onresize = function( event ) {
				document.body.setAttribute( 'data-mqd', window.innerWidth + ' x ' + window.innerHeight );
			};
		}
	} )();