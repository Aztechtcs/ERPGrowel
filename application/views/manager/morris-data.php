<?php
$r=$this->Manager_model->all_report();
///var_dump($r);

//all_report_daily();
?>

$(function() {

    Morris.Area({
        element: 'daily-area-chart',
        data: <?php echo $this->Manager_model->all_report_daily(); ?>
            <?php /* [{
            period: '2010 Q1',
            Cutting: 111,
            Swing: 1000,
            itouch: 2647
        },
        {
            period: '2010 Q2',
            Cutting: 111,
            Swing: 1000,
            itouch: 2647
        },  {
            period: '2010 Q3',
            Cutting: 2778,
            Swing: 2294,
            itouch: 2441
        }, {
            period: '2010 Q4',
            Cutting: 4912,
            Swing: 1969,
            itouch: 2501
        }, {
            period: '2010 Q5',
            Cutting: 367,
            Swing: 357,
            itouch: 589
        }, {
            period: '2011 Q1',
            Cutting: 6810,
            Swing: 1914,
            itouch: 2293
        }, {
            period: '2011 Q2',
            Cutting: 5670,
            Swing: 4293,
            itouch: 1881
        }, {
            period: '2011 Q3',
            Cutting: 4820,
            Swing: 3795,
            itouch: 1588
        }, {
            period: '2011 Q4',
            Cutting: 15073,
            Swing: 5967,
            itouch: 5175
        }, {
            period: '2012 Q1',
            Cutting: 10687,
            Swing: 4460,
            itouch: 2028
        }, {
            period: '2012 Q2',
            Cutting: 8432,
            Swing: 5713,
            itouch: 1791
        }]*/?>,
        xkey: 'datetime',
        ykeys: ['cutting', 'swing'],
        labels: ['cutting', 'swing'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

   Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });
    
});

$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: <?php echo $this->Manager_model->all_report(); ?>
            <?php /* [{
            period: '2010 Q1',
            Cutting: 111,
            Swing: 1000,
            itouch: 2647
        },
        {
            period: '2010 Q2',
            Cutting: 111,
            Swing: 1000,
            itouch: 2647
        },  {
            period: '2010 Q3',
            Cutting: 2778,
            Swing: 2294,
            itouch: 2441
        }, {
            period: '2010 Q4',
            Cutting: 4912,
            Swing: 1969,
            itouch: 2501
        }, {
            period: '2010 Q5',
            Cutting: 367,
            Swing: 357,
            itouch: 589
        }, {
            period: '2011 Q1',
            Cutting: 6810,
            Swing: 1914,
            itouch: 2293
        }, {
            period: '2011 Q2',
            Cutting: 5670,
            Swing: 4293,
            itouch: 1881
        }, {
            period: '2011 Q3',
            Cutting: 4820,
            Swing: 3795,
            itouch: 1588
        }, {
            period: '2011 Q4',
            Cutting: 15073,
            Swing: 5967,
            itouch: 5175
        }, {
            period: '2012 Q1',
            Cutting: 10687,
            Swing: 4460,
            itouch: 2028
        }, {
            period: '2012 Q2',
            Cutting: 8432,
            Swing: 5713,
            itouch: 1791
        }]*/?>,
        xkey: 'datetime',
        ykeys: ['cutting', 'swing'],
        labels: ['cutting', 'swing'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

   Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });
    
});