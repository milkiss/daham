<?php

class ServiceAreasController extends BaseController {
  public function view() {
    $serviceAreas = array(
        array(
          'title' => 'The Intellectual Property Rights such as Patents, Utilities, Trademarks, and Designs',
          'children' => array(
            'Agency for Filing, Registering and Maintaining IPRs',
            'Agency for confirming and invalidating patent claims',
            'Consulting for analysis and reaction of infringements'
          )
        ),
        array(
          'title' => 'Strategies for IPRs',
          'children' => array(
            'Survey, browsing, and investigation of prior arts',
            'Issuing patent valuation statement',
            'Consulting for constructing customized patent portfolio and IPRs acquisition strategies',
            'Consulting for creating patents for standardizations'
          )
        ),
        array(
          'title' => 'Technology Transfer',
          'children' => array(
            'Valuation and evaluation of the rights for Patents',
            'Consulting the technology transfer in association with patents rights'
          )
        ),
        array(
          'title' => 'Maintenance of patents rights',
          'children' => array(
            'Consulting for strategies with respect to patent pools (MPEGLA, VIA Licensing, etc.)',
            'Consulting for strategies with respect to securing Open sources(GPL) and patents rights'
          )
        ),
        array(
          'title' => 'Funds and commercializations for Patent technologies',
          'children' => array(
            'Consulting for financial aids programs for patent filing / commercialization of patent technology',
            'Consulting for Valuation, Certification and Licensing of technologies'
          )
        )
      );
      
    return View::make('pages.service-areas')->with('serviceAreas', $serviceAreas);
  }
}