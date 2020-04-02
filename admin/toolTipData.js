var FiltersEnabled = 0; // if your not going to use transitions or filters in any of the tips set this to 0
var spacer="&nbsp; &nbsp; &nbsp; ";

// email notifications to admin
notifyAdminNewMembers0Tip=["", spacer+"No email notifications to admin."];
notifyAdminNewMembers1Tip=["", spacer+"Notify admin only when a new member is waiting for approval."];
notifyAdminNewMembers2Tip=["", spacer+"Notify admin for all new sign-ups."];

// visitorSignup
visitorSignup0Tip=["", spacer+"If this option is selected, visitors will not be able to join this group unless the admin manually moves them to this group from the admin area."];
visitorSignup1Tip=["", spacer+"If this option is selected, visitors can join this group but will not be able to sign in unless the admin approves them from the admin area."];
visitorSignup2Tip=["", spacer+"If this option is selected, visitors can join this group and will be able to sign in instantly with no need for admin approval."];

// students table
students_addTip=["",spacer+"This option allows all members of the group to add records to the 'Students' table. A member who adds a record to the table becomes the 'owner' of that record."];

students_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Students' table."];
students_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Students' table."];
students_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Students' table."];
students_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Students' table."];

students_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Students' table."];
students_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Students' table."];
students_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Students' table."];
students_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Students' table, regardless of their owner."];

students_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Students' table."];
students_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Students' table."];
students_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Students' table."];
students_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Students' table."];

// feescollection table
feescollection_addTip=["",spacer+"This option allows all members of the group to add records to the 'FeesCollection' table. A member who adds a record to the table becomes the 'owner' of that record."];

feescollection_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'FeesCollection' table."];
feescollection_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'FeesCollection' table."];
feescollection_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'FeesCollection' table."];
feescollection_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'FeesCollection' table."];

feescollection_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'FeesCollection' table."];
feescollection_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'FeesCollection' table."];
feescollection_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'FeesCollection' table."];
feescollection_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'FeesCollection' table, regardless of their owner."];

feescollection_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'FeesCollection' table."];
feescollection_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'FeesCollection' table."];
feescollection_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'FeesCollection' table."];
feescollection_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'FeesCollection' table."];

// branch table
branch_addTip=["",spacer+"This option allows all members of the group to add records to the 'Branch' table. A member who adds a record to the table becomes the 'owner' of that record."];

branch_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Branch' table."];
branch_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Branch' table."];
branch_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Branch' table."];
branch_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Branch' table."];

branch_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Branch' table."];
branch_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Branch' table."];
branch_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Branch' table."];
branch_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Branch' table, regardless of their owner."];

branch_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Branch' table."];
branch_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Branch' table."];
branch_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Branch' table."];
branch_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Branch' table."];

// teachers table
teachers_addTip=["",spacer+"This option allows all members of the group to add records to the 'Teachers' table. A member who adds a record to the table becomes the 'owner' of that record."];

teachers_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Teachers' table."];
teachers_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Teachers' table."];
teachers_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Teachers' table."];
teachers_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Teachers' table."];

teachers_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Teachers' table."];
teachers_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Teachers' table."];
teachers_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Teachers' table."];
teachers_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Teachers' table, regardless of their owner."];

teachers_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Teachers' table."];
teachers_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Teachers' table."];
teachers_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Teachers' table."];
teachers_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Teachers' table."];

// subjects table
subjects_addTip=["",spacer+"This option allows all members of the group to add records to the 'Subjects' table. A member who adds a record to the table becomes the 'owner' of that record."];

subjects_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Subjects' table."];
subjects_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Subjects' table."];
subjects_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Subjects' table."];
subjects_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Subjects' table."];

subjects_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Subjects' table."];
subjects_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Subjects' table."];
subjects_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Subjects' table."];
subjects_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Subjects' table, regardless of their owner."];

subjects_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Subjects' table."];
subjects_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Subjects' table."];
subjects_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Subjects' table."];
subjects_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Subjects' table."];

// classes table
classes_addTip=["",spacer+"This option allows all members of the group to add records to the 'Classes' table. A member who adds a record to the table becomes the 'owner' of that record."];

classes_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Classes' table."];
classes_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Classes' table."];
classes_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Classes' table."];
classes_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Classes' table."];

classes_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Classes' table."];
classes_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Classes' table."];
classes_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Classes' table."];
classes_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Classes' table, regardless of their owner."];

classes_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Classes' table."];
classes_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Classes' table."];
classes_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Classes' table."];
classes_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Classes' table."];

// streams table
streams_addTip=["",spacer+"This option allows all members of the group to add records to the 'Streams' table. A member who adds a record to the table becomes the 'owner' of that record."];

streams_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Streams' table."];
streams_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Streams' table."];
streams_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Streams' table."];
streams_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Streams' table."];

streams_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Streams' table."];
streams_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Streams' table."];
streams_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Streams' table."];
streams_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Streams' table, regardless of their owner."];

streams_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Streams' table."];
streams_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Streams' table."];
streams_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Streams' table."];
streams_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Streams' table."];

// hostels table
hostels_addTip=["",spacer+"This option allows all members of the group to add records to the 'Hostels' table. A member who adds a record to the table becomes the 'owner' of that record."];

hostels_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Hostels' table."];
hostels_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Hostels' table."];
hostels_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Hostels' table."];
hostels_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Hostels' table."];

hostels_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Hostels' table."];
hostels_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Hostels' table."];
hostels_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Hostels' table."];
hostels_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Hostels' table, regardless of their owner."];

hostels_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Hostels' table."];
hostels_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Hostels' table."];
hostels_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Hostels' table."];
hostels_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Hostels' table."];

// timetable table
timetable_addTip=["",spacer+"This option allows all members of the group to add records to the 'TimeTable' table. A member who adds a record to the table becomes the 'owner' of that record."];

timetable_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'TimeTable' table."];
timetable_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'TimeTable' table."];
timetable_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'TimeTable' table."];
timetable_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'TimeTable' table."];

timetable_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'TimeTable' table."];
timetable_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'TimeTable' table."];
timetable_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'TimeTable' table."];
timetable_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'TimeTable' table, regardless of their owner."];

timetable_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'TimeTable' table."];
timetable_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'TimeTable' table."];
timetable_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'TimeTable' table."];
timetable_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'TimeTable' table."];

// events table
events_addTip=["",spacer+"This option allows all members of the group to add records to the 'Events' table. A member who adds a record to the table becomes the 'owner' of that record."];

events_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Events' table."];
events_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Events' table."];
events_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Events' table."];
events_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Events' table."];

events_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Events' table."];
events_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Events' table."];
events_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Events' table."];
events_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Events' table, regardless of their owner."];

events_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Events' table."];
events_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Events' table."];
events_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Events' table."];
events_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Events' table."];

// notices table
notices_addTip=["",spacer+"This option allows all members of the group to add records to the ' Notices/Announcements' table. A member who adds a record to the table becomes the 'owner' of that record."];

notices_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the ' Notices/Announcements' table."];
notices_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the ' Notices/Announcements' table."];
notices_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the ' Notices/Announcements' table."];
notices_view3Tip=["",spacer+"This option allows each member of the group to view all records in the ' Notices/Announcements' table."];

notices_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the ' Notices/Announcements' table."];
notices_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the ' Notices/Announcements' table."];
notices_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the ' Notices/Announcements' table."];
notices_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the ' Notices/Announcements' table, regardless of their owner."];

notices_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the ' Notices/Announcements' table."];
notices_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the ' Notices/Announcements' table."];
notices_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the ' Notices/Announcements' table."];
notices_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the ' Notices/Announcements' table."];

// examresults table
examresults_addTip=["",spacer+"This option allows all members of the group to add records to the 'Exam Results' table. A member who adds a record to the table becomes the 'owner' of that record."];

examresults_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Exam Results' table."];
examresults_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Exam Results' table."];
examresults_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Exam Results' table."];
examresults_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Exam Results' table."];

examresults_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Exam Results' table."];
examresults_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Exam Results' table."];
examresults_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Exam Results' table."];
examresults_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Exam Results' table, regardless of their owner."];

examresults_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Exam Results' table."];
examresults_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Exam Results' table."];
examresults_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Exam Results' table."];
examresults_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Exam Results' table."];

// parents table
parents_addTip=["",spacer+"This option allows all members of the group to add records to the 'Parents' table. A member who adds a record to the table becomes the 'owner' of that record."];

parents_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Parents' table."];
parents_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Parents' table."];
parents_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Parents' table."];
parents_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Parents' table."];

parents_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Parents' table."];
parents_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Parents' table."];
parents_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Parents' table."];
parents_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Parents' table, regardless of their owner."];

parents_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Parents' table."];
parents_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Parents' table."];
parents_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Parents' table."];
parents_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Parents' table."];

// examcategories table
examcategories_addTip=["",spacer+"This option allows all members of the group to add records to the 'ExamCategories' table. A member who adds a record to the table becomes the 'owner' of that record."];

examcategories_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'ExamCategories' table."];
examcategories_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'ExamCategories' table."];
examcategories_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'ExamCategories' table."];
examcategories_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'ExamCategories' table."];

examcategories_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'ExamCategories' table."];
examcategories_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'ExamCategories' table."];
examcategories_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'ExamCategories' table."];
examcategories_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'ExamCategories' table, regardless of their owner."];

examcategories_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'ExamCategories' table."];
examcategories_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'ExamCategories' table."];
examcategories_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'ExamCategories' table."];
examcategories_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'ExamCategories' table."];

// sessions table
sessions_addTip=["",spacer+"This option allows all members of the group to add records to the 'Sessions' table. A member who adds a record to the table becomes the 'owner' of that record."];

sessions_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Sessions' table."];
sessions_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Sessions' table."];
sessions_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Sessions' table."];
sessions_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Sessions' table."];

sessions_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Sessions' table."];
sessions_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Sessions' table."];
sessions_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Sessions' table."];
sessions_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Sessions' table, regardless of their owner."];

sessions_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Sessions' table."];
sessions_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Sessions' table."];
sessions_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Sessions' table."];
sessions_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Sessions' table."];

// studentcategories table
studentcategories_addTip=["",spacer+"This option allows all members of the group to add records to the 'StudentCategories' table. A member who adds a record to the table becomes the 'owner' of that record."];

studentcategories_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'StudentCategories' table."];
studentcategories_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'StudentCategories' table."];
studentcategories_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'StudentCategories' table."];
studentcategories_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'StudentCategories' table."];

studentcategories_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'StudentCategories' table."];
studentcategories_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'StudentCategories' table."];
studentcategories_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'StudentCategories' table."];
studentcategories_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'StudentCategories' table, regardless of their owner."];

studentcategories_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'StudentCategories' table."];
studentcategories_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'StudentCategories' table."];
studentcategories_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'StudentCategories' table."];
studentcategories_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'StudentCategories' table."];

// classattendance table
classattendance_addTip=["",spacer+"This option allows all members of the group to add records to the 'Class Attendance' table. A member who adds a record to the table becomes the 'owner' of that record."];

classattendance_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Class Attendance' table."];
classattendance_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Class Attendance' table."];
classattendance_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Class Attendance' table."];
classattendance_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Class Attendance' table."];

classattendance_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Class Attendance' table."];
classattendance_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Class Attendance' table."];
classattendance_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Class Attendance' table."];
classattendance_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Class Attendance' table, regardless of their owner."];

classattendance_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Class Attendance' table."];
classattendance_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Class Attendance' table."];
classattendance_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Class Attendance' table."];
classattendance_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Class Attendance' table."];

// schoolmoney table
schoolmoney_addTip=["",spacer+"This option allows all members of the group to add records to the 'Fees Structure' table. A member who adds a record to the table becomes the 'owner' of that record."];

schoolmoney_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Fees Structure' table."];
schoolmoney_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Fees Structure' table."];
schoolmoney_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Fees Structure' table."];
schoolmoney_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Fees Structure' table."];

schoolmoney_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Fees Structure' table."];
schoolmoney_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Fees Structure' table."];
schoolmoney_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Fees Structure' table."];
schoolmoney_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Fees Structure' table, regardless of their owner."];

schoolmoney_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Fees Structure' table."];
schoolmoney_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Fees Structure' table."];
schoolmoney_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Fees Structure' table."];
schoolmoney_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Fees Structure' table."];

/*
	Style syntax:
	-------------
	[TitleColor,TextColor,TitleBgColor,TextBgColor,TitleBgImag,TextBgImag,TitleTextAlign,
	TextTextAlign,TitleFontFace,TextFontFace, TipPosition, StickyStyle, TitleFontSize,
	TextFontSize, Width, Height, BorderSize, PadTextArea, CoordinateX , CoordinateY,
	TransitionNumber, TransitionDuration, TransparencyLevel ,ShadowType, ShadowColor]

*/

toolTipStyle=["white","#00008B","#000099","#E6E6FA","","images/helpBg.gif","","","","\"Trebuchet MS\", sans-serif","","","","3",400,"",1,2,10,10,51,1,0,"",""];

applyCssFilter();
