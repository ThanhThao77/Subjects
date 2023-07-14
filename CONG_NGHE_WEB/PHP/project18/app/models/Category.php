<?php
class Category{
    private $id;
    private $name;
    private $description;
    private $navigation;

    /**
     * @param $id
     * @param $name
     * @param $description
     * @param $navigation
     */
    public function __construct($id, $name, $description, $navigation)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->navigation = $navigation;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getNavigation()
    {
        return $this->navigation;
    }

    /**
     * @param mixed $navigation
     */
    public function setNavigation($navigation)
    {
        $this->navigation = $navigation;
    }


}
