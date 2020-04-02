<script>
	$j(function(){
		var tn = 'examresults';

		/* data for selected record, or defaults if none is selected */
		var data = {
			student: { id: '<?php echo $rdata['student']; ?>', value: '<?php echo $rdata['student']; ?>', text: '<?php echo $jdata['student']; ?>' },
			RegNo: '<?php echo $jdata['RegNo']; ?>',
			Class: '<?php echo $jdata['Class']; ?>',
			Stream: '<?php echo $jdata['Stream']; ?>',
			Category: { id: '<?php echo $rdata['Category']; ?>', value: '<?php echo $rdata['Category']; ?>', text: '<?php echo $jdata['Category']; ?>' },
			Subject: { id: '<?php echo $rdata['Subject']; ?>', value: '<?php echo $rdata['Subject']; ?>', text: '<?php echo $jdata['Subject']; ?>' },
			Term: { id: '<?php echo $rdata['Term']; ?>', value: '<?php echo $rdata['Term']; ?>', text: '<?php echo $jdata['Term']; ?>' },
			AcademicYear: '<?php echo $jdata['AcademicYear']; ?>'
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for student */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'student' && d.id == data.student.id)
				return { results: [ data.student ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for student autofills */
		cache.addCheck(function(u, d){
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'student' && d.id == data.student.id){
				$j('#RegNo' + d[rnd]).html(data.RegNo);
				$j('#Class' + d[rnd]).html(data.Class);
				$j('#Stream' + d[rnd]).html(data.Stream);
				$j('#AcademicYear' + d[rnd]).html(data.AcademicYear);
				return true;
			}

			return false;
		});

		/* saved value for Category */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Category' && d.id == data.Category.id)
				return { results: [ data.Category ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Subject */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Subject' && d.id == data.Subject.id)
				return { results: [ data.Subject ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Term */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Term' && d.id == data.Term.id)
				return { results: [ data.Term ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

