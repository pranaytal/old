-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2012 at 12:35 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `e_school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_page`
--

CREATE TABLE IF NOT EXISTS `school_page` (
  `page_id` int(11) NOT NULL auto_increment,
  `page_name` varchar(100) NOT NULL,
  `page_title` varchar(200) NOT NULL,
  PRIMARY KEY  (`page_id`),
  UNIQUE KEY `page_name` (`page_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=196 ;

--
-- Dumping data for table `school_page`
--

INSERT INTO `school_page` (`page_id`, `page_name`, `page_title`) VALUES
(1, 'home', 'Home'),
(2, 'admission', 'Admission'),
(3, 'admission2', 'Admission'),
(4, 'student_view', 'Student View'),
(5, 'all_student_view', 'All Student View'),
(6, 'student_profile', 'Student Profile'),
(7, 'new_course', 'New Course'),
(8, 'manage_course', 'Manage Course'),
(9, 'category', 'Category'),
(10, 'subject', 'Subject'),
(11, 'finance', 'Finance'),
(12, 'fees_home', 'Fees Home'),
(13, 'fees_create', 'Fee Create'),
(14, 'master_fees', 'Master Fees'),
(15, 'fees_discount', 'Fees Discount'),
(16, 'fee_discount_new', 'Create Discount New'),
(17, 'additional_fees', 'Aadditional Fees'),
(18, 'additional_fees_create', 'Additional Fees Create'),
(19, 'additional_fees_list', 'Additional Fees List'),
(20, 'fee_collection_date', 'Fee Collection Date'),
(21, 'fee_collection_view', 'Fee Collection View'),
(22, 'fees_submission', 'Fees Submission'),
(23, 'fees_submission_batch', 'Fees Submission By Batch'),
(24, 'fees_student_search', 'Fees Submission By Each Student'),
(25, 'fees_student_one', 'Fees Submission By One Student '),
(26, 'fees_student_structure_search', 'Fees  structure  Student search '),
(27, 'fees_structure_student_one', 'Fees  structure  Student One'),
(28, 'fees_dues', 'Fees Dues'),
(29, 'pay_fees_dues_one', 'Pay Fees Dues '),
(30, 'instant_fees', 'Instant Fees'),
(31, 'new_instant_fees', 'Create New Instant Fees'),
(32, 'fees_category', 'Fees Category'),
(33, 'manage_fees', 'Manage Fees'),
(34, 'new_instant_fees_search', 'New Instant Fee Search'),
(35, 'transactions', 'Transactions'),
(36, 'expense_create', 'Expense Create'),
(37, 'expense_list', 'Expense List'),
(38, 'income_create', 'Income Create'),
(39, 'income_list', 'Income List'),
(40, 'tr_monthly_report', 'Transactions Monthly Report'),
(41, 'donation', 'Donation'),
(42, 'donors', 'Donor'),
(43, 'courses', 'Courses'),
(44, 'manage_batches', 'Manage Batches'),
(45, 'student_view_all', 'Student View All'),
(46, 'profile', 'Student Profile'),
(47, 'attendances', 'Attendances'),
(48, 'attendance_reports', 'Attendance Reports'),
(49, 'create_edit_timetable', 'Create Edit Timetable'),
(50, 'timetable', 'Timetable'),
(51, 'set_class_timimg', 'Set Class Timimg'),
(53, 'view_timetable', 'View Timetable'),
(54, 'swap_class', 'Swap Class'),
(55, 'institutional_timetable', 'Institutional Timetable'),
(56, 'create_weekdays', 'Create Weekdays'),
(57, 'calendar', 'Calendar'),
(58, 'exam_grading_levels', 'Exam Grading Levels'),
(59, 'exam_exam_mangement', 'Exam Exam Mangement'),
(60, 'exam_additional_exam', 'Exam Additional Exam'),
(61, 'exam_exam_wise_report', 'Exam Exam Wise Report'),
(63, 'exam_subject_wise_report', 'Exam Subject Wise Report'),
(64, 'exam_grouped_exam_report', 'Exam Grouped Exam Report'),
(65, 'exam_online_exam', 'Exam Online Exam'),
(66, 'news', 'News'),
(67, 'event', 'Event'),
(68, 'hr_settings', 'Hr Settings'),
(70, 'hr_employee_management', 'Hr Employee Management'),
(71, 'hr_employee_attendance', 'Hr Employee Attendance'),
(72, 'hr_payslip', 'Hr Payslip'),
(73, 'hr_search', 'Hr Search'),
(74, 'hr_department_payslip', 'Hr Department Payslip'),
(75, 'finance_categories', 'Finance Categories'),
(76, 'filter', 'Filter'),
(77, 'exam', 'Exam'),
(78, 'exam_groups', 'Exam Groups'),
(79, 'view_exam_groups', 'View Exam Groups'),
(80, 'new_exam', 'New Exam'),
(81, 'exam_grouping', 'Exam Grouping'),
(82, 'exam_exam_new', 'Exam Exam New'),
(83, 'exam_result_entry1', 'Exam Result Entry1'),
(97, 'registration_courses', 'Registration Courses'),
(87, 'exam_edit1', 'Exam Edit1'),
(96, 'applicants_admin', 'Applicants Admin'),
(95, 'user', 'User'),
(94, 'edit2', 'edit2'),
(93, 'archived_exam_wise_report', 'Archived Exam Wise Report'),
(98, 'pin_groups', 'Pin Groups'),
(99, 'pin_groups_new', 'Pin Groups New'),
(100, 'online_meeting_rooms', 'Online Meeting Rooms'),
(101, 'online_meeting_rooms_new', 'Online Meeting Rooms New'),
(102, 'online_meeting_servers', 'Online Meeting Servers'),
(103, 'online_meeting_servers_new', 'Online Meeting Servers New'),
(104, 'custom_reports', 'Custom Reports'),
(105, 'custom_reports_generate_student', 'Custom Reports Generate Student'),
(106, 'custom_reports_generate_employee', 'Custom Reports Generate Employee'),
(107, 'data_imports', 'Data Imports'),
(108, 'galleries', 'Galleries'),
(109, 'galleries_photo_add', 'Galleries Photo Add'),
(110, 'galleries-category-new', 'Galleries Category New'),
(111, 'groups-index', 'Groups Index'),
(112, 'groups-new', 'Groups New'),
(113, 'school_assets', 'School Assets'),
(114, 'school_assets-new', 'School Assets New'),
(115, 'Hostels-hostel_dashboard', 'Hostels Hostel Dashboard'),
(116, 'hostels', 'Hostels'),
(117, 'room_details', 'Room Details'),
(118, 'room_allocate', 'Room Allocate'),
(119, 'hostel_fee', 'Hostel Fee'),
(120, 'hostel_fee_pay', 'Hostel Fee Pay'),
(121, 'hostel_fee_defaulters', 'Hostel Fee Defaulters'),
(122, 'hostels-1', 'Hostels'),
(123, 'hostels-1-edit', 'Hostels 1 Edit'),
(124, 'hostels-new', 'Hostels New'),
(125, 'room_details-new', 'Room Details New'),
(126, 'room_allocate-assign_room-200', 'Room Allocate Assign Room 200'),
(127, 'hostel_fee_collection', 'Hostel Fee Collection'),
(128, 'hostel_fee_collection_view', 'Hostel Fee Collection View'),
(129, 'hostel_fee-student_hostel_fee-114', 'Hostel Fee Student Hostel Fee-114'),
(130, 'room_details-1-edit', 'Room Details 1 Edit'),
(131, 'library', 'Library'),
(132, 'books', 'Books'),
(133, 'search_book', 'Search Book'),
(134, 'detail_search', 'Detail Search'),
(135, 'books-new', 'Books-New'),
(136, 'book_movement-return_book', 'Book Movement Return Book'),
(137, 'book_movement-direct_issue_book', 'Book Movement Direct Issue Book'),
(138, 'library-card_setting', 'Library-Card_Setting'),
(139, 'library-movement_log', 'Library-Movement_Log'),
(140, 'book_movement-renewal', 'Book Movement Renewal'),
(141, 'placementevents', 'Placementevents'),
(142, 'placementevents-archive', 'Placementevents Archive'),
(143, 'placementevents-new', 'Placementevents New'),
(144, 'tasks', 'Tasks'),
(145, 'tasks-new', 'Tasks New'),
(146, 'transport_dash_board', 'Transport Dashboard'),
(147, 'routes', 'Routes'),
(148, 'routes-new', 'Routes-New'),
(149, 'routes-1-edit', 'Routes-1-Edit'),
(150, 'vehicles', 'Vehicles'),
(151, 'vehicles-1-edit', 'Vehicles 1 Edit'),
(152, 'vehicles-new', 'Vehicles New'),
(153, 'transport', 'Transport'),
(154, 'transport-transport_details', 'Transport Transport Details'),
(155, 'transport_fee', 'Transport Fee'),
(156, 'transport_fee_collections', 'Transport Fee Collections'),
(157, 'transport_fee_collection_view', 'Transport Fee Collection View'),
(158, 'transport_fee-transport_fee_search', 'Transport Fee Transport Fee Search'),
(160, 'transport_fee_defaulters_view', 'Transport Fee Defaulters View'),
(162, 'employee_defaulters_transport_fee_collection', 'Employee Defaulters Transport Fee Collection'),
(163, 'teacher_timetable', 'Teacher Timetable'),
(164, 'student', 'Student'),
(165, 'profile-114', 'Profile 114'),
(166, 'student_attendance', 'Student Attendance'),
(167, 'configuration', 'Configuration'),
(168, 'configuration-settings', 'Configuration Settings'),
(169, 'exam-settings', 'exam-settings'),
(170, 'exam-create_exam', 'exam-create_exam'),
(171, 'exam-previous_batch_exams', 'exam-previous_batch_exams'),
(172, 'exam-generate_reports', 'exam-generate_reports'),
(173, 'exam-generate_previous_reports', 'exam-generate_previous_reports'),
(174, 'exam-report_center', 'exam-report_center'),
(175, 'online_exam', 'online_exam'),
(176, 'exam-subject_rank', 'exam-subject_rank'),
(177, 'exam-batch_rank', 'exam-batch_rank'),
(178, 'exam-course_rank', 'exam-course_rank'),
(179, 'exam-student_school_rank', 'exam-student_school_rank'),
(180, 'exam-ranking_level_report', 'exam-ranking_level_report'),
(181, 'exam-transcript', 'exam-transcript'),
(182, 'exam-combined_report', 'exam-combined_report'),
(183, 'cce_reports', 'cce_reports'),
(184, 'exam-attendance_rank', 'exam-attendance_rank'),
(185, 'cce_reports-create_reports', 'cce_reports-create_reports'),
(186, 'cce_reports-student_wise_report', 'cce_reports-student_wise_report'),
(187, 'grading_levels', 'grading_levels'),
(188, 'ranking_levels', 'ranking_levels'),
(189, 'class_designations', 'class_designations'),
(190, 'cce_settings', 'cce_settings'),
(191, 'cce_settings-basic', 'cce_settings-basic'),
(192, 'cce_settings-co_scholastic', 'cce_settings-co_scholastic'),
(193, 'cce_settings-scholastic', 'cce_settings-scholastic'),
(194, 'cce_grade_sets', 'cce_grade_sets'),
(195, 'cce_exam_categories', 'cce_exam_categories');
