<div role="tabpanel" class="tab-pane" id="partner_support">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="chart-wrapper">
                    <div class="chart-title">
                        <strong>Support Implementing Partners</strong>
                        <div class="nav navbar-right">
                            <button data-toggle="modal" data-target="#support_implementing_partners_chart_filter_modal" class="btn btn-warning btn-xs">
                                <span class="glyphicon glyphicon-filter"></span>
                            </button>
                        </div>
                    </div>
                    <div class="chart-stage">
                        <div id="support_implementing_partners_chart"></div>
                    </div>
                    <div class="chart-notes">
                        <span class="support_implementing_partners_chart_heading heading"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="chart-wrapper">
                    <div class="chart-title">
                        <strong>Partner Supported Component(s)</strong>
                        <div class="nav navbar-right">
                            <button data-toggle="modal" data-target="#partner_supported_component_chart_filter_modal" class="btn btn-warning btn-xs">
                                <span class="glyphicon glyphicon-filter"></span>
                            </button>
                        </div>
                    </div>
                    <div class="chart-stage">
                        <div id="partner_supported_component_chart"></div>
                    </div>
                    <div class="chart-notes">
                        <span class="partner_supported_component_chart_heading heading"></span>
                    </div>
                </div>
            </div>
        </div><!--end row-->
        <!--modal(s)-->
        <!--support implementing partners-->
        <div class="modal fade" id="support_implementing_partners_chart_filter_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"><strong>Support Implementing Partners</strong></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <select id="support_implementing_partners_chart_filter" size="1" data-filter_type="Sub_County"></select>
                            </div>
                            <div class="col-sm-3">
                                <button id="support_implementing_partners_chart_filter_clear_btn" class="btn btn-danger btn-sm clear_btn"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
                                <button id="support_implementing_partners_chart_filter_btn" class="btn btn-warning btn-sm filter_btn"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="partner_supported_component_chart_filter_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"><strong>Partner Supported Component(s)</strong></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <select id="partner_supported_component_chart_filter" size="1" data-filter_type="Sub_County"></select>
                            </div>
                            <div class="col-sm-3">
                                <button id="partner_supported_component_chart_filter_clear_btn" class="btn btn-danger btn-sm clear_btn"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
                                <button id="partner_supported_component_chart_filter_btn" class="btn btn-warning btn-sm filter_btn"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>