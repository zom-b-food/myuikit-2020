<style type="text/css">
	.fa-2x {
		font-size: 2.25rem;
		margin-top:26px;
	}
	.thumb {
		background-color:#F8EFE6;
	}
</style>
<div class="wow fadeInUp whitetext">
	<h4 class="text-center">
		[Functional widgets <em>ready for you to style</em>.]
	</h4>
</div>
<div class="row">
	<div class="col s12 m6 l4 portfolio-item">
		<div class="portfolio-wrapper">
            <div class="thumb">
                <div class="bg-overlay"></div>
                <div class="portfolio-title">
                    <p>
                        <a href="#">Cool Flyup Window</a>
                        <br/>
                        <i class="small material-icons">memory</i>
                    </p>
                </div>
                <div class="portfolio-intro">
                    <div class="action-btn">
                        <a href="/grabit/footerFly/index.html" class="popwin popwinreg">
                            <i class="fa fa-search fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<div class="col-md-4 col-sm-12 portfolio-item">
		sticky footer
	</div>
	<div class="col-md-4 col-sm-12 portfolio-item">
		layered slider
	</div>
</div>
<div class="row">
	<div class="col-md-4 col-sm-12 portfolio-item">
		sortable table
	</div>
	<div class="col-md-4 col-sm-12 portfolio-item">
		tab viewer
	</div>
	<div class="col-md-4 col-sm-12 portfolio-item">
		smart buttons
	</div>
</div>
<script src="/assets/js/components/jquery.popWin.js"></script>
<script>
	$('.popwinbug').popupWindow({
                height: 300,
                width: 800,
                top: 50,
                left: 50,
                resizable: 1,
                scrollbars: 1
            });


            $('.popwinmed').popupWindow({
                height: 900,
                width: 800,
                top: 50,
                left: 50,
                resizable: 1,
                scrollbars: 1
            });
            $('.popwinsmall').popupWindow({
                height: 900,
                width: 700,
                top: 50,
                left: 50,
                resizable: 1,
                scrollbars: 1
            });
            $('.popwinreg').popupWindow({
                height: 900,
                width: 1000,
                top: 50,
                left: 50,
                resizable: 1,
                scrollbars: 1
            });
            $('.popwinlarge').popupWindow({
                height: 900,
                width: 1300,
                top: 50,
                left: 50,
                resizable: 1,
                scrollbars: 1
            });
        </script>
