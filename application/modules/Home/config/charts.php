<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//facility_count_distribution_chart
$config['facility_count_distribution_chart_chartview'] = 'charts/column_drilldown_view';
$config['facility_count_distribution_chart_title'] = 'Facility Distribution by County';
$config['facility_count_distribution_chart_yaxis_title'] = 'Count';
$config['facility_count_distribution_chart_source'] = 'source: www.prep.org';
$config['facility_count_distribution_chart_has_drilldown'] = TRUE;
$config['facility_count_distribution_chart_filters'] = array('county', 'subcounty');
$config['facility_count_distribution_chart_filters_default'] = array();