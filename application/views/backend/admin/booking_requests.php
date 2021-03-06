<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="panel-title">
          <?php echo get_phrase('booking_requests'); ?>
        </div>
      </div>
      <div class="panel-body">
        <table class="table table-bordered datatable">
          <thead>
            <tr>
              <th  width="5%"><div>#</div></th>
              <th  width="20%"><div><?php echo get_phrase('listing');?></div></th>
              <th  width="5%"><div><?php echo get_phrase('type');?></div></th>
              <th  width="25%"><div><?php echo get_phrase('date');?></div></th>
              <th  width="25%"><div><?php echo get_phrase('additional_information');?></div></th>
              <th  width="10%"><div><?php echo get_phrase('status');?></div></th>
              <th  width="10%"><div><?php echo get_phrase('options');?></div></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $this->db->order_by('id', 'DESC');
            $bookings = $this->db->get('booking')->result_array();
            $count = 1;
            foreach($bookings as $booking):
              $listing_type = $this->db->get_where('listing', array('id' => $booking['listing_id']))->row('listing_type');?>
              <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $this->db->get_where('listing', array('id' => $booking['listing_id']))->row('name'); ?></td>
                <td><?php echo $booking['listing_type']; ?></td>
                <td>
                  <?php
                  if($listing_type == 'hotel' || $listing_type == 'car_rental'){
                    $booking_date = explode(' - ', $booking['booking_date']);
                    echo get_phrase('booking_date').' : <b>'.date('d M Y', $booking_date[0]).' - '.date('d M Y', $booking_date[1]).'</b>';
                  }
                  elseif($listing_type == 'flights' || $listing_type == 'ship_ticket'){
                    echo get_phrase('departure_date').' : <b>'.date('d M Y',strtotime($booking['booking_date'])).'</b>';
                  }
                  echo '<br>'.get_phrase('requesting_date').' : '.date('d M Y', $booking['created_at']);
                  ?>
                </td>
                <td>
                  <h5 class="mt-0 mb-1"><?php echo $this->db->get_where('user', array('id' => $booking['requester_id']))->row('name'); ?></h5>
                  <?php
                  $informations = json_decode($booking['additional_information']);
                  foreach($informations as $key => $value){
                    ?>
                    <span><?php echo get_phrase($key); ?> : <?php echo $value; ?></span><br>
                    <?php
                  }
                  ?>
                </td>
                <td>
                  <?php
                    if($booking['status'] == 0){ ?>
                      <span class="label label-warning"><?php echo get_phrase('pending'); ?></span>
                    <?php }
                    else{ ?>
                      <span class="label label-success"><?php echo get_phrase('approved'); ?></span>
                    <?php }?>
                </td>
                <td>
                  
                  

                  <div class="bs-example">
                    <div class="btn-group">
                      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        <?php echo get_phrase('action'); ?> <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu dropdown-blue" role="menu">
                        <li>
                            <?php if($booking['status'] == 0){ ?>
                              <a href="<?php echo site_url('admin/booking_requests/approved/'.$booking['id']); ?>" class="">
                                <i class="entypo-check"></i>
                                <?php echo get_phrase('approve'); ?>
                              </a>
                            <?php }else{ ?>
                              <a href="<?php echo site_url('admin/booking_requests/pending/'.$booking['id']); ?>" class="">
                                <i class="entypo-check"></i>
                                <?php echo get_phrase('pending'); ?>
                              </a>
                            <?php } ?>
                        </li>
                        
                        <li>
                          <a href="#" class="" onclick="confirm_modal('<?php echo site_url('admin/booking_requests/delete/'.$booking['id']); ?>');">
                            <i class="entypo-trash"></i>
                            <?php echo get_phrase('delete'); ?>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <?php $count++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
