$(function () {

    var lineData = {
        labels: ["8-5-2019", "8-6-2019", "8-7-2019", "8-8-2019", "8-9-2019"],
        datasets: [

            {
                label: "Total Hadir",
                backgroundColor: 'rgba(26,179,148,0.5)',
                borderColor: "rgba(26,179,148,0.7)",
                pointBackgroundColor: "rgba(26,179,148,1)",
                pointBorderColor: "#fff",
                data: [28, 48, 40, 19, 46]
            },{
                label: "Total Karyawan",
                backgroundColor: 'rgba(220, 220, 220, 0.5)',
                pointBorderColor: "#fff",
                data: [65, 59, 80, 81, 56]
            }
        ]
    };

    var lineOptions = {
        responsive: true
    };


    var ctx = document.getElementById("lineChart").getContext("2d");
    new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});

    var barData = {
        labels: ["8-5-2019", "8-6-2019", "8-7-2019", "8-8-2019", "8-9-2019"],
        datasets: [
            {
                label: "Hadir",
                backgroundColor: 'rgba(166, 255, 77.3)',
                pointBorderColor: "#fff",
                data: [65, 59, 80, 81, 56]
            },
            {
                label: "Sakit",
                backgroundColor: 'rgba(102, 224, 255.3)',
                borderColor: "rgba(26,179,148,0.7)",
                pointBackgroundColor: "rgba(26,179,148,1)",
                pointBorderColor: "#fff",
                data: [28, 48, 40, 19, 86]
            },
            {
                label: "Izin",
                backgroundColor: 'rgba(255, 255, 51.3)',
                pointBorderColor: "#fff",
                data: [65, 59, 80, 81, 56]
            }
        ]
    };

    var barOptions = {
        responsive: true
    };


    var ctx2 = document.getElementById("barChart").getContext("2d");
    new Chart(ctx2, {type: 'bar', data: barData, options:barOptions});

    

    var doughnutData = {
        labels: ["ACTIVE","TK","K0" ],
        datasets: [{
            data: [300,50,100],
            backgroundColor: ["#a3e1d4","#dedede","#b5b8cf"]
        }]
    } ;


    var doughnutOptions = {
        responsive: true
    };


    var ctx4 = document.getElementById("doughnutChart").getContext("2d");
    new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

//
    var lineData = {
        labels: ["Jakarta", "Jawa Tengah", "Witel Jakarta Selatan", "Witel Bogor", "Jawa Barat", "Witel Purwokerto", "Jatim Balnus"],
        datasets: [

            {
                label: "Sebaran Karyawan",
                backgroundColor: 'rgba(26,179,148,0.5)',
                borderColor: "rgba(26,179,148,0.7)",
                pointBackgroundColor: "rgba(26,179,148,1)",
                pointBorderColor: "#fff",
                data: [28, 48, 40, 19, 46, 27, 30]
            }
        ]
    };

    var lineOptions = {
        responsive: true
    };
    var ctx = document.getElementById("lineChart2").getContext("2d");
    new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});

    var radarData = {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: "rgba(220,220,220,0.2)",
                borderColor: "rgba(220,220,220,1)",
                data: [65, 59, 90, 81, 56, 55, 40]
            },
            {
                label: "My Second dataset",
                backgroundColor: "rgba(26,179,148,0.2)",
                borderColor: "rgba(26,179,148,1)",
                data: [28, 48, 40, 19, 96, 27, 100]
            }
        ]
    };

    var radarOptions = {
        responsive: true
    };

    var ctx5 = document.getElementById("radarChart").getContext("2d");
    new Chart(ctx5, {type: 'radar', data: radarData, options:radarOptions});

});