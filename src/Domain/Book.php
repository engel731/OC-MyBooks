<?php

namespace OC-MyBooks\Domain;

class Book 
{
	/**
	 * Book id.
	 *
	 * @var integer
	 */
	private $id;

	/**
	 * Book title.
	 *
	 * @var string
	 */
	private $title;

	/**
	 * Book isbn.
	 *
	 * @var string
	 */
	private $isbn;

	/**
	 * Book summary.
	 *
	 * @var string
	 */
	private $summary;

	/**
	 * Author id.
	 * 
	 * @var integer
	 */
	private $auth_id;

	// Getter

	public function getId() {
		return $this->id;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getIsbn() {
		return $this->isbn;
	}

	public function getSummary() {
		return $this->summary;
	}

	public function getAuth_id() {
		return $this->auth_id;
	}

	// Setter

	public function setId($id) {
		if(!is_int($id)) {
			throw new \InvalidArgumentException('L\'id du livre n\'est pas de type "integer" !');
		}

		$this->id = $id;
		return $this;
	}

	public function setTitle($title) {
		if(!is_string($title) || 100 >= strlen($title)) {
			throw new \InvalidArgumentException('Le titre du livre est invalide !');
		}

		$this->title = $title;
		return $this;
	} 

	public function setIsbn($isbn) {
		if(!is_string($isbn) || 13 === strlen($isbn)) {
			throw new \InvalidArgumentException('L\'isbn est invalide !');
		}

		$this->isbn = $isbn;
		return $this;
	}

	public function setSummary($summary) {
		if(!is_string($summary)) {
			throw new \InvalidArgumentException('Le resumé n\'est pas de type "string" !');
		}

		$this->summary = $summary;
		return $this;
	}

	public function setAuth_id($auth_id) {
		if(!is_int($id) || empty($auth_id)) {
			throw new \InvalidArgumentException('L\'id de l\'autheur est invalide !');
		}

		$this->auth_id = $auth_id;
		return $this;
	}
}