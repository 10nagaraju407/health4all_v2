<!-- This layout is designed to print the details for three times apart from all other forms. This form also includes MLC Reasons 	-->
	<style>
	@media print,screen{
		.column{
			position:relative;float:left;width:33%;margin:5px 0px;
		}
		.container-print{
			font-size:14px;
			font-family:"Trebuchet MS",serif;
			height:25%;
			border:1px solid #ccc;
			border-radius:0.3em;
			padding:5px 10px;
			margin-bottom:1.5px;
			
		}
		.heading{
			font-size:18px;
			font-weight:bold;
			text-decoration:underline;
			width:100%;
			text-align:center;
			font-family:"Trebuchet MS",serif;
			margin:15px; 
		}
	}
	</style>
		<div class="container-print">
			<div class="heading">
				Rajiv Gandhi Institute of Medical Sciences, Kadapa
			</div>
			<div>
			<div class="column">
				<b>IP No:</b> <span style="font-size:2.5em;position:absolute;margin:-20px 0 0 10px;"> <?php echo $registered->hosp_file_no;?></span>
			</div>
			<div  class="column">
				<b>Admit Date:</b> <?php echo date("d-M-Y",strtotime($registered->admit_date)); ?>
			</div>
			<div  class="column">
				<b>Admit Time:</b> <?php echo date("g:ia",strtotime($registered->admit_time)); ?>
			</div>
			</div>
			<div>
			<div  class="column">
				<b>Name:</b> <?php echo $registered->name; ?>
			</div>
			<div  class="column">
				<b>Gender/Age:</b> 
				<?php echo $registered->gender."/";
				if($registered->age_years!=0) echo $registered->age_years." Years "; 
				if($registered->age_months!=0) echo $registered->age_months." Months "; 
				if($registered->age_days!=0) echo $registered->age_days." Days "; 
				if($registered->age_years==0 && $registered->age_months == 0 && $registered->age_days==0) echo "0 Days";
				?>
			</div>
			<div   class="column">
				<b>Department:</b> <?php echo $registered->department; ?>			
			</div>
			</div>
			<div>
			<div  class="column">
				<b>Parent/Spouse:</b> <?php echo $registered->parent_spouse; ?>
			</div>
			<div   class="column">
				<b>Address:</b> <?php echo $registered->address.",".$registered->place.",".$registered->district; ?>			
			</div>
			<div  class="column">
				<?php 
				if($registered->unit_name || $registered->area_name) { ?>
				<b>Unit/Area:</b> <?php echo $registered->unit_name." / ".$registered->area_name; 
				}
				?>
			</div>
			</div>
			<div>
			<div  class="column">
				<b>Phone:</b> <?php echo $registered->phone; ?>
			</div>
			<?php if($registered->mlc==1) { ?>
			<div  class="column"><?php echo "<b>MLC No:</b>" .$registered->mlc_number; ?>
			</div>
			<div class="column">
				<?php echo "<b>PS Name:</b>" .$registered->ps_name;?>
			</div>
			<div class="column">
				<?php echo "";?>
			</div>
			<!-- To display the MLC Reason we use "presenting_complaints" field of "patient_visits" table-->
			<div class="column">
				<?php if($registered->presenting_complaints != NULL) {echo "<b>MLC Reason:</b> ".$registered->presenting_complaints;}?>			
			</div>
			<?php } ?>
			</div>
		</div>	
		<div  class="row container-print">
			<div class="heading">
				Rajiv Gandhi Institute of Medical Sciences, Kadapa
			</div>
			<div>
			<div class="column">
				<b>IP No:</b> <span style="font-size:2.5em;position:absolute;margin:-20px 0 0 10px;"> <?php echo $registered->hosp_file_no;?></span>
			</div>
			<div  class="column">
				<b>Admit Date:</b> <?php echo date("d-M-Y",strtotime($registered->admit_date)); ?>
			</div>
			<div  class="column">
				<b>Admit Time:</b> <?php echo date("g:ia",strtotime($registered->admit_time)); ?>
			</div>
			</div>
			<div>
			<div  class="column">
				<b>Name:</b> <?php echo $registered->name; ?>
			</div>
			<div  class="column">
				<b>Gender/Age:</b> 
				<?php echo $registered->gender."/";
				if($registered->age_years!=0) echo $registered->age_years." Years "; 
				if($registered->age_months!=0) echo $registered->age_months." Months "; 
				if($registered->age_days!=0) echo $registered->age_days." Days "; 
				if($registered->age_years==0 && $registered->age_months == 0 && $registered->age_days==0) echo "0 Days";
				?>
			</div>
			<div   class="column">
				<b>Department:</b> <?php echo $registered->department; ?>			
			</div>
			</div>
			<div>
			<div  class="column">
				<b>Parent/Spouse:</b> <?php echo $registered->parent_spouse; ?>
			</div>
			<div   class="column">
				<b>Address:</b> <?php echo $registered->address.",".$registered->place.",".$registered->district; ?>			
			</div>
			<div  class="column">
				<?php 
				if($registered->unit_name || $registered->area_name) { ?>
				<b>Unit/Area:</b> <?php echo $registered->unit_name." / ".$registered->area_name; 
				}
				?>
			</div>
			</div>
			<div>
			<div  class="column">
				<b>Phone:</b> <?php echo $registered->phone; ?>
			</div>
			<?php if($registered->mlc==1) { ?>
			<div  class="column"><?php echo "<b>MLC No:</b>" .$registered->mlc_number; ?>
			</div>
			<div class="column">
				<?php echo "<b>PS Name:</b>" .$registered->ps_name;?>
			</div>
			<div class="column">
				<?php echo "";?>
			</div>
			<!-- To display the MLC Reason we use "presenting_complaints" field of "patient_visits" table-->
			<div class="column">
				<?php if($registered->presenting_complaints != NULL) {echo "<b>MLC Reason:</b> ".$registered->presenting_complaints;}?>			
			</div>
			<?php } ?>
			</div>
		</div>	
	