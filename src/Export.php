<?php

namespace Bukharibaba\Csvexporter;

class Export
{
    public function export($headings = array(), $data = array(), $name = "export")
    {
        $items = $data;
        $fileName = $name . '.csv';
        if (!file_exists(storage_path('export'))) {
            mkdir(storage_path('export'), 0777, true);
        }
        $path = storage_path('export');
        $columns = $headings;
        $filePath = $path . '/' . $fileName;
        $file = fopen($filePath, 'w');
        fputcsv($file, $columns);
        foreach ($items as $item) {
            $expArr = array();
            foreach ($item as $key => $it) {
                $row[$key]  = $it;
            }
            array_push($expArr, $row);
            fputcsv($file, $row);
        }

        fclose($file);

        return $filePath;
    }
}
