<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!-- Force latest IE rendering engine or ChromeFrame if installed -->
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <meta charset="utf-8">
        <title><?php echo $page_title; ?></title>
        <meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for AngularJS. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php $this->load->view('styles_view'); ?>
        <!-- CSS adjustments for browsers with JavaScript disabled -->
        <noscript><link rel="stylesheet" href="<?php echo base_url() . 'public/jQueryupload/css/jquery.fileupload-noscript.css'; ?>"></noscript>
        <noscript><link rel="stylesheet" href="<?php echo base_url() . 'public/jQueryupload/css/jquery.fileupload-ui-noscript.css'; ?>"></noscript>
        <style>
            /* Hide Angular JS elements before initializing */
            .ng-cloak {
                display: none;
            }
        </style>
    </head>
    <body>
        <!--navbar-->
        <?php $this->load->view('navbar_view'); ?>
        <div id="page-wrapper">
            <div class="container">
                <!-- The file upload form used as target for the file upload widget -->
                <form id="fileupload" action="https://jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data" data-ng-app="demo" data-ng-controller="DemoFileUploadController" data-file-upload="options" data-ng-class="{'fileupload-processing': processing() || loadingFiles}">
                    <!-- Redirect browsers with JavaScript disabled to the origin page -->
                    <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                    <div class="row fileupload-buttonbar">
                        <div class="col-lg-7">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class="btn btn-success btn-sm fileinput-button" ng-class="{disabled: disabled}">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files...</span>
                                <input type="file" name="files[]" multiple ng-disabled="disabled">
                            </span>
                            <button type="button" class="btn btn-primary btn-sm start" data-ng-click="submit()">
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>Start upload</span>
                            </button>
                            <button type="button" class="btn btn-warning btn-sm cancel" data-ng-click="cancel()">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>Cancel upload</span>
                            </button>
                            <!-- The global file processing state -->
                            <span class="fileupload-process"></span>
                        </div>
                        <!-- The global progress state -->
                        <div class="col-lg-5 fade" data-ng-class="{in: active()}">
                            <!-- The global progress bar -->
                            <div class="progress progress-striped active" data-file-upload-progress="progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                            <!-- The extended global progress state -->
                            <div class="progress-extended">&nbsp;</div>
                        </div>
                    </div>
                    <!-- The table listing the files available for upload/download -->
                    <table class="table table-condensed table-responsive table-bordered table-hover table-striped files ng-cloak">
                        <tr data-ng-repeat="file in queue" data-ng-class="{'processing': file.$processing()}">
                            <td data-ng-switch data-on="!!file.thumbnailUrl">
                                <div class="preview" data-ng-switch-when="true">
                                    <a data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery><img data-ng-src="{{file.thumbnailUrl}}" alt=""></a>
                                </div>
                                <div class="preview" data-ng-switch-default data-file-upload-preview="file"></div>
                            </td>
                            <td class="col-md-6">
                                <p class="name" data-ng-switch data-on="!!file.url">
                                    <span data-ng-switch-when="true" data-ng-switch data-on="!!file.thumbnailUrl">
                                        <a data-ng-switch-when="true" data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery>{{file.name}}</a>
                                        <a data-ng-switch-default data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}">{{file.name}}</a>
                                    </span>
                                    <span data-ng-switch-default>{{file.name}}</span>
                                </p>
                                <strong data-ng-show="file.error" class="error text-danger">{{file.error}}</strong>
                            </td>
                            <td class="col-md-5">
                                <p class="size">{{file.size| formatFileSize}}</p>
                                <div class="progress progress-striped active fade" data-ng-class="{pending: 'in'}[file.$state()]" data-file-upload-progress="file.$progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                            </td>
                            <td class="col-md-1">
                                <button type="button" class="btn btn-primary btn-sm start" data-ng-click="file.$submit()" data-ng-hide="!file.$submit || options.autoUpload" data-ng-disabled="file.$state() == 'pending' || file.$state() == 'rejected'">
                                    <i class="glyphicon glyphicon-upload"></i>
                                    <span>Start</span>
                                </button>
                                <button type="button" class="btn btn-warning btn-sm cancel" data-ng-click="file.$cancel()" data-ng-hide="!file.$cancel">
                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                    <span>Cancel</span>
                                </button>
                                <button data-ng-controller="FileDestroyController" type="button" class="btn btn-danger btn-sm destroy" data-ng-click="file.$destroy()" data-ng-hide="!file.$destroy">
                                    <i class="glyphicon glyphicon-trash"></i>
                                    <span>Delete</span>
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <!-- The blueimp Gallery widget -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        <?php $this->load->view('scripts_view'); ?>
    </body>
</html>
