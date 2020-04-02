<script>
	$j(function(){
		var tn = 'classattendance';

		/* data for selected record, or defaults if none is selected */
		var data = {
			Subject: { id: '<?php echo $rdata['Subject']; ?>', value: '<?php echo $rdata['Subject']; ?>', text: '<?php echo $jdata['Subject']; ?>' },
			Student: { id: '<?php echo $rdata['Student']; ?>', value: '<?php echo $rdata['Student']; ?>', text: '<?php echo $jdata['Student']; ?>' },
			RegNo: '<?php echo $jdata['RegNo']; ?>',
			Class: '<?php echo $jdata['Class']; ?>',
			Stream: '<?php echo $jdata['Stream']; ?>'
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for Subject */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Subject' && d.id == data.Subject.id)
				return { results: [ data.Subject ], more: false, elapsed: 0.01 };
			return false;
		});

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
				$j('#RegNo' + d[rnd]).html(data.RegNo);
				$j('#Class' + d[rnd]).html(data.Class);
				$j('#Stream' + d[rnd]).html(data.Stream);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

