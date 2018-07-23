        <link rel="stylesheet" href="<?php echo base_url();?>template/css/font.css">
		<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800">-->
        <link href="<?php echo base_url();?>template/css/ekattor.css" media="screen" rel="stylesheet" type="text/css" />

        <!--[if lt IE 9]>
        <script src="<?php echo base_url();?>template/js/html5shiv.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>template/js/excanvas.js" type="text/javascript"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>template/js/ekattor.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>template/js/custom.js" type="text/javascript"></script>

        <style type="text/css">
            .label-box {
                text-align: right;
            }

            .required {
                color: red;
                font-size: 15px;
                margin-bottom: 0px;
            }

            table,
            tr,
            td {
                padding: 5px;
            }
        </style>
        <?php
		//////////LOADING SYSTEM SETTINGS FOR ALL PAGES AND ACCOUNTS/////////
		
		$system_name	=	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
		$system_title	=	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
