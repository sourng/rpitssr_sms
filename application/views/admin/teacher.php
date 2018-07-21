
<div class="box">
    <div class="box-header">

        <!--CONTROL TABS START-->
        <ul class="nav nav-tabs nav-tabs-left">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
                    <?php echo get_phrase('teacher_list');?>
                        </a></li>
            <li>
                <a href="#add" data-toggle="tab"><i class="icon-plus"></i>
                    <?php echo get_phrase('add_teacher');?>
                        </a></li>
            <li>
                <a href="#sign-up" data-toggle="tab"><i class="icon-plus"></i>
                    <?php echo get_phrase('SignUp_teacher');?>
                        </a></li>
        </ul>
        <!--CONTROL TABS END-->

    </div>
    <div class="box-content padded">
        <div class="tab-content">
            <!--TABLE LISTING STARTS-->
            <div class="tab-pane  active" id="list">
                <div class="action-nav-normal">
                    <div class=" action-nav-button" style="width:300px;">
                        <a href="#" title="Users">
                            <img src="<?php echo base_url();?>template/images/icons/teacher.png" />
                            <span>Total <?php echo count($teachers);?> teachers</span>
                          </a>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                        <div id="dataTables">
                            <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                                <thead>
                                    <tr>
                                        <th>
                                            <div>ID</div>
                                        </th>
                                        <th>
                                            <div>Record #</div>
                                        </th>
                                        <th width="80">
                                            <div>
                                                <?php echo get_phrase('photo');?>
                                            </div>
                                        </th>
                                        <th>
                                            <div>
                                                <?php echo get_phrase('Name Kh');?>
                                            </div>
                                        </th>
                                        <th>
                                            <div>
                                                <?php echo get_phrase('Name En');?>
                                            </div>
                                        </th>
                                        <th>
                                            <div>
                                                <?php echo get_phrase('Sex');?>
                                            </div>
                                        </th>
                                        <th>
                                            <div>
                                                <?php echo get_phrase('email');?>
                                            </div>
                                        </th>
                                        <th>
                                            <div>
                                                <?php echo get_phrase('options');?>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count = 1;foreach($teachers as $row):?>
                                    <tr>
                                        <td>
                                            <?php echo $count++;?>
                                        </td>
                                        <td>
                                            <?php echo $row['teacher_id'];?>
                                        </td>
                                        <td>
                                            <div class="avatar"><img src="./uploads/teacher_image/<?php echo $row['user_avertar']; //echo $this->crud_model->get_image_url('teacher',$row['teacher_id']);?>" class="avatar-medium" /></div>
                                        </td>
                                        <td>
                                            <?php echo $row['kh_fname'] .' '. $row['kh_lname'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['en_fname'] .' '. $row['en_lname'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['sex_en_name'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['tel_num'];?><br/>
                                            <?php echo $row['e_mail'];?>
                                        </td>
                                        <td align="center">
                                            <!-- <a data-toggle="modal" href="#modal-form" onclick="modal('teacher_profile',<?php echo $row['teacher_id'];?>)" class="btn btn-default btn-sm">
                                                    <i class="icon-user"></i> <?php echo get_phrase('profile');?>
                                            </a> -->
                                            <a data-toggle="modal" href="#modal-form" onclick="modal('edit_teacher',<?php echo $row['teacher_id'];?>)" class="btn btn-gray btn-sm">
                                                    <i class="icon-wrench"></i> <?php echo get_phrase('edit');?>
                                            </a>
                                            <a data-toggle="modal" href="#modal-delete" onclick="modal_delete('<?php echo base_url();?>index.php?admin/teacher/delete/<?php echo $row['teacher_id'];?>')" class="btn btn-red btn-sm">
                                                    <i class="icon-trash"></i> <?php echo get_phrase('delete');?>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--TABLE LISTING ENDS-->


            <!--CREATION FORM STARTS-->
            <div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">

                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#bio_data" id="tab_bio_data">
                                <?php echo get_phrase('Biographic Data');?>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#emp_data" id="tab_emp_data">
                                <?php echo get_phrase('Employment Data');?>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#edu_data" id="tab_edu_data">
                                <?php echo get_phrase('Education & Training');?>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#qua_data" id="tab_qua_data">
                                <?php echo get_phrase('Qualifications');?>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#his_data" id="tab_his_data">
                                <?php echo get_phrase('Employment History (latest first)');?>
                            </a>
                        </li>
                    </ul>
                    <?php echo form_open('admin/teacher/create' , array('id' => 'form-teacher','class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="bio_data">
                            <div class="padded">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label-box">
                                                <?php echo get_phrase('Family Name (KH)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="kh_fname" id="kh_fname" autofocus/>
                                            </td>
                                            <td class="label-box">
                                                <?php echo get_phrase('First Name (KH)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="kh_lname" id="kh_lname" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Family Name (EH)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="en_fname" id="en_fname" />
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('First Name (EH)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="en_lname" id="en_lname" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Sex');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <select name="sex" id="sex" class="uniform" style="width:100%;">
                                                        <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                        <?php foreach($sex as $row):?>
                                                                <option value="<?php echo $row['sex_id']; ?>"><?php echo $row['sex_en_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('Birth Date');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up validate[required]" name="dob" id="dobirthday" />
                                                <br>
                                                <span style="font-weight: bold; color: blue;">DD-MM-YYYY</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('National ID');?>

                                            </td>
                                            <td>
                                                <input type="text" name="natuonal_id" id="natuonal_id" />
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('Institution Staff ID');?>

                                            </td>
                                            <td>
                                                <input type="text" name="ins_staff_id" id="ins_staff_id" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Number of Dependants');?>

                                            </td>
                                            <td>
                                                <input type="text" name="num_of_dep" id="num_of_dep" />
                                            </td>
                                            <td class="label-box">
                                                <?php echo get_phrase('Marital Status');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <select name="marital" id="marital" class="uniform" style="width:100%;">
                                                        <option value="0">
                                                            <?php echo get_phrase('Choose one');?>
                                                            </option>   
                                                            <?php foreach($marital as $row):?>
                                                                <option value="<?php echo $row['mar_id'] ?>"><?php echo $row['mar_en_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Government Official ID');?>

                                            </td>
                                            <td>
                                                <input type="text" name="gov_off_id" id="gov_off_id" />
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('Ministry Official ID');?>

                                            </td>
                                            <td>
                                                <input type="text" name="min_off_id" id="min_off_id" />
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Place of Birth');?>
                                                <span class="required">*</span>

                                            </td>
                                            <td colspan="3">
                                                <input type="text" class="validate[required]" name="pob" id="pob" style="width:60%;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">
                                                <?php echo get_phrase('Current Resident');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td colspan="3">
                                                <input type="text" class="validate[required]" name="cur_resident" id="cur_resident" style="width:60%;" />
                                                <a id="same-pob"   class="btn btn-default">Same</a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td width="130px"> </td>
                                            <td colspan="3">

                                                <?php echo get_phrase('Province :');?>

                                                <select onchange="change('province','district')" name="cbo_province" id="cbo_province" class="uniform" style="width:100%;">
                                                    <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                     <?php foreach($province as $row):?>
                                                         <option value="<?php echo $row['prov_id'] ?>"><?php echo $row['prov_en_name'];?>
                                                         </option>
                                                      <?php endforeach;?>
                                                  </select> 

                                                  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

                                                <?php echo get_phrase('District :');?>

                                                <select onchange="change('district','commune')" name="cbo_district" id="cbo_district" class="uniform" style="width:100%;">
                                                    <option value="0">
                                                        <?php echo get_phrase('Choose one');?>
                                                        </option>
                                                                   <?php foreach($district as $row):?>
                                                                        <option value="<?php echo $row['dist_id'] ?>"><?php echo $row['dist_en_name'];?></option>
                                                                    <?php endforeach;?>
                                                               </select> 
                                                               &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

                                                <?php echo get_phrase('Commune :');?>

                                                <select name="cbo_commune" id="cbo_commune" class="uniform" style="width:100%;">
                                                    <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                                   <?php foreach($commune as $row):?>
                                                                        <option value="<?php echo $row['comm_id'] ?>"><?php echo $row['comm_en_name'];?></option>
                                                                    <?php endforeach;?>
                                                               </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">
                                                <?php echo get_phrase('Phone Number');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="tel_num" id="tel_num" maxlength="10" />
                                            </td>
                                            <td class="label-box">
                                                <?php echo get_phrase('E-Mail');?>

                                            </td>
                                            <td>
                                                <input type="email" name="e_mail" id="e_mail" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">
                                                <?php echo get_phrase('Emergency Contact Name');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="emer_cont_name" id="emer_cont_name" />
                                            </td>
                                            <td class="label-box">
                                                <?php echo get_phrase('Emergency Contact Phone');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="emer_cont_phone" id="emer_cont_phone" maxlength="10" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('photo');?>
                                                <span class="required">*</span>

                                            </td>
                                            <td style="width: 240px;">
                                                <input type="file" class="" name="user_avertar" id="user_avertar" />
                                                <input type="hidden" class="" name="user_avertar2" id="user_avertar2" />
                                            </td>
                                            <td class="label-box"> </td>
                                            <td style="width: 240px;">
                                                <img id="blah" src="<?php echo base_url();?>uploads/teacher_image/user.jpg" alt="your image" height="100" />
                                            </td>

                                        </tr>



                                    </tbody>
                                </table>
                            </div>

                            <div class="form-actions">
                                <a class="pull-right btn btn-primary" onclick="tab('emp_data')"> <?php echo get_phrase('Next');?></a>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="emp_data">
                            <div class="padded">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label-box">
                                                <?php echo get_phrase('Employment Start Date');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up validate[required]" name="emp_start_date" id="emp_start_date" />
                                            </td>
                                            <td class="label-box">
                                                <?php echo get_phrase('Employment End Date');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up validate[required]" name="emp_end_date" id="emp_end_date" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Employment Type');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <select name="emp_type" id="emp_type" class="uniform" style="width:100%;">
                                                            <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                            <?php foreach($employment_type as $row):?>
                                                                <option value="<?php echo $row['emp_type_id'] ?>"><?php echo $row['emp_type_en_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('Contract Value (RIEL)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="cont_value" id="cont_value" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Duty Type');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <select name="duty_type" id="duty_type" class="uniform" style="width:100%;">
                                                        <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                        <?php foreach($duty_type as $row):?>
                                                                <option value="<?php echo $row['duty_type_id'] ?>"><?php echo $row['duty_type_en_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('Non Teaching staff Main Duty');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <select name="non_teach_staff_duty" id="non_teach_staff_duty" class="uniform" style="width:100%;">
                                                    <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                            <?php foreach($duty_teaching as $row):?>
                                                                <option value="<?php echo $row['duty_teach_id'] ?>"><?php echo $row['duty_teach_en_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Staff Availability and Work Schedule');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <select name="staff_work_sch" id="staff_work_sch" class="uniform" style="width:100%;">
                                                    <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                            <?php foreach($schedule as $row):?>
                                                                <option value="<?php echo $row['sch_id'] ?>"><?php echo $row['sch_en_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>



                            </div>
                            <div class="form-actions">
                                <a data-toggle="tab" onclick="tab('bio_data')" class="pull-left btn btn-default">
                                    <?php echo get_phrase('Back');?>
                                </a>
                                <a onclick="tab('edu_data')" class="pull-right btn btn-primary">
                                    <?php echo get_phrase('Next');?>
                                </a>
                            </div>

                        </div>
                         <div class="tab-pane fade" id="edu_data">
                            <div class="padded">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="width: 160px;">
                                                <?php echo get_phrase('General Education');?>
                                            </td>
                                            <td>
                                                <select name="cbo_general_education" id="cbo_general_education" class="uniform">
                                                        <option value="0">Choose one</option>
                                                            <?php foreach($general_education as $row):?>
                                                                <option value="<?php echo $row['gen_edu_id'] ?>">
                                                                    <?php echo $row['gen_edu_en_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table id="dynamic-lang">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo get_phrase('Foreign Language');?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Listening');?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Speaking');?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Reading');?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Writing');?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Add/Del');?>
                                            </td>
                                        </tr>
                                        <tr class="row-lang" id="row-lang-0">
                                            <td>
                                                <select name="cbo_language[]" id="cbo_language" class="uniform" style="width: 100%">
                                                    <option value="0">Choose one</option>
                                                            <?php foreach($foreign_language as $row):?>
                                                                <option value="<?php echo $row['fore_lang_id'] ?>"><?php echo $row['fore_lang_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>

                                            </td>

                                            <td>
                                                <select name="cbo_listening[]" id="cbo_listening" class="uniform" style="width: 100%">
                                                    <option value="0">Choose one</option>
                                                        <?php foreach($foreign_language_level as $row):?>
                                                           <option value="<?php echo $row['fore_lang_level_id'] ?>"><?php echo $row['fore_lang_level_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="cbo_speaking[]" id="cbo_speaking" class="uniform" style="width: 100%">
                                                    <option value="0">Choose one</option>
                                                        <?php foreach($foreign_language_level as $row):?>
                                                           <option value="<?php echo $row['fore_lang_level_id'] ?>"><?php echo $row['fore_lang_level_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="cbo_reading[]" id="cbo_reading" class="uniform" style="width: 100%">
                                                    <option value="0">Choose one</option>
                                                    <?php foreach($foreign_language_level as $row):?>
                                                                <option value="<?php echo $row['fore_lang_level_id'] ?>"><?php echo $row['fore_lang_level_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="cbo_writing[]" id="cbo_writing" class="uniform" style="width: 100%">
                                                    <option value="0">Choose one</option>
                                                    <?php foreach($foreign_language_level as $row):?>
                                                                <option value="<?php echo $row['fore_lang_level_id'] ?>"><?php echo $row['fore_lang_level_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td style="width: 100px;">
                                                <a href="javasript:(0)" class="btn btn-success" id="btn-add-lang"><i class="icon-plus"></i></a>
                                                <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-lang" data-remove="0"><i class="icon-trash"></i></a>
                                            </td>
                                            <td> </td>
                                        </tr>

                                    </tbody>
                                </table>

                                <table id="dynamic-course">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo get_phrase('Course/Program Name')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('TVET?')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Course Type')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Year')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('School Name')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Location')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Add/Del')?> </td>
                                        </tr>
                                        <tr class="row-course" id="row-course-0">
                                            <td>
                                                <input type="text" name="course_program[]" id="course_program" style="width: 100%">
                                            </td>
                                            <td>
                                                <select name="cbo_tvet[]" id="cbo_tvet" class="uniform" style="width: 100%">
                                                    <option value="0">Choose One</option>
                                                    <option value="1">NO</option>
                                                    <option value="2">YES</option>
                                                    </select>
                                            </td>
                                            <td>
                                                <select name="cbo_program_type[]" id="cbo_program_type" class="uniform" style="width: 100%">
                                                    <option value="0">Choose one</option>
                                                    <?php foreach($course_type as $row):?>
                                                       <option value="<?php echo $row['cour_type_id'] ?>"><?php echo $row['cour_type_en_name'];?></option>
                                                     <?php endforeach;?>
                                                    </select>
                                            </td>
                                            <td>
                                                <input type="text" name="year[]" id="year" value="" maxlength="4" style="width: 40px;">
                                            </td>
                                            <td>
                                                <input type="text" name="school_name[]" id="school_name" style="width: 100%">
                                            </td>
                                            <td>
                                                <input type="text" name="location[]" id="location" style="width: 100%">
                                            </td>
                                            <td>
                                                <a href="javasript:(0)" class="btn btn-success" id="btn-add-course"><i class="icon-plus"></i></a>
                                                <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-course"  data-remove="0"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-actions">
                                <a data-toggle="tab" onclick="tab('emp_data')" class="pull-left btn btn-default">
                                    <?php echo get_phrase('Back');?>
                                </a>
                                <a data-toggle="tab" onclick="tab('qua_data')" class="pull-right btn btn-primary">
                                    <?php echo get_phrase('Next');?>
                                </a>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="qua_data">
                            <div class="padded">

                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo get_phrase('Teacher Exam');?>
                                            </td>
                                            <td>
                                                <select name="cbo_teacher_exam" id="cbo_teacher_exam" class="uniform" style="width: 100%">
                                                <option value="0">Choose one</option>
                                                <?php foreach($teacher_exam as $row):?>
                                                                                            <option value="<?php echo $row['tea_exam_id'] ?>"><?php echo $row['tea_exam_en_name'];?></option>
                                                                                        <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td style="width: 200px;">
                                                <?php echo get_phrase('Passed Competency Assessment');?>
                                            </td>
                                            <td style="width: 140px;">
                                                <select name="cbo_teacher_passed" id="cbo_teacher_passed" class="uniform" style="width: 100%">
                                                    <option value="0">Choose One</option>
                                                    <option value="1">NO</option>
                                                    <option value="2">YES</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo get_phrase('Member of Professional Association');?>
                                            </td>
                                            <td colspan="3">
                                                <select name="cbo_association" id="cbo_association" class="uniform" style="width: 100%">
                                            <option value="0">Choose one</option>
                                            <?php foreach($member_of_pro_association as $row):?>
                                                                                            <option value="<?php echo $row['mem_ass_id'] ?>"><?php echo $row['mem_ass_en_name'];?></option>
                                                                                        <?php endforeach;?>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo get_phrase('Number of years workign ourside TVET');?>
                                            </td>
                                            <td colspan="3">
                                                Teaching: <input type="text" maxlength="2" id="teaching" name="teaching" class="classinput" value="" style="width: 30px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Other: <input type="text" maxlength="2" id="other" name="other" style="width: 30px;"> </td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>
                            <div class="form-actions">
                                <a data-toggle="tab" onclick="tab('edu_data')" class="pull-left btn btn-default">
                                    <?php echo get_phrase('Back');?>
                                </a>
                                <a data-toggle="tab" onclick="tab('his_data')" class="pull-right btn btn-primary">
                                    <?php echo get_phrase('Next');?>
                                </a>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="his_data">
                            <div class="padded">
                                <table id="dynamic-history">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo get_phrase('Position')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Start Date')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('End Date')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Organization')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Location')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Add/Del')?> </td>
                                        </tr>
                                        <tr class="row-history" id="row-history-0">

                                            <td>
                                                <input type="text" name="his_position[]" id="his_position" style="width: 100%">
                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up" name="his_start_date[]" id="his_start_date" style="width: 70px" />

                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up" name="his_end_date[]" id="his_end_date" style="width: 70px" />

                                            </td>
                                            <td>
                                                <input type="text" name="his_organization[]" id="his_organization" style="width: 100%">
                                            </td>
                                            <td>
                                                <input type="text" name="his_location[]" id="his_location" style="width: 100%">
                                            </td>
                                            <td>
                                                <a href="javasript:(0)" class="btn btn-success" id="btn-add-history"><i class="icon-plus"></i></a>
                                                <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-history"  data-remove="0"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>
                            <div class="form-actions">
                                <a data-toggle="tab" onclick="tab('qua_data')" class="pull-left btn btn-default">
                                    <?php echo get_phrase('Back');?>
                                </a>
                                <a onclick="save()" class="pull-right btn btn-primary">
                                    <?php echo get_phrase('add_teacher');?>
                                </a>
                            </div>
                        </div>

                    </div>
                    <?php echo form_close()?>

                </div>
            </div>
            <!--CREATION FORM ENDS-->
            <!-- <div  class="tab-pane box" id="sign-up" style="padding: 5px"> 
          
                            <div class="padded">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label-box">
                                                <?php echo get_phrase('Family Name (KH)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="kh_fname" id="kh_fname" autofocus/>
                                            </td>
                                            <td class="label-box">
                                                <?php echo get_phrase('First Name (KH)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="kh_lname" id="kh_lname" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Family Name (EH)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="en_fname" id="en_fname" />
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('First Name (EH)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="en_lname" id="en_lname" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Sex');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <select name="sex" id="sex" class="uniform" style="width:100%;">
                                                        <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                        <?php foreach($sex as $row):?>
                                                                <option value="<?php echo $row['sex_id']; ?>"><?php echo $row['sex_en_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('Birth Date');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up validate[required]" name="dob" id="dobirthday" />
                                                <br>
                                                <span style="font-weight: bold; color: blue;">DD-MM-YYYY</span>
                                            </td>
                                        </tr>
                                       
                                       
                                        <tr>
                                            <td class="label-box">
                                                <?php echo get_phrase('Phone Number');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="tel_num" id="tel_num" maxlength="10" />
                                            </td>
                                            <td class="label-box">
                                                <?php echo get_phrase('E-Mail');?>

                                            </td>
                                            <td>
                                                <input type="email" name="e_mail" id="e_mail" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">
                                                <?php echo get_phrase('Password');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="password" id="password" />
                                            </td>
                                            <td class="label-box">
                                                <?php echo get_phrase('Confirm Password');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="con_password" id="con_password" maxlength="10" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('photo');?>
                                                <span class="required">*</span>

                                            </td>
                                            <td style="width: 240px;">
                                                <input type="file" class="" name="user_avertar" id="user_avertar" />
                                                <input type="hidden" class="" name="user_avertar2" id="user_avertar2" />
                                            </td>
                                            <td class="label-box"> </td>
                                            <td style="width: 240px;">
                                                <img id="blah" src="<?php echo base_url();?>uploads/teacher_image/user.jpg" alt="your image" height="100" />
                                            </td>

                                        </tr>



                                    </tbody>
                                </table>
                            </div>

                            <div class="form-actions">
                              <a class="pull-right btn btn-primary"> <?php echo get_phrase('Signup');?></a>

                            </div>

            </div> -->

        </div>
    </div>
</div>
<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
              $('#blah').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
  }

  $("#user_avertar").change(function() {
      readURL(this);
  });

    $('#same-pob').click(function() {
      var pob = $('input#pob').val();
      $('input#cur_resident').val(pob);
     });

$("input#natuonal_id").keypress(number);
  $("input#ins_staff_id").keypress(number);
  $("input#num_of_dep").keypress(number);
  $("input#gov_off_id").keypress(number);
  $("input#min_off_id").keypress(number);
  $("input#tel_num").keypress(number);
  $("input#emer_cont_phone").keypress(number);
  $("input#cont_value").keypress(number);
  $("input#year").keypress(number);
  $("input#teaching").keypress(number);


  function number(event) {
      var key = window.event ? event.keyCode : event.which;
      if (event.keyCode === 8 || event.keyCode === 46) {
          return true;
      } else if (key < 48 || key > 57) {
          return false;
      } else {
          return true;
      }
  };

var i = 1;
$(document).on('click','#btn-add-lang',function()
  {
    i++;
     $('#dynamic-lang').append('<tr class="row-lang" id="row-lang-'+i+'">\
                                    <td>\
                                        <select name="cbo_language[]" id="cbo_language" class="uniform" style="width: 100%">\
                                         <option value="0">Choose one</option>\
                                            <?php foreach($foreign_language as $row):?>\
                                               <option value="<?php echo $row['fore_lang_id'] ?>"><?php echo $row['fore_lang_en_name'];?></option>\
                                            <?php endforeach;?>\
                                        </select></td>\
                                    <td>\
                                        <select name="cbo_listening[]" id="cbo_listening" class="uniform" style="width: 100%">\
                                            <option value="0">Choose one</option>\
                                            <?php foreach($foreign_language_level as $row):?>\
                                                <option value="<?php echo $row['fore_lang_level_id'] ?>"><?php echo $row['fore_lang_level_en_name'];?></option>\
                                            <?php endforeach;?>\
                                        </select>\
                                    </td>\
                                    <td>\
                                        <select name="cbo_speaking[]" id="cbo_speaking" class="uniform" style="width: 100%">\
                                            <option value="0">Choose one</option>\
                                                <?php foreach($foreign_language_level as $row):?>\
                                                   <option value="<?php echo $row['fore_lang_level_id'] ?>"><?php echo $row['fore_lang_level_en_name'];?></option>\
                                                <?php endforeach;?>\
                                        </select>\
                                    </td>\
                                    <td>\
                                                <select name="cbo_reading[]" id="cbo_reading" class="uniform" style="width: 100%">\
                                                    <option value="0">Choose one</option>\
                                                    <?php foreach($foreign_language_level as $row):?>\
                                                                <option value="<?php echo $row['fore_lang_level_id'] ?>"><?php echo $row['fore_lang_level_en_name'];?></option>\
                                                            <?php endforeach;?>\
                                                </select>\
                                            </td>\
                                            <td>\
                                                <select name="cbo_writing[]" id="cbo_writing" class="uniform" style="width: 100%">\
                                                    <option value="0">Choose one</option>\
                                                    <?php foreach($foreign_language_level as $row):?>\
                                                                <option value="<?php echo $row['fore_lang_level_id'] ?>"><?php echo $row['fore_lang_level_en_name'];?></option>\
                                                            <?php endforeach;?>\
                                                </select>\
                                            </td>\
                                            <td style="width: 100px;">\
                                                <a href="javasript:(0)" class="btn btn-success" id="btn-add-lang"><i class="icon-plus"></i></a>\
                                                <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-lang" data-remove="'+ i +'"><i class="icon-trash"></i></a>\
                                            </td>\
                                            <td> </td>\
                                        </tr>');
  });


    $(document).on('click','#btn-remove-lang',function()
    {   
        var count = $('.row-lang').length;
            if (count > 1) {
                var remove_lang = $(this).data("remove");
                  $("#row-lang-"+ remove_lang ).remove();  
             }else{
                alert('Can\'t Delete!');
             }
      

    });


$(document).on('click','#btn-add-course',function()
  {
    i++;
      $('#dynamic-course').append('<tr class="row-course" id="row-course-'+i+'">\
                                    <td>\
                                        <input type="text" name="course_program[]" id="course_program" style="width: 100%">\
                                    </td>\
                                    <td>\
                                        <select name="cbo_tvet[]" id="cbo_tvet" class="uniform" style="width: 100%">\
                                            <option value="0">Choose One</option>\
                                            <option value="1">NO</option>\
                                            <option value="2">YES</option>\
                                        </select>\
                                    </td>\
                                    <td>\
                                        <select name="cbo_program_type[]" id="cbo_program_type" class="uniform" style="width: 100%">\
                                            <option value="0">Choose one</option>\
                                            <?php foreach($course_type as $row):?>\
                                                <option value="<?php echo $row['cour_type_id'] ?>">\
                                                <?php echo $row["cour_type_en_name"];?></option>\
                                             <?php endforeach;?>\
                                         </select>\
                                    </td>\
                                    <td>\
                                        <input type="text" name="year[]" id="year" value="" maxlength="4" style="width: 40px;">\
                                    </td>\
                                    <td>\
                                        <input type="text" name="school_name[]" id="school_name" style="width: 100%">\
                                    </td>\
                                    <td>\
                                        <input type="text" name="location[]" id="location" style="width: 100%">\
                                    </td>\
                                    <td>\
                                        <a href="javasript:(0)" class="btn btn-success" id="btn-add-course"><i class="icon-plus"></i></a>\
                                        <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-course" data-remove="'+ i +'"><i class="icon-trash"></i></a>\
                                    </td>\
                                </tr>');
  });


    $(document).on('click','#btn-remove-course',function()
    {   
        var count = $('.row-course').length;
        if (count > 1) {
            var remove_course = $(this).data("remove");
            $("#row-course-"+ remove_course ).remove();
        }else{
            alert('Can\'t Delete!');
        }

    });

$(document).on('click','#btn-add-history',function()
  {
    i++;
      $('#dynamic-history').append('<tr class="row-history" id="row-history-'+i+'">\
                                        <td>\
                                            <input type="text" name="his_position[]" id="his_position" style="width: 100%">\
                                        </td>\
                                        <td>\
                                            <input type="text" class="datepicker fill-up" name="his_start_date[]" id="his_start_date" style="width: 70px" />\
                                        </td>\
                                        <td>\
                                            <input type="text" class="datepicker fill-up" name="his_end_date[]" id="his_end_date" style="width: 70px" />\
                                        </td>\
                                        <td>\
                                            <input type="text" name="his_organization[]" id="his_organization" style="width: 100%"></td>\
                                        <td>\
                                            <input type="text" name="his_location[]" id="his_location" style="width: 100%">\
                                        </td>\
                                        <td>\
                                            <a href="javasript:(0)" class="btn btn-success" id="btn-add-history"><i class="icon-plus"></i></a>\
                                            <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-history" data-remove="'+ i +'"><i class="icon-trash"></i></a>\
                                        </td>\
                                     </tr>');
  });


    $(document).on('click','#btn-remove-history',function()
    {   
        var count = $('.row-history').length;
        if (count > 1) {
            var remove_history = $(this).data("remove");
            $("#row-history-"+ remove_history ).remove();
        }else{
            alert('Can\'t Delete!');
        }
    });

</script>