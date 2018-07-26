<?php echo form_open('admin/teacherprofile/update/biographic_data/'.$edit_data[0]['teacher_id'] , array('id' => 'form-teacher','class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
 <div class="tab-pane fade in active box" id="bio_data">
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
                                <a href="javascript:(0)" class="pull-right btn btn-primary" id="btn-update-bio-data"> <?php echo get_phrase('Update');?></a>

                            </div>

</div>
<?php echo form_close();?>

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


$('a#btn-update-bio-data').click(function(e){
   //Biographic Data 
      var kh_fname = $('input#kh_fname').val();
      var kh_lname = $('input#kh_lname').val();
      var en_fname = $('input#en_fname').val();
      var en_lname = $('input#en_lname').val();
      var sex = $('select#sex').val();
      var dobirthday = $('input#dobirthday').val();
      var natuonal_id = $('input#natuonal_id').val();
      var ins_staff_id = $('input#ins_staff_id').val();
      var num_of_dep = $('input#num_of_dep').val();
      var marital = $('select#marital').val();
      var gov_off_id = $('input#gov_off_id').val();
      var min_off_id = $('input#min_off_id').val();
      var pob = $('input#pob').val();
      var cur_resident = $('input#cur_resident').val();
      var cbo_province = $('select#cbo_province').val();
      var cbo_district = $('select#cbo_district').val();
      var cbo_commune = $('select#cbo_commune').val();
      var tel_num = $('input#tel_num').val();
      var e_mail = $('input#e_mail').val();
      var emer_cont_name = $('input#emer_cont_name').val();
      var emer_cont_phone = $('input#emer_cont_phone').val();
      var user_avertar = $('input#user_avertar').val();

    if (kh_fname == '') {
          $('input#kh_fname').css('border', 'solid 1px #f00');
      } else if (kh_lname == '') {
          $('input#kh_lname').css('border', 'solid 1px #f00');
      } else if (en_fname == '') {
          $('input#en_fname').css('border', 'solid 1px #f00');
      } else if (en_lname == '') {
          $('input#en_lname').css('border', 'solid 1px #f00');
      } else if (sex == 0) {
          $('select#sex').parent().css('border', 'solid 1px #f00');
      } else if (dobirthday == '') {
          $('input#dobirthday').css('border', 'solid 1px #f00');
      } else if (natuonal_id == '') {
          $('input#natuonal_id').css('border', 'solid 1px #f00');
      } else if (ins_staff_id == '') {
          $('input#ins_staff_id').css('border', 'solid 1px #f00');
      } else if (num_of_dep == '') {
          $('input#num_of_dep').css('border', 'solid 1px #f00');
      } else if (marital == 0) {
          $('select#marital').parent().css('border', 'solid 1px #f00');
      } else if (gov_off_id == '') {
          $('input#gov_off_id').css('border', 'solid 1px #f00');
      } else if (min_off_id == '') {
          $('input#min_off_id').css('border', 'solid 1px #f00');
      } else if (pob == '') {
          $('input#pob').css('border', 'solid 1px #f00');
      } else if (cur_resident == '') {
          $('input#cur_resident').css('border', 'solid 1px #f00');
      } else if (cbo_province == 0) {
          $('select#cbo_province').parent().css('border', 'solid 1px #f00');
      } else if (cbo_district == 0) {
          $('select#cbo_district').parent().css('border', 'solid 1px #f00');
      } else if (cbo_commune == 0) {
          $('select#cbo_commune').parent().css('border', 'solid 1px #f00');
      } else if (tel_num == '') {
          $('input#tel_num').css('border', 'solid 1px #f00');
      } else if (e_mail == '') {
          $('input#e_mail').css('border', 'solid 1px #f00');
      } else if (emer_cont_name == '') {
          $('input#emer_cont_name').css('border', 'solid 1px #f00');
      } else if (emer_cont_phone == '') {
          $('input#emer_cont_phone').css('border', 'solid 1px #f00');
      /*} else if (user_avertar == '') {
          $('input#user_avertar').parent().css('border', 'solid 1px #f00');*/
    }else{
       
      $('form#form-teacher').submit();
       alert('Update');
    }
})

</script>