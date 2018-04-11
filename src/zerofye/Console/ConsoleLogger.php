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
namespace zerofye\Console;

use zerofye\Text\Text;

class ConsoleLogger {
	const ZERO = "Zerofye> ";
	const TEXT = "<< Text >>";
	const PREFIX = "<< Prefix >>";
	const COLOR = "<< Color >>";
	public $console;
	public $tasks = [];
    
	public function __construct(Console $console){
		$this->console = $console;
	}
    
    public function getConsole(){
        return $this->console;
    }
    
    public function getServer(){
        return $this->getConsole()->getServer();
    }
    
	public function log(string $log, $prefix = Text::INFO, $color = Text::COLOR_BLUE){
		echo ConsoleLogger::ZERO . $prefix . $color . $log, PHP_EOL;
	}
    
	public function awaitView(){
		
	}
}