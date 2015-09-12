<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url();?>" alt="Homepage">Pashle</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top" alt="Back to Top"></a>
                    </li>
                    <li class="page-scroll">
						<a href="<?=base_url();?>" class="<? if($curNav=='search'){?>active<? }?>" alt="Search">Search</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?=base_url();?>volunteer" class="<? if($curNav=='volunteer'){?>active<? }?>" alt="Volunteer">Volunteer</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?=base_url();?>information" class="<? if($curNav=='information'){?>active<? }?>" alt="Information">Information</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>