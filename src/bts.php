<?php
/**

 *  _______  _______  _______  _______  _______           _______
 * / ___   )(  ____ \(  ____ )(  ___  )(  ____ \|\     /|(  ____ \
 * \/   )  || (    \/| (    )|| (   ) || (    \/( \   / )| (    \/
 *    /   )| (__    | (____)|| |   | || (__     \ (_) / | (__
 *    /   / |  __)   |     __)| |   | ||  __)     \   /  |  __)
 *  /   /  | (      | (\ (   | |   | || (         ) (   | (
 *  /   (_/\| (____/\| ) \ \__| (___) || )         | |   | (____/\
 * (_______/(_______/|/   \__/(_______)|/          \_/   (_______/
 *
 *
 *
 * Author: xZeroMCPE
 * Twitter: @xZeroMCPE
 * Zerofye: https://github.com/Zerofye/Zerofye
 * License: https://github.com/Zerofye/Zerofye/blob/master/LICENSE
 */


$directories = array(
	'zerofye/Zerofye.php',
	'zerofye/Server.php',
	'zerofye/Console/Console.php',
	'zerofye/Console/ConsoleLogger.php',
	'zerofye/Text/Text.php',
);

// I plan to make it auto load it using glob! (But using this method as of now)
foreach($directories as $directory){
	require_once ($directory);
}

$zero = new \zerofye\Zerofye();