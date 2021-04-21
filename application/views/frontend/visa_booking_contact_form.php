<div class="price">
	<span class="contact"><?php echo get_phrase('visa_processing'); ?></span>
	<div class="score"><span><?php echo isset($quality['quality']) ? $quality['quality'] : get_phrase('unreviewed'); ?><em><?php echo count($reviews).' '.get_phrase('reviews'); ?></em></span><strong><?php echo $rating; ?></strong></div>
</div>

<div class="form-group clearfix">
	<div class="custom-select-form">
		<select class="wide" name="visa_booking_country" required>
			<option value=""><?php echo get_phrase('Country'); ?></option>
			<?php
			 $countries = $this->db->get('country')->result_array();
			 foreach ($countries as $key => $country): ?>
			 <option value="<?php echo $country['name']; ?>"><?php echo $country['name']; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
</div>

<div class="form-group clearfix">
	<div class="custom-select-form">
		<select class="wide" name="visa_booking_type" required>
			<option value=""><?php echo get_phrase('visa_type'); ?></option>
			 <option value="tourist">Tourist</option>
             <option value="student">Student</option>
             <option value="worker">Worker</option>
		</select>
	</div>
</div>
<div class="form-group clearfix">
	<div class="custom-select-form">
        <input type="number" class="form-control" placeholder="Phone Number..." required>
	</div>
</div>
<div class="form-group clearfix">
	<div class="custom-select-form">
    <textarea name="visa_booking_message" class="form-control" style="height:80px;" placeholder="Anything else..." spellcheck="true"></textarea>
	</div>
</div>
