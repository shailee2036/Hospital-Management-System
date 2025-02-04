-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 10:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `hospital_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mobile_number` varchar(13) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `adminregdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `adminname`, `username`, `mobile_number`, `branch`, `city`, `adminregdate`) VALUES
(1, 'panktiv283', 'Pankti Vaghasiya', 'pankti', '9510003188', 'Surat', 'Surat', '2024-03-07 09:23:24'),
(2, 'panktiv', 'Vaghasiya Pankti', 'pankti283', '9825950123', 'rajkot', 'rajkot', '2024-03-08 09:06:22'),
(3, 'kunjal123', 'Kunjal Radadiya', 'kunjal', '9510003182', 'Bhavnagar', 'Bhavnagar', '2024-03-09 08:59:07');

-------------------------------------------------------------


--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_number` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `services` varchar(50) NOT NULL,
  `appointment_date` varchar(10) NOT NULL,
  `appointment_time` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `medical_history` varchar(200) NOT NULL,
  `insurance_info` varchar(500) NOT NULL,
  `note` varchar(500) NOT NULL,
  `next_visit` varchar(20) NOT NULL,
  `medicine` varchar(500) NOT NULL,
  `report` varchar(500) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `note_doctor` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `mobile_number`, `email`, `date_of_birth`, `gender`, `services`, `appointment_date`, `appointment_time`, `address`, `doctor`, `medical_history`, `insurance_info`, `note`, `next_visit`, `medicine`, `report`, `remark`, `note_doctor`) VALUES
(4, 'Pankti', '9510003188', 'classydivyu2382013@gmail.com', '2024-03-04', 'Female', 'Psychiatryt', '2024-03-12', '1:00 P.M - 3:00 P.M', '2152', 'prdr', 'no', 'no', 'no', '2024-03-29', 'cdvcv', 'dsfddgfg', 'dfg', 'fhgj');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date_of_birth` varchar(10) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `work_experince` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `apply_for` varchar(50) NOT NULL,
  `job_time` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `joiny` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `first_name`, `last_name`, `address`, `date_of_birth`, `qualification`, `email`, `phone_number`, `work_experince`, `skill`, `apply_for`, `job_time`, `date`, `status`, `joiny`) VALUES
(8, 'ffcvnvb', 'gjnmbm', 'bnnm', '2024-02-07', 'DM(Neurology)', 'classydivyu2382013@gmail.com', '9510003188', '1year', 'dgfvvbgj', 'Nurse ', 'Full-Time', '2024-04-05', 'Accept', '2024-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_number` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `mobile_number`, `email`) VALUES
(1, 'pankti', '9510003188', 'pankti.patel866@gmail.com'),
(2, 'kunjal', '3215648970', 'classydivyu2382013@gmail.com');

--
-- Indexes for dumped tables
--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

