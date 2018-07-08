<?php if($class_id != ""):?>
<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('student_list');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>
					<?php echo get_phrase('add_student');?>
                    	</a></li>
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
            
            
			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">                    
                	<?php echo form_open('admin/student/create/' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data'));?>
                        <div class="padded">
                            <table>
                                <tr>
                                    <td><label for="fname">គោត្តនាម</label></td>
                                    <td><input type="text" id="fname" name="txt_family_kh"></td>
                                    <td><label for="lname">នាម</label></td>
                                    <td><input type="text" id="lname" name="txt_first_kh"></td>
                                </tr>
                                <tr>
                                    <td> <label for="fname">FIRST NAME</label></td>
                                    <td><input type="text" id="fname"  name="txt_family_en"></td>
                                    <td><label for="lname">LAST NAME</label></td>
                                    <td><input type="text" id="lname" name="txt_first_en"></td>
                                </tr>
                                <tr>
                                    <td><label class="control-label"><?php echo get_phrase('ភេទ');?></label></td>
                                    <td>
                                        <select name="cbo_sex" class="uniform" style="width:100%;">
                                            <option value="0"><?php echo get_phrase('ជ្រើសរើសខាងក្រោម៖');?></option>
                                            <option value="1"><?php echo get_phrase('ប្រុស');?></option>
                                            <option value="2"><?php echo get_phrase('ស្រី');?></option>
                                        </select>
                                    </td>
                                    <td><label class="control-label"><?php echo get_phrase('ថ្ងៃខែឆ្នាំកំណើត');?></label></td>
                                    <td>
                                        <input type="text" class="datepicker fill-up" name="txt_birthdate"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class="control-label"><?php echo get_phrase('លេខអត្តសញ្ញាណប័ណ្ណ');?></label></td>
                                    <td><input type="text" name="txt_national_id" ></td>
                                    <td><label class="control-label"><?php echo get_phrase('អត្តលេខសិស្ស');?></label></td>
                                    <td><input type="text" name="txt_institution_student_id"></td>
                                </tr>
                                <tr>
                                    <td><label class="control-label"><?php echo get_phrase('ចំនួនសមាជិកក្នុងបន្ទុកគ្រួសារ');?></label>
                                    </td>
                                    <td><input type="text" name="" style="width: 50px;"​ name="txt_dependants"><?php echo get_phrase('​ នាក់');?></td>

                                    <td><label class="control-label"><?php echo get_phrase('ស្ថានភាពគ្រួសារ');?></label></td>
                                    <td>
                                        <select name="cbo_marital" class="uniform" style="width:100%;">
                                            <option value="0"><?php echo get_phrase('ជ្រើសរើសខាងក្រោម៖');?></option>
                                            <option value="1"><?php echo get_phrase('នូវលីវ');?></option>
                                            <option value="2"><?php echo get_phrase('រៀបការរួច');?></option>
                                            <option value="3"><?php echo get_phrase('លែងលះ');?></option>
                                            <option value="4"><?php echo get_phrase('មេម៉ាយ/ពោះម៉ាយ');?></option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class="control-label"><?php echo get_phrase('ចម្ងាយផ្លូវធ្វើដំណើរ');?></label>
                                    </td>
                                    <td><input type="text" name="" style="width: 50px;" name="txt_travel_distance" ><?php echo get_phrase('​ គីឡូម៉ែត');?></td>

                                    <td><label class="control-label"><?php echo get_phrase('មធ្យោបាយធ្វើដំណើរ');?></label></td>
                                    <td>
                                        <select  name="cbo_transport_method" class="uniform" style="width:100%;">
                                            <option value="0"><?php echo get_phrase('ជ្រើសរើសខាងក្រោម៖');?></option>
                                            <option value="1"><?php echo get_phrase('ម៉ូតូឌុប(ចំណាយលុយផ្ទាល់ខ្លួន)');?></option>
                                            <option value="2"><?php echo get_phrase('ម៉ូតូផ្ទាល់ខ្លួន');?></option>
                                            <option value="3"><?php echo get_phrase('មធ្យោបាយធ្វើដំណើរសាធារណៈ (ចំណាយ លុយផ្ទាល់ខ្លួន)');?></option>
                                            <option value="4"><?php echo get_phrase('កង់');?></option>
                                            <option value="5"><?php echo get_phrase('មធ្យោបាយធ្វើដំណើរផ្តល់ដោយគ្រឹះស្ថាន (ឥតគិតថ្លៃ)');?></option>
                                            <option value="6"><?php echo get_phrase('មធ្យោបាយធ្វើដំណើរផ្តល់ដោយសហគមន៍ (ឥតគិតថ្លៃ)');?></option>
                                            <option value="7"><?php echo get_phrase('ថ្មើរជើង');?></option>
                                            <option value="8"><?php echo get_phrase('ផ្សេងៗ');?></option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="1"><label class="control-label"><?php echo get_phrase('ទីកន្លែងកំណើត');?></td>
                                    <td colspan="3"><input type="text" name="txt_birth_place" style="width: 350px"></td>
                                </tr>
                                <tr>
                                    <td><label class="control-label"><?php echo get_phrase('ទីលំនៅអចិន្រ្តៃយ៍');?></td>
                                    <td colspan="3"><input type="text" name="txt_resident_line1" style="width: 350px"></td> 
                                </tr>
                                <tr>
                                    <td style="width: 160px;"> </td>
                                    <td colspan="3">
                                        <span>ខេត្ត : </span>
                                            <select name="cbo_province" class="uniform" style="width:100%;">
                                                <option value="0">ជ្រើសខាងក្រោម៖ </option>
                                                <option value="Banteay">Banteay Meanchey</option>
                                                <option value="Tbong">Tbong Khmum</option>
                                            </select> &nbsp;&nbsp;&nbsp;
                                        <span>ស្រុក / ក្រុង : </span>
                                            <select name="cbo_district" class="uniform" style="width:100%;">
                                                <option value="">ជ្រើសខាងក្រោម៖ </option>
                                                <option value="1">Tbong Khmum</option>
                                            </select>&nbsp;&nbsp;&nbsp;
                                        <span>ឃុំ / សង្កាត់ : </span>
                                            <select name="cbo_commune" class="uniform" style="width:100%;">
                                                <option value="">ជ្រើសខាងក្រោម៖ </option>
                                                <option value="2">Tbong Khmum</option>
                                            </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class="control-label"><?php echo get_phrase('ឈ្មោះអាណាព្យាបាល');?></td>
                                    <td><input type="text" name="txt_parent_name"></td>
                                    <td><label class="control-label"><?php echo get_phrase('ទូរស័ព្ឌអាណាព្យាបាល');?></td>
                                    <td><input type="text" name="txt_parent_phone"></td>
                                </tr>
                                <tr>
                                    <td><label class="control-label"><?php echo get_phrase('អ៊ីម៉ែលអាណាព្យាបាល');?></td>
                                    <td><input type="text" name="txt_parent_email"></td>
                                </tr>
                                <tr>
                                    <td rowspan="1"><label class="control-label"><?php echo get_phrase('ទីលំនៅអាណាព្យាបាល');?></td>
                                    <td colspan="3"> 
                                        <table>
                                            <tr>
                                                <td><input type="radio"  name="rd_parent_address" value="1" checked="checked">ដូចនឹងទីលំនៅអចិន្រ្តយ៍</td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio"  name="rd_parent_address" value="0">ផ្សេងពីទីលំនៅអចិន្រ្តយ៍</td>  
                                                <td colspan="2"><input type="text" name="" style="width: 350px;"></td>            
                                            </tr>
                                        </table>                                        
                                    </td>      
                                </tr>
                                <tr>
                                    <td><label class="control-label"><?php echo get_phrase('ជ្រើសរូបថត');?></td>
                                    <td>
                                        <input type="file" name="userfile" id="imgInp" />
                                    </td>
                                </tr>
                               <tr>
                                    <td><label class="control-label"><?php echo get_phrase('កម្រិតវប្បធម៌ទូទៅ');?></td>
                                    <td>
                                        <select name="cbo_general_education" class="uniform" style="width:100%;">
                                            <option value="0"><?php echo get_phrase('ជ្រើសរើសខាងក្រោម៖');?></option>
                                            <option value="1"><?php echo get_phrase('មិនចេះអក្សរ');?></option>
                                            <option value="2"><?php echo get_phrase('ថ្នាក់ទី 1');?></option>
                                            <option value="3"><?php echo get_phrase('ថ្នាក់ទី 2');?></option>
                                            <option value="4"><?php echo get_phrase('ថ្នាក់ទី 3');?></option>
                                            <option value="5"><?php echo get_phrase('ថ្នាក់ទី 4');?></option>
                                            <option value="6"><?php echo get_phrase('ថ្នាក់ទី 5');?></option>
                                            <option value="7"><?php echo get_phrase('ថ្នាក់ទី 6');?></option>
                                            <option value="8"><?php echo get_phrase('ថ្នាក់ទី 7');?></option>
                                            <option value="9"><?php echo get_phrase('ថ្នាក់ទី 8');?></option>
                                            <option value="10"><?php echo get_phrase('ថ្នាក់ទី 9');?></option>
                                            <option value="11"><?php echo get_phrase('ថ្នាក់ទី 10');?></option>
                                            <option value="12"><?php echo get_phrase('ថ្នាក់ទី 11');?></option>
                                            <option value="13"><?php echo get_phrase('ថ្នាក់ទី 12');?></option>
                                        </select>
                                    </td>

                                    <td><label class="control-label"><?php echo get_phrase('តើអ្នកកំពុងសិក្សាថ្នាក់វប្បធម៌ទូទៅនេះដែលទេ?');?></td>
                                    <td colspan="3"> 
                                        <table>
                                            <tr>
                                                <td><input type="radio" name="rd_enrol_ge" value="1" checked="checked">
                                                    បាទ&#8203;/&#8203;ចាស
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="rd_enrol_ge" value="0">ទេ។ បញ្ចប់ការសិក្សានៅឆ្នាំ</td>  
                                                <td colspan="2"><input type="text" name="txt_last_year_enrol" style="width: 60px;"></td>            
                                            </tr>
                                        </table>                                        
                                    </td>   
                                    
                               </tr>
                               <br>
                               <tr>
                                    <td>កម្មវិធី-វគ្គបណ្តុះបណ្តាលដែលបានឆ្លងកាត់ ៖</td>
                               </tr>
                               <tr>
                                    <table>
                                        <tr>
                                            <td><label class="control-label" ><?php echo get_phrase('ឈ្មោះកម្មវិធី-វគ្គ');?></td>
                                            <td><label class="control-label"​ style="width: 60px !important;"><?php echo get_phrase('TVET?');?></td>
                                            <td><label class="control-label"  style="width: 60px !important;"><?php echo get_phrase('កម្រិត');?></td>
                                            <td><label class="control-label"  style="width: 60px !important;"><?php echo get_phrase('ឆ្នាំបញ្ចប់');?></td>
                                            <td><label class="control-label"><?php echo get_phrase('ឈ្មោះសាលា');?></td>
                                            <td><label class="control-label"><?php echo get_phrase('ទីកន្លែង');?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="txt_coursename" style="width: 140px"></td>
                                            <td>
                                                <select name="cbo_istvet" class="uniform" style="width:100%;">
                                                    <option value="0"><?php echo get_phrase('ទេ');?></option>
                                                    <option value="1"><?php echo get_phrase('បាទ/ចាស');?></option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="cbo_program_type" class="uniform" ​ style="width:100%;">
                                                    <option value="0">ជ្រើសខាងក្រោម៖ </option>
                                                    <option value="1">វគ្គខ្លី</option>
                                                    <option value="2">ស.ប.វិ ១</option>
                                                    <option value="3">ស.ប.វិ ២</option>
                                                    <option value="4">ស.ប.វិ ៣</option>
                                                    <option value="5">សញ្ញាបត្រជាន់ខ្ពស់បច្ចេកទេស</option>
                                                    <option value="6">បរិញ្ញាបត្រ / វិស្វករ</option>
                                                    <option value="7">អនុបណ្ឌិត</option>
                                                    <option value="8">បណ្ឌិត</option>
                                                </select>                                                
                                            </td>
                                            <td><input type="text" name="txt_course_year"​ style="width: 60px"></td>
                                            <td><input type="text" name="txt_school_name" style="width: 140px"></td>
                                            <td><input type="text" name="txt_school_location" style="width: 140px"></td><td>
                                            <td>
                                                <img src="http://www.tvetmis.com/internal/1718/image/add.png" class="student_course_add_row" height="14" width="14">
                                                <img src="http://www.tvetmis.com/internal/1718/image/remove.png" class="student_course_remove_row" height="14" width="14">
                                            </td>
                                        </tr>
                                    </table>                                  
                               </tr>
                               <tr>
                                   <table>
                                       <tr>
                                           <td rowspan="1" colspan="4"><label class="control-label"><?php echo get_phrase('ព័ត៌មានការងារ');?></label></td>
                                       </tr>
                                       <tr>                                    
                                            <td style="width:210px;"><label class="control-label"><?php echo get_phrase('ស្ថានភាពការងារ');?></label></td>
                                            <td style="width:210px;">
                                                <select name="cbo_emp_status" class="uniform" style="width:100%;">
                                                <option value="0">ជ្រើសខាងក្រោម៖ </option>
                                                <option value="1">គ្មានការងារធ្វើ</option>
                                                <option value="2">មានការងារពេញម៉ោង</option>
                                                <option value="3">មាន&#8203;ការងារ&#8203;ក្រៅ&#8203;ម៉ោង</option>
                                                </select>
                                            </td>
                                            
                                            <td><label class="control-label" ><?php echo get_phrase('តើការងាររបស់អ្នកជាអ្វី?');?></label></td>
                                            <td><input type="text" name="txt_job_title"></td>

                                       </tr>
                                       <tr>                                    
                                            <td style="width:210px;"><label class="control-label"><?php echo get_phrase('ប្រភេទនៃប្រាក់កម្រៃការងារ');?></label></td>
                                            <td style="width:210px;">
                                                <select name="cbo_emp_remun" class="uniform" style="width:100%;">
                                                    <option value="0">ជ្រើសខាងក្រោម៖ </option>
                                                    <option value="1">តាមម៉ោង</option>
                                                    <option value="2">ប្រចាំសប្តាហ៍</option>
                                                    <option value="3">ប្រចាំថ្ងៃ</option>
                                                    <option value="4">ប្រចាំខែ</option>
                                                    <option value="5">តាមចំនួនការងារដែលនិយោជិកបានធ្វើ</option>
                                                    <option value="6">កម្រៃជើងសារ</option>
                                                    <option value="7">ប្រាក់ចំណេញ</option>
                                                    <option value="8">ផ្សេងៗ</option>
                                                    <option value="9">គ្មាន</option> 
                                                </select>
                                            </td>
                                            
                                            <td><label class="control-label" ><?php echo get_phrase('ប្រាក់ចំណូលផ្ទាល់ខ្លួនប្រចាំខែ<br>(ជាដុល្លា)');?></label></td>
                                            <td><input type="text" name="txt_personal_income"></td>

                                       </tr>
                                       <tr>                                    
                                            <td style="width:210px;"><label class="control-label"><?php echo get_phrase('ប្រភេទការងារ');?></label></td>
                                            <td style="width:210px;">
                                                <select  name="cbo_emp_type" class="uniform" style="width:100%;">
                                                    <option value="0">ជ្រើសខាងក្រោម៖ </option>
                                                    <option value="1">បុគ្គលិកទទួលប្រាក់ឈ្នួល</option>
                                                    <option value="2">ថៅកែ</option>
                                                    <option value="3">រកស៊ីដោយខ្លួនឯង</option>
                                                    <option value="4">ធ្វើការឲ្យគ្រួសារដោយគ្មានប្រាក់ឈ្នួល</option>
                                                    <option value="5">ផ្សេងៗ</option>
                                                    <option value="6">គ្មាន</option>
                                                </select>
                                            </td>
                                            
                                            <td><label class="control-label" ><?php echo get_phrase('ប្រាក់ចំណូលគ្រួសារ ប្រចាំខែ<br>(ជាដុល្លា)');?></label></td>
                                            <td><input type="text" name="txt_family_income"></td>

                                       </tr>
                                       <tr>
                                   <table>
                                       <tr>
                                           <td rowspan="1" colspan="4"><label class="control-label"><?php echo get_phrase('ការបញ្ចេញព័ត៌មានដោយស្ម័គ្រចិត្ត');?></label></td>
                                       </tr>
                                       <tr>                                    
                                            <td style="width:210px;"><label class="control-label"><?php echo get_phrase('មូលហេតុរារាំងមិនឲ្យធ្វើការងារ');?></label></td>
                                            <td style="width:210px;">
                                                <select name="cbo_emp_prevent_reason" class="uniform" style="width:100%;">
                                                <option value="0">ជ្រើសខាងក្រោម៖ </option>
                                                <option value="1">ពិការ / អសមត្ថភាព</option>
                                                <option value="2">ធ្វើកិច្ចការផ្ទះ</option>
                                                <option value="3">ខ្វះជំនាញ</option>
                                                <option value="4">មានជំងឺ</option>
                                                <option value="5">ចាស់ជរា / ចូលនិវត្តន៍</option>
                                                <option value="6">ខ្វះ&#8203;បទ&#8203;ពិសោធន៍</option>
                                                <option value="7">ជាប់រៀន</option>
                                                <option value="8">ផ្សេងៗ</option>
                                                <option value="9">ធ្វើការបានធម្មតា</option>
                                                </select>
                                            </td>
                                            
                                            <td><label class="control-label" ><?php echo get_phrase('ជាក្មេងកព្រាឬ?');?></label></td>
                                            <td><input type="radio" name="rd_orphan" value="1">បាទ/ចាស
                                                <input type="radio" name="rd_orphan" value="1" checked="checked">ទេ</td>

                                       </tr>
                                       <tr>                                    
                                            <td style="width:210px;"><label class="control-label"><?php echo get_phrase('ប្រភេទពិការភាព');?></label></td>
                                            <td style="width:210px;">
                                                <select name="cbo_disability_type" class="uniform" style="width:100%;">
                                                <option value="0">ជ្រើសខាងក្រោម៖ </option>
                                                <option value="1">ការមើល</option>
                                                <option value="2">ការធ្វើចលនា</option>
                                                <option value="3">ការនិយាយ</option>
                                                <option value="4">សតិអារម្មណ៍</option>
                                                <option value="5">ការស្តាប់</option>
                                                <option value="6">មិនមែន ពិការ</option>
                                                </select>
                                            </td>
                                            
                                            <td><label class="control-label" ><?php echo get_phrase('ពិការតាំងពីពេលណា?');?></label></td>
                                            <td style="width:210px;">
                                                <select name="cbo_disability_happen" class="uniform" style="width:100%;">
                                                <option value="0">ជ្រើសខាងក្រោម៖ </option>
                                                <option value="1">តាំងពីកំណើត</option>
                                                <option value="2">ក្រោយកំណើត</option>
                                                <option value="3">មិនមែន ពិការ</option>
                                                </select>
                                            </td>

                                       </tr>
                                       <tr>                                    
                                            <td style="width:210px;"><label class="control-label"><?php echo get_phrase('ជនជាតិភាគតិច');?></label></td>
                                            <td style="width:210px;">
                                                <select name="cbo_minority" class="uniform" style="width:100%;">
                                                <option value="0">ជ្រើសខាងក្រោម៖ </option>
                                                <option value="1">ប្រាវ (Brao)</option>
                                                <option value="2">គ្រឹង (Kreung)</option>
                                                <option value="3">រ៉ាដេ (Rhade)</option>
                                                <option value="4">ចារាយ (Jarai)</option>
                                                <option value="5">គួយ (Kuy)</option>
                                                <option value="6">រ៉ុង (Roong)</option>
                                                <option value="7">កាចាច (Kachac)</option>
                                                <option value="8">លុន (Lun)</option>
                                                <option value="9">ស្ទៀង (Stieng)</option>
                                                <option value="10">ក្លឹង (Kleung)</option>
                                                <option value="11">មេល (Mel)</option>
                                                <option value="12">ទំពូន (Tampuon)</option>
                                                <option value="13">ក្រោល (Kraol)</option>
                                                <option value="14">ភ្នង (Phnong)</option>
                                                <option value="15">មួន (Thmaun)</option>
                                                <option value="16">ក្រាវេត (Kravet)</option>
                                                <option value="17">ព័រ (Poar)</option>
                                                <option value="18">មិនមែនជា ជនជាតិដើមភាគតិច </option>
                                                <option value="19">មិនមែនជា ជនជាតិដើមភាគតិច </option>
                                                </select>
                                            </td>
                                       </tr>
                                   </table>
                               </tr>
                               

                               
                               
                               

                            
                               
                    
                               
                            </table>
                        </div>    
                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo get_phrase('add_student');?></button>
                        </div>
                    <?php echo form_close();?>             
                </div>                
			</div>
			<!----CREATION FORM ENDS--->
            
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