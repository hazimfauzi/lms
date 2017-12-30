<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(2.321060, 102.328330),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.HYBRID
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<?php include('head.php'); ?>
            <div class="span5">
            <div class="alert alert-danger">CONTACT US</strong></div>
            <strong><h2>Address:</h2></strong>
            <h4>A-1-4-C, Kolej Kediaman Al-Jazari,</h4>
            <h4>Universiti Teknikal Malaysia Melaka</h4>
            <h4>76100 Durian Tunggal,</h4>
            <h4>Melaka.</h4>
            <strong><h2>Phone:</h2></strong>
            <h4>013-7664533</h4>
            </div>
            <div class="span7">
			<div id="googleMap" style="width:660px;height:480px;"></div>
			</div>
		    </div>
    </div>
</div>
<?php include('footer.php') ?>