<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modal extends CI_Controller {

	
	function __construct()
    {
        parent::__construct();
		$this->load->database();
		/*cache control*/
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
    }
	
	/***default functin, redirects to login page if no admin logged in yet***/
	public function index()
	{
		
	}
	
	
	function popup($param1 = '' , $param2 = '' , $param3 = '')
	{
		// Me add
		$this->load->model('m_teacher', '', true);

		if($param1	==	'student_profile' )
		{
			$page_data['current_student_id']	=	$param2;
		}
		else if($param1	==	'student_academic_result')
		{
			$page_data['current_student_id']	=	$param2;
		}
		else if($param1	==	'student_id_card')
		{
			$page_data['current_student_id']	=	$param2;
		}
		else if($param1	==	'edit_student')
		{
			$page_data['edit_data']	=	$this->db->get_where('student' , array('student_id'=>$param2))->result_array();
			$page_data['class_id']	=	$param3;
		}
		else if($param1	==	'teacher_profile')
		{
			$page_data['current_teacher_id']	=	$param2;
		}
		else if($param1	==	'edit_teacher')
		{
			//$page_data['edit_data']	=	$this->db->get_where('teacher' , array('teacher_id'=>$param2))->result_array();
			$page_data['edit_data'] = $this->m_teacher->get_teacher_view2($param2);
			$page_data['edit_education'] = $this->m_teacher->get_teacher_view_education_training($param2);
			$page_data['edit_course'] = $this->m_teacher->get_teacher_view_education_course($param2);
			$page_data['edit_history'] = $this->m_teacher->get_teacher_view_education_history($param2);
		}
		else if($param1	==	'add_parent')
		{
			$page_data['student_id']=	$param2;
			$page_data['class_id']	=	$param3;
		}
		else if($param1	==	'edit_parent')
		{
			$page_data['edit_data']	=	$this->db->get_where('parent' , array('parent_id'=>$param2))->result_array();
			$page_data['class_id']	=	$param3;
		}
		else if($param1	==	'edit_subject')
		{
			$page_data['edit_data']	=	$this->db->get_where('subject' , array('subject_id'=>$param2))->result_array();
		}
		else if($param1	==	'edit_class')
		{
			$page_data['edit_data']	=	$this->db->get_where('class' , array('class_id'=>$param2))->result_array();
		}
		else if($param1	==	'edit_exam')
		{
			$page_data['edit_data']	=	$this->db->get_where('exam' , array('exam_id'=>$param2))->result_array();
		}
		else if($param1	==	'edit_grade')
		{
			$page_data['edit_data']	=	$this->db->get_where('grade' , array('grade_id'=>$param2))->result_array();
		}
		else if($param1	==	'edit_class_routine')
		{
			$page_data['edit_data']	=	$this->db->get_where('class_routine' , array('class_routine_id'=>$param2))->result_array();
		}
		else if($param1	==	'view_invoice')
		{
			$page_data['edit_data']	=	$this->db->get_where('invoice' , array('invoice_id'=>$param2))->result_array();
		}
		else if($param1	==	'edit_invoice')
		{
			$page_data['edit_data']	=	$this->db->get_where('invoice' , array('invoice_id'=>$param2))->result_array();
		}
		else if($param1	==	'edit_book')
		{
			$page_data['edit_data']	=	$this->db->get_where('book' , array('book_id'=>$param2))->result_array();
		}
		else if($param1	==	'edit_transport')
		{
			$page_data['edit_data']	=	$this->db->get_where('transport' , array('transport_id'=>$param2))->result_array();
		}
		else if($param1	==	'edit_dormitory')
		{
			$page_data['edit_data']	=	$this->db->get_where('dormitory' , array('dormitory_id'=>$param2))->result_array();
		}
		else if($param1	==	'edit_notice')
		{
			$page_data['edit_data']	=	$this->db->get_where('noticeboard' , array('notice_id'=>$param2))->result_array();
		}
		
		// Me add
       
        $page_data['sex'] = $this->m_teacher->get_sex();
        $page_data['marital'] = $this->m_teacher->get_marital();
        $page_data['province'] = $this->m_teacher->get_province();
        $page_data['district'] = $this->m_teacher->get_district();
        $page_data['commune'] = $this->m_teacher->get_commune();
        $page_data['employment_type'] = $this->m_teacher->get_employment_type();
        $page_data['duty_type'] = $this->m_teacher->get_duty_type();
        $page_data['duty_teaching'] = $this->m_teacher->get_duty_teaching();
        $page_data['schedule'] = $this->m_teacher->get_schedule();
        $page_data['general_education'] = $this->m_teacher->get_general_education();
        $page_data['foreign_language'] = $this->m_teacher->get_foreign_language();
        $page_data['foreign_language_level'] = $this->m_teacher->get_foreign_language_level();
        $page_data['course_type'] = $this->m_teacher->get_course_type();
        $page_data['teacher_exam'] = $this->m_teacher->get_teacher_exam();
        $page_data['member_of_pro_association'] = $this->m_teacher->get_member_of_pro_association();
        
		
		$page_data['page_name']		=	$param1;
		$this->load->view('modal' ,$page_data);
	}
}

