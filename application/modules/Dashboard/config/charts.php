<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//demand_creation_activities_in_facilities_chart_level chart
$config['demand_creation_activities_in_facilities_chart_chartview'] = 'charts/stacked_column_percent_view';
$config['demand_creation_activities_in_facilities_chart_title'] = 'Availability of Demand Creation Activities in Facilities';
$config['demand_creation_activities_in_facilities_chart_yaxis_title'] = 'Percent of 100';
$config['demand_creation_activities_in_facilities_chart_source'] = 'Source: www.commodities.nascop.org';
$config['demand_creation_activities_in_facilities_chart_has_drilldown'] = FALSE;
$config['demand_creation_activities_in_facilities_chart_filters'] = array('Sub_County', 'County');
$config['demand_creation_activities_in_facilities_chart_filters_default'] = array();

//demand_creation_activities_in_facilities_chart_level chart
$config['prep_education_availability_in_facilities_chart_chartview'] = 'charts/stacked_column_percent_view';
$config['prep_education_availability_in_facilities_chart_title'] = 'Availability of Activities about PrEP Education in Facilities';
$config['prep_education_availability_in_facilities_chart_yaxis_title'] = 'Percent of 100';
$config['prep_education_availability_in_facilities_chart_source'] = 'Source: www.commodities.nascop.org';
$config['prep_education_availability_in_facilities_chart_has_drilldown'] = FALSE;
$config['prep_education_availability_in_facilities_chart_filters'] = array('Sub_County', 'County');
$config['prep_education_availability_in_facilities_chart_filters_default'] = array();