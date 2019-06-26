<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('首页')
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(new Box('Bar chart', view('admin.bar')));
                });

                $row->column(4, function (Column $column) {
                    $column->append(new Box('line chart', view('admin.line')));
                });

                $row->column(4, function (Column $column) {
                    $column->append(new Box('radar chart', view('admin.radar')));
                });
                $row->column(4, function (Column $column) {
                    $column->append(new Box('polarArea chart', view('admin.polar')));
                });
                $row->column(4, function (Column $column) {
                    $column->append(new Box('pie chart', view('admin.pie')));
                });
                $row->column(4, function (Column $column) {
                    $column->append(new Box('bubble chart', view('admin.bubble')));
                });
            });
    }
}
