<?php
namespace App\Services;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ParseContentService { //TODO Refactor returns!

    public $content;
    public $columnNames;
    public $file;
    public $csv;

    public function __construct(Collection $content)
    {
        $this->content = $content;
    }

    public function parseColumnNames() {

        $this->columnNames = DB::getSchemaBuilder()->getColumnListing("articles");
        return DB::getSchemaBuilder()->getColumnListing("articles");

    }


    public function ParseCSV() {
        $columnNames = $this->parseColumnNames();
        $content = $this->content;
        $columnNames = $this->columnNames;
        $file = $this->file;

        $csv = function () use ($content, $columnNames) {

            $file = fopen('php://output', "w");
            fputcsv($file, $columnNames);

            foreach ($content as $row) {

                fputcsv($file, array($row->id, $row->user->name, $row->title, $row->body,
                    $row->created_at, $row->updated_at));
            }

            fclose($file);

        };

        $this->csv = $csv;
        return $csv;
    }


}
