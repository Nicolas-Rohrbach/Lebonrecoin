<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 25/03/2019
 * Time: 18:38
 */

class Offre
{
    private $id;
    private $title;
    private $content;
    private $date;

    public function __construct(array $data) {
        $this->hydrate($data);
    }

    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if(method_exists($this,$method))
                $this->$method($value);
        }
    }

    //SETTERS
    public function setId($id) {
        $id = (int) $id;

        if($id > 0)
            $this->id = $id;
    }

    public function setTitle($title) {
        if(is_string($title))
            $this->title = $title;
    }

    public function  setContent($content) {
        if(is_string($content))
            $this->content = $content;
    }

    //GETTERS
    public function id() {
        return $this->id;
    }

    public function title() {
        return $this->title;
    }

    public function content() {
        return $this->content;
    }

}