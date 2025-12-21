<?php


namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DocumentModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_documents';

    public function getDocuments()
    {
        return DB::table($this->table)->first();
    }

    public function addDocument($document)
    {
        return DB::table($this->table)->insert($document);
    }

    public function findDocument($documentId)
    {
        return DB::table($this->table)->find($documentId);
    }

    public function deleteDocument($documentId)
    {
        return DB::table($this->table)
            ->where('id', $documentId)
            ->delete($documentId);
    }


}
