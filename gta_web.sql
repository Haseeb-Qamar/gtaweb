-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2019 at 08:43 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gta_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `gta3`
--

CREATE TABLE `gta3` (
  `id` int(11) NOT NULL,
  `info` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gta3`
--

INSERT INTO `gta3` (`id`, `info`, `type`, `code`) VALUES
(1, 'Full Health', 'player', 'GESUNDHEIT'),
(2, 'Unlock All Weapons', 'player', 'GUNSGUNSGUNS'),
(3, 'Add Money', 'player', 'IFIWEREARICHMAN'),
(4, 'Full Armor', 'player', 'TURTOISE'),
(5, 'Clear Weather', 'weather', 'SKINCANCERFORME'),
(6, 'Flying Cars', 'world', 'CHITTYCHITTYBB'),
(7, 'Invisible Cars', 'world', 'ANICESETOFWHEELS'),
(8, 'Destroy All Cars', 'world', 'BANGBANGBANG'),
(9, 'Improve Handling', 'player', 'CORNERSLIKEMAD'),
(10, 'Spawn Rhino', 'Spawn Vehicle', 'GIVEUSATANK'),
(11, 'Change Model', 'player', 'ILIKEDRESSINGUP'),
(12, 'Increase Wanted Level', 'Wanted Level', 'MOREPOLICEPLEASE'),
(13, 'Decrease Wanted Level', 'Wanted Level', 'NOPOLICEPLEASE'),
(14, 'Faster Time', 'world', 'TIMEFLIESWHENYOU'),
(15, 'Gore Mode', 'world', 'NASTYLIMBSCHEAT'),
(16, 'Peds Go Crazy', 'peds', 'ITSALLGOINGMAAAD'),
(17, 'Peds Attack', 'peds', 'NOBODYLIKESME'),
(18, 'Armed Peds', 'peds', 'WEAPONSFORALL'),
(19, 'Fog Level 1', 'weather', 'ILIKESCOTLAND'),
(20, 'Fog Level 2', 'weather', 'ILOVESCOTLAND'),
(21, 'Fog Level 3', 'weather', 'PEASOUP');

-- --------------------------------------------------------

--
-- Table structure for table `gta5`
--

CREATE TABLE `gta5` (
  `id` int(11) NOT NULL,
  `info` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gta5`
--

INSERT INTO `gta5` (`id`, `info`, `type`, `code`) VALUES
(1, 'Drunk', 'player', 'Y, Right, Right, Left, Right, X, B, Left'),
(2, 'Explosive Rounds', 'player', 'Right, X, A, Left, RB, RT, Left, Right, Right, LB, LB, LB'),
(3, 'Explosive Melee', 'player', 'Right, Left, A, Y, RB, B, B, B, LT'),
(4, 'Fast Run', 'player', 'Y, Left, Right, Right, LT, LB, X'),
(5, 'Fast Swim', 'player', 'Left, Left, LB, Right, Right, RT, Left, LT, Right'),
(6, 'Fire Bullets', 'player', 'LB, RB, X, RB, Left, RT, RB, Left, X, Right, LB, LB'),
(7, 'Invincibility', 'player', 'Right, A, Right, Left, Right, RB, Right, Left, A, Y'),
(8, 'Lower Wanted Level', 'player', 'RB, RB, B, RT, Right, Left, Right, Left, Right, Left'),
(9, 'Increase Wanted Level', 'player', 'RB, RB, B, RT, Left, Right, Left, Right, Left, Right'),
(10, 'Recharge Ability', 'player', 'A, A, X, RB, LB, A, Right, Left, A'),
(11, 'Skyfall', 'player', 'LB, LT, RB, RT, Left, Right, Left, Right, LB, LT, RB, RT, Left, Right, Left, Right'),
(12, 'Slow Motion Aim', 'player', 'X, LT, RB, Y, Left, X, LT, Right, A'),
(13, 'Super Jump', 'player', 'Left, Left, Y, Y, Right, Right, Left, Right, X, RB, RT'),
(14, 'Get Parachute', 'player', 'Left, Right, LB, LT, RB, RT, RT, Left, Left, Right, LB'),
(15, 'Weapons', 'player', 'Y, RT, Left, LB, A, Right, Y, Down, X, LB, LB, LB'),
(16, 'Change Weather', 'weather', 'RT, A, LB, LB, LT, LT, LT, X'),
(17, 'Moon Gravity', 'world', 'Left, Left, LB, RB, LB, Right, Left, LB, Left'),
(18, 'Slippery Cars', 'world', 'Y, RB, RB, Left, RB, LB, RT, LB'),
(19, 'Slow Motion', 'world', 'Y, Left, Right, Right, X, RT, RB'),
(20, 'Spawn BMX', 'Spawn', 'Left, Left, Right, Right, Left, Right, X, B, Y, RB, RT'),
(21, 'Spawn Buzzard', 'Spawn Vehicle', 'B, B, LB, B, B, B, LB, LT, RB, Y, B, Y'),
(22, 'Spawn Caddy', 'Spawn Vehicle', 'B, LB, Left, RB, LT, A, RB, LB, B, A'),
(23, 'Spawn Comet', 'Spawn Vehicle', 'RB, B, RT, Right, LB, LT, A, A, X, RB'),
(24, 'Spawn Duster', 'Spawn Vehicle', 'Right, Left, RB, RB, RB, Left, Y, Y, A, B, LB, LB'),
(25, 'Spawn Limo', 'Spawn Vehicle', 'RT, Right, LT, Left, Left, RB, LB, B, Right'),
(26, 'Spawn PCJ600', 'Spawn Vehicle', 'RB, Right, Left, Right, RT, Left, Right, X, Right, LT, LB, LB'),
(27, 'Spawn Rapid GT', 'Spawn Vehicle', 'RT, LB, B, Right, LB, RB, Right, Left, B, RT'),
(28, 'Spawn Sanchez', 'Spawn Vehicle', 'B, A, LB, B, B, LB, B, RB, RT, LT, LB, LB'),
(29, 'Spawn StuntPlane', 'Spawn Vehicle', 'B, Right, LB, LT, Left, RB, LB, LB, Left, Left, A, Y'),
(30, 'Spawn Trashmaster', 'Spawn Vehicle', 'B, RB, B, RB, Left, Left, RB, LB, B, Right'),
(31, 'Health', 'player', 'B, LB, Y, RT, A, X, B, RIGHT, X, LB, LB, LB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gta3`
--
ALTER TABLE `gta3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gta5`
--
ALTER TABLE `gta5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gta3`
--
ALTER TABLE `gta3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `gta5`
--
ALTER TABLE `gta5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
