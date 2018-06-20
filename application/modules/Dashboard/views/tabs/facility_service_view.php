<div role="tabpanel" class="tab-pane active" id="facility_service">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="chart-wrapper">
                    <div class="chart-title">
                        <strong>Facility Ownership</strong>
                        <div class="nav navbar-right">
                            <button data-toggle="modal" data-target="#facility_ownership_chart_filter_modal" class="btn btn-warning btn-xs">
                                <span class="glyphicon glyphicon-filter"></span>
                            </button>
                        </div>
                    </div>
                    <div class="chart-stage">
                        <div id="facility_ownership_chart"></div>
                    </div>
                    <div class="chart-notes">
                        <span class="facility_ownership_chart_heading heading"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="chart-wrapper">
                    <div class="chart-title">
                        <strong>Facility Level</strong>
                        <div class="nav navbar-right">
                            <button data-toggle="modal" data-target="#facility_level_chart_filter_modal" class="btn btn-warning btn-xs">
                                <span class="glyphicon glyphicon-filter"></span>
                            </button>
                        </div>
                    </div>
                    <div class="chart-stage">
                        <div id="facility_level_chart"></div>
                    </div>
                    <div class="chart-notes">
                        <span class="facility_level_chart_heading heading"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal(s)-->
<!--facility ownership modal-->
<div class="modal fade" id="facility_ownership_chart_filter_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"><strong>Facility Ownership</strong></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-9">
                        <select id="facility_ownership_chart_filter" size="1" data-filter_type="County"></select>
                    </div>
                    <div class="col-sm-3">
                        <button id="facility_ownership_chart_filter_clear_btn" class="btn btn-danger btn-sm clear_btn"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
                        <button id="facility_ownership_chart_filter_btn" class="btn btn-warning btn-sm filter_btn"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--facility level modal-->
<div class="modal fade" id="facility_level_chart_filter_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"><strong>Facility Level</strong></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-9">
                        <select id="facility_level_chart_filter" size="1" data-filter_type="County"></select>
                    </div>
                    <div class="col-sm-3">
                        <button id="facility_level_chart_filter_clear_btn" class="btn btn-danger btn-sm clear_btn"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
                        <button id="facility_level_chart_filter_btn" class="btn btn-warning btn-sm filter_btn"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>