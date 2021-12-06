new Chart(document.getElementById("bar-chart"), {
    type: 'horizontalBar',
    data: {
        labels: ["June", "July", "August", "September"],
        datasets: [{
            label: "Annual Report",
            backgroundColor: ["#f15025", "#a610e5", "#2b5cb9", "#740d06"],
            data: [200, 150, 100, 50]
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: 'Most Selling Product'
        }
    }
});
new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
        labels: ["May", "June", "July", "August"],
        datasets: [{
            label: "Annual Report",
            backgroundColor: ["#f15025", "#a610e5", "#2b5cb9", "#740d06"],
            data: [200, 150, 100, 50]
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Daily Orders Received'
        }
    }
});