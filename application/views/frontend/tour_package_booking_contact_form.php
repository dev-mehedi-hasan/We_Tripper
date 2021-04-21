<div class="price">
	<span class="contact"><?php echo get_phrase('book_tour_package'); ?></span>
	<div class="score"><span><?php echo isset($quality['quality']) ? $quality['quality'] : get_phrase('unreviewed'); ?><em><?php echo count($reviews).' '.get_phrase('reviews'); ?></em></span><strong><?php echo $rating; ?></strong></div>
</div>

<div class="panel-dropdown">
	<a href="#"><?php echo get_phrase('guests'); ?> <span class="qtyTotal">1</span></a>
	<div class="panel-dropdown-content right">
		<div class="qtyButtons">
			<label><?php echo get_phrase('adults'); ?></label>
			<input type="text" name="qtyInput" id = "adult_guests" value="1">
		</div>
		<input type="hidden" name="adult_guests_for_booking" id = 'adult_guests_for_booking' value="0">
		<div class="qtyButtons">
			<label><?php echo get_phrase('childrens'); ?></label>
			<input type="text" name="qtyInput" id ="child_guests" value="0">
		</div>
		<input type="hidden" name="child_guests_for_booking" id = "child_guests_for_booking" value="0">
	</div>
</div>

<div class="form-group clearfix">
	<div class="custom-select-form">
		<select class="wide" name="tour_package_service_type" required>
			<option value="">Service Type</option>
             <option value="basic">Basic</option>
             <option value="economy">Economy</option>
             <option value="premium">Premium</option>
		</select>
	</div>
</div>
<div class="form-group clearfix">
	<div class="custom-select-form">
        <input type="number" class="form-control" placeholder="Phone Number..." required>
	</div>
</div>
