/*
 Navicat Premium Data Transfer

 Source Server         : tiger777.bet
 Source Server Type    : MySQL
 Source Server Version : 50742 (5.7.42-0ubuntu0.18.04.1)
 Source Host           : 134.122.73.1:3306
 Source Schema         : apphacker

 Target Server Type    : MySQL
 Target Server Version : 50742 (5.7.42-0ubuntu0.18.04.1)
 File Encoding         : 65001

 Date: 11/08/2023 14:37:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for sinais
-- ----------------------------
DROP TABLE IF EXISTS `sinais`;
CREATE TABLE `sinais`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `round_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`, `round_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sinais
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(258) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Membro',
  `admin` int(11) NULL DEFAULT 0,
  `pago` int(11) NULL DEFAULT 0,
  PRIMARY KEY (`id`, `email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'mathzfps@gmail.com', 'Matheus', 1, 0);
INSERT INTO `users` VALUES (3, 'matheuschina337@gmail.com', 'Membro', 1, 0);
INSERT INTO `users` VALUES (10, 'lukasccbb@gmail.com', 'Membro', 1, 0);
INSERT INTO `users` VALUES (15, 'demo@webzow.com', 'WebZOW', 1, 1);
INSERT INTO `users` VALUES (16, 'luiz0129@gmail.com', 'Luiz', 0, 1);
INSERT INTO `users` VALUES (17, 'teste@chinabet.com', 'Cliente perÃ­odo teste', 0, 1);
INSERT INTO `users` VALUES (18, 'teste123@gmail.com', 'Teste', 0, 1);
INSERT INTO `users` VALUES (19, 'china3375@gmail.com', 'Matheus china', 1, 1);
INSERT INTO `users` VALUES (20, 'sete-eventos@hotmail.com', 'Bruno', 0, 1);

SET FOREIGN_KEY_CHECKS = 1;
