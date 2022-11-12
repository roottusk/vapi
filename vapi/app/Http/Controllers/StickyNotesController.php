<?php

namespace App\Http\Controllers;

use App\Models\StickyNotes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Spatie\ArrayToXml\ArrayToXml;


class StickyNotesController extends Controller
{
    public function arrayToXml($array, $rootElement = null, $xml = null) { 
        $_xml = $xml; 
          
        // If there is no Root Element then insert root 
        if ($_xml === null) { 
            $_xml = new SimpleXMLElement($rootElement !== null ? $rootElement : '<root/>'); 
        } 
          
        // Visit all key value pair 
        foreach ($array as $k => $v) { 
              
            // If there is nested array then 
            if (is_array($v)) {  
                  
                // Call function for nested array 
                arrayToXml($v, $k, $_xml->addChild($k)); 
                } 
                  
            else { 
                  
                // Simply add child element.  
                $_xml->addChild($k, $v); 
            } 
        } 
          
        return $_xml->asXML(); 
    } 


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
