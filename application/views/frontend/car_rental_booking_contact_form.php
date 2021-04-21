<div class="price">
	<span class="contact"><?php echo get_phrase('rent_a_car'); ?></span>
	<div class="score"><span><?php echo isset($quality['quality']) ? $quality['quality'] : get_phrase('unreviewed'); ?><em><?php echo count($reviews).' '.get_phrase('reviews'); ?></em></span><strong><?php echo $rating; ?></strong></div>
</div>

<div class="form-group" id="input-dates">
	<input class="form-control date-range-picker" type="text" name="dates" placeholder="<?php echo get_phrase('when'); ?>.." autocomplete="off" required>
	<i class="icon_calendar"></i>
</div>

<div class="form-group clearfix">
	<div class="custom-select-form">
		<select class="wide" name="car_rental_pick_up_city" required>
			<option value=""><?php echo get_phrase('pick_up_city'); ?></option>
			<?php
			 $cities = $this->db->get('city')->result_array();
			 foreach ($cities as $key => $city): ?>
			 <option value="<?php echo $city['name']; ?>"><?php echo $city['name']; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
</div>

<div class="form-group clearfix">
	<div class="custom-select-form">
    <textarea name="car_rental_pick_up_point" class="form-control" style="height:80px;" placeholder="House,Street,Postal Code,State..." required="" spellcheck="false"></textarea>
	</div>
</div>

<div class="form-group clearfix">
	<div class="custom-select-form">
        <input type="number" class="form-control" placeholder="Phone Number..." required>
	</div>
</div>