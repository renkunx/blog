<?php

namespace App\Admin\Controllers;

use App\SimCard;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SimCardController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('物联卡管理');
            $content->description('物联卡管理');
            
            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('物联卡');
            $content->description('修改');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('物联卡');
            $content->description('增加');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(SimCard::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('iccid','智能卡号');
            $grid->column('msisdn','手机号码');
            $grid->column('order_date','采购日期');
            // $grid->column('open_date','出库日期');
            $grid->column('type','卡类型');
            $grid->column('status','状态')->sortable();
            $grid->column('irateplan_name','当前套餐');
            $grid->column('start_date','激活日期');
            $grid->column('expire_date','过期日期')->sortable();
            $grid->column('data_usage','套餐用量')->sortable();
            $grid->column('carrier','运营商');
            $grid->column('memo','备注')->editable();
            // $grid->created_at();
            // $grid->updated_at();
            // $grid->type()->using(['SINGLE'=>'单卡','POOL'=>'流量池']);
            $grid->disableCreateButton();
            $grid->disableRowSelector();
            $grid->disableActions();

            // 设置查询
            $grid->filter(function ($filter) {
                $filter->like('iccid',  '智能卡号');
                $filter->in('status','状态')->multipleSelect(['testing' => '测试中',
                                                            'inventory' => '库存',
                                                            'pending-activation' => '待激活',
                                                            'activation' => '已激活',
                                                            'deactivation' => '已停卡',
                                                            'retired' => '已销卡']);
                // 设置expire_date字段的范围查询
                $filter->between('expire_date', '过期日期')->datetime();
            });
            
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(SimCard::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->display('iccid','智能卡号');
            $form->text('memo','备注');
            // $form->display('created_at', 'Created At');
            // $form->display('updated_at', 'Updated At');
        });
    }
}
