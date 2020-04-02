<?php
	// check this file's MD5 to make sure it wasn't called before
	$prevMD5=@implode('', @file(dirname(__FILE__).'/setup.md5'));
	$thisMD5=md5(@implode('', @file("./updateDB.php")));
	if($thisMD5==$prevMD5){
		$setupAlreadyRun=true;
	}else{
		// set up tables
		if(!isset($silent)){
			$silent=true;
		}

		// set up tables
		setupTable('students', "create table if not exists `students` (   `id` INT unsigned not null auto_increment , primary key (`id`), `FullName` VARCHAR(40) not null , `Gender` VARCHAR(40) not null , `DOB` DATE not null , `Photo` VARCHAR(40) , `RegNo` VARCHAR(40) not null , unique `RegNo_unique` (`RegNo`), `Class` INT unsigned not null , `Stream` INT unsigned , `Hostel` INT unsigned , `DOJ` DATE not null , `Category` INT unsigned , `AcademicYear` INT unsigned not null , `TotalFees` INT unsigned not null , `AdvanceFees` INT not null , `Balance` INT , `Parent` INT unsigned ) CHARSET utf8", $silent, array( "ALTER TABLE students ADD `field17` VARCHAR(40)","ALTER TABLE `students` CHANGE `field17` `Session` VARCHAR(40) "," ALTER TABLE `students` CHANGE `Session` `Session` VARCHAR(40) not null "," ALTER TABLE `students` CHANGE `Session` `Session` INT unsigned ","ALTER TABLE `students` DROP `Session`"));
		setupIndexes('students', array('Class','Stream','Hostel','Category','AcademicYear','TotalFees','Parent'));
		setupTable('feescollection', "create table if not exists `feescollection` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Student` INT unsigned not null , `Class` INT unsigned , `Session` INT unsigned not null , `PaidAmount` INT not null , `Balance` INT unsigned , `Branch` INT unsigned not null , `Date` DATE , `Remarks` VARCHAR(40) ) CHARSET utf8", $silent);
		setupIndexes('feescollection', array('Student','Session','Branch'));
		setupTable('branch', "create table if not exists `branch` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Name` VARCHAR(40) not null , `AccountNumber` VARCHAR(40) not null ) CHARSET utf8", $silent);
		setupTable('teachers', "create table if not exists `teachers` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Name` VARCHAR(40) not null , `Gender` VARCHAR(40) not null , `Age` INT not null , `Phone` VARCHAR(40) not null , `Email` VARCHAR(80) , `StaffNumber` INT not null ) CHARSET utf8", $silent);
		setupTable('subjects', "create table if not exists `subjects` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Name` VARCHAR(40) not null ) CHARSET utf8", $silent);
		setupTable('classes', "create table if not exists `classes` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Name` VARCHAR(40) not null ) CHARSET utf8", $silent);
		setupTable('streams', "create table if not exists `streams` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Name` VARCHAR(40) not null ) CHARSET utf8", $silent);
		setupTable('hostels', "create table if not exists `hostels` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Name` VARCHAR(40) not null , `Status` VARCHAR(40) not null ) CHARSET utf8", $silent);
		setupTable('timetable', "create table if not exists `timetable` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Time_Table` VARCHAR(40) not null , `Class` INT unsigned not null , `Stream` INT unsigned ) CHARSET utf8", $silent);
		setupIndexes('timetable', array('Class','Stream'));
		setupTable('events', "create table if not exists `events` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Name` VARCHAR(40) not null , `Date` DATE not null , `Details` TEXT not null ) CHARSET utf8", $silent);
		setupTable('notices', "create table if not exists `notices` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Name` VARCHAR(40) not null , `Date` DATE not null , `Details` TEXT not null , `Posted_By` VARCHAR(40) ) CHARSET utf8", $silent);
		setupTable('examresults', "create table if not exists `examresults` (   `id` INT unsigned not null auto_increment , primary key (`id`), `student` INT unsigned not null , `RegNo` INT unsigned , `Class` INT unsigned , `Stream` INT unsigned , `Category` INT unsigned , `Subject` INT unsigned , `Marks` INT not null , `Term` INT unsigned not null , `AcademicYear` INT unsigned ) CHARSET utf8", $silent);
		setupIndexes('examresults', array('student','Category','Subject','Term'));
		setupTable('parents', "create table if not exists `parents` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Name` VARCHAR(40) not null , `Phone` VARCHAR(40) not null , `Email` VARCHAR(80) , `HomeAddress` VARCHAR(40) ) CHARSET utf8", $silent);
		setupTable('examcategories', "create table if not exists `examcategories` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Name` VARCHAR(40) not null ) CHARSET utf8", $silent);
		setupTable('sessions', "create table if not exists `sessions` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Year` VARCHAR(40) not null , `Term` VARCHAR(40) not null , `status` VARCHAR(40) ) CHARSET utf8", $silent, array( "ALTER TABLE sessions ADD `field4` VARCHAR(40)","ALTER TABLE `sessions` CHANGE `field4` `status` VARCHAR(40) "));
		setupTable('studentcategories', "create table if not exists `studentcategories` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Name` VARCHAR(40) not null ) CHARSET utf8", $silent);
		setupTable('classattendance', "create table if not exists `classattendance` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Subject` INT unsigned not null , `Student` INT unsigned not null , `RegNo` INT unsigned , `Class` INT unsigned , `Stream` INT unsigned , `Attended` VARCHAR(40) , `Date` DATE ) CHARSET utf8", $silent);
		setupIndexes('classattendance', array('Subject','Student'));
		setupTable('schoolmoney', "create table if not exists `schoolmoney` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Class` INT unsigned not null , `Particulars` TEXT not null , `Total` DECIMAL(10,2) not null ) CHARSET utf8", $silent);
		setupIndexes('schoolmoney', array('Class'));


		// save MD5
		if($fp=@fopen(dirname(__FILE__).'/setup.md5', 'w')){
			fwrite($fp, $thisMD5);
			fclose($fp);
		}
	}


	function setupIndexes($tableName, $arrFields){
		if(!is_array($arrFields)){
			return false;
		}

		foreach($arrFields as $fieldName){
			if(!$res=@db_query("SHOW COLUMNS FROM `$tableName` like '$fieldName'")){
				continue;
			}
			if(!$row=@db_fetch_assoc($res)){
				continue;
			}
			if($row['Key']==''){
				@db_query("ALTER TABLE `$tableName` ADD INDEX `$fieldName` (`$fieldName`)");
			}
		}
	}


	function setupTable($tableName, $createSQL='', $silent=true, $arrAlter=''){
		global $Translation;
		ob_start();

		echo '<div style="padding: 5px; border-bottom:solid 1px silver; font-family: verdana, arial; font-size: 10px;">';

		// is there a table rename query?
		if(is_array($arrAlter)){
			$matches=array();
			if(preg_match("/ALTER TABLE `(.*)` RENAME `$tableName`/", $arrAlter[0], $matches)){
				$oldTableName=$matches[1];
			}
		}

		if($res=@db_query("select count(1) from `$tableName`")){ // table already exists
			if($row = @db_fetch_array($res)){
				echo str_replace("<TableName>", $tableName, str_replace("<NumRecords>", $row[0],$Translation["table exists"]));
				if(is_array($arrAlter)){
					echo '<br>';
					foreach($arrAlter as $alter){
						if($alter!=''){
							echo "$alter ... ";
							if(!@db_query($alter)){
								echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
								echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
							}else{
								echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
							}
						}
					}
				}else{
					echo $Translation["table uptodate"];
				}
			}else{
				echo str_replace("<TableName>", $tableName, $Translation["couldnt count"]);
			}
		}else{ // given tableName doesn't exist

			if($oldTableName!=''){ // if we have a table rename query
				if($ro=@db_query("select count(1) from `$oldTableName`")){ // if old table exists, rename it.
					$renameQuery=array_shift($arrAlter); // get and remove rename query

					echo "$renameQuery ... ";
					if(!@db_query($renameQuery)){
						echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
						echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
					}else{
						echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
					}

					if(is_array($arrAlter)) setupTable($tableName, $createSQL, false, $arrAlter); // execute Alter queries on renamed table ...
				}else{ // if old tableName doesn't exist (nor the new one since we're here), then just create the table.
					setupTable($tableName, $createSQL, false); // no Alter queries passed ...
				}
			}else{ // tableName doesn't exist and no rename, so just create the table
				echo str_replace("<TableName>", $tableName, $Translation["creating table"]);
				if(!@db_query($createSQL)){
					echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
					echo '<div class="text-danger">' . $Translation['mysql said'] . db_error(db_link()) . '</div>';
				}else{
					echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
				}
			}
		}

		echo "</div>";

		$out=ob_get_contents();
		ob_end_clean();
		if(!$silent){
			echo $out;
		}
	}
?>