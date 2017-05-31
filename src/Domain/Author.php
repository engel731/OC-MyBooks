<?php

namespace OC-MyBooks\Domain;

class Author 
{
	/**
	 *  Author id.
	 *
	 * @var integer
	 */
	private $id;

	/**
	 * Author first name.
	 *
	 * @var string
	 */
	private $first_name;

	/**
	 * Author last name.
	 *
	 * @var string
	 */
	private $last_name;

	// Getter
	
	public function getId() {
		return $this->id;
	}

	public function getFirst_name() {
		return $this->first_name;
	}

	public function getLast_name() {
		return $this->last_name;
	}

	// Setter
	
	public function setId($id) {
		if(!is_int($id)) {
			throw new \InvalidArgumentException('L\'id de l\'auteur n\'est pas de type "integer" !');
		}

		$this->id = $id;
		return $this;
	}

	public function setFirst_name($first_name) {
		if(!is_string($first_name) || 100 >= strlen($first_name)) {
			throw new \InvalidArgumentException('Le prenom de l\'auteur est invalide !');
		}

		$this->first_name  = $first_name;
		return $this;
	}

	public function setLast_name($last_name) {
		if(!is_string($last_name) || 100 >= strlen($last_name)) {
			throw new \InvalidArgumentException('Le nom de l\'auteur est invalide !');
		}

		$this->last_name = $last_name;
		return $this;
	}
}