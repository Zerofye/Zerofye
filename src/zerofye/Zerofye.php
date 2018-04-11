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
namespace zerofye;

use zerofye\Server;

class Zerofye {
    
	public static function load(){
		Zerofye::loadAll(__DIR__);
        new Server();
	}
    
    public static function loadAll($directory) {
        if(is_dir($directory)) {
            $scan = scandir($directory);
            unset($scan[0], $scan[1]);
            foreach($scan as $file) {
                if(is_dir($directory."/".$file)) {
                    Zerofye::loadAll($directory."/".$file);
                } else {
                    if(strpos($file, '.php') !== false) {
                        include_once($directory."/".$file);
                    }
                }
            }
        }
    }
}
    
Zerofye::load();