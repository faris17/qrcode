<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function index(){
        return view('qrcode');
    }

    public function download(){
        //code download
        //generate qrcode, write to image, download
        $imageName = 'qrcode';

        $header = array('Content-type'=> ['png', 'svg', 'eps']);

        $qrcode = QrCode::format('png')->size(200)->errorCorrection('H')->generate('latihan-qrcode');

        Storage::disk('public')->put($imageName, $qrcode);

        return response()->download('storage/'.$imageName, $imageName.'.png', $header)->deleteFileAfterSend();
        //extension php_imagick
    }
}
