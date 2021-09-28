--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `pressure` int(11) NOT NULL,
  `temprature` int(11) NOT NULL
  
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `date`, `pressure`,  `temprature`) VALUES
(1, 2013.01.02, 80,  34),
(2,  90,  34),
(3, 4/01/2013, 100,  36),
(4, 5/01/2013, 60,  32),
(5, 6/01/2013, 89,  37),
(6, 7/01/2013, 76,  39),
(7, 8/01/2013, 87,  42),
(8, 9/01/2013, 123,  43),
(9, 10/01/2013, 56,  36),
(10, 11/01/2013, 98,  34);
--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;