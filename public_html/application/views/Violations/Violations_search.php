<div class='container' style="padding-top:150px">
	<h3>
		<?=$PersonName;?>
	</h3>
	  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Citations <span class="badge"><?=$CitationCount;?></span></a></li>
    <li role="presentation"><a href="#violations" aria-controls="violations" role="tab" data-toggle="tab">Violations <span class="badge"><?=$ViolationCount;?></a></li>
    <li role="presentation"><a href="#warrants" aria-controls="warrants" role="tab" data-toggle="tab">Warrants <span class="badge badge-danger"><?=$WarrantCount;?></a></li>
  </ul>
	
	<!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">...</div>
    <div role="tabpanel" class="tab-pane" id="violations">...</div>
    <div role="tabpanel" class="tab-pane" id="warrants">...</div>
  </div>
	
</div>
