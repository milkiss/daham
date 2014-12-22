<?php

class LinksController extends BaseController {
  public function view() {
    $linksGroups = array(
      array(
        'country' => 'Korea',
        'children' => array(
          array(
            'name' => 'KIPO',
            'link' => 'http://www.kipo.go.kr'
          ),
          array(
            'name' => 'KIPRIS',
            'link' => 'http://www.kipris.or.kr'
          ), 
          array( 
            'name' => 'KIPO commission',
            'link' => 'http://www.patent.go.kr/jsp/ka/menu/fee/main/FeeMain01.jsp'
          ), 
          array(
            'name' => 'KIPO portal',
            'link' => 'http://www.patent.go.kr'
          )
        )
      ),
      array(
        'country' => 'USA',
        'children' => array(
          array(
            'name' => 'USPTO',
            'link' => 'http://www.uspto.gov'
          ), 
          array(
            'name' => 'USPTO portal',
            'link' => 'http://portal.uspto.gov/external/portal/pair'
          ), 
          array(
            'name' => 'USPTO commission',
            'link' => 'http://www.uspto.gov/web/offices/ac/qs/ope/fee2009september15.htm'
          )
        )
      ), 
      array(
        'country' => 'Japan',
        'children' => array(
          array(
            'name' => 'JPO',
            'link' => 'http://www.jpo.go.jp'
          ),
          array(
            'name' => 'Patent search(English)',
            'link' => 'http://www4.ipdl.inpit.go.jp/Tokujitu/tjbansakuen.ipdl?N0000=116'
          ), 
          array(
            'name' => 'Patent search(Japanese)',
            'link' => 'http://www.ipdl.inpit.go.jp/Tokujitu/tjbansaku.ipdl?N0000=110'
          ), 
          array(
            'name' => 'Abstract search(English)',
            'link' => 'http://www19.ipdl.inpit.go.jp/PA1/cgi-bin/PA1INIT?1213074285750'
          )
        )
      ),
      array(
        'country' => 'Europe',
        'children' => array(
          array(
            'name' => 'EPO',
            'link' => 'http://www.epo.org'
          ), 
          array(
            'name' => 'EPO portal',
            'link' => 'http://www.epoline.org/portal'
          ),
          array(
            'name' => 'European publication Server',
            'link' => 'https//data.epo.org/publication-server/?lg=en'
          ),
          array(
            'name' => 'Abstract search',
            'link' => 'http://ep.espacenet.com/advancedSearch?locale=en_EP'
          )
        )
      ),
      array(
        'country' => 'WIPO',
        'children' => array(
          array(
            'name' => 'WIPO',
            'link' => 'http://www.wipo.int'
          ),
          array(
            'name' => 'Patent search',
            'link' => 'http://www.wipo.int/pctdb/en'
          ),
          array(
            'name' => 'Time Limits for Entering National/Regional Phase',
            'link' => 'http://www.wipo.int/pct/en/texts/time_limits.html'
          )
        )
      ),
      array(
        'country' => 'Taiwan',
        'children' => array(
          array(
            'name' => 'TIPO(English)',
            'link' => 'http://www.tipo.gov.tw/en/index.aspx'
          ),
          array(
            'name' => 'Patent search(English)',
            'link' => 'http://twpat1.tipo.gov.tw/tipotwoc/tipotwekm'
          )
        )
      ),
      array(
        'country' => 'China',
        'children' => array(
          array(
            'name' => 'SIPO(English)',
            'link' => 'http://english.sipo.gov.cn/'
          ),
          array(
            'name' => 'CTMO(English)',
            'link' => 'http://202.108.90.115/english/index_e.asp'
          )
        )
      ),
      array(
        'country' => 'Germany',
        'children' => array(
          array(
            'name' => 'DPMA(English)',
            'link' => 'http://www.dpma.de/english/index.html'
          ),
          array(
            'name' => 'Patent search(English)',
            'link' => 'http://depatisnet.dpma.de/DepatisNet/depatisnet?window=1&space=menu&content=index'
          ),
          array(
            'name' => 'DPMA Commission',
            'link' => 'http://www.dpma.de/english/patent/fees/index.html'
          )
        )
      )
    );
    
    return View::make('pages.links')->with('linksGroups', $linksGroups);
  }
}