<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c839c5a069c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Model; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\DomainManager\Backlink\Model as Backlink; use WP_Error; use WP_REST_Request; class Domain extends Model { const aemeeukyaaokioui = 'permission'; const wygegsqueakqiccy = 'backlink' . Constants::mswocgcucqoaesaa; const kwouyaaaeiuuquis = 'purchase' . Constants::mswocgcucqoaesaa; const ogqcgemayqiaucag = Constants::ocwsuwyiiasigqaa . Constants::mswocgcucqoaesaa; const geseccqgwqkukyuk = 'ownership' . Constants::mswocgcucqoaesaa; const muckogockysqwceq = 32; const yqkomaiikewyeges = 'blocked'; const ycaauyuekyyiuosk = 'violated'; const wyeieyscswyiskcw = 'allowed'; const qyywsyikosmsacgu = 'not_allowed'; const NOT_SPECIFIED = 'not_specified'; public function register() { $this->muuwuqssqkaieqge(__('Domains', PR__MDL__DOMAIN_MANAGER))->guiaswksukmgageq(__('Domain', PR__MDL__DOMAIN_MANAGER))->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->uaywwyimkgwyqwya([Constants::yiuwgggacagyeqmo => 1]); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); $this->swsaakqseuaacagq(Constants::emsskyeoaqokwsoa, [$this, 'yeuyyckseoiokmmm']); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::NAME)->qcqeqimisiisswky()->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false)->gswweykyogmsyawy(__('Domain Name', PR__MDL__DOMAIN_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::ciyoccqkiamemcmm)->qcqeqimisiisswky()->gswweykyogmsyawy(__('Domain Address', PR__MDL__DOMAIN_MANAGER))->eccqsggkcosmqumc()->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { if ($this->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw) || $this->qcaekwgmiswccowk(Constants::weiosaewqequuyuq)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($eqgoocgaqwqcimie, "https://{$eqgoocgaqwqcimie}"); } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::igswcauwsgmeougs)->gswweykyogmsyawy(__('API Key', PR__MDL__DOMAIN_MANAGER))->acceqyqygswoecwe(self::muckogockysqwceq)->aguakyuusmksagai()->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->kesomeowemmyygey(1, Constants::eqewsqmqmsiocaeg, __('Active', PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(2, self::ycaauyuekyyiuosk, __('Violated', PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(3, self::yqkomaiikewyeges, __('Blocked', PR__MDL__DOMAIN_MANAGER))->gswweykyogmsyawy(__('Status', PR__MDL__DOMAIN_MANAGER))->qassieeyqwaysucq())->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(self::aemeeukyaaokioui)->kesomeowemmyygey(1, self::NOT_SPECIFIED, __('Not Specified', PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(2, self::qyywsyikosmsacgu, __('Not Allowed', PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(3, self::wyeieyscswyiskcw, __('Allowed', PR__MDL__DOMAIN_MANAGER))->gswweykyogmsyawy(__('Permission', PR__MDL__DOMAIN_MANAGER))->qassieeyqwaysucq())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::geseccqgwqkukyuk)->gswweykyogmsyawy(__('Ownerships', PR__MDL__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Ownership::class))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::wygegsqueakqiccy)->gswweykyogmsyawy(__('Backlinks', PR__MDL__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Backlink::class))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->qcqeqimisiisswky()->ckmqkgwcusyaegmm()->uwmyqckcyamwaiww(Component::class)->kkeymosoimmgsaug()->gswweykyogmsyawy(__('Assigned Components', PR__MDL__DOMAIN_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::kwouyaaaeiuuquis)->gswweykyogmsyawy(__('Purchases', PR__MDL__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Purchase::class))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__('Created At', PR__MDL__DOMAIN_MANAGER))->qcqeqimisiisswky()); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::NAME))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::ciywsqoeiymemsys)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::aemeeukyaaokioui)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::ciyoccqkiamemcmm)->kqqqugemmqagucuq())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::ogqcgemayqiaucag)->oikgogcweiiaocka()->ugquamoakekwyiqg(Component::class)); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $pkyyagewkiyckmwy = ''; if ($mksyucucyswaukig) { if (is_numeric($mksyucucyswaukig)) { $mksyucucyswaukig = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($mksyucucyswaukig); } $mokawwccycoiqeka = $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::ciyoccqkiamemcmm); if ($mokawwccycoiqeka) { $pkyyagewkiyckmwy = sprintf('%s (%s)', $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::NAME), $mokawwccycoiqeka); } } return $pkyyagewkiyckmwy; } private function mqwogqieoumeoocw() : string { return $this->caokeucsksukesyo()->owgcciayoweymuws()->ycwmswocisskwuwg(self::muckogockysqwceq); } public function yeuyyckseoiokmmm($icwicymcioeyeyek, $aokagokqyuysuksm) { if (empty($aokagokqyuysuksm) && empty($icwicymcioeyeyek[Constants::igswcauwsgmeougs])) { $icwicymcioeyeyek[Constants::igswcauwsgmeougs] = $this->mqwogqieoumeoocw(); } return $icwicymcioeyeyek; } public function smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce) : bool { $yciaosuiyeieceug = false; if ($mokawwccycoiqeka && $mkucggyaiaukqoce) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $aocawoeyuyauccks = Ownership::symcgieuakksimmu()->iekyeyicoyyawomk(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ukamowomoeiweqky = $aocawoeyuyauccks->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce)), $eqwoegegiamegqsm->megqywqeuquawkim(Ownership::qkmqmaeuyokqgemg, $mokawwccycoiqeka), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ucmueuwwcmocgmig, Ownership::myiiuekcoeksaasm)]); if (!$ukamowomoeiweqky) { $ukamowomoeiweqky = $aocawoeyuyauccks->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce)), $eqwoegegiamegqsm->megqywqeuquawkim(Ownership::qkmqmaeuyokqgemg, $mokawwccycoiqeka), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ucmueuwwcmocgmig, Ownership::cymeeiwqgosaoaia)]); if ($ukamowomoeiweqky) { $yciaosuiyeieceug = true; } } } return $yciaosuiyeieceug; } public function amogqycocouwaico($mokawwccycoiqeka, $mkucggyaiaukqoce) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $this->mwyqswsaeeewsosm($mokawwccycoiqeka); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, Constants::NAME); if ($aokagokqyuysuksm && $ymqmyyeuycgmigyo && $mkucggyaiaukqoce) { if ($this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { $icwicymcioeyeyek = [$this->kumuygiiqswoyasy() => $aokagokqyuysuksm, Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]; $ysyswymameciiyce = false; $eeamcawaiqocomwy = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, Constants::ciyoccqkiamemcmm); if ($eeamcawaiqocomwy) { $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm] = $eeamcawaiqocomwy; $ysyswymameciiyce = true; } if ($ysyswymameciiyce && !$this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Sorry you can not update your domain address.', PR__MDL__DOMAIN_MANAGER), 400); } else { $sogksuscggsicmac = $this->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (!is_wp_error($sogksuscggsicmac)) { $sogksuscggsicmac = $icwicymcioeyeyek; } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('You dont have permission to edit this domain.', PR__MDL__DOMAIN_MANAGER), 401); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Required fields not passed.', PR__MDL__DOMAIN_MANAGER), 400); } return $sogksuscggsicmac; } public function kmuykuaakicwsocs($icwicymcioeyeyek, $miowmmgaiagcuyoo = null) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $sogksuscggsicmac = null; $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::NAME); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::ciyoccqkiamemcmm); if ($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo) { if (!preg_match('#^http(s)?://#', $eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = "https://{$eqgoocgaqwqcimie}"; } if ($cwaqscoiqkokyase->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { $gmqiuuqqkwakoiiu = true; $eqgoocgaqwqcimie = untrailingslashit(preg_replace('/^w?w?w?\\./', '', $cwaqscoiqkokyase->mkcmkkskeeaskowy($eqgoocgaqwqcimie))); $mokawwccycoiqeka = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($eqgoocgaqwqcimie, Constants::ciyoccqkiamemcmm); if (!$mokawwccycoiqeka) { $sogksuscggsicmac = $this->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); $kigowwqauiumummw = !is_wp_error($sogksuscggsicmac); if ($kigowwqauiumummw) { $mokawwccycoiqeka = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; } } else { $gmqiuuqqkwakoiiu = false; $kigowwqauiumummw = true; } if ($kigowwqauiumummw) { $wqykqusigegasqeg = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, $this->kumuygiiqswoyasy()); $ukamowomoeiweqky = null; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); if ($miowmmgaiagcuyoo) { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($miowmmgaiagcuyoo); if (!$gmqiuuqqkwakoiiu) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ukamowomoeiweqky = $ueomouiqmosykioc->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($ueomouiqmosykioc::qkmqmaeuyokqgemg, $wqykqusigegasqeg)]); } if (!$ukamowomoeiweqky) { $sogksuscggsicmac = $ueomouiqmosykioc->ocsyiyiasyiwmuuc($wqykqusigegasqeg, $ycoeoaakqyskgykq); } } if (!isset($sogksuscggsicmac) || !is_wp_error($sogksuscggsicmac)) { $sogksuscggsicmac = [Constants::gouqcwikiiygyasc => $wqykqusigegasqeg, Constants::vswoiouoaykswgym => 'domain_added', Constants::ckmqoekmugkggeym => $mokawwccycoiqeka, Constants::ciywsqoeiymemsys => 200, Constants::eoskkkieowogacws => sprintf('%s<br/>%s', __('Domain successfully added.', PR__MDL__DOMAIN_MANAGER), __('Please verify domain.', PR__MDL__DOMAIN_MANAGER))]; } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Entered domain is not valid.', PR__MDL__DOMAIN_MANAGER), 400); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $sogksuscggsicmac; } public function isgemoumsseimwio($mokawwccycoiqeka) : bool { $gkioossaaiumqqsq = $this->iekyeyicoyyawomk(); return $gkioossaaiumqqsq->exists($gkioossaaiumqqsq->oyqumwgacamysiga(self::kwouyaaaeiuuquis, $mokawwccycoiqeka)); } public function aokkqqekiykiikki(WP_REST_Request $aqmwamyiwgeeymqa, bool $mwiwqcqqeoiygwia = true) : bool { $iakkeikwceeomgyq = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if ($mwiwqcqqeoiygwia) { $mokawwccycoiqeka = $this->aqiwcawmimkygoau($aqmwamyiwgeeymqa->get_param(Constants::igswcauwsgmeougs), $iakkeikwceeomgyq); } else { $mokawwccycoiqeka = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::ciyoccqkiamemcmm); } $ksaameoqigiaoigg = false; if ($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka)) { $ksaameoqigiaoigg = $this->koeimwecyiiqgesk($mokawwccycoiqeka); } return $ksaameoqigiaoigg; } public function mwiwqcqqeoiygwia($esuksqieigiqcaie, $mokawwccycoiqeka) { if ($mokawwccycoiqeka) { $keccaugmemegoimu = $this->aqiwcawmimkygoau($esuksqieigiqcaie, $mokawwccycoiqeka); if (!is_wp_error($keccaugmemegoimu)) { if ($keccaugmemegoimu) { $keccaugmemegoimu = __('API Key is valid.', PR__MDL__DOMAIN_MANAGER); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Can not found domain, please get and api key by guide.', PR__MDL__DOMAIN_MANAGER), 404); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Request origin not detected.', PR__MDL__DOMAIN_MANAGER), 400); } return $keccaugmemegoimu; } public function koeimwecyiiqgesk($mokawwccycoiqeka, ?WP_REST_Request $aqmwamyiwgeeymqa = null) : bool { $ksaameoqigiaoigg = false; switch ($this->ogegcqqcukiaqscy(self::aemeeukyaaokioui, $mokawwccycoiqeka, self::NOT_SPECIFIED)) { case self::wyeieyscswyiskcw: $ksaameoqigiaoigg = true; break; case self::NOT_SPECIFIED: default: $gwgucoaaqcwwciqq = $this->waecsyqmwascmqoa($mokawwccycoiqeka, Constants::ciyoccqkiamemcmm); if ($gwgucoaaqcwwciqq && $this->isgemoumsseimwio($mokawwccycoiqeka) && $this->ucegqiqcwyqmsuwm($gwgucoaaqcwwciqq, $aqmwamyiwgeeymqa)) { $qoowakyqgwcscuss = self::wyeieyscswyiskcw; } else { $qoowakyqgwcscuss = self::qyywsyikosmsacgu; } $this->gssiscqyqsacmeca()->wqikesawekycweoi($mokawwccycoiqeka, [self::aemeeukyaaokioui => $qoowakyqgwcscuss], true); break; } return $ksaameoqigiaoigg; } public function ucegqiqcwyqmsuwm($iakkeikwceeomgyq, ?WP_REST_Request $aqmwamyiwgeeymqa = null) : bool { $ksaameoqigiaoigg = false; $yywmssikcykmsiqi = ['ir']; if (in_array(strtolower(pathinfo($iakkeikwceeomgyq, PATHINFO_EXTENSION)), $yywmssikcykmsiqi)) { $ksaameoqigiaoigg = true; } else { if ($aqmwamyiwgeeymqa) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ssamkiocukucqkwg($aqmwamyiwgeeymqa->get_param('ips'), $yywmssikcykmsiqi); } } return $ksaameoqigiaoigg; } public function eqqmweomwciucoci($mkucggyaiaukqoce, $kqwygogeauwwyoca = false, $goocueskqsmqagii = true, $suaemuyiacqyugsm = 1, $weyoqgcesqgeusiu = 10) : array { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); try { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $uoomaookgsyciacm = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq)]; if ($kqwygogeauwwyoca) { $uoomaookgsyciacm[] = $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ucmueuwwcmocgmig, [Ownership::myiiuekcoeksaasm, Ownership::gogsqoacoimiocqg]); } $oysoyeaucuawyaky = Ownership::symcgieuakksimmu()->iekyeyicoyyawomk()->ssiyoimagsskwsoi($uoomaookgsyciacm, Ownership::qkmqmaeuyokqgemg); $siykeiywomwwuoiw = $this->iekyeyicoyyawomk()->wkmkqaiwuqouweye($this->kumuygiiqswoyasy(), $oysoyeaucuawyaky); if ($goocueskqsmqagii) { $wqogggcaamgeiwew = $this->iekyeyicoyyawomk()->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $suaemuyiacqyugsm, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu]); } else { $wqogggcaamgeiwew = $this->cwgkcyyaymmsomqa($this->iekyeyicoyyawomk()->iiqauwkoiguyeawu($siykeiywomwwuoiw)); } } catch (Exception $wgaoewqkwgomoaai) { $wqogggcaamgeiwew = []; } return $wqogggcaamgeiwew; } public function aqiwcawmimkygoau($esuksqieigiqcaie, $gwgucoaaqcwwciqq = false) { if (self::muckogockysqwceq === strlen($esuksqieigiqcaie)) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igswcauwsgmeougs, $esuksqieigiqcaie); if ($gwgucoaaqcwwciqq !== false) { $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciyoccqkiamemcmm, $gwgucoaaqcwwciqq); } $sogksuscggsicmac = $this->iekyeyicoyyawomk()->oqomcmyuuakigusk($gqgemcmoicmgaqie); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Your API Key is not valid.', PR__MDL__DOMAIN_MANAGER), 400); } return $sogksuscggsicmac; } public function gwkkkwyoomgsiaou($gwgucoaaqcwwciqq) { return $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($gwgucoaaqcwwciqq, Constants::ciyoccqkiamemcmm); } }
