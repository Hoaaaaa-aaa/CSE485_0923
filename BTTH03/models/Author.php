<?php
class Author{
    private $id;
    private $tenTacGia;

    /**
     * @param $id
     * @param $tenTacGia
     */
    public function __construct($id, $tenTacGia)
    {
        $this->id = $id;
        $this->tenTacGia = $tenTacGia;
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
    public function getTenTacGia()
    {
        return $this->tenTacGia;
    }

    /**
     * @param mixed $tenTacGia
     */
    public function setTenTacGia($tenTacGia)
    {
        $this->tenTacGia = $tenTacGia;
    }


}