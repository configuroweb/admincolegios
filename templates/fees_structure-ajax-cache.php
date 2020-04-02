<script>
	$j(function(){
		var tn = 'fees_structure';

		/* data for selected record, or defaults if none is selected */
		var data = {
			Class: { id: '<?php echo $rdata['Class']; ?>', value: '<?php echo $rdata['Class']; ?>', text: '<?php echo $jdata['Class']; ?>' }
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for Class */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Class' && d.id == data.Class.id)
				return { results: [ data.Class ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

