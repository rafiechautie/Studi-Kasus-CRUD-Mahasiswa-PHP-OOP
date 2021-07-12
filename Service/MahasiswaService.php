<?php

namespace Service {
    interface MahasiswaService
    {
        function showMahasiswa(): void;

        function addMahasiswa(): void;

        function removeMahasiswa(): void;

        function updateMahasiswa(): void;
    }

    class MahasiswaServiceImpl implements MahasiswaService
    {
        function showMahasiswa(): void
        {
            echo "==========DATA MAHASISWA==========" . PHP_EOL;
        }

        function addMahasiswa(): void
        {
        }

        function removeMahasiswa(): void
        {
        }

        function updateMahasiswa(): void
        {
        }
    }
}
