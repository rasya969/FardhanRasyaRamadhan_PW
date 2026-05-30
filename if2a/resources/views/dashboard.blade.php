@extends('main')

@section('content')
    {{-- ambil dari highchart.js --}}


    {{-- html --}}

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/themes/adaptive.js"></script>

<figure class="highcharts-figure">
    <div class="row">
        <div class="col-lg-6">
            <div id="container"></div>
        </div>
        <div class="col-lg-6">
            <div id="container1"></div>
        </div>
        <div class="col-lg-12">
            <div id="container3"></div>
        </div>
    </div>
    <p class="highcharts-description">
        A basic column chart comparing estimated corn and wheat production
        in some countries.

        The chart is making use of the axis crosshair feature, to highlight
        the hovered country.
    </p>
</figure>


{{-- css --}}

<style>
    body {
    font-family:
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        Roboto,
        Helvetica,
        Arial,
        "Apple Color Emoji",
        "Segoe UI Emoji",
        "Segoe UI Symbol",
        sans-serif;
    background: var(--highcharts-background-color);
    color: var(--highcharts-neutral-color-100);
}

.highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid var(--highcharts-neutral-color-10, #e6e6e6);
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: var(--highcharts-neutral-color-60, #666);
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tbody tr:nth-child(even) {
    background: var(--highcharts-neutral-color-3, #f7f7f7);
}

.highcharts-description {
    margin: 0.3rem 10px;
}

</style>

{{-- js --}}
<script>
    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik jumlah Mahasiswa UMDP'
    },
    subtitle: {
        text:
            'Source: aplikasi SIMPONI ' 
    },
    xAxis: {
        categories: [
            @foreach ($grafikmhs1 as $data)
                '{{ $data->nama_prodi }}',
            @endforeach
        ],
        crosshair: true,
        accessibility: {
            description: 'Program Studi'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'MAHASISWA'
        }
    },
    tooltip: {
        valueSuffix: ' (orang)'
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Mahasiswa',
            data: [
                @foreach ($grafikmhs1 as $data)
                {{ $data->jumlah_mhs }},
            @endforeach
            ]
        }
    ]
});

Highcharts.chart('container1', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik jumlah Mahasiswa UMDP'
    },
    subtitle: {
        text:
            'Source: aplikasi SIMPONI ' 
    },
    xAxis: {
        categories: [
            @foreach ($grafikmhs2 as $data)
                '{{ $data->tahun_angkatan }}',
            @endforeach
        ],
        crosshair: true,
        accessibility: {
            description: 'Program Studi'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'MAHASISWA'
        }
    },
    tooltip: {
        valueSuffix: ' (orang)'
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Mahasiswa',
            data: [
                @foreach ($grafikmhs2 as $data)
                {{ $data->jumlah_mhs }},
            @endforeach
            ]
        }
    ]
});

// js line
Highcharts.chart('container3', {

    title: {
        text: 'Tren jumlah mahasiswa per tahun',
        align: 'center'
    },

    subtitle: {
        text: 'Aplikasi penerimaan mahasiswa baru',
    },

    yAxis: {
        title: {
            text: 'Number of Employees'
        }
    },

    xAxis: {
        accessibility: {
            rangeDescription: 'Range: 2010 to 2022'
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2023
        }
    },

    series: [ @foreach($grafikmhs3 as $data)
        {
            name: '{{ $data->nama_prodi }}',
            data: [ {{ $data->jmhs_2023 }}, {{ $data->jmhs_2024 }}, {{ $data->jmhs_2025 }} ]
        },
        @endforeach
     ],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});


</script>
@endsection