<?php

namespace FacturaScripts\Core\UI;

use FacturaScripts\Core\Template\SectionTab;
use FacturaScripts\Dinamic\Lib\AssetManager;

class TabCharts extends SectionTab
{
    public $data = [];

    public function __construct()
    {
        $this->icon = 'fas fa-chart-bar';

        AssetManager::add('js', 'node_modules/chart.js/dist/Chart.min.js');
    }

    public function render(): string
    {
        return '<canvas id="chart471956358" style="max-height: 500px;"></canvas>'
            . '<script>'
            . "let ctx471956358 = document.getElementById('chart471956358').getContext('2d');let myChart471956358 = new Chart(ctx471956358, {"
            . "type: 'line',"
            . "data: {"
            . "labels: ['2022-11-06','2022-11-07','2022-11-08','2022-11-09','2022-11-10','2022-11-11','2022-11-12','2022-11-13','2022-11-14','2022-11-15','2022-11-16','2022-11-17','2022-11-18','2022-11-19','2022-11-20','2022-11-21','2022-11-22','2022-11-23','2022-11-24','2022-11-25','2022-11-26','2022-11-27','2022-11-28','2022-11-29','2022-11-30','2022-12-01','2022-12-02','2022-12-03','2022-12-04','2022-12-05','2022-12-06','2022-12-07','2022-12-08','2022-12-09','2022-12-10','2022-12-11','2022-12-12','2022-12-13','2022-12-14','2022-12-15','2022-12-16','2022-12-17','2022-12-18','2022-12-19','2022-12-20','2022-12-21','2022-12-22','2022-12-23','2022-12-24','2022-12-25','2022-12-26','2022-12-27','2022-12-28','2022-12-29','2022-12-30','2022-12-31','2023-01-01','2023-01-02','2023-01-03','2023-01-04','2023-01-05','2023-01-06','2023-01-07','2023-01-08','2023-01-09','2023-01-10','2023-01-11','2023-01-12','2023-01-13','2023-01-14','2023-01-15','2023-01-16','2023-01-17','2023-01-18','2023-01-19','2023-01-20','2023-01-21','2023-01-22','2023-01-23','2023-01-24','2023-01-25','2023-01-26','2023-01-27','2023-01-28','2023-01-29','2023-01-30','2023-01-31','2023-02-01','2023-02-02','2023-02-03','2023-02-04','2023-02-05','2023-02-06','2023-02-07','2023-02-08','2023-02-09','2023-02-10','2023-02-11','2023-02-12','2023-02-13','2023-02-14','2023-02-15','2023-02-16','2023-02-17','2023-02-18','2023-02-19','2023-02-20','2023-02-21','2023-02-22','2023-02-23','2023-02-24','2023-02-25','2023-02-26','2023-02-27','2023-02-28','2023-03-01','2023-03-02','2023-03-03','2023-03-04','2023-03-05','2023-03-06','2023-03-07','2023-03-08','2023-03-09','2023-03-10','2023-03-11','2023-03-12','2023-03-13','2023-03-14','2023-03-15','2023-03-16','2023-03-17','2023-03-18','2023-03-19','2023-03-20','2023-03-21','2023-03-22','2023-03-23','2023-03-24','2023-03-25','2023-03-26','2023-03-27','2023-03-28','2023-03-29','2023-03-30','2023-03-31','2023-04-01','2023-04-02','2023-04-03','2023-04-04','2023-04-05','2023-04-06','2023-04-07','2023-04-08','2023-04-09','2023-04-10','2023-04-11','2023-04-12','2023-04-13','2023-04-14','2023-04-15','2023-04-16','2023-04-17','2023-04-18','2023-04-19','2023-04-20','2023-04-21','2023-04-22','2023-04-23','2023-04-24','2023-04-25','2023-04-26','2023-04-27','2023-04-28','2023-04-29','2023-04-30','2023-05-01','2023-05-02','2023-05-03','2023-05-04','2023-05-05','2023-05-06','2023-05-07','2023-05-08','2023-05-09','2023-05-10','2023-05-11','2023-05-12','2023-05-13','2023-05-14','2023-05-15','2023-05-16','2023-05-17','2023-05-18','2023-05-19','2023-05-20','2023-05-21','2023-05-22','2023-05-23','2023-05-24','2023-05-25','2023-05-26','2023-05-27','2023-05-28','2023-05-29','2023-05-30','2023-05-31','2023-06-01','2023-06-02','2023-06-03','2023-06-04','2023-06-05','2023-06-06','2023-06-07','2023-06-08','2023-06-09','2023-06-10','2023-06-11','2023-06-12','2023-06-13','2023-06-14','2023-06-15','2023-06-16','2023-06-17','2023-06-18','2023-06-19','2023-06-20','2023-06-21','2023-06-22','2023-06-23','2023-06-24','2023-06-25','2023-06-26','2023-06-27','2023-06-28','2023-06-29','2023-06-30','2023-07-01','2023-07-02','2023-07-03','2023-07-04','2023-07-05','2023-07-06','2023-07-07','2023-07-08','2023-07-09','2023-07-10','2023-07-11','2023-07-12','2023-07-13','2023-07-14','2023-07-15','2023-07-16','2023-07-17','2023-07-18','2023-07-19','2023-07-20','2023-07-21','2023-07-22','2023-07-23','2023-07-24','2023-07-25','2023-07-26','2023-07-27','2023-07-28','2023-07-29','2023-07-30','2023-07-31','2023-08-01','2023-08-02','2023-08-03','2023-08-04','2023-08-05','2023-08-06','2023-08-07','2023-08-08','2023-08-09','2023-08-10','2023-08-11','2023-08-12','2023-08-13','2023-08-14','2023-08-15','2023-08-16','2023-08-17','2023-08-18','2023-08-19','2023-08-20','2023-08-21','2023-08-22','2023-08-23','2023-08-24','2023-08-25','2023-08-26','2023-08-27','2023-08-28','2023-08-29','2023-08-30','2023-08-31','2023-09-01','2023-09-02','2023-09-03','2023-09-04','2023-09-05','2023-09-06','2023-09-07','2023-09-08','2023-09-09','2023-09-10','2023-09-11','2023-09-12','2023-09-13','2023-09-14','2023-09-15','2023-09-16','2023-09-17','2023-09-18','2023-09-19','2023-09-20','2023-09-21','2023-09-22','2023-09-23','2023-09-24','2023-09-25','2023-09-26','2023-09-27','2023-09-28','2023-09-29','2023-09-30','2023-10-01','2023-10-02','2023-10-03','2023-10-04','2023-10-05','2023-10-06','2023-10-07','2023-10-08','2023-10-09','2023-10-10','2023-10-11','2023-10-12','2023-10-13','2023-10-14','2023-10-15','2023-10-16','2023-10-17','2023-10-18','2023-10-19','2023-10-20','2023-10-21','2023-10-22','2023-10-23','2023-10-24','2023-10-25','2023-10-26','2023-10-27','2023-10-28','2023-10-29','2023-10-30','2023-10-31'],"
            . "datasets: [{"
            . "label: 'sessions',"
            . "data: [3,1,1,1,1,1,0,0,1,1,1,1,1,2,1,1,1,1,2,1,1,0,1,1,1,2,1,0,0,1,1,1,1,2,1,0,1,1,1,1,1,1,0,1,1,1,1,1,1,0,0,0,0,1,0,0,0,0,1,0,1,0,0,0,1,1,2,1,1,0,0,1,1,1,1,1,1,0,1,1,1,1,1,1,0,1,1,1,2,1,1,0,1,1,1,1,1,1,0,1,1,1,1,1,1,1,1,1,1,0,1,0,0,1,1,1,1,1,1,1,2,1,1,1,1,0,0,1,1,1,1,1,1,0,1,1,1,1,1,1,0,1,1,1,1,1,1,1,1,1,1,1,0,0,0,1,1,1,1,1,0,0,0,1,1,1,1,0,0,1,1,1,1,1,1,1,0,1,1,1,1,0,0,1,1,0,1,1,1,0,1,1,1,1,1,0,0,1,1,1,1,1,0,0,1,1,1,1,1,0,0,1,1,1,1,1,1,0,1,1,1,1,1,1,0,1,1,1,1,1,1,0,1,1,1,1,1,1,0,1,1,1,1,1,0,0,1,1,1,1,1,0,0,1,1,1,1,1,1,0,1,1,1,1,1,1,0,1,1,1,1,1,0,0,1,1,1,1,1,0,0,0,0,0,0,0,0,0,1,0,1,1,1,0,0,1,1,1,1,1,0,0,1,1,1,1,1,0,0,1,1,1,1,1,1,0,1,1,1,1,1,1,0,1,1,1,1,1,0,0,1,1,1,1,1,0,0,1,1,1,0,0,0,0,1,1,1,1,1,0,0,1,1,1,1,1,0,0,3,1],"
            . "backgroundColor: ['rgba(153, 102, 255, 0.2)'],"
            . "borderColor: ['rgba(153, 102, 255, 1)'],"
            . "borderWidth: 1"
            . "}]"
            . "},"
            . "options: {"
            . "responsive: true,"
            . "maintainAspectRatio: false"
            . "}"
            . "});"
            . "</script>";
    }
}