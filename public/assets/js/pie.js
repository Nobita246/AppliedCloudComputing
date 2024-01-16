$(document).ready(function () {
    am5.ready(function () {
        var root = am5.Root.new("chartdiv");
        root.setThemes([
            am5themes_Animated.new(root)
        ]);
        var chart = root.container.children.push(
            am5percent.PieChart.new(root, {
                endAngle: 270
            })
        );
        var series = chart.series.push(
            am5percent.PieSeries.new(root, {
                valueField: "age",
                categoryField: "name",
                endAngle: 270
            })
        );
        series.states.create("hidden", {
            endAngle: -90
        });

        $.ajax({
            type: "get",
            url: "",
            data: {
                action: "getPieChartData"
            },
            success: function (response) {
                if (response.success == true) {
                    series.data.setAll(response.data);
                } else {

                }
            }
        });

        series.appear(1000, 100);
    });
});