<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PrEP</title>
        <?php $this->load->view('template/style_view'); ?>
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <!--navbar_view-->
        <?php $this->load->view('template/navbar_view'); ?>
        <!--prep journey-->
        <section id="prep_journey" class="section-padding">
            <div class="container">
                <div class="row">
                    <img src="<?php echo base_url() . 'public/home/img/bg-banner.jpg'; ?>" class="img-responsive">
                </div>
            </div>
        </section>
        <!--service-->
        <section id="service" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="ser-title">Our Service</h2>
                        <hr class="botm-line">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris cillum.</p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-info">
                            <div class="icon">
                                <i class="fa fa-stethoscope"></i>
                            </div>
                            <div class="icon-info">
                                <h4>24 Hour Support</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="service-info">
                            <div class="icon">
                                <i class="fa fa-ambulance"></i>
                            </div>
                            <div class="icon-info">
                                <h4>Emergency Services</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-info">
                            <div class="icon">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <div class="icon-info">
                                <h4>Medical Counseling</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="service-info">
                            <div class="icon">
                                <i class="fa fa-medkit"></i>
                            </div>
                            <div class="icon-info">
                                <h4>Premium Healthcare</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--facility chart-->
        <section id="facility" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="chart-wrapper">
                            <div class="chart-title">
                                <strong>Facility Distribution by County</strong> <span class="label label-warning">Drilldown</span>
                            </div>
                            <div class="chart-stage">
                                <div id="facility_count_distribution_chart"></div>
                            </div>
                            <div class="chart-notes">
                                <span class="facility_count_distribution_chart_heading heading"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--cta-->
        <section id="cta-1" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="schedule-tab">
                        <div class="col-md-4 col-sm-4 bor-left">
                            <div class="mt-boxy-color"></div>
                            <div class="medi-info">
                                <h3>Emergency Case</h3>
                                <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <a href="#" class="medi-info-btn">READ MORE</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="medi-info">
                                <h3>Emergency Case</h3>
                                <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <a href="#" class="medi-info-btn">READ MORE</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 mt-boxy-3">
                            <div class="mt-boxy-color"></div>
                            <div class="time-info">
                                <h3>Opening Hours</h3>
                                <table style="margin: 8px 0px 0px;" border="1">
                                    <tbody>
                                        <tr>
                                            <td>Monday - Friday</td>
                                            <td>8.00 - 17.00</td>
                                        </tr>
                                        <tr>
                                            <td>Saturday</td>
                                            <td>9.30 - 17.30</td>
                                        </tr>
                                        <tr>
                                            <td>Sunday</td>
                                            <td>9.30 - 15.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--cta-->
        <!--about-->
        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="section-title">
                            <h2 class="head-title lg-line">The Medilap <br>Ultimate Dream</h2>
                            <hr class="botm-line">
                            <p class="sec-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                            <a href="" style="color: #0cb8b6; padding-top:10px;">Know more..</a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div style="visibility: visible;" class="col-sm-9 more-features-box">
                            <div class="more-features-box-text">
                                <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
                                <div class="more-features-box-text-description">
                                    <h3>It's something important you want to know.</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
                                </div>
                            </div>
                            <div class="more-features-box-text">
                                <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
                                <div class="more-features-box-text-description">
                                    <h3>It's something important you want to know.</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ about-->
        <!--doctor team-->
        <section id="doctor-team" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="ser-title">Meet Our Doctors!</h2>
                        <hr class="botm-line">
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <img src="<?php echo base_url() . 'public/home/img/doctor1.jpg'; ?>" alt="..." class="team-img">
                            <div class="caption">
                                <h3>Jessica Wally</h3>
                                <p>Doctor</p>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <img src="<?php echo base_url() . 'public/home/img/doctor2.jpg'; ?>" alt="..." class="team-img">
                            <div class="caption">
                                <h3>Iai Donas</h3>
                                <p>Doctor</p>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <img src="<?php echo base_url() . 'public/home/img/doctor3.jpg'; ?>" alt="..." class="team-img">
                            <div class="caption">
                                <h3>Amanda Denyl</h3>
                                <p>Doctor</p>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <img src="<?php echo base_url() . 'public/home/img/doctor4.jpg'; ?>" alt="..." class="team-img">
                            <div class="caption">
                                <h3>Jason Davis</h3>
                                <p>Doctor</p>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ doctor team-->
        <!--testimonial-->
        <section id="testimonial" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="ser-title">see what patients are saying?</h2>
                        <hr class="botm-line">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="testi-details">
                            <!-- Paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="testi-info">
                            <!-- User Image -->
                            <a href="#"><img src="<?php echo base_url() . 'public/home/img/thumb.png'; ?>" alt="" class="img-responsive"></a>
                            <!-- User Name -->
                            <h3>Alex<span>Texas</span></h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="testi-details">
                            <!-- Paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="testi-info">
                            <!-- User Image -->
                            <a href="#"><img src="<?php echo base_url() . 'public/home/img/thumb.png'; ?>" alt="" class="img-responsive"></a>
                            <!-- User Name -->
                            <h3>Alex<span>Texas</span></h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="testi-details">
                            <!-- Paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="testi-info">
                            <!-- User Image -->
                            <a href="#"><img src="<?php echo base_url() . 'public/home/img/thumb.png'; ?>" alt="" class="img-responsive"></a>
                            <!-- User Name -->
                            <h3>Alex<span>Texas</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ testimonial-->
        <!--cta 2-->
        <section id="cta-2" class="section-padding">
            <div class="container">
                <div class=" row">
                    <div class="col-md-2"></div>
                    <div class="text-right-md col-md-4 col-sm-4">
                        <h2 class="section-title white lg-line">« A few words<br> about us »</h2>
                    </div>
                    <div class="col-md-4 col-sm-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typek
                        <p class="text-right text-primary"><i>— Medilap Healthcare</i></p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
        <!--contact-->
        <?php $this->load->view('template/contact_view'); ?>
        <!--footer-->
        <?php $this->load->view('template/footer_view');
        ?>
        <!--script_view-->
        <?php $this->load->view('template/script_view'); ?>

        <script>
            var chartURL = 'Home/get_chart'
            var countyURL = 'API/County'
            var filters = {}
            $(document).ready(function () {
                var charts = ['facility_count_distribution_chart']

                //Add filter to chart then load chart
                setChartFilter('')

                //Load Charts
                $.each(charts, function (key, chartName) {
                    LoadChart('#' + chartName, chartURL, chartName, {})
                });

                //Filter click Event
                $(".filter_btn").on("click", FilterBtnHandler);

                //Clear click Event
                $(".clear_btn").on("click", ClearBtnHandler);
            });

            function setChartFilter(chartName, filterURL) {
                $.ajax({
                    url: filterURL,
                    datatype: 'JSON',
                    success: function (data) {
                        filterID = '#' + chartName + '_filter'
                        //Create multiselect box
                        CreateSelectBox(filterID, '100%', 10)
                        //Add data to selectbox
                        $(filterID + " option").remove();
                        $.each(data, function (i, v) {
                            $(filterID).append($("<option value='" + v.name + "'>" + v.name.toUpperCase() + "</option>"));
                        });
                        $(filterID).multiselect('rebuild');
                        //$(filterID).data('filter_type', 'drug');
                    },
                    complete: function () {
                        LoadChart('#' + chartName, chartURL, chartName, {})
                    }
                });
            }

            function CreateSelectBox(elementID, width, limit) {
                $(elementID).val('').multiselect({
                    enableCaseInsensitiveFiltering: true,
                    enableFiltering: true,
                    disableIfEmpty: true,
                    maxHeight: 300,
                    buttonWidth: width,
                    nonSelectedText: 'None selected',
                    includeSelectAllOption: false,
                    selectAll: false,
                    onChange: function (option, checked) {
                        //Get selected options.
                        var selectedOptions = $(elementID + ' option:selected');
                        if (selectedOptions.length >= limit) {
                            //Disable all other checkboxes.
                            var nonSelectedOptions = $(elementID + ' option').filter(function () {
                                return !$(this).is(':selected');
                            });
                            nonSelectedOptions.each(function () {
                                var input = $('input[value="' + $(this).val() + '"]');
                                input.prop('disabled', true);
                                input.parent('li').addClass('disabled');
                            });
                        } else {
                            //Enable all checkboxes.
                            $(elementID + ' option').each(function () {
                                var input = $('input[value="' + $(this).val() + '"]');
                                input.prop('disabled', false);
                                input.parent('li').addClass('disabled');
                            });
                        }
                    }
                });
            }

            function LoadSpinner(divID) {
                var spinner = new Spinner().spin()
                $(divID).empty('')
                $(divID).height('auto')
                $(divID).append(spinner.el)
            }

            function LoadChart(divID, chartURL, chartName, selectedfilters) {
                //Load Spinner
                LoadSpinner(divID)
                //Load Chart*
                $(divID).load(chartURL, {'name': chartName, 'selectedfilters': selectedfilters}, function () {
                    //Pre-select filters for charts
                    $.each($(divID + '_filters').data('filters'), function (key, data) {
                        if ($.inArray(key, ['county', 'subcounty']) == -1) {
                            $(divID + "_filter").val(data).multiselect('refresh');
                            //Output filters
                            var filtermsg = '<b><u>' + key.toUpperCase() + ':</u></b><br/>'
                            if ($.isArray(data)) {
                                filtermsg += data.join('<br/>')
                            } else {
                                filtermsg += data
                            }
                            $("." + chartName + "_heading").html(filtermsg)
                        }
                    });
                });
            }

            function FilterBtnHandler(e) {
                var filterName = String($(e.target).attr("id")).replace('_btn', '')
                var filterID = "#" + filterName
                var filterType = $(filterID).data('filter_type')
                var chartName = filterName.replace('_filter', '')
                var chartID = "#" + chartName


                if ($(filterID).val() != null) {
                    filters[filterType] = $(filterID).val()
                }

                LoadChart(chartID, chartURL, chartName, filters)

                //Hide Modal
                $(filterID + '_modal').modal('hide')
            }

            function ClearBtnHandler(e) {
                var filterName = String($(e.target).attr("id")).replace('_clear_btn', '')
                var filterID = "#" + filterName
                var filterType = $(filterID).data('filter_type')

                //Clear filterType
                filters[filterType] = {}

                //Filter multiple multiselect
                $(filterID).multiselect('deselectAll', false);
                $(filterID).multiselect('updateButtonText');
                $(filterID).multiselect('refresh');

                //Trigger filter event
                $(filterID + '_btn').trigger('click');
            }
        </script>
    </body>
</html>