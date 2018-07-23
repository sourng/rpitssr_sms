
<div class="tab-pane box active" id="edit" style="padding: 5px">
                <div class="box-content">
                	
                     
                    <?php echo form_open('admin/teacher/do_update/'.$edit_data[0]['teacher_id'] , array('id' => 'form-teacher','class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
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
                                                <input type="text" class="validate[required]" name="kh_fname" id="kh_fname" value="<?php echo $edit_data[0]['kh_fname'] ?>" />
                                            </td>
                                            <td class="label-box">
                                                <?php echo get_phrase('First Name (KH)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="kh_lname" id="kh_lname" value="<?php echo $edit_data[0]['kh_lname'] ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Family Name (EH)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="en_fname" id="en_fname" value="<?php echo $edit_data[0]['en_fname'] ?>"/>
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('First Name (EH)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="en_lname" id="en_lname" value="<?php echo $edit_data[0]['en_lname'] ?>"/>
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
                                                                <option value="<?php echo $row['sex_id']; ?>" <?php if ($row['sex_id'] == $edit_data[0]['sex_id']){ echo 'selected';} ?>>
                                                                    <?php echo $row['sex_en_name'];?>
                                                                        
                                                                </option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('Birth Date');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up validate[required]" name="dob" id="dobirthday" value="<?php echo $edit_data[0]['dob'] ?>" />
                                                <br>
                                                <span style="font-weight: bold; color: blue;">DD-MM-YYYY</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('National ID');?>

                                            </td>
                                            <td>
                                                <input type="text" name="natuonal_id" id="natuonal_id" value="<?php echo $edit_data[0]['natuonal_id'] ?>"/>
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('Institution Staff ID');?>

                                            </td>
                                            <td>
                                                <input type="text" name="ins_staff_id" id="ins_staff_id" value="<?php echo $edit_data[0]['ins_staff_id'] ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Number of Dependants');?>

                                            </td>
                                            <td>
                                                <input type="text" name="num_of_dep" id="num_of_dep" value="<?php echo $edit_data[0]['num_of_dep'] ?>"/>
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
                                                                <option value="<?php echo $row['mar_id'] ?>" <?php if ($row['mar_id'] == $edit_data[0]['marital_id']){ echo 'selected';} ?>>
                                                                    <?php echo $row['mar_en_name'];?>
                                                                        
                                                                    </option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Government Official ID');?>

                                            </td>
                                            <td>
                                                <input type="text" name="gov_off_id" id="gov_off_id" value="<?php echo $edit_data[0]['gov_off_id'] ?>"/>
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('Ministry Official ID');?>

                                            </td>
                                            <td>
                                                <input type="text" name="min_off_id" id="min_off_id" value="<?php echo $edit_data[0]['min_off_id'] ?>"/>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Place of Birth');?>
                                                <span class="required">*</span>

                                            </td>
                                            <td colspan="3">
                                                <input type="text" class="validate[required]" name="pob" id="pob" style="width:60%;" value="<?php echo $edit_data[0]['pob'] ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">
                                                <?php echo get_phrase('Current Resident');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td colspan="3">
                                                <input type="text" class="validate[required]" name="cur_resident" id="cur_resident" style="width:60%;" value="<?php echo $edit_data[0]['cur_resident'] ?>"/>
                                                <a id="same-pob"   class="btn btn-default">Same</a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td width="130px"> </td>
                                            <td colspan="3">

                                                <?php echo get_phrase('Province :');?>

                                                <select onchange="change('province','district')" name="cbo_province" id="cbo_province" class="uniform" style="width:100%;" data-select="<?php echo $edit_data[0]['dist_id'] ?>">
                                                    <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                     <?php foreach($province as $row):?>
                                                         <option value="<?php echo $row['prov_id'] ?>" <?php if ($row['prov_id'] == $edit_data[0]['prov_id']){ echo 'selected';} ?>>
                                                            <?php echo $row['prov_en_name'];?>
                                                         </option>
                                                      <?php endforeach;?>
                                                  </select> 

                                                  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

                                                <?php echo get_phrase('District :');?>

                                                <select onchange="change('district','commune')" name="cbo_district" id="cbo_district" class="uniform" style="width:100%;" data-select="<?php echo $edit_data[0]['comm_id'] ?>">
                                                    <option value="0">
                                                        <?php echo get_phrase('Choose one');?>
                                                        </option>
                                                                   <?php foreach($district as $row):?>
                                                                        <option value="<?php echo $row['dist_id'] ?>" <?php if ($row['dist_id'] == $edit_data[0]['dist_id']){ echo 'selected';} ?>>
                                                                            <?php echo $row['dist_en_name'];?></option>
                                                                    <?php endforeach;?>
                                                               </select> 
                                                               &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

                                                <?php echo get_phrase('Commune :');?>

                                                <select name="cbo_commune" id="cbo_commune" class="uniform" style="width:100%;">
                                                    <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                                   <?php foreach($commune as $row):?>
                                                                        <option value="<?php echo $row['comm_id'] ?>" <?php if ($row['comm_id'] == $edit_data[0]['comm_id']){ echo 'selected';} ?>>
                                                                            <?php echo $row['comm_en_name'];?></option>
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
                                                <input type="text" class="validate[required]" name="tel_num" id="tel_num" value="<?php echo $edit_data[0]['tel_num'] ?>"/>
                                            </td>
                                            <td class="label-box">
                                                <?php echo get_phrase('E-Mail');?>

                                            </td>
                                            <td>
                                                <input type="email" name="e_mail" id="e_mail" value="<?php echo $edit_data[0]['e_mail'] ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">
                                                <?php echo get_phrase('Emergency Contact Name');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="emer_cont_name" id="emer_cont_name" value="<?php echo $edit_data[0]['emer_cont_name'] ?>"/>
                                            </td>
                                            <td class="label-box">
                                                <?php echo get_phrase('Emergency Contact Phone');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="emer_cont_phone" id="emer_cont_phone" value="<?php echo $edit_data[0]['emer_cont_phone'] ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('photo');?>
                                                <span class="required">*</span>

                                            </td>
                                            <td style="width: 240px;">
                                                <input type="file"  name="user_avertar" id="user_avertar" />
                                                <input type="hidden" class="" name="user_avertar2" id="user_avertar2" value="<?php echo $edit_data[0]['user_avertar'] ?>" />
                                            </td>
                                            <td class="label-box"> </td>
                                            <td style="width: 240px;">
                                                <img id="blah" src="<?php echo base_url();?>uploads/teacher_image/<?php echo $edit_data[0]['user_avertar'] ?>" alt="your image" height="100" />
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
                                                <input type="text" class="datepicker fill-up validate[required]" name="emp_start_date" id="emp_start_date" value="<?php echo $edit_data[0]['emp_start_date'] ?>" />
                                            </td>
                                            <td class="label-box">
                                                <?php echo get_phrase('Employment End Date');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up validate[required]" name="emp_end_date" id="emp_end_date" value="<?php echo $edit_data[0]['emp_end_date'] ?>" />
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
                                                                <option value="<?php echo $row['emp_type_id'] ?>" <?php if ($row['emp_type_id'] == $edit_data[0]['emp_type_id']){ echo 'selected';} ?>>
                                                                    <?php echo $row['emp_type_en_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('Contract Value (RIEL)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="cont_value" id="cont_value" value="<?php echo $edit_data[0]['cont_value'] ?>" />
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
                                                                <option value="<?php echo $row['duty_type_id'] ?>" <?php if ($row['duty_type_id'] == $edit_data[0]['duty_type_id']){ echo 'selected';} ?>>
                                                                    <?php echo $row['duty_type_en_name'];?></option>
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
                                                                <option value="<?php echo $row['duty_teach_id'] ?>" <?php if ($row['duty_teach_id'] == $edit_data[0]['duty_teach_id']){ echo 'selected';} ?>>
                                                                    <?php echo $row['duty_teach_en_name'];?></option>
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
                                                                <option value="<?php echo $row['sch_id'] ?>" <?php if ($row['sch_id'] == $edit_data[0]['sch_id']){ echo 'selected';} ?>>
                                                                    <?php echo $row['sch_en_name'];?></option>
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
                                                                <option value="<?php echo $row['gen_edu_id'] ?>" <?php if ($row['gen_edu_id'] == $edit_data[0]['gen_edu_id']){ echo 'selected';} ?> >
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

                                        <?php foreach ($edit_education as $key): ?>
                                            <tr class="row-lang" id="row-lang-<?php echo $key['emp_cou_id']?>">
                                            <td>
                                                <select name="cbo_language[]" id="cbo_language" class="uniform">
                                                    <option value="0">Choose one</option>
                                                            <?php foreach($foreign_language as $row):?>
                                                                <option value="<?php echo $row['fore_lang_id'] ?>" <?php if ($row['fore_lang_id'] == $key['fore_lang_id']){ echo 'selected';} ?>><?php echo $row['fore_lang_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>

                                            </td>

                                            <td>
                                                <select name="cbo_listening[]" id="cbo_listening" class="uniform">
                                                    <option value="0">Choose one</option>
                                                        <?php foreach($foreign_language_level as $row):?>
                                                           <option value="<?php echo $row['fore_lang_level_id'] ?>" <?php if ($row['fore_lang_level_id'] == $key['listen_level_id']){ echo 'selected';} ?>><?php echo $row['fore_lang_level_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="cbo_speaking[]" id="cbo_speaking" class="uniform">
                                                    <option value="0">Choose one</option>
                                                        <?php foreach($foreign_language_level as $row):?>
                                                           <option value="<?php echo $row['fore_lang_level_id'] ?>"  <?php if ($row['fore_lang_level_id'] == $key['speak_level_id']){ echo 'selected';} ?>><?php echo $row['fore_lang_level_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="cbo_reading[]" id="cbo_reading" class="uniform">
                                                    <option value="0">Choose one</option>
                                                    <?php foreach($foreign_language_level as $row):?>
                                                                <option value="<?php echo $row['fore_lang_level_id'] ?>"  <?php if ($row['fore_lang_level_id'] == $key['read_level_id']){ echo 'selected';} ?>><?php echo $row['fore_lang_level_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="cbo_writing[]" id="cbo_writing" class="uniform">
                                                    <option value="0">Choose one</option>
                                                    <?php foreach($foreign_language_level as $row):?>
                                                                <option value="<?php echo $row['fore_lang_level_id'] ?>"  <?php if ($row['fore_lang_level_id'] == $key['wirte_level_id']){ echo 'selected';} ?>><?php echo $row['fore_lang_level_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td style="width: 100px;">
                                                 <a href="javasript:(0)" class="btn btn-success" id="btn-add-lang"><i class="icon-plus"></i></a>
                                                <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-lang"  data-remove="<?php echo $key['edu_train_id'] ?>"><i class="icon-trash"></i></a>
                                            </td>
                                            <td> </td>
                                        </tr>
                                        <?php endforeach; ?>

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
                                        <?php foreach ($edit_course as $key):?>
                                            <tr class="row-course" id="row-course-<?php echo $key['emp_cou_id']?>">
                                            <td>
                                                <input type="text" name="course_program[]" id="course_program" style="width: 100%" value="<?php echo $key['emp_cou_name'] ?>">
                                            </td>
                                            <td>
                                                <select name="cbo_tvet[]" id="cbo_tvet" class="uniform">
                                                    <option value="0">Choose One</option>
                                                    <option value="1" <?php if ($key['tvet']==1){ echo 'selected';} ?>>NO</option>
                                                    <option value="2" <?php if ($key['tvet']==2){ echo 'selected';} ?>>YES</option>
                                                    </select>
                                            </td>
                                            <td>
                                                <select name="cbo_program_type[]" id="cbo_program_type" class="uniform">
                                                    <option value="0">Choose one</option>
                                                    <?php foreach($course_type as $row):?>
                                                       <option value="<?php echo $row['cour_type_id'] ?>"
                                                        <?php if ($row['cour_type_id'] == $key['cour_type_id']){ echo 'selected';} ?> ><?php echo $row['cour_type_en_name'];?></option>
                                                     <?php endforeach;?>
                                                    </select>
                                            </td>
                                            <td>
                                                <input type="text" name="year[]" id="year" maxlength="4" style="width: 40px;" value="<?php echo $key['year'] ?>">
                                            </td>
                                            <td>
                                                <input type="text" name="school_name[]" id="school_name" style="width: 100%"  value="<?php echo $key['school'] ?>">
                                            </td>
                                            <td>
                                                <input type="text" name="location[]" id="location" style="width: 100%"
                                                 value="<?php echo $key['location'] ?>">
                                            </td>
                                            <td>
                                                <a href="javasript:(0)" class="btn btn-success" id="btn-add-course"><i class="icon-plus"></i></a>
                                                <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-course" data-remove="<?php echo $key['emp_cou_id']?>"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
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
                                                    <option value="<?php echo $row['tea_exam_id'] ?>" <?php if ($row['tea_exam_id'] == $edit_data[0]['tea_exam_id']){ echo 'selected';} ?>>
                                                        <?php echo $row['tea_exam_en_name'];?>
                                                            
                                                        </option>
                                                 <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td style="width: 200px;">
                                                <?php echo get_phrase('Passed Competency Assessment');?>
                                            </td>
                                            <td style="width: 140px;">
                                                <select name="cbo_teacher_passed" id="cbo_teacher_passed" class="uniform" style="width: 100%">
                                                    <option value="0">Choose One</option>
                                                    <option value="1" <?php if ($edit_data[0]['tea_passed']==1){ echo 'selected';} ?>>NO</option>
                                                    <option value="2" <?php if ($edit_data[0]['tea_passed']==2){ echo 'selected';} ?>>YES</option>
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
                                               <option value="<?php echo $row['mem_ass_id'] ?>" <?php if ($row['mem_ass_id'] == $edit_data[0]['mem_ass_id']){ echo 'selected';} ?>><?php echo $row['mem_ass_en_name'];?>
                                                   
                                               </option>
                                            <?php endforeach;?>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo get_phrase('Number of years workign ourside TVET');?>
                                            </td>
                                            <td colspan="3">
                                                Teaching: <input type="text" maxlength="2" id="teaching" name="teaching" class="classinput" value="<?php echo $edit_data[0]['teaching'] ?>" style="width: 30px;">
                                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                 Other: <input type="text" maxlength="2" id="other" name="other" style="width: 30px;" value="<?php echo $edit_data[0]['other'] ?>"> 
                                             </td>
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
                                        
                                        <?php foreach ($edit_history as $key):?>
                                            <tr class="row-history" id="row-history-<?php echo $key['emp_his_id'] ?>">
                                            <td>
                                                <input type="text" name="his_position[]" id="his_position" style="width: 100%" value="<?php echo $key['his_position'] ?>">
                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up" name="his_start_date[]" id="his_start_date" style="width: 70px" value="<?php echo $key['his_start_date'] ?>"/>

                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up" name="his_end_date[]" id="his_end_date" style="width: 70px" value="<?php echo $key['his_end_date'] ?>"/>

                                            </td>
                                            <td>
                                                <input type="text" name="his_organization[]" id="his_organization" style="width: 100%" value="<?php echo $key['his_organization'] ?>">
                                            </td>
                                            <td>
                                                <input type="text" name="his_location[]" id="his_location" style="width: 100%" value="<?php echo $key['his_location'] ?>">
                                            </td>
                                            <td>
                                                <a href="javasript:(0)" class="btn btn-success" id="btn-add-history"><i class="icon-plus"></i></a>
                                                <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-history" data-remove="<?php echo $key['emp_his_id'] ?>"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
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

                </div>
                    <?php echo form_close()?>
                 
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
    $('select').css('height','30px');
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
<script type="text/javascript">
    /*$(document).ready(function(){
        var cbo_province = $('select#cbo_province').val();
        var cbo_district = $('select#cbo_district').val();
        var cbo_commune = $('select#cbo_commune').val();
        var select = ''; 
        if (cbo_province != 0) {
            change('province', 'district');
             var select =  $('select#cbo_province').data('select');      
            $('select#cbo_district').val(select).trigger('change');
        }else if(cbo_district != 0){
            change('district', 'commune');            
            var select =  $('select#cbo_district').data('select');     
             $('select#cbo_commune').val(select).trigger('change');
        }
       
    })
*/
</script>