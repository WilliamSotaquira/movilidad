<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

<!-- Set zp -->
<div class="set-wrapper zp">
    </div>

<canvas height="200" id="particulares" width="400"></canvas>
<script>
    var vp = document.getElementById('particulares').getContext('2d');
    var particulares = new Chart(vp, {
        type: 'bar',
        data: {
            labels: ['2023', '2027', '2031', '2035', '2040'],
            datasets: [{
                label: 'Altas',
                data: [69, 31, 0, 0, 0],
                backgroundColor: "#3d4a1c95",
                borderColor: "#4d541f",
                borderWidth: 1
            }, {
                label: 'Bajas',
                data: [25, 42, 45, 24, 0],
                backgroundColor: "#828F2695",
                borderColor: "#828F26",
                borderWidth: 1
            }, {
                label: 'Cero',
                data: [6, 27, 55, 76, 100],
                backgroundColor: "#bed00095",
                borderColor: "#BED000",
                borderWidth: 1
            }],
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Vehículos particulares',
                    color: '#4d541f',
                    font: {
                        family: 'Montserrat',
                        size: 24,
                        weight: 'bold',
                        lineHeight: 1.2,
                    },
                    padding: {
                        top: 32,
                        left: 0,
                        right: 0,
                        bottom: 32
                    },
                },
                datalabels: {
                    color: 'blue',
                    labels: {
                        title: {
                            font: {
                                weight: 'bold'
                            }
                        },
                        value: {
                            color: 'green'
                        }
                    }
                }
            },
            scales: {
                x: {
                    stacked: true,
                    title: {
                        display: true,
                        text: 'Año',
                        color: '#363636',
                        font: {
                            family: 'Montserrat',
                            size: 16,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: {
                            top: 20,
                            left: 0,
                            right: 0,
                            bottom: 0
                        }
                    }
                },
                y: {
                    stacked: true,
                    title: {
                        display: true,
                        text: 'Valor (%) de implementación',
                        color: '#363636',
                        font: {
                            family: 'Montserrat',
                            size: 16,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: {
                            top: 20,
                            left: 0,
                            right: 0,
                            bottom: 0
                        }
                    }
                }
            },
            animations: {
                tension: {
                    duration: 5000,
                    easing: 'linear',
                    from: 1,
                    to: 0,
                    loop: true
                }
            },
            ChartDataLabels: {

            }
        }
    });
</script>

