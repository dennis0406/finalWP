<?php get_header(); ?>

		<section class="bread-crumb margin-bottom-10">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">						
					<li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a itemprop="item" href="index.html" title="Trang chủ">
							<span itemprop="name">Trang chủ</span>
							<meta itemprop="position" content="1" />
						</a>
						<span><i class="fa fa-angle-right"></i></span>
					</li>
					
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<strong itemprop="name">Liên hệ</strong>
						<meta itemprop="position" content="2" />
					</li>
					
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="container contact">
	<div class="row">
		<div class="col-md-4">
			<div class="widget-item info-contact in-fo-page-content">
				<h1 class="title-head">Thông tin liên hệ</h1>
				<!-- End .widget-title -->
				<ul class="widget-menu contact-info-page">
					
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> 101B Lê Hữu Trác, Phước Mỹ, Sơn Trà</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:19006750">1900 6750</a></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:PNVers@gmail.com">PNVers@gmail.com</a></li>
					
				</ul>
				<!-- End .widget-menu -->
			</div>
			<div class="box-maps margin-top-10 margin-bottom-10">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.112248038306!2d108.23859831516485!3d16.059663943959208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177f0057f675%3A0xdec5dbe31838c835!2zMzY1UitWOUcsIDEwMUIgTMOqIEjhu691IFRyw6FjLCBQaMaw4bubYyBN4bu5LCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1670789702663!5m2!1svi!2s" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-8">
			<div class="page-login">
				<div id="login">
					<h3 class="title-head">Gửi thông tin</h3>
					<span class="block">Hoạt động của tập đoàn là tập trung vào ba khu vực kinh doanh chiến lược: hàng hoá tiêu dùng, kỹ thuật xây dựng, kỹ thuật công nghiệp và tự động. Đây là một trong những nhà sản xuất độc lập lớn nhất về các bộ phận và hệ thống máy móc tự động.</span>
					<span class="margin-bottom-10 block"><em>Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</em></span>
					<form accept-charset="utf-8" action="https://ant-construction.mysapo.net/contact" id="contact" method="post">
<input name="FormType" type="hidden" value="contact" />
<input name="utf8" type="hidden" value="true" /><input type="hidden" id="Token-c9292f4d6eaa447dbc3d90e592f624b3" name="Token" /><script src="../www.google.com/recaptcha/apif78f.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
<script>
grecaptcha.ready(function() {
grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "/contact"})
.then(function(token) {
document.getElementById("Token-c9292f4d6eaa447dbc3d90e592f624b3").value = token
});
});
</script>
					
					<div class="form-signup clearfix">
						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<fieldset class="form-group">
									<label>Họ tên<span class="required">*</span></label>
									<input type="text" name="contact[name]" id="name" class="form-control  form-control-lg" data-validation-error-msg= "Không được để trống" data-validation="required" required />
								</fieldset>
							</div>
							<div class="col-sm-6 col-xs-12">
								<fieldset class="form-group">
									<label>Email<span class="required">*</span></label>
									<input type="email" name="contact[email]" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg= "Email sai định dạng" id="email" class="form-control form-control-lg" required />
								</fieldset>
							</div>
							<div class="col-sm-12 col-xs-12">
								<fieldset class="form-group">
									<label>Điện thoại<span class="required">*</span></label>
									<input type="tel" name="contact[phone]" data-validation="tel" data-validation-error-msg= "Không được để trống" id="tel" class="number-sidebar form-control form-control-lg" required />
								</fieldset>
							</div>
							<div class="col-sm-12 col-xs-12">
								<fieldset class="form-group">
									<label>Nội dung<span class="required">*</span></label>
									<textarea name="contact[body]" id="comment" class="form-control form-control-lg" rows="5" data-validation-error-msg= "Không được để trống" data-validation="required" required></textarea>
								</fieldset>
								<div class="pull-xs-left" style="margin-top:20px;">
									<button type="submit" class="btn btn-blues btn-style btn-style-active">Gửi tin nhắn</button>
								</div> 
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

		<link href="../bizweb.dktcdn.net/100/321/299/themes/670850/assets/bpr-products-modulef96c.css?1664275285895" rel="stylesheet" type="text/css" />
<div class="sapo-product-reviews-module"></div>
		

<?php get_footer(); ?>