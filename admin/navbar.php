
<style>
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		background-image:url('https://images.pexels.com/photos/7715613/pexels-photo-7715613.jpeg?auto=compress&cs=tinysrgb&w=600');
	}
</style>

<nav id="sidebar" class='mx-lt-5' >
		
		<div class="sidebar-list">
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=booking" class="nav-item nav-booking"><span class='icon-field'><i class="fa fa-file"></i></span> Venue Bookings</a>
				<a href="index.php?page=venue" class="nav-item nav-venue"><span class='icon-field'><i class="fa fa-map-marker"></i></span> Venues</a>
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=site_settings" class="nav-item nav-venue"><span class='icon-field'><i class="fa fa-info-circle"></i></span> Info</a>
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
