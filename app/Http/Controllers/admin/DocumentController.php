<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;          // ✅ BẮT BUỘC

use App\Http\Controllers\Controller;
use App\Models\admin\DocumentModel;

class DocumentController extends Controller
{
    private $documents;

    public function __construct()
    {
        $this->documents = new DocumentModel();
    }
    public function index()
    {
        $documents = $this->documents->getDocuments();
        return view('admin.document', compact('documents'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file'  => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:10240'
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('documents', $fileName, 'public');

        $documentData = [
            'title' => $request->title,
            'file_name' => $fileName,
            'file_path' => $path,
            'file_type' => $file->getClientOriginalExtension(),
            'file_size' => $file->getSize(),
            'created_at' => now(),
        ];
        $this->documents->addDocument($documentData);

        return redirect()->back()->with('success', 'Upload document thành công');
    }

    public function download($id)
    {
        $doc = $this->documents->findDocument($id);
        return storage_path('app/public/' . $doc->file_path)
            ? response()->download(storage_path('app/public/' . $doc->file_path))
            : abort(404);
    }

    public function delete($id)
    {
        $doc = $this->documents->findDocument($id);

        if ($doc) {
            Storage::disk('public')->delete($doc->file_path);
            $this->documents->deleteDocument($id);
        }

        return response()->json(['success' => true]);
    }
}
