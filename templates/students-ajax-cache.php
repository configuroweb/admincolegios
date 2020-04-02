<script>
	$j(function(){
		var tn = 'students';

		/* data for selected record, or defaults if none is selected */
		var data = {
			Class: { id: '<?php echo $rdata['Class']; ?>', value: '<?php echo $rdata['Class']; ?>', text: '<?php echo $jdata['Class']; ?>' },
			Stream: { id: '<?php echo $rdata['Stream']; ?>', value: '<?php echo $rdata['Stream']; ?>', text: '<?php echo $jdata['Stream']; ?>' },
			Hostel: { id: '<?php echo $rdata['Hostel']; ?>', value: '<?php echo $rdata['Hostel']; ?>', text: '<?php echo $jdata['Hostel']; ?>' },
			Category: { id: '<?php echo $rdata['Category']; ?>', value: '<?php echo $rdata['Category']; ?>', text: '<?php echo $jdata['Category']; ?>' },
			AcademicYear: { id: '<?php echo $rdata['AcademicYear']; ?>', value: '<?php echo $rdata['AcademicYear']; ?>', text: '<?php echo $jdata['AcademicYear']; ?>' },
			TotalFees: { id: '<?php echo $rdata['TotalFees']; ?>', value: '<?php echo $rdata['TotalFees']; ?>', text: '<?php echo $jdata['TotalFees']; ?>' },
			Parent: { id: '<?php echo $rdata['Parent']; ?>', value: '<?php echo $rdata['Parent']; ?>', text: '<?php echo $jdata['Parent']; ?>' }
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

		/* saved value for Stream */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Stream' && d.id == data.Stream.id)
				return { results: [ data.Stream ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Hostel */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Hostel' && d.id == data.Hostel.id)
				return { results: [ data.Hostel ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Category */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Category' && d.id == data.Category.id)
				return { results: [ data.Category ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for AcademicYear */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'AcademicYear' && d.id == data.AcademicYear.id)
				return { results: [ data.AcademicYear ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for TotalFees */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'TotalFees' && d.id == data.TotalFees.id)
				return { results: [ data.TotalFees ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Parent */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Parent' && d.id == data.Parent.id)
				return { results: [ data.Parent ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

