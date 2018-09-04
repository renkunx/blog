<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SimCard extends Model
{
    //卡类型
    public function getTypeAttribute($value){
        switch ($value) {
            case 'SINGLE':
                # code...
                return '单卡';
                break;
            case 'POOL':
                # code...
                return '流量池';
                break;
            
            default:
                # code...
                return '未知类型';
                break;
        }
    }
    // 卡状态
    public function getStatusAttribute($value){
        switch ($value) {
            case 'testing':
                return '测试中';
                break;
            case 'inventory':
                return '库存';
                break;
            case 'pending-activation':
                return '待激活';
                break;
            case 'activation':
                return '已激活';
                break;
            case 'deactivation':
                return '已停卡';
                break;
            case 'retired':
                return '已销卡';
                break;
            
            default:
                return '未知状态';
                break;
        }
    }

    // 运营商
    public function getCarrierAttribute($value){
        switch ($value) {
            case 'unicom':
                return '联通';
                break;
            case 'cmcc':
                return '移动';
                break;
            case 'chinanet':
                return '电信';
                break;
            
            default:
                return '未知运营商';
                break;
        }
    }

    // 套餐用量
    public function getDataUsageAttribute($value){
        return round($value,2).'M';
    }


}
