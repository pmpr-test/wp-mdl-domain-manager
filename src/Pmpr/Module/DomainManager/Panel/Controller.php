<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc53d5a8c9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Panel; use DateTime; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\144\x6f\x6d\x61\151\x6e\x2d\155\141\x6e\141\x67\145\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\x67\x65\164\55\x64\x6f\x6d\141\x69\156", [Constants::wwgusigoaksqmwsm => [$this, "\167\167\141\167\x69\163\x63\153\151\161\145\x75\145\x6f\165\141"]]); $this->register("\57\147\x65\x74\x2d\x64\157\155\x61\151\x6e\x73", [Constants::wwgusigoaksqmwsm => [$this, "\167\151\x71\x75\x6d\153\155\161\x6b\161\157\x79\x63\161\x79\151"]]); $this->register("\x2f\x67\145\164\x2d\x64\x6f\155\141\x69\156\55\x66\x69\145\x6c\144\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x75\147\x6d\x63\x65\143\x63\147\x77\x61\x61\141\x69\x67\151\171"]]); $this->register("\x2f\163\x61\x76\145\x2d\x64\x6f\155\x61\x69\156", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x6d\x71\153\x63\x61\x75\145\153\x79\x6d\x65\153\x71\141\x6b\x69"]]); $this->register("\57\x75\x70\144\141\x74\x65\x2d\x64\157\155\141\x69\156", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\141\x6d\x6f\147\x71\x79\143\157\x63\157\165\167\x61\x69\143\x6f"]]); $this->register("\57\147\145\164\55\144\157\155\x61\151\156\x2d\x74\141\x62\163", [Constants::wwgusigoaksqmwsm => [$this, "\x6b\143\163\x71\x65\x71\x6d\x63\147\x6b\167\153\x63\x79\x6f\165"]]); $this->register("\57\x67\x65\164\x2d\157\x77\156\x65\162\x73\150\x69\x70\163", [Constants::wwgusigoaksqmwsm => [$this, "\155\143\x6f\x6b\x77\155\x65\165\165\143\x71\x67\x6f\165\x6f\x73"]]); $this->register("\x2f\147\x65\164\x2d\157\x77\156\x65\162\163\150\151\160", [Constants::wwgusigoaksqmwsm => [$this, "\151\143\151\155\x6f\143\x79\155\167\x63\157\x71\x65\x65\155\x6f"]]); $this->register("\57\166\x65\162\151\x66\x79\55\x64\157\155\141\x69\x6e", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\145\x79\x6d\x65\x73\163\x77\157\x73\153\165\x73\153\x6d\x79\167"]]); } public function mqkcauekymekqaki(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { if ($swgwkyqkakceqeia = Domain::symcgieuakksimmu()) { $keccaugmemegoimu = $swgwkyqkakceqeia->kmuykuaakicwsocs($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (!is_wp_error($keccaugmemegoimu)) { $ceiwsaacewygcsqg = $swgwkyqkakceqeia->kumuygiiqswoyasy(); $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu[Constants::eoskkkieowogacws], [$ceiwsaacewygcsqg => $keccaugmemegoimu[$ceiwsaacewygcsqg]]); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->ueiegogoeyqoiewa(); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function amogqycocouwaico(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { if ($swgwkyqkakceqeia = Domain::symcgieuakksimmu()) { $keccaugmemegoimu = $swgwkyqkakceqeia->amogqycocouwaico($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x44\157\155\x61\x69\x6e\x20\163\x75\143\143\x65\x73\163\x66\x75\x6c\154\x79\x20\165\160\144\141\164\x65\x64\x2e", PR__MDL__DOMAIN_MANAGER), $keccaugmemegoimu); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->ueiegogoeyqoiewa(); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mcokwmeuucqgouos(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { if ($ueomouiqmosykioc = Ownership::symcgieuakksimmu()) { $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::weayyoewessosyko); if ($ukamowomoeiweqky = $ueomouiqmosykioc->ksqyeeeywsyqyogw($mokawwccycoiqeka, $keccaugmemegoimu)) { if ($ueomouiqmosykioc->sqwcgyyocucsouyy($ukamowomoeiweqky) === $ueomouiqmosykioc::myiiuekcoeksaasm) { $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ausqeuugegoygouq); $keccaugmemegoimu = $ueomouiqmosykioc->bikiqakeqgekegsk($mokawwccycoiqeka, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); } else { $keccaugmemegoimu = $ueomouiqmosykioc->iekyeyicoyyawomk()->oosqweumiyeayasy([$ueomouiqmosykioc->scqakcemaqsqkema($ukamowomoeiweqky)]); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\116\157\40\x61\x63\x63\x65\163\163\x20\x74\157\40\x74\150\151\163\40\x73\x65\x67\x6d\145\x6e\164", PR__MDL__DOMAIN_MANAGER), 401); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->ueiegogoeyqoiewa(); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function icimocymwcoqeemo(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { if ($ueomouiqmosykioc = Ownership::symcgieuakksimmu()) { $keccaugmemegoimu = $ueomouiqmosykioc->ksqyeeeywsyqyogw($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::weayyoewessosyko), $keccaugmemegoimu); if (!$keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4f\x77\156\145\x72\x73\x68\151\160\x20\156\157\x74\40\146\157\165\156\144", PR__MDL__DOMAIN_MANAGER), 404); } else { $keccaugmemegoimu = $ueomouiqmosykioc->scqakcemaqsqkema($keccaugmemegoimu, [$ueomouiqmosykioc->kumuygiiqswoyasy(), Constants::meksegaoamowuwoq, $ueomouiqmosykioc::awqaawasiusmysgc, Constants::ucmueuwwcmocgmig, $ueomouiqmosykioc::komqcwuqaguwweiw]); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->ueiegogoeyqoiewa(); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu); if ($aokagokqyuysuksm) { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->iekyeyicoyyawomk()->akkkoiiymmamsauc($aokagokqyuysuksm, $swgwkyqkakceqeia->kumuygiiqswoyasy(), [Constants::gouqcwikiiygyasc, Constants::NAME, Constants::ciyoccqkiamemcmm, Constants::igswcauwsgmeougs, Constants::CREATED_AT]); if (!$mokawwccycoiqeka) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\x71\x75\x65\163\164\x65\144\40\x64\157\x6d\141\x69\x6e\x20\x6e\157\x74\40\146\157\165\x6e\144\56", PR__MDL__DOMAIN_MANAGER), 404); } else { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (!$ueomouiqmosykioc->iekyeyicoyyawomk()->exists([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($ueomouiqmosykioc::qkmqmaeuyokqgemg, $aokagokqyuysuksm)])) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\x69\163\40\144\157\x6d\x61\x69\x6e\40\x6e\157\164\x20\x62\145\x6c\157\x6e\147\x73\x20\164\157\x20\x79\x6f\x75\x2e", PR__MDL__DOMAIN_MANAGER), 400); } else { $keccaugmemegoimu = $mokawwccycoiqeka; } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\x49\104", PR__MDL__PANEL)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function eymesswoskuskmyw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { if ($ueomouiqmosykioc = Ownership::symcgieuakksimmu()) { $iecimaigkkceeska = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); $ukamowomoeiweqky = $ueomouiqmosykioc->iekyeyicoyyawomk()->akkkoiiymmamsauc($iecimaigkkceeska); if ($ukamowomoeiweqky) { $mokawwccycoiqeka = Domain::symcgieuakksimmu()->iekyeyicoyyawomk()->akkkoiiymmamsauc($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\157\x6d\x61\x69\156")); if ($mokawwccycoiqeka) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eeamcawaiqocomwy = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, Constants::ciyoccqkiamemcmm); $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc); if ($uusmaiomayssaecw && $eeamcawaiqocomwy) { $iwywmkygwewiamwm = "\x68\x74\164\x70\163\72\57\57{$eeamcawaiqocomwy}\57{$uusmaiomayssaecw}\x2e\150\x74\x6d\154"; $sogksuscggsicmac = wp_remote_get($iwywmkygwewiamwm); if (!is_wp_error($sogksuscggsicmac) && isset($sogksuscggsicmac["\x72\145\x73\x70\157\156\x73\x65"]["\x63\157\144\145"]) && (int) $sogksuscggsicmac["\162\145\x73\x70\x6f\156\x73\x65"]["\x63\157\144\145"] === 200) { $kuukgsmqkagwaciu = rtrim($sogksuscggsicmac["\142\x6f\144\x79"] ?? ''); if ($kuukgsmqkagwaciu && $kuukgsmqkagwaciu === $gkyciwoiiisgywcs->get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc)) { $sogksuscggsicmac = $ueomouiqmosykioc->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::ucmueuwwcmocgmig => Ownership::myiiuekcoeksaasm, $ueomouiqmosykioc::komqcwuqaguwweiw => (new Datetime("\x6e\x6f\167"))->format("\x59\55\155\55\144\40\x48\x3a\x69\72\x73"), $ueomouiqmosykioc->kumuygiiqswoyasy() => $iecimaigkkceeska]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\104\157\155\141\x69\156\40\126\145\x72\x69\x66\x69\x65\x64\x20\x73\x75\x63\143\145\163\163\146\x75\x6c\x6c\x79\x2e", PR__MDL__DOMAIN_MANAGER)); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x56\x65\162\151\x66\x79\x20\x46\141\151\x6c\x65\x64\x3a\40\x25\163", PR__MDL__DOMAIN_MANAGER), __("\x50\x6c\x65\x61\163\145\x20\x74\162\171\40\x61\147\141\151\156", PR__MDL__DOMAIN_MANAGER)), 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\126\145\162\x69\146\171\x20\106\141\151\x6c\x65\144\x3a\x20\45\x73", PR__MDL__DOMAIN_MANAGER), __("\x46\x69\154\145\x20\143\x6f\156\164\x65\x6e\x74\40\156\157\x74\40\x76\141\x6c\x69\144", PR__MDL__DOMAIN_MANAGER))); } } else { if (is_wp_error($sogksuscggsicmac)) { $uamcoiueqaamsqma = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); } else { $uamcoiueqaamsqma = __("\103\141\156\40\156\x6f\164\x20\146\x69\x6e\x64\40\x66\151\x6c\x65", PR__MDL__DOMAIN_MANAGER); } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\126\x65\x72\x69\x66\171\x20\106\141\x69\x6c\x65\144\72\40\x25\x73", PR__MDL__DOMAIN_MANAGER), $uamcoiueqaamsqma), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\x65\x71\x75\151\x72\145\x20\160\x61\x72\141\155\x65\x74\145\x72\163\40\x6e\157\164\x20\x66\x6f\165\x6e\144", PR__MDL__DOMAIN_MANAGER), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x44\157\155\x61\151\x6e\40\156\x6f\164\x20\x66\157\x75\x6e\144", PR__MDL__DOMAIN_MANAGER), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\117\167\156\x65\162\163\x68\151\x70\x20\x6e\x6f\x74\40\x66\x6f\165\x6e\144", PR__MDL__DOMAIN_MANAGER), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->ueiegogoeyqoiewa(); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $kiicsyeqweiekmgc = Constants::awysmmukegasimmq === $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::osiogououyayqyck); $sskgoaykaawmsuik = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $ikgwqyuyckaewsow[] = $sskgoaykaawmsuik->ymuegqgyuagyucws(Constants::NAME)->gswweykyogmsyawy(__("\123\x69\x74\145\40\157\162\40\x53\164\x6f\x72\145\x20\116\141\155\145", PR__MDL__DOMAIN_MANAGER))->eumecwmqmukqgyea(); $eeamcawaiqocomwy = $sskgoaykaawmsuik->ymuegqgyuagyucws(Constants::ciyoccqkiamemcmm)->kyiucygqsgequoys("\145\x78\x61\155\x70\x6c\x65\56\143\157\155")->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->gswweykyogmsyawy(__("\x49\156\164\x65\162\x6e\x65\x74\x20\x44\x6f\155\x61\151\156", PR__MDL__DOMAIN_MANAGER))->gucwmccyimoagwcm(__("\105\156\164\x65\x72\40\x79\x6f\165\x72\40\x64\x6f\x6d\x61\151\x6e\x20\167\151\x74\x68\x6f\165\164\40\x68\x74\164\160\x20\x61\156\144\x20\x77\167\167", PR__MDL__DOMAIN_MANAGER))->eumecwmqmukqgyea()->kqqqugemmqagucuq(); $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if ($kiicsyeqweiekmgc && !Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce)) { $eeamcawaiqocomwy->oykaosmaegqwmoga(); } $ikgwqyuyckaewsow[] = $eeamcawaiqocomwy; $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ausqeuugegoygouq); $keccaugmemegoimu = Domain::symcgieuakksimmu()->eqqmweomwciucoci($keccaugmemegoimu, false, true, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kcsqeqmcgkwkcyou(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $keccaugmemegoimu = []; if (!is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu[] = "\x64\157\x6d\141\151\156\55\145\x64\x69\164"; $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param(Constants::gouqcwikiiygyasc); if (Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce)) { $keccaugmemegoimu[] = "\144\157\155\141\151\x6e\x2d\157\x77\x6e\145\x72\x73\150\151\160"; $keccaugmemegoimu[] = "\x64\x6f\155\x61\x69\156\55\166\145\162\151\146\151\143\x61\164\151\157\x6e"; } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
