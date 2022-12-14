<?php
function json_string($obj) {
    return str_replace(' ', '%20%', json_encode($obj));
}

function dashboard() {
    // Get the data for the charts
    $bar_line_data = [
        'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        'datasets' => [
            [
                'label' => 'First Dataset',
                'data' => [1, 2, 3, 4, 5, 6, 7],
                'borderColor' => 'rgb(75, 192, 192)',
                'backgroundColor' => 'rgb(75, 192, 192)',
                'fill' => false
            ],
            [
                'label' => 'Second Dataset',
                'data' => [5, 6, 3, 4, 8, 6, 2],
                'borderColor' => 'rgb(192, 75, 75)',
                'backgroundColor' => 'rgb(192, 75, 75)',
                'fill' => false
            ]
        ]
    ];
    $bar_line_data_string = json_string($bar_line_data);

    $combo_data = [
        'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        'datasets' => [
            [
                'label' => 'First Dataset',
                'data' => [1, 2, 3, 2, 4, 5, 7],
                'borderColor' => 'rgb(75, 192, 192)',
                'backgroundColor' => 'rgb(75, 192, 192)',
                'fill' => false
            ],
            [
                'label' => 'Second Dataset',
                'data' => [5, 6, 3, 4, 8, 6, 2],
                'borderColor' => 'rgb(192, 75, 75)',
                'backgroundColor' => 'rgb(192, 75, 75)',
                'fill' => false,
                'type' => 'bar'
            ]
        ]
    ];
    $combo_data_string = json_string($combo_data);

    $doughnut_data = [
        'labels' => ['A', 'B', 'C'],
        'datasets' => [
            [
                'data' => [1, 2, 3],
                'borderColor' => ['rgb(75, 192, 192)', 'rgb(237, 217, 76)', 'rgb(192, 75, 75)'],
                'backgroundColor' => ['rgb(75, 192, 192)', 'rgb(237, 217, 76)', 'rgb(192, 75, 75)'],
                'fill' => false
            ]
        ]
    ];
    $doughnut_data_string = json_string($doughnut_data);

    $table_data = [
        'table_id' => 'myTable',
        'table_headers' => json_string(['Col 0', 'Col 1', 'Col 2']),
        'data' => json_string([
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ])
    ];

    $metric_number = 267;
    $metric_percentage = 72;

    // Render the template
    require('./app/Templates/Dashboard.php');
}
?>