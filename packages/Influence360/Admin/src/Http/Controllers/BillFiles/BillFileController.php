<?php
namespace Influence360\Admin\Http\Controllers\BillFiles;

use App\Http\Controllers\Controller;
use App\Models\BillFile;
use Illuminate\Http\Request;

class BillFileController extends Controller
{
    public function index()
    {
        $billFiles = BillFile::paginate(10); // Pagination for large datasets
        return view('admin::bill-files.index', compact('billFiles'));
    }

    public function view($id)
    {
        $billFile = BillFile::findOrFail($id);
        return view('admin::bill-files.view', compact('billFile'));
    }
}
