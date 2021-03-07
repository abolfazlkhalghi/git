$(document).ready(function () {
    window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "",
                verticalAlign: "center",
                dockInsidePlotArea: true
            },
            data: [
                {
                    // Change type to "doughnut", "line", "splineArea", etc.
                    type: "column",
                    dataPoints: [
                        {label: "1395", y: 10},
                        {label: "1396", y: 15},
                        {label: "1397", y: 25},
                        {label: "1398", y: 30},
                        {label: "1399", y: 28}
                    ]
                }
            ]
        });
        chart.render();
    }
});