
var badgeType = 'badge_featured_dark';
var badgeID = '2903';
var hotelName = encodeURIComponent(document.getElementById('hiq_hotel_link').innerHTML);

var hotelUrl = encodeURIComponent(document.getElementById('hiq_hotel_link').href);
var destinationName = '';
if(document.getElementById('hiq_hotel_destination'))
    destinationName = encodeURIComponent(document.getElementById('hiq_hotel_destination').innerHTML);

document.write('<script type="text/javascript" src="http://www.holidayiq.com/badges/hotel/badges_js.php?badge_type='+badgeType+'&badge_id='+badgeID+'&hotel_name='+hotelName+'&hotel_url='+hotelUrl+'&destination_name='+destinationName+'"></script>');
