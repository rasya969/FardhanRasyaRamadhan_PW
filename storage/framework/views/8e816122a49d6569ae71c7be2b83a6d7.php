<?php $__env->startSection('content'); ?>
    

    
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/themes/adaptive.js"></script>

    <figure class="highcharts-figure">
        
        <div class="row">
            <div id="container" class="col-lg-6"></div>
            <div id="container1" class="col-lg-6"></div>
        </div>
        <div class="row mt-2" >
            
            <div id="container2"></div>
        </div>
    </figure>

    
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

    
    <script>
        Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Jumlah Mahasiswa MDP per Program Studi'
        },
        subtitle: {
            text:
                'Source: Aplikasi Simponi '
        },
        xAxis: {
            categories: [
                <?php $__currentLoopData = $grafikmhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    '<?php echo e($data->nama_prodi); ?>',
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
            crosshair: true,
            accessibility: {
                description: 'Program Studi'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Mahasiswa'
            }
        },
        tooltip: {
            valueSuffix: '(Orang)'
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
                data: [<?php $__currentLoopData = $grafikmhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($data->jumlah_mhs); ?>,
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>]
            }
        ]
    });
        Highcharts.chart('container1', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Jumlah Mahasiswa MDP per Tahun Angkatan'
        },
        subtitle: {
            text:
                'Source: Aplikasi Simponi '
        },
        xAxis: {
            categories: [
                <?php $__currentLoopData = $grafikmhspertahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    '<?php echo e($data->tahun_angkatan); ?>',
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
            crosshair: true,
            accessibility: {
                description: 'Program Studi'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Mahasiswa'
            }
        },
        tooltip: {
            valueSuffix: '(Orang)'
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
                data: [<?php $__currentLoopData = $grafikmhspertahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($data->jumlah_mhs); ?>,
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>]
            }
        ]
    });


    //  JS Line chart 


    Highcharts.chart('container2', {

    title: {
        text: 'Trend Jumlah Mahasiswa per Tahun',
        align: 'center'
    },

    subtitle: {
        text: 'Aplikasi Penerimaan Mahasiswa Baru',
        align: 'center'
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

    series: [
        <?php $__currentLoopData = $grafiktrenmahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        {
        name: '<?php echo e($data->nama_prodi); ?>',
        data: [
            <?php echo e($data->jmhs_2023); ?>,
            <?php echo e($data->jmhs_2024); ?>,
            <?php echo e($data->jmhs_2025); ?>

        ]
    }, <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\FardhanRasyaRamadhan_PW\if2a\resources\views/dashboard-adminlte.blade.php ENDPATH**/ ?>