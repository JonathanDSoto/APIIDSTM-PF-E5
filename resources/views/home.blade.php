@extends('layouts.auth')

@section('title')
    Home
@endsection

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h1>Home - Dashboard</h1>
                    <div class="container">
                        @include('layouts.dashboard')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script defer>
    const COLORS = ['#FFC0CB', '#FFDAB9', '#B0E0E6', '#87CEFA', '#FFA07A', '#98FB98', '#FFB6C1', '#ADD8E6', '#FF69B4', '#00BFFF', '#FFD700', '#7FFFD4'];

    const topServices = @json($topServices);
    const sellsByMonth = @json($sellsByMonth);
    const sellsByCategory = @json($sellsByCategory);

    const sparks = topServices.map((service, index) => {
        return {
            chart: {
                id: `spark${index + 1}`,
                group: 'sparkLines',
                type: 'area',
                height: '160px',
                sparkline: {
                    enabled: true
                },
            },
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            fill: {
                opacity: 1,
            },
            series: [{
                name: service.name,
                data: service.reservations.map((reservation) => reservation.total),
            }],
            labels: [...new Set(service.reservations.map((reservation) => {
                let date = new Date(reservation.created_at);
                let formattedDate = date.getFullYear() + '-' + (date.getMonth() + 1).toString().padStart(2, '0') + '-' + date.getDate().toString().padStart(2, '0');
                return formattedDate;
            }))],
            yaxis: {
                min: 0,
            },
            xaxis: {
                type: 'datetime',
            },
            colors: [COLORS[index]],
            title: {
                text: `$${service.total_revenue.toFixed(2)}`,
                offsetX: 3,
                style: {
                    fontSize: '24px',
                    cssClass: 'apexcharts-yaxis-title',
                },
            },
        }
    });

    sparks.forEach((spark, index) => {
        new ApexCharts(document.querySelector(`#spark${index + 1}`), spark).render();
    });

    const monthlyEarnings = {
        chart: {
            type: 'bar',
            height: 380,
            width: '100%',
            stacked: true,
        },
        plotOptions: {
            bar: {
                columnWidth: '45%',
            },
        },
        colors: COLORS,
        series: [
            {
                name: 'Earnings',
                data: sellsByMonth.map((sell) => sell.total.toFixed(2)),
            },
        ],
        labels: sellsByMonth.map((sell) => sell.month),
        dataLabels: {
            enabled: false,
        },
        yaxis: {
            labels: {
                style: {
                    colors: '#7c939f',
                }
            },
        },
        title: {
            text: "Monthly Earnings",
            align: "left",
            style: {
                color: "#7c939f",
                fontSize: "28px",
            },
        },
    };

    const monthlyEarningsChart = new ApexCharts(
        document.querySelector("#bar"),
        monthlyEarnings
    );
    monthlyEarningsChart.render();

    var categoryEarnings = {
        chart: {
            type: 'donut',
            width: '100%',
            height: 400,
        },
        dataLabels: {
            enabled: false,
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '75%',
                },
                offsetY: 20,
                stroke: {
                    colors: undefined,
                },
            },
            customScale: 0.8,
        },
        colors: COLORS,
        title: {
            text: "Category Earnings",
            style: {
                fontSize: "18px",
            },
        },
        series: sellsByCategory.map((sell) => parseFloat(sell.total.toFixed(2))),
        labels: sellsByCategory.map((sell) => sell.name),
        legend: {
            position: 'left',
            offsetY: 80,
        },
    };

    const donut = new ApexCharts(document.querySelector("#donut"), categoryEarnings);
    donut.render();
</script>
@endsection
