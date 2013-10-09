/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icons-nth\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-book-alt2' : '&#xe00a;',
			'icon-link' : '&#xf0c1;',
			'icon-twitter' : '&#xf099;',
			'icon-remove' : '&#xf00d;',
			'icon-plus' : '&#xf067;',
			'icon-minus' : '&#xf068;',
			'icon-reorder' : '&#xf0c9;',
			'icon-search' : '&#xf002;',
			'icon-angle-up' : '&#xf106;',
			'icon-chevron-up' : '&#xf077;',
			'icon-bookmark' : '&#xf02e;'
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