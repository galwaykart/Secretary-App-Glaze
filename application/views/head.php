<!doctype html>
<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>css/bootsnip.css" rel="stylesheet" />
    <!-- <link href="<?php // echo base_url(); ?>css/notify.css" rel="stylesheet" /> -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" />
    <script src="<?php echo base_url(); ?>js/float-panel.js"></script>
    <script src="<?php echo base_url(); ?>js/ckeditor/ckeditor.js"></script>
   <!-- <script src="<?php echo base_url(); ?>js/accordion-menu.js"></script> -->
    <script src="<?php echo base_url(); ?>js/jquery-3.2.1.min.js"></script> 
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	 <link href="<?php echo base_url(); ?>calender/fullcalendar.min.css" rel="stylesheet" />
    <!-- <link href="<?php echo base_url(); ?>calender/fullcalendar.print.min.css" rel="stylesheet" /> -->
	 <script src="<?php echo base_url(); ?>calender/moment.min.js"></script>
     <script src="<?php echo base_url(); ?>calender/fullcalendar.min.js"></script>
     <script src=""<?php echo base_url(); ?>js/dragable.js"></script>
     <script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
     <script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
     <script type="text/javascript">
       AmCharts.makeChart("chartdiv",
       {
       "type": "pie",
       "balloonText": "[[title]]<br>
         <span style='font-size:14px'>
           <b>[[value]]</b> ([[percents]]%)
         </span>",
         "gradientType": "linear",
         "innerRadius": 0,
         "titleField": "category",
         "valueField": "column-1",
         "theme": "default",
         "allLabels": [],
         "balloon": {},
         "legend": {
         "enabled": true,
         "align": "center",
         "markerType": "circle"
         },
         "titles": [],
         "dataProvider": [
         {
         "category": "Task",
         "column-1": 8
         },
         {
         "category": "Appoinment",
         "column-1": 6
         },
         {
         "category": "Mettings",
         "column-1": 2
         }
         ]
         }
         );
       </script>
</head>
<body class="body style-6"><!-- body tag start -->




