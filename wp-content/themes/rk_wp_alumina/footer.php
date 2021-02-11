	</div><!--end of container div-->




<?php wp_footer(); ?>




<script>


$(document).ready(function(){
    var waypoint = new Waypoint({
	  element: document.getElementById('waypoint'),
	  handler: function(direction) {
	    alert("i am here");
	  }
	})
}); 



$('.counter').countUp();
</script>
<script type="text/javascript">
    $(".counter").counterUp({delay:1});
</script>

</body>
</html>