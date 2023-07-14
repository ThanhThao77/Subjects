<?php
class Journal{
    private $id;
    private $title;
    private $editor;
    private $issn;
    private $publicationdate;

    /**
     * @param $id
     * @param $title
     * @param $editor
     * @param $issn
     * @param $publicationdate
     */
    public function __construct($id, $title, $editor, $issn, $publicationdate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->editor = $editor;
        $this->issn = $issn;
        $this->publicationdate = $publicationdate;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param mixed $editor
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
    }

    /**
     * @return mixed
     */
    public function getIssn()
    {
        return $this->issn;
    }

    /**
     * @param mixed $issn
     */
    public function setIssn($issn)
    {
        $this->issn = $issn;
    }

    /**
     * @return mixed
     */
    public function getPublicationdate()
    {
        return $this->publicationdate;
    }

    /**
     * @param mixed $publicationdate
     */
    public function setPublicationdate($publicationdate)
    {
        $this->publicationdate = $publicationdate;
    }


}