<?php
	$currDir = dirname(__FILE__);
	require("{$currDir}/incCommon.php");
	$GLOBALS['page_title'] = $Translation['view or rebuild fields'];
	include("{$currDir}/incHeader.php");

	/*
		$schema: [ tablename => [ fieldname => [ appgini => '...', 'db' => '...'], ... ], ... ]
	*/

	/* application schema as created in AppGini */
	$schema = array(   
		'students' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'FullName' => array('appgini' => 'VARCHAR(40) not null '),
			'Gender' => array('appgini' => 'VARCHAR(40) not null '),
			'DOB' => array('appgini' => 'DATE not null '),
			'Photo' => array('appgini' => 'VARCHAR(40) '),
			'RegNo' => array('appgini' => 'VARCHAR(40) not null unique '),
			'Class' => array('appgini' => 'INT unsigned not null '),
			'Stream' => array('appgini' => 'INT unsigned '),
			'Hostel' => array('appgini' => 'INT unsigned '),
			'DOJ' => array('appgini' => 'DATE not null '),
			'Category' => array('appgini' => 'INT unsigned '),
			'AcademicYear' => array('appgini' => 'INT unsigned not null '),
			'TotalFees' => array('appgini' => 'INT unsigned not null '),
			'AdvanceFees' => array('appgini' => 'INT not null '),
			'Balance' => array('appgini' => 'INT '),
			'Parent' => array('appgini' => 'INT unsigned ')
		),
		'feescollection' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Student' => array('appgini' => 'INT unsigned not null '),
			'Class' => array('appgini' => 'INT unsigned '),
			'Session' => array('appgini' => 'INT unsigned not null '),
			'PaidAmount' => array('appgini' => 'INT not null '),
			'Balance' => array('appgini' => 'INT unsigned '),
			'Branch' => array('appgini' => 'INT unsigned not null '),
			'Date' => array('appgini' => 'DATE '),
			'Remarks' => array('appgini' => 'VARCHAR(40) ')
		),
		'branch' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Name' => array('appgini' => 'VARCHAR(40) not null '),
			'AccountNumber' => array('appgini' => 'VARCHAR(40) not null ')
		),
		'teachers' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Name' => array('appgini' => 'VARCHAR(40) not null '),
			'Gender' => array('appgini' => 'VARCHAR(40) not null '),
			'Age' => array('appgini' => 'INT not null '),
			'Phone' => array('appgini' => 'VARCHAR(40) not null '),
			'Email' => array('appgini' => 'VARCHAR(80) '),
			'StaffNumber' => array('appgini' => 'INT not null ')
		),
		'subjects' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Name' => array('appgini' => 'VARCHAR(40) not null ')
		),
		'classes' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Name' => array('appgini' => 'VARCHAR(40) not null ')
		),
		'streams' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Name' => array('appgini' => 'VARCHAR(40) not null ')
		),
		'hostels' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Name' => array('appgini' => 'VARCHAR(40) not null '),
			'Status' => array('appgini' => 'VARCHAR(40) not null ')
		),
		'timetable' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Time_Table' => array('appgini' => 'VARCHAR(40) not null '),
			'Class' => array('appgini' => 'INT unsigned not null '),
			'Stream' => array('appgini' => 'INT unsigned ')
		),
		'events' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Name' => array('appgini' => 'VARCHAR(40) not null '),
			'Date' => array('appgini' => 'DATE not null '),
			'Details' => array('appgini' => 'TEXT not null ')
		),
		'notices' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Name' => array('appgini' => 'VARCHAR(40) not null '),
			'Date' => array('appgini' => 'DATE not null '),
			'Details' => array('appgini' => 'TEXT not null '),
			'Posted_By' => array('appgini' => 'VARCHAR(40) ')
		),
		'examresults' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'student' => array('appgini' => 'INT unsigned not null '),
			'RegNo' => array('appgini' => 'INT unsigned '),
			'Class' => array('appgini' => 'INT unsigned '),
			'Stream' => array('appgini' => 'INT unsigned '),
			'Category' => array('appgini' => 'INT unsigned '),
			'Subject' => array('appgini' => 'INT unsigned '),
			'Marks' => array('appgini' => 'INT not null '),
			'Term' => array('appgini' => 'INT unsigned not null '),
			'AcademicYear' => array('appgini' => 'INT unsigned ')
		),
		'parents' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Name' => array('appgini' => 'VARCHAR(40) not null '),
			'Phone' => array('appgini' => 'VARCHAR(40) not null '),
			'Email' => array('appgini' => 'VARCHAR(80) '),
			'HomeAddress' => array('appgini' => 'VARCHAR(40) ')
		),
		'examcategories' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Name' => array('appgini' => 'VARCHAR(40) not null ')
		),
		'sessions' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Year' => array('appgini' => 'VARCHAR(40) not null '),
			'Term' => array('appgini' => 'VARCHAR(40) not null '),
			'status' => array('appgini' => 'VARCHAR(40) ')
		),
		'studentcategories' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Name' => array('appgini' => 'VARCHAR(40) not null ')
		),
		'classattendance' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Subject' => array('appgini' => 'INT unsigned not null '),
			'Student' => array('appgini' => 'INT unsigned not null '),
			'RegNo' => array('appgini' => 'INT unsigned '),
			'Class' => array('appgini' => 'INT unsigned '),
			'Stream' => array('appgini' => 'INT unsigned '),
			'Attended' => array('appgini' => 'VARCHAR(40) '),
			'Date' => array('appgini' => 'DATE ')
		),
		'schoolmoney' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'Class' => array('appgini' => 'INT unsigned not null '),
			'Particulars' => array('appgini' => 'TEXT not null '),
			'Total' => array('appgini' => 'DECIMAL(10,2) not null ')
		)
	);

	$table_captions = getTableList();

	/* function for preparing field definition for comparison */
	function prepare_def($def){
		$def = trim($def);
		$def = strtolower($def);

		/* ignore length for int data types */
		$def = preg_replace('/int\w*\([0-9]+\)/', 'int', $def);

		/* make sure there is always a space before mysql words */
		$def = preg_replace('/(\S)(unsigned|not null|binary|zerofill|auto_increment|default)/', '$1 $2', $def);

		/* treat 0.000.. same as 0 */
		$def = preg_replace('/([0-9])*\.0+/', '$1', $def);

		/* treat unsigned zerofill same as zerofill */
		$def = str_ireplace('unsigned zerofill', 'zerofill', $def);

		/* ignore zero-padding for date data types */
		$def = preg_replace("/date\s*default\s*'([0-9]{4})-0?([1-9])-0?([1-9])'/i", "date default '$1-$2-$3'", $def);

		return $def;
	}

	/**
	 *  @brief creates/fixes given field according to given schema
	 *  @return integer: 0 = error, 1 = field updated, 2 = field created
	 */
	function fix_field($fix_table, $fix_field, $schema, &$qry){
		if(!isset($schema[$fix_table][$fix_field])) return 0;

		$def = $schema[$fix_table][$fix_field];
		$field_added = $field_updated = false;
		$eo['silentErrors'] = true;

		// field exists?
		$res = sql("show columns from `{$fix_table}` like '{$fix_field}'", $eo);
		if($row = db_fetch_assoc($res)){
			// modify field
			$qry = "alter table `{$fix_table}` modify `{$fix_field}` {$def['appgini']}";
			sql($qry, $eo);

			// remove unique from db if necessary
			if($row['Key'] == 'UNI' && !stripos($def['appgini'], ' unique')){
				// retrieve unique index name
				$res_unique = sql("show index from `{$fix_table}` where Column_name='{$fix_field}' and Non_unique=0", $eo);
				if($row_unique = db_fetch_assoc($res_unique)){
					$qry_unique = "drop index `{$row_unique['Key_name']}` on `{$fix_table}`";
					sql($qry_unique, $eo);
					$qry .= ";\n{$qry_unique}";
				}
			}

			return 1;
		}

		// create field
		$qry = "alter table `{$fix_table}` add column `{$fix_field}` {$schema[$fix_table][$fix_field]['appgini']}";
		sql($qry, $eo);
		return 2;
	}

	/* process requested fixes */
	$fix_table = (isset($_GET['t']) ? $_GET['t'] : false);
	$fix_field = (isset($_GET['f']) ? $_GET['f'] : false);
	$fix_all = (isset($_GET['all']) ? true : false);

	if($fix_field && $fix_table) $fix_status = fix_field($fix_table, $fix_field, $schema, $qry);

	/* retrieve actual db schema */
	foreach($table_captions as $tn => $tc){
		$eo['silentErrors'] = true;
		$res = sql("show columns from `{$tn}`", $eo);
		if($res){
			while($row = db_fetch_assoc($res)){
				if(!isset($schema[$tn][$row['Field']]['appgini'])) continue;
				$field_description = strtoupper(str_replace(' ', '', $row['Type']));
				$field_description = str_ireplace('unsigned', ' unsigned', $field_description);
				$field_description = str_ireplace('zerofill', ' zerofill', $field_description);
				$field_description = str_ireplace('binary', ' binary', $field_description);
				$field_description .= ($row['Null'] == 'NO' ? ' not null' : '');
				$field_description .= ($row['Key'] == 'PRI' ? ' primary key' : '');
				$field_description .= ($row['Key'] == 'UNI' ? ' unique' : '');
				$field_description .= ($row['Default'] != '' ? " default '" . makeSafe($row['Default']) . "'" : '');
				$field_description .= ($row['Extra'] == 'auto_increment' ? ' auto_increment' : '');

				$schema[$tn][$row['Field']]['db'] = '';
				if(isset($schema[$tn][$row['Field']])){
					$schema[$tn][$row['Field']]['db'] = $field_description;
				}
			}
		}
	}

	/* handle fix_all request */
	if($fix_all){
		foreach($schema as $tn => $fields){
			foreach($fields as $fn => $fd){
				if(prepare_def($fd['appgini']) == prepare_def($fd['db'])) continue;
				fix_field($tn, $fn, $schema, $qry);
			}
		}

		redirect('admin/pageRebuildFields.php');
		exit;
	}
?>

<?php if($fix_status == 1 || $fix_status == 2){ ?>
	<div class="alert alert-info alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<i class="glyphicon glyphicon-info-sign"></i>
		<?php 
			$originalValues = array('<ACTION>', '<FIELD>', '<TABLE>', '<QUERY>');
			$action = ($fix_status == 2 ? 'create' : 'update');
			$replaceValues = array($action, $fix_field, $fix_table, $qry);
			echo str_replace($originalValues, $replaceValues, $Translation['create or update table']);
		?>
	</div>
<?php } ?>

<div class="page-header"><h1>
	<?php echo $Translation['view or rebuild fields'] ; ?>
	<button type="button" class="btn btn-default" id="show_deviations_only"><i class="glyphicon glyphicon-eye-close"></i> <?php echo $Translation['show deviations only'] ; ?></button>
	<button type="button" class="btn btn-default hidden" id="show_all_fields"><i class="glyphicon glyphicon-eye-open"></i> <?php echo $Translation['show all fields'] ; ?></button>
</h1></div>

<p class="lead"><?php echo $Translation['compare tables page'] ; ?></p>

<div class="alert summary"></div>
<table class="table table-responsive table-hover table-striped">
	<thead><tr>
		<th></th>
		<th><?php echo $Translation['field'] ; ?></th>
		<th><?php echo $Translation['AppGini definition'] ; ?></th>
		<th><?php echo $Translation['database definition'] ; ?></th>
		<th id="fix_all"></th>
	</tr></thead>

	<tbody>
	<?php foreach($schema as $tn => $fields){ ?>
		<tr class="text-info"><td colspan="5"><h4 data-placement="left" data-toggle="tooltip" title="<?php echo str_replace ( "<TABLENAME>" , $tn , $Translation['table name title']) ; ?>"><i class="glyphicon glyphicon-th-list"></i> <?php echo $table_captions[$tn]; ?></h4></td></tr>
		<?php foreach($fields as $fn => $fd){ ?>
			<?php $diff = ((prepare_def($fd['appgini']) == prepare_def($fd['db'])) ? false : true); ?>
			<?php $no_db = ($fd['db'] ? false : true); ?>
			<tr class="<?php echo ($diff ? 'warning' : 'field_ok'); ?>">
				<td><i class="glyphicon glyphicon-<?php echo ($diff ? 'remove text-danger' : 'ok text-success'); ?>"></i></td>
				<td><?php echo $fn; ?></td>
				<td class="<?php echo ($diff ? 'bold text-success' : ''); ?>"><?php echo $fd['appgini']; ?></td>
				<td class="<?php echo ($diff ? 'bold text-danger' : ''); ?>"><?php echo thisOr($fd['db'], $Translation['does not exist']); ?></td>
				<td>
					<?php if($diff && $no_db){ ?>
						<a href="pageRebuildFields.php?t=<?php echo $tn; ?>&f=<?php echo $fn; ?>" class="btn btn-success btn-xs btn_create" data-toggle="tooltip" data-placement="top" title="<?php echo $Translation['create field'] ; ?>"><i class="glyphicon glyphicon-plus"></i> <?php echo $Translation['create it'] ; ?></a>
					<?php }elseif($diff){ ?>
						<a href="pageRebuildFields.php?t=<?php echo $tn; ?>&f=<?php echo $fn; ?>" class="btn btn-warning btn-xs btn_update" data-toggle="tooltip" title="<?php echo $Translation['fix field'] ; ?>"><i class="glyphicon glyphicon-cog"></i> <?php echo $Translation['fix it'] ; ?></a>
					<?php } ?>
				</td>
			</tr>
		<?php } ?>
	<?php } ?>
	</tbody>
</table>
<div class="alert summary"></div>

<style>
	.bold{ font-weight: bold; }
	[data-toggle="tooltip"]{ display: block !important; }
</style>

<script>
	$j(function(){
		$j('[data-toggle="tooltip"]').tooltip();

		$j('#show_deviations_only').click(function(){
			$j(this).addClass('hidden');
			$j('#show_all_fields').removeClass('hidden');
			$j('.field_ok').hide();
		});

		$j('#show_all_fields').click(function(){
			$j(this).addClass('hidden');
			$j('#show_deviations_only').removeClass('hidden');
			$j('.field_ok').show();
		});

		$j('.btn_update, #fix_all').click(function(){
			return confirm("<?php echo $Translation['field update warning'] ; ?>");
		});

		var count_updates = $j('.btn_update').length;
		var count_creates = $j('.btn_create').length;
		if(!count_creates && !count_updates){
			$j('.summary').addClass('alert-success').html("<?php echo $Translation['no deviations found'] ; ?>");
		}else{
			var fieldsCount = "<?php echo $Translation['error fields']; ?>";
			fieldsCount = fieldsCount.replace(/<CREATENUM>/, count_creates ).replace(/<UPDATENUM>/, count_updates);


			$j('.summary')
				.addClass('alert-warning')
				.html(
					fieldsCount + 
					'<br><br>' + 
					'<a href="pageBackupRestore.php" class="alert-link">' +
						'<b><?php echo addslashes($Translation['backup before fix']); ?></b>' +
					'</a>'
				);

			$j('<a href="pageRebuildFields.php?all=1" class="btn btn-danger btn-block"><i class="glyphicon glyphicon-cog"></i> <?php echo addslashes($Translation['fix all']); ?></a>').appendTo('#fix_all');
		}
	});
</script>

<?php
	include("{$currDir}/incFooter.php");
?>
