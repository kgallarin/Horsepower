	<footer>
		<div class="hp-footer">
            <div class="uk-container uk-container-center uk-text-center">

                <ul class="uk-subnav uk-subnav-line uk-flex-center">
                    <li><a href="">Careers</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">About Us</a></li>
                </ul>

                <div class="uk-panel">
                    <p>All rights reserved <a href="horsepower.ph" style="color: #FB1D26;">Horsepower.ph</a> &copy;2015</p>
                    <a href=""><img src="img/whitelogo.png" width="40" height="30" title="Horsepower" alt="Horsepower"></a>
                </div>

            </div>
        </div>
	</footer>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/core.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/touch.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/utility.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/smooth-scroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/scrollspy.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/alert.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/button.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/dropdown.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/grid.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/modal.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/nav.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/offcanvas.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/switcher.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/tab.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/cover.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/core/nav.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/components/slider.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/components/sticky.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/components/slideshow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.23.0/js/components/slideshow-fx.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
		function initialize() {
		  var mapCanvas = document.getElementById('map-canvas');
		  var mapOptions = {
		    center: new google.maps.LatLng(14.585197, 121.062046),
		    zoom: 16,
		    mapTypeId: google.maps.MapTypeId.ROADMAP
		  }
		  var map = new google.maps.Map(mapCanvas, mapOptions);
		  var Latlng_0 = new google.maps.LatLng(14.585197, 121.062046);
	      var marker_0 = new google.maps.Marker(
	        {
	            position: Latlng_0, 
	            title:"0"
	        }
	    );
	    marker_0.setMap(map);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
		
		// function moveScroll(){
		//     var scroll = $(window).scrollTop();
		//     var anchor_top = $("#maintable").offset().top;
		//     var anchor_bottom = $("#bottom_anchor").offset().top;
		//     if (scroll>anchor_top && scroll<anchor_bottom) {
		//     clone_table = $("#clone");
		//     if(clone_table.length == 0){
		//         clone_table = $("#maintable").clone();
		//         clone_table.attr('id', 'clone');
		//         clone_table.css({position:'fixed',
		//                  'pointer-events': 'none',
		//                  top:-15});
		//         clone_table.width($("#maintable").width());
		//         $("#table-container").append(clone_table);
		//         $("#clone").css({visibility:'hidden'});
		//         $("#clone thead").css({visibility:'visible'});
		//     }
		//     } else {
		//     $("#clone").remove();
		//     }
		// }
		// $(window).scroll(moveScroll);
	</script>

	</body>
</html>