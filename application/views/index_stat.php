<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Simplify Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css" rel="stylesheet">

    <!-- ionicons -->
    <link href="<?php echo base_url(); ?>public/css/ionicons.min.css" rel="stylesheet">

    <!-- Morris -->
    <link href="<?php echo base_url(); ?>public/css/morris.css" rel="stylesheet"/>

    <!-- Datepicker -->
    <link href="<?php echo base_url(); ?>public/css/datepicker.css" rel="stylesheet"/>

    <!-- Animate -->
    <link href="<?php echo base_url(); ?>public/css/animate.min.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="<?php echo base_url(); ?>public/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/owl.theme.default.min.css" rel="stylesheet">

    <!-- Simplify -->
    <link href="<?php echo base_url(); ?>public/css/simplify.min.css" rel="stylesheet">

</head>

<body class="overflow-hidden">
<div class="padding-md">
    <div class="row">
        <div class="col-sm-6">
            <div class="page-title">
                Dashboard
            </div>
            <div class="page-sub-header">
                Welcome Back, John Doe , <i class="fa fa-map-marker text-danger"></i> London
            </div>
        </div>
        <div class="col-sm-6 text-right text-left-sm p-top-sm">
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Select Project <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Project1</a></li>
                    <li><a href="#">Project2</a></li>
                    <li><a href="#">Project3</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Setting</a></li>
                </ul>
            </div>

            <a class="btn btn-default"><i class="fa fa-cog"></i></a>
        </div>
    </div>

    <div class="row m-top-md">
        <div class="col-lg-3 col-sm-6">
            <div class="statistic-box bg-danger m-bottom-md">
                <div class="statistic-title">
                    Today Visitors
                </div>

                <div class="statistic-value">
                    96.7k
                </div>

                <div class="m-top-md">11% Higher than last week</div>

                <div class="statistic-icon-background">
                    <i class="ion-eye"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="statistic-box bg-info m-bottom-md">
                <div class="statistic-title">
                    Today Sales
                </div>

                <div class="statistic-value">
                    751
                </div>

                <div class="m-top-md">8% Higher than last week</div>

                <div class="statistic-icon-background">
                    <i class="ion-ios7-cart-outline"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="statistic-box bg-purple m-bottom-md">
                <div class="statistic-title">
                    Today Users
                </div>

                <div class="statistic-value">
                    129
                </div>

                <div class="m-top-md">3% Higher than last week</div>

                <div class="statistic-icon-background">
                    <i class="ion-person-add"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="statistic-box bg-success m-bottom-md">
                <div class="statistic-title">
                    Today Earnings
                </div>

                <div class="statistic-value">
                    $124.45k
                </div>

                <div class="m-top-md">7% Higher than last week</div>

                <div class="statistic-icon-background">
                    <i class="ion-stats-bars"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="smart-widget widget-dark-blue">
                <div class="smart-widget-header">
                    TOTAL VISITS
									<span class="smart-widget-option">
										<span class="refresh-icon-animated">
											<i class="fa fa-circle-o-notch fa-spin"></i>
										</span>
			                            <a href="#" class="widget-toggle-hidden-option">
                                            <i class="fa fa-cog"></i>
                                        </a>
			                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
			                            <a href="#" class="widget-refresh-option">
                                            <i class="fa fa-refresh"></i>
                                        </a>
			                            <a href="#" class="widget-remove-option">
                                            <i class="fa fa-times"></i>
                                        </a>
			                        </span>
                </div>
                <div class="smart-widget-inner">
                    <div class="smart-widget-hidden-section">
                        <ul class="widget-color-list clearfix">
                            <li style="background-color:#20232b;" data-color="widget-dark"></li>
                            <li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
                            <li style="background-color:#23b7e5;" data-color="widget-blue"></li>
                            <li style="background-color:#2baab1;" data-color="widget-green"></li>
                            <li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
                            <li style="background-color:#fbc852;" data-color="widget-orange"></li>
                            <li style="background-color:#e36159;" data-color="widget-red"></li>
                            <li style="background-color:#7266ba;" data-color="widget-purple"></li>
                            <li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
                            <li style="background-color:#fff;" data-color="reset"></li>
                        </ul>
                    </div>
                    <div class="smart-widget-body no-padding">
                        <div class="padding-md">
                            <div id="totalSalesChart" class="morris-chart" style="height:250px;"></div>
                        </div>

                        <div class="bg-grey">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <h3 class="m-top-sm">999</h3>
                                    <small class="m-bottom-sm block">Total Visits</small>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <h3 class="m-top-sm">102</h3>
                                    <small class="m-bottom-sm block">New Visits</small>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <h3 class="m-top-sm">690</h3>
                                    <small class="m-bottom-sm block">Bounce Rate</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- ./smart-widget-inner -->
            </div><!-- ./smart-widget -->
        </div><!-- ./col -->
        <div class="col-lg-6">
            <div class="smart-widget widget-dark-blue">
                <div class="smart-widget-header">
                    TOTAL SALES
									<span class="smart-widget-option">
										<span class="refresh-icon-animated">
											<i class="fa fa-circle-o-notch fa-spin"></i>
										</span>
			                            <a href="#" class="widget-toggle-hidden-option">
                                            <i class="fa fa-cog"></i>
                                        </a>
			                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
			                            <a href="#" class="widget-refresh-option">
                                            <i class="fa fa-refresh"></i>
                                        </a>
			                            <a href="#" class="widget-remove-option">
                                            <i class="fa fa-times"></i>
                                        </a>
			                        </span>
                </div>
                <div class="smart-widget-inner">
                    <div class="smart-widget-hidden-section">
                        <ul class="widget-color-list clearfix">
                            <li style="background-color:#20232b;" data-color="widget-dark"></li>
                            <li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
                            <li style="background-color:#23b7e5;" data-color="widget-blue"></li>
                            <li style="background-color:#2baab1;" data-color="widget-green"></li>
                            <li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
                            <li style="background-color:#fbc852;" data-color="widget-orange"></li>
                            <li style="background-color:#e36159;" data-color="widget-red"></li>
                            <li style="background-color:#7266ba;" data-color="widget-purple"></li>
                            <li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
                            <li style="background-color:#fff;" data-color="reset"></li>
                        </ul>
                    </div>
                    <div class="smart-widget-body no-padding">
                        <div class="padding-md">
                            <div id="placeholder" style="height:250px;"></div>
                        </div>

                        <div class="bg-grey">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <h3 class="m-top-sm">3491</h3>
                                    <small class="m-bottom-sm block">Total Sales</small>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <h3 class="m-top-sm">721</h3>
                                    <small class="m-bottom-sm block">New Orders</small>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <h3 class="m-top-sm">$8103</h3>
                                    <small class="m-bottom-sm block">Total Earnings</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- ./smart-widget-inner -->
            </div><!-- ./smart-widget -->
        </div><!-- ./col -->
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6">
                    <div class="smart-widget">
                        <div class="smart-widget-header">
                            <i class="fa fa-calendar m-right-xs"></i>Calendar
											<span class="smart-widget-option">
												<span class="refresh-icon-animated">
													<i class="fa fa-circle-o-notch fa-spin"></i>
												</span>
					                            <a href="#" class="widget-toggle-hidden-option">
                                                    <i class="fa fa-cog"></i>
                                                </a>
					                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
					                            <a href="#" class="widget-refresh-option">
                                                    <i class="fa fa-refresh"></i>
                                                </a>
					                            <a href="#" class="widget-remove-option">
                                                    <i class="fa fa-times"></i>
                                                </a>
					                        </span>
                        </div>
                        <div class="smart-widget-inner">
                            <div class="smart-widget-hidden-section">
                                <ul class="widget-color-list clearfix">
                                    <li style="background-color:#20232b;" data-color="widget-dark"></li>
                                    <li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
                                    <li style="background-color:#23b7e5;" data-color="widget-blue"></li>
                                    <li style="background-color:#2baab1;" data-color="widget-green"></li>
                                    <li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
                                    <li style="background-color:#fbc852;" data-color="widget-orange"></li>
                                    <li style="background-color:#e36159;" data-color="widget-red"></li>
                                    <li style="background-color:#7266ba;" data-color="widget-purple"></li>
                                    <li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
                                    <li style="background-color:#fff;" data-color="reset"></li>
                                </ul>
                            </div>
                            <div class="smart-widget-body no-padding bg-grey">
                                <p id="calendar" class="custom-calendar no-margin full-width"></p>
                            </div>
                            <ul class="list-group no-border">
                                <li class="list-group-item">
                                    Meeting
                                    <span class="badge badge-success">7:30</span>
                                </li>
                                <li class="list-group-item">
                                    Database Migration
                                    <span class="badge badge-danger">11:15</span>
                                </li>
                            </ul>
                        </div><!-- ./smart-widget-inner -->
                    </div><!-- ./smart-widget -->
                </div><!-- ./col -->
                <div class="col-lg-6">
                    <div class="smart-widget widget-purple">
                        <div class="smart-widget-header">
                            <i class="fa fa-comment"></i> Chat
											<span class="smart-widget-option">
												<span class="refresh-icon-animated">
													<i class="fa fa-circle-o-notch fa-spin"></i>
												</span>
					                            <a href="#" class="widget-toggle-hidden-option">
                                                    <i class="fa fa-cog"></i>
                                                </a>
					                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
					                            <a href="#" class="widget-refresh-option">
                                                    <i class="fa fa-refresh"></i>
                                                </a>
					                            <a href="#" class="widget-remove-option">
                                                    <i class="fa fa-times"></i>
                                                </a>
					                        </span>
                        </div>
                        <div class="smart-widget-inner">
                            <div class="smart-widget-hidden-section">
                                <ul class="widget-color-list clearfix">
                                    <li style="background-color:#20232b;" data-color="widget-dark"></li>
                                    <li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
                                    <li style="background-color:#23b7e5;" data-color="widget-blue"></li>
                                    <li style="background-color:#2baab1;" data-color="widget-green"></li>
                                    <li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
                                    <li style="background-color:#fbc852;" data-color="widget-orange"></li>
                                    <li style="background-color:#e36159;" data-color="widget-red"></li>
                                    <li style="background-color:#7266ba;" data-color="widget-purple"></li>
                                    <li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
                                    <li style="background-color:#fff;" data-color="reset"></li>
                                </ul>
                            </div>
                            <div class="smart-widget-body">
                                <div id="chatScroll">
                                    <ul class="chat">
                                        <li class="left clearfix">
															<span class="chat-img pull-left">
																<img
                                                                    src="<?php echo base_url(); ?>public/images/profile/profile2.jpg"
                                                                    alt="User Avatar">
															</span>

                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <strong class="primary-font">John Doe</strong>
                                                    <small class="pull-right text-muted"><i class="fa fa-clock-o"></i>
                                                        12 mins ago
                                                    </small>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="right clearfix">
															<span class="chat-img pull-right">
																<img src="images/profile/profile3.jpg"
                                                                     alt="User Avatar">
															</span>

                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <strong class="primary-font">Jane Doe</strong>
                                                    <small class="pull-right text-muted"><i class="fa fa-clock-o"></i>
                                                        13 mins ago
                                                    </small>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                                    bibendum ornare dolor, quis ullamcorper ligula sodales at.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="left clearfix">
															<span class="chat-img pull-left">
																<img src="images/profile/profile2.jpg"
                                                                     alt="User Avatar">
															</span>

                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <strong class="primary-font">John Doe</strong>
                                                    <small class="pull-right text-muted"><i class="fa fa-clock-o"></i>
                                                        20 mins ago
                                                    </small>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="right clearfix">
															<span class="chat-img pull-right">
																<img src="images/profile/profile3.jpg"
                                                                     alt="User Avatar">
															</span>

                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <strong class="primary-font">Jane Doe</strong>
                                                    <small class="pull-right text-muted"><i class="fa fa-clock-o"></i>
                                                        25 mins ago
                                                    </small>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                                    bibendum ornare dolor, quis ullamcorper ligula sodales at.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="smart-widget-footer">
                                <div class="input-group">
                                    <input id="btn-input" type="text" class="form-control input-sm"
                                           placeholder="type your message here...">
													<span class="input-group-btn">
														<button class="btn btn-success btn-sm no-shadow" id="btn-chat">
                                                            Send
                                                        </button>
													</span>
                                </div><!-- /input-group -->
                            </div><!-- ./smart-widget-footer -->
                        </div><!-- ./smart-widget-inner -->
                    </div><!-- ./smart-widget -->
                </div><!-- ./col -->
            </div><!-- ./row -->

            <div class="smart-widget">
                <div class="smart-widget-header">
                    Website Statistic
									<span class="smart-widget-option">
										<span class="refresh-icon-animated">
											<i class="fa fa-circle-o-notch fa-spin"></i>
										</span>
			                            <a href="#" class="widget-toggle-hidden-option">
                                            <i class="fa fa-cog"></i>
                                        </a>
			                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
			                            <a href="#" class="widget-refresh-option">
                                            <i class="fa fa-refresh"></i>
                                        </a>
			                            <a href="#" class="widget-remove-option">
                                            <i class="fa fa-times"></i>
                                        </a>
			                        </span>
                </div>
                <div class="smart-widget-inner table-responsive">
                    <div class="smart-widget-hidden-section">
                        <ul class="widget-color-list clearfix">
                            <li style="background-color:#20232b;" data-color="widget-dark"></li>
                            <li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
                            <li style="background-color:#23b7e5;" data-color="widget-blue"></li>
                            <li style="background-color:#2baab1;" data-color="widget-green"></li>
                            <li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
                            <li style="background-color:#fbc852;" data-color="widget-orange"></li>
                            <li style="background-color:#e36159;" data-color="widget-red"></li>
                            <li style="background-color:#7266ba;" data-color="widget-purple"></li>
                            <li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
                            <li style="background-color:#fff;" data-color="reset"></li>
                        </ul>
                    </div>
                    <table class="table table-striped no-margin">
                        <thead>
                        <tr>
                            <th class="text-right">Date</th>
                            <th class="text-right">Database Usage</th>
                            <th class="text-right">CPU Usage</th>
                            <th class="text-right">Memory Usage</th>
                            <th class="text-right">Total Disk Usage</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-right">July, 11</td>
                            <td class="text-right">31.05%</td>
                            <td class="text-right">65.12%</td>
                            <td class="text-right">86.41%</td>
                            <td class="text-right">
                                <div class="progress progress-sm inline-block m-bottom-none"
                                     style="width:100px; margin-top:6px">
                                    <div class="progress-bar progress-bar-success" style="width: 54.41%;">
                                        <span class="sr-only">54.41% Complete</span>
                                    </div>
                                </div>

                                <span class="m-left-sm vertical-top">54.41%</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">July, 12</td>
                            <td class="text-right">48.99%</td>
                            <td class="text-right">72.31%</td>
                            <td class="text-right">74.21%</td>
                            <td class="text-right">
                                <div class="progress progress-sm inline-block m-bottom-none"
                                     style="width:100px; margin-top:6px">
                                    <div class="progress-bar progress-bar-warning" style="width: 69.92%;">
                                        <span class="sr-only">69.92% Complete</span>
                                    </div>
                                </div>

                                <span class="m-left-sm vertical-top">69.92%</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">July, 13</td>
                            <td class="text-right">13.68%</td>
                            <td class="text-right">32.31%</td>
                            <td class="text-right">50.82%</td>
                            <td class="text-right">
                                <div class="progress progress-sm inline-block m-bottom-none"
                                     style="width:100px; margin-top:6px">
                                    <div class="progress-bar progress-bar-danger" style="width: 43.17%;">
                                        <span class="sr-only">43.17% Complete</span>
                                    </div>
                                </div>

                                <span class="m-left-sm vertical-top">43.17%</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">July, 14</td>
                            <td class="text-right">9.23%</td>
                            <td class="text-right">11.91%</td>
                            <td class="text-right">10.21%</td>
                            <td class="text-right">
                                <div class="progress progress-sm inline-block m-bottom-none"
                                     style="width:100px; margin-top:6px">
                                    <div class="progress-bar progress-bar-success" style="width: 12.11%;">
                                        <span class="sr-only">12.11% Complete</span>
                                    </div>
                                </div>

                                <span class="m-left-sm vertical-top">12.11%</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- ./smart-widget-inner -->
            </div><!-- ./smart-widget -->
        </div><!-- ./col -->
        <div class="col-lg-4">
            <div class="smart-widget">
                <div class="smart-widget-header">
                    <span class="badge badge-danger pull-right">10</span>
                    To Do List
                </div>
                <div class="smart-widget-inner">
                    <div class="smart-widget-body clearfix">
                        <div class="search-input pull-left">
                            <input type="text" class="form-control input-sm">
                            <a href="#" class="input-icon text-normal"><i class="ion-ios7-search-strong"></i></a>
                        </div>
                        <a class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Add Task</a>
                    </div>
                    <ul class="list-group to-do-list sortable-list no-border">
                        <li class="list-group-item" draggable="true">
                            <div class="custom-checkbox todo-checkbox">
                                <input type="checkbox" value="None" id="todo-check1">
                                <label for="todo-check1"></label>
                            </div>
                            SEO Optimisation
                            <div class="remove-list">
                                <i class="ion-close"></i>
                            </div>
                        </li>
                        <li class="list-group-item" draggable="true">
                            <div class="custom-checkbox todo-checkbox">
                                <input type="checkbox" id="todo-check2">
                                <label for="todo-check2"></label>
                            </div>
                            Unit Testing
                            <div class="remove-list">
                                <i class="ion-close"></i>
                            </div>
                        </li>
                        <li class="list-group-item" draggable="true">
                            <div class="custom-checkbox todo-checkbox">
                                <input type="checkbox" id="todo-check3">
                                <label for="todo-check3"></label>
                            </div>
                            Mobile Development
                            <div class="remove-list">
                                <i class="ion-close"></i>
                            </div>
                        </li>
                        <li class="list-group-item" draggable="true">
                            <div class="custom-checkbox todo-checkbox">
                                <input type="checkbox" id="todo-check4">
                                <label for="todo-check4"></label>
                            </div>
                            Database Migration
                            <div class="remove-list">
                                <i class="ion-close"></i>
                            </div>
                        </li>
                        <li class="list-group-item" draggable="true">
                            <div class="custom-checkbox todo-checkbox">
                                <input type="checkbox" id="todo-check5">
                                <label for="todo-check5"></label>
                            </div>
                            New Frontend Layout
                            <div class="remove-list">
                                <i class="ion-close"></i>
                            </div>
                        </li>
                        <li class="list-group-item" draggable="true">
                            <div class="custom-checkbox todo-checkbox">
                                <input type="checkbox" id="todo-check6">
                                <label for="todo-check6"></label>
                            </div>
                            Bug Fixes
                            <div class="remove-list">
                                <i class="ion-close"></i>
                            </div>
                        </li>
                    </ul>
                </div><!-- ./smart-widget-inner -->
            </div><!-- ./smart-widget -->
            <div class="task-widget">
                <div class="task-widget-body clearfix">
                    <div class="pie-chart-wrapper">
                        <div class="chart task-pie-chart line-normal" data-percent="73">
                            <h1 class="m-top-lg m-bottom-none">73</h1>

                            <div>Percent</div>
                        </div>
                    </div>
                    <div class="widget-detail">
                        <small class="text-upper text-muted block font-sm">Task Completed</small>
                        <h1 class="no-margin">4312</h1>
                    </div>
                </div><!-- ./task-widget-body -->
                <div class="task-widget-statatistic">
                    <ul class="clearfix">
                        <li class="bg-grey border-success">
                            <div class="text-muted text-upper font-sm">Remaining</div>
                            2311
                        </li>
                        <li class="bg-grey border-danger">
                            <div class="text-muted text-upper font-sm">In Progress</div>
                            3212
                        </li>
                        <li class="bg-grey border-purple">
                            <div class="text-muted text-upper font-sm">Budget</div>
                            $17.1M
                        </li>
                    </ul><!-- ./row -->
                </div>
            </div><!-- ./task-widget -->
        </div><!-- ./col -->
    </div><!-- ./row -->

    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default weather-widget">
                <div class="panel-body bg-success text-white">
                    <div class="h4 text-white text-center">Today Weather</div>

                    <div class="m-top-md m-bottom-md text-center">
                        <canvas id="skycon1" width="120" height="120"></canvas>
                    </div>

                    <div class="degree-text text-center">22°</div>
                </div>
                <div class="panel-footer bg-white text-center padding-md">
                    <div class="h4 text-upper">New York <i class="fa fa-map-marker"></i></div>
                    <div class="text-muted font-12 m-top-xs">Rainy Day</div>
                </div>
            </div><!-- ./panel -->
        </div><!-- ./col -->
        <div class="col-md-3">
            <div class="panel panel-default weather-widget">
                <div class="panel-body bg-warning text-white">
                    <div class="h4 text-white text-center">Today Weather</div>

                    <div class="m-top-md m-bottom-md text-center">
                        <canvas id="skycon2" width="120" height="120"></canvas>
                    </div>

                    <div class="degree-text text-center">37°</div>
                </div>
                <div class="panel-footer bg-white text-center padding-md">
                    <div class="h4 text-upper">London <i class="fa fa-map-marker"></i></div>
                    <div class="text-muted font-12 m-top-xs">Cloudy Day</div>
                </div>
            </div><!-- ./panel -->
        </div><!-- ./col -->
        <div class="col-md-3">
            <div class="panel panel-default weather-widget">
                <div class="panel-body bg-danger text-white">
                    <div class="h4 text-white text-center">Today Weather</div>

                    <div class="m-top-md m-bottom-md text-center">
                        <canvas id="skycon3" width="120" height="120"></canvas>
                    </div>

                    <div class="degree-text text-center">21°</div>
                </div>
                <div class="panel-footer bg-white text-center padding-md">
                    <div class="h4 text-upper">Bangkok <i class="fa fa-map-marker"></i></div>
                    <div class="text-muted font-12 m-top-xs">Wind</div>
                </div>
            </div><!-- ./panel -->
        </div><!-- ./col -->
        <div class="col-md-3">
            <div class="panel panel-default weather-widget">
                <div class="panel-body bg-info text-white">
                    <div class="h4 text-white text-center">Today Weather</div>

                    <div class="m-top-md m-bottom-md text-center">
                        <canvas id="skycon4" width="120" height="120"></canvas>
                    </div>

                    <div class="degree-text text-center">14°</div>
                </div>
                <div class="panel-footer bg-white text-center padding-md">
                    <div class="h4 text-upper">Tokyo <i class="fa fa-map-marker"></i></div>
                    <div class="text-muted font-12 m-top-xs">Clear Day</div>
                </div>
            </div><!-- ./panel -->
        </div><!-- ./col -->
    </div>
</div><!-- ./padding-md -->

<a href="#" class="scroll-to-top hidden-print"><i class="fa fa-chevron-up fa-lg"></i></a>

<!-- Delete Widget Confirmation -->
<div class="custom-popup delete-widget-popup delete-confirmation-popup" id="deleteWidgetConfirm">
    <div class="popup-header text-center">
				<span class="fa-stack fa-4x">
				  <i class="fa fa-circle fa-stack-2x"></i>
				  <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
				</span>
    </div>
    <div class="popup-body text-center">
        <h5>Are you sure to delete this widget?</h5>
        <strong class="block m-top-xs"><i class="fa fa-exclamation-circle m-right-xs text-danger"></i>This action cannot
            be undone</strong>

        <div class="text-center m-top-lg">
            <a class="btn btn-success m-right-sm remove-widget-btn">Delete</a>
            <a class="btn btn-default deleteWidgetConfirm_close">Cancel</a>
        </div>
    </div>
</div>


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- Jquery -->
<script src="<?php echo base_url(); ?>public/js/jquery-1.11.1.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
<!-- Flot -->
<script src='<?php echo base_url(); ?>public/js/jquery.flot.min.js'></script>
<!-- Slimscroll -->
<script src='<?php echo base_url(); ?>public/js/jquery.slimscroll.min.js'></script>
<!-- Morris -->
<script src='<?php echo base_url(); ?>public/js/rapheal.min.js'></script>
<script src='<?php echo base_url(); ?>public/js/morris.min.js'></script>
<!-- Datepicker -->
<script src='<?php echo base_url(); ?>public/js/uncompressed/datepicker.js'></script>

<!-- Sparkline -->
<script src='<?php echo base_url(); ?>public/js/sparkline.min.js'></script>

<!-- Skycons -->
<script src='<?php echo base_url(); ?>public/js/uncompressed/skycons.js'></script>

<!-- Popup Overlay -->
<script src='<?php echo base_url(); ?>public/js/jquery.popupoverlay.min.js'></script>

<!-- Easy Pie Chart -->
<script src='<?php echo base_url(); ?>public/js/jquery.easypiechart.min.js'></script>

<!-- Sortable -->
<script src='<?php echo base_url(); ?>public/js/uncompressed/jquery.sortable.js'></script>

<!-- Owl Carousel -->
<script src='<?php echo base_url(); ?>public/js/owl.carousel.min.js'></script>

<!-- Modernizr -->
<script src='<?php echo base_url(); ?>public/js/modernizr.min.js'></script>

<!-- Simplify -->
<script src="<?php echo base_url(); ?>public/js/simplify/simplify.js"></script>
<script src="<?php echo base_url(); ?>public/js/simplify/simplify_dashboard.js"></script>


<script>
    $(function () {
        $('.chart').easyPieChart({
            easing: 'easeOutBounce',
            size: '140',
            lineWidth: '7',
            barColor: '#7266ba',
            onStep: function (from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            }
        });

        $('.sortable-list').sortable();

        $('.todo-checkbox').click(function () {

            var _activeCheckbox = $(this).find('input[type="checkbox"]');

            if (_activeCheckbox.is(':checked')) {
                $(this).parent().addClass('selected');
            }
            else {
                $(this).parent().removeClass('selected');
            }

        });

        //Delete Widget Confirmation
        $('#deleteWidgetConfirm').popup({
            vertical: 'top',
            pagecontainer: '.container',
            transition: 'all 0.3s'
        });
    });

</script>

</body>
</html>
