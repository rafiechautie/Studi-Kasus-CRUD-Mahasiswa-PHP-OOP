<?php

namespace Repository {

    use Model\{Mahasiswa};

    interface MahasiswaRepository
    {
        function add(Mahasiswa $mhs): void;

        function remove(int $number): bool;

        function update(int $number): void;

        function findAll(): array;
    }
    class MahasiswaRepositoryImpl implements MahasiswaRepository
    {
        public array $dataMhs = array();
        function add(Mahasiswa $mhs): void
        {
        }

        function remove(int $number): bool
        {
        }

        function update(int $number): void
        {
        }

        function findAll(): array
        {
            return $this->dataMhs;
        }
    }
}
