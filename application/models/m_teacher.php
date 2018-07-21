<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_teacher extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }


   function get_sex() 
    {  
        $this->db->select('*');    
        $this->db->from('tbl_sex');       
        $query = $this->db->get();              
            if ($query->num_rows()>0) {
                foreach ($query->result_array() as $row) {
                    $data[]=$row;
                }
                return $data;
            }
    }

    function get_marital() 
    {  
        $this->db->select('*');    
        $this->db->from('tbl_marital');       
        $query = $this->db->get();              
            if ($query->num_rows()>0) {
                foreach ($query->result_array() as $row) {
                    $data[]=$row;
                }
                return $data;
            }
    }
	function get_province() 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_province');       
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}
	function get_district($prov_id='') 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_district');
	    if ($prov_id != '') {
	    	 $this->db->where('prov_id',$prov_id);   
	    }
	        
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}

	function get_commune($dist_id='') 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_commune');
	     if ($dist_id != '') {
	    	$this->db->where('dist_id',$dist_id);   
	    }
	          
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}

	function get_village() 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_village');       
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}

	function get_employment_type() 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_employment_type');       
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}

	function get_duty_type() 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_duty_type');       
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}

	function get_duty_teaching() 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_duty_teaching');       
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}

	function get_schedule() 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_schedule');       
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}

	function get_general_education() 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_general_education');       
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}

	function get_foreign_language() 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_foreign_language');       
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}

	function get_foreign_language_level() 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_foreign_language_level');       
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}

	function get_course_type() 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_course_type');       
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}

	function get_teacher_exam() 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_teacher_exam');       
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}

	function get_member_of_pro_association() 
	{  
	    $this->db->select('*');    
	    $this->db->from('tbl_member_of_pro_association');       
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }
	}

	function get_teacher_view($id ='') 
	{  
		$where = '';
		$group = ' Group By tea.teacher_id';
		if ($id <> '') {
			$where = " Where tea.teacher_id =".$id;
			
		}
		$sql="SELECT tea.*,sex.*,emp.*,emp_c.*,emp_e.*,emp_q.*,emp_h.*,emp_t.*,duty_t.*,duty_teach.*,sch.*,cour.*,gen_edu.*,fore_lang.*,fore_lang_l.*,tec_e.*,mem_ass.* from
							 teacher as tea join
							 tbl_sex as sex join
							 tbl_employment as emp join
							 tbl_employment_course as emp_c join
							 tbl_employment_education_training as emp_e join
							 tbl_employment_qualification as emp_q join
							 tbl_employment_history as emp_h join 
							 tbl_employment_type as emp_t join 
							 tbl_duty_type as duty_t join 
							 tbl_duty_teaching as duty_teach join
							 tbl_schedule as sch join 
							 tbl_course_type as cour join
							 tbl_general_education as gen_edu join 
							 tbl_foreign_language as fore_lang join
							 tbl_foreign_language_level as fore_lang_l join
							 tbl_teacher_exam as tec_e join
							 tbl_member_of_pro_association as mem_ass on
							 tea.sex_id = sex.sex_id and
							 tea.teacher_id = emp.teacher_id and
							 tea.teacher_id = emp_c.teacher_id and
							 tea.teacher_id = emp_e.teacher_id and
							 tea.teacher_id = emp_q.teacher_id and
							 tea.teacher_id = emp_h.teacher_id and
							 emp.emp_type_id = emp_t.emp_type_id and
							 emp.duty_type_id = duty_t.duty_type_id and
							 emp.non_teach_staff_duty_id = duty_teach.duty_teach_id and
							 emp.staff_work_sch = sch.sch_id and
							 emp_c.cour_type_id = cour.cour_type_id and
							 emp_e.gen_edu_id = gen_edu.gen_edu_id and
							 emp_e.fore_lang_id = fore_lang.fore_lang_id and

							/* emp_e.listen_level_id = fore_lang_l.fore_lang_level_id and 
							 emp_e.speak_level_id = fore_lang_l.fore_lang_level_id and 
							 emp_e.read_level_id = fore_lang_l.fore_lang_level_id and 
							 emp_e.wirte_level_id = fore_lang_l.fore_lang_level_id and*/

							 emp_e.listen_level_id and 
							 emp_e.speak_level_id and 
							 emp_e.read_level_id and 
							 emp_e.wirte_level_id  = fore_lang_l.fore_lang_level_id and
							 
							 emp_q.tea_exam_id = tec_e.tea_exam_id and
							 emp_q.mem_ass_id = mem_ass.mem_ass_id
							  ";
			$query=$this->db->query($sql.$where.$group);
			if ($query->num_rows()>0) {
				foreach ($query->result_array() as $row) {
					$data[]=$row;
				}
				return $data;
			}
	}
	function get_teacher_view_education_training($id =''){		
		$sql="SELECT tea.*,emp_e.*,gen_edu.*,fore_lang.*,fore_lang_l.* from
							 teacher as tea join							
							 tbl_employment_education_training as emp_e join							
							 tbl_general_education as gen_edu join
							 tbl_foreign_language as fore_lang join
							 tbl_foreign_language_level as fore_lang_l on							
							 tea.teacher_id = emp_e.teacher_id and							
							 emp_e.gen_edu_id = gen_edu.gen_edu_id and
							 emp_e.fore_lang_id = fore_lang.fore_lang_id and
							 emp_e.listen_level_id and 
							 emp_e.speak_level_id and 
							 emp_e.read_level_id and 
							 emp_e.wirte_level_id  = fore_lang_l.fore_lang_level_id 
							 Where emp_e.teacher_id =$id
	
							  ";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0) {
				foreach ($query->result_array() as $row) {
					$data[]=$row;
				}
				return $data;
			}
	}
	
	function get_teacher_view_education_course($id =''){
		$sql="SELECT tea.*,emp_c.*,cour.* from
							 teacher as tea join							
							 tbl_employment_course as emp_c join							
							 tbl_course_type as cour on							
							 tea.teacher_id = emp_c.teacher_id and							
							 emp_c.cour_type_id = cour.cour_type_id
							 Where emp_c.teacher_id =$id
							  ";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0) {
				foreach ($query->result_array() as $row) {
					$data[]=$row;
				}
				return $data;
			}
	}
	function get_teacher_view_education_history($id =''){
		$this->db->select('*');    
	    $this->db->from('tbl_employment_history');       
	    $this->db->where('teacher_id',$id);       
	    $query = $this->db->get();              
	        if ($query->num_rows()>0) {
	            foreach ($query->result_array() as $row) {
	                $data[]=$row;
	            }
	            return $data;
	        }	
	}


}

