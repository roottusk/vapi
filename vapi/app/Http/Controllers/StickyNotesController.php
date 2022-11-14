<?php

namespace App\Http\Controllers;

use App\Models\StickyNotes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Spatie\ArrayToXml\ArrayToXml;
use App\CustomClasses\Variables;
use Illuminate\Support\Str;

class StickyNotesController extends Controller
{


    public function store(Request $request)
    {
        return StickyNotes::create(json_decode($request->getContent(), true));
    }

    public function show(Request $request)
    {
        if($request->input('format')!="")
        {
            $format = $request->input('format');
            
            if($format == "json")
            {
                return response(json_encode(StickyNotes::all()), 200)
                ->header('Content-Type', 'application/json');
            }
            else
            {
                $sticky_notes= json_decode(json_encode(StickyNotes::all()),true);

                // Lazy XML Conversions Needs to be fixed
                $xml_output = "<xml>";
                foreach($sticky_notes as $note)
                {
                   $xml_output = $xml_output."<note>".$note['note']."</note>";
                }

                if($format == "html" and (Str::contains($xml_output,"<script") or Str::contains($xml_output,"<img")) )
                {
                    $xml_output = $xml_output."<flag>".base64_decode(Variables::getXSSFlag())."</flag>";
                }

                $xml_output = $xml_output."</xml>";

               

                return response($xml_output, 200)
                ->header('Content-Type', 'text/'.$format);
            }
            
        }
        else
        {
            return response(json_encode(array("success"=>"false","cause"=>"format param not set properly")), 403)
            ->header('Content-Type', 'application/json');
        }
    }

}
