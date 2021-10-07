<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\DatapublishModel;
use App\Model\SlugHistoryModel;
use App\Model\RelDataStatistikModel;
use App\Model\DataModel;

class StoriesController extends Controller
{
    public function detail($slug)
    {
        $slugHistory= SlugHistoryModel::getIdSlugHistory($slug)->first();
        $idSlugHistory = isset( $slugHistory['id_datastatistik'])? $slugHistory['id_datastatistik']:'';
        $detailContent = DatapublishModel::detailContent($idSlugHistory,$slug)->first();  
        $relDataStatistik = RelDataStatistikModel::relData($detailContent->id)->first();
        $result['data'] = $detailContent; 

        if ($relDataStatistik) {
            $listData = DataModel::listData($relDataStatistik->id_data)->first();
            $data_x = explode(",",$listData->data_x); 
            $data_y = explode(",",$listData->data_y); 

            $chartConsume = [];
            foreach ($data_x as $key => $value) {
                $chartConsume[$key]['date'] = date($data_x[$key]);
                $chartConsume[$key]['value'] = $data_y[$key];
            }
            $result['chartContent'] = view('detail.chartSingleDate', ['chartConsume' => $chartConsume]);
        } else {
            $data_x = explode(",",$detailContent->nama_alias); 
            $data_y = explode(",",$detailContent->data_x); 

            $chartConsume = [];
            foreach ($data_x as $key => $value) {
                $chartConsume[$key]['date'] = $data_x[$key];
                $chartConsume[$key]['value'] = $data_y[$key];
            }
            $result['chartContent'] = view('detail.chartSingleNoneDate', ['chartConsume' => $chartConsume]);
        }

        // return $chartConsume;
        
        
        return view('detail.index', $result);
    }
}
