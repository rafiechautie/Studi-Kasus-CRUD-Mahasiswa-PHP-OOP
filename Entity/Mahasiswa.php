<?php

namespace Model {
    class Mahasiswa
    {
        private string $mahasiswa;

        public function __construct(string $mhs = "")
        {
            $this->mahasiswa = $mhs;
        }

        public function getMahasiswa(): string
        {
            return $this->mahasiswa;
        }
        public function setMahasiswa(string $mhs): void
        {
            $this->mahasiswa = $mhs;
        }
    }
}
