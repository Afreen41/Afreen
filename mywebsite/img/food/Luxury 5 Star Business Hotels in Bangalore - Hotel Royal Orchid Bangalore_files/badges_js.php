//var $ = document; // shortcut
var cssId = 'hiqCss';  // you could encode the css path itself to generate id..
if (!document.getElementById(cssId)) {
var head  = document.getElementsByTagName('head')[0];
var link  = document.createElement('link');
link.id   = cssId;
link.rel  = 'stylesheet';
link.type = 'text/css';
link.href = 'http://c1.hiqcdn.com/badges/hotel/hiq_badge.css?v=13';
link.media = 'all';
head.appendChild(link);
}
function getbyclass(findClass, parent) {

parent = parent || document;
var elements = parent.getElementsByTagName('*');
var matching = [];

for(var i = 0, elementsLength = elements.length; i < elementsLength; i++){

if ((' ' + elements[i].className + ' ').indexOf(findClass) > -1) {
matching.push(elements[i]);
}

}
return matching;
}

if (typeof document.getElementsByClassName != 'function') {
var badges = getbyclass('hiq_badge_featured_dark_2903');
}else
var badges = document.getElementsByClassName('hiq_badge_featured_dark_2903');

for (var i = 0; i < badges.length; i++)
badges[i].innerHTML = '<div class="featured_dark_background"><a href="http://www.holidayiq.com/Royal-Orchid-Hotel-Bangalore-hotel-3122.html?SRC=HBAGE" title="Royal Orchid Hotel, Bangalore - Featured on HolidayIQ.com" class="HIQ-badge-brand-bg" target="_blank"><div class="hiq_colorband"></div><div class="HIQ-badge-hotel-brand">Royal Orchid Hotel</div><div class="HIQ-badge-curved-darkbg-reviews"><div class="HIQ-badge-featured-on">READ 169 REVIEWS ON</div></div></a></div>';