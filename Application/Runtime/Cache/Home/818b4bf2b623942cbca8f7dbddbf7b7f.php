<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<title></title>
	<link rel="stylesheet" href="/Public/Home/css/weui.css"/>
	<link rel="stylesheet" href="/Public/Home/css/weui2.css"/>
	<link rel="stylesheet" href="/Public/Home/css/weui3.css"/>
	<script src="/Public/Home/js/zepto.min.js"></script> 
</head>
<body ontouchstart class="xhsd_car">
	<!-- 头部 -->
	<div class="weui-header bg-green"> 
  		<div class="weui-header-left"> <a class="icon icon-109 f-white" onclick="history.go(-1)">返回</a>  </div>
   		<h1 class="weui-header-title">购物车</h1>
    	<!-- <div class="weui-header-right"><a class="icon icon-83 f-white">更多</a></div>  -->
    </div>

    <!-- 购物车列表 -->
    <div class="car_lists">
    	<div class="weui_cells">         
            <div class="weui_cells_title">
            	<input id="select_all" class="weui-agree-checkbox" type="checkbox">  <label for="select_all">全选</label>
            	<div class="f-orange lists_edit">
	    			<span id="car_lists_edit">修改</span>
	    			<span class="hide" id="car_lists_complete">完成</span>
	    		</div>
            </div>
            
            <div class="weui_cell">
                <div class="weui_cell_hd list_hd">
                	<div>
	                	<input class="weui-agree-checkbox" name="check_book[]" type="checkbox">
	                </div>
                	<img src="/Public/Home/images/icon.png" alt="">
                </div>
            	<div class="weui_cell_bd weui_cell_primary car_lists_edit hide">
                    <p>&nbsp;</p>
                    <p class="car_lists_edit_span">
                    	<span onclick="car_num_d(this)">-</span><span class="car_edit_num">1</span><span onclick="car_num_a(this)">+</span>
                    </p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
                <div class="weui_cell_ft car_lists_edit bg-red hide f-white car_lists_delete" onclick="car_book_del()">删除</div>
            	<div class="weui_cell_bd weui_cell_primary car_lists_show">
                    <p>我的那些日子</p>
                    <p>&nbsp;</p>
                    <p class="f-gray">数量：2</p>
                    <p class="f-gray">单价：<span class="f-red">&yen;99.99</span></p>
                </div>
                <div class="weui_cell_ft car_lists_show"></div>
            </div>

            <div class="weui_cell">
                <div class="weui_cell_hd list_hd">
                	<div>
	                	<input class="weui-agree-checkbox" name="check_book[]" type="checkbox">
	                </div>
                	<img src="/Public/Home/images/icon.png" alt="">
                </div>
            	<div class="weui_cell_bd weui_cell_primary car_lists_edit hide">
                    <p>&nbsp;</p>
                    <p class="car_lists_edit_span">
                    	<span onclick="car_num_d(this)">-</span><span class="car_edit_num">1</span><span onclick="car_num_a(this)">+</span>
                    </p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
                <div class="weui_cell_ft car_lists_edit bg-red hide f-white car_lists_delete" onclick="car_book_del()">删除</div>
            	<div class="weui_cell_bd weui_cell_primary car_lists_show">
                    <p>我的那些日子</p>
                    <p>&nbsp;</p>
                    <p class="f-gray">数量：2</p>
                    <p class="f-gray">单价：<span class="f-red">&yen;99.99</span></p>
                </div>
                <div class="weui_cell_ft car_lists_show"></div>
            </div>
        </div>
    </div>
    
	<!-- 底部 -->
	<div class="bot_height"></div>
	<div class="car_buy_now tcenter">
		<div class="weui-flex">
			<div class='weui-flex-item'>
				<input id="selectAll" class="weui-agree-checkbox" type="checkbox">
				<label for="selectAll">全选</label>
			</div>
			<div class='weui-flex-item tleft'>
				<p>合计：<span class="f-red">&yen;</span> <span class="pay_my f-red bold">111.11</span></p>
				<p>应付：<span class="f-red">&yen;</span> <span class="pay_sy f-red bold">222.22</span></p>
			</div>
			<div class='weui-flex-item'>
				<div class="bg-green" onclick="location.href='order.html'">
					立即下单( <span class="book_num">0</span> )
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$().ready(function(){
			$('#car_lists_edit').on('click',function(res){
	    		$('.car_lists_edit').show();
	    		$('.car_lists_show').hide();
	    		$(this).hide();
	    		$('#car_lists_complete').show();
	    	})
	    	$('#car_lists_complete').on('click',function(res){
	    		$('.car_lists_edit').hide();
	    		$('.car_lists_show').show();
	    		$(this).hide();
	    		$('#car_lists_edit').show();
	    	})

	    	$('#selectAll,#select_all').on('click',function(){
	    		if($(this).prop('checked')){
	    			$('input[name="check_book[]"]').prop('checked',true);
	    			$('#selectAll,#select_all').prop('checked',true);
	    		}else{
	    			$('input[name="check_book[]"]').prop('checked',false);
	    			$('#selectAll,#select_all').prop('checked',false);
	    		}
	    		
	    	})

		})

		function car_num_d(a){
			var num = parseInt($(a).parent().find('.car_edit_num').html());
			if(num>1){
				var num_d = num-1;
				$(a).parent().find('.car_edit_num').html(num_d);
			}
		}
		function car_num_a(a){
			var num = parseInt($(a).parent().find('.car_edit_num').html());
			var num_a = num+1;
			$(a).parent().find('.car_edit_num').html(num_a);
		}
    	function car_book_del(){
    		$.confirm("您确定要删除吗?", "确认删除?", function() {
          		$.toast("删除成功");
        	}, function() {
          		//取消操作
        	});
    	}	
    </script>
</body>
</html>