<?php

namespace App\Repositories;

use App\Models\User;

class UsersCsvRepository
{
    /**
     * Create a directory to store the CSV files.
     *
     * @return string - The path to the directory.
     */
    public static function generateDir() : string
    {
        $dir_name = date('Y-m-d') . '-' . rand(1000, 9999) . '-users';
        $path = storage_path('app/' . $dir_name);

        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }

        return $path;
    }

    /**
     * Generate CSV files for the users.
     */
    public static function generateFiles() : void
    {
        // Get the path to the directory
        $path = self::generateDir();

        $index = 0;

        // Chunk the users and write them to CSV files
        User::select('name', 'email', 'phone')->chunk(10000, function ($users) use (&$index, $path) {
            $index++;
            $file_name = $path . '/users-batch-' . $index . '.csv';
            $file = fopen($file_name, 'w');

            // Write the CSV header
            fputcsv($file, ['Name', 'Email', 'Phone']);

            // Write the users to the CSV file
            foreach ($users as $user) {
                fputcsv($file, $user->toArray());
            }

            fclose($file);
        });
    }
}
