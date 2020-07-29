<?php include('layout/header.php')?>
<body>
    <div class="my-container container-fluid">
        <?php include('layout/menu.php')?>
        <?php include('layout/slider.php')?>
        <div class="home-menu">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 item-menu">
                    <a href="pharmaceuticals.html"><div class="child-item-menu child-1">
                            <div class="info">
                                <div class="text">Pharmaceuticals</div>
                                <div class="line">&nbsp;</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 item-menu">
                    <a href="diagnostics.html"><div class="child-item-menu child-2">
                            <div class="info">
                                <div class="text">Diagnostics</div>
                                <div class="line">&nbsp;</div>
                            </div>
                        </div></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 item-menu">
                    <a href="practicesolution.html"><div class="child-item-menu child-3">
                            <div class="info">
                                <div class="text">Practice Solutions</div>
                                <div class="line">&nbsp;</div>
                            </div>
                        </div></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 item-menu">
                    <a href="education.html"><div class="child-item-menu child-4">
                            <div class="info">
                                <div class="text">Education</div>
                                <div class="line">&nbsp;</div>
                            </div>
                        </div></a>
                </div>
            </div>
        </div>
        <?php include('layout/footer.php')?>
    </div>
    <script type="text/javascript" src="js/index.js"></script>
    <script>
        setInterval(function() {
            console.log('slider change');
            $('.carousel-control.right').trigger('click');
        }, 6000);
    </script>
</body>

</html>