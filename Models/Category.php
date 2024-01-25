<?php

/**
 * Category is used to categorize our ecommerce products.
 *
 * @author Gino <gino@email.com>
 * @link http://url.com
 * @license MIT
 * @since 1.0.2
 */
class Category{
    public $name;
    public $description;

    /**
     * Constructs a new instance of type Category, given a name, a description and an optional image string url.
     *
     * @param string $_name Category's name
     * @param string $_description Category's description
     */
    public function __construct(string $_name, string $_description){
        $this->name = $_name;
        $this->description = $_description;
    }
}

//Argomentare le nueve istanze di Categorie 
$dramma = new Category('Dramma', 'Appartenente alla categoria film Drammatici');
$azione = new Category('Azione', 'Appartenente alla categoria film Azione');
