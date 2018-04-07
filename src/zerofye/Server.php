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


use zerofye\Console\Console;
use zerofye\Text\Text;

class Server {

	private $console;

	public function __construct(){
		$this->loadComponents();
		$this->start();
	}

	public function loadComponents() : void{

		$this->console = new Console($this);
	}

	public function getConsole() : Console {
		return $this->console;
	}

	public function start() : void {

		$this->getConsole()->getLogger()->log("Starting up. ..", Text::INFO, Text::COLOR_BLUE);

		/*
		 *  (TODO) The logics now, leveling, networking, etc.
		 */
	}
}