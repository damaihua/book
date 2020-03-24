<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
		增加文章</title>

	<link rel="stylesheet" href="__PUBLIC__/admin/css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="__PUBLIC__/admin/css/style.css" type="text/css" media="screen">
	<script language="javascript" src="__PUBLIC__/admin/js/jquery.min.js" type="text/javascript"></script>

	<script charset="UTF-8" src="__PUBLIC__/kindeditor/kindeditor-min.js"></script>
	<script charset="UTF-8" src="__PUBLIC__/kindeditor/lang/zh_CN.js">
	</script>
	<script>
		var editor;
		KindEditor.ready(function (K) {
			editor = K.create('textarea[name="book_info"]', {
				resizeType: 1,
				allowPreviewEmoticons: false,
				allowImageUpload: false,
				items: [
					'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
					'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
					'insertunorderedlist', '|', 'emoticons', 'image', 'link']
			});
		});
	</script>

</head>

<body>
	<div id="main-content">
		<div class="content-box">
			<!-- Start Content Box -->

			<div class="content-box-header">
				<h3 style="cursor: s-resize;">小说审核</h3>
			</div> 

			<div class="content-box-content">

				<form name="form1" action="__URL__/do_book_edit" enctype="multipart/form-data" method="post"
					onsubmit="return checkSubmit()">
					<input name="book_id" value="<?php echo ($book_id); ?>" type="hidden">

					<div style="display: block;" class="tab-content  default-tab" id="tab1">


						<fieldset>
							<p>
								<label>小说标题</label>
								<input name="book_name" style="width:80px" type="text"
									value="<?php echo getData('Book',$book_id,'book_name');?>">
							</p>
							<p>
								<label>标签</label>
								<input name="tags" type="text" value="<?php echo getData('Book',$book_id,'tags');?>">
							</p>
							<p>
								<label>作者</label>
							  <input name="writer" type="text" value="<?php echo getData('Book',$book_id,'writer');?>">
							</p>
							<p>
								<label>推荐位</label>
								<input name="flags[]" type="checkbox" class="np" id="flagsh" value="a"
									checked="checked">
								强力推荐[a]
								<input class="np" name="flags[]" id="flagsc" value="b" type="checkbox">
								封面推荐[b]
								<input class="np" name="flags[]" id="flagsf" value="c" type="checkbox">
								编辑推荐[c]
								<input class="d" name="flags[]" id="flagss" value="d" type="checkbox">精品推荐[d] </p>


							<p>
								<label>小说封面</label>

								<img name="cover" src="__ROOT__/<?php echo getData('Book',$book_id,'book_cover');?>" width="180"
									height="225" alt="" />




							</p>
							<p></p>

							<p>
								<label>所属分类</label>
								<span id="typeidct">
									<select name="book_cat" id="typeid" style="width:240px">

										<?php echo ($catlist); ?>
									</select>
								</span>

							</p>
							<p>
								<label>小说进度</label>
								<span id="typeidct">
									<select name="progress" id="progress" style="width:240px">
										<?php echo ($proglist); ?>

									</select></span>

							</p>
							<p>
								<label>小说简介</label>
								<textarea name="book_info"
									style="width:800px;height:200px;visibility:hidden;"><?php echo getData('Book',$book_id,'book_info');?></textarea>

							</p>

							<p>

								<!-- <input name="dede_addonfields" value="" type="hidden"> -->


							</p>

							<p>
								<br><input class="button" name="imageField" value="审核通过" type="submit">
							</p>

						</fieldset>





					</div>


				</form>

			</div>

		</div>


	</div>



</body>

</html>