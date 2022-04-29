
CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `staff_id` bigint(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `country_code` varchar(4) NOT NULL,
  `phone` int(10) UNSIGNED NOT NULL,
  `supervisor` varchar(200) DEFAULT NULL,
  `staff_level` enum('supervisor','non-supervisor') DEFAULT NULL,
  `date_registered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `staff_id`, `title`, `fname`, `lname`, `username`, `password`, `email`, `country_code`, `phone`, `supervisor`, `staff_level`, `date_registered`) VALUES
(1, 3201821131600, 'Mr', 'Sample', 'Supervisor', 'supervisor', '$2y$10$WlamRug8jhoNKItvm6b7leFwecCAG14KtzwJ47bp7W4ti7JBbm1jy', 'supervisor@yahoo.com', '+233', 543550008, 'N/A', 'supervisor', '2018-03-21'),
(6, 4201804045945, 'Mrs', 'Alhassan', 'Khadija', 'khadija', '$2y$10$JO4.ykL71kZtIXCNlX0VVuouCJTSN2o46XE4ng8L/fbJcDEEW6q7O', 'khad@gmail.com', '+233', 544344555, 'supervisor', 'non-supervisor', '2018-04-04'),
(7, 4201817073720, 'Mr', 'Normal', 'Staff', 'staff-one', '$2y$10$7OsZw4oh8gnDg322Dp1efO2XFgZUMDmrvh0CkTA8sRiHtAR0TbDii', 'staff@gmail.com', '+214', 537596761, NULL, NULL, '2018-04-17'),
(8, 12201814010819, 'Mr', 'John', 'Doe', 'john1234', '$2y$10$F4y1W7YiTTvTX5E6p79iweEBrY9xFmQQSiAK89TUfsowuKg9qtXVm', 'john@yahoo.com', '+1', 4294967295, NULL, NULL, '2018-12-14');
