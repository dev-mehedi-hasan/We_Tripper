<div class="price">
	<span class="contact"><?php echo get_phrase('book_ship_ticket'); ?></span>
	<div class="score"><span><?php echo isset($quality['quality']) ? $quality['quality'] : get_phrase('unreviewed'); ?><em><?php echo count($reviews).' '.get_phrase('reviews'); ?></em></span><strong><?php echo $rating; ?></strong></div>
</div>

<div class="form-group" id="input-dates">
	<input class="form-control date-picker" type="text" name="departure_date" placeholder="<?php echo get_phrase('when'); ?>.." autocomplete="off" required>
	<i class="icon_calendar"></i>
</div>
<div class="form-group clearfix">
	<div class="custom-select-form">
		<select class="wide" name="departure_time" required>
			<option value=""><?php echo get_phrase('departure_time'); ?></option>
			<?php
			 $departur_times = $this->db->get('departure_time')->result_array();
			 foreach ($departur_times as $key => $departur_time): ?>
			 <option value="<?php echo $departur_time['time']; ?>"><?php echo $departur_time['time']; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
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
		<select class="wide" name="ship_cabin" required>
			<option value=""><?php echo get_phrase('ship_cabin'); ?></option>
			<option value="regular_seat"><?php echo get_phrase('regular_seat'); ?></option>
			<option value="signle_bed_room"><?php echo get_phrase('signle_bed_room'); ?></option>
			<option value="double_bed_room"><?php echo get_phrase('double_bed_room'); ?></option>
		</select>
	</div>
</div>
<div class="form-group clearfix">
	<div class="custom-select-form">
        <input type="number" class="form-control" placeholder="Phone Number..." required>
	</div>
</div>
