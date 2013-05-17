/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icons-nth\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-arrow' : '&#x21;',
			'icon-paperplane' : '&#x22;',
			'icon-link' : '&#x23;',
			'icon-eye' : '&#x24;',
			'icon-bolt' : '&#x25;',
			'icon-code' : '&#x26;',
			'icon-lock' : '&#x27;',
			'icon-minus' : '&#x28;',
			'icon-plus' : '&#x29;',
			'icon-twitter' : '&#x2a;',
			'icon-search' : '&#x2b;',
			'icon-cross' : '&#x2c;',
			'icon-list' : '&#x2d;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};