am4core.ready(function() {

// Themes begin
    am4core.useTheme(am4themes_animated);
// Themes end

    var chart = am4core.create("chartdiv", am4charts.RadarChart);
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

    var label = chart.createChild(am4core.Label);
    label.text = "";
    label.exportable = false;

    $.ajax({
        method: "POST",
        url: "php/chart.php"
    })
        .done(function (msg) {
            ob = $.parseJSON(msg);
            console.log(ob);
            chart.data = ob;
            setData();
        });


    function setData() {
        chart.radius = am4core.percent(95);
        chart.startAngle = 270 - 180;
        chart.endAngle = 270 + 180;
        chart.innerRadius = am4core.percent(60);

        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "category";
        categoryAxis.renderer.labels.template.location = 0.5;
        categoryAxis.renderer.grid.template.strokeOpacity = 0.1;
        categoryAxis.renderer.axisFills.template.disabled = true;
        categoryAxis.mouseEnabled = false;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.tooltip.disabled = true;
        valueAxis.renderer.grid.template.strokeOpacity = 0.05;
        valueAxis.renderer.axisFills.template.disabled = true;
        valueAxis.renderer.axisAngle = 260;
        valueAxis.renderer.labels.template.horizontalCenter = "right";
        valueAxis.min = 0;

        var series1 = chart.series.push(new am4charts.RadarColumnSeries());
        series1.columns.template.radarColumn.strokeOpacity = 1;
        series1.name = "Not relevant";
        series1.dataFields.categoryX = "category";
        series1.columns.template.tooltipText = "{name}: {vw01_pct_nao_relevante}%";
        series1.dataFields.valueY = "value3";
        series1.stacked = true;

        var series2 = chart.series.push(new am4charts.RadarColumnSeries());
        series2.columns.template.radarColumn.strokeOpacity = 1;
        series2.columns.template.tooltipText = "{name}: {vw01_pct_pouco_relevante}%";
        series2.name = "Little relevant";
        series2.dataFields.categoryX = "category";
        series2.dataFields.valueY = "value2";
        series2.stacked = true;

        var series3 = chart.series.push(new am4charts.RadarColumnSeries());
        series3.columns.template.radarColumn.strokeOpacity = 1;
        series3.columns.template.tooltipText = "{name}: {vw01_pct_muito_relevante}%";
        series3.name = "Very relevant";
        series3.dataFields.categoryX = "category";
        series3.dataFields.valueY = "value1";
        series3.stacked = true;

        chart.seriesContainer.zIndex = -1;

        var slider = chart.createChild(am4core.Slider);
        slider.start = 0.85;
        slider.exportable = false;
        slider.events.on("rangechanged", function () {
            var start = slider.start;

            chart.startAngle = 270 - start * 179 - 1;
            chart.endAngle = 270 + start * 179 + 1;

            valueAxis.renderer.axisAngle = chart.startAngle;
        });
    }

}); // end am4core.ready()

