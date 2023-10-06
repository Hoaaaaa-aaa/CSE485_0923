<?php
class Book{
    private $id;
    private $tenSach;
    private $namXuatBan;
    private $idTacGia;

    /**
     * @param $id
     * @param $tenSach
     * @param $namXuatBan
     * @param $idTacGia
     */
    public function __construct($id, $tenSach, $namXuatBan, $idTacGia)
    {
        $this->id = $id;
        $this->tenSach = $tenSach;
        $this->namXuatBan = $namXuatBan;
        $this->idTacGia = $idTacGia;
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
    public function getTenSach()
    {
        return $this->tenSach;
    }

    /**
     * @param mixed $tenSach
     */
    public function setTenbaihat($tenSach)
    {
        $this->tenSach = $tenSach;
    }

    /**
     * @return mixed
     */
    public function getNamXuatBan()
    {
        return $this->namXuatBan;
    }

    /**
     * @param mixed $namXuatBan
     */
    public function setNamXuatBan($namXuatBan)
    {
        $this->namXuatBan = $namXuatBan;
    }

    /**
     * @return mixed
     */
    public function getIdTacGIa()
    {
        return $this->idTacGia;
    }

    /**
     * @param mixed $idTacGia
     */
    public function setIdtheloai($idTacGia)
    {
        $this->idTacGia = $idTacGia;
    }

}