<?php $flights_cabins = $this->db->get_where('flights_cabin_specification', array('listing_id' => $listing_details['id']))->result_array(); ?>
<h5><?php echo get_phrase('flights_cabin_details'); ?></h5>
<?php foreach ($flights_cabins as $flights_cabin): ?>
	<div class="room_type first">
		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo base_url('uploads/flights_cabin_images/'.$flights_cabin['photo']); ?>" class="img-fluid" alt="">
			</div>
			<div class="col-md-8">
				<h4><?php echo $flights_cabin['name']; ?></h4>
				<p style="margin-bottom: 10px;"><?php echo $flights_cabin['description']; ?></p>
				<ul class="hotel_facilities">
					<?php
					$amenities = explode(',', $flights_cabin['amenities']);
					foreach ($amenities as $amenity): ?>
					<li><img src="<?php echo base_url('assets/global/amenities.svg'); ?>" alt="" style="height: 20px; width: 20px;"><?php echo ucwords($amenity); ?></li>
					<?php endforeach; ?>
				</ul>
				<p style="margin-bottom: 10px;"><?php echo get_phrase('price').': '.currency($flights_cabin['price']); ?></p>
			</div>
		</div>
	</div>
<?php endforeach; ?>
