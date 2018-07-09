<?php if($class_id != ""):?>
<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('student_list');?>
                    	</a>
            </li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>
					<?php //echo get_phrase('add_student');?>(A) ជីវប្រវត្តិសិស្ស
                </a>
            </li>
            <li>
            	<a href="#add1" data-toggle="tab"><i class="icon-plus"></i>
					<?php //echo get_phrase('add_student_new');?>
                    (A) ជីវប្រវត្តិសិស្ស
                </a>
            </li>
             <li>
            	<a href="#add2" data-toggle="tab"><i class="icon-plus"></i>
					<?php //echo get_phrase('add_student_new');?>
                    (C) ការអបរំ និងបណ្តុះបណ្តាល
                </a>
            </li>
            <li>
            	<a href="#add3" data-toggle="tab"><i class="icon-plus"></i>
					<?php //echo get_phrase('add_student_new');?>
                    (D) ព័ត៌មានការងារ
                </a>
            </li>
		</ul>
    	<!------CONTROL TABS END------->
        
	</div>
	<div class="box-content">
		<div class="tab-content">
            <!----TABLE LISTING STARTS--->
            <div class="tab-pane  active" id="list">
				<center>
                	<br /><?php echo get_phrase('Class');?>
                	<select name="class_id" onchange="window.location='<?php echo base_url();?>index.php?admin/student/'+this.value">
                    	<option value=""><?php echo get_phrase('select_a_class');?>
                    	
                    	<?php echo get_phrase('Please_select_a_class_to_manage_student');?>
                    	</option>
						<?php 
                        $classes = $this->db->get('class')->result_array();
                        foreach($classes as $row):
                        ?>
                            <option value="<?php echo $row['class_id'];?>"
                            	<?php if($class_id == $row['class_id'])echo 'selected';?>>
                                	Class <?php echo $row['name'];?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>
                    <br /><br />
					<?php if($class_id	==	''):?>
                        <div id="ask_class" class="  alert alert-info  " style="width:300px;">
                            <i class="icon-info-sign"></i> Please select a class to manage student.
                        </div>
                        <script>
						$(document).ready(function() {
						  	
						   	function shake()
						  	{
								$( "#ask_class" ).effect( "shake" );
						  	}
						  	setTimeout(shake, 500);
						});
						</script>
                        <br /><br />
                    <?php endif;?>
                <?php if($class_id	!=	''):?>
                
                    <div class="action-nav-normal">
                        <div class=" action-nav-button" style="width:300px;">
                          <a href="#" title="Users">
                            <img src="<?php echo base_url();?>template/images/icons/user.png" />
                            <span>Total <?php echo count($students);?> students</span>
                          </a>
                        </div>
                    </div>
                </center>
                <div class="box">
      				<div class="box-content">
                		<div id="dataTables">
                        <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive ">
                            <thead>
                                <tr>
                                    <th><div><?php echo get_phrase('roll');?></div></th>
                                    <th width="80"><div><?php echo get_phrase('photo');?></div></th>
                                    <th width="180"><div><?php echo get_phrase('student_name');?></div></th>
                                    <th class="span3"><div><?php echo get_phrase('address');?></div></th>
                                    <th><div><?php echo get_phrase('email');?></div></th>
                                    <th><div><?php echo get_phrase('options');?></div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1;foreach($students as $row):?>
                                <tr>
                                    <td class="span1"><?php echo $row['roll'];?></td>
                                    <td>
                                    
                                    <div class="avatar">
                                     <a  data-toggle="modal" href="#modal-form" onclick="modal('student_profile',<?php echo $row['student_id'];?>)">
                                           <img src="<?php echo $this->crud_model->get_image_url('student',$row['student_id']);?>" class="avatar-medium" />
                                        </a>
                                    
                                    </div></td>
                                    <td><?php echo $row['khname'];?><br/><?php echo $row['name'];?></td>
                                    <td><?php echo $row['address'];?></td>
                                    <td><?php echo $row['phone'];?><br/><?php echo $row['email'];?></td>
                                    <td align="center" class="span5">
                                        
                                        
                                        <a  data-toggle="modal" href="#modal-form" onclick="modal('student_profile',<?php echo $row['student_id'];?>)" class="btn btn-default btn-small">
                                            <i class="icon-user"></i> <?php echo get_phrase('profile');?>
                                        </a>
                                        <a  data-toggle="modal" href="#modal-form" onclick="modal('student_academic_result',<?php echo $row['student_id'];?>)" class="btn btn-default btn-small">
                                            <i class="icon-file-alt"></i> <?php echo get_phrase('marksheet');?>
                                        </a>
                                        <a  data-toggle="modal" href="#modal-form" onclick="modal('student_id_card',<?php echo $row['student_id'];?>)" class="btn btn-default btn-small">
                                            <i class="icon-credit-card"></i> <?php echo get_phrase('id_card');?>
                                        </a>
                                        <a  data-toggle="modal" href="#modal-form" onclick="modal('edit_student',<?php echo $row['student_id'];?>,<?php echo $class_id;?>)" class="btn btn-gray btn-small">
                                            <i class="icon-wrench"></i> <?php echo get_phrase('edit');?>
                                        </a>
                                        <a  data-toggle="modal" href="#modal-delete" onclick="modal_delete('<?php echo base_url();?>index.php?admin/student/<?php echo $class_id;?>/delete/<?php echo $row['student_id'];?>')" class="btn btn-red btn-small">
                                            <i class="icon-trash"></i> <?php echo get_phrase('delete');?>
                                        </a>
                                        
                                        
                                        
                                        <!--<a href="<?php echo base_url();?>index.php?admin/student/<?php echo $class_id;?>/personal_profile/<?php echo $row['student_id'];?>"
                                             class="btn btn-gray">
                                                <i class="icon-wrench"></i> <?php echo get_phrase('personal_profile');?>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php?admin/student/<?php echo $class_id;?>/academic_result/<?php echo $row['student_id'];?>"
                                             class="btn btn-gray">
                                                <i class="icon-wrench"></i> <?php echo get_phrase('academic_result');?>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php?admin/student/<?php echo $class_id;?>/edit/<?php echo $row['student_id'];?>"
                                            class="btn btn-gray">
                                                <i class="icon-wrench"></i> <?php echo get_phrase('edit');?>
                                        </a>
                                        <a href="<?php echo base_url();?>index.php?admin/student/<?php echo $class_id;?>/delete/<?php echo $row['student_id'];?>" onclick="return confirm('delete?')"
                                             class="btn btn-red">
                                                <i class="icon-trash"></i> <?php echo get_phrase('delete');?>
                                        </a>-->
                                        
                                        
                                        
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                		</div>
                    </div>
                </div>
                <?php endif;?>
			</div>
            <!----TABLE LISTING ENDS--->
            
            
			<!-- CREATION FORM STARTS -->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open('admin/student/create/' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data'));?>
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label">ឈ្មោះខ្មែរ</label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="khname"/>
                                </div>
                            </div>
				 <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('name');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="name"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('birthday');?></label>
                                <div class="controls">
                                    <input type="text" class="datepicker fill-up" name="birthday"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('sex');?></label>
                                <div class="controls">
                                    <select name="sex" class="uniform" style="width:100%;">
                                    	<option value="male"><?php echo get_phrase('male');?></option>
                                    	<option value="female"><?php echo get_phrase('female');?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('address');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="address"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('phone');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="phone"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('email');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="email"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('password');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="password"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('father_name');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="father_name"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('mother_name');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="mother_name"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('class');?></label>
                                <div class="controls">
                                    <select name="class_id" class="uniform" style="width:100%;">
                                    	<?php 
										$classes = $this->db->get('class')->result_array();
										foreach($classes as $row):
										?>
                                    		<option value="<?php echo $row['class_id'];?>">
												<?php echo $row['name'];?>
                                                    </option>
                                        <?php
										endforeach;
										?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('roll');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="roll"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('photo');?></label>
                                <div class="controls" style="width:210px;">
                                    <input type="file" class="" name="userfile" id="imgInp" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"></label>
                                <div class="controls" style="width:210px;">
                                    <img id="blah" src="<?php echo base_url();?>uploads/user.jpg" alt="your image" height="100" />
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo get_phrase('add_student');?></button>
                        </div>
                    <?php echo form_close();?>                
                </div>                
			</div>
			<!-- CREATION FORM ENDS--->



            <!-- CREATION FORM STARTS1 -->
			<div class="tab-pane box" id="add1" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open('admin/student/create1/' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data'));?>
                        <div class="padded">                                                     
                        <legend>(A) ជីវប្រវត្តិសិស្ស</legend>
<table>
<tbody><tr>
<td style="width: 160px;"><strong>គោត្តនាម</strong></td>
<td style="width: 240px;">
<input type="text" name="txt_family_kh" value="" class="classinput" style="width: 230px;">
</td>
<td style="width: 160px;"><strong>នាម</strong></td>
<td style="width: 240px;">
<input type="text" name="txt_first_kh" class="classinput" value="" style="width: 230px;">
</td>
</tr>
<tr>
<td style="width: 160px;"><strong>Family Name</strong></td>
<td style="width: 240px;">
<input type="text" name="txt_family_en" value="" class="classinput" style="width: 230px;">
</td>
<td style="width: 160px;"><strong>First Name</strong></td>
<td style="width: 240px;">
<input type="text" name="txt_first_en" class="classinput" value="" style="width: 230px;">
</td>
</tr>
<tr>
<td style="width: 160px;"><strong>ភេទ</strong></td>
<td style="width: 240px;">
 <select name="cbo_sex">
<option value="0">ជ្រើសខាងក្រោម៖ </option>
<option value="1">ប្រុស</option>
<option value="2">ស្រី</option>
</select> </td>
<td style="width: 160px;"><strong>ថ្ងៃខែឆ្នាំកំណើត</strong></td>
<td style="width: 240px;">
<input type="text" id="txt_birthdate" name="txt_birthdate" class="classinput hasDatepicker" value="" style="width: 230px;">
<br><span style="font-weight: bold; color: blue;">YYYY-MM-DD</span>
</td>
</tr>
<tr>
<td style="width: 160px;"><strong>លេខអត្តសញ្ញាណប័ណ្ណ</strong></td>
<td style="width: 240px;">
<input type="text" name="txt_national_id" value="" class="classinput" style="width: 230px;">
</td>
<td style="width: 160px;"><strong>អត្តលេខសិស្ស</strong></td>
<td style="width: 240px;">
<input type="text" name="txt_institution_student_id" class="classinput" value="" style="width: 230px;">
</td>
</tr>
<tr>
<td style="width: 160px;"><strong>ចំនួនសមាជិកគ្រួសារក្នុងបន្ទុក</strong></td>
<td style="width: 240px;">
<input type="text" id="txt_dependants" name="txt_dependants" value="" class="classinput" style="width: 30px;" maxlength="2"> នាក់ </td>
<td style="width: 160px;"><strong>ស្ថានភាពគ្រួសារ</strong></td>
<td style="width: 240px;">
<select name="cbo_marital">
<option value="0">ជ្រើសខាងក្រោម៖ </option>
<option value="1">នៅលីវ</option>
<option value="2">រៀបការរួច</option>
<option value="3">លែងលះ</option>
<option value="4">មេម៉ាយ / ពោះម៉ាយ</option>
</select> </td>
</tr>
<tr>
<td style="width: 160px;"><strong>ចម្ងាយផ្លូវធ្វើដំណើរ</strong></td>
<td style="width: 240px;">
<input maxlength="2" type="text" id="txt_travel_distance" name="txt_travel_distance" value="" class="classinput" style="width: 30px;"> គីឡូម៉ែត </td>
<td style="width: 160px;"><strong>មធ្យោបាយធ្វើដំណើរ</strong></td>
<td style="width: 240px;">
<select name="cbo_transport_method">
<option value="0">ជ្រើសខាងក្រោម៖ </option>
<option value="1">ម៉ូតូឌុប(ចំណាយលុយផ្ទាល់ខ្លួន)</option>
<option value="2">ម៉ូតូផ្ទាល់ខ្លួន</option>
<option value="3">មធ្យោបាយធ្វើដំណើរសាធារណៈ (ចំណាយ លុយផ្ទាល់ខ្លួន)</option>
<option value="4">កង់</option>
<option value="5">មធ្យោបាយធ្វើដំណើរផ្តល់ដោយគ្រឹះស្ថាន (ឥតគិតថ្លៃ)</option>
<option value="6">មធ្យោបាយធ្វើដំណើរផ្តល់ដោយសហគមន៍ (ឥតគិតថ្លៃ</option>
<option value="7">ថ្មើរជើង</option>
<option value="8">ផ្សេងៗ</option>
</select> </td>
</tr>
<tr>
 <td style="width: 160px;"><strong>ទីកន្លែងកំណើត</strong></td>
<td colspan="3">
<input type="text" name="txt_birth_place" value="" class="classinput" style="width: 500px;">
</td>
</tr>
<tr>
<td style="width: 160px;"><strong>ទីលំនៅអចិន្ត្រៃយ៍</strong></td>
<td colspan="3">
<input type="text" name="txt_resident_line1" class="classinput" value="" style="width: 500px;">
</td>
</tr>
<tr>
<td style="width: 160px;"> </td>
<td colspan="3">
<strong>ខេត្ត : </strong>
<select name="cbo_province" class="cbo_province">
<option value="0">ជ្រើសខាងក្រោម៖ </option>
<option value="1">Banteay Meanchey</option>
<option value="2">Battambang</option>
<option value="3">Kampong Cham</option>
<option value="4">Kampong Chhnang</option>
<option value="5">Kampong Speu</option>
<option value="6">Kampong Thom</option>
<option value="7">Kampot</option>
<option value="8">Kandal</option>
<option value="9">Koh Kong</option>
<option value="10">Kratie</option>
<option value="11">Mondul Kiri</option>
<option value="12">Phnom Penh</option>
<option value="13">Preah Vihear</option>
<option value="14">Prey Veng</option>
<option value="15">Pursat</option>
<option value="16">Ratanak Kiri</option>
<option value="17">Siem Reap</option>
<option value="18">Preah Sihanouk</option>
<option value="19">Stung Treng</option>
<option value="20">Svay Rieng</option>
<option value="21">Takeo</option>
<option value="22">Otdar Meanchey</option>
<option value="23">Kep</option>
<option value="24">Pailin</option>
<option value="25">Tbong Khmum</option>
</select> &nbsp;&nbsp;&nbsp;
<strong>ស្រុក / ក្រុង : </strong>
<select name="cbo_district" class="cbo_district">
<option value="0/0">ជ្រើសខាងក្រោម៖ </option>
</select>
&nbsp;&nbsp;&nbsp;
<strong>ឃុំ / សង្កាត់ : </strong>
<select name="cbo_commune" class="cbo_commune">
<option value="0/0/0">ជ្រើសខាងក្រោម៖ </option>
</select>
</td>
</tr>
<tr>
<td style="width: 160px;"><strong>ឈ្មោះអាណាព្យាបាល</strong></td>
<td style="width: 240px;">
<input type="text" name="txt_parent_name" value="" class="classinput" style="width: 230px;">
</td>
<td style="width: 160px;"><strong>ទូរស័ព្ទអាណាព្យាបាល</strong></td>
<td style="width: 240px;">
<input type="text" name="txt_parent_phone" class="classinput" value="" style="width: 230px;">
</td>
</tr>
<tr>
<td style="width: 160px;"><strong>អ៊ីម៉ែលអាណាព្យាបាល</strong></td>
<td style="width: 240px;">
<input type="text" name="txt_parent_email" value="" class="classinput" style="width: 230px;">
</td>
<td style="width: 160px;"><strong> </strong></td>
<td style="width: 240px;">
 </td>
</tr>
<tr>
<td style="width: 160px;"><strong>ទីលំនៅអាណាព្យាបាល</strong></td>
<td colspan="3">
<input type="radio" name="rd_parent_address" value="1" checked="checked">
ដូចនឹងទីលំនៅអចិន្ត្រៃយ៍ <br>
<input type="radio" name="rd_parent_address" value="0">
ផ្សេងពីទីលំនៅអចិន្ត្រៃយ៍
<input type="text" name="txt_parent_other" value="" class="classinput" style="width: 430px;">
</td>
</tr>
<tr>
<td style="width: 160px;"><strong>ជ្រើសរូបថត</strong></td>
<td colspan="3">
<input type="file" size="80" name="userfile">
<input name="file_photo" type="hidden" value="0">
</td>
</tr>
</tbody></table>
</fieldset>
<fieldset>
<legend>(B) កម្រិតវប្បធម៌ទូទៅ</legend>
<table>
<tbody><tr>
<td style="width: 100px;"><strong>កម្រិតវប្បធម៌ទូទៅ </strong></td>
<td style="width: 200px;">
<select name="cbo_general_education">
<option value="0">ជ្រើសខាងក្រោម៖ </option>
<option value="22">មិនចេះអក្សរ</option>
<option value="1">ថ្នាក់ទី 1</option>
<option value="2">ថ្នាក់ទី 2</option>
<option value="3">ថ្នាក់ទី 3</option>
<option value="4">ថ្នាក់ទី 4</option>
<option value="5">ថ្នាក់ទី 5</option>
<option value="6">ថ្នាក់ទី 6</option>
<option value="7">ថ្នាក់ទី 7</option>
<option value="8">ថ្នាក់ទី 8</option>
<option value="9">ថ្នាក់ទី 9</option>
<option value="10">ថ្នាក់ទី 10</option>
<option value="11">ថ្នាក់ទី 11</option>
<option value="12">ថ្នាក់ទី 12</option>
</select> </td>
<td style="width: 260px;"><strong>តើអ្នកកំពុងសិក្សាថ្នាក់វប្បធម៌ទូទៅនេះដែឬទេ? </strong></td>
<td style="width: 300px;">
<input type="radio" name="rd_enrol_ge" value="1" checked="checked">
បាទ&#8203;/&#8203;ចាស <br>
<input type="radio" name="rd_enrol_ge" value="0">
ទេ
។ បញ្ចប់ការសិក្សានៅឆ្នាំ
<input type="text" id="txt_last_year_enrol" name="txt_last_year_enrol" value="" class="classinput" maxlength="4" style="width: 40px;">
</td>
</tr>
</tbody></table>
</fieldset>
                          
                            
                            
                            
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo get_phrase('add_student');?></button>
                        </div>
                    <?php echo form_close();?>                
                </div>                
			</div>
            <!-- CREATION FORM ENDS1 -->


            <!-- CREATION FORM STARTS2 -->
			<div class="tab-pane box" id="add2" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open('admin/student/create2/' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data'));?>
                        <div class="padded">                                                     
                            
                          
                            
                            
                            
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo get_phrase('add_student');?></button>
                        </div>
                    <?php echo form_close();?>                
                </div>                
			</div>
            <!-- CREATION FORM ENDS2 -->


            <!-- CREATION FORM STARTS3 -->
			<div class="tab-pane box" id="add3" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open('admin/student/create3/' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data'));?>
                        <div class="padded">                                                     
                            
                          
                            
                            
                            
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo get_phrase('add_student');?></button>
                        </div>
                    <?php echo form_close();?>                
                </div>                
			</div>
            <!-- CREATION FORM ENDS3 -->




                                
                            </div>
                        </div>
                    </div>
<?php endif;?>
<?php if($class_id == ""):?>
<center>
<div class="span5" style="float:none !important;">
    <div class="box">
		<div class="box-header">
			<span class="title"> <i class="icon-info-sign"></i> Please select a class to manage student.</span>
		</div>
		<div class="box-content padded">
            <br />
            <select name="class_id" onchange="window.location='<?php echo base_url();?>index.php?admin/student/'+this.value">
                <option value=""><?php echo get_phrase('select_a_class');?></option>
                <?php 
                $classes = $this->db->get('class')->result_array();
                foreach($classes as $row):
                ?>
                    <option value="<?php echo $row['class_id'];?>"
                        <?php if($class_id == $row['class_id'])echo 'selected';?>>
                            Class <?php echo $row['name'];?></option>
                <?php
                endforeach;
                ?>
            </select>
            <hr />
            <script>
                $(document).ready(function() {
                    function ask()
                    {
                        Growl.info({title:"Select a class to manage student",text:" "});
                    }
                    setTimeout(ask, 500);
                });
            </script>
		</div>
    </div>
</div>
</center>
<?php endif;?>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
</script>