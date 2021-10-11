<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\DatapublishModel;
use App\Model\SlugHistoryModel;
use App\Model\RelDataStatistikModel;
use App\Model\RelDataSingleModel;
use App\Model\DataModel;

class StoriesController extends Controller
{
    public function detail($slug)
    {
        $slugHistory= SlugHistoryModel::getIdSlugHistory($slug)->first();
        $idSlugHistory = isset( $slugHistory['id_datastatistik'])? $slugHistory['id_datastatistik']:'';
        $detailContent = DatapublishModel::detailContent($idSlugHistory,$slug)->first(); 
        if ($detailContent->tipe_data == 1) {
            $result['data'] = $detailContent; 
            $result['chartContent'] = $this->getChart($detailContent); 
        } else if ($detailContent->tipe == 2) {
            $result['data'] = $detailContent; 
            $result['chartContent'] = $this->getChartGroup($detailContent); 
        }
               
        // return $result;
        return view('detail.index', $result);
    }

    public function getChart($detailContent)
    {
        switch ($detailContent->tipe_chart) {
            case '3':
                $result = $this->barChart($detailContent);
                break;

            case '4':
                $result = $this->pieChart($detailContent);
                break;

            case '5':
                $result = $this->pieChart($detailContent, '3d');
                break;

            case '11':
                $result = $this->donutChart($detailContent);
                break;
            
            default:
                $result = $this->lineChart($detailContent);
                break;
        }
        
        return $result;   
    }

    public function getChartGroup($detailContent)
    {
        switch ($detailContent->tipe_chart) {
            case '1':
                $result = $this->barChartGroup($detailContent);
                break;

            case '4':
                $result = $this->stackedChartGroup($detailContent);
                break;
            
            default:
                $result = $this->lineChart($detailContent);
                break;
        }
        
        return $result;   
    }

    public function barChartGroup($detailContent)
    {
        $relDataStatistik = RelDataSingleModel::relData($detailContent->id)->get();
        $data_x = explode(",",$detailContent->nama_alias); 
        foreach ($data_x as $key => $value) {
            $chartConsume[$key]['name'] = $data_x[$key];
            $data_y = explode(",",$relDataStatistik[$key]['data_y']);
            $nama_data_alias = explode(",",$relDataStatistik[$key]['nama_data_alias']);
            foreach ($nama_data_alias as $key_y => $value_y) {
                $chartConsume[$key][$value_y] = $data_y[$key_y];
            }
        }

        // return $chartConsume;
        
        $result = view('detail.chartGroupBar', ['chartConsume' => $chartConsume]);

        return $result;
    }

    public function stackedChartGroup($detailContent)
    {
        $relDataStatistik = RelDataSingleModel::relData($detailContent->id)->get();
        $data_x = explode(",",$detailContent->nama_alias); 
        foreach ($data_x as $key => $value) {
            $chartConsume[$key]['name'] = $data_x[$key];
            $data_y = explode(",",$relDataStatistik[$key]['data_y']);
            $nama_data_alias = explode(",",$relDataStatistik[$key]['nama_data_alias']);
            foreach ($nama_data_alias as $key_y => $value_y) {
                $chartConsume[$key][$value_y] = $data_y[$key_y];
            }
        }

        // return $chartConsume;
        
        $result = view('detail.chartGroupStacked', ['chartConsume' => $chartConsume]);

        return $result;
    }

    public function lineChart($detailContent)
    {
        $relDataStatistik = RelDataStatistikModel::relData($detailContent->id)->first();

        if ($relDataStatistik) {
            $listData = DataModel::listData($relDataStatistik->id_data)->first();
            $data_x = explode(",",$listData->data_x); 
            $data_y = explode(",",$listData->data_y); 

            $chartConsume = [];
            foreach ($data_x as $key => $value) {
                $chartConsume[$key]['date'] = date($data_x[$key]);
                $chartConsume[$key]['value'] = $data_y[$key];
            }
            $result = view('detail.chartSingleDate', ['chartConsume' => $chartConsume]);
        } else {
            $data_x = explode(",",$detailContent->nama_alias); 
            $data_y = explode(",",$detailContent->data_x); 

            $chartConsume = [];
            foreach ($data_x as $key => $value) {
                $chartConsume[$key]['date'] = $data_x[$key];
                $chartConsume[$key]['value'] = $data_y[$key];
            }
            $result = view('detail.chartSingle', ['chartConsume' => $chartConsume]);
        }

        return $result;
    }

    public function barChart($detailContent)
    {
        $data_x = explode(",",$detailContent->nama_alias); 
        $data_y = explode(",",$detailContent->data_x); 

        $chartConsume = [];
        foreach ($data_x as $key => $value) {
            $chartConsume[$key]['date'] = $data_x[$key];
            $chartConsume[$key]['value'] = $data_y[$key];
        }
        $result = view('detail.chartBar', ['chartConsume' => $chartConsume]);

        return $result;
    }

    public function pieChart($detailContent, $face = 'standard')
    {
        $data_x = explode(",",$detailContent->nama_alias); 
        $data_y = explode(",",$detailContent->data_x); 

        $chartConsume = [];
        foreach ($data_x as $key => $value) {
            $chartConsume[$key]['date'] = $data_x[$key];
            $chartConsume[$key]['value'] = $data_y[$key];
        }
        if ($face == 'standard') {
            $result = view('detail.chartPie', ['chartConsume' => $chartConsume]);
        } else {
            $result = view('detail.chartPie3d', ['chartConsume' => $chartConsume]);
        }

        return $result;
    }

    public function donutChart($detailContent, $face = 'standard')
    {
        $data_x = explode(",",$detailContent->nama_alias); 
        $data_y = explode(",",$detailContent->data_x); 

        $chartConsume = [];
        foreach ($data_x as $key => $value) {
            $chartConsume[$key]['date'] = $data_x[$key];
            $chartConsume[$key]['value'] = $data_y[$key];
        }
        
        $result = view('detail.chartDonut', ['chartConsume' => $chartConsume]);

        return $result;
    }
}
