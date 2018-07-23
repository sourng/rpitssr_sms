<?php 
switch ($select) {
    case "district":
       ?>
       <select name="cbo_district" id="cbo_district" class="uniform" style="width:100%;">
		     <option value="0">
		        <?php echo get_phrase('Choose one');?>
		     </option>
		     <?php foreach($district as $row):?>
		        <option value="<?php echo $row['dist_id'] ?>">
		        	<?php echo $row['dist_en_name'];?></option>
		            <?php endforeach;?>
			</select> 
       <?php

        break;
    case "commune":
	       ?>
	       	 <select name="cbo_commune" id="cbo_commune" class="uniform" style="width:100%;">
                <option value="0"><?php echo get_phrase('Choose one');?></option>
                <?php foreach($commune as $row):?>
                    <option value="<?php echo $row['comm_id'] ?>">
                    	<?php echo $row['comm_en_name'];?>
                    </option>
                <?php endforeach;?>
          	 </select>	
	       <?php
        break;
}
 ?>
 