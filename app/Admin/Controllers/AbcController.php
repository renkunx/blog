<?php

namespace App\Admin\Controllers;

use App\Abc;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class AbcController extends Controller
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

            $content->header('活动联谊');
            $content->description('活动联谊');

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

            $content->header('修改');
            $content->description('修改个人信息');

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

            $content->header('添加');
            $content->description('添加个人信息');

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
        return Admin::grid(Abc::class, function (Grid $grid) {
            
            $grid->id('ID', '序号')->sortable();
            $grid->column('name', '姓名');
            $grid->column('sex', '性别')->display(function($value){
                $sex = [ 1 => '男', 2 => '女'];
                return $sex[$value];
            });
            $grid->column('age', ' 年龄');
            $grid->column('avatar', '照片')->image('http://p77n9a5vi.bkt.clouddn.com/', 100, 100);
            $grid->column('position', '职业');

            // $grid->created_at();
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Abc::class, function (Form $form) {

            $form->display('id', '序号');
            $form->text('name', '姓名');
            $form->text('age', '年龄');
            $form->select('sex', '性别')->options([1=>'男', 2=>'女']);
            $form->text('height', '身高');
            $form->text('work', ' 工作单位');
            $form->text('position', '职业');
            $form->image('avatar', '照片')->uniqueName();
            $form->text('weixin', '微信');
            $form->text('email', '邮箱');
            $form->textarea('descripe', '自我简介');

            $form->display('created_at', '添加时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
