<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abcdd1d0791             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class REST extends RESTController { protected ?Generator $generator = null; public function __construct() { $this->rest_base = "\x62\x61\x63\x6b\x6c\151\x6e\x6b"; $this->generator = Generator::symcgieuakksimmu(); parent::__construct(); } public function siciqscsekqaqess() : ?Generator { return $this->generator; } public function register_routes() { $this->register("\57\x67\145\164\55\x64\x61\x74\141", [Constants::okeuagwgwkmiokac => [], Constants::oaggieeykyaoiiyw => self::uigoseacoukemwqc, Constants::wwgusigoaksqmwsm => [$this, "\163\x65\171\171\x69\x71\x6d\147\167\x79\x6d\171\165\155\157\x71"]]); } public function seyyiqmgwymyumoq(WP_REST_Request $aqmwamyiwgeeymqa) { $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::mgsccwumkcawaqcy); if ($ccamueccusigaaio) { $wksoawcgagcgoask = $this->siciqscsekqaqess()->yoieqkskckuicoiu($ccamueccusigaaio); if ($wksoawcgagcgoask) { $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\147\145\164\x5f{$wksoawcgagcgoask}", []); if ($qeqooyuoiasweuck) { $icwicymcioeyeyek = $this->siciqscsekqaqess()->cqykmuguekuoyuwy($qeqooyuoiasweuck); if ($icwicymcioeyeyek) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\104\x61\x74\141\40\147\x65\x6e\x65\x72\x61\164\x65\x64\40\x73\165\143\143\x65\163\163\x66\165\154\x6c\171\x2e", PR__MDL__DOMAIN_MANAGER), $icwicymcioeyeyek); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\x6c\x65\141\163\x65\x20\x74\162\x79\x20\x61\147\x61\x69\156", PR__MDL__DOMAIN_MANAGER)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\103\141\156\40\156\157\164\x20\x67\145\156\x65\x72\141\164\x65\40\x70\141\x67\x65\x20\144\x61\x74\x61\56", PR__MDL__DOMAIN_MANAGER), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\x65\161\x75\145\x73\x74\x65\144\40\x63\x6f\x6d\160\157\x6e\x65\x6e\164\40\156\x6f\x74\40\x66\157\165\156\144\56", PR__MDL__DOMAIN_MANAGER), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\x71\165\151\162\145\x20\160\x61\162\141\x6d\145\x74\145\162\x73\x20\155\151\x73\x73\x69\156\147\56", PR__MDL__DOMAIN_MANAGER), 400); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
