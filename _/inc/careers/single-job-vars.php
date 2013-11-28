<?php 
$end_date_raw = get_field('end_date');
$end_date_convert = strtotime($end_date_raw);
$end_date = date('l jS F, Y', $end_date_convert);
$num_jobs = get_field('num_of_jobs');
$salary_range = get_field('salary_range');
$working_hrs = get_field('working_hours');
$contract = get_field('contract');

//echo '<pre>';print_r($working_hrs);echo '</pre>';

$person_requirements = get_field('person_requirements');
$company_info = get_field('company_info');

$app_method = get_field('app_method');

if (isset($app_method)) {
	
	foreach ($app_method as $method) {
		
		if ($method == 'internal') {
			$internal_message = get_field('internal_message');	
			$job_form = get_field('job_form');
		}
		
		if ($method == 'External') {
			$ext_url = get_field('ext_url');
		}
	} 
}

$images = get_field("images");
$content = get_field("content");

?>	