<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7950b3e3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class REST extends RESTController { protected ?Generator $generator = null; public function __construct() { $this->rest_base = "\142\x61\x63\x6b\154\x69\156\x6b"; $this->generator = Generator::symcgieuakksimmu(); parent::__construct(); } public function siciqscsekqaqess() : ?Generator { return $this->generator; } public function register_routes() { $this->register("\x2f\147\145\164\55\x64\x61\x74\x61", [Constants::okeuagwgwkmiokac => [], Constants::oaggieeykyaoiiyw => self::uigoseacoukemwqc, Constants::wwgusigoaksqmwsm => [$this, "\x73\x65\x79\x79\151\161\155\x67\167\171\x6d\171\x75\155\x6f\x71"]]); } public function seyyiqmgwymyumoq(WP_REST_Request $aqmwamyiwgeeymqa) { $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::mgsccwumkcawaqcy); if ($ccamueccusigaaio) { goto mwsmsguqqkcwiiuk; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\145\161\x75\x69\162\x65\x20\160\141\162\x61\155\x65\164\x65\162\163\40\155\151\163\x73\151\156\147\x2e", PR__MDL__DOMAIN_MANAGER), 400); goto eeauyscekuckoues; mwsmsguqqkcwiiuk: $wksoawcgagcgoask = $this->siciqscsekqaqess()->yoieqkskckuicoiu($ccamueccusigaaio); if ($wksoawcgagcgoask) { goto qmuwoecuacmkwgem; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\145\x71\165\x65\x73\164\x65\144\40\x63\x6f\x6d\x70\x6f\156\x65\156\164\x20\x6e\x6f\164\x20\x66\x6f\x75\156\144\x2e", PR__MDL__DOMAIN_MANAGER), 400); goto owmuceyswmgueasi; qmuwoecuacmkwgem: $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\147\145\x74\137{$wksoawcgagcgoask}", []); if ($qeqooyuoiasweuck) { goto wkeuuycukmuqiaom; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\141\156\40\156\157\x74\40\x67\145\156\x65\x72\x61\164\x65\40\x70\x61\147\145\x20\144\x61\x74\141\x2e", PR__MDL__DOMAIN_MANAGER), 400); goto wakmayaoqoskekqy; wkeuuycukmuqiaom: $icwicymcioeyeyek = $this->siciqscsekqaqess()->cqykmuguekuoyuwy($qeqooyuoiasweuck); if ($icwicymcioeyeyek) { goto ueigkucgaucgeimc; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\x6c\145\x61\x73\145\40\164\162\x79\x20\141\x67\141\x69\x6e", PR__MDL__DOMAIN_MANAGER)); goto sggawugoykqcmsug; ueigkucgaucgeimc: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x44\141\164\141\40\x67\145\x6e\145\x72\141\164\x65\x64\40\163\165\143\x63\x65\x73\x73\146\165\154\x6c\171\56", PR__MDL__DOMAIN_MANAGER), $icwicymcioeyeyek); sggawugoykqcmsug: wakmayaoqoskekqy: owmuceyswmgueasi: eeauyscekuckoues: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
