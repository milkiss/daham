<?php

class MembersController extends BaseController {
  public function view($name) {
    $kyeounsoo = '
    {
      "name" : "Kyeounsoo Kim",
      "EQ" : [
          { "item" : "Pusan National University, Ph.D., Electronics" },
          { "item" : "Dong-a University, B.S. Electronics" },
          { "item" : "Korean Patent Attorney(the 47th Korean Patent Bar Exam.)" }
        ],
      "Exp" : [
          { "item" : "Senior Partner, Daham Patent Law Firm" },
          { "item" : "Senior patent examiner, Imaging devices/Computer/Digital broadcasting Divison, KIPO" },
          { "item" : "ILRYUNG Telesys Inc., Director of R&D" },
          { "item" : "ost-doc. EE-Systems Dept., University of Southern California (Asynchronous CAD/VLSI Group), CA, USA" },
          { "item" : "Research Engineer, Communication System / Transmission Technology / Access Network/Wireless Communication institute, Korea Telecom" }
        ],
      "PC" : [
          { "item" : "daptive signal processing (TI, TMS320C2x DSP) / Intelligent Network / Signalling Network (SMX-1, SIGNOS)" },
          { "item" : "1/T1/STM-1 transmission multiplexer, ADSL/VDSL DSLAM" },
          { "item" : "MPEG-2 Video Codec (VTI 0.5 micron standard cell) ASIC Chip set" },
          { "item" : "Asynchronous VLSI System Design (with Dr. Peter A. Beerel, http://jungfrau.usc.edu)" },
          { "item" : "Digital Video Recorder (OEMed using MJPEG(http://www.elbex.co.jp), based on MPEG-2(vivant, ILRYUNG Telesys Inc.)" }
        ]
    }';
    
    switch ($name) {
      case "kyeounsoo" :
        $data = json_decode($kyeounsoo);
        return View::make('pages.member')->with('data', $data);
      default :
        App::abort(404);
    }
  }
}