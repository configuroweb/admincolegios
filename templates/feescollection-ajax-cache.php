<script>
	$j(function(){
		var tn = 'feescollection';

		/* data for selected record, or defaults if none is selected */
		var data = {
			Student: { id: '<?php echo $rdata['Student']; ?>', value: '<?php echo $rdata['Student']; ?>', text: '<?php echo $jdata['Student']; ?>' },
			Class: '<?php echo $jdata['Class']; ?>',
			Session: { id: '<?php echo $rdata['Session']; ?>', value: '<?php echo $rdata['Session']; ?>', text: '<?php echo $jdata['Session']; ?>' },
			Balance: '<?php echo $jdata['Balance']; ?>',
			Branch: { id: '<?php echo $rdata['Branch']; ?>', value: '<?php echo $rdata['Branch']; ?>', text: '<?php echo $jdata['Branch']; ?>' }
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for Student */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Student' && d.id == data.Student.id)
				return { results: [ data.Student ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Student autofills */
		cache.addCheck(function(u, d){
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'Student' && d.id == data.Student.id){
				$j('#Class' + d[rnd]).html(data.Class);
				$j('#Balance' + d[rnd]).html(data.Balance);
				return true;
			}

			return false;
		});

		/* saved value for Session */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Session' && d.id == data.Session.id)
				return { results: [ data.Session ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Branch */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Branch' && d.id == data.Branch.id)
				return { results: [ data.Branch ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

