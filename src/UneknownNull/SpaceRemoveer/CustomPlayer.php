<?php
declare(strict_types = 1);

namespace UneknownNull\SpaceRemoveer;

use pocketmine\Player;

class CustomPlayer extends Player{

	/**
	 * Returns the name of the player replacing the spaces in players name.
	 *
	 * @return string
	 */
	public function getName(): string{
		$username = $this->username;

		if($this->hasSpaces($username)){
			$username = str_replace(" ", "_", $username);

			$this->username = $username;
			$this->displayName = $username;
			$this->iusername = strtolower($username);

			return $username;
		}

		return $username;
	}

	/**
	 * Returns the display name of the player replacing the spaces in players name.
	 *
	 * @return string
	 */
	public function getDisplayName(): string{
		$displayName = $this->displayName;

		if($this->hasSpaces($displayName)){
			$displayName = str_replace(" ", "_", $displayName);

			$this->username = $displayName;
			$this->displayName = $displayName;
			$this->iusername = strtolower($displayName);

			return $displayName;
		}

		return $displayName;
	}

	/**
	 * Returns the lowercase name of the player replacing the spaces in players name.
	 *
	 * @return string
	 */
	public function getLowerCaseName(): string{
		$iusername = $this->iusername;

		if($this->hasSpaces($iusername)){
			$iusername = str_replace(" ", "_", $iusername);

			$this->username = $iusername;
			$this->displayName = $iusername;
			$this->iusername = strtolower($iusername);

			return $iusername;
		}

		return $iusername;
	}

	/**
	 * Checks if the string has spaces or not.
	 *
	 * @param string $string
	 * @return bool
	 */
	private function hasSpaces(string $string): bool{
		return strpos($string, ' ') !== false;
	}
}
